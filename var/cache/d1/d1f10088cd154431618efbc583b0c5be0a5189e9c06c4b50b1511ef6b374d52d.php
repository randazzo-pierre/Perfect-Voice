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

/* Contact/mail.html.twig */
class __TwigTemplate_41f2a59cbd196161ff687a6753eef98e645d049e4f982304166e75f7648bcd9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head></head>
<body>
<h1>Demande de contact</h1>
<p>Bonjour, il y'a quelqu'un qui a écrit quelque chose :</p>
<p>
    ";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Contact/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head></head>
<body>
<h1>Demande de contact</h1>
<p>Bonjour, il y'a quelqu'un qui a écrit quelque chose :</p>
<p>
    {{ message }}
</p>
</body>
</html>", "Contact/mail.html.twig", "C:\\dev\\www\\git\\templates\\Contact\\mail.html.twig");
    }
}
