<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
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
        $__internal_8cbf5d393e54921f787069ffc6ac07e349559195d9794afd1aa2845d47720bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbf5d393e54921f787069ffc6ac07e349559195d9794afd1aa2845d47720bba->enter($__internal_8cbf5d393e54921f787069ffc6ac07e349559195d9794afd1aa2845d47720bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1636a1e13f1456b8d8afb86ce2c6178aa500e990997705a29fababc46bf70444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1636a1e13f1456b8d8afb86ce2c6178aa500e990997705a29fababc46bf70444->enter($__internal_1636a1e13f1456b8d8afb86ce2c6178aa500e990997705a29fababc46bf70444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbf5d393e54921f787069ffc6ac07e349559195d9794afd1aa2845d47720bba->leave($__internal_8cbf5d393e54921f787069ffc6ac07e349559195d9794afd1aa2845d47720bba_prof);

        
        $__internal_1636a1e13f1456b8d8afb86ce2c6178aa500e990997705a29fababc46bf70444->leave($__internal_1636a1e13f1456b8d8afb86ce2c6178aa500e990997705a29fababc46bf70444_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5872a744a54edf26789116a2503c48de182eef194d61f3977901b38978731d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5872a744a54edf26789116a2503c48de182eef194d61f3977901b38978731d5f->enter($__internal_5872a744a54edf26789116a2503c48de182eef194d61f3977901b38978731d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96545e1469dd8f7a90ed8efd1bc6980c906ef256fbc989b82dfd02f4fa0dd373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96545e1469dd8f7a90ed8efd1bc6980c906ef256fbc989b82dfd02f4fa0dd373->enter($__internal_96545e1469dd8f7a90ed8efd1bc6980c906ef256fbc989b82dfd02f4fa0dd373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_96545e1469dd8f7a90ed8efd1bc6980c906ef256fbc989b82dfd02f4fa0dd373->leave($__internal_96545e1469dd8f7a90ed8efd1bc6980c906ef256fbc989b82dfd02f4fa0dd373_prof);

        
        $__internal_5872a744a54edf26789116a2503c48de182eef194d61f3977901b38978731d5f->leave($__internal_5872a744a54edf26789116a2503c48de182eef194d61f3977901b38978731d5f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55125920b19d376cdd3732b3c79c18c7bb8f9c5d812dbcbca1e1341d5e2d37cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55125920b19d376cdd3732b3c79c18c7bb8f9c5d812dbcbca1e1341d5e2d37cb->enter($__internal_55125920b19d376cdd3732b3c79c18c7bb8f9c5d812dbcbca1e1341d5e2d37cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd55e8a2fb583a256e1d6751e345a516ea63a9817ee7930c7a41dcad607d821b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd55e8a2fb583a256e1d6751e345a516ea63a9817ee7930c7a41dcad607d821b->enter($__internal_dd55e8a2fb583a256e1d6751e345a516ea63a9817ee7930c7a41dcad607d821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dd55e8a2fb583a256e1d6751e345a516ea63a9817ee7930c7a41dcad607d821b->leave($__internal_dd55e8a2fb583a256e1d6751e345a516ea63a9817ee7930c7a41dcad607d821b_prof);

        
        $__internal_55125920b19d376cdd3732b3c79c18c7bb8f9c5d812dbcbca1e1341d5e2d37cb->leave($__internal_55125920b19d376cdd3732b3c79c18c7bb8f9c5d812dbcbca1e1341d5e2d37cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bbd68f29df42e6cab13d74cdc70a0dd75f2bda649f4f91810998c57ee686799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbd68f29df42e6cab13d74cdc70a0dd75f2bda649f4f91810998c57ee686799->enter($__internal_7bbd68f29df42e6cab13d74cdc70a0dd75f2bda649f4f91810998c57ee686799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b3e6584044a70f9953c612da6eb489d2a7fe3b1f7c401066f3cc18d6f41da4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3e6584044a70f9953c612da6eb489d2a7fe3b1f7c401066f3cc18d6f41da4b->enter($__internal_7b3e6584044a70f9953c612da6eb489d2a7fe3b1f7c401066f3cc18d6f41da4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7b3e6584044a70f9953c612da6eb489d2a7fe3b1f7c401066f3cc18d6f41da4b->leave($__internal_7b3e6584044a70f9953c612da6eb489d2a7fe3b1f7c401066f3cc18d6f41da4b_prof);

        
        $__internal_7bbd68f29df42e6cab13d74cdc70a0dd75f2bda649f4f91810998c57ee686799->leave($__internal_7bbd68f29df42e6cab13d74cdc70a0dd75f2bda649f4f91810998c57ee686799_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/alexandertepe/Documents/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
