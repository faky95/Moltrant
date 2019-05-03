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

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_df2b71c666cee8832ddbc1a8c9a8274797667fab107fa8643d22b755f3cf5e2b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/resetLayout.html.twig", "FOSUserBundle:Resetting:request_content.html.twig", 1);
        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/resetLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"wrapper-page\">
            <div class=\"panel panel-color panel-primary panel-pages\">

                <div class=\"panel-heading bg-img\"> 
                    <div class=\"bg-overlay\"></div>
                    <h3 class=\"text-center m-t-10 text-white\"> Reset Password </h3>
                </div> 

                <div class=\"panel-body\">
                 <form method=\"POST\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" role=\"form\" class=\"fos_user_resetting_request\"> 
                    <div class=\"alert alert-info alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class=\"form-group m-b-0\"> 
                        <div class=\"input-group\"> 
                            <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Enter Email\" required=\"\"id=\"username\"name=\"username\"> 
                            <span class=\"input-group-btn\"> <button type=\"submit\" id=\"_submit\" name=\"_submit\"value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"class=\"btn btn-lg btn-primary waves-effect waves-light\">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                </div>                                 
                
            </div>
        </div>
   
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  76 => 13,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@FOSUser/resetLayout.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block fos_user_content %}
    <div class=\"wrapper-page\">
            <div class=\"panel panel-color panel-primary panel-pages\">

                <div class=\"panel-heading bg-img\"> 
                    <div class=\"bg-overlay\"></div>
                    <h3 class=\"text-center m-t-10 text-white\"> Reset Password </h3>
                </div> 

                <div class=\"panel-body\">
                 <form method=\"POST\" action=\"{{ path('fos_user_resetting_send_email') }}\" role=\"form\" class=\"fos_user_resetting_request\"> 
                    <div class=\"alert alert-info alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class=\"form-group m-b-0\"> 
                        <div class=\"input-group\"> 
                            <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Enter Email\" required=\"\"id=\"username\"name=\"username\"> 
                            <span class=\"input-group-btn\"> <button type=\"submit\" id=\"_submit\" name=\"_submit\"value=\"{{ 'resetting.request.submit'|trans }}\"class=\"btn btn-lg btn-primary waves-effect waves-light\">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                </div>                                 
                
            </div>
        </div>
   
</form>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/project/Moltrant-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
