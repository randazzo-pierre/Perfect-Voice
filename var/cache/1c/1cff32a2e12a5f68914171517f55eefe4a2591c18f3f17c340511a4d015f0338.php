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

/* Article/gestionArticle.html.twig */
class __TwigTemplate_321ad58f65af601436ce2f315efdc11d37ba3b3c066775cfad36fd362adeda81 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig.twig", "Article/gestionArticle.html.twig", 1);
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



</nav>
<div id=\"wrapper\">
    <div class=\"col-lg-6 mx-auto card p-0 maxvh\">
        <label class=\"text-primary text-center p-2\"><h3>Gestion articles</h3></label>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 76
            echo "                <tr>
                    <th scope=\"row\"><a href=\"/Article/Show/";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 77), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Titre", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Auteur", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "DateAjout", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 83), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Id", [], "any", false, false, false, 84), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
            </tbody>
        </table>
    </div>
</div>

</div>

</div>


</html>
";
    }

    public function getTemplateName()
    {
        return "Article/gestionArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 89,  160 => 84,  156 => 83,  150 => 80,  146 => 79,  142 => 78,  136 => 77,  133 => 76,  129 => 75,  59 => 7,  55 => 6,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig.twig\" %}
{% block title %}{{ parent() }} - console admin {% endblock %}



{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    </head>
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



</nav>
<div id=\"wrapper\">
    <div class=\"col-lg-6 mx-auto card p-0 maxvh\">
        <label class=\"text-primary text-center p-2\"><h3>Gestion articles</h3></label>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>

            {% for article in articleList %}
                <tr>
                    <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.Id }}</a></th>
                    <td>{{ articleData.Titre }}</td>
                    <td>{{ articleData.Auteur }}</td>
                    <td>{{ articleData.DateAjout | date(\"d/m/Y\") }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.Id }}\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.Id }}\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>
</div>

</div>

</div>


</html>
{% endblock %}", "Article/gestionArticle.html.twig", "C:\\dev\\www\\git\\templates\\Article\\gestionArticle.html.twig");
    }
}
