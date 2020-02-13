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
        echo "

    ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "

    <form method=\"post\" action=\"/Login\">
        <input name=\"email\" type=\"email\"  placeholder=\"Email\"/>
        <input name=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
        <input type='hidden' name =\"token\" value =\"";
        // line 17
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
        return array (  80 => 17,  73 => 12,  69 => 11,  63 => 7,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}

{% block head %}


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
