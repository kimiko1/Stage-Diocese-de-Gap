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
class __TwigTemplate_d887ef7bb710bbc2221d34000d7ac8a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"home\">
\t\t<img src=\"img/Carême.png\" class=\"img-fluid layout\" alt=\"Responsive image\">
\t\t<section class=\"bg-light\">
\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t<p class=\"pb-2\">

\t\t\t\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
";
        // line 19
        if ((twig_date_format_filter($this->env, "now", "m/d/Y") == "02/10/2024")) {
            // line 20
            echo "
\t\t\t\t\t\t\t\t\tMon chemin de Carême :

   Available
";
        } elseif ((twig_date_format_filter($this->env, "now", "m/d/Y") == "10/02/2024")) {
            // line 25
            echo "   Only ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "stock", [], "any", false, false, false, 25), "html", null, true);
            echo " left!
";
        } else {
            // line 27
            echo "   Sold-out!
";
        }
        // line 29
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t« Le carême est un passage au désert, un temps de pause, de réflexion, de méditation. On pause, on dépose. Et l’on s’interroge sur ces trois points : le jeûne, la prière, la charité. »
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\tFrère Hervé Ponsot
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 29,  121 => 27,  115 => 25,  108 => 20,  106 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}

\t<div class=\"home\">
\t\t<img src=\"img/Carême.png\" class=\"img-fluid layout\" alt=\"Responsive image\">
\t\t<section class=\"bg-light\">
\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t<p class=\"pb-2\">

\t\t\t\t\t\t\t\t\t{{ \"now\"|date(\"d/m/Y\") }}
{% if \"now\"|date(\"m/d/Y\") == \"02/10/2024\" %}

\t\t\t\t\t\t\t\t\tMon chemin de Carême :

   Available
{% elseif \"now\"|date(\"m/d/Y\") == \"10/02/2024\" %}
   Only {{ product.stock }} left!
{% else %}
   Sold-out!
{% endif %}

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t« Le carême est un passage au désert, un temps de pause, de réflexion, de méditation. On pause, on dépose. Et l’on s’interroge sur ces trois points : le jeûne, la prière, la charité. »
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\tFrère Hervé Ponsot
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "home/index.html.twig", "/home/kimiko/dev/Stage-Diocese-de-Gap/templates/home/index.html.twig");
    }
}
