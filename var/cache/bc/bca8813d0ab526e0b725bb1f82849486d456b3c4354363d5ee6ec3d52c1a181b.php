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

/* User/profil.html.twig */
class __TwigTemplate_d77774c38d047dcd5de4b5c24768ab6a279e4072dcdaf3e6bd3a69a91c61fa81 extends Template
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
        echo "        <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
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
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 42), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 42), "html", null, true);
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
    <!-- Fin navbar -->
    <div class=\"row py-5 px-4\">
    <div class=\"col-xl-4 col-md-6 col-sm-10 mx-auto\">

        <!-- Profile widget -->
        <div class=\"bg-white shadow rounded overflow-hidden\">
            <div class=\"px-4 pt-0 pb-4 bg-dark\">
                <div class=\"media align-items-end profile-header\">

                    <div class=\"media-body mb-5 text-white\">
                        <br><br>
                        <br>
                        <h4 class=\"mt-0 mb-0\">BERENGER Benoit</h4>
                        <p class=\"small mb-4\"> <i class=\"fa fa-map-marker mr-2\"></i>Rouen</p>
                    </div>
                </div>
            </div>

            <div class=\"bg-light p-4 d-flex justify-content-end text-center\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item\">
                        <h5 class=\"font-weight-bold mb-0 d-block\">Âge</h5>
                    </li>
                </ul>
            </div>

            <div class=\"py-4 px-4\">
                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                    <h5 class=\"mb-0\">Mes photos</h5><a href=\"#\" class=\"btn btn-link text-muted\">Modifier</a>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 mb-2 pr-lg-1\"><img class=\"imgpro\" src=\"images/benoit1.jpg\"></div>
                    <div class=\"col-lg-6 mb-2 pl-lg-1\"><img class=\"imgpro\" src=\"images/benoit2.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                    <div class=\"col-lg-6 pr-lg-1 mb-2\"><img class=\"imgpro\" src=\"images/bitcoin.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                    <div class=\"col-lg-6 pl-lg-1\"><img class=\"imgpro\" src=\"images/benoit3.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                </div>
                <div class=\"py-4\">
                    <h5 class=\"mb-3\">Ce que j'aime :</h5>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Loisirs</option>
                        <option>Cinéma</option>
                        <option>Séries</option>
                        <option>Théâtre</option>
                        <option>Opéra</option>
                        <option>Echecs</option>
                        <option>Poker</option>
                        <option>Faire de la musique</option>
                        <option>Jardinage</option>
                        <option>Lecture</option>
                        <option>Voyager</option>
                        <option>Patisserie</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Sport</option>
                        <option>Musculation</option>
                        <option>Course</option>
                        <option>Aquagym</option>
                        <option>Danse</option>
                        <option>Equitation</option>
                        <option>Escalade</option>
                        <option>Football</option>
                        <option>Basketball</option>
                        <option>Voleyball</option>
                        <option>Tennis</option>
                        <option>Ping-pong</option>
                    </select>

                </div>
                <div class=\"py-4\">
                    <h5 class=\"mb-3\">Ma voix :</h5>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Timbre de la voix</option>
                        <option>Très aïgue</option>
                        <option>Aïgue</option>
                        <option>Moyenne</option>
                        <option>Grave</option>
                        <option>Très grave</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Accent</option>
                        <option>Du Sud</option>
                        <option>Du Nord</option>
                        <option>Québéquois</option>
                        <option>Chti</option>
                        <option>Parisien</option>
                        <option>Sans</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Autres options</option>
                        <option>Suave</option>
                        <option>Douce</option>
                        <option>Rauque</option>
                        <option>Cristalline</option>
                        <option>Basse</option>
                        <option>Aucun</option>
                    </select>

                </div>
            </div>
        </div><!-- End profile widget -->

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "User/profil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  78 => 14,  74 => 13,  66 => 8,  62 => 7,  55 => 3,  51 => 2,  47 => 13,  45 => 7,  43 => 2,  40 => 1,);
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
    <!-- Fin navbar -->
    <div class=\"row py-5 px-4\">
    <div class=\"col-xl-4 col-md-6 col-sm-10 mx-auto\">

        <!-- Profile widget -->
        <div class=\"bg-white shadow rounded overflow-hidden\">
            <div class=\"px-4 pt-0 pb-4 bg-dark\">
                <div class=\"media align-items-end profile-header\">

                    <div class=\"media-body mb-5 text-white\">
                        <br><br>
                        <br>
                        <h4 class=\"mt-0 mb-0\">BERENGER Benoit</h4>
                        <p class=\"small mb-4\"> <i class=\"fa fa-map-marker mr-2\"></i>Rouen</p>
                    </div>
                </div>
            </div>

            <div class=\"bg-light p-4 d-flex justify-content-end text-center\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item\">
                        <h5 class=\"font-weight-bold mb-0 d-block\">Âge</h5>
                    </li>
                </ul>
            </div>

            <div class=\"py-4 px-4\">
                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                    <h5 class=\"mb-0\">Mes photos</h5><a href=\"#\" class=\"btn btn-link text-muted\">Modifier</a>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 mb-2 pr-lg-1\"><img class=\"imgpro\" src=\"images/benoit1.jpg\"></div>
                    <div class=\"col-lg-6 mb-2 pl-lg-1\"><img class=\"imgpro\" src=\"images/benoit2.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                    <div class=\"col-lg-6 pr-lg-1 mb-2\"><img class=\"imgpro\" src=\"images/bitcoin.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                    <div class=\"col-lg-6 pl-lg-1\"><img class=\"imgpro\" src=\"images/benoit3.jpg\" alt=\"\" class=\"img-fluid rounded shadow-sm\"></div>
                </div>
                <div class=\"py-4\">
                    <h5 class=\"mb-3\">Ce que j'aime :</h5>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Loisirs</option>
                        <option>Cinéma</option>
                        <option>Séries</option>
                        <option>Théâtre</option>
                        <option>Opéra</option>
                        <option>Echecs</option>
                        <option>Poker</option>
                        <option>Faire de la musique</option>
                        <option>Jardinage</option>
                        <option>Lecture</option>
                        <option>Voyager</option>
                        <option>Patisserie</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Sport</option>
                        <option>Musculation</option>
                        <option>Course</option>
                        <option>Aquagym</option>
                        <option>Danse</option>
                        <option>Equitation</option>
                        <option>Escalade</option>
                        <option>Football</option>
                        <option>Basketball</option>
                        <option>Voleyball</option>
                        <option>Tennis</option>
                        <option>Ping-pong</option>
                    </select>

                </div>
                <div class=\"py-4\">
                    <h5 class=\"mb-3\">Ma voix :</h5>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Timbre de la voix</option>
                        <option>Très aïgue</option>
                        <option>Aïgue</option>
                        <option>Moyenne</option>
                        <option>Grave</option>
                        <option>Très grave</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Accent</option>
                        <option>Du Sud</option>
                        <option>Du Nord</option>
                        <option>Québéquois</option>
                        <option>Chti</option>
                        <option>Parisien</option>
                        <option>Sans</option>
                    </select>

                    <select class=\"selectpicker\" multiple data-live-search=\"true\">
                        <option selected class=\"label-txt\">Autres options</option>
                        <option>Suave</option>
                        <option>Douce</option>
                        <option>Rauque</option>
                        <option>Cristalline</option>
                        <option>Basse</option>
                        <option>Aucun</option>
                    </select>

                </div>
            </div>
        </div><!-- End profile widget -->

    </div>
</div>
{% endblock %}", "User/profil.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\profil.html.twig");
    }
}
