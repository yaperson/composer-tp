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

/* connect.html.twig */
class __TwigTemplate_710e1e730969cb813c665d21c48373dca82f035cbf48b173fd4ab8612febe433 extends Template
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
    <header>
        <nav class=\"topnav\" id=\"myTopnav\">
            <a class=\"topnav__link\" href=\"index.html\">Home</a>
            <a class=\"topnav__link\" href=\"#news\">News</a>
            <a class=\"topnav__link\" href=\"#contact\">Contact</a>
            <a class=\"topnav__link\" id=\"right\" href=\"#\">| Login</a>
        </nav>
    </header>
    <main>
        <form method=\"POST\" class=\"login_form\">
            <h1 class=\"login_title\"> Connectez vous </h1>
            <input class=\"login_inputs\" type=\"email\" name=\"username\" required=\"\" placeholder=\"email\"> <br>
            <input class=\"login_inputs\" type=\"password\" name=\"password\" required=\"\" placeholder=\"password\"> <br>
            <input class=\"login_inputs\" id=\"btn5\" type=\"submit\">
        </form>
    </main>
    <footer>
        <nav id=\"footer-navbar\">
            <a class=\"nav-fo\" href=\"#\"> | Home </a>
            <a class=\"nav-fo\" href=\"#projet\"> | News </a>
            <a class=\"nav-fo\" href=\"#liens\"> | Contact </a>
            <a class=\"nav-fo\" href=\"https://yanislegrand.000webhostapp.com/index.html\">| Mon portfolio </a>
        </nav>
    </footer>
</body>
<script src=\"assets/script/btn5.js\" type=\"text/javascript\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "connect.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "connect.html.twig", "C:\\Users\\legryan\\Documents\\php\\composer-tp\\templates\\connect.html.twig");
    }
}
