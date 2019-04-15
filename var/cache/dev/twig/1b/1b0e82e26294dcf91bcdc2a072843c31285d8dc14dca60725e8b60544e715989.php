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

/* serviceLayout.html.twig */
class __TwigTemplate_879d5da148094b1dc18de2039ef800ced9049290fed06e34e65a6e6f902c5762 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'event' => [$this, 'block_event'],
            'enabler' => [$this, 'block_enabler'],
            'membre' => [$this, 'block_membre'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serviceLayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serviceLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.ico"), "html", null, true);
        echo "\" />
        <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "         Enablis
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 137
        echo "        ";
        $this->displayBlock('section', $context, $blocks);
        // line 139
        echo "        ";
        $this->displayBlock('event', $context, $blocks);
        // line 141
        echo "        ";
        $this->displayBlock('enabler', $context, $blocks);
        // line 143
        echo "        ";
        $this->displayBlock('membre', $context, $blocks);
        // line 145
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "        <!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", []), "html", null, true);
        echo "\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("screen_lock");
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    ";
        }
        // line 61
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
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Liste des Coachs</a></li>
                                    <li><a href=\"";
        // line 97
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
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 116
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
        // line 128
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

    // line 137
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 138
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        // line 140
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_enabler($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        // line 142
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_membre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        // line 144
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 146
        echo "           <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2019 © ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", []), "html", null, true);
        echo ".
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
                                        <a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "       <!-- jQuery  -->
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <!-- Examples -->
\t    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 192
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "serviceLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 192,  560 => 190,  556 => 189,  552 => 188,  546 => 185,  540 => 182,  536 => 181,  532 => 180,  528 => 179,  524 => 178,  520 => 177,  516 => 176,  512 => 175,  508 => 174,  505 => 173,  496 => 172,  477 => 162,  463 => 151,  456 => 146,  447 => 145,  437 => 144,  428 => 143,  418 => 142,  409 => 141,  399 => 140,  390 => 139,  380 => 138,  371 => 137,  353 => 128,  339 => 116,  337 => 115,  316 => 97,  312 => 96,  308 => 95,  297 => 87,  267 => 61,  261 => 59,  259 => 58,  255 => 57,  251 => 56,  241 => 51,  227 => 40,  218 => 33,  209 => 32,  199 => 171,  196 => 145,  193 => 143,  190 => 141,  187 => 139,  184 => 137,  181 => 32,  172 => 31,  160 => 27,  155 => 25,  151 => 24,  147 => 23,  143 => 22,  139 => 21,  135 => 20,  131 => 19,  126 => 17,  119 => 12,  110 => 11,  99 => 8,  90 => 7,  78 => 194,  75 => 172,  73 => 31,  69 => 29,  67 => 11,  64 => 10,  62 => 7,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('logo.ico')}}\" />
        <title>
        {% block title %}
         Enablis
        {% endblock %}
        </title>
        {% block stylesheets %}
        
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            
            <link href=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

            <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

            <script src=\"{{ asset('assets/js/modernizr.min.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
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
        {% endblock %}
        {% block section %}
        {% endblock %}
        {% block event %}
        {% endblock %}
        {% block enabler %}
        {% endblock %}
        {% block membre %}
        {% endblock %}
        {% block footer %}
           <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2019 © {{app.user}}.
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
                                        <a href=\"{{path('contact')}}\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
        {% endblock %}
        {% endblock %}
        {% block javascripts %}
       <!-- jQuery  -->
        <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{ asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{ asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{ asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <!-- App js -->
        <script src=\"{{ asset('assets/js/jquery.app.js')}}\"></script>

        <!-- Examples -->
\t    <script src=\"{{ asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}\"></script>
\t    <script src=\"{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}\"></script>
\t    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
            {# <script src=\"{{ asset('assets/pages/datatables.editable.init.js')}}\"></script> #}

        {% endblock %}
    </body>
</html>
", "serviceLayout.html.twig", "/home/faky/Documents/Moltrant/templates/serviceLayout.html.twig");
    }
}
