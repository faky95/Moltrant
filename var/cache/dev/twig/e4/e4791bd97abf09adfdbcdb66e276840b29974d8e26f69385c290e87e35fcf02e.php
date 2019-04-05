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

/* service/footer.html.twig */
class __TwigTemplate_7a17ed5cd44e9e429d46947922b0ec23d6571453f5f1c453634e5df39243a1a0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "service/footer.html.twig", 1);
        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 3
        echo "  <footer class=\"footer-area\">
            <div class=\"container\">
                <div class=\"main-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"single-widget mr-50\">
                                <h3>about us</h3>
                                <p>Empowering Ideas Empowering people.
                                    L'équipe d'Enablis reste à l'entière disposition du membre.
                                </p>
                              <!--   <ul>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"single-widget ml-100\">
                                <h3>contact us</h3>
                                <p>09 Rue Jean Mermoz,<br>
                                3e étage Dakar Plateau, Dakar, Senegal<br>
                                Gmail : fatimata.kane@enablis.org<br>
                                Fax :  +221 33 822 20 04<br>
                                Phone : +221 77 936 46 51 </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-xs-12\">
                            <div class=\"single-widget ml-85\">
                                <h3>latest work</h3>
                                <div class=\"footer-img\">
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer1.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer2.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mb-2\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer3.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer4.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer5.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer6.jpg"), "html", null, true);
        echo "\" alt=\"latest-work\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class=\"footer-bottom text-center\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p>Copyright © 2019 <a href=\"\">Enablis</a>. All Right Reserved.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "service/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  65 => 3,  56 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block footer %}
  <footer class=\"footer-area\">
            <div class=\"container\">
                <div class=\"main-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"single-widget mr-50\">
                                <h3>about us</h3>
                                <p>Empowering Ideas Empowering people.
                                    L'équipe d'Enablis reste à l'entière disposition du membre.
                                </p>
                              <!--   <ul>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-facebook\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-vimeo\"></i></a></li>
                                    <li><a href=\"index.html#\"><i class=\"zmdi zmdi-twitter\"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"single-widget ml-100\">
                                <h3>contact us</h3>
                                <p>09 Rue Jean Mermoz,<br>
                                3e étage Dakar Plateau, Dakar, Senegal<br>
                                Gmail : fatimata.kane@enablis.org<br>
                                Fax :  +221 33 822 20 04<br>
                                Phone : +221 77 936 46 51 </p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-5 col-xs-12\">
                            <div class=\"single-widget ml-85\">
                                <h3>latest work</h3>
                                <div class=\"footer-img\">
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"{{asset('img/footer/footer1.jpg')}}\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2 mb-2\"><img src=\"{{asset('img/footer/footer2.jpg')}}\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mb-2\"><img src=\"{{asset('img/footer/footer3.jpg')}}\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"{{asset('img/footer/footer4.jpg')}}\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\" class=\"mr-2\"><img src=\"{{asset('img/footer/footer5.jpg')}}\" alt=\"latest-work\"></a>
                                    <a href=\"article-details.html\"><img src=\"{{asset('img/footer/footer6.jpg')}}\" alt=\"latest-work\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class=\"footer-bottom text-center\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p>Copyright © 2019 <a href=\"\">Enablis</a>. All Right Reserved.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
{% endblock %}", "service/footer.html.twig", "/home/faky/Bureau/IntranetEnablis/templates/service/footer.html.twig");
    }
}
