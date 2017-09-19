<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
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
        $__internal_3a9958d1e8e494c73c53f5e98fedb2f9e4ab5d179a359b3a75f0d318f4dbaf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9958d1e8e494c73c53f5e98fedb2f9e4ab5d179a359b3a75f0d318f4dbaf19->enter($__internal_3a9958d1e8e494c73c53f5e98fedb2f9e4ab5d179a359b3a75f0d318f4dbaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fb810b37c084188c456063e332890085f551295622b427e7a9cf068e9433c678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb810b37c084188c456063e332890085f551295622b427e7a9cf068e9433c678->enter($__internal_fb810b37c084188c456063e332890085f551295622b427e7a9cf068e9433c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3a9958d1e8e494c73c53f5e98fedb2f9e4ab5d179a359b3a75f0d318f4dbaf19->leave($__internal_3a9958d1e8e494c73c53f5e98fedb2f9e4ab5d179a359b3a75f0d318f4dbaf19_prof);

        
        $__internal_fb810b37c084188c456063e332890085f551295622b427e7a9cf068e9433c678->leave($__internal_fb810b37c084188c456063e332890085f551295622b427e7a9cf068e9433c678_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09b62de494feaa52e313926cadfd4fa13acb9843bf579926f50fa077511acd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b62de494feaa52e313926cadfd4fa13acb9843bf579926f50fa077511acd03->enter($__internal_09b62de494feaa52e313926cadfd4fa13acb9843bf579926f50fa077511acd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c14c51d526ce88f0b3b7cf2e28ddc88389df4a643daeae3798731842d993f8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14c51d526ce88f0b3b7cf2e28ddc88389df4a643daeae3798731842d993f8f1->enter($__internal_c14c51d526ce88f0b3b7cf2e28ddc88389df4a643daeae3798731842d993f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c14c51d526ce88f0b3b7cf2e28ddc88389df4a643daeae3798731842d993f8f1->leave($__internal_c14c51d526ce88f0b3b7cf2e28ddc88389df4a643daeae3798731842d993f8f1_prof);

        
        $__internal_09b62de494feaa52e313926cadfd4fa13acb9843bf579926f50fa077511acd03->leave($__internal_09b62de494feaa52e313926cadfd4fa13acb9843bf579926f50fa077511acd03_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_577435b7c1333cccbc966a36416c23334fa38ea1ad1b1a0662c11255a999c002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577435b7c1333cccbc966a36416c23334fa38ea1ad1b1a0662c11255a999c002->enter($__internal_577435b7c1333cccbc966a36416c23334fa38ea1ad1b1a0662c11255a999c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6964935963d2ca25b2257de8f89c5943afbfad9a66057508045e11419a3ce472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6964935963d2ca25b2257de8f89c5943afbfad9a66057508045e11419a3ce472->enter($__internal_6964935963d2ca25b2257de8f89c5943afbfad9a66057508045e11419a3ce472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6964935963d2ca25b2257de8f89c5943afbfad9a66057508045e11419a3ce472->leave($__internal_6964935963d2ca25b2257de8f89c5943afbfad9a66057508045e11419a3ce472_prof);

        
        $__internal_577435b7c1333cccbc966a36416c23334fa38ea1ad1b1a0662c11255a999c002->leave($__internal_577435b7c1333cccbc966a36416c23334fa38ea1ad1b1a0662c11255a999c002_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16d5defad335ac75fb49c0e5519fc55416150f33297c0472499438c8e0ed895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16d5defad335ac75fb49c0e5519fc55416150f33297c0472499438c8e0ed895->enter($__internal_d16d5defad335ac75fb49c0e5519fc55416150f33297c0472499438c8e0ed895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a27d78f4732ef84d851c5d840f5b111780df6b345a3d62507415e0dd179f49b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27d78f4732ef84d851c5d840f5b111780df6b345a3d62507415e0dd179f49b6->enter($__internal_a27d78f4732ef84d851c5d840f5b111780df6b345a3d62507415e0dd179f49b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a27d78f4732ef84d851c5d840f5b111780df6b345a3d62507415e0dd179f49b6->leave($__internal_a27d78f4732ef84d851c5d840f5b111780df6b345a3d62507415e0dd179f49b6_prof);

        
        $__internal_d16d5defad335ac75fb49c0e5519fc55416150f33297c0472499438c8e0ed895->leave($__internal_d16d5defad335ac75fb49c0e5519fc55416150f33297c0472499438c8e0ed895_prof);

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
", "@Twig/layout.html.twig", "/home/alex/Dokumente/KigeApp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
