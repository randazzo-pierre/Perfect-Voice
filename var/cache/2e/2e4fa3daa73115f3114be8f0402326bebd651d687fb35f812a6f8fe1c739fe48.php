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
class __TwigTemplate_b8e82d06dc7691512b7b40ce4560cbbac49160b4760b6b06f4e54b272b52dade extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 9
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "

    ";
        // line 4
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "

    <form method=\"post\" action=\"/Login\">
        <input name=\"email\" type=\"email\"  placeholder=\"Email\"/>
        <input name=\"password\" type=\"password\" placeholder=\"Mot de passe\"/>
        <input type='hidden' name =\"token\" value =\"";
        // line 15
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

    public function getDebugInfo()
    {
        return array (  78 => 15,  71 => 10,  67 => 9,  61 => 5,  54 => 4,  50 => 2,  46 => 1,  42 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}


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



{% endblock %}", "User/login.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\login.html.twig");
    }
}
