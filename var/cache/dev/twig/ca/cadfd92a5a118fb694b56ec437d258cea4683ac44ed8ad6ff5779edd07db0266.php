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

/* service/listCoach.html.twig */
class __TwigTemplate_1a97f08f827cf95a7b1071d0790468b0233df7162d125cacb69b672ef7569355 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/listCoach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/listCoach.html.twig"));

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
        // line 23
        echo "
    </head>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "</html>";
        
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
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <body>

        ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 134
        echo "

        <div class=\"wrapper\">
            <div class=\"container\">

                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h4 class=\"page-title\">Liste des Coachs </h4>
                    </div>
                </div>

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"example-input1-group2\" name=\"example-input1-group2\" class=\"form-control input-lg\" placeholder=\"Search\">
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn-lg btn waves-effect waves-light btn-primary w-md\"><i class=\"fa fa-search\"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["list"]);
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 165
            echo "                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"panel\">
                            <div class=\"panel-body\">
                                <div class=\"media-main\">
                                    <a class=\"pull-left\" href=\"#\">
                                        <img class=\"thumb-lg img-circle\" src=\"data:image/png;base64,";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "photo", []), "html", null, true);
            echo "\" alt=\"\">
                                    </a>
                                    ";
            // line 172
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 173
                echo "                                    <div class=\"pull-right btn-group-sm\">
                                        <a href=\"#\" class=\"btn btn-success waves-effect waves-light tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Edit\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                        <a href=\"#\" class=\"btn btn-danger waves-effect waves-light tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
                                            <i class=\"fa fa-close\"></i>
                                        </a>
                                    </div>
                                    ";
            }
            // line 182
            echo "                                    <div class=\"info\">
                                        <h4>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "nomComplet", []), "html", null, true);
            echo "</h4>
                                        <p class=\"text-muted\">Coach</p>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                                <hr>
                                <ul class=\"social-links list-inline\">
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Skype\"><i class=\"fa fa-skype\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Message\"><i class=\"fa fa-envelope-o\"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- end col -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                </div> <!-- End row -->

                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <ul class=\"pagination pull-right\">
                            <li>
                              <a href=\"#\" aria-label=\"Previous\">
                                <i class=\"fa fa-angle-left\"></i>
                              </a>
                            </li>
                            <li><a href=\"#\">1</a></li>
                            <li class=\"active\"><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li class=\"disabled\"><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li>
                              <a href=\"#\" aria-label=\"Next\">
                                <i class=\"fa fa-angle-right\"></i>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>



                <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2016 © Faky.
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
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
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

    ";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        // line 283
        echo "    </body>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "        <!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", []), "html", null, true);
        echo "\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("screen_lock");
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    ";
        }
        // line 58
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
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Liste des Coachs</a></li>
                                    <li><a href=\"";
        // line 94
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
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 113
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
        // line 125
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

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo "
        <!-- jQuery  -->
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/listCoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 281,  544 => 278,  540 => 277,  536 => 276,  532 => 275,  528 => 274,  524 => 273,  520 => 272,  516 => 271,  512 => 270,  508 => 268,  499 => 267,  481 => 125,  467 => 113,  465 => 112,  444 => 94,  440 => 93,  428 => 84,  398 => 58,  392 => 56,  390 => 55,  386 => 54,  382 => 53,  372 => 48,  358 => 37,  349 => 30,  340 => 29,  329 => 283,  327 => 267,  309 => 252,  265 => 210,  232 => 183,  229 => 182,  218 => 173,  216 => 172,  211 => 170,  204 => 165,  200 => 164,  168 => 134,  166 => 29,  161 => 26,  152 => 25,  139 => 20,  134 => 18,  130 => 17,  126 => 16,  122 => 15,  118 => 14,  114 => 13,  109 => 12,  100 => 11,  89 => 8,  80 => 7,  70 => 285,  68 => 25,  64 => 23,  62 => 11,  59 => 10,  57 => 7,  52 => 5,  46 => 1,);
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
    {% block body %}

    <body>

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


        <div class=\"wrapper\">
            <div class=\"container\">

                <!-- Page-Title -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h4 class=\"page-title\">Liste des Coachs </h4>
                    </div>
                </div>

                <div class=\"row\">

                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"example-input1-group2\" name=\"example-input1-group2\" class=\"form-control input-lg\" placeholder=\"Search\">
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn-lg btn waves-effect waves-light btn-primary w-md\"><i class=\"fa fa-search\"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                {% for list in list %}
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"panel\">
                            <div class=\"panel-body\">
                                <div class=\"media-main\">
                                    <a class=\"pull-left\" href=\"#\">
                                        <img class=\"thumb-lg img-circle\" src=\"data:image/png;base64,{{list.photo}}\" alt=\"\">
                                    </a>
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"pull-right btn-group-sm\">
                                        <a href=\"#\" class=\"btn btn-success waves-effect waves-light tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Edit\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                        <a href=\"#\" class=\"btn btn-danger waves-effect waves-light tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
                                            <i class=\"fa fa-close\"></i>
                                        </a>
                                    </div>
                                    {% endif %}
                                    <div class=\"info\">
                                        <h4>{{list.nomComplet}}</h4>
                                        <p class=\"text-muted\">Coach</p>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                                <hr>
                                <ul class=\"social-links list-inline\">
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Skype\"><i class=\"fa fa-skype\"></i></a>
                                    </li>
                                    <li>
                                        <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"\" data-original-title=\"Message\"><i class=\"fa fa-envelope-o\"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- end col -->
                {% endfor %}
                </div> <!-- End row -->

                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <ul class=\"pagination pull-right\">
                            <li>
                              <a href=\"#\" aria-label=\"Previous\">
                                <i class=\"fa fa-angle-left\"></i>
                              </a>
                            </li>
                            <li><a href=\"#\">1</a></li>
                            <li class=\"active\"><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li class=\"disabled\"><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li>
                              <a href=\"#\" aria-label=\"Next\">
                                <i class=\"fa fa-angle-right\"></i>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>



                <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2016 © Faky.
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

            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->

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
    {% endblock %}
    </body>
    {% endblock %}
</html>", "service/listCoach.html.twig", "/home/faky/Documents/Moltrant/templates/service/listCoach.html.twig");
    }
}
