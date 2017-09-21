<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_79f9d65e810cd57608bf5c34961f207e49a16cd591d31b9d76d0ef6cc049cd90 extends Twig_Template
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
        $__internal_2ce126ee993f411988211b9b6b815ae86c15d557b04350f75668adb2f793e85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce126ee993f411988211b9b6b815ae86c15d557b04350f75668adb2f793e85c->enter($__internal_2ce126ee993f411988211b9b6b815ae86c15d557b04350f75668adb2f793e85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_ad1fa74ca6efed8d12b235d099aea4f616d3de3c4f7a50296c9e16d7080e6764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1fa74ca6efed8d12b235d099aea4f616d3de3c4f7a50296c9e16d7080e6764->enter($__internal_ad1fa74ca6efed8d12b235d099aea4f616d3de3c4f7a50296c9e16d7080e6764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

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
        
        $__internal_2ce126ee993f411988211b9b6b815ae86c15d557b04350f75668adb2f793e85c->leave($__internal_2ce126ee993f411988211b9b6b815ae86c15d557b04350f75668adb2f793e85c_prof);

        
        $__internal_ad1fa74ca6efed8d12b235d099aea4f616d3de3c4f7a50296c9e16d7080e6764->leave($__internal_ad1fa74ca6efed8d12b235d099aea4f616d3de3c4f7a50296c9e16d7080e6764_prof);

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
</html>", "AppBundle:Home:index.html.twig", "/home/alex/Dokumente/KigeApp/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
