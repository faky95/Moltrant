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

/* service/detail.html.twig */
class __TwigTemplate_569760b654daef24ec70a5b8d1072af0595fb511b8dc4e2a385850e1e044c214 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/detail.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 108
        $this->displayBlock('section', $context, $blocks);
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "<!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", []), "html", null, true);
        echo "\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("screen_lock");
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    ";
        }
        // line 32
        echo "                                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"menu-item\">
                            <!-- Mobile menu toggle-->
                            <a class=\"navbar-toggle\">
                                <div class=\"lines\">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"navbar-custom\">
                <div class=\"container\">
                    <div id=\"navigation\">
                        <!-- Navigation Menu-->
                        <ul class=\"navigation-menu\">
                            <li class=\"active\">
                                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Liste des Coachs</a></li>
                                    <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enabler");
        echo "\">Liste des Enablers</a></li>
                                </ul>
                            </li>

                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-invert-colors-on\"></i> <span> Mon Accompagnement </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"\">Rapport du diagnostic</a></li>
                                    <li><a href=\"mentor-details.html\">Rapport du plan de developpement</a></li>
                                    <li><a href=\"\">Mes Participations</a></li>
                                    <li><a href=\"\">Services Payants</a></li>
                                    <li><a href=\"\">Mes Coachs, mentors, enablers</a></li>
                                </ul>
                            </li>

                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-redeem\"></i> <span> Forum </span> </a>
                            </li>
                            ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 87
            echo "                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-pages\"></i><span>Espace Coach </span> </a>
                                <ul class=\"submenu megamenu\">
                                    <li>
                                        <ul>
                                            <li><a href=\"profile.html\">Mes Membres</a></li>
                                        </ul>
                                    </li>
                               
                                </ul>
                            </li>
                            ";
        }
        // line 99
        echo "
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 109
        echo "<div class=\"wrapper\">
<div class=\"row\">
        <div class=\"panel panel-color panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title text-center\">Details sur le Service ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 113, $this->source); })()), "nomService", []), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <p>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 116, $this->source); })()), "details", []), "html", null, true);
        echo ".</br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 116, $this->source); })()), "details", []), "html", null, true);
        echo "</p>
                <div class=\"\">
                    <a href=\"\">Demander Ce Service</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 127
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 127,  284 => 126,  262 => 116,  256 => 113,  250 => 109,  241 => 108,  223 => 99,  209 => 87,  207 => 86,  186 => 68,  182 => 67,  170 => 58,  140 => 32,  134 => 30,  132 => 29,  128 => 28,  124 => 27,  114 => 22,  100 => 11,  91 => 4,  82 => 3,  72 => 126,  70 => 108,  68 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% block header %}
<!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"{{path('home')}}\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,{{ app.user.photo }}\" alt=\"{{ app.user}}\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{path('profile')}}\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"{{path('screen_lock')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <li><a href=\"{{path('register')}}\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    {% endif %}
                                    <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"menu-item\">
                            <!-- Mobile menu toggle-->
                            <a class=\"navbar-toggle\">
                                <div class=\"lines\">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"navbar-custom\">
                <div class=\"container\">
                    <div id=\"navigation\">
                        <!-- Navigation Menu-->
                        <ul class=\"navigation-menu\">
                            <li class=\"active\">
                                <a href=\"{{path('home')}}\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"{{path('coach')}}\">Liste des Coachs</a></li>
                                    <li><a href=\"{{path('enabler')}}\">Liste des Enablers</a></li>
                                </ul>
                            </li>

                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-invert-colors-on\"></i> <span> Mon Accompagnement </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"\">Rapport du diagnostic</a></li>
                                    <li><a href=\"mentor-details.html\">Rapport du plan de developpement</a></li>
                                    <li><a href=\"\">Mes Participations</a></li>
                                    <li><a href=\"\">Services Payants</a></li>
                                    <li><a href=\"\">Mes Coachs, mentors, enablers</a></li>
                                </ul>
                            </li>

                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-redeem\"></i> <span> Forum </span> </a>
                            </li>
                            {% if is_granted('ROLE_COACH') %}
                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-pages\"></i><span>Espace Coach </span> </a>
                                <ul class=\"submenu megamenu\">
                                    <li>
                                        <ul>
                                            <li><a href=\"profile.html\">Mes Membres</a></li>
                                        </ul>
                                    </li>
                               
                                </ul>
                            </li>
                            {% endif %}

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
{% endblock %}
{% block section %}
<div class=\"wrapper\">
<div class=\"row\">
        <div class=\"panel panel-color panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title text-center\">Details sur le Service {{service.nomService}}</h3>
            </div>
            <div class=\"panel-body\">
                <p>{{service.details}}.</br>{{service.details}}</p>
                <div class=\"\">
                    <a href=\"\">Demander Ce Service</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
{% endblock %}
{% block footer %}
{{parent()}}
{% endblock %}
{% endblock %}

", "service/detail.html.twig", "/home/faky/Documents/Moltrant/templates/service/detail.html.twig");
    }
}