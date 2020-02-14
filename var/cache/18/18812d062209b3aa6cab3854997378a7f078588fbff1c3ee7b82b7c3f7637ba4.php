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

/* User/Gallerie.html.twig */
class __TwigTemplate_0b3b2c2f88dee15230ab59f8559d061c4131328b1c3eaa46c86db557750b962b extends Template
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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 13
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
        // line 6
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
    ";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
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
                <a href=\"/Messages\" class=\"nav-link text-light font-italic bg-danger\">
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
                <a href=\"/contateznous\" class=\"nav-link text-dark font-italic\">
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
<div class=\"row py-5 px-4\">
    <div class=\"mt-5 col-xl-4 col-md-6 col-sm-10 mx-auto\">
        <div class=\"bg-white shadow rounded overflow-hidden\">
            <div class=\"px-4 pt-0 pb-4 bg-white\">
                <div class=\"media align-items-end profile-header\">
<form action=\"BDDPhotos_admin_add_rub.php\" enctype=\"multipart/form-data\"
      method=\"post\">
    Nom:<br/>
    <textarea name=\"frm_textarea_desc\" rows=\"5\" cols=\"40\"></textarea>
    <br/><br/>
    <input type=\"submit\" value=\"Ajouter un album\"/>
</form>

<form action='BDDPhotos_admin_add_img.php'
      enctype='multipart/form-data' method='post'>
    Répertoire des images:<br/>
    <input type='text' name='frm_files_folder' size='40' value='../photos'/>
    <br/><br/>
    Album: \";
    <select name='gal_nom'>


";
        // line 136
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
";
    }

    public function getTemplateName()
    {
        return "User/Gallerie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 137,  207 => 136,  110 => 44,  80 => 16,  76 => 15,  68 => 7,  61 => 6,  55 => 2,  51 => 1,  47 => 15,  43 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>

    {% block css %}
        <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
    {% endblock %}
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
                <a href=\"/Messages\" class=\"nav-link text-light font-italic bg-danger\">
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
                <a href=\"/contateznous\" class=\"nav-link text-dark font-italic\">
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
<div class=\"row py-5 px-4\">
    <div class=\"mt-5 col-xl-4 col-md-6 col-sm-10 mx-auto\">
        <div class=\"bg-white shadow rounded overflow-hidden\">
            <div class=\"px-4 pt-0 pb-4 bg-white\">
                <div class=\"media align-items-end profile-header\">
<form action=\"BDDPhotos_admin_add_rub.php\" enctype=\"multipart/form-data\"
      method=\"post\">
    Nom:<br/>
    <textarea name=\"frm_textarea_desc\" rows=\"5\" cols=\"40\"></textarea>
    <br/><br/>
    <input type=\"submit\" value=\"Ajouter un album\"/>
</form>

<form action='BDDPhotos_admin_add_img.php'
      enctype='multipart/form-data' method='post'>
    Répertoire des images:<br/>
    <input type='text' name='frm_files_folder' size='40' value='../photos'/>
    <br/><br/>
    Album: \";
    <select name='gal_nom'>


{% block javascript %}
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% endblock %}
", "User/Gallerie.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\Gallerie.html.twig");
    }
}
