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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "index.html.twig.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig.twig", "User/login.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "

    ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connectez vous ";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "


    <div class=\"login-page\">
        <div class=\"form\">

            <form method=\"post\" action=\"/Login\">
                <input type=\"email\" name=\"uti_mail\" placeholder=\"Email\"/>
                <input type=\"password\" name=\"uti_mdp\" placeholder=\"Mot de passe\"/>

                <input type='hidden' name =\"token\" value =\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
                <button>login</button>


            </form>
        </div>
    </div>

    ";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        // line 36
        echo "    </body>

    </html>
";
    }

    // line 32
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "

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
        return array (  123 => 33,  119 => 32,  112 => 36,  110 => 32,  99 => 24,  87 => 14,  83 => 13,  77 => 9,  73 => 8,  65 => 5,  61 => 8,  57 => 6,  54 => 5,  50 => 4,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"index.html.twig.twig\" %}
{% block head %}
    {% block title %}{{ parent() }} - Connectez vous {% endblock %}


    {% block css %}
        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    {% endblock %}
{% endblock %}
{% block body %}



    <div class=\"login-page\">
        <div class=\"form\">

            <form method=\"post\" action=\"/Login\">
                <input type=\"email\" name=\"uti_mail\" placeholder=\"Email\"/>
                <input type=\"password\" name=\"uti_mdp\" placeholder=\"Mot de passe\"/>

                <input type='hidden' name =\"token\" value =\"{{token}}\">
                <button>login</button>


            </form>
        </div>
    </div>

    {% block javascript %}


    {% endblock %}
    </body>

    </html>
{% endblock %}", "User/login.html.twig", "C:\\dev\\www\\git\\templates\\User\\login.html.twig");
    }
}
