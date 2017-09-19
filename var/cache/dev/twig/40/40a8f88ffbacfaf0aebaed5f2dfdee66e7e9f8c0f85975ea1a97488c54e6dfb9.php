<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21bbbd42675321214b86c9d5b4f6274b1df286615511d21f81560cfc243ebc25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bbbd42675321214b86c9d5b4f6274b1df286615511d21f81560cfc243ebc25->enter($__internal_21bbbd42675321214b86c9d5b4f6274b1df286615511d21f81560cfc243ebc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_82c783472cf4051b7b80c9c0dccb5856acf44dbc1e31b8f2989c5e5c4ba05c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c783472cf4051b7b80c9c0dccb5856acf44dbc1e31b8f2989c5e5c4ba05c80->enter($__internal_82c783472cf4051b7b80c9c0dccb5856acf44dbc1e31b8f2989c5e5c4ba05c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21bbbd42675321214b86c9d5b4f6274b1df286615511d21f81560cfc243ebc25->leave($__internal_21bbbd42675321214b86c9d5b4f6274b1df286615511d21f81560cfc243ebc25_prof);

        
        $__internal_82c783472cf4051b7b80c9c0dccb5856acf44dbc1e31b8f2989c5e5c4ba05c80->leave($__internal_82c783472cf4051b7b80c9c0dccb5856acf44dbc1e31b8f2989c5e5c4ba05c80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6932f85173d0f7924d69f00c845b3e7019975bc87841f7e2da874b6400ce222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6932f85173d0f7924d69f00c845b3e7019975bc87841f7e2da874b6400ce222->enter($__internal_f6932f85173d0f7924d69f00c845b3e7019975bc87841f7e2da874b6400ce222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03b2b4fbfd734c86fb367a7cbe434d9b707d597e7fe49d8a2431ed8d4a8fde53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b2b4fbfd734c86fb367a7cbe434d9b707d597e7fe49d8a2431ed8d4a8fde53->enter($__internal_03b2b4fbfd734c86fb367a7cbe434d9b707d597e7fe49d8a2431ed8d4a8fde53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_03b2b4fbfd734c86fb367a7cbe434d9b707d597e7fe49d8a2431ed8d4a8fde53->leave($__internal_03b2b4fbfd734c86fb367a7cbe434d9b707d597e7fe49d8a2431ed8d4a8fde53_prof);

        
        $__internal_f6932f85173d0f7924d69f00c845b3e7019975bc87841f7e2da874b6400ce222->leave($__internal_f6932f85173d0f7924d69f00c845b3e7019975bc87841f7e2da874b6400ce222_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56d8ee75cab151f5611cb1e40af8c3d3785afa1c74d33b5dbd00f8850d51204b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d8ee75cab151f5611cb1e40af8c3d3785afa1c74d33b5dbd00f8850d51204b->enter($__internal_56d8ee75cab151f5611cb1e40af8c3d3785afa1c74d33b5dbd00f8850d51204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df2f47f7f834759b9a3dfcc53971dc17a143faff4cdc38c538d2e37242115659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2f47f7f834759b9a3dfcc53971dc17a143faff4cdc38c538d2e37242115659->enter($__internal_df2f47f7f834759b9a3dfcc53971dc17a143faff4cdc38c538d2e37242115659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df2f47f7f834759b9a3dfcc53971dc17a143faff4cdc38c538d2e37242115659->leave($__internal_df2f47f7f834759b9a3dfcc53971dc17a143faff4cdc38c538d2e37242115659_prof);

        
        $__internal_56d8ee75cab151f5611cb1e40af8c3d3785afa1c74d33b5dbd00f8850d51204b->leave($__internal_56d8ee75cab151f5611cb1e40af8c3d3785afa1c74d33b5dbd00f8850d51204b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23192b0f1ccc4b5a3f7992435c6af8e12539f90a1c552f7d0d97db89ba047f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23192b0f1ccc4b5a3f7992435c6af8e12539f90a1c552f7d0d97db89ba047f9e->enter($__internal_23192b0f1ccc4b5a3f7992435c6af8e12539f90a1c552f7d0d97db89ba047f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40bb5d2ee360f67ec211336b241d9f5955cbe6c6d6b1384920a303cf9e60f675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bb5d2ee360f67ec211336b241d9f5955cbe6c6d6b1384920a303cf9e60f675->enter($__internal_40bb5d2ee360f67ec211336b241d9f5955cbe6c6d6b1384920a303cf9e60f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_40bb5d2ee360f67ec211336b241d9f5955cbe6c6d6b1384920a303cf9e60f675->leave($__internal_40bb5d2ee360f67ec211336b241d9f5955cbe6c6d6b1384920a303cf9e60f675_prof);

        
        $__internal_23192b0f1ccc4b5a3f7992435c6af8e12539f90a1c552f7d0d97db89ba047f9e->leave($__internal_23192b0f1ccc4b5a3f7992435c6af8e12539f90a1c552f7d0d97db89ba047f9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/alex/Dokumente/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
