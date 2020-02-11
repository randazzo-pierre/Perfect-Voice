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

/* Article/CategorieArticle.html.twig */
class __TwigTemplate_8d0fa32d1edbd92f362f3ce4cc2774f3dfec0f158a0295935b6bde30e76b6dfa extends Template
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
        return "index.html.twig.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig.twig", "Article/CategorieArticle.html.twig", 1);
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






                        <div class=\"col-lg-5 mx-auto card p-0\" id=\"categories\" >
                            <label class=\"text-primary text-center p-2\"><h3>Liste catégories article</h3></label>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Nom catégorie</th>
                                    <th scope=\"col\" class=\"text-center\">Editer</th>
                                    <th scope=\"col\" class=\"text-center\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 90
            echo "                                    <tr>
                                        <th scope=\"row\"> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "idCat", [], "any", false, false, false, 91), "html", null, true);
            echo "</th>
                                        <form action=\"/Categorie/update/";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "idCat", [], "any", false, false, false, 92), "html", null, true);
            echo "\" method=\"post\">
                                            <td><input type=\"text\" name=\"categorie\" class=\"form-control\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "categories", [], "any", false, false, false, 93), "html", null, true);
            echo "\"> </td>
                                            <td class=\"text-center\">
                                                <button type=\"submit\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></button>
                                            </td>
                                        </form>
                                        <td class=\"text-center\">
                                            <form action=\"/Categorie/delete/";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "idCat", [], "any", false, false, false, 99), "html", null, true);
            echo "\" method=\"post\">
                                                <button type=\"submit\" name=\"deleteCategorie\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                <tr>
                                    <form action=\"/Categorie/add\" method=\"post\">
                                        <th scope=\"row\">#</th>
                                        <td><input required type=\"text\" class=\"form-control\" name=\"categorie\" placeholder=\"Nouvelle catégorie\"></td>
                                        <td colspan=\"2\" class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"far fa-check-square\"> Ajouter</i></button>
                                        </td>
                                    </form>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


                <div class=\"col-lg-5 mx-auto card p-0 maxvh\" id=\"subscripbConfirm\">

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
        return "Article/CategorieArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 11,  215 => 10,  181 => 105,  169 => 99,  160 => 93,  156 => 92,  152 => 91,  149 => 90,  145 => 89,  67 => 13,  65 => 10,  60 => 7,  56 => 6,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig.twig\" %}
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






                        <div class=\"col-lg-5 mx-auto card p-0\" id=\"categories\" >
                            <label class=\"text-primary text-center p-2\"><h3>Liste catégories article</h3></label>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Nom catégorie</th>
                                    <th scope=\"col\" class=\"text-center\">Editer</th>
                                    <th scope=\"col\" class=\"text-center\">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for categorie in listCategorie %}
                                    <tr>
                                        <th scope=\"row\"> {{ categorie.idCat }}</th>
                                        <form action=\"/Categorie/update/{{  categorie.idCat }}\" method=\"post\">
                                            <td><input type=\"text\" name=\"categorie\" class=\"form-control\" value=\"{{ categorie.categories }}\"> </td>
                                            <td class=\"text-center\">
                                                <button type=\"submit\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></button>
                                            </td>
                                        </form>
                                        <td class=\"text-center\">
                                            <form action=\"/Categorie/delete/{{  categorie.idCat }}\" method=\"post\">
                                                <button type=\"submit\" name=\"deleteCategorie\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                                <tr>
                                    <form action=\"/Categorie/add\" method=\"post\">
                                        <th scope=\"row\">#</th>
                                        <td><input required type=\"text\" class=\"form-control\" name=\"categorie\" placeholder=\"Nouvelle catégorie\"></td>
                                        <td colspan=\"2\" class=\"text-center\">
                                            <button type=\"submit\" class=\"btn btn-success\"><i class=\"far fa-check-square\"> Ajouter</i></button>
                                        </td>
                                    </form>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


                <div class=\"col-lg-5 mx-auto card p-0 maxvh\" id=\"subscripbConfirm\">

                </div>
            </div>
        </div>
    </div>



</div>


</html>
{% endblock %}", "Article/CategorieArticle.html.twig", "C:\\dev\\www\\git\\templates\\Article\\CategorieArticle.html.twig");
    }
}
