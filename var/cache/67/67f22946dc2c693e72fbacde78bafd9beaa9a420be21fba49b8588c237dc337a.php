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
class __TwigTemplate_c35a51611c7ae5dc6229372051d7191ecdc7e43d5ba81a9d1e8da8bfcd29c21d extends Template
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
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - console admin ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <head>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    </head>
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    <body>
    <nav class=\"navbar navbar-default no-margin\">



        <div class=\"navbar-header fixed-brand\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" id=\"menu-toggle\">
                <span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa-rocket fa-4\"></i> Blogi</a>
        </div>



        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <button class=\"navbar-toggle collapse in\" data-toggle=\"collapse\" id=\"menu-toggle-2\"> <span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span>
                    </button>
                </li>
            </ul>
        </div>




    </nav>
<div id=\"wrapper\">
    <div id=\"sidebar-wrapper\">
        <ul class=\"sidebar-nav nav-pills nav-stacked\" id=\"menu\">
            <li class=\"active\">
                <a href=\"/Admin\"><span class=\"fa-stack fa-lg pull-left\"><i class=\"fa fa-dashboard fa-stack-1x \"></i></span> Dashboard</a>
                <ul class=\"nav-pills nav-stacked\" style=\"list-style-type:none;\">
                    <li><a href=\"/Article/Edit\">Edit Css</a></li>
                    <li><a href=\"/Article/Validation\">Articles attente Validation</a></li>
                    <li><a href=\"/Article/GestionArticle\">Gestion articles</a></li>
                    <li><a href=\"/Article/InscriptionValidation\">Confirmations inscription</a></li>
                    <li><a href=\"/Article/utilisateur\">Liste utilisateurs</a></li>
                    <li><a href=\"/Article/CategorieArticle\">Gestion Categorie</a></li>

                </ul>
            </li>


        </ul>
    </div>






    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid xyz\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"container-fluid mt-2\">




                        <div class=\"row pb-4 ml-2\">
                            <div class=\"col-lg-5 mx-auto card p-0 maxvh\">
                                <label class=\"text-primary text-center p-2\"><h3>Gestion utilisateurs</h3></label>
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Prenom</th>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Roles</th>
                                        <th scope=\"col\" class=\"text-center\">Editer</th>
                                        <th scope=\"col\" class=\"text-center\">Bannir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listUser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 90
            echo "                                        ";
            if (twig_in_filter("administrateur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 90))) {
                // line 91
                echo "
                                        ";
            }
            // line 93
            echo "                                        ";
            if (twig_in_filter("redacteur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 93))) {
                // line 94
                echo "
                                        ";
            }
            // line 96
            echo "                                        <tr>
                                            <th scope=\"row\"> ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 97), "html", null, true);
            echo "</th>
                                            <td> ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "utiprenom", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "utinom", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 101
            if (twig_in_filter("administrateur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 101))) {
                // line 102
                echo "                                                    <span>Admin </span>
                                                ";
            }
            // line 104
            echo "                                                ";
            if (twig_in_filter("redacteur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 104))) {
                // line 105
                echo "                                                    <span>Rédacteur </span>
                                                ";
            }
            // line 107
            echo "                                            </td>
                                            ";
            // line 108
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 108))) {
                // line 109
                echo "                                                <td class=\"text-center row\">
                                                    <select name=\"role\" form=\"updateUser";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 110), "html", null, true);
                echo "\">
                                                        ";
                // line 111
                if (!twig_in_filter("administrateur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 111))) {
                    // line 112
                    echo "                                                            <option value=\"administrateur\">Admin</option>
                                                        ";
                }
                // line 114
                echo "                                                        ";
                if (!twig_in_filter("redacteur", twig_get_attribute($this->env, $this->source, $context["user"], "utirole", [], "any", false, false, false, 114))) {
                    // line 115
                    echo "                                                            <option value=\"redacteur\">Rédacteur</option>
                                                        ";
                }
                // line 117
                echo "                                                        <option value=\"\">Retirer tous les droits</option>
                                                    </select>
                                                    <form action=\"/User/update/";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 119), "html", null, true);
                echo "\" method=\"post\" id=\"updateUser";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 119), "html", null, true);
                echo "\">
                                                        <button type=\"submit\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></button>
                                                    </form>
                                                </td>
                                                <td class=\"text-center\">
                                                    <form action=\"/User/Banned/";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "iduti", [], "any", false, false, false, 124), "html", null, true);
                echo "\" method=\"post\">
                                                        <button type=\"submit\" name=\"banUser\" class=\"btn btn-danger\"><i class=\"fas fa-user-slash\"></i></button>
                                                    </form>
                                                </td>
                                            ";
            } else {
                // line 129
                echo "                                                <td class=\"text-center\">
                                                    <button type=\"button\" class=\"btn btn-warning\" disabled><i class=\"far fa-edit\"></i></button>
                                                </td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" name=\"deleteCategorie\" disabled class=\"btn btn-danger\"><i class=\"fas fa-user-slash\"></i></button>
                                                </td>
                                            ";
            }
            // line 136
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </html>
";
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/dashboard.css\">
    ";
    }

    public function getTemplateName()
    {
        return "User/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 11,  268 => 10,  255 => 138,  248 => 136,  239 => 129,  231 => 124,  221 => 119,  217 => 117,  213 => 115,  210 => 114,  206 => 112,  204 => 111,  200 => 110,  197 => 109,  195 => 108,  192 => 107,  188 => 105,  185 => 104,  181 => 102,  179 => 101,  174 => 99,  170 => 98,  166 => 97,  163 => 96,  159 => 94,  156 => 93,  152 => 91,  149 => 90,  145 => 89,  67 => 13,  65 => 10,  60 => 7,  56 => 6,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - console admin {% endblock %}



{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    </head>
    {% block css%}
        <link rel=\"stylesheet\" href=\"/assets/css/dashboard.css\">
    {% endblock %}
    <body>
    <nav class=\"navbar navbar-default no-margin\">



        <div class=\"navbar-header fixed-brand\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" id=\"menu-toggle\">
                <span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa-rocket fa-4\"></i> Blogi</a>
        </div>



        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <button class=\"navbar-toggle collapse in\" data-toggle=\"collapse\" id=\"menu-toggle-2\"> <span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span>
                    </button>
                </li>
            </ul>
        </div>




    </nav>
<div id=\"wrapper\">
    <div id=\"sidebar-wrapper\">
        <ul class=\"sidebar-nav nav-pills nav-stacked\" id=\"menu\">
            <li class=\"active\">
                <a href=\"/Admin\"><span class=\"fa-stack fa-lg pull-left\"><i class=\"fa fa-dashboard fa-stack-1x \"></i></span> Dashboard</a>
                <ul class=\"nav-pills nav-stacked\" style=\"list-style-type:none;\">
                    <li><a href=\"/Article/Edit\">Edit Css</a></li>
                    <li><a href=\"/Article/Validation\">Articles attente Validation</a></li>
                    <li><a href=\"/Article/GestionArticle\">Gestion articles</a></li>
                    <li><a href=\"/Article/InscriptionValidation\">Confirmations inscription</a></li>
                    <li><a href=\"/Article/utilisateur\">Liste utilisateurs</a></li>
                    <li><a href=\"/Article/CategorieArticle\">Gestion Categorie</a></li>

                </ul>
            </li>


        </ul>
    </div>






    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid xyz\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"container-fluid mt-2\">




                        <div class=\"row pb-4 ml-2\">
                            <div class=\"col-lg-5 mx-auto card p-0 maxvh\">
                                <label class=\"text-primary text-center p-2\"><h3>Gestion utilisateurs</h3></label>
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Prenom</th>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Roles</th>
                                        <th scope=\"col\" class=\"text-center\">Editer</th>
                                        <th scope=\"col\" class=\"text-center\">Bannir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for user in listUser %}
                                        {% if 'administrateur' in user.utirole %}

                                        {% endif %}
                                        {% if 'redacteur' in user.utirole %}

                                        {% endif %}
                                        <tr>
                                            <th scope=\"row\"> {{ user.iduti }}</th>
                                            <td> {{ user.utiprenom }}</td>
                                            <td> {{ user.utinom }}</td>
                                            <td>
                                                {% if 'administrateur' in user.utirole %}
                                                    <span>Admin </span>
                                                {% endif %}
                                                {% if 'redacteur' in user.utirole %}
                                                    <span>Rédacteur </span>
                                                {% endif %}
                                            </td>
                                            {% if session.login.id != user.iduti %}
                                                <td class=\"text-center row\">
                                                    <select name=\"role\" form=\"updateUser{{ user.iduti }}\">
                                                        {% if 'administrateur' not in user.utirole %}
                                                            <option value=\"administrateur\">Admin</option>
                                                        {% endif %}
                                                        {% if 'redacteur' not in user.utirole %}
                                                            <option value=\"redacteur\">Rédacteur</option>
                                                        {% endif %}
                                                        <option value=\"\">Retirer tous les droits</option>
                                                    </select>
                                                    <form action=\"/User/update/{{ user.iduti }}\" method=\"post\" id=\"updateUser{{ user.iduti }}\">
                                                        <button type=\"submit\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></button>
                                                    </form>
                                                </td>
                                                <td class=\"text-center\">
                                                    <form action=\"/User/Banned/{{ user.iduti }}\" method=\"post\">
                                                        <button type=\"submit\" name=\"banUser\" class=\"btn btn-danger\"><i class=\"fas fa-user-slash\"></i></button>
                                                    </form>
                                                </td>
                                            {% else %}
                                                <td class=\"text-center\">
                                                    <button type=\"button\" class=\"btn btn-warning\" disabled><i class=\"far fa-edit\"></i></button>
                                                </td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" name=\"deleteCategorie\" disabled class=\"btn btn-danger\"><i class=\"fas fa-user-slash\"></i></button>
                                                </td>
                                            {% endif %}
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </html>
{% endblock %}", "User/utilisateur.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\utilisateur.html.twig");
    }
}
