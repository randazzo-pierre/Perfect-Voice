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

/* Match/mesvoix.html.twig */
class __TwigTemplate_eb02701c77cb787367d6ea6d3c7f3d48e4568cb9a34d651d4557f710aff036cd extends Template
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
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 13
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
";
    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
    <!-- Fin navbar -->


    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["matchs"] ?? null), "0", [], "array", true, true, false, 18)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["matchs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 20
                echo "            <a class=\"btn btn-success\" href=\"/Profil/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "othiduti", [], "any", false, false, false, 20), "html", null, true);
                echo "\"><i class=\"far fa-eye\"></i>Profil</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        <h1>Vous n'aimez aucun voix...</h1>
    ";
        }
    }

    public function getTemplateName()
    {
        return "Match/mesvoix.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  100 => 22,  91 => 20,  86 => 19,  84 => 18,  78 => 14,  74 => 13,  66 => 8,  62 => 7,  55 => 3,  51 => 2,  47 => 13,  45 => 7,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
{% endblock %}
{% block css %}
    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
{% endblock %}
{% block body %}

    <!-- Fin navbar -->


    {% if matchs['0'] is defined  %}
        {% for match in matchs %}
            <a class=\"btn btn-success\" href=\"/Profil/{{ match.othiduti }}\"><i class=\"far fa-eye\"></i>Profil</a>
        {% endfor %}
    {% else %}
        <h1>Vous n'aimez aucun voix...</h1>
    {% endif %}
{% endblock %}", "Match/mesvoix.html.twig", "C:\\Dev\\Perfect Voice\\templates\\Match\\mesvoix.html.twig");
    }
}
