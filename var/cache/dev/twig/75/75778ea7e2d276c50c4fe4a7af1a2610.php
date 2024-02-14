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

/* event/index.html.twig */
class __TwigTemplate_b7ec9d17a2b6234e0e468f978d43b1d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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
        echo "\t<div class=\"event\">
\t\t<img
\t\tsrc=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "img", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"img-fluid layout\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t";
        // line 11
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new RuntimeError('Variable "quotes" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 12
            echo "\t\t\t<section style='background-color: #c1c1c1;' class=\"\">
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\tclass=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t";
            // line 21
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\tclass=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t";
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t«
\t\t\t\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t»
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<figcaption
\t\t\t\t\t\t\t\t\tclass=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t";
            // line 34
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "author", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t<div class=\"container text-center\">
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t";
        // line 46
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pillars"]) || array_key_exists("pillars", $context) ? $context["pillars"] : (function () { throw new RuntimeError('Variable "pillars" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pillar"]) {
            // line 47
            echo "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"#";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t\t\t\t";
            // line 51
            echo "\t\t\t\t\t\t\t";
            if ((((twig_date_format_filter($this->env, "now", "d/n/Y") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 51), "d/n/Y")) && (twig_date_format_filter($this->env, "now", "n") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 51), "n"))) && (twig_date_format_filter($this->env, "now", "Y") == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 51), "Y")))) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card mb-3\">
\t\t\t\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "icon", [], "any", false, false, false, 55), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t";
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "text", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t";
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\" class=\"btn btn-primary\">En savoir plus</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 67
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t";
                // line 69
                echo "\t\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t";
                // line 71
                echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "icon", [], "any", false, false, false, 71), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t";
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 76), "html", null, true);
                echo "\" sera mis en ligne le
\t\t\t\t\t\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 81
                echo "\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 85
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pillar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t</div>
\t\t\t";
        // line 88
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["content"]);
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 89
            echo "\t\t\t\t";
            // line 90
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "requesturi", [], "any", false, false, false, 90) == ("/?card=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "name", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)))) {
                // line 91
                echo "\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "name", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t";
                // line 93
                echo "\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "linkVideo", [], "any", false, false, false, 93), "html", null, true);
                echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"presentation\">
\t\t\t\t\t";
                // line 97
                echo "\t\t\t\t\t\t<h3>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "presentationTitle", [], "any", false, false, false, 97), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t";
                // line 99
                echo "\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "presentationText", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t\t<div class=\"col col-lg-9 col-xl-7\">
\t\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp\" alt=\"Bulb\" width=\"100\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<figure class=\"text-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lead font-italic\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "cardQuote", [], "any", false, false, false, 114), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-right fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "cardQuoteAuthor", [], "any", false, false, false, 120), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 129
                echo "\t\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t\t";
                // line 131
                echo "\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t";
            // line 133
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t</div>
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
        return "event/index.html.twig";
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
        return array (  326 => 134,  320 => 133,  318 => 132,  315 => 131,  313 => 130,  310 => 129,  298 => 120,  289 => 114,  271 => 99,  266 => 97,  259 => 93,  254 => 91,  251 => 90,  249 => 89,  244 => 88,  241 => 86,  235 => 85,  231 => 82,  228 => 81,  222 => 77,  217 => 76,  212 => 74,  206 => 71,  203 => 69,  201 => 68,  198 => 67,  191 => 63,  186 => 61,  181 => 59,  174 => 55,  170 => 52,  167 => 51,  163 => 49,  159 => 47,  154 => 46,  149 => 42,  134 => 34,  125 => 27,  122 => 26,  114 => 21,  104 => 12,  99 => 11,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<div class=\"event\">
\t\t<img
\t\tsrc=\"{{ event.img }}\" class=\"img-fluid layout\" alt=\"Image de {{ event.name }}\">
\t\t{# Pour chaque citation dans les citations envoyées à la vues #}
\t\t{% for quote in quotes %}
\t\t\t<section style='background-color: #c1c1c1;' class=\"\">
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\tclass=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t{# On affiche le titre de la citation #}
\t\t\t\t\t\t\t\t\t\t{{ quote.title }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\tclass=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t{# On affiche le texte de la citation #}
\t\t\t\t\t\t\t\t\t\t«
\t\t\t\t\t\t\t\t\t\t{{ quote.text }}
\t\t\t\t\t\t\t\t\t\t»
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<figcaption
\t\t\t\t\t\t\t\t\tclass=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t{# On affiche l'auteur de la citation #}
\t\t\t\t\t\t\t\t\t{{ quote.author }}
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endfor %}
\t\t<div class=\"container text-center\">
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t{# Pour chaque piliers envoyées à la vue #}
\t\t\t\t{% for pillar in pillars %}
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"#{{ pillar.id }}\" method=\"get\">
\t\t\t\t\t\t\t{# Si la date actuelle est plus grande ou égale à la date de démarrage du pilier et que le mois actuelle est supérieur ou égale à la date de démarrage du pilier #}
\t\t\t\t\t\t\t{% if \"now\"|date(\"d/n/Y\") >= pillar.startDate|date(\"d/n/Y\")  and \"now\"|date(\"n\") >= pillar.startDate|date(\"n\") and \"now\"|date(\"Y\") == pillar.startDate|date(\"Y\")%}
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card mb-3\">
\t\t\t\t\t\t\t\t\t{# On affiche l'icon du pilier #}
\t\t\t\t\t\t\t\t\t<i class=\"{{ pillar.icon }}\"></i>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t{# On affiche le titre du pilier #}
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ pillar.name }}</h5>
\t\t\t\t\t\t\t\t\t\t{# On affiche le text du pilier #}
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ pillar.text }}</p>
\t\t\t\t\t\t\t\t\t\t{# On cache  envoie le formulaire pour pouvoir afficher le contenu du pilier #}
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"{{ pillar.id }}\" class=\"btn btn-primary\">En savoir plus</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# Sinon la date actuelle est plus petite que la date de démarrage du pillier et que le moi actuelle est inférieur à la date de démarrage du pilier #}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{# La div prend une class hidden qui va faire en sorte de baisser son opacitée #}
\t\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t{# On affiche l'icon #}
\t\t\t\t\t\t\t\t\t<i class=\"{{ pillar.icon }}\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t{# On affiche le titre du pilier #}
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ pillar.name }}</h5>
\t\t\t\t\t\t\t\t\t\t{# On affiche un message stipulant que le pilier n'est pas encore mis en ligne et qu'il le sera en affichant la date de démarrage du pilier #}
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier \"{{ pillar.name }}\" sera mis en ligne le
\t\t\t\t\t\t\t\t\t\t\t{{ pillar.startDate|date(\"d/m/Y\") }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# Fin de la condition si et sinon des piliers #}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t{# Fin pour la boucle des piliers #}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t{# Pour chaque contenu dans contenu #}
\t\t\t{% for content in content %}
\t\t\t\t{# Si le paramètre de l'url est égale a /?card= plus l'id du pilier stockée dans le contenu #}
\t\t\t\t{% if app.request.requesturi == \"/?card=\" ~ content.name.id  %}
\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"{{ content.name.id }}\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t{# On affiche la vidéo du contenu #}
\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"{{ content.linkVideo }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"presentation\">
\t\t\t\t\t{# On affiche le titre du présentation du contenu  #}
\t\t\t\t\t\t<h3>{{ content.presentationTitle }}</h3>
\t\t\t\t\t\t{# On affiche le texte de présentation du contenu #}
\t\t\t\t\t\t<p>{{ content.presentationText }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t\t<div class=\"col col-lg-9 col-xl-7\">
\t\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp\" alt=\"Bulb\" width=\"100\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<figure class=\"text-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# On affiche le texte de la citation de la carte présente dans le contenu #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lead font-italic\">{{ content.cardQuote }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-right fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t\t\t{# On affiche l'autheur de la citation de la carte présente dans le contenu #}
\t\t\t\t\t\t\t\t\t\t\t\t{{ content.cardQuoteAuthor }}
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# Sinon vu que nous n'avons rien à afficher tant que l'utilisateur n'as pas cliqué sur un des boutons on laisse le \"else\" vide #}
\t\t\t\t\t{% else %}
\t\t\t\t\t{# Fin du Si l'utilisateur a cliqué sur un des boutons #}
\t\t\t\t{% endif %}
\t\t\t\t{# Fin de la boucle des contenues #}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "event/index.html.twig", "/home/kimiko/dev/Stage-Diocese-de-Gap/templates/event/index.html.twig");
    }
}
