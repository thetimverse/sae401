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

/* compte/index.html.twig */
class __TwigTemplate_f86ca16bec361c4cf908d995a120cd47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
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

        echo "CodeNames - Profil";
        
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
        echo "
    <div class=\"main\" id=\"profil\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "avatar", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8))), "html", null, true);
        echo "\" id=\"avatar\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

        <div class=\"parties\">
            <h2>Informations personnelles</h2>
            <p>E-mail : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            <p>Nom d'utilisateur : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>

        <div class=\"parties\">
            ";
        // line 18
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "parties", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <h2>Aucune partie trouvée. Si vous souhaitez créer une partie cliquez <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_partie");
            echo "\">ici</a>.</h2>
            ";
        } else {
            // line 21
            echo "            <h2>Parties</h2>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Date de début</th>
                        <th>État</th>
                        <th>Tour</th>
                        <th>Joueur 2</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "parties", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["partie"]) {
                // line 34
                echo "                        <tr>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partie"], "dateDebut", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partie"], "etat", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partie"], "tour", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                (((twig_get_attribute($this->env, $this->source, $context["partie"], "joueur2", [], "any", false, false, false, 38) != null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partie"], "joueur2", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true))) : (print ("Pas de joueur 2")));
                echo "</td>
                            <td><a href=\"https://mmi21f13.sae401.ovh/jeu/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partie"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partie"], "joueur1", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\">Jouer</a></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
                </table>
            ";
        }
        // line 45
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 45,  170 => 42,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  140 => 34,  136 => 33,  122 => 21,  116 => 19,  114 => 18,  107 => 14,  103 => 13,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CodeNames - Profil{% endblock %}

{% block body %}

    <div class=\"main\" id=\"profil\">
        <img src=\"{{ asset('img/avatars/' ~ user.avatar.image) }}\" id=\"avatar\">
        <h1>{{ user.username }}</h1>

        <div class=\"parties\">
            <h2>Informations personnelles</h2>
            <p>E-mail : {{ user.email }}</p>
            <p>Nom d'utilisateur : {{ user.username }}</p>
        </div>

        <div class=\"parties\">
            {% if user.parties is empty %}
            <h2>Aucune partie trouvée. Si vous souhaitez créer une partie cliquez <a href=\"{{ path('app_new_partie') }}\">ici</a>.</h2>
            {% else %}
            <h2>Parties</h2>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Date de début</th>
                        <th>État</th>
                        <th>Tour</th>
                        <th>Joueur 2</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for partie in user.parties %}
                        <tr>
                            <td>{{ partie.dateDebut|date('d/m/Y') }}</td>
                            <td>{{ partie.etat }}</td>
                            <td>{{ partie.tour.username }}</td>
                            <td>{{ partie.joueur2 != null ? partie.joueur2.username : 'Pas de joueur 2' }}</td>
                            <td><a href=\"https://mmi21f13.sae401.ovh/jeu/{{ partie.id }}/{{ partie.joueur1.id }}\">Jouer</a></td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "compte/index.html.twig", "/var/www/sae401/site_accueil/templates/compte/index.html.twig");
    }
}
