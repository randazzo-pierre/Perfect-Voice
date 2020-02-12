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

/* User/login.html.twig */
class __TwigTemplate_f87bfc19b42dc68d4bd33140ef0a4a133adc55a0fb2684c909313d86362cc266 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "

    ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connectez vous ";
    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "

    <form method=\"post\" action=\"/Login\">
        <input name=\"email\" type=\"email\"  placeholder=\"Email\"/>
        <input name=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
        <input type='hidden' name =\"token\" value =\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>
    </form>



";
    }

    public function getTemplateName()
    {
        return "User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  86 => 13,  82 => 12,  76 => 8,  72 => 7,  64 => 4,  60 => 7,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}

{% block head %}
    {% block title %}{{ parent() }} - Connectez vous {% endblock %}


    {% block css %}
        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    {% endblock %}
{% endblock %}
{% block body %}


    <form method=\"post\" action=\"/Login\">
        <input name=\"email\" type=\"email\"  placeholder=\"Email\"/>
        <input name=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
        <input type='hidden' name =\"token\" value =\"{{token}}\">
        <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>
    </form>



{% endblock %}", "User/login.html.twig", "C:\\dev\\www\\git\\templates\\User\\login.html.twig");
    }
}
