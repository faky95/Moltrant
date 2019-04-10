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

/* contact/contact.html.twig */
class __TwigTemplate_0cabb9df030f63a89e003ac67fbe21b4200db1e851512198a15c1f19aa40fd1d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'section' => [$this, 'block_section'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <head>
         <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.ico"), "html", null, true);
        echo "\" />
        <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        </title>
        ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('section', $context, $blocks);
        // line 113
        echo "        <!-- Contact End -->
       ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "         Enablis
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/animate-heading.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/meanmenu.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/et-line-icon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/responsive.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 31
        echo "        <!-- Contact Start -->
        
            <section class=\"contact-area pt-120 pb-83\"style=\"margin-top:-100px;height:700px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"\">
                        <div class=\"contact-info\">
                            <h2>Contactez-Nous</h2>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"single-info mb-30\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-map-pin\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Adresse :</h3>
                                            <p>09, Rue Jean Mermoz, 3e étage, Dakar Plateau, Dakar, Senegal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"single-info\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-phone\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Telephone :</h3>
                                            <p> +221 33-822-20-04 </br>
                                                ";
        // line 62
        echo "                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"single-info\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-envelope\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Mail :</h3>
                                            <p>info.senegal@enablis.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"touch\">
                            <h2>Contact</h2>
                            <form id=\"contact-form\" action=\"\" method=\"post\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom *\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email *\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Sujet *\">
                                            <textarea name=\"message\" id=\"message\" cols=\"15\" rows=\"4\" placeholder=\"Message *\"></textarea>
                                        </div>
                                    </div>
                                    <input class=\"btn-primary\" type=\"submit\" value=\"Envoyer\" style=\"color:white;\">
                                </form>
                        </div>
                    </div>
                    ";
        // line 108
        echo "                </div>
            </div>
            </section>
       
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/vendor/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/animate-heading.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM \"></script> 
        <script type=\"text/javascript\">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    styles: [{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#e9e9e9\"},{\"lightness\":17}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":20}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":21}]},{\"featureType\":\"poi.park\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#dedede\"},{\"lightness\":21}]},{\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#333333\"},{\"lightness\":40}]},{\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f2f2f2\"},{\"lightness\":19}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":17},{\"weight\":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  378 => 147,  355 => 127,  351 => 126,  347 => 125,  343 => 124,  339 => 123,  335 => 122,  331 => 121,  327 => 120,  323 => 119,  319 => 118,  315 => 117,  311 => 116,  306 => 115,  297 => 114,  283 => 108,  246 => 62,  215 => 31,  206 => 30,  194 => 26,  190 => 25,  186 => 24,  182 => 23,  178 => 22,  174 => 21,  170 => 20,  166 => 19,  162 => 18,  158 => 17,  154 => 16,  150 => 15,  146 => 14,  141 => 13,  132 => 12,  121 => 9,  112 => 8,  102 => 149,  100 => 114,  97 => 113,  95 => 30,  91 => 28,  89 => 12,  86 => 11,  84 => 8,  79 => 6,  75 => 4,  66 => 3,  52 => 150,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">
{% block body %}
    <head>
         <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('logo.ico')}}\" />
        <title>
        {% block title %}
         Enablis
        {% endblock %}
        </title>
        {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/animate.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/animate-heading.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/reset.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/meanmenu.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/magnific-popup.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/owl.carousel.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/et-line-icon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/ionicons.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/material-design-iconic-font.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('contact/css/responsive.css')}}\">
        <script src=\"{{ asset('contact/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block section %}
        <!-- Contact Start -->
        
            <section class=\"contact-area pt-120 pb-83\"style=\"margin-top:-100px;height:700px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"\">
                        <div class=\"contact-info\">
                            <h2>Contactez-Nous</h2>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12\">
                                <div class=\"single-info mb-30\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-map-pin\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Adresse :</h3>
                                            <p>09, Rue Jean Mermoz, 3e étage, Dakar Plateau, Dakar, Senegal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"single-info\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-phone\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Telephone :</h3>
                                            <p> +221 33-822-20-04 </br>
                                                {# +221 77-936-46-51 </br>
                                                +221 76-272-06-37 #}
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"single-info\">
                                    <div class=\"info-icon\">
                                        <i class=\"icon-envelope\"></i>
                                    </div>
                                    <div class=\"info-content\">
                                            <h3>Mail :</h3>
                                            <p>info.senegal@enablis.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"touch\">
                            <h2>Contact</h2>
                            <form id=\"contact-form\" action=\"\" method=\"post\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom *\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email *\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Sujet *\">
                                            <textarea name=\"message\" id=\"message\" cols=\"15\" rows=\"4\" placeholder=\"Message *\"></textarea>
                                        </div>
                                    </div>
                                    <input class=\"btn-primary\" type=\"submit\" value=\"Envoyer\" style=\"color:white;\">
                                </form>
                        </div>
                    </div>
                    {# <div class=\"col-md-6\">
                        <div class=\"map-area\">
                                <!-- google-map-area start -->
                                <div class=\"google-map-area\">
                                    <!--  Map Section -->
                                    <div id=\"contacts\" class=\"map-area\">
                                        <div id=\"googleMap\" style=\"width:100%;height:633px;\"></div>
                                    </div>
                                </div>
                            </div>
                    </div> #}
                </div>
            </div>
            </section>
       
        {% endblock %}
        <!-- Contact End -->
       {% block javascripts %}
        <script src=\"{{ asset('contact/js/vendor/jquery-1.12.0.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/jquery.meanmenu.js')}}\"></script>
        <script src=\"{{ asset('contact/js/jquery.magnific-popup.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/isotope.pkgd.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/imagesloaded.pkgd.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/jquery.counterup.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/waypoints.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/ajax-mail.js')}}\"></script>
        <script src=\"{{ asset('contact/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{ asset('contact/js/animate-heading.js')}}\"></script>
        <script src=\"{{ asset('contact/js/jquery.mb.YTPlayer.js')}}\"></script>
        <script src=\"{{ asset('contact/js/plugins.js')}}\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM \"></script> 
        <script type=\"text/javascript\">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    styles: [{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#e9e9e9\"},{\"lightness\":17}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":20}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":21}]},{\"featureType\":\"poi.park\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#dedede\"},{\"lightness\":21}]},{\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#333333\"},{\"lightness\":40}]},{\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f2f2f2\"},{\"lightness\":19}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":17},{\"weight\":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src=\"{{ asset('contact/js/main.js')}}\"></script>
        {% endblock %}
        {% endblock %}
    </body>
</html>


", "contact/contact.html.twig", "/home/faky/Documents/Moltrant/templates/contact/contact.html.twig");
    }
}
