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

/* Match/votrevoix.html.twig */
class __TwigTemplate_ba262d8b6cee540dc56c40a3d9423aa9271b02e921e5e1a02d51568867e01ab2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 13
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
";
    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <!-- Barre Menu -->
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"\\asset\\uploads\\images\\logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Language
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Vertical navbar -->
    <div class=\"vertical-nav bg-white\" id=\"sidebar\">
        <div class=\"py-4 px-3 mb-4 bg-light\">
            <div class=\"media d-flex align-items-center\">
                <div class=\"media-body\">
                    <h5 class=\"m-0\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 41), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </div>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0\">Mon compte</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/Mesvoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Mes voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Votrevoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Votre voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Match\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Mes matchs
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-address-card mr-3 text-primary fa-fw\"></i>
                    Mon profil
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/list\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-cubes mr-3 text-primary fa-fw\"></i>
                    Messages
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil/Search/test\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Rechercher
                </a>
            </li>

        </ul>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0\">Autres</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/apropos\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-area-chart mr-3 text-primary fa-fw\"></i>
                    A propos
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/contacteznous\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-bar-chart mr-3 text-primary fa-fw\"></i>
                    Contactez-nous
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Paramètres
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Logout\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Se déconnecter
                </a>
            </li>
        </ul>
    </div>
    <!-- Fin navbar -->
    <div class=\"row py-5 px-4\">
        <div class=\"col-xl-4 col-md-6 col-sm-10 mx-auto\">
            <div class=\"jumbotron\">
                <h3>Ces profils ont aimé votre voix : </h3>
            </div>
            <div class=\"container\">


                ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["matchs"] ?? null), "0", [], "array", true, true, false, 126)) {
            // line 127
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["matchs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 128
                echo "                        <a class=\"btn btn-success\" href=\"/Profil/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "iduti", [], "any", false, false, false, 128), "html", null, true);
                echo "\"><i class=\"far fa-eye\"></i>Profil</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                ";
        } else {
            // line 131
            echo "                    <h1>Personne n'aime votre voix...</h1>
                ";
        }
        // line 133
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Match/votrevoix.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  220 => 133,  216 => 131,  213 => 130,  204 => 128,  199 => 127,  197 => 126,  107 => 41,  78 => 14,  74 => 13,  66 => 8,  62 => 7,  55 => 3,  51 => 2,  47 => 13,  45 => 7,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
{% endblock %}
{% block css %}
    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
{% endblock %}
{% block body %}
    <!-- Barre Menu -->
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"\\asset\\uploads\\images\\logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Language
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Vertical navbar -->
    <div class=\"vertical-nav bg-white\" id=\"sidebar\">
        <div class=\"py-4 px-3 mb-4 bg-light\">
            <div class=\"media d-flex align-items-center\">
                <div class=\"media-body\">
                    <h5 class=\"m-0\">{{ session.uti_prenom }} {{ session.uti_nom }}</h5>
                </div>
            </div>
        </div>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0\">Mon compte</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/Mesvoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Mes voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Votrevoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Votre voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Match\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Mes matchs
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-address-card mr-3 text-primary fa-fw\"></i>
                    Mon profil
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/list\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-cubes mr-3 text-primary fa-fw\"></i>
                    Messages
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil/Search/test\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Rechercher
                </a>
            </li>

        </ul>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0\">Autres</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/apropos\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-area-chart mr-3 text-primary fa-fw\"></i>
                    A propos
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/contacteznous\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-bar-chart mr-3 text-primary fa-fw\"></i>
                    Contactez-nous
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Paramètres
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Logout\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Se déconnecter
                </a>
            </li>
        </ul>
    </div>
    <!-- Fin navbar -->
    <div class=\"row py-5 px-4\">
        <div class=\"col-xl-4 col-md-6 col-sm-10 mx-auto\">
            <div class=\"jumbotron\">
                <h3>Ces profils ont aimé votre voix : </h3>
            </div>
            <div class=\"container\">


                {% if matchs['0'] is defined  %}
                    {% for match in matchs %}
                        <a class=\"btn btn-success\" href=\"/Profil/{{ match.iduti }}\"><i class=\"far fa-eye\"></i>Profil</a>
                    {% endfor %}
                {% else %}
                    <h1>Personne n'aime votre voix...</h1>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "Match/votrevoix.html.twig", "C:\\dev\\www\\git\\templates\\Match\\votrevoix.html.twig");
    }
}
