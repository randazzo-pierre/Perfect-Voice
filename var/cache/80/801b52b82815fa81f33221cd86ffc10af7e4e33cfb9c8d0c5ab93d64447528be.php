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

/* index.html.twig */
class __TwigTemplate_6b22b3abb6960e1f2c942ef7628f8e72bf51876313578376dcbee3e73887e11e extends Template
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
            'footer' => [$this, 'block_footer'],
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
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 189
        echo "

    ";
        // line 191
        $this->displayBlock('javascript', $context, $blocks);
        // line 196
        echo "
";
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
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 6
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
        echo "
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#top\">Top <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#lignerouge\">A propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#footer\">Contacts</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Register\">Inscription</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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


    <div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">
        <!-- Login -->
        <div class=\"container mt-5\" id=\"top\" >
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5\" id=\"login\">
                    <div class=\"card card-signin my-5\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center\">Se connecter</h5>
                            <form class=\"form-signin\" method=\"post\" action=\"/\">
                                <div class=\"form-label-group\">
                                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                                    <label for=\"inputEmail\">Identifiant</label>
                                </div>

                                <div class=\"form-label-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                                    <label for=\"inputPassword\">Mot de passe</label>
                                    <input type='hidden' name =\"token\" value =\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"custom-control custom-checkbox mb-3\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                    <label class=\"custom-control-label\" for=\"customCheck1\">Rester connecté</label>
                                </div>
                                <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Connexion</button>
                                <hr class=\"my-4\">
                                <button class=\"btn btn-lg btn-google btn-block text-uppercase\"  type=\"submit\"><i class=\"fab fa-google mr-2\" href=\"\"></i> S'inscrire avec un e-mail</button>
                                <button class=\"btn btn-lg btn-facebook btn-block text-uppercase\" type=\"submit\"><i class=\"fab fa-facebook-f mr-2\" href=\"\"></i> S'inscrire avec Facebook</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/>
        <!-- Barre séparation -->
        <div id=lignerouge ></div>
    </div>
";
    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <h2 id=\"keske\">Qu'est-ce que Perfect Voice ?</h2>
        </div>

        <div class=\"block\">
            <br/>
            <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-right \" src=\"/asset/uploads/images/boy.jpg\"/>
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-left\"  src=\"/asset/uploads/images/girl.jpg\"/>
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-right\" src=\"/asset/uploads/images/couple.jpg\" />
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Infos -->
    <footer class=\"container\" id=\"footer\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <h5><i class=\"fa fa-road\"></i>En savoir plus<br/><br/></h5>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Facebook</a></li>
                            <li><a href=\"\">Twitter</a></li>
                            <li><a href=\"\">Coordonnées</a></li>
                            <li><a href=\"callto:0662205586\">Téléphoner</a></li>
                        </ul>
                    </div>
                    <div class=\"col-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Documentation</a></li>
                            <li><a href=\"\">Abonnements</a></li>
                            <li><a href=\"\">Mentions légales</a></li>
                            <li><a href=\"\">L'équipe</a></li>
                        </ul>
                    </div>
                </div>
                <ul class=\"nav\">
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link pl-0\"><i class=\"fa fa-facebook fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-twitter fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-github fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-instagram fa-lg\"></i></a></li>
                </ul>
                <br>
            </div>
            <div class=\"col-md-2\">
                <h5 class=\"text-md-right\">Nous contacter</h5>
                <hr>
            </div>
            <div class=\"col-md-5\">
                <form>
                    <fieldset class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                    </fieldset>
                    <fieldset class=\"form-group\">
                        <textarea class=\"form-control\" id=\"exampleMessage\" placeholder=\"Message\"></textarea>
                    </fieldset>
                    <fieldset class=\"form-group text-xs-right\">
                        <button type=\"button\" class=\"btn btn-secondary-outline btn-lg\">Envoyer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </footer>

        ";
    }

    // line 191
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  288 => 192,  284 => 191,  183 => 91,  179 => 90,  153 => 67,  100 => 16,  96 => 15,  88 => 7,  84 => 6,  79 => 12,  77 => 6,  72 => 3,  68 => 2,  63 => 196,  61 => 191,  57 => 189,  55 => 90,  52 => 89,  50 => 15,  47 => 14,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
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
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#top\">Top <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#lignerouge\">A propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#footer\">Contacts</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/Register\">Inscription</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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


    <div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">
        <!-- Login -->
        <div class=\"container mt-5\" id=\"top\" >
            <div class=\"row\">
                <div class=\"col-sm-9 col-md-7 col-lg-5\" id=\"login\">
                    <div class=\"card card-signin my-5\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center\">Se connecter</h5>
                            <form class=\"form-signin\" method=\"post\" action=\"/\">
                                <div class=\"form-label-group\">
                                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                                    <label for=\"inputEmail\">Identifiant</label>
                                </div>

                                <div class=\"form-label-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                                    <label for=\"inputPassword\">Mot de passe</label>
                                    <input type='hidden' name =\"token\" value =\"{{token}}\">
                                </div>

                                <div class=\"custom-control custom-checkbox mb-3\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                    <label class=\"custom-control-label\" for=\"customCheck1\">Rester connecté</label>
                                </div>
                                <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Connexion</button>
                                <hr class=\"my-4\">
                                <button class=\"btn btn-lg btn-google btn-block text-uppercase\"  type=\"submit\"><i class=\"fab fa-google mr-2\" href=\"\"></i> S'inscrire avec un e-mail</button>
                                <button class=\"btn btn-lg btn-facebook btn-block text-uppercase\" type=\"submit\"><i class=\"fab fa-facebook-f mr-2\" href=\"\"></i> S'inscrire avec Facebook</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/>
        <!-- Barre séparation -->
        <div id=lignerouge ></div>
    </div>
{% endblock %}

{% block footer %}

    <div class=\"container\">
        <div class=\"row\">
            <h2 id=\"keske\">Qu'est-ce que Perfect Voice ?</h2>
        </div>

        <div class=\"block\">
            <br/>
            <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-right \" src=\"/asset/uploads/images/boy.jpg\"/>
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-left\"  src=\"/asset/uploads/images/girl.jpg\"/>
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
        <br/>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"span1\">
                    <img class=\"img-right\" src=\"/asset/uploads/images/couple.jpg\" />
                    <div class=\"content-heading\"><h3>Experience &nbsp </h3></div>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Infos -->
    <footer class=\"container\" id=\"footer\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <h5><i class=\"fa fa-road\"></i>En savoir plus<br/><br/></h5>
                <div class=\"row\">
                    <div class=\"col-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Facebook</a></li>
                            <li><a href=\"\">Twitter</a></li>
                            <li><a href=\"\">Coordonnées</a></li>
                            <li><a href=\"callto:0662205586\">Téléphoner</a></li>
                        </ul>
                    </div>
                    <div class=\"col-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Documentation</a></li>
                            <li><a href=\"\">Abonnements</a></li>
                            <li><a href=\"\">Mentions légales</a></li>
                            <li><a href=\"\">L'équipe</a></li>
                        </ul>
                    </div>
                </div>
                <ul class=\"nav\">
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link pl-0\"><i class=\"fa fa-facebook fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-twitter fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-github fa-lg\"></i></a></li>
                    <li class=\"nav-item\"><a href=\"\" class=\"nav-link\"><i class=\"fa fa-instagram fa-lg\"></i></a></li>
                </ul>
                <br>
            </div>
            <div class=\"col-md-2\">
                <h5 class=\"text-md-right\">Nous contacter</h5>
                <hr>
            </div>
            <div class=\"col-md-5\">
                <form>
                    <fieldset class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                    </fieldset>
                    <fieldset class=\"form-group\">
                        <textarea class=\"form-control\" id=\"exampleMessage\" placeholder=\"Message\"></textarea>
                    </fieldset>
                    <fieldset class=\"form-group text-xs-right\">
                        <button type=\"button\" class=\"btn btn-secondary-outline btn-lg\">Envoyer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </footer>

        {% endblock %}


    {% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    {% endblock %}

", "index.html.twig", "C:\\dev\\www\\git\\templates\\index.html.twig");
    }
}
