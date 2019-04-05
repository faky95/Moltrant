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

/* base.html.twig */
class __TwigTemplate_736e632945d8cb0df8b5730309410a1ee82171209e8e43cb5033059c05d4866f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"fonts/logo.ico\" />
        <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    </head>
    <body>
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 440
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 456
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
        echo "            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <link rel=\"apple-touch-icon\" href=\"http://preview.freethemescloud.com/spase/apple-touch-icon.png\">
            <!-- Place favicon.ico in the root directory -->

            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate-heading.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/meanmenu.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/et-line-icon.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 95
        echo "        ";
        $this->displayBlock('section', $context, $blocks);
        // line 164
        echo "        ";
        $this->displayBlock('event', $context, $blocks);
        // line 224
        echo "        ";
        $this->displayBlock('enabler', $context, $blocks);
        // line 303
        echo "        ";
        $this->displayBlock('membre', $context, $blocks);
        // line 387
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 439
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "        <header class=\"top\">
\t\t\t<div class=\"header-area header-sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo/logo.jpg\" alt=\"enablis\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-10 col-xs-12\">
                            <div class=\"content-wrapper\">
                                <!-- Main Menu Start -->
                                <div class=\"main-menu text-right\">
                                    <nav>
                                        <ul>
                                            <li><a href=\"event.html\">Forum</a></li>
                                            <li><a href=\"article.html\">Services Enablis</a>
                                                <ul>
                                                    <li><a href=\"article.html\">Liste des Services</a></li>
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
                                            <li><a href=\"contact.html\">Profil</a></li>
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
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
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

    // line 95
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 96
        echo "          <section id=\"slider-container\" class=\"slider-area\"> 
            <div class=\"slider-owl owl-theme owl-carousel\"> 
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider1.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking in the heart </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider2.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">   
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking for winner team </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider1.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking in the heart </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->\t\t\t\t\t\t\t\t
            </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        // line 165
        echo "          <div class=\"article-area pt-108 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"ccle section-title text-center\">
                            <h2>latest articles</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/ariticle1.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/article2.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 hidden-sm col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/article3.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_enabler($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        // line 225
        echo "         <section class=\"benefit-area pb-115 pt-108\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col\">
                        <div class=\"section-title text-left\">
                            <h2>benefits</h2>
                        </div>  
                    </div>
                </div>
                <div class=\"row\"> 
                    <div class=\"col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-pencil\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Central Location</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-lock\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">personal locker</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>    
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-presentation\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Meeting Room</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-video\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Entertainment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 hidden-sm col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-basket\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">lunch everyday</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-dial\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">high speed internet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 303
    public function block_membre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        // line 304
        echo "        <div class=\"mentor-area pt-108 pb-120 text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3 col-xs-12\">
                        <div class=\"mentor section-title\">
                            <h2>our mentors</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiust tempor incidi ut labore et dolore magna aliqua. Ut enim ad mini veniam quis </p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member1.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member2.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member3.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 hidden-sm col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member4.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 387
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 388
        echo "         <footer class=\"footer-area\">
            <div class=\"container\">
                <div class=\"main-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"single-widget mr-50\">
                                <h3>about us</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisici elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <ul>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"single-widget ml-100\">
                                <h3>contact us</h3>
                                <p>2020 Willshire Glen,<br>
                                Alpharetta, GA-30009<br>
                                Gmail : info@example.com<br>
                                Fax :  +041 245 728 562<br>
                                Phone : +012 345 678 102 </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-xs-12\">
                            <div class=\"single-widget ml-85\">
                                <h3>latest work</h3>
                                <div class=\"footer-img\">
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"img/footer/footer1.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"img/footer/footer2.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mb-2\"><img src=\"img/footer/footer3.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"img/footer/footer4.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"img/footer/footer5.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\"><img src=\"img/footer/footer6.jpg\" alt=\"latest-work\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class=\"footer-bottom text-center\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p>Copyright © 2017 <a href=\"index.html#\">DevItems</a>. All Right Reserved.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 440
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 441
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animate-heading.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mb.YTPlayer.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  792 => 454,  788 => 453,  784 => 452,  780 => 451,  776 => 450,  772 => 449,  768 => 448,  764 => 447,  760 => 446,  756 => 445,  752 => 444,  748 => 443,  744 => 442,  739 => 441,  730 => 440,  670 => 388,  661 => 387,  569 => 304,  560 => 303,  473 => 225,  464 => 224,  396 => 165,  387 => 164,  310 => 96,  301 => 95,  235 => 38,  226 => 37,  216 => 439,  213 => 387,  210 => 303,  207 => 224,  204 => 164,  201 => 95,  198 => 37,  189 => 36,  177 => 32,  173 => 31,  169 => 30,  165 => 29,  161 => 28,  157 => 27,  153 => 26,  149 => 25,  145 => 24,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  116 => 12,  107 => 11,  96 => 8,  87 => 7,  75 => 456,  72 => 440,  70 => 36,  66 => 34,  64 => 11,  61 => 10,  59 => 7,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"fonts/logo.ico\" />
        <title>
        {% block title %}
         Enablis
        {% endblock %}
        </title>
        {% block stylesheets %}
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <link rel=\"apple-touch-icon\" href=\"http://preview.freethemescloud.com/spase/apple-touch-icon.png\">
            <!-- Place favicon.ico in the root directory -->

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/animate-heading.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/meanmenu.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/et-line-icon.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/ionicons.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/material-design-iconic-font.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\">
            <script src=\"{{ asset('js/vendor/modernizr-2.8.3.min.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}
        {% block header %}
        <header class=\"top\">
\t\t\t<div class=\"header-area header-sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo/logo.jpg\" alt=\"enablis\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-10 col-xs-12\">
                            <div class=\"content-wrapper\">
                                <!-- Main Menu Start -->
                                <div class=\"main-menu text-right\">
                                    <nav>
                                        <ul>
                                            <li><a href=\"event.html\">Forum</a></li>
                                            <li><a href=\"article.html\">Services Enablis</a>
                                                <ul>
                                                    <li><a href=\"article.html\">Liste des Services</a></li>
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
                                            <li><a href=\"contact.html\">Profil</a></li>
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
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t\t\t\t\t            <li><a href=\"index.html\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
\t\t\t\t\t\t        </ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
        {% endblock %}
        {% block section %}
          <section id=\"slider-container\" class=\"slider-area\"> 
            <div class=\"slider-owl owl-theme owl-carousel\"> 
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider1.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking in the heart </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider2.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">   
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking for winner team </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                <div class=\"single-slide item\" style=\"background-image: url(img/slider/slider1.jpg)\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>Coworking in the heart </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                                            <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->\t\t\t\t\t\t\t\t
            </div>
            </section>
        {% endblock %}
        {% block event %}
          <div class=\"article-area pt-108 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"ccle section-title text-center\">
                            <h2>latest articles</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/ariticle1.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/article2.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 hidden-sm col-xs-12\">
                        <div class=\"single-article\">
                            <div class=\"article-img\">
                                <a href=\"article-details.html\"><img src=\"img/article/article3.jpg\" alt=\"article\"></a>
                                <div class=\"article-content\">
                                    <div class=\"article-left\">
                                        <h3><a href=\"index.html#\">14<br> July</a></h3>
                                    </div>
                                    <div class=\"article-right\">
                                        <p><a href=\"index.html#\">Lorem ipsum dolor sit amet ami consectetur adipisicing. </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block enabler %}
         <section class=\"benefit-area pb-115 pt-108\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col\">
                        <div class=\"section-title text-left\">
                            <h2>benefits</h2>
                        </div>  
                    </div>
                </div>
                <div class=\"row\"> 
                    <div class=\"col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-pencil\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Central Location</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-lock\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">personal locker</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>    
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-presentation\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Meeting Room</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-video\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">Entertainment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 hidden-sm col-xs-12\">     
                                <div class=\"single-benefit mb-40\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-basket\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">lunch everyday</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>     
                                <div class=\"single-benefit hidden-xs\">
                                    <div class=\"benefit-icon\">
                                        <a href=\"index.html#\"><span class=\"icon-dial\"></span></a>
                                    </div>    
                                    <div class=\"benefit-content\">
                                        <h3><a href=\"http://preview.freethemescloud.com/spase/class.html\">high speed internet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        {% endblock %}
        {% block membre %}
        <div class=\"mentor-area pt-108 pb-120 text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3 col-xs-12\">
                        <div class=\"mentor section-title\">
                            <h2>our mentors</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiust tempor incidi ut labore et dolore magna aliqua. Ut enim ad mini veniam quis </p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member1.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member2.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-4 col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member3.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 hidden-sm col-xs-12\">
                        <div class=\"single-mentor\">
                            <div class=\"mentor-img\">
                                <a href=\"index.html#\"><img src=\"img/team/member4.jpg\" alt=\"member\"></a>
                                <div class=\"mentor-hover\">
                                    <h5>Jackline Milorina</h5>
                                    <h6>DevItems</h6>
                                    <ul>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                        <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block footer %}
         <footer class=\"footer-area\">
            <div class=\"container\">
                <div class=\"main-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"single-widget mr-50\">
                                <h3>about us</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisici elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <ul>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"single-widget ml-100\">
                                <h3>contact us</h3>
                                <p>2020 Willshire Glen,<br>
                                Alpharetta, GA-30009<br>
                                Gmail : info@example.com<br>
                                Fax :  +041 245 728 562<br>
                                Phone : +012 345 678 102 </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-xs-12\">
                            <div class=\"single-widget ml-85\">
                                <h3>latest work</h3>
                                <div class=\"footer-img\">
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"img/footer/footer1.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"img/footer/footer2.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mb-2\"><img src=\"img/footer/footer3.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"img/footer/footer4.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"img/footer/footer5.jpg\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\"><img src=\"img/footer/footer6.jpg\" alt=\"latest-work\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class=\"footer-bottom text-center\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p>Copyright © 2017 <a href=\"index.html#\">DevItems</a>. All Right Reserved.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
        {% endblock %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/vendor/jquery-1.12.0.min.js')}}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
            <script src=\"{{ asset('js/jquery.meanmenu.js')}}\"></script>
            <script src=\"{{ asset('js/jquery.magnific-popup.min.js')}}\"></script>
            <script src=\"{{ asset('js/isotope.pkgd.min.js')}}\"></script>
            <script src=\"{{ asset('js/imagesloaded.pkgd.min.js')}}\"></script>
            <script src=\"{{ asset('js/jquery.counterup.min.js')}}\"></script>
            <script src=\"{{ asset('js/waypoints.min.js')}}\"></script>
            <script src=\"{{ asset('js/ajax-mail.js')}}\"></script>
            <script src=\"{{ asset('js/owl.carousel.min.js')}}\"></script>
            <script src=\"{{ asset('js/animate-heading.js')}}\"></script>
            <script src=\"{{ asset('js/jquery.mb.YTPlayer.js')}}\"></script>
            <script src=\"{{ asset('js/plugins.js')}}\"></script>
            <script src=\"{{ asset('js/main.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/faky/Bureau/IntranetEnablis/templates/base.html.twig");
    }
}
