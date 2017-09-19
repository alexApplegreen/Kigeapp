<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd25023f65261e043b78bdc6e811f4a87b4b6b82b976fe0b7c0a57386bb12c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd25023f65261e043b78bdc6e811f4a87b4b6b82b976fe0b7c0a57386bb12c36->enter($__internal_cd25023f65261e043b78bdc6e811f4a87b4b6b82b976fe0b7c0a57386bb12c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9fdf472c83383a90424d17f61e3ccce60cb9270dc81472618826582df1c1c58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdf472c83383a90424d17f61e3ccce60cb9270dc81472618826582df1c1c58a->enter($__internal_9fdf472c83383a90424d17f61e3ccce60cb9270dc81472618826582df1c1c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd25023f65261e043b78bdc6e811f4a87b4b6b82b976fe0b7c0a57386bb12c36->leave($__internal_cd25023f65261e043b78bdc6e811f4a87b4b6b82b976fe0b7c0a57386bb12c36_prof);

        
        $__internal_9fdf472c83383a90424d17f61e3ccce60cb9270dc81472618826582df1c1c58a->leave($__internal_9fdf472c83383a90424d17f61e3ccce60cb9270dc81472618826582df1c1c58a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8f9796ea7b50a505b9807c59f79f1933eaac5b772203f71685bd33ae382c4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f9796ea7b50a505b9807c59f79f1933eaac5b772203f71685bd33ae382c4d2->enter($__internal_d8f9796ea7b50a505b9807c59f79f1933eaac5b772203f71685bd33ae382c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3805bb3f4840168f3ed753a0eafe6ba2fc9903e900f434a4ad641b73a665d650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3805bb3f4840168f3ed753a0eafe6ba2fc9903e900f434a4ad641b73a665d650->enter($__internal_3805bb3f4840168f3ed753a0eafe6ba2fc9903e900f434a4ad641b73a665d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3805bb3f4840168f3ed753a0eafe6ba2fc9903e900f434a4ad641b73a665d650->leave($__internal_3805bb3f4840168f3ed753a0eafe6ba2fc9903e900f434a4ad641b73a665d650_prof);

        
        $__internal_d8f9796ea7b50a505b9807c59f79f1933eaac5b772203f71685bd33ae382c4d2->leave($__internal_d8f9796ea7b50a505b9807c59f79f1933eaac5b772203f71685bd33ae382c4d2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_93c96781bc47e08a6ac287af0dfd2e2faa1be7f433a64e8546bb6f90891dc117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c96781bc47e08a6ac287af0dfd2e2faa1be7f433a64e8546bb6f90891dc117->enter($__internal_93c96781bc47e08a6ac287af0dfd2e2faa1be7f433a64e8546bb6f90891dc117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63b4883d7dbcd9011311a1cd7639af0deb9d0640a02f4478b392defda890347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b4883d7dbcd9011311a1cd7639af0deb9d0640a02f4478b392defda890347c->enter($__internal_63b4883d7dbcd9011311a1cd7639af0deb9d0640a02f4478b392defda890347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63b4883d7dbcd9011311a1cd7639af0deb9d0640a02f4478b392defda890347c->leave($__internal_63b4883d7dbcd9011311a1cd7639af0deb9d0640a02f4478b392defda890347c_prof);

        
        $__internal_93c96781bc47e08a6ac287af0dfd2e2faa1be7f433a64e8546bb6f90891dc117->leave($__internal_93c96781bc47e08a6ac287af0dfd2e2faa1be7f433a64e8546bb6f90891dc117_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_14d295a5f52144d8a078515106cf1f2ddf11c7ec8aced0f7ce4a4c0e86eac9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d295a5f52144d8a078515106cf1f2ddf11c7ec8aced0f7ce4a4c0e86eac9b4->enter($__internal_14d295a5f52144d8a078515106cf1f2ddf11c7ec8aced0f7ce4a4c0e86eac9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88b5bfa5c805132f1a63644b0cabac57da0eb88cec2a35a6bb8e7cccc74ad68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b5bfa5c805132f1a63644b0cabac57da0eb88cec2a35a6bb8e7cccc74ad68f->enter($__internal_88b5bfa5c805132f1a63644b0cabac57da0eb88cec2a35a6bb8e7cccc74ad68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_88b5bfa5c805132f1a63644b0cabac57da0eb88cec2a35a6bb8e7cccc74ad68f->leave($__internal_88b5bfa5c805132f1a63644b0cabac57da0eb88cec2a35a6bb8e7cccc74ad68f_prof);

        
        $__internal_14d295a5f52144d8a078515106cf1f2ddf11c7ec8aced0f7ce4a4c0e86eac9b4->leave($__internal_14d295a5f52144d8a078515106cf1f2ddf11c7ec8aced0f7ce4a4c0e86eac9b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/alex/Dokumente/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
