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

/* index.html.twig */
class __TwigTemplate_43b0df3f53db8adb8341cc208effa54b8f6e739a92ec189e43a0e47e2d43a0bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"src/assets/css/header.css\">
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
<body>
<div id=\"header\">
    <div class=\"logo\">
        <a href=\"/\">BLOGI</a>
    </div>
    <nav>
        <li class=\"dropdown\">
            <a href=\"\">Catégorie</a>
            <ul>
                <li><a href=\"/Login\">php</a></li>
                <li><a href=\"/Register\">java.script</a></li>
            </ul>
        </li>
        <ul>

            <li>
                <a href=\"/Api/Article/Last\">Article Recent</a>

            </li>
            <li>
                <a href=\"/contact\">Contact</a>

            </li>
            <li class=\"dropdown\">
                <a href=\"\">Compte</a>
                <ul>
                    ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "email", [], "any", true, true, false, 41)) {
            // line 42
            echo "                    <li><a href=\"/Login\">Connexion</a></li>
                    <li><a href=\"/Register\">Inscription</a></li>
                    ";
        } else {
            // line 45
            echo "                    <li><a href=\"/Logout\">Deconnexion</li>
                    ";
        }
        // line 47
        echo "                </ul>
            </li>
            <li>
                <a href=\"/Article/Add\">Ajouter un Article</a>
            </li>
        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Show/";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "search", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
            <input name=\"search\" placeholder=\"Recherche...\" type=\"search\">
        </form>
    </nav>

</div>
";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "


<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
";
        // line 70
        $this->displayBlock('javascript', $context, $blocks);
        // line 73
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    ";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 70
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "<script src=\"/assets/js/header.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 71,  158 => 70,  152 => 60,  147 => 12,  143 => 11,  136 => 5,  131 => 73,  129 => 70,  118 => 61,  116 => 60,  107 => 54,  98 => 47,  94 => 45,  89 => 42,  87 => 41,  58 => 14,  56 => 11,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"src/assets/css/header.css\">
    {% block css %}
        <link rel=\"stylesheet\" href=\"/assets/css/header.css\">
    {% endblock %}

<body>
<div id=\"header\">
    <div class=\"logo\">
        <a href=\"/\">BLOGI</a>
    </div>
    <nav>
        <li class=\"dropdown\">
            <a href=\"\">Catégorie</a>
            <ul>
                <li><a href=\"/Login\">php</a></li>
                <li><a href=\"/Register\">java.script</a></li>
            </ul>
        </li>
        <ul>

            <li>
                <a href=\"/Api/Article/Last\">Article Recent</a>

            </li>
            <li>
                <a href=\"/contact\">Contact</a>

            </li>
            <li class=\"dropdown\">
                <a href=\"\">Compte</a>
                <ul>
                    {% if session.email is not defined %}
                    <li><a href=\"/Login\">Connexion</a></li>
                    <li><a href=\"/Register\">Inscription</a></li>
                    {% else %}
                    <li><a href=\"/Logout\">Deconnexion</li>
                    {% endif %}
                </ul>
            </li>
            <li>
                <a href=\"/Article/Add\">Ajouter un Article</a>
            </li>
        </ul>

        <form class=\"form-inline\" method=\"post\" action=\"/Article/Show/{{ post.search }}\">
            <input name=\"search\" placeholder=\"Recherche...\" type=\"search\">
        </form>
    </nav>

</div>
{% block body %}{% endblock %}



<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
{% block javascript %}
<script src=\"/assets/js/header.js\"></script>
{% endblock %}
</body>
</html>", "index.html.twig", "C:\\Dev\\Perfect Voice\\templates\\index.html.twig");
    }
}
