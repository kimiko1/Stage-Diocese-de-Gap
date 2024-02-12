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
        echo "\t";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })()));
        }
        // line 8
        echo "\t<div class=\"event\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "img", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"img-fluid layout\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new RuntimeError('Variable "quotes" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 11
            echo "\t\t\t<section class=\"bg-light\">
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t«
\t\t\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t»
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "author", [], "any", false, false, false, 27), "html", null, true);
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
        // line 35
        echo "\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pillars"]) || array_key_exists("pillars", $context) ? $context["pillars"] : (function () { throw new RuntimeError('Variable "pillars" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pillar"]) {
            // line 38
            echo "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form action=\"#";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t\t\t\t";
            // line 40
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 40), "d/m/Y") > twig_date_format_filter($this->env, "now", "d/m/Y"))) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t\t<i class=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "icon", [], "any", false, false, false, 42), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier prière sera mis en ligne le
\t\t\t\t\t\t\t\t\t\t\t";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "startDate", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "icon", [], "any", false, false, false, 51), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "text", [], "any", false, false, false, 54), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" id=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "\"></input>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pillar"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pillar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</div>
\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["content"]);
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 65
            echo "\t\t
\t\t\t";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "requesturi", [], "any", false, false, false, 66) == ("/?card=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "name", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
                // line 67
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "
\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "name", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
\t\t\t\t\t<iframe width=\"1070\" height=\"451\" src=\"https://www.youtube.com/embed/HTPeWHZ2RPQ\" title=\"Un Carême pour prier car avec le Carême vient le temps salvateur du désert.\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h3>Thérèse et la prière</h3>
\t\t\t\t\t<p>Thérèse est sans doute la fille la plus connectée de la bande. Saura-t-elle quitter son smartphone des yeux, tandis qu’elle explore avec ses amis de nouveaux horizons ? Quand elle ouvre les yeux sur la beauté du monde, Thérèse retrouve le chemin de la prière. Son cœur est prêt ; une rencontre inattendue l’attend, pour sa plus grande joie.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-9 col-xl-7\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-5\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp\" alt=\"Bulb\" width=\"100\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<figure class=\"text-center mb-0\">
\t\t\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lead font-italic\">Je suis croyante depuis l’enfance, mais Dieu me paraissait toujours inaccessible, loin de ma vie. J’essayais de vivre en chrétienne, mais ça sonnait un peu creux. Quand j’ai appris à prier (au début, c’était avec des amis), c’est comme si on m’avait donné la clé d’une porte verrouillée. Derrière la porte, il y avait le Seigneur qui m’attendait, les bras ouverts ! Ce qui me manquait avant, c’était d’avoir une relation personnelle avec Dieu. La prière, c’est cette relation vivante, toujours nouvelle. Le plus beau c’est que, grâce à la prière, j’ai enfin compris ce que voulait dire « donner sa vie » !</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-right fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThérèse
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 101
                echo "\t\t\t";
            }
            // line 102
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t</div>
</div>";
        
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
        return array (  279 => 103,  273 => 102,  270 => 101,  234 => 68,  229 => 67,  227 => 66,  224 => 65,  220 => 64,  217 => 63,  209 => 60,  202 => 56,  198 => 55,  194 => 54,  190 => 53,  185 => 51,  182 => 50,  175 => 46,  170 => 44,  165 => 42,  162 => 41,  160 => 40,  156 => 39,  153 => 38,  149 => 37,  145 => 35,  131 => 27,  123 => 22,  116 => 18,  107 => 11,  103 => 10,  97 => 9,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t{% dump(content) %}
\t<div class=\"event\">
\t\t<img src=\"{{ event.img }}\" class=\"img-fluid layout\" alt=\"Image de {{ event.name }}\">
\t\t{% for quote in quotes %}
\t\t\t<section class=\"bg-light\">
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-10 col-xl-8\">
\t\t\t\t\t\t\t<figure class=\"note note-secondary p-4\">
\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t{{ quote.title }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p class=\"pb-2\">
\t\t\t\t\t\t\t\t\t\t«
\t\t\t\t\t\t\t\t\t\t{{ quote.text }}
\t\t\t\t\t\t\t\t\t\t»
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t{{ quote.author }}
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endfor %}
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for pillar in pillars %}
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form action=\"#{{ pillar.id }}\" method=\"get\">
\t\t\t\t\t\t\t{% if pillar.startDate|date(\"d/m/Y\") > \"now\"|date(\"d/m/Y\") %}
\t\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t\t<i class=\"{{ pillar.icon }}\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ pillar.name }}</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier prière sera mis en ligne le
\t\t\t\t\t\t\t\t\t\t\t{{ pillar.startDate|date(\"d/m/Y\") }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"{{ pillar.icon }}\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ pillar.name }}</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ pillar.text }}</p>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" id=\"{{ pillar.name }}\"></input>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"{{ pillar.id }}\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t{% for content in content %}
\t\t
\t\t\t{% if app.request.requesturi == \"/?card=\" ~ content.name.id  %}
\t\t\t{{ content.id }}
\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"{{ content.name.id }}\">
\t\t\t\t\t<iframe width=\"1070\" height=\"451\" src=\"https://www.youtube.com/embed/HTPeWHZ2RPQ\" title=\"Un Carême pour prier car avec le Carême vient le temps salvateur du désert.\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h3>Thérèse et la prière</h3>
\t\t\t\t\t<p>Thérèse est sans doute la fille la plus connectée de la bande. Saura-t-elle quitter son smartphone des yeux, tandis qu’elle explore avec ses amis de nouveaux horizons ? Quand elle ouvre les yeux sur la beauté du monde, Thérèse retrouve le chemin de la prière. Son cœur est prêt ; une rencontre inattendue l’attend, pour sa plus grande joie.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"container py-5 h-100\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"col col-lg-9 col-xl-7\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-5\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp\" alt=\"Bulb\" width=\"100\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<figure class=\"text-center mb-0\">
\t\t\t\t\t\t\t\t\t\t<blockquote class=\"blockquote\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lead font-italic\">Je suis croyante depuis l’enfance, mais Dieu me paraissait toujours inaccessible, loin de ma vie. J’essayais de vivre en chrétienne, mais ça sonnait un peu creux. Quand j’ai appris à prier (au début, c’était avec des amis), c’est comme si on m’avait donné la clé d’une porte verrouillée. Derrière la porte, il y avait le Seigneur qui m’attendait, les bras ouverts ! Ce qui me manquait avant, c’était d’avoir une relation personnelle avec Dieu. La prière, c’est cette relation vivante, toujours nouvelle. Le plus beau c’est que, grâce à la prière, j’ai enfin compris ce que voulait dire « donner sa vie » !</span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-right fa-xs text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<figcaption class=\"blockquote-footer mb-0\">
\t\t\t\t\t\t\t\t\t\t\tThérèse
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div>{% endblock %}
", "event/index.html.twig", "/home/kimiko/dev/Stage-Diocese-de-Gap/templates/event/index.html.twig");
    }
}
