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
\t\t\t\t\t\t\t\t\tMon chemin de Carême :
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
\t\t\t\t\t<form action=\"#priere\" method=\"get\">
\t\t\t\t\t\t";
        // line 35
        if ((twig_date_format_filter($this->env, "now", "m/d/Y") != "02/12/2024")) {
            // line 36
            echo "\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier prière
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsera mis en ligne le 14 Février</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Marcher au désert nous éloigne des bruits de notre vie. Dans le silence enfin revenu, laissons monter le murmure de la prière. C’est à l’heure la plus chaude, celle où nous avons soif, que Jésus vient à notre rencontre. Aussi humble soit-elle, la prière est toujours la rencontre de deux soifs, celle de Dieu et la nôtre. Faire silence, prier, écouter ; le carême nous invite au cœur à cœur, source véritable d’amour et de paix.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" id=\"test\"></input>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"priere\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form action=\"#jeune\" method=\"get\">
\t\t\t\t\t";
        // line 59
        if ((twig_date_format_filter($this->env, "now", "m/d/Y") != "02/25/2024")) {
            // line 60
            echo "\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Cera activé le : 13/02/2024</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form>
\t\t\t\t\t";
        // line 80
        if ((twig_date_format_filter($this->env, "now", "m/d/Y") != "03/10/2024")) {
            // line 81
            echo "\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Cera activé le : 13/02/2024</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "requesturi", [], "any", false, false, false, 100) == "/?card=priere")) {
            // line 101
            echo "\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"priere\">
\t\t\t\t<iframe width=\"1070\" height=\"451\" src=\"https://www.youtube.com/embed/HTPeWHZ2RPQ\" title=\"Un Carême pour prier car avec le Carême vient le temps salvateur du désert.\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"Thérèse\">
\t\t\t\t<h3>Thérèse et la prière</h3>
\t\t\t\t<p>Thérèse est sans doute la fille la plus connectée de la bande.</p>
\t\t\t\t<p>Saura-t-elle quitter son smartphone des yeux, tandis qu’elle explore avec ses amis de nouveaux horizons ?</p>
\t\t\t\t<p>Quand elle ouvre les yeux sur la beauté du monde, Thérèse retrouve le chemin de la prière.</p>
\t\t\t\t<p>Son cœur est prêt ; une rencontre inattendue l’attend, pour sa plus grande joie.</p>
\t\t\t</div>
\t\t\t<section>
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
\t\t\t</section>
\t\t\t";
        } else {
            // line 139
            echo "\t\t";
        }
        // line 140
        echo "\t</div>
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
        return array (  250 => 140,  247 => 139,  207 => 101,  205 => 100,  200 => 97,  190 => 89,  180 => 81,  178 => 80,  172 => 76,  162 => 68,  152 => 60,  150 => 59,  144 => 55,  132 => 45,  121 => 36,  119 => 35,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t\t\tMon chemin de Carême :
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
\t\t\t\t\t<form action=\"#priere\" method=\"get\">
\t\t\t\t\t\t{% if \"now\"|date(\"m/d/Y\") != \"02/12/2024\" %}
\t\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le pilier prière
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsera mis en ligne le 14 Février</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-hands-praying fa-bounce fa-2x\"></i>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La prière</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Marcher au désert nous éloigne des bruits de notre vie. Dans le silence enfin revenu, laissons monter le murmure de la prière. C’est à l’heure la plus chaude, celle où nous avons soif, que Jésus vient à notre rencontre. Aussi humble soit-elle, la prière est toujours la rencontre de deux soifs, celle de Dieu et la nôtre. Faire silence, prier, écouter ; le carême nous invite au cœur à cœur, source véritable d’amour et de paix.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" id=\"test\"></input>
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"card\" value=\"priere\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form action=\"#jeune\" method=\"get\">
\t\t\t\t\t{% if \"now\"|date(\"m/d/Y\") != \"02/25/2024\" %}
\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Cera activé le : 13/02/2024</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bread-slice fa-fade fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Le jeûne</h5>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form>
\t\t\t\t\t{% if \"now\"|date(\"m/d/Y\") != \"03/10/2024\" %}
\t\t\t\t\t\t<div class=\"card mb-3 hidden\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Cera activé le : 13/02/2024</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-heart fa-beat fa-2x\"></i>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">La charité</h5>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t{% if app.request.requesturi == \"/?card=priere\" %}
\t\t\t<div class=\"embed-responsive embed-responsive-16by9\" id=\"priere\">
\t\t\t\t<iframe width=\"1070\" height=\"451\" src=\"https://www.youtube.com/embed/HTPeWHZ2RPQ\" title=\"Un Carême pour prier car avec le Carême vient le temps salvateur du désert.\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"Thérèse\">
\t\t\t\t<h3>Thérèse et la prière</h3>
\t\t\t\t<p>Thérèse est sans doute la fille la plus connectée de la bande.</p>
\t\t\t\t<p>Saura-t-elle quitter son smartphone des yeux, tandis qu’elle explore avec ses amis de nouveaux horizons ?</p>
\t\t\t\t<p>Quand elle ouvre les yeux sur la beauté du monde, Thérèse retrouve le chemin de la prière.</p>
\t\t\t\t<p>Son cœur est prêt ; une rencontre inattendue l’attend, pour sa plus grande joie.</p>
\t\t\t</div>
\t\t\t<section>
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
\t\t\t</section>
\t\t\t{% else %}
\t\t{% endif %}
\t</div>
{% endblock %}
", "home/index.html.twig", "/home/kimiko/dev/Stage-Diocese-de-Gap/templates/home/index.html.twig");
    }
}
