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

        // line 3
        echo " ";
        $this->loadTemplate("header.html.twig", "contact/contact.html.twig", 3)->display($context);
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "    </body>
";
        // line 149
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <head>
   
         ";
        // line 14
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 30
        echo "    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('section', $context, $blocks);
        // line 110
        echo "        <!-- Contact End -->
       ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/animate-heading.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/meanmenu.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/et-line-icon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/css/responsive.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 33
        echo "        <div class=\"wrapper\">
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
                                                ";
        // line 65
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
                            <form id=\"contact-form\" action=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendEmail");
        echo "\" method=\"post\" role=\"form\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Sujet *\">
                                            <textarea name=\"message\" id=\"message\" cols=\"15\" rows=\"4\" placeholder=\"Message *\"></textarea>
                                        </div>
                                    </div>
                                    <input type=\"submit\" name=\"send\" value=\"Envoyer\">
                            </form>
                        </div>
                    </div>
                    ";
        // line 105
        echo "                </div>
            </div>
            </section>
        </div>       
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/vendor/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/animate-heading.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact/js/jquery.mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
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
        // line 144
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 144,  323 => 124,  319 => 123,  315 => 122,  311 => 121,  307 => 120,  303 => 119,  299 => 118,  295 => 117,  291 => 116,  287 => 115,  283 => 114,  279 => 113,  274 => 112,  265 => 111,  251 => 105,  237 => 83,  217 => 65,  185 => 33,  176 => 32,  164 => 28,  160 => 27,  156 => 26,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  111 => 15,  102 => 14,  92 => 146,  90 => 111,  87 => 110,  85 => 32,  81 => 30,  78 => 14,  74 => 5,  65 => 4,  53 => 149,  50 => 147,  48 => 4,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# <!doctype html>
<html class=\"no-js\" lang=\"en\"> #}
 {% include 'header.html.twig' %}
{% block body %}
    <head>
   
         {# <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('logo.ico')}}\" />
        <title>
        {% block title %}
         Enablis
        {% endblock %}
        </title> #}
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
        <div class=\"wrapper\">
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
                            <form id=\"contact-form\" action=\"{{path('sendEmail')}}\" method=\"post\" role=\"form\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Sujet *\">
                                            <textarea name=\"message\" id=\"message\" cols=\"15\" rows=\"4\" placeholder=\"Message *\"></textarea>
                                        </div>
                                    </div>
                                    <input type=\"submit\" name=\"send\" value=\"Envoyer\">
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
        </div>       
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
{# </html> #}


", "contact/contact.html.twig", "/var/www/project/Moltrant-master/templates/contact/contact.html.twig");
    }
}
