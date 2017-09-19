<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73d36e20f5b2e41a6231413ab94a173319a7ee90c794cc5dc170bfb3678c2b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d36e20f5b2e41a6231413ab94a173319a7ee90c794cc5dc170bfb3678c2b77->enter($__internal_73d36e20f5b2e41a6231413ab94a173319a7ee90c794cc5dc170bfb3678c2b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cb751abb8ba224b7970204e58e84ce1a6dc27d5055d98d50fbc2ccffe437cdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb751abb8ba224b7970204e58e84ce1a6dc27d5055d98d50fbc2ccffe437cdb2->enter($__internal_cb751abb8ba224b7970204e58e84ce1a6dc27d5055d98d50fbc2ccffe437cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_73d36e20f5b2e41a6231413ab94a173319a7ee90c794cc5dc170bfb3678c2b77->leave($__internal_73d36e20f5b2e41a6231413ab94a173319a7ee90c794cc5dc170bfb3678c2b77_prof);

        
        $__internal_cb751abb8ba224b7970204e58e84ce1a6dc27d5055d98d50fbc2ccffe437cdb2->leave($__internal_cb751abb8ba224b7970204e58e84ce1a6dc27d5055d98d50fbc2ccffe437cdb2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_893e93398c23454f32acd361e97aef8accdf53d9ada5303e844e4e8060defe64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893e93398c23454f32acd361e97aef8accdf53d9ada5303e844e4e8060defe64->enter($__internal_893e93398c23454f32acd361e97aef8accdf53d9ada5303e844e4e8060defe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3462d099227e3a2c71ce9c137759d1196baaab97a37d1bb5440df66e3979e30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3462d099227e3a2c71ce9c137759d1196baaab97a37d1bb5440df66e3979e30c->enter($__internal_3462d099227e3a2c71ce9c137759d1196baaab97a37d1bb5440df66e3979e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3462d099227e3a2c71ce9c137759d1196baaab97a37d1bb5440df66e3979e30c->leave($__internal_3462d099227e3a2c71ce9c137759d1196baaab97a37d1bb5440df66e3979e30c_prof);

        
        $__internal_893e93398c23454f32acd361e97aef8accdf53d9ada5303e844e4e8060defe64->leave($__internal_893e93398c23454f32acd361e97aef8accdf53d9ada5303e844e4e8060defe64_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33758763817655f835a1f5626fff34cf7cac289e77a360f6b5010cb48daf21dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33758763817655f835a1f5626fff34cf7cac289e77a360f6b5010cb48daf21dc->enter($__internal_33758763817655f835a1f5626fff34cf7cac289e77a360f6b5010cb48daf21dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbb5f4a3c840dfaa2ff5379a3913c1e4d6c4713ab76d7ffa828f31303bf2ed04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb5f4a3c840dfaa2ff5379a3913c1e4d6c4713ab76d7ffa828f31303bf2ed04->enter($__internal_cbb5f4a3c840dfaa2ff5379a3913c1e4d6c4713ab76d7ffa828f31303bf2ed04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbb5f4a3c840dfaa2ff5379a3913c1e4d6c4713ab76d7ffa828f31303bf2ed04->leave($__internal_cbb5f4a3c840dfaa2ff5379a3913c1e4d6c4713ab76d7ffa828f31303bf2ed04_prof);

        
        $__internal_33758763817655f835a1f5626fff34cf7cac289e77a360f6b5010cb48daf21dc->leave($__internal_33758763817655f835a1f5626fff34cf7cac289e77a360f6b5010cb48daf21dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7becc26307645076dc3421b8148eefe89fd10a7581fe46739f9ff130174ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7becc26307645076dc3421b8148eefe89fd10a7581fe46739f9ff130174ce1->enter($__internal_5c7becc26307645076dc3421b8148eefe89fd10a7581fe46739f9ff130174ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b72798721143194bd95acf1ae120d7ed2093d85efaa3c8d54262e3c1fb77d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b72798721143194bd95acf1ae120d7ed2093d85efaa3c8d54262e3c1fb77d94->enter($__internal_3b72798721143194bd95acf1ae120d7ed2093d85efaa3c8d54262e3c1fb77d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b72798721143194bd95acf1ae120d7ed2093d85efaa3c8d54262e3c1fb77d94->leave($__internal_3b72798721143194bd95acf1ae120d7ed2093d85efaa3c8d54262e3c1fb77d94_prof);

        
        $__internal_5c7becc26307645076dc3421b8148eefe89fd10a7581fe46739f9ff130174ce1->leave($__internal_5c7becc26307645076dc3421b8148eefe89fd10a7581fe46739f9ff130174ce1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0316b4acbac4ce1a397c14b37b133911ee2d8dd7f3f5ed801502f268395a9b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0316b4acbac4ce1a397c14b37b133911ee2d8dd7f3f5ed801502f268395a9b17->enter($__internal_0316b4acbac4ce1a397c14b37b133911ee2d8dd7f3f5ed801502f268395a9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6a2ac922e55522c799b33c2229c53a89dc05e1538c1a3f4f41091481d44dc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a2ac922e55522c799b33c2229c53a89dc05e1538c1a3f4f41091481d44dc5e->enter($__internal_f6a2ac922e55522c799b33c2229c53a89dc05e1538c1a3f4f41091481d44dc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6a2ac922e55522c799b33c2229c53a89dc05e1538c1a3f4f41091481d44dc5e->leave($__internal_f6a2ac922e55522c799b33c2229c53a89dc05e1538c1a3f4f41091481d44dc5e_prof);

        
        $__internal_0316b4acbac4ce1a397c14b37b133911ee2d8dd7f3f5ed801502f268395a9b17->leave($__internal_0316b4acbac4ce1a397c14b37b133911ee2d8dd7f3f5ed801502f268395a9b17_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/alexandertepe/Documents/KigeApp/app/Resources/views/base.html.twig");
    }
}
