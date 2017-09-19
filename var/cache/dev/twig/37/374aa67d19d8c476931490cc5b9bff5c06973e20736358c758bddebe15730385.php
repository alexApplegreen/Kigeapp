<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a166838abbbc91be25c9f1cff9e21d9e608d18e48a09dbc883de75ff6e74b233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a166838abbbc91be25c9f1cff9e21d9e608d18e48a09dbc883de75ff6e74b233->enter($__internal_a166838abbbc91be25c9f1cff9e21d9e608d18e48a09dbc883de75ff6e74b233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d922d1d30ac068fbe99cc914641484b991d495b553f432aa7bc9e70ad67c3c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d922d1d30ac068fbe99cc914641484b991d495b553f432aa7bc9e70ad67c3c8b->enter($__internal_d922d1d30ac068fbe99cc914641484b991d495b553f432aa7bc9e70ad67c3c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a166838abbbc91be25c9f1cff9e21d9e608d18e48a09dbc883de75ff6e74b233->leave($__internal_a166838abbbc91be25c9f1cff9e21d9e608d18e48a09dbc883de75ff6e74b233_prof);

        
        $__internal_d922d1d30ac068fbe99cc914641484b991d495b553f432aa7bc9e70ad67c3c8b->leave($__internal_d922d1d30ac068fbe99cc914641484b991d495b553f432aa7bc9e70ad67c3c8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ab15b44a589a8cb06e22ac63cab3d526e5e573cbc11b3354db03794fdf0d45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab15b44a589a8cb06e22ac63cab3d526e5e573cbc11b3354db03794fdf0d45a->enter($__internal_0ab15b44a589a8cb06e22ac63cab3d526e5e573cbc11b3354db03794fdf0d45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce6681808e8f1eea01bec00a677219d30025565785665bbe56231ef1519e4e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6681808e8f1eea01bec00a677219d30025565785665bbe56231ef1519e4e61->enter($__internal_ce6681808e8f1eea01bec00a677219d30025565785665bbe56231ef1519e4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce6681808e8f1eea01bec00a677219d30025565785665bbe56231ef1519e4e61->leave($__internal_ce6681808e8f1eea01bec00a677219d30025565785665bbe56231ef1519e4e61_prof);

        
        $__internal_0ab15b44a589a8cb06e22ac63cab3d526e5e573cbc11b3354db03794fdf0d45a->leave($__internal_0ab15b44a589a8cb06e22ac63cab3d526e5e573cbc11b3354db03794fdf0d45a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdcf704a9c1a9fea1760a74ffc2c16c220d46c731ea5332e262d195e8e6a2ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcf704a9c1a9fea1760a74ffc2c16c220d46c731ea5332e262d195e8e6a2ec8->enter($__internal_cdcf704a9c1a9fea1760a74ffc2c16c220d46c731ea5332e262d195e8e6a2ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b16adc1255464b9c1787bae6d889cbcc14c100f1e30e51631b1c80ae8b0c9651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16adc1255464b9c1787bae6d889cbcc14c100f1e30e51631b1c80ae8b0c9651->enter($__internal_b16adc1255464b9c1787bae6d889cbcc14c100f1e30e51631b1c80ae8b0c9651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b16adc1255464b9c1787bae6d889cbcc14c100f1e30e51631b1c80ae8b0c9651->leave($__internal_b16adc1255464b9c1787bae6d889cbcc14c100f1e30e51631b1c80ae8b0c9651_prof);

        
        $__internal_cdcf704a9c1a9fea1760a74ffc2c16c220d46c731ea5332e262d195e8e6a2ec8->leave($__internal_cdcf704a9c1a9fea1760a74ffc2c16c220d46c731ea5332e262d195e8e6a2ec8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b7fdf98de8b5e6799cbed732880c33f5203d301b91fdb222382b866ecbfef66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7fdf98de8b5e6799cbed732880c33f5203d301b91fdb222382b866ecbfef66->enter($__internal_0b7fdf98de8b5e6799cbed732880c33f5203d301b91fdb222382b866ecbfef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2985f011b1a3cfb254e9712ebdb8ad731c0f769868abe72eaa9d9a4079824a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2985f011b1a3cfb254e9712ebdb8ad731c0f769868abe72eaa9d9a4079824a2e->enter($__internal_2985f011b1a3cfb254e9712ebdb8ad731c0f769868abe72eaa9d9a4079824a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2985f011b1a3cfb254e9712ebdb8ad731c0f769868abe72eaa9d9a4079824a2e->leave($__internal_2985f011b1a3cfb254e9712ebdb8ad731c0f769868abe72eaa9d9a4079824a2e_prof);

        
        $__internal_0b7fdf98de8b5e6799cbed732880c33f5203d301b91fdb222382b866ecbfef66->leave($__internal_0b7fdf98de8b5e6799cbed732880c33f5203d301b91fdb222382b866ecbfef66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/alexandertepe/Documents/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
