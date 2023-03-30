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

/* menu.html.twig */
class __TwigTemplate_b563f1005f4a84b44e2dfad954f3130f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<header class=\"header\" id=\"header\">
    <nav class=\"nav container\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"nav__logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        <div class=\"nav__menu\" id=\"nav-menu\">
            <ul class=\"nav__list\">
                <li class=\"nav__item\">
                    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7) == "app_accueil")) ? ("link-active") : (""));
        echo "\">Accueil</a>
                </li>
                <li class=\"nav__item\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manifestations");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "app_manifestations")) ? ("link-active") : (""));
        echo "\">Évènements</a>
                </li>
                <li class=\"nav__item\">
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieux");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "app_lieux")) ? ("link-active") : (""));
        echo "\">Lieux culturels</a>
                </li>
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    <li class=\"nav__item\">
                        <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "app_admin")) ? ("link-active") : (""));
            echo "\">Admin</a>
                    </li>
                ";
        }
        // line 20
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    <li class=\"nav__item\">
                        <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", [0 => "_route"], "method", false, false, false, 22) == "app_panier")) ? ("link-active") : (""));
            echo "\"><i class=\"material-icons\">shopping_cart</i><span id=\"panier\"></span></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compte");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25) == "app_compte")) ? ("link-active") : (""));
            echo "\"><i class=\"material-icons\">account_circle</i></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", [0 => "_route"], "method", false, false, false, 28) == "app_logout")) ? ("link-active") : (""));
            echo "\"><i class=\"material-icons\">logout</i></a>
                    </li>
                ";
        } else {
            // line 31
            echo "                    <li class=\"nav__item\">
                        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "app_register")) ? ("link-active") : (""));
            echo "\">Inscription</a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35) == "app_panier")) ? ("link-active") : (""));
            echo "\"><i class=\"material-icons\">shopping_cart</i><span id=\"panier\"></span></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38) == "app_login")) ? ("link-active") : (""));
            echo "\"><i class=\"material-icons\">account_circle</i></a>
                    </li>
                ";
        }
        // line 41
        echo "            </ul>
        </div>

        <!-- Toggle button -->
        <div class=\"nav__toggle\" id=\"nav-toggle\">
            <i class=\"fa-solid fa-bars ouvrir\"></i>
            <i class=\"fa-solid fa-xmark fermer\"></i>
        </div>
    </nav>
</header>

<script>

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  141 => 38,  133 => 35,  125 => 32,  122 => 31,  114 => 28,  106 => 25,  98 => 22,  95 => 21,  92 => 20,  84 => 17,  81 => 16,  79 => 15,  72 => 13,  64 => 10,  56 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" id=\"header\">
    <nav class=\"nav container\">
        <a href=\"{{ path('app_accueil')}}\" class=\"nav__logo\"><img src=\"{{asset ('img/logo.svg')}}\" alt=\"logo\"></a>
        <div class=\"nav__menu\" id=\"nav-menu\">
            <ul class=\"nav__list\">
                <li class=\"nav__item\">
                    <a href=\"{{ path('app_accueil')}}\" class=\"{{ app.request.get('_route') == 'app_accueil' ? 'link-active' }}\">Accueil</a>
                </li>
                <li class=\"nav__item\">
                    <a href=\"{{ path('app_manifestations')}}\" class=\"{{ app.request.get('_route') == 'app_manifestations' ? 'link-active' }}\">Évènements</a>
                </li>
                <li class=\"nav__item\">
                    <a href=\"{{ path('app_lieux')}}\" class=\"{{ app.request.get('_route') == 'app_lieux' ? 'link-active' }}\">Lieux culturels</a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_admin')}}\" class=\"{{ app.request.get('_route') == 'app_admin' ? 'link-active' }}\">Admin</a>
                    </li>
                {% endif %}
                {% if app.user %}
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_panier')}}\" class=\"{{ app.request.get('_route') == 'app_panier' ? 'link-active' }}\"><i class=\"material-icons\">shopping_cart</i><span id=\"panier\"></span></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_compte')}}\" class=\"{{ app.request.get('_route') == 'app_compte' ? 'link-active' }}\"><i class=\"material-icons\">account_circle</i></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_logout')}}\" class=\"{{ app.request.get('_route') == 'app_logout' ? 'link-active' }}\"><i class=\"material-icons\">logout</i></a>
                    </li>
                {% else %}
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_register')}}\" class=\"{{ app.request.get('_route') == 'app_register' ? 'link-active' }}\">Inscription</a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_panier')}}\" class=\"{{ app.request.get('_route') == 'app_panier' ? 'link-active' }}\"><i class=\"material-icons\">shopping_cart</i><span id=\"panier\"></span></a>
                    </li>
                    <li class=\"nav__item\">
                        <a href=\"{{ path('app_login')}}\" class=\"{{ app.request.get('_route') == 'app_login' ? 'link-active' }}\"><i class=\"material-icons\">account_circle</i></a>
                    </li>
                {% endif %}
            </ul>
        </div>

        <!-- Toggle button -->
        <div class=\"nav__toggle\" id=\"nav-toggle\">
            <i class=\"fa-solid fa-bars ouvrir\"></i>
            <i class=\"fa-solid fa-xmark fermer\"></i>
        </div>
    </nav>
</header>

<script>

</script>", "menu.html.twig", "/var/www/sae401/site_accueil/templates/menu.html.twig");
    }
}
