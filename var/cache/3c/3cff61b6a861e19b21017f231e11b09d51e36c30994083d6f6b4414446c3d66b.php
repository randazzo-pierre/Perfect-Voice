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

/* User/Resultat.html.twig */
class __TwigTemplate_ef3a6237ca5b0cc86092260b2368061ec0c491304e09b4de69923400d495889f extends Template
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
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
";
        // line 15
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

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
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
                    <img src=\"\" alt=\"...\" width=\"65\" class=\"mr-3 rounded-circle img-thumbnail shadow-sm\">
                    <h5 class=\"m-0\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 45), "html", null, true);
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
                <a href=\"/Profil/Search\" class=\"nav-link text-light font-italic bg-danger\">
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

    <div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">

        <!-- Recherche -->
        <br/><br/><br/><br/><br/><br/><br/>
        <section class=\"search-banner text-white py-3 form-arka-plan\" id=\"search-banner\">
            <div class=\"container py-5 my-5\">
                <div class=\"row text-center pb-8\">
                    <div class=\"col-md-12\">
                    </div>
                </div>
                <div class=\"row\">
                    <h2 id=\"recherchevoix\"> Que recherche tu ?</h2>
                    <div class=\"col-md-10\">
                        <div class=\"card acik-renk-form\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group \">
                                            <select name=\"\" id=\"iller\" class=\"form-control\" >
                                                <option selected>il/elle aime:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group \">
                                            <select id=\"ilceler\" class=\"form-control\" >
                                                <option selected>ainsi que:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <select id=\"arac-turu\" class=\"form-control\" >
                                                <option selected>ainsi que:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class=\"font-weight-light text-dark\"></p>
                                <div class=\"row\">
                                    <form class=\"form-inline\" method=\"get\" action=\"/Profil/Search/Resultat\">

                                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Il/elle aime\" name=\"search\">
                                        <input type=\"submit\"  class=\"btn btn-danger pl-5 pr-5 findsearch\" value=\"Trouver ma voix\"
                                               name=\"searchSubmit\">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <div class=\"container ml-auto\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listUser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 203
            echo "                    <tr>
                        <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                        <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 205), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                </tbody>
            </table>
        </div>
        <br/><br/><br/><br/><br/>

    </div>
    <!-- Barre séparation -->
    <div id=lignerouge></div>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById(\"nav\");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }

        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById(\"sidebar\");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }
    </script>

    ";
        // line 254
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "User/Resultat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 255,  346 => 254,  298 => 208,  289 => 205,  285 => 204,  282 => 203,  278 => 202,  116 => 45,  85 => 16,  81 => 15,  73 => 9,  69 => 8,  62 => 3,  58 => 2,  54 => 15,  51 => 14,  49 => 8,  46 => 7,  44 => 2,  41 => 1,);
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
                    <img src=\"\" alt=\"...\" width=\"65\" class=\"mr-3 rounded-circle img-thumbnail shadow-sm\">
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
                <a href=\"/Profil/Search\" class=\"nav-link text-light font-italic bg-danger\">
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

    <div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">

        <!-- Recherche -->
        <br/><br/><br/><br/><br/><br/><br/>
        <section class=\"search-banner text-white py-3 form-arka-plan\" id=\"search-banner\">
            <div class=\"container py-5 my-5\">
                <div class=\"row text-center pb-8\">
                    <div class=\"col-md-12\">
                    </div>
                </div>
                <div class=\"row\">
                    <h2 id=\"recherchevoix\"> Que recherche tu ?</h2>
                    <div class=\"col-md-10\">
                        <div class=\"card acik-renk-form\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group \">
                                            <select name=\"\" id=\"iller\" class=\"form-control\" >
                                                <option selected>il/elle aime:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group \">
                                            <select id=\"ilceler\" class=\"form-control\" >
                                                <option selected>ainsi que:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <select id=\"arac-turu\" class=\"form-control\" >
                                                <option selected>ainsi que:</option>
                                                <option>Musique</option>
                                                <option>Film</option>
                                                <option>Evenement</option>
                                                <option>Sport</option>
                                                <option>Livre</option>
                                                <option>Cuisine</option>
                                                <option>Jeux video</option>
                                                <option>Activité Manuel</option>
                                                <option>Animaux</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class=\"font-weight-light text-dark\"></p>
                                <div class=\"row\">
                                    <form class=\"form-inline\" method=\"get\" action=\"/Profil/Search/Resultat\">

                                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Il/elle aime\" name=\"search\">
                                        <input type=\"submit\"  class=\"btn btn-danger pl-5 pr-5 findsearch\" value=\"Trouver ma voix\"
                                               name=\"searchSubmit\">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <div class=\"container ml-auto\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                </tr>
                </thead>
                <tbody>
                {% for User in listUser %}
                    <tr>
                        <td>{{ session.uti_prenom }}</td>
                        <td>{{ session.uti_nom }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <br/><br/><br/><br/><br/>

    </div>
    <!-- Barre séparation -->
    <div id=lignerouge></div>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById(\"nav\");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }

        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById(\"sidebar\");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add(\"sticky\")
            } else {
                navbar.classList.remove(\"sticky\");
            }
        }
    </script>

    {% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    {% endblock %}
{% endblock %}", "User/Resultat.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\Resultat.html.twig");
    }
}
