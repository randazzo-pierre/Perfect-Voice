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

/* User/utilisateur.html.twig */
class __TwigTemplate_aff1cd1bd44eb2417ec578dc02e6b8889e84677483cfe0e761748ade6ea213f0 extends Template
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
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
    <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\"
                                                  alt=\"Logo Perfect Voice\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
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
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 44), "html", null, true);
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
            <a href=\"/Rechercher\" class=\"nav-link text-light font-italic bg-danger\">
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

    <div class=\"jumbotron\">
        <p></p>
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <tbody>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_PRENOM", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_NOM", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_MAIL", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_SEXE", [], "any", false, false, false, 136), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_AGE", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_VILLE", [], "any", false, false, false, 144), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'incription</th>
                <td>";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_INSCRIPTION", [], "any", false, false, false, 148), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Derniere connection</th>
                <td>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "UTI_STATUTCON", [], "any", false, false, false, 152), "html", null, true);
        echo "</td>
            </tr>
            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                <h5 class=\"mb-0\">Tu aimes cette voix ?</h5><a href=\"/Match/";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "ID_UTI", [], "any", false, false, false, 155), "html", null, true);
        echo "\" class=\"btn btn-link text-muted\">J'aime</a>
            </div>
            </tbody>
        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "User/utilisateur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 155,  246 => 152,  239 => 148,  232 => 144,  225 => 140,  218 => 136,  211 => 132,  204 => 128,  197 => 124,  112 => 44,  82 => 16,  78 => 15,  69 => 8,  65 => 7,  58 => 2,  54 => 1,  50 => 15,  47 => 14,  45 => 7,  42 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
{% endblock %}

{% block css %}
    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
{% endblock %}

{% block body %}
<nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
    <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\"
                                                  alt=\"Logo Perfect Voice\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
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
            <a href=\"/Rechercher\" class=\"nav-link text-light font-italic bg-danger\">
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

    <div class=\"jumbotron\">
        <p></p>
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <tbody>
            <tr>
                <th>Prenom</th>
                <td>{{ userData.UTI_PRENOM }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ userData.UTI_NOM }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ userData.UTI_MAIL }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ userData.UTI_SEXE }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ userData.UTI_AGE }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ userData.UTI_VILLE }}</td>
            </tr>
            <tr>
                <th>Date d'incription</th>
                <td>{{ userData.UTI_INSCRIPTION }}</td>
            </tr>
            <tr>
                <th>Derniere connection</th>
                <td>{{ userData.UTI_STATUTCON }}</td>
            </tr>
            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                <h5 class=\"mb-0\">Tu aimes cette voix ?</h5><a href=\"/Match/{{ userData.ID_UTI }}\" class=\"btn btn-link text-muted\">J'aime</a>
            </div>
            </tbody>
        </table>
    </div>


{% endblock %}", "User/utilisateur.html.twig", "C:\\dev\\www\\git\\templates\\User\\utilisateur.html.twig");
    }
}
