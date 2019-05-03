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

/* header.html.twig */
class __TwigTemplate_bae34b50e6c46a795adc58ecd2e978e41c36fd167e2aae53aeba3524f23f4346 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "header.html.twig", 1);
        $this->blocks = [
            'section' => [$this, 'block_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 3
        echo "<!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", []), "html", null, true);
        echo "\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("screen_lock");
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    ";
        }
        // line 31
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
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Liste des Coachs</a></li>
                                    <li><a href=\"";
        // line 67
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
        // line 85
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 86
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
        // line 98
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

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 98,  186 => 86,  184 => 85,  163 => 67,  159 => 66,  155 => 65,  144 => 57,  114 => 31,  108 => 29,  106 => 28,  102 => 27,  98 => 26,  88 => 21,  74 => 10,  65 => 3,  56 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block  section %}
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
                                    <li><a href=\"{{path('inscription')}}\">Inscription au Programme Enabler</a></li>
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
{% endblock %}", "header.html.twig", "/var/www/project/Moltrant-master/templates/header.html.twig");
    }
}
