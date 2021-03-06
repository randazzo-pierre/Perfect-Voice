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
class __TwigTemplate_9da6f9dc85691838b50ab8fb1cef59a07b4dc1271ddfc9f67586b4dad8e6047e extends Template
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
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">


    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connectez vous ";
    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/login.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
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
        // line 28
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
        // line 48
        $this->displayBlock('javascript', $context, $blocks);
        // line 52
        echo "    </body>

    </html>
";
    }

    // line 48
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "User/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  137 => 48,  130 => 52,  128 => 48,  105 => 28,  90 => 15,  86 => 14,  80 => 10,  76 => 9,  68 => 3,  64 => 9,  57 => 4,  54 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block head %}
    {% block title %}{{ parent() }} - Connectez vous {% endblock %}
    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">


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
{% endblock %}", "User/register.html.twig", "C:\\dev\\www\\git\\templates\\User\\register.html.twig");
    }
}
