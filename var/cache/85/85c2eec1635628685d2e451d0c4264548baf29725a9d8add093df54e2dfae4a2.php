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

/* Article/Validation.html.twig */
class __TwigTemplate_f81dea0213f8fd6a165535da266362502386fedcc22578be93d2da13b77f1f51 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig.twig", "Article/Validation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Validation d'article";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "
        <tr>
            <th scope=\"row\"><a href=\"/Article/Show/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></th>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>

    ";
    }

    public function getTemplateName()
    {
        return "Article/Validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  104 => 27,  100 => 26,  94 => 23,  90 => 22,  86 => 21,  80 => 20,  76 => 18,  72 => 17,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig.twig\" %}
{% block title %}Validation d'article{% endblock %}

{% block body %}

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
            <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.id }}</a></th>
            <td>{{ article.Titre }}</td>
            <td>{{ article.Auteur }}</td>
            <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
            <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                    <a class=\"btn btn-success\" href=\"/Article/Val/{{ article.id }}\"><i class=\"fas fa-check-circle\"></i></a>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>

    {% endblock %}", "Article/Validation.html.twig", "C:\\dev\\www\\git\\templates\\Article\\Validation.html.twig");
    }
}
