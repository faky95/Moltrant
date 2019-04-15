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

/* profile/profile.html.twig */
class __TwigTemplate_d441304d744132e6ffdfe51e29c96fed72ffb18fe771513d953222145bf75503 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("profilLayout.html.twig", "profile/profile.html.twig", 1);
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
        return "profilLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 113
        $this->displayBlock('section', $context, $blocks);
        // line 415
        $this->displayBlock('footer', $context, $blocks);
        // line 418
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo " <!-- Navigation Bar-->
        <header id=\"topnav\">
            <div class=\"topbar-main  navbar m-b-0 b-0\">
                <div class=\"container\">

                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Enablis </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class=\"menu-extras\">

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                           
                            <li class=\"dropdown user-box\">
                                <a href=\"\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <img src=\"data:image/png;base64,";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", []), "html", null, true);
        echo "\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("screen_lock");
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"md md-add-box\"></i> Register</a></li>
                                    ";
        }
        // line 37
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
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"md md-home\"></i> <span> Dashboard </span> </a>
                            </li>


                            <li class=\"has-submenu\">
                                <a href=\"/service/list\"><i class=\"md md-palette \"></i><span> Services Enablis </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/service/list\">Liste des Services</a></li>
                                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach");
        echo "\">Liste des Coachs</a></li>
                                    <li><a href=\"";
        // line 73
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
        // line 91
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
            // line 92
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
        // line 104
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

    // line 113
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 114
        echo "<div class=\"wrapper\">
            <div class=\"container\">

                <div class=\"wraper\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"bg-picture text-center\" style=\"background-image:url('assets/images/big/bg.jpg')\">
                                <div class=\"bg-picture-overlay\"></div>
                                <div class=\"profile-info-name\">
                                    <img src=\"data:image/png;base64,";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", []), "photo", []), "html", null, true);
        echo "\" class=\"thumb-lg img-circle img-thumbnail\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", []), "html", null, true);
        echo "\">
                                    <h3 class=\"text-white\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", []), "nomComplet", []), "html", null, true);
        echo "</h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class=\"row user-tabs\">
                        <div class=\"col-lg-6 col-md-9 col-sm-9\">
                            <ul class=\"nav nav-tabs tabs\">
                            <li class=\"active tab\">
                                <a href=\"#home-2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"active\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-home\"></i></span>
                                    <span class=\"hidden-xs\">About Me</span>
                                </a>
                            </li>
                            <li class=\"tab\">
                                <a href=\"#profile-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                    <span class=\"hidden-xs\">Activities</span>
                                </a>
                            </li>
                            ";
        // line 151
        echo "                            <li class=\"tab\">
                                <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                    <span class=\"hidden-xs\">Settings</span>
                                </a>
                            </li>
                        <div class=\"indicator\"></div></ul>
                        ";
        // line 172
        echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">

                        <div class=\"tab-content profile-tab-content\">
                            <div class=\"tab-pane active\" id=\"home-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <!-- Personal-Information -->
                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Personal Information</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"about-info-p\">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class=\"text-muted\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", []), "nomComplet", []), "html", null, true);
        echo "</p>
                                                </div>
                                                <div class=\"about-info-p\">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class=\"text-muted\">";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", []), "telephone", []), "html", null, true);
        echo "</p>
                                                </div>
                                                <div class=\"about-info-p\">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class=\"text-muted\">";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "user", []), "email", []), "html", null, true);
        echo "</p>
                                                </div>
                                                <div class=\"about-info-p m-b-0\">
                                                    <strong>Location</strong>
                                                    <br>
                                                    <p class=\"text-muted\">";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", []), "localite", []), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                    </div>


                                    <div class=\"col-md-8\">
                                        <!-- Personal-Information -->
                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Biography</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                                <p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>

                                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Skills</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"m-b-15\">
                                                    <h5>Angular Js <span class=\"pull-right\">60%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                            <span class=\"sr-only\">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-15\">
                                                    <h5>Javascript <span class=\"pull-right\">90%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-pink wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                            <span class=\"sr-only\">90% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-15\">
                                                    <h5>Wordpress <span class=\"pull-right\">80%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-purple wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                            <span class=\"sr-only\">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-0\">
                                                    <h5>HTML5 &amp; CSS3 <span class=\"pull-right\">95%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-info wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\">
                                                            <span class=\"sr-only\">95% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>




                            <div class=\"tab-pane\" id=\"profile-2\">
                                <!-- Personal-Information -->
                                <div class=\"panel panel-default panel-fill\">

                                    <div class=\"panel-body\">
                                        <div class=\"timeline-2\">
                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">5 minutes ago</div>
                                                <p><strong><a href=\"#\" class=\"text-info\">John Doe</a></strong> Uploaded a photo <strong>\"DSC000586.jpg\"</strong></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">30 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Lorem</a> commented your post.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">59 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Jessi</a> attended a meeting with<a href=\"#\" class=\"text-success\">John Doe</a>.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">5 minutes ago</div>
                                                <p><strong><a href=\"#\" class=\"text-info\">John Doe</a></strong>Uploaded 2 new photos</p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">30 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Lorem</a> commented your post.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">59 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Jessi</a> attended a meeting with<a href=\"#\" class=\"text-success\">John Doe</a>.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>

                            <div class=\"tab-pane\" id=\"settings-2\">
                                <!-- Personal-Information -->
                                <div class=\"panel panel-default panel-fill\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Edit Profile</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <form role=\"form\">
                                            <div class=\"form-group\">
                                                <label for=\"FullName\">Full Name</label>
                                                <input type=\"text\" value=\"";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 349, $this->source); })()), "user", []), "nomComplet", []), "html", null, true);
        echo "\" id=\"FullName\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Email\">Email</label>
                                                <input type=\"email\" value=\"";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", []), "email", []), "html", null, true);
        echo "\" id=\"Email\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Username\">Username</label>
                                                <input type=\"text\" value=\"";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 357, $this->source); })()), "user", []), "html", null, true);
        echo "\" id=\"Username\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Password\">Password</label>
                                                <input type=\"password\" placeholder=\"6 - 15 Characters\" id=\"Password\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"RePassword\">Re-Password</label>
                                                <input type=\"password\" placeholder=\"6 - 15 Characters\" id=\"RePassword\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"AboutMe\">About Me</label>
                                                <textarea style=\"height: 125px\" id=\"AboutMe\" class=\"form-control\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                            </div>
                                            <button class=\"btn btn-primary waves-effect waves-light w-md\" type=\"submit\">Save</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>



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
                                        <a href=\"";
        // line 400
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 415
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 416
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 416,  604 => 415,  579 => 400,  533 => 357,  526 => 353,  519 => 349,  371 => 204,  363 => 199,  355 => 194,  347 => 189,  328 => 172,  319 => 151,  295 => 124,  289 => 123,  278 => 114,  269 => 113,  251 => 104,  237 => 92,  235 => 91,  214 => 73,  210 => 72,  206 => 71,  195 => 63,  165 => 37,  159 => 35,  157 => 34,  153 => 33,  149 => 32,  139 => 27,  125 => 16,  116 => 9,  107 => 8,  96 => 418,  94 => 415,  92 => 113,  90 => 8,  81 => 7,  69 => 4,  60 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profilLayout.html.twig' %}

{% block title %}
{{parent()}}
{% endblock %}

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
<div class=\"wrapper\">
            <div class=\"container\">

                <div class=\"wraper\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"bg-picture text-center\" style=\"background-image:url('assets/images/big/bg.jpg')\">
                                <div class=\"bg-picture-overlay\"></div>
                                <div class=\"profile-info-name\">
                                    <img src=\"data:image/png;base64,{{ app.user.photo }}\" class=\"thumb-lg img-circle img-thumbnail\" alt=\"{{app.user}}\">
                                    <h3 class=\"text-white\">{{app.user.nomComplet}}</h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class=\"row user-tabs\">
                        <div class=\"col-lg-6 col-md-9 col-sm-9\">
                            <ul class=\"nav nav-tabs tabs\">
                            <li class=\"active tab\">
                                <a href=\"#home-2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"active\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-home\"></i></span>
                                    <span class=\"hidden-xs\">About Me</span>
                                </a>
                            </li>
                            <li class=\"tab\">
                                <a href=\"#profile-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                    <span class=\"hidden-xs\">Activities</span>
                                </a>
                            </li>
                            {# <li class=\"tab\">
                                <a href=\"#messages-2\" data-toggle=\"tab\" aria-expanded=\"true\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-envelope-o\"></i></span>
                                    <span class=\"hidden-xs\">Projects</span>
                                </a>
                            </li> #}
                            <li class=\"tab\">
                                <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                    <span class=\"hidden-xs\">Settings</span>
                                </a>
                            </li>
                        <div class=\"indicator\"></div></ul>
                        {# </div>
                        <div class=\"col-lg-6 col-md-3 col-sm-3 hidden-xs\">
                            <div class=\"pull-right\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light\" href=\"#\"> Following <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                        <li><a href=\"#\">Poke</a></li>
                                        <li><a href=\"#\">Private message</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Unfollow</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div> #}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">

                        <div class=\"tab-content profile-tab-content\">
                            <div class=\"tab-pane active\" id=\"home-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <!-- Personal-Information -->
                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Personal Information</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"about-info-p\">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class=\"text-muted\">{{app.user.nomComplet}}</p>
                                                </div>
                                                <div class=\"about-info-p\">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class=\"text-muted\">{{app.user.telephone}}</p>
                                                </div>
                                                <div class=\"about-info-p\">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class=\"text-muted\">{{app.user.email}}</p>
                                                </div>
                                                <div class=\"about-info-p m-b-0\">
                                                    <strong>Location</strong>
                                                    <br>
                                                    <p class=\"text-muted\">{{app.user.localite}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                    </div>


                                    <div class=\"col-md-8\">
                                        <!-- Personal-Information -->
                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Biography</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                                <p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>

                                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                        <div class=\"panel panel-default panel-fill\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\">Skills</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"m-b-15\">
                                                    <h5>Angular Js <span class=\"pull-right\">60%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                            <span class=\"sr-only\">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-15\">
                                                    <h5>Javascript <span class=\"pull-right\">90%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-pink wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                            <span class=\"sr-only\">90% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-15\">
                                                    <h5>Wordpress <span class=\"pull-right\">80%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-purple wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                            <span class=\"sr-only\">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"m-b-0\">
                                                    <h5>HTML5 &amp; CSS3 <span class=\"pull-right\">95%</span></h5>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-info wow animated progress-animated\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\">
                                                            <span class=\"sr-only\">95% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>




                            <div class=\"tab-pane\" id=\"profile-2\">
                                <!-- Personal-Information -->
                                <div class=\"panel panel-default panel-fill\">

                                    <div class=\"panel-body\">
                                        <div class=\"timeline-2\">
                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">5 minutes ago</div>
                                                <p><strong><a href=\"#\" class=\"text-info\">John Doe</a></strong> Uploaded a photo <strong>\"DSC000586.jpg\"</strong></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">30 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Lorem</a> commented your post.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">59 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Jessi</a> attended a meeting with<a href=\"#\" class=\"text-success\">John Doe</a>.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">5 minutes ago</div>
                                                <p><strong><a href=\"#\" class=\"text-info\">John Doe</a></strong>Uploaded 2 new photos</p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">30 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Lorem</a> commented your post.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>

                                        <div class=\"time-item\">
                                            <div class=\"item-info\">
                                                <div class=\"text-muted\">59 minutes ago</div>
                                                <p><a href=\"\" class=\"text-info\">Jessi</a> attended a meeting with<a href=\"#\" class=\"text-success\">John Doe</a>.</p>
                                                <p><em>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. \"</em></p>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>

                            <div class=\"tab-pane\" id=\"settings-2\">
                                <!-- Personal-Information -->
                                <div class=\"panel panel-default panel-fill\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Edit Profile</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <form role=\"form\">
                                            <div class=\"form-group\">
                                                <label for=\"FullName\">Full Name</label>
                                                <input type=\"text\" value=\"{{app.user.nomComplet}}\" id=\"FullName\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Email\">Email</label>
                                                <input type=\"email\" value=\"{{app.user.email}}\" id=\"Email\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Username\">Username</label>
                                                <input type=\"text\" value=\"{{app.user}}\" id=\"Username\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"Password\">Password</label>
                                                <input type=\"password\" placeholder=\"6 - 15 Characters\" id=\"Password\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"RePassword\">Re-Password</label>
                                                <input type=\"password\" placeholder=\"6 - 15 Characters\" id=\"RePassword\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"AboutMe\">About Me</label>
                                                <textarea style=\"height: 125px\" id=\"AboutMe\" class=\"form-control\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                            </div>
                                            <button class=\"btn btn-primary waves-effect waves-light w-md\" type=\"submit\">Save</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>



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
{% endblock %}
{% block footer %}
{{parent()}}
{% endblock %}

{% endblock %}
", "profile/profile.html.twig", "/home/faky/Documents/Moltrant/templates/profile/profile.html.twig");
    }
}
