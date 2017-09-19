<?php

/* AppBundle:Services:services.html.twig */
class __TwigTemplate_b4b705e0c6b756967103e4b9925508d7ebd3db0943b0b5a5be07cfde3e27ff63 extends Twig_Template
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
        $__internal_98759fd35933028ddd18685cf9da3409c12e84427703d32e4941646b748cf73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98759fd35933028ddd18685cf9da3409c12e84427703d32e4941646b748cf73e->enter($__internal_98759fd35933028ddd18685cf9da3409c12e84427703d32e4941646b748cf73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Services:services.html.twig"));

        $__internal_f8dff013b9e325e3dc0507dd8a36d29119dd69ab4eb4346ae2b41067202a202a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dff013b9e325e3dc0507dd8a36d29119dd69ab4eb4346ae2b41067202a202a->enter($__internal_f8dff013b9e325e3dc0507dd8a36d29119dd69ab4eb4346ae2b41067202a202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Services:services.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Zusatzleistungen</title>
    <link href=\"leistungen.css\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"header\">
    <a href=\"index.html\">
        <img src=\"./web/Bild1.png\" height=\"150\" width=\"225\">
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
        
        $__internal_98759fd35933028ddd18685cf9da3409c12e84427703d32e4941646b748cf73e->leave($__internal_98759fd35933028ddd18685cf9da3409c12e84427703d32e4941646b748cf73e_prof);

        
        $__internal_f8dff013b9e325e3dc0507dd8a36d29119dd69ab4eb4346ae2b41067202a202a->leave($__internal_f8dff013b9e325e3dc0507dd8a36d29119dd69ab4eb4346ae2b41067202a202a_prof);

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
        return array (  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  25 => 1,);
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
    <link href=\"leistungen.css\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"header\">
    <a href=\"index.html\">
        <img src=\"./web/Bild1.png\" height=\"150\" width=\"225\">
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
</html>", "AppBundle:Services:services.html.twig", "/Users/alexandertepe/Documents/KigeApp/src/AppBundle/Resources/views/Services/services.html.twig");
    }
}
