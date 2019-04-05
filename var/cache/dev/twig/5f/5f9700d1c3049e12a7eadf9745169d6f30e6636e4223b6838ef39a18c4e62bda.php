<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* service/list.html.twig */
class __TwigTemplate_64781e0d0cab89db3176edf304e1bad6660e879949f5d79f35c054645e970d52 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("serviceLayout.html.twig", "service/list.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "serviceLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 12
        $this->displayBlock('section', $context, $blocks);
        // line 123
        $this->displayBlock('footer', $context, $blocks);
        // line 126
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 13
        echo "

        <div class=\"wrapper\">
            <div class=\"container\">

                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h4 class=\"page-title\"> Liste Enablis Services</h4>
                    </div>
                </div>

                <div class=\"panel\">

                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"m-b-30\">
                                    <button id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Add <i class=\"fa fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                        <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                            <thead>
                                <tr>
                                    <th>Nom Service</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 44
            echo "                            <tbody>
                                <tr class=\"gradeX\">
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "nomService", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "description", []), "html", null, true);
            echo "</td>
                                    <td class=\"actions\">
                                        <a href=\"#\" class=\"on-default show-row\"><i class=\"fa fa-eye\"></i></a>
                                        ";
            // line 50
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "                                        <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        ";
            }
            // line 56
            echo "                                    </td>
                                </tr>
                            </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </table>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->




                <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2016 © Moltran.
                            </div>
                            <div class=\"col-xs-6\">
                                <ul class=\"pull-right list-inline m-b-0\">
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Help</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->
            <!-- MODAL -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 124
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 124,  255 => 123,  205 => 60,  196 => 56,  189 => 51,  187 => 50,  181 => 47,  177 => 46,  173 => 44,  169 => 43,  137 => 13,  128 => 12,  116 => 10,  107 => 9,  96 => 126,  94 => 123,  92 => 12,  90 => 9,  81 => 8,  69 => 5,  60 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'serviceLayout.html.twig' %}


{% block title %}
{{parent()}}
{% endblock %}

{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
{% block section %}


        <div class=\"wrapper\">
            <div class=\"container\">

                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h4 class=\"page-title\"> Liste Enablis Services</h4>
                    </div>
                </div>

                <div class=\"panel\">

                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"m-b-30\">
                                    <button id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Add <i class=\"fa fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                        <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                            <thead>
                                <tr>
                                    <th>Nom Service</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            {% for service in services %}
                            <tbody>
                                <tr class=\"gradeX\">
                                    <td>{{service.nomService}}</td>
                                    <td>{{service.description}}</td>
                                    <td class=\"actions\">
                                        <a href=\"#\" class=\"on-default show-row\"><i class=\"fa fa-eye\"></i></a>
                                        {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        {% endif %}
                                    </td>
                                </tr>
                            </tbody>
                            {% endfor %}
                        </table>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->




                <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2016 © Moltran.
                            </div>
                            <div class=\"col-xs-6\">
                                <ul class=\"pull-right list-inline m-b-0\">
                                    <li>
                                        <a href=\"#\">About</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Help</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->
            <!-- MODAL -->
        {# <div id=\"dialog\" class=\"modal-block mfp-hide\">
            <section class=\"panel panel-info panel-color\">
                <header class=\"panel-heading\">
                    <h2 class=\"panel-title\">Are you sure?</h2>
                </header>
                <div class=\"panel-body\">
                    <div class=\"modal-wrapper\">
                        <div class=\"modal-text\">
                            <p>Are you sure that you want to delete this row?</p>
                        </div>
                    </div>

                    <div class=\"row m-t-20\">
                        <div class=\"col-md-12 text-right\">
                            <button id=\"dialogConfirm\" class=\"btn btn-primary waves-effect waves-light\">Confirm</button>
                            <button id=\"dialogCancel\" class=\"btn btn-default waves-effect\">Cancel</button>
                        </div>
                    </div>
                </div>

            </section>
        </div> #}
{% endblock %}
{% block footer %}
{{parent()}}
{% endblock %}

{% endblock %}
", "service/list.html.twig", "/home/faky/Documents/EnablisMoltran/templates/service/list.html.twig");
    }
}
