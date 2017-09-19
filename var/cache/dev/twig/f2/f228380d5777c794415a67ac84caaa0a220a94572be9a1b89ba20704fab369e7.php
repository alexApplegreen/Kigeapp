<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_aa15079902308dde37601b4745b9f61e6571475d3e58f6362d3eab0ce527e966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa15079902308dde37601b4745b9f61e6571475d3e58f6362d3eab0ce527e966->enter($__internal_aa15079902308dde37601b4745b9f61e6571475d3e58f6362d3eab0ce527e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_428a6ca4e7bb19eb5bf85431e749ce86fa2f597854ca6a9034474fcfa13cfd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428a6ca4e7bb19eb5bf85431e749ce86fa2f597854ca6a9034474fcfa13cfd98->enter($__internal_428a6ca4e7bb19eb5bf85431e749ce86fa2f597854ca6a9034474fcfa13cfd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa15079902308dde37601b4745b9f61e6571475d3e58f6362d3eab0ce527e966->leave($__internal_aa15079902308dde37601b4745b9f61e6571475d3e58f6362d3eab0ce527e966_prof);

        
        $__internal_428a6ca4e7bb19eb5bf85431e749ce86fa2f597854ca6a9034474fcfa13cfd98->leave($__internal_428a6ca4e7bb19eb5bf85431e749ce86fa2f597854ca6a9034474fcfa13cfd98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_470bdbedc14eb28dbe38732acb875feab4615b6430fafb9cd8a173e20fe11954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470bdbedc14eb28dbe38732acb875feab4615b6430fafb9cd8a173e20fe11954->enter($__internal_470bdbedc14eb28dbe38732acb875feab4615b6430fafb9cd8a173e20fe11954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_574198205bb50ed76229f56c57279138a4f042f1608418587a0daced39082cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574198205bb50ed76229f56c57279138a4f042f1608418587a0daced39082cf0->enter($__internal_574198205bb50ed76229f56c57279138a4f042f1608418587a0daced39082cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_574198205bb50ed76229f56c57279138a4f042f1608418587a0daced39082cf0->leave($__internal_574198205bb50ed76229f56c57279138a4f042f1608418587a0daced39082cf0_prof);

        
        $__internal_470bdbedc14eb28dbe38732acb875feab4615b6430fafb9cd8a173e20fe11954->leave($__internal_470bdbedc14eb28dbe38732acb875feab4615b6430fafb9cd8a173e20fe11954_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a11c521a24e4a9e07b08110d07ab32aabb97e4d8dfdeec4ea10edaea22dee6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11c521a24e4a9e07b08110d07ab32aabb97e4d8dfdeec4ea10edaea22dee6b4->enter($__internal_a11c521a24e4a9e07b08110d07ab32aabb97e4d8dfdeec4ea10edaea22dee6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_817ea54789b62dce3a2a48dbe6e8ae44ed7e879e18b40b021a85d00133476c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817ea54789b62dce3a2a48dbe6e8ae44ed7e879e18b40b021a85d00133476c14->enter($__internal_817ea54789b62dce3a2a48dbe6e8ae44ed7e879e18b40b021a85d00133476c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_817ea54789b62dce3a2a48dbe6e8ae44ed7e879e18b40b021a85d00133476c14->leave($__internal_817ea54789b62dce3a2a48dbe6e8ae44ed7e879e18b40b021a85d00133476c14_prof);

        
        $__internal_a11c521a24e4a9e07b08110d07ab32aabb97e4d8dfdeec4ea10edaea22dee6b4->leave($__internal_a11c521a24e4a9e07b08110d07ab32aabb97e4d8dfdeec4ea10edaea22dee6b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d4296861a9b66fa3334eeca056822b2971d1777945e2be49140e5afb3f3aa0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4296861a9b66fa3334eeca056822b2971d1777945e2be49140e5afb3f3aa0e->enter($__internal_5d4296861a9b66fa3334eeca056822b2971d1777945e2be49140e5afb3f3aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b1006bb4d6d649c6b0ebd56ee4537a05f012376783fa09471a6bc1fbaff58ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1006bb4d6d649c6b0ebd56ee4537a05f012376783fa09471a6bc1fbaff58ea->enter($__internal_4b1006bb4d6d649c6b0ebd56ee4537a05f012376783fa09471a6bc1fbaff58ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b1006bb4d6d649c6b0ebd56ee4537a05f012376783fa09471a6bc1fbaff58ea->leave($__internal_4b1006bb4d6d649c6b0ebd56ee4537a05f012376783fa09471a6bc1fbaff58ea_prof);

        
        $__internal_5d4296861a9b66fa3334eeca056822b2971d1777945e2be49140e5afb3f3aa0e->leave($__internal_5d4296861a9b66fa3334eeca056822b2971d1777945e2be49140e5afb3f3aa0e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/alex/Dokumente/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
