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

/* service/header.html.twig */
class __TwigTemplate_ce7bac92aa92de8c060b3d6f2013fcf1b57742dfd2d2615e733af5285b9b5ce9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/header.html.twig", 1);
        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo " <header class=\"top\">
\t\t\t<div class=\"header-area header-sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.jpg"), "html", null, true);
        echo "\" alt=\"enablis\" style=\"width:60px;\"/></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-10 col-xs-12\">
                            <div class=\"content-wrapper\">
                                <!-- Main Menu Start -->
                                <div class=\"main-menu text-right\">
                                    <nav>
                                        <ul>
                                            <li><a href=\"event.html\">Forum</a>
                                                ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                                                <ul>
                                                    <li><a href=\"gallery.html\">Espace Admin</a></li>
                                                </ul>
                                                ";
        }
        // line 24
        echo "                                            </li>
                                            <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeService");
        echo "\">Services Enablis</a>
                                                <ul>
                                                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeService");
        echo "\">Liste des Services</a></li>
                                                    <li><a href=\"article-details.html\">Demander un Service</a></li>
                                                    <li><a href=\"gallery.html\">Inscription au Programme Enabler</a></li>
                                                    <li><a href=\"gallery.html\">Liste des Coachs</a></li>
                                                    <li><a href=\"gallery.html\">Liste des Enablers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"gallery.html\">Mon Accompagnement</a>
                                    
                                                <ul>
                                                    <li><a href=\"gallery.html\">Rapport du diagnostic</a></li>
                                                    <li><a href=\"mentor-details.html\">Rapport du plan de developpement</a></li>
                                                    <li><a href=\"gallery.html\">Mes Participations</a></li>
                                                    <li><a href=\"gallery.html\">Services Payants</a></li>
                                                    <li><a href=\"gallery.html\">Mes Coachs, mentors, enablers</a></li>
                                                </ul>
                                                
                                            </li>
                                             <li><a href=\"\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", []), "html", null, true);
        echo "</a>
                                             ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 47
            echo "                                                <ul>
                                                    <li><a href=\"gallery.html\">Espace Coach</a></li>
                                                </ul>
                                                ";
        }
        // line 51
        echo "                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class=\"mobile-menu hidden-lg hidden-md\"></div>
                                <!-- Main Menu End -->
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 hidden-sm hidden-xs\">
\t\t\t\t\t\t    <div class=\"header-social text-right\">

\t\t\t\t\t\t        <ul>
\t\t\t\t\t\t            <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"> Déconnexion</a></li>
\t\t\t\t\t\t           <!--  <li><a href=\"index.html\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-twitter\"></i></a></li> -->
\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  137 => 51,  131 => 47,  129 => 46,  125 => 45,  104 => 27,  99 => 25,  96 => 24,  90 => 20,  88 => 19,  73 => 9,  65 => 3,  56 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %}
 <header class=\"top\">
\t\t\t<div class=\"header-area header-sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\"><img src=\"{{asset('img/logo/logo.jpg')}}\" alt=\"enablis\" style=\"width:60px;\"/></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-10 col-xs-12\">
                            <div class=\"content-wrapper\">
                                <!-- Main Menu Start -->
                                <div class=\"main-menu text-right\">
                                    <nav>
                                        <ul>
                                            <li><a href=\"event.html\">Forum</a>
                                                {% if is_granted('ROLE_ADMIN') %}
                                                <ul>
                                                    <li><a href=\"gallery.html\">Espace Admin</a></li>
                                                </ul>
                                                {% endif %}
                                            </li>
                                            <li><a href=\"{{path('listeService')}}\">Services Enablis</a>
                                                <ul>
                                                    <li><a href=\"{{path('listeService')}}\">Liste des Services</a></li>
                                                    <li><a href=\"article-details.html\">Demander un Service</a></li>
                                                    <li><a href=\"gallery.html\">Inscription au Programme Enabler</a></li>
                                                    <li><a href=\"gallery.html\">Liste des Coachs</a></li>
                                                    <li><a href=\"gallery.html\">Liste des Enablers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"gallery.html\">Mon Accompagnement</a>
                                    
                                                <ul>
                                                    <li><a href=\"gallery.html\">Rapport du diagnostic</a></li>
                                                    <li><a href=\"mentor-details.html\">Rapport du plan de developpement</a></li>
                                                    <li><a href=\"gallery.html\">Mes Participations</a></li>
                                                    <li><a href=\"gallery.html\">Services Payants</a></li>
                                                    <li><a href=\"gallery.html\">Mes Coachs, mentors, enablers</a></li>
                                                </ul>
                                                
                                            </li>
                                             <li><a href=\"\">{{ app.user}}</a>
                                             {% if is_granted('ROLE_COACH') %}
                                                <ul>
                                                    <li><a href=\"gallery.html\">Espace Coach</a></li>
                                                </ul>
                                                {% endif %}
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class=\"mobile-menu hidden-lg hidden-md\"></div>
                                <!-- Main Menu End -->
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 hidden-sm hidden-xs\">
\t\t\t\t\t\t    <div class=\"header-social text-right\">

\t\t\t\t\t\t        <ul>
\t\t\t\t\t\t            <li><a href=\"{{ path('fos_user_security_logout') }}\"> Déconnexion</a></li>
\t\t\t\t\t\t           <!--  <li><a href=\"index.html\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-twitter\"></i></a></li> -->
\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
{% endblock %}", "service/header.html.twig", "/home/faky/Bureau/IntranetEnablis/templates/service/header.html.twig");
    }
}
