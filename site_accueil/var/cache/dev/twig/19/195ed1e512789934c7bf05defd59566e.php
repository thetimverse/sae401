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

/* mentions/index.html.twig */
class __TwigTemplate_1488722bcb04289eab830c0f92b5bf0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions/index.html.twig", 1);
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

        echo "Codenames - Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"main mentions\">
    <h2>Crédits et mentions légales</h2>
    <h3>Éditeur</h3>
    <p>
        Le site internet Codenames Marvel est un site non-officiel créé dans le cadre d'un projet académique de deux étudiants de l'IUT de Troyes.
    </p>
    <p>
        <span>Développeurs du site :</span> Julie Van Houdenhove (développement VueJS), Timothée Pluot (développement Symfony)
    </p>
    <p>
        <span>Hébergement</span> <br>
        PulseHeberg <br>
        9, Boulevard de Strasbourg <br>
        83000 Toulon <br>
        https://pulseheberg.com
    </p>

    <h3>Droits d'auteurs</h3>
    <p>
        Les photographies, images, textes, séquences vidéo, animations et autres documents présents sur le site Internet Codenames Marvel sont la propriété de Marvel Comics, Marvel Studios, Czech Games Edition ou de tiers les ayant autorisées à les utiliser.
    </p>
    <p>
        Ces contenus sont protégés par la législation française et internationale sur le droit d’auteur et la propriété intellectuelle. L'article L 122-4 du Code de la propriété intellectuelle indique à ce titre que : « Toute représentation ou reproduction intégrale ou partielle faite sans le consentement de l'auteur ou de ses ayants droit ou ayants cause est illicite. Il en est de même pour la traduction, l'adaptation ou la transformation, l'arrangement ou la reproduction par un art ou un procédé quelconque. »
    </p>

    <h3>Les logotypes et pictogrammes</h3>
    <p>Les logotypes (plus couramment appelés logos) présents sur le site Internet Codenames Marvel sont protégés par le droit de la propriété intellectuelle. Ils ont été réalisés par Julie Van Houdenhove. Toute reproduction ou modification (totale ou partielle) de ces éléments graphiques, sans autorisation préalable et écrite, est interdite.
    </p>
    <p>
        Les pictogrammes proviennent de Google Fonts. Leur utilisation est libre de droit.
    </p>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mentions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Codenames - Mentions légales{% endblock %}

{% block body %}
<div class=\"main mentions\">
    <h2>Crédits et mentions légales</h2>
    <h3>Éditeur</h3>
    <p>
        Le site internet Codenames Marvel est un site non-officiel créé dans le cadre d'un projet académique de deux étudiants de l'IUT de Troyes.
    </p>
    <p>
        <span>Développeurs du site :</span> Julie Van Houdenhove (développement VueJS), Timothée Pluot (développement Symfony)
    </p>
    <p>
        <span>Hébergement</span> <br>
        PulseHeberg <br>
        9, Boulevard de Strasbourg <br>
        83000 Toulon <br>
        https://pulseheberg.com
    </p>

    <h3>Droits d'auteurs</h3>
    <p>
        Les photographies, images, textes, séquences vidéo, animations et autres documents présents sur le site Internet Codenames Marvel sont la propriété de Marvel Comics, Marvel Studios, Czech Games Edition ou de tiers les ayant autorisées à les utiliser.
    </p>
    <p>
        Ces contenus sont protégés par la législation française et internationale sur le droit d’auteur et la propriété intellectuelle. L'article L 122-4 du Code de la propriété intellectuelle indique à ce titre que : « Toute représentation ou reproduction intégrale ou partielle faite sans le consentement de l'auteur ou de ses ayants droit ou ayants cause est illicite. Il en est de même pour la traduction, l'adaptation ou la transformation, l'arrangement ou la reproduction par un art ou un procédé quelconque. »
    </p>

    <h3>Les logotypes et pictogrammes</h3>
    <p>Les logotypes (plus couramment appelés logos) présents sur le site Internet Codenames Marvel sont protégés par le droit de la propriété intellectuelle. Ils ont été réalisés par Julie Van Houdenhove. Toute reproduction ou modification (totale ou partielle) de ces éléments graphiques, sans autorisation préalable et écrite, est interdite.
    </p>
    <p>
        Les pictogrammes proviennent de Google Fonts. Leur utilisation est libre de droit.
    </p>

</div>
{% endblock %}
", "mentions/index.html.twig", "/var/www/sae401/site_accueil/templates/mentions/index.html.twig");
    }
}
