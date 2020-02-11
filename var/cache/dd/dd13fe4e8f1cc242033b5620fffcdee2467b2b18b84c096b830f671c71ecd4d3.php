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

/* Article/view.html.twig */
class __TwigTemplate_a84c2974d65c469478ffcd671dd05059f41f30f09960b7539ff2e270adaae1a3 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig.twig", "Article/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Titre", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container mt-2\">
        <div class=\"card p-3\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Titre", [], "any", false, false, false, 8), "html", null, true);
        echo "</h5>
                <p class=\"card-text\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Description", [], "any", false, false, false, 9);
        echo "</p>
            </div>
            <footer class=\"blockquote-footer\">
                <medium class=\"text-muted\">
                    Rédigé par ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "Auteur", [], "any", false, false, false, 13), "html", null, true);
        echo "
                </medium>
            </footer>
        </div>
        <div class=\"d-flex justify-content-between p-3\">
            ";
        // line 18
        if (((isset($context["userConnected"]) || array_key_exists("userConnected", $context)) && 0 !== twig_compare(($context["userConnected"] ?? null), null))) {
            // line 19
            echo "                <a href=\"/Contact/Article/:id";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articleData"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"btn btn-primary\">Contacter le Rédacteur</a>
            ";
        }
        // line 21
        echo "



            <a href=\"/Article/ListAll\" class=\"btn btn-danger\">Retour</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  87 => 19,  85 => 18,  77 => 13,  70 => 9,  66 => 8,  60 => 4,  56 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig.twig\" %}
{% block title %}{{ parent() }} - {{ articleData.Titre }}{% endblock %}
{% block body %}
    <div class=\"container mt-2\">
        <div class=\"card p-3\">

            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ articleData.Titre }}</h5>
                <p class=\"card-text\">{{ articleData.Description  | raw }}</p>
            </div>
            <footer class=\"blockquote-footer\">
                <medium class=\"text-muted\">
                    Rédigé par {{ articleData.Auteur }}
                </medium>
            </footer>
        </div>
        <div class=\"d-flex justify-content-between p-3\">
            {% if userConnected is defined and userConnected != null %}
                <a href=\"/Contact/Article/:id{{ articleData.id }}\" class=\"btn btn-primary\">Contacter le Rédacteur</a>
            {% endif %}




            <a href=\"/Article/ListAll\" class=\"btn btn-danger\">Retour</a>
        </div>
    </div>

{% endblock %}", "Article/view.html.twig", "C:\\dev\\www\\git\\templates\\Article\\view.html.twig");
    }
}
