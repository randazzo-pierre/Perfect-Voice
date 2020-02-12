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

/* User/inscription1.html.twig */
class __TwigTemplate_eb58122447deafe7f658d155105bb5484df613353afddda5c9d5bc5ed4ca8df2 extends Template
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
        // line 14
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
        echo "\t<link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"/asset/css/style.css\">
    ";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t<!-- Barre Menu -->
\t<nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
\t  <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t    <span class=\"navbar-toggler-icon\"></span>
\t  </button>
\t  <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
\t    <ul class=\"navbar-nav\">
\t      <li class=\"nav-item active\">
\t        <a class=\"nav-link\" href=\"#top\">Top <span class=\"sr-only\">(current)</span></a>
\t      </li>
\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#lignerouge\">A propos</a>
\t      </li>
\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#footer\">Contacts</a>
\t      </li>
\t      <li class=\"nav-item dropdown\">
\t        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t          Language
\t        </a>
\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t          <a class=\"dropdown-item\" href=\"#\">Français</a>
\t          <a class=\"dropdown-item\" href=\"#\">Anglais</a>
\t        </div>
\t      </li>
\t    </ul>
\t  </div>
\t</nav>
\t<div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">
\t\t<!-- Inscription -->
    <br/><br/>
  <form class=\"form2\" method=\"post\" action=\"/Register\">
    <h2>Inscription</h2>
  <label class=\"label2\">
    <p class=\"label-txt\">Adresse Email</p>
    <input type=\"email\" name=\"uti_mail\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Nom</p>
    <input type=\"text\" name=\"uti_nom\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Prénom</p>
    <input type=\"text\" name=\"uti_prenom\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <p class=\"label-txt\">Mot de passe</p>
    <input type=\"password\" name=\"uti_mdp\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <p class=\"label-txt\">Confirmation de mot de passe</p>
    <input type=\"password\" name=\"uti_mdp\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Ville</p>
    <input type=\"text\" name=\"uti_ville\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Téléphone</p>
    <input type=\"text\" name=\"uti_tel\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <select id=\"iller\"  name=\"uti_sexe\" class=\"form-control\" >
      <option selected class=\"label-txt\">Sexe</option>
      <option>Homme</option>
      <option>Femme</option>
      <option>Autre</option>
    </select>
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <select id=\"iller\" name=\"uti_orientation\" class=\"form-control\" >
      <option selected class=\"label-txt\">Orientation</option>
      <option>Hommes</option>
      <option>Femmes</option>
      <option>Les deux</option>
    </select>
  <input type='hidden' name =\"token\" value =\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <button class=\"button2\" type=\"submit\">Suivant</button>
</form>
  <br/>
    <!-- Barre séparation -->
\t<div id=lignerouge></div>
</div>
\t<!-- Footer -->
\t<div id=\"footer\" class=\"container\">
    <div class=\"page-header pt-2\">
    </div>
    <p class=\"lead\"></div>

\t<footer class=\"footer\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t            <div class=\"col-md-5\">
\t                <h5><i class=\"fa fa-road\"></i>En savoir plus<br/><br/></h5>
\t                <div class=\"row\">
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
    </div>
</footer>
<script>
\t// When the user scrolls the page, execute myFunction
\twindow.onscroll = function() {myFunction()};

\t// Get the navbar
\tvar navbar = document.getElementById(\"nav\");

\t// Get the offset position of the navbar
\tvar sticky = navbar.offsetTop;

\t// Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
\tfunction myFunction() {
\t  if (window.pageYOffset >= sticky) {
\t    navbar.classList.add(\"sticky\")
\t  } else {
\t    navbar.classList.remove(\"sticky\");
\t  }
\t} 
\$(document).ready(function(){

  \$('.input').focus(function(){
    \$(this).parent().find(\".label-txt\").addClass('label-active');
  });

  \$(\".input\").focusout(function(){
    if (\$(this).val() == '') {
      \$(this).parent().find(\".label-txt\").removeClass('label-active');
    };
  });

});


    ";
        // line 217
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "User/inscription1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 218,  286 => 217,  182 => 116,  79 => 15,  75 => 14,  67 => 7,  60 => 6,  54 => 2,  50 => 1,  46 => 14,  43 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>

    {% block css %}
\t<link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"/asset/css/style.css\">
    {% endblock %}
{% endblock %}

{% block body %}
\t<!-- Barre Menu -->
\t<nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
\t  <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\" alt=\"Logo Perfect Voice\"></a>
\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t    <span class=\"navbar-toggler-icon\"></span>
\t  </button>
\t  <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
\t    <ul class=\"navbar-nav\">
\t      <li class=\"nav-item active\">
\t        <a class=\"nav-link\" href=\"#top\">Top <span class=\"sr-only\">(current)</span></a>
\t      </li>
\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#lignerouge\">A propos</a>
\t      </li>
\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#footer\">Contacts</a>
\t      </li>
\t      <li class=\"nav-item dropdown\">
\t        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t          Language
\t        </a>
\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t          <a class=\"dropdown-item\" href=\"#\">Français</a>
\t          <a class=\"dropdown-item\" href=\"#\">Anglais</a>
\t        </div>
\t      </li>
\t    </ul>
\t  </div>
\t</nav>
\t<div style=\"background:url(/asset/uploads/images/fond.jpg) no-repeat scroll 0 0 / 100% auto;\">
\t\t<!-- Inscription -->
    <br/><br/>
  <form class=\"form2\" method=\"post\" action=\"/Register\">
    <h2>Inscription</h2>
  <label class=\"label2\">
    <p class=\"label-txt\">Adresse Email</p>
    <input type=\"email\" name=\"uti_mail\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Nom</p>
    <input type=\"text\" name=\"uti_nom\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Prénom</p>
    <input type=\"text\" name=\"uti_prenom\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <p class=\"label-txt\">Mot de passe</p>
    <input type=\"password\" name=\"uti_mdp\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <p class=\"label-txt\">Confirmation de mot de passe</p>
    <input type=\"password\" name=\"uti_mdp\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Ville</p>
    <input type=\"text\" name=\"uti_ville\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <p class=\"label-txt\">Téléphone</p>
    <input type=\"text\" name=\"uti_tel\" class=\"input\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <label class=\"label2\">
    <select id=\"iller\"  name=\"uti_sexe\" class=\"form-control\" >
      <option selected class=\"label-txt\">Sexe</option>
      <option>Homme</option>
      <option>Femme</option>
      <option>Autre</option>
    </select>
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
    <label class=\"label2\">
    <select id=\"iller\" name=\"uti_orientation\" class=\"form-control\" >
      <option selected class=\"label-txt\">Orientation</option>
      <option>Hommes</option>
      <option>Femmes</option>
      <option>Les deux</option>
    </select>
  <input type='hidden' name =\"token\" value =\"{{token}}\">
    <div class=\"line-box\">
      <div class=\"line\"></div>
    </div>
  </label>
  <button class=\"button2\" type=\"submit\">Suivant</button>
</form>
  <br/>
    <!-- Barre séparation -->
\t<div id=lignerouge></div>
</div>
\t<!-- Footer -->
\t<div id=\"footer\" class=\"container\">
    <div class=\"page-header pt-2\">
    </div>
    <p class=\"lead\"></div>

\t<footer class=\"footer\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t            <div class=\"col-md-5\">
\t                <h5><i class=\"fa fa-road\"></i>En savoir plus<br/><br/></h5>
\t                <div class=\"row\">
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
    </div>
</footer>
<script>
\t// When the user scrolls the page, execute myFunction
\twindow.onscroll = function() {myFunction()};

\t// Get the navbar
\tvar navbar = document.getElementById(\"nav\");

\t// Get the offset position of the navbar
\tvar sticky = navbar.offsetTop;

\t// Add the sticky class to the navbar when you reach its scroll position. Remove \"sticky\" when you leave the scroll position
\tfunction myFunction() {
\t  if (window.pageYOffset >= sticky) {
\t    navbar.classList.add(\"sticky\")
\t  } else {
\t    navbar.classList.remove(\"sticky\");
\t  }
\t} 
\$(document).ready(function(){

  \$('.input').focus(function(){
    \$(this).parent().find(\".label-txt\").addClass('label-active');
  });

  \$(\".input\").focusout(function(){
    if (\$(this).val() == '') {
      \$(this).parent().find(\".label-txt\").removeClass('label-active');
    };
  });

});


    {% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    {% endblock %}
{% endblock %}", "User/inscription1.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\inscription1.html.twig");
    }
}
