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

/* service/inscription.html.twig */
class __TwigTemplate_ba3f69d5bc33ebd7e3dbe5c4b6cb12b5791d77d41dd36ba4ff90c901861e6cd2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("serviceLayout.html.twig", "service/inscription.html.twig", 1);
        $this->blocks = [
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "serviceLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 6
        echo "<div class=\" wrapper\">
 <!-- Form-validation -->
                <div class=\"row\">

                    <div class=\"col-sm-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"><h3 class=\"panel-title\">Inscription Programme Enabler</h3></div>
                            <div class=\"panel-body\">
                                <div class=\"form\">
                                    <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\" novalidate=\"novalidate\">
                                        <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Nom</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo "\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Prenom</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", []), "prenom", []), "html", null, true);
        echo "\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Email</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", []), "email", []), "html", null, true);
        echo "\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Telephone</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", []), "telephone", []), "html", null, true);
        echo "\" readonly>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"firstname\" class=\"control-label col-lg-2\">Fonction Actuelle <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "fonction_actuelle", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"lastname\" class=\"control-label col-lg-2\">Experience Professionnelle <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "experience_professionnelle", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                       
                                        <div class=\"form-group\">
                                            <label for=\"specialite\" class=\"control-label col-lg-2\">Competences Specifiques <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "enabler_specialite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"secteur\" class=\"control-label col-lg-2\">Experiences Sectorielles <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "enabler_secteur", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>

                                         <div class=\"form-group\">
                                            <label for=\"heure\" class=\"control-label col-lg-2\">Heure <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "heure", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"precision\" class=\"control-label col-lg-2\">Autres Precisions</label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "precisions", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            </div>
                                        </div>


                                        <div class=\"form-group\">
                                            <div class=\"col-lg-offset-2 col-lg-10\">
                                            \t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "save", []), 'widget');
        echo "
                                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "cancel", []), 'widget', ["attr" => ["class" => "btn btn-die"]]);
        echo "

                                                ";
        // line 87
        echo "                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 100
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--form validation-->
        ";
        // line 106
        echo "
        <!--form validation init-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 106,  260 => 103,  251 => 102,  239 => 100,  230 => 99,  209 => 87,  204 => 83,  200 => 82,  190 => 75,  181 => 69,  171 => 62,  162 => 56,  152 => 49,  143 => 43,  134 => 37,  125 => 31,  116 => 25,  107 => 19,  100 => 15,  89 => 6,  80 => 5,  68 => 3,  59 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'serviceLayout.html.twig' %}
{% block header %}
{{parent()}}
{% endblock %}
{% block section %}
<div class=\" wrapper\">
 <!-- Form-validation -->
                <div class=\"row\">

                    <div class=\"col-sm-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"><h3 class=\"panel-title\">Inscription Programme Enabler</h3></div>
                            <div class=\"panel-body\">
                                <div class=\"form\">
                                    <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"post\" action=\"{{path('inscription')}}\" novalidate=\"novalidate\">
                                        <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Nom</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"{{app.user.nom}}\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Prenom</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"{{app.user.prenom}}\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Email</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"{{app.user.email}}\" readonly>
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"nom\" class=\"control-label col-lg-2\">Votre Telephone</label>
                                            <div class=\"col-lg-10\">
                                                <input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" value=\"{{app.user.telephone}}\" readonly>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"firstname\" class=\"control-label col-lg-2\">Fonction Actuelle <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                    {{ form_widget(form.fonction_actuelle, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"lastname\" class=\"control-label col-lg-2\">Experience Professionnelle <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     {{ form_widget(form.experience_professionnelle, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>
                                       
                                        <div class=\"form-group\">
                                            <label for=\"specialite\" class=\"control-label col-lg-2\">Competences Specifiques <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     {{ form_widget(form.enabler_specialite, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"secteur\" class=\"control-label col-lg-2\">Experiences Sectorielles <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     {{ form_widget(form.enabler_secteur, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>

                                         <div class=\"form-group\">
                                            <label for=\"heure\" class=\"control-label col-lg-2\">Heure <span style=\"color:red;\">*</span></label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     {{ form_widget(form.heure, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"precision\" class=\"control-label col-lg-2\">Autres Precisions</label>
                                            <div class=\"col-lg-10\">
\t\t\t                                     {{ form_widget(form.precisions, {'attr': {'class': 'form-control'}} ) }}
                                            </div>
                                        </div>


                                        <div class=\"form-group\">
                                            <div class=\"col-lg-offset-2 col-lg-10\">
                                            \t{{ form_widget(form.save) }}
                                                {{ form_widget(form.cancel, {attr: {class: 'btn btn-die'}}) }}

                                                {# <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\">Enregistrer</button>
                                                <button class=\"btn btn-default waves-effect\" type=\"button\">Annuler</button> #}
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->
</div>
{% endblock %}
{% block footer %}
{{parent()}}
{% endblock %}
{% block javascripts %}
{{parent()}}
    <!--form validation-->
        {# <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}\"></script> #}

        <!--form validation init-->
        {# <script src=\"{{ asset('assets/pages/form-validation-init.js')}}\"></script> #}
{% endblock %}", "service/inscription.html.twig", "/home/faky/Documents/Moltrant/templates/service/inscription.html.twig");
    }
}
