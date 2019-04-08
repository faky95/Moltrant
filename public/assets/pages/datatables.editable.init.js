var newId = '',
    responseServer = 0,
    mooyKan = ''
;

function requetesAjax(_type, _url, _dataType, _data, callback) {
    $.ajax({
        type: _type,
        url: _url,
        dataType: _dataType,
        data: _data,
        async: false,
        success: callback,
    });
}

(function($) {

    'use strict';

    var EditableTable = {

        options: {
			addButton: '#addToTable',
            table: '#datatable-editable',
            dialog: {
                wrapper: '#dialog',
                cancelButton: '#dialogCancel',
                confirmButton: '#dialogConfirm',
            }
        },

        initialize: function() {
            this
                .setVars()
                .build()
                .events();
        },

        setVars: function() {
			this.$table = $(this.options.table);
			this.$addButton	= $( this.options.addButton );
			this.$nomChamps = this.$table.data('leschamps').replace(/ /g, '').split(",");

            // dialog
            this.dialog = {};
            this.dialog.$wrapper = $(this.options.dialog.wrapper);
            this.dialog.$cancel = $(this.options.dialog.cancelButton);
            this.dialog.$confirm = $(this.options.dialog.confirmButton);

            return this;
        },

        build: function() {
            this.datatable = this.$table.DataTable({
                dom: "<'row'<'col-sm-offset-8 col-sm-4 text-right'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-xs-12 col-sm-7 col-sm-offset-5 text-right'p>>",
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                "oLanguage": {
                    "oPaginate": {
                        "sFirst": "Premier",
                        "sLast": "Dérnier",
                        "sNext": "Suivant",
                        "sPrevious": "Précedent",
                    },
                    "sSearch": "Recherche:",
                    "sEmptyTable": "Aucune donnée disponible",
                    "sInfo": "affichage de _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty": "Aucune donnée disponible",
                    "sInfoFiltered": "(Recherché sur _MAX_ éléments au total)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "sLengthMenu": "Afficher par _MENU_ éléments",
                    "loadingRecords": "Chargement...",
                    "processing": "procéssus...",
                    "sZeroRecords": "Aucun résultat trouvé",
                },
                "iDisplayLength": 10,
                "lengthChange": false,
                "info" : false,
            });

            window.dt = this.datatable;

            return this;
        },

        events: function() {
            var _self = this;

            this.$table
                .on('click', 'a.save-row', function(e) {
                    e.preventDefault();

                    _self.rowSave($(this).closest('tr'), (typeof $(this).data('id') !== 'undefined') ? $(this).data('id') : null);
                })
                .on('click', 'a.cancel-row', function(e) {
                    e.preventDefault();

                    _self.rowCancel($(this).closest('tr'));
                })
                .on('click', 'a.edit-row', function(e) {
                    e.preventDefault();

                    _self.rowEdit($(this).closest('tr'));
                })
                .on('click', 'a.remove-row', function(e) {
                    e.preventDefault();

                    var $row = $(this).closest('tr'),
                        id = $(this).data('id');

                    $.magnificPopup.open({
                        items: {
                            src: _self.options.dialog.wrapper,
                            type: 'inline'
                        },
                        preloader: false,
                        modal: true,
                        callbacks: {
                            change: function() {
                                _self.dialog.$confirm.on('click', function(e) {
                                    e.preventDefault();

                                    requetesAjax("POST", "/user/supprimer", "JSON", {id: id}, function(data){
                                        if (data.error) {
                                            alert(data.message);
                                        } else {
                                            responseServer =  parseInt(data.response);
                                        }
                                    });

                                    if (responseServer == 200) {
                                        _self.rowRemove($row);
                                        $.magnificPopup.close();
                                    }
                                });
                            },
                            close: function() {
                                _self.dialog.$confirm.off('click');
                            }
                        }
                    });
				});
			
			this.$addButton.on( 'click', function(e) {
				e.preventDefault();
				_self.rowAdd();
			});

            this.dialog.$cancel.on('click', function(e) {
                e.preventDefault();
                $.magnificPopup.close();
            });

            return this;
        },

        // ==========================================================================================
		// ROW FUNCTIONS
		// ==========================================================================================
		rowAdd: function() {
            this.$addButton.attr({ 'disabled': 'disabled' });

            var actions,
                data,
                $row,
                nbreInput = [];

            actions = [
                '<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>',
                '<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
                '<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
                '<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
            ].join(' ');

            for (let i = 0; i < this.$nomChamps.length; i++) {
                nbreInput.push('');
            }

            nbreInput.push(actions);

            data = this.datatable.row.add(nbreInput);
            $row = this.datatable.row(data[0]).nodes().to$();

            $row
                .addClass('adding')
                .find('td:last')
                .addClass('actions');

            this.rowEdit($row);

            this.datatable.order([0, 'asc']).draw(); // always show fields
        },
		
		rowCancel: function($row) {
            var $actions,
                data;

            data = this.datatable.row($row.get(0)).data();
            this.datatable.row($row.get(0)).data(data);

            $actions = $row.find('td.actions');
            if ($actions.get(0)) {
                this.rowSetActionsDefault($row);
            }

            this.datatable.draw();
        },

        rowEdit: function($row) {
            var _self = this,
                nomChamps = this.$nomChamps,
                data;

            data = this.datatable.row($row.get(0)).data();

            $row.children('td').each(function(i) {
                var $this = $(this);

                if ($this.hasClass('actions')) {
                    _self.rowSetActionsEditing($row);
                } else if(!$this.hasClass('not-editing')) {
                    $this.html('<input type="text" name="' + nomChamps[i] + '" class="form-control input-block" value="' + data[i] + '"/>');
                }
            });
        },

        rowSave: function($row, id) {
            var _self = this,
                $actions,
                donnees = { id: id },
                values = [];

            values = $row.find('td').map(function() {
                var $this = $(this),
                    val;

                if ($this.hasClass('actions')) {
                    _self.rowSetActionsDefault($row);
                    return _self.datatable.cell(this).data();
                } else {
                    if ($this.hasClass('etat')) {
                        if ($this.find('option:selected').val() == 'Actif') {
                            $this.closest('td').addClass('text-vert-sonatel');
                            $this.closest('td').removeClass('text-orange-sonatel');
                        } else {
                            $this.closest('td').addClass('text-orange-sonatel');
                            $this.closest('td').removeClass('text-vert-sonatel');
                        }
                        val = $.trim($this.find('option:selected').val());
                        donnees[$this.find('select').attr('name')] = val;
                        return val;
                    } else if(!$this.hasClass('not-editing')) {
                        val = $.trim($this.find('input').val());
                        donnees[$this.find('input').attr('name')] = val;
                        return val;
                    } else {
                        return $this.text();
                    }
                }
            });

            requetesAjax("POST", "/user/new", "JSON", donnees, function(data) {
                if (data.error) {
                    alert(data.message);
                } else {
                    newId =  data.id;
                }
            });

            if ( newId !== '' ) {
                values[values.length - 1] = '<a href="#" class="hidden on-editing save-row" data-id="' + newId + '"><i class="fa fa-save"></i></a>'+
                    '<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>'+
                    '<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>'+
                    '<a href="#" class="on-default remove-row" data-id="' + newId + '"><i class="fa fa-trash-o"></i></a>'
                ;
                this.datatable.row($row.get(0)).data(values);

                $actions = $row.find('td.actions');
                if ($actions.get(0)) {
                    this.rowSetActionsDefault($row);
                }

                this.datatable.draw();
            }
        },

        rowRemove: function($row) {
            this.datatable.row($row.get(0)).remove().draw();
        },

        rowSetActionsEditing: function($row) {
            $row.find('.on-editing').removeClass('hidden');
            $row.find('.on-default').addClass('hidden');
        },

        rowSetActionsDefault: function($row) {
            $row.find('.on-editing').addClass('hidden');
            $row.find('.on-default').removeClass('hidden');
        }

    };

    $(function() {
        EditableTable.initialize();
    });

}).apply(this, [jQuery]);