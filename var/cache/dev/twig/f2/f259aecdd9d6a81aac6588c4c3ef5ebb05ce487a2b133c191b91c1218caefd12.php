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

/* home/index.html.twig */
class __TwigTemplate_54f41f93923d8c9259fd29e37b5249b20880c50fdb7688ece2da5dc2ac540e23 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'event' => [$this, 'block_event'],
            'enabler' => [$this, 'block_enabler'],
            'membre' => [$this, 'block_membre'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('section', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('event', $context, $blocks);
        // line 104
        echo "
    ";
        // line 105
        $this->displayBlock('enabler', $context, $blocks);
        // line 185
        echo "
    ";
        // line 186
        $this->displayBlock('membre', $context, $blocks);
        // line 271
        echo "
   ";
        // line 272
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    ";
        $this->loadTemplate("service/header.html.twig", "home/index.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 11
        echo "    
    <section id=\"slider-container\" class=\"slider-area\"> 
        
            <div class=\"slider-owl owl-theme owl-carousel\"> 
                <!-- Start Slingle Slide -->
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "                 <div class=\"single-slide item\" style=\"background-image: url(data:image/png;base64,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "image", []), "html", null, true);
            echo ")\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "titre", []), "html", null, true);
            echo " </h2>
                                            <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "description", []), "html", null, true);
            echo "</p>
                                            <!-- <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>\t
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t
            </div>
            
    </section>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        // line 44
        echo "    
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_enabler($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        // line 106
        echo "    
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_membre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        // line 187
        echo "    
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 272
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 273
        echo "    ";
        $this->loadTemplate("service/footer.html.twig", "home/index.html.twig", 273)->display($context);
        // line 274
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  508 => 274,  505 => 273,  496 => 272,  403 => 187,  394 => 186,  306 => 106,  297 => 105,  228 => 44,  219 => 43,  204 => 36,  187 => 26,  183 => 25,  171 => 17,  167 => 16,  160 => 11,  151 => 10,  141 => 8,  138 => 7,  129 => 6,  119 => 272,  116 => 271,  114 => 186,  111 => 185,  109 => 105,  106 => 104,  104 => 43,  101 => 42,  99 => 10,  96 => 9,  93 => 6,  84 => 5,  67 => 2,  57 => 5,  54 => 4,  52 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}
{% endblock %}

{% block body %}
\t{% block header %}
    {% include ('service/header.html.twig')%}
    {% endblock %}

    {% block section %}
    
    <section id=\"slider-container\" class=\"slider-area\"> 
        
            <div class=\"slider-owl owl-theme owl-carousel\"> 
                <!-- Start Slingle Slide -->
                {% for entity in entities %}
                 <div class=\"single-slide item\" style=\"background-image: url(data:image/png;base64,{{ entity.image }})\">
                    <!-- Start Slider Content -->
                    <div class=\"slider-content-area\">  
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\"> 
                                    <div class=\"slide-content-wrapper\">
                                        <div class=\"slide-content\">
                                            <h2>{{entity.titre}} </h2>
                                            <p>{{entity.description}}</p>
                                            <!-- <a class=\"banner-btn\" href=\"index.html#\" data-text=\"learn more\"><span>Learn more</span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>\t
                {% endfor %}\t\t\t\t\t\t
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
    {% include ('service/footer.html.twig')%}
    {% endblock %}
{% endblock %}
", "home/index.html.twig", "/home/faky/Bureau/IntranetEnablis/templates/home/index.html.twig");
    }
}
