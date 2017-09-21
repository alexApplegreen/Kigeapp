<?php

/* AppBundle:Services:services.html.twig */
class __TwigTemplate_758f71dca9610a5f81c90ac4c08e735476103ba9bac6af453de6ee9e3d6bc934 extends Twig_Template
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
        $__internal_e5ae20a1be5652590bdf97efdbdc7ab5a10c516d0bd123954bbbb0547eb63cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ae20a1be5652590bdf97efdbdc7ab5a10c516d0bd123954bbbb0547eb63cca->enter($__internal_e5ae20a1be5652590bdf97efdbdc7ab5a10c516d0bd123954bbbb0547eb63cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Services:services.html.twig"));

        $__internal_19a747a694ea6d02e78ba669e50ba090f3e18256add98e138ccd1be406ccebcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a747a694ea6d02e78ba669e50ba090f3e18256add98e138ccd1be406ccebcc->enter($__internal_19a747a694ea6d02e78ba669e50ba090f3e18256add98e138ccd1be406ccebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Services:services.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Zusatzleistungen</title>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/leistungen.css"), "html", null, true);
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
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partners");
        echo "\">Anbieter</a>
        <a class=\"active\" href=\"";
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
<div class=\"textbox\">
    <h1>
        Text:
    </h1>
    <h3>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </h3>
</div>
<div class=\"leistungen\">
    <h1>Zusatzleistungen</h1>
</div>
<div class=\"impressum\">
    <h3>
        Impressum:
    </h3>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>
</body>
</html>";
        
        $__internal_e5ae20a1be5652590bdf97efdbdc7ab5a10c516d0bd123954bbbb0547eb63cca->leave($__internal_e5ae20a1be5652590bdf97efdbdc7ab5a10c516d0bd123954bbbb0547eb63cca_prof);

        
        $__internal_19a747a694ea6d02e78ba669e50ba090f3e18256add98e138ccd1be406ccebcc->leave($__internal_19a747a694ea6d02e78ba669e50ba090f3e18256add98e138ccd1be406ccebcc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Services:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  38 => 9,  31 => 5,  25 => 1,);
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
    <title>Zusatzleistungen</title>
    <link href=\"{{ asset('css/leistungen.css') }}\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"header\">
    <a href=\"{{ path('homepage') }}\">
        <img src=\"{{ asset('images/Bild1.png') }}\" height=\"150\" width=\"225\">
    </a>
    <div class=\"navBar\">
        <a href=\"{{ path('homepage') }}\">Home</a>
        <a href=\"{{ path('partners') }}\">Anbieter</a>
        <a class=\"active\" href=\"{{ path('services') }}\">Zusatzleistungen</a>
        <a href=\"{{ path('signup') }}\">Partner werden</a>
        <a href=\"{{ path('homepage') }}#anchor\">Kontakt</a>
    </div>
</div>
<div class=\"textbox\">
    <h1>
        Text:
    </h1>
    <h3>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </h3>
</div>
<div class=\"leistungen\">
    <h1>Zusatzleistungen</h1>
</div>
<div class=\"impressum\">
    <h3>
        Impressum:
    </h3>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>
</body>
</html>", "AppBundle:Services:services.html.twig", "/home/alex/Dokumente/KigeApp/src/AppBundle/Resources/views/Services/services.html.twig");
    }
}
