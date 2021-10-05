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

/* add.html.twig */
class __TwigTemplate_8d2d7eb8e6649e7479ebe158537e61c67625699cceb9e395b080332fb8c8b78c extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/style/style.css\">
    <link rel=\"stylesheet\" href=\"/style/login.css\">
    <title>Document</title>
</head>
<body>
    ";
        // line 12
        if ((0 !== twig_compare(($context["error"] ?? null), ""))) {
            // line 13
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>    
    ";
        }
        // line 15
        echo "    <header>
        <nav class=\"topnav\" id=\"myTopnav\">
            <a class=\"topnav__link\" href=\"index.html\">Home</a>
            <a class=\"topnav__link\" href=\"#news\">News</a>
            <a class=\"topnav__link\" href=\"#contact\">Contact</a>
            <a class=\"topnav__link\" id=\"right\" href=\"connect.php\">| Login</a>
        </nav>
    </header>
    <main>
        <form method=\"POST\" class=\"login_form\">
            <h1 class=\"login_title\"> Vous êtes nouveau ? </h1>
            <input class=\"login_inputs\" type=\"email\" name=\"email\" required=\"\" placeholder=\"email\"> <br>
            <input class=\"login_inputs\" type=\"password\" name=\"password\" required=\"\" placeholder=\"new password\"> <br>
            <input class=\"login_inputs\" id=\"btn5\" type=\"submit\">
        </form>
    </main>
    <footer>
        <nav id=\"footer-navbar\">
            <a class=\"nav-fo\" href=\"./index.html\"> | Home </a>
            <a class=\"nav-fo\" href=\"#projet\"> | News </a>
            <a class=\"nav-fo\" href=\"#liens\"> | Contact </a>
            <a class=\"nav-fo\" href=\"https://yanislegrand.000webhostapp.com/index.html\">| Mon portfolio </a>
        </nav>
    </footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "add.html.twig", "C:\\Users\\legryan\\Documents\\php\\composer-tp\\templates\\add.html.twig");
    }
}
