<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_73a3b71c9b24c3d1cb5c1cef0e89e9aa241c9bd023485764a0f8c215fd53d4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4edc246dde412be7e3c6b95e77e3de8390e2e860f959a32e08eb66cdd0433a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4edc246dde412be7e3c6b95e77e3de8390e2e860f959a32e08eb66cdd0433a0->enter($__internal_a4edc246dde412be7e3c6b95e77e3de8390e2e860f959a32e08eb66cdd0433a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_52b18e20b592f60b3536cbb30fccbb5436f6628106a45da113ec36e8d7f5ede3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b18e20b592f60b3536cbb30fccbb5436f6628106a45da113ec36e8d7f5ede3->enter($__internal_52b18e20b592f60b3536cbb30fccbb5436f6628106a45da113ec36e8d7f5ede3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4edc246dde412be7e3c6b95e77e3de8390e2e860f959a32e08eb66cdd0433a0->leave($__internal_a4edc246dde412be7e3c6b95e77e3de8390e2e860f959a32e08eb66cdd0433a0_prof);

        
        $__internal_52b18e20b592f60b3536cbb30fccbb5436f6628106a45da113ec36e8d7f5ede3->leave($__internal_52b18e20b592f60b3536cbb30fccbb5436f6628106a45da113ec36e8d7f5ede3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e13bf04f0bbb6a464e0f87d3dbf61c07e9fc2dee86c3926831a7dc7f7be68f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e13bf04f0bbb6a464e0f87d3dbf61c07e9fc2dee86c3926831a7dc7f7be68f9->enter($__internal_4e13bf04f0bbb6a464e0f87d3dbf61c07e9fc2dee86c3926831a7dc7f7be68f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbc70a88eb5bef8666694283c7d0bfc89598fdc446349b9de7cfb26a379ce7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc70a88eb5bef8666694283c7d0bfc89598fdc446349b9de7cfb26a379ce7ab->enter($__internal_dbc70a88eb5bef8666694283c7d0bfc89598fdc446349b9de7cfb26a379ce7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Home:index";
        
        $__internal_dbc70a88eb5bef8666694283c7d0bfc89598fdc446349b9de7cfb26a379ce7ab->leave($__internal_dbc70a88eb5bef8666694283c7d0bfc89598fdc446349b9de7cfb26a379ce7ab_prof);

        
        $__internal_4e13bf04f0bbb6a464e0f87d3dbf61c07e9fc2dee86c3926831a7dc7f7be68f9->leave($__internal_4e13bf04f0bbb6a464e0f87d3dbf61c07e9fc2dee86c3926831a7dc7f7be68f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12472e200cf23c0ae0ddd38b1ae00e61e48bd1c7b59f93a2ad83c677ddfbeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12472e200cf23c0ae0ddd38b1ae00e61e48bd1c7b59f93a2ad83c677ddfbeb9->enter($__internal_a12472e200cf23c0ae0ddd38b1ae00e61e48bd1c7b59f93a2ad83c677ddfbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_458c0b9538e72963e84bd0accb6f640c571b85556aae5f4b78bb171127c01960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458c0b9538e72963e84bd0accb6f640c571b85556aae5f4b78bb171127c01960->enter($__internal_458c0b9538e72963e84bd0accb6f640c571b85556aae5f4b78bb171127c01960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_458c0b9538e72963e84bd0accb6f640c571b85556aae5f4b78bb171127c01960->leave($__internal_458c0b9538e72963e84bd0accb6f640c571b85556aae5f4b78bb171127c01960_prof);

        
        $__internal_a12472e200cf23c0ae0ddd38b1ae00e61e48bd1c7b59f93a2ad83c677ddfbeb9->leave($__internal_a12472e200cf23c0ae0ddd38b1ae00e61e48bd1c7b59f93a2ad83c677ddfbeb9_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Home:index{% endblock %}

{% block body %}
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "AppBundle:Home:index.html.twig", "/Users/alexandertepe/Documents/KigeApp/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
