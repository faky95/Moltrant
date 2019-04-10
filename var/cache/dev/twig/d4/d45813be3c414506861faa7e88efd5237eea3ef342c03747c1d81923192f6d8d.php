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
class __TwigTemplate_67186ca72975a990606fcf59e24a9871c32a2982667a3af162d5601cbfad3df3 extends \Twig\Template
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
        // line 171
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 226
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
        // line 136
        echo "        ";
        $this->displayBlock('section', $context, $blocks);
        // line 138
        echo "        ";
        $this->displayBlock('event', $context, $blocks);
        // line 140
        echo "        ";
        $this->displayBlock('enabler', $context, $blocks);
        // line 142
        echo "        ";
        $this->displayBlock('membre', $context, $blocks);
        // line 144
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 170
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
        echo "        ";
        // line 135
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 137
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        // line 139
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_enabler($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "enabler"));

        // line 141
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_membre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "membre"));

        // line 143
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 145
        echo "           <!-- Footer -->
                <footer class=\"footer text-right\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                2019 © ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", []), "html", null, true);
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
        // line 161
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

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "        <!-- jQuery  -->
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <!-- moment js  -->
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

        <!-- counters  -->
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

        <!-- sweet alert  -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


        <!-- flot Chart -->
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- todos app  -->
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

        <!-- chat app  -->
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

        <!-- dashboard  -->
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 214,  474 => 211,  468 => 208,  462 => 205,  458 => 204,  454 => 203,  450 => 202,  446 => 201,  442 => 200,  438 => 199,  434 => 198,  427 => 194,  421 => 191,  417 => 190,  411 => 187,  405 => 184,  399 => 181,  395 => 180,  391 => 179,  387 => 178,  383 => 177,  379 => 176,  375 => 175,  371 => 174,  367 => 173,  364 => 172,  355 => 171,  336 => 161,  322 => 150,  315 => 145,  306 => 144,  296 => 143,  287 => 142,  277 => 141,  268 => 140,  258 => 139,  249 => 138,  239 => 137,  230 => 136,  220 => 135,  218 => 33,  209 => 32,  199 => 170,  196 => 144,  193 => 142,  190 => 140,  187 => 138,  184 => 136,  181 => 32,  172 => 31,  160 => 27,  155 => 25,  151 => 24,  147 => 23,  143 => 22,  139 => 21,  135 => 20,  131 => 19,  126 => 17,  119 => 12,  110 => 11,  99 => 8,  90 => 7,  78 => 226,  75 => 171,  73 => 31,  69 => 29,  67 => 11,  64 => 10,  62 => 7,  57 => 5,  51 => 1,);
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
        {# <!-- Navigation Bar-->
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
                                    <img src=\"data:image/png;base64,{{ photo.photo }}\" alt=\"{{ app.user}}\" class=\"img-circle user-img\">
                                    <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                                </a>

                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
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
                                    <li><a href=\"article-details.html\">Demander un Service</a></li>
                                    <li><a href=\"gallery.html\">Inscription au Programme Enabler</a></li>
                                    <li><a href=\"gallery.html\">Liste des Coachs</a></li>
                                    <li><a href=\"gallery.html\">Liste des Enablers</a></li>
                                </ul>
                            </li>

                            <li class=\"has-submenu\">
                                <a href=\"#\"><i class=\"md md-invert-colors-on\"></i> <span> Mon Accompagnement </span> </a>
                                <ul class=\"submenu\">
                                    <li><a href=\"gallery.html\">Rapport du diagnostic</a></li>
                                    <li><a href=\"mentor-details.html\">Rapport du plan de developpement</a></li>
                                    <li><a href=\"gallery.html\">Mes Participations</a></li>
                                    <li><a href=\"gallery.html\">Services Payants</a></li>
                                    <li><a href=\"gallery.html\">Mes Coachs, mentors, enablers</a></li>
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
        <!-- End Navigation Bar--> #}
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

        <!-- moment js  -->
        <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>

        <!-- counters  -->
        <script src=\"{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

        <!-- sweet alert  -->
        <script src=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


        <!-- flot Chart -->
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- todos app  -->
        <script src=\"{{ asset('assets/pages/jquery.todo.js')}}\"></script>

        <!-- chat app  -->
        <script src=\"{{ asset('assets/pages/jquery.chat.js')}}\"></script>

        <!-- dashboard  -->
        <script src=\"{{ asset('assets/pages/jquery.dashboard.js')}}\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/faky/Documents/Moltrant/templates/base.html.twig");
    }
}
