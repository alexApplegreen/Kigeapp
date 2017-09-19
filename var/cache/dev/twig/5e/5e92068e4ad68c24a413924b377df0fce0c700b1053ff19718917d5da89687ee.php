<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_73a3b71c9b24c3d1cb5c1cef0e89e9aa241c9bd023485764a0f8c215fd53d4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec80d8eedd9a7a664c692b0a1492b888baecf2692a7966792a6bd3e269c9522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec80d8eedd9a7a664c692b0a1492b888baecf2692a7966792a6bd3e269c9522->enter($__internal_dec80d8eedd9a7a664c692b0a1492b888baecf2692a7966792a6bd3e269c9522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_05cf7b2d9f2b15db74aa7bc0076ec63083d515a679c2ed3a4085ffd86d7f8d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cf7b2d9f2b15db74aa7bc0076ec63083d515a679c2ed3a4085ffd86d7f8d14->enter($__internal_05cf7b2d9f2b15db74aa7bc0076ec63083d515a679c2ed3a4085ffd86d7f8d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Kindergeburtstage</title>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"header\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Bild1.png"), "html", null, true);
        echo "\" height=\"150\" width=\"225\">
    </a>
    <div class=\"navBar\">
        <a class=\"active\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partners");
        echo "\">Anbieter</a>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\">Zusatzleistungen</a>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signup");
        echo "\">Partner werden</a>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "#anchor\">Kontakt</a>
    </div>
</div>
<div class=\"beschreibung\">
    <h1>
        Beschreibung:
    </h1>
    <h3>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </h3>
</div>
<div class=\"barheader\">
    <a class=\"link\">
        <h1>Anbieter</h1>
    </a>
</div>
<div class=\"sideScrollBar\">
    <a href=\"nettebad.html\">
        <div class=\"nettebad\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nettebad1.jpg"), "html", null, true);
        echo "\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Nettebad</h3>
\t\t\t\t</span>
        </div>
    </a>
    <a href=\"bauerhorst.html\">
        <div class=\"bauerhorst\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bauerhorst2.jpg"), "html", null, true);
        echo "\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Bauer Horst</h3>
\t\t\t\t</span>
        </div>
    </a>
    <a href=\"nettebad.html\">
        <div class=\"nettebad\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nettebad1.jpg"), "html", null, true);
        echo "\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Nettebad</h3>
\t\t\t\t</span>
        </div>
    </a>
</div>
<div class=\"footer\">
    <div class=\"anschrift\">
        <h2>
            Anschrift:
        </h2>
        <h3>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </h3>
    </div>
    <div class=\"kontakt\" id=\"anchor\">
        <h2>
            Kontakt:
        </h2>
        <h3>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
        </h3>
    </div>
    <div class=\"impressum\">
        <h3>
            Impressum:
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>
</body>
</body>
</html>";
        
        $__internal_dec80d8eedd9a7a664c692b0a1492b888baecf2692a7966792a6bd3e269c9522->leave($__internal_dec80d8eedd9a7a664c692b0a1492b888baecf2692a7966792a6bd3e269c9522_prof);

        
        $__internal_05cf7b2d9f2b15db74aa7bc0076ec63083d515a679c2ed3a4085ffd86d7f8d14->leave($__internal_05cf7b2d9f2b15db74aa7bc0076ec63083d515a679c2ed3a4085ffd86d7f8d14_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 52,  97 => 44,  86 => 36,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Kindergeburtstage</title>
    <link href=\"{{ asset('css/main.css') }}\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"header\">
    <a href=\"{{ path('homepage') }}\">
        <img src=\"{{ asset('images/Bild1.png') }}\" height=\"150\" width=\"225\">
    </a>
    <div class=\"navBar\">
        <a class=\"active\" href=\"{{ path('homepage') }}\">Home</a>
        <a href=\"{{ path('partners') }}\">Anbieter</a>
        <a href=\"{{ path('services') }}\">Zusatzleistungen</a>
        <a href=\"{{ path('signup') }}\">Partner werden</a>
        <a href=\"{{ path('homepage') }}#anchor\">Kontakt</a>
    </div>
</div>
<div class=\"beschreibung\">
    <h1>
        Beschreibung:
    </h1>
    <h3>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </h3>
</div>
<div class=\"barheader\">
    <a class=\"link\">
        <h1>Anbieter</h1>
    </a>
</div>
<div class=\"sideScrollBar\">
    <a href=\"nettebad.html\">
        <div class=\"nettebad\">
            <img src=\"{{ asset('images/nettebad1.jpg') }}\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Nettebad</h3>
\t\t\t\t</span>
        </div>
    </a>
    <a href=\"bauerhorst.html\">
        <div class=\"bauerhorst\">
            <img src=\"{{ asset('images/bauerhorst2.jpg') }}\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Bauer Horst</h3>
\t\t\t\t</span>
        </div>
    </a>
    <a href=\"nettebad.html\">
        <div class=\"nettebad\">
            <img src=\"{{ asset('images/nettebad1.jpg') }}\" height=\"200\">
            <span class=\"caption\">
\t\t\t\t\t<h3>Nettebad</h3>
\t\t\t\t</span>
        </div>
    </a>
</div>
<div class=\"footer\">
    <div class=\"anschrift\">
        <h2>
            Anschrift:
        </h2>
        <h3>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </h3>
    </div>
    <div class=\"kontakt\" id=\"anchor\">
        <h2>
            Kontakt:
        </h2>
        <h3>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
        </h3>
    </div>
    <div class=\"impressum\">
        <h3>
            Impressum:
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>
</body>
</body>
</html>", "AppBundle:Home:index.html.twig", "/Users/alexandertepe/Documents/KigeApp/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
