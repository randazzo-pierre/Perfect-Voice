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

/* User/register.html.twig */
class __TwigTemplate_3d4388de91d9208849acc8e563699730283256ce78df50447b5841ba295a4ed7 extends Template
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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "

    ";
        // line 5
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "

<div class=\"login-page\">
    <div class=\"form\">
        <form method=\"post\" action=\"/Register\">
            <input type=\"text\" name=\"uti_prenom\" placeholder=\"Prenom\"/>
            <input type=\"text\" name=\"uti_nom\" placeholder=\"Nom\"/>
            <input type=\"text\" name=\"uti_ville\" placeholder=\"Ville\"/>
            <input type=\"text\" name=\"uti_tel\" placeholder=\"Tel\"/>
            <input type=\"text\" name=\"uti_sexe\" placeholder=\"Sexe\"/>
            <input type=\"text\" name=\"uti_orientation\" placeholder=\"Orientation\"/>
            <input type=\"email\" name=\"uti_mail\" placeholder=\"Email\"/>
            <input type=\"password\" name=\"uti_mdp\" placeholder=\"Mot de passe\"/>
            <input type='hidden' name =\"token\" value =\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <label>
                <input id=\"check\" type=\"checkbox\" class=\"checkbox\" required
                       aria-required=\"true\">
                <svg width=\"30px\" height=\"30px\">
                    <path class=\"path-back\"
                          d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                    </path>

                    <path class=\"path-moving\"
                          d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                    </path>
                </svg>


            </label>

            <button>Creer un compte</button>

        </form>
    ";
        // line 44
        $this->displayBlock('javascript', $context, $blocks);
        // line 48
        echo "    </body>

    </html>
";
    }

    // line 44
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "User/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  122 => 44,  115 => 48,  113 => 44,  90 => 24,  75 => 11,  71 => 10,  65 => 6,  58 => 5,  54 => 3,  50 => 2,  46 => 10,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}


    {% block css %}
        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    {% endblock %}
{% endblock %}
{% block body %}


<div class=\"login-page\">
    <div class=\"form\">
        <form method=\"post\" action=\"/Register\">
            <input type=\"text\" name=\"uti_prenom\" placeholder=\"Prenom\"/>
            <input type=\"text\" name=\"uti_nom\" placeholder=\"Nom\"/>
            <input type=\"text\" name=\"uti_ville\" placeholder=\"Ville\"/>
            <input type=\"text\" name=\"uti_tel\" placeholder=\"Tel\"/>
            <input type=\"text\" name=\"uti_sexe\" placeholder=\"Sexe\"/>
            <input type=\"text\" name=\"uti_orientation\" placeholder=\"Orientation\"/>
            <input type=\"email\" name=\"uti_mail\" placeholder=\"Email\"/>
            <input type=\"password\" name=\"uti_mdp\" placeholder=\"Mot de passe\"/>
            <input type='hidden' name =\"token\" value =\"{{token}}\">
            <label>
                <input id=\"check\" type=\"checkbox\" class=\"checkbox\" required
                       aria-required=\"true\">
                <svg width=\"30px\" height=\"30px\">
                    <path class=\"path-back\"
                          d=\"M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                    </path>

                    <path class=\"path-moving\"
                          d=\"M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6\">
                    </path>
                </svg>


            </label>

            <button>Creer un compte</button>

        </form>
    {% block javascript %}


    {% endblock %}
    </body>

    </html>
{% endblock %}", "User/register.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\register.html.twig");
    }
}
