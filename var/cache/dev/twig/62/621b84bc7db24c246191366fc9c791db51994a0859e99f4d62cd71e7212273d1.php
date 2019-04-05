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

/* layout.html.twig */
class __TwigTemplate_36bc0c9fa905589f19afe84a7e5b481ba7bee7c8c47630f7b9ee2bd0911fd9ab extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/logo.ico"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "</head>
<body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\t    <title>Enablis</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/css/util.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic js-tilt\" data-tilt>
\t\t\t\t\t<img src=\"layout/images/img-01.png\" alt=\"IMG\">
\t\t\t\t</div>

\t\t\t\t<form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a class=\"txt2\" href=\"index.html#\">
\t\t\t\t\t\t\t Password?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>



";
        // line 78
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 79
        echo "
    <!--===============================================================================================-->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/vendor/tilt/tilt.jquery.min.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
        <script type=\"8e703751b4472584072304c0-text/javascript\">
            \$('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <script type=\"8e703751b4472584072304c0-text/javascript\">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("layout/js/main.js"), "html", null, true);
        echo "\" type=\"8e703751b4472584072304c0-text/javascript\"></script>

    <script src=\"https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js\" data-cf-settings=\"8e703751b4472584072304c0-|49\" defer=\"\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 105,  255 => 88,  250 => 86,  245 => 84,  241 => 83,  236 => 81,  232 => 79,  214 => 78,  163 => 29,  154 => 28,  141 => 23,  137 => 22,  132 => 20,  127 => 18,  122 => 16,  117 => 14,  112 => 12,  109 => 11,  100 => 10,  89 => 5,  80 => 4,  68 => 110,  66 => 28,  62 => 26,  60 => 10,  56 => 9,  52 => 7,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block title %}
\t    <title>Enablis</title>
    {% endblock %}
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('fonts/logo.ico')}}\" />
    {% block stylesheet %}
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/vendor/bootstrap/css/bootstrap.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/vendor/animate/animate.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/vendor/css-hamburgers/hamburgers.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/vendor/select2/select2.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/css/util.css')}}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('layout/css/main.css')}}\">
    <!--===============================================================================================-->
    {% endblock %}
</head>
<body>
{% block body %}
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic js-tilt\" data-tilt>
\t\t\t\t\t<img src=\"layout/images/img-01.png\" alt=\"IMG\">
\t\t\t\t</div>

\t\t\t\t<form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Password\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a class=\"txt2\" href=\"index.html#\">
\t\t\t\t\t\t\t Password?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>



{% block javascript %}

    <!--===============================================================================================-->
        <script src=\"{{ asset('layout/vendor/jquery/jquery-3.2.1.min.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"{{ asset('layout/vendor/bootstrap/js/popper.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
        <script src=\"{{ asset('layout/vendor/bootstrap/js/bootstrap.min.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"{{ asset('layout/vendor/select2/select2.min.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <!--===============================================================================================-->
        <script src=\"{{ asset('layout/vendor/tilt/tilt.jquery.min.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
        <script type=\"8e703751b4472584072304c0-text/javascript\">
            \$('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\" type=\"8e703751b4472584072304c0-text/javascript\"></script>
    <script type=\"8e703751b4472584072304c0-text/javascript\">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
        <script src=\"{{ asset('layout/js/main.js')}}\" type=\"8e703751b4472584072304c0-text/javascript\"></script>

    <script src=\"https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js\" data-cf-settings=\"8e703751b4472584072304c0-|49\" defer=\"\"></script>
{% endblock %}
{% endblock %}
</body>
</html>
", "layout.html.twig", "/home/faky/Bureau/IntranetEnablis/templates/layout.html.twig");
    }
}
