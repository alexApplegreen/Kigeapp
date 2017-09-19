<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8900ea39a4a6709e1cba3382afc3f7888831fb0befb1db067f5171f48cf256fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8900ea39a4a6709e1cba3382afc3f7888831fb0befb1db067f5171f48cf256fa->enter($__internal_8900ea39a4a6709e1cba3382afc3f7888831fb0befb1db067f5171f48cf256fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_051e61597ef8ea5f5c2dc37a16b92647a2f706435ba79a32bfbe9f499ea5532f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051e61597ef8ea5f5c2dc37a16b92647a2f706435ba79a32bfbe9f499ea5532f->enter($__internal_051e61597ef8ea5f5c2dc37a16b92647a2f706435ba79a32bfbe9f499ea5532f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8900ea39a4a6709e1cba3382afc3f7888831fb0befb1db067f5171f48cf256fa->leave($__internal_8900ea39a4a6709e1cba3382afc3f7888831fb0befb1db067f5171f48cf256fa_prof);

        
        $__internal_051e61597ef8ea5f5c2dc37a16b92647a2f706435ba79a32bfbe9f499ea5532f->leave($__internal_051e61597ef8ea5f5c2dc37a16b92647a2f706435ba79a32bfbe9f499ea5532f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c7b6c908287e7b8255e2ae42e14002d8aab6358b8159b35d1123cbaec12b9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7b6c908287e7b8255e2ae42e14002d8aab6358b8159b35d1123cbaec12b9c4->enter($__internal_5c7b6c908287e7b8255e2ae42e14002d8aab6358b8159b35d1123cbaec12b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be9526a3dabcd784f77b258dee73a6670d14988da00b7597af608a1bb08f2c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9526a3dabcd784f77b258dee73a6670d14988da00b7597af608a1bb08f2c77->enter($__internal_be9526a3dabcd784f77b258dee73a6670d14988da00b7597af608a1bb08f2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_be9526a3dabcd784f77b258dee73a6670d14988da00b7597af608a1bb08f2c77->leave($__internal_be9526a3dabcd784f77b258dee73a6670d14988da00b7597af608a1bb08f2c77_prof);

        
        $__internal_5c7b6c908287e7b8255e2ae42e14002d8aab6358b8159b35d1123cbaec12b9c4->leave($__internal_5c7b6c908287e7b8255e2ae42e14002d8aab6358b8159b35d1123cbaec12b9c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d84410e8642894633dbc69f137376aad7b6897ff752b4cd1afe81872b1cc9de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84410e8642894633dbc69f137376aad7b6897ff752b4cd1afe81872b1cc9de9->enter($__internal_d84410e8642894633dbc69f137376aad7b6897ff752b4cd1afe81872b1cc9de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad76c625179ce601fcbfc162387e6f32e94d82adedc2ef436cbde111ee821a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad76c625179ce601fcbfc162387e6f32e94d82adedc2ef436cbde111ee821a43->enter($__internal_ad76c625179ce601fcbfc162387e6f32e94d82adedc2ef436cbde111ee821a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad76c625179ce601fcbfc162387e6f32e94d82adedc2ef436cbde111ee821a43->leave($__internal_ad76c625179ce601fcbfc162387e6f32e94d82adedc2ef436cbde111ee821a43_prof);

        
        $__internal_d84410e8642894633dbc69f137376aad7b6897ff752b4cd1afe81872b1cc9de9->leave($__internal_d84410e8642894633dbc69f137376aad7b6897ff752b4cd1afe81872b1cc9de9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f2afac1df6c0c48f8835e1e25f3e2a397a84c9f82bf21ea0355c4c9fc71b3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2afac1df6c0c48f8835e1e25f3e2a397a84c9f82bf21ea0355c4c9fc71b3e7->enter($__internal_5f2afac1df6c0c48f8835e1e25f3e2a397a84c9f82bf21ea0355c4c9fc71b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b89b699a4ff93c06de58491508593b6e40f8a69d31b90e0ff79291ecaafa13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89b699a4ff93c06de58491508593b6e40f8a69d31b90e0ff79291ecaafa13c->enter($__internal_2b89b699a4ff93c06de58491508593b6e40f8a69d31b90e0ff79291ecaafa13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b89b699a4ff93c06de58491508593b6e40f8a69d31b90e0ff79291ecaafa13c->leave($__internal_2b89b699a4ff93c06de58491508593b6e40f8a69d31b90e0ff79291ecaafa13c_prof);

        
        $__internal_5f2afac1df6c0c48f8835e1e25f3e2a397a84c9f82bf21ea0355c4c9fc71b3e7->leave($__internal_5f2afac1df6c0c48f8835e1e25f3e2a397a84c9f82bf21ea0355c4c9fc71b3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/alexandertepe/Documents/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
