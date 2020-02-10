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

/* Article/inscription.html.twig */
class __TwigTemplate_a3453cd4f237ac4ef4b6c0674efeb017e700ac0d1d07390c80f4f70da201d1de extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/inscription.html.twig", 1);
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



                        <div class=\"col-lg-5 mx-auto card p-0 maxvh\" id=\"subscripbConfirm\">
                            <label class=\"text-primary p-2 text-center\" for=\"\"><h3>Confirmations inscription</h3></label>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Prenom</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Accepter</th>
                                    <th scope=\"col\">Refuser</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listMail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 87
            echo "                                    <tr>
                                        <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "utiprenom", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "utinom", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "utimail", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                        <td>
                                            <form action=\"/User/Accept/";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "iduti", [], "any", false, false, false, 92), "html", null, true);
            echo "\" method=\"post\">
                                                <button type=\"submit\" name=\"\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action=\"/User/Refused/";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "iduti", [], "any", false, false, false, 97), "html", null, true);
            echo "\" method=\"post\">
                                                <button type=\"submit\" name=\"\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
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
        return "Article/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 11,  200 => 10,  182 => 103,  170 => 97,  162 => 92,  157 => 90,  153 => 89,  149 => 88,  146 => 87,  142 => 86,  67 => 13,  65 => 10,  60 => 7,  56 => 6,  48 => 2,  37 => 1,);
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



                        <div class=\"col-lg-5 mx-auto card p-0 maxvh\" id=\"subscripbConfirm\">
                            <label class=\"text-primary p-2 text-center\" for=\"\"><h3>Confirmations inscription</h3></label>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Prenom</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Accepter</th>
                                    <th scope=\"col\">Refuser</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for mail in listMail %}
                                    <tr>
                                        <td>{{ mail.utiprenom }}</td>
                                        <td>{{ mail.utinom }}</td>
                                        <td>{{ mail.utimail }}</td>
                                        <td>
                                            <form action=\"/User/Accept/{{ mail.iduti }}\" method=\"post\">
                                                <button type=\"submit\" name=\"\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action=\"/User/Refused/{{ mail.iduti }}\" method=\"post\">
                                                <button type=\"submit\" name=\"\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
    </html>
{% endblock %}", "Article/inscription.html.twig", "C:\\dev\\www\\git\\templates\\Article\\inscription.html.twig");
    }
}
