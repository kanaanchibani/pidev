<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7cd0368af159ad111afca999519e09529fed2fa66f5e5f10637a0b1e69ce0364 extends Twig_Template
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
        $__internal_5152a80e978d8b03820b669dd551f1e65f7337381b57c6db8f722074284f654e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5152a80e978d8b03820b669dd551f1e65f7337381b57c6db8f722074284f654e->enter($__internal_5152a80e978d8b03820b669dd551f1e65f7337381b57c6db8f722074284f654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c1a2345520d953ec87be4f860eb48cab478b780ffba8d93d36a3c82ce57417ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a2345520d953ec87be4f860eb48cab478b780ffba8d93d36a3c82ce57417ac->enter($__internal_c1a2345520d953ec87be4f860eb48cab478b780ffba8d93d36a3c82ce57417ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5152a80e978d8b03820b669dd551f1e65f7337381b57c6db8f722074284f654e->leave($__internal_5152a80e978d8b03820b669dd551f1e65f7337381b57c6db8f722074284f654e_prof);

        
        $__internal_c1a2345520d953ec87be4f860eb48cab478b780ffba8d93d36a3c82ce57417ac->leave($__internal_c1a2345520d953ec87be4f860eb48cab478b780ffba8d93d36a3c82ce57417ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_310b80ad313ad22a60add9b1218437ab8f1bee51c1eaa3b84413a0da2af80882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310b80ad313ad22a60add9b1218437ab8f1bee51c1eaa3b84413a0da2af80882->enter($__internal_310b80ad313ad22a60add9b1218437ab8f1bee51c1eaa3b84413a0da2af80882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a562bd1ab87cb1b177e8b4c1021ec7ae41ac8c066c643e281330fe5d6dba0af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562bd1ab87cb1b177e8b4c1021ec7ae41ac8c066c643e281330fe5d6dba0af8->enter($__internal_a562bd1ab87cb1b177e8b4c1021ec7ae41ac8c066c643e281330fe5d6dba0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a562bd1ab87cb1b177e8b4c1021ec7ae41ac8c066c643e281330fe5d6dba0af8->leave($__internal_a562bd1ab87cb1b177e8b4c1021ec7ae41ac8c066c643e281330fe5d6dba0af8_prof);

        
        $__internal_310b80ad313ad22a60add9b1218437ab8f1bee51c1eaa3b84413a0da2af80882->leave($__internal_310b80ad313ad22a60add9b1218437ab8f1bee51c1eaa3b84413a0da2af80882_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a53f432fac82ccda54a89dcd3eb651a56e48fd916404e3898cb103907440bb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53f432fac82ccda54a89dcd3eb651a56e48fd916404e3898cb103907440bb3c->enter($__internal_a53f432fac82ccda54a89dcd3eb651a56e48fd916404e3898cb103907440bb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86ff541455197e566bf8b79cc7662831b9a12ac59f3299479b64b8c05007b8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ff541455197e566bf8b79cc7662831b9a12ac59f3299479b64b8c05007b8fc->enter($__internal_86ff541455197e566bf8b79cc7662831b9a12ac59f3299479b64b8c05007b8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_86ff541455197e566bf8b79cc7662831b9a12ac59f3299479b64b8c05007b8fc->leave($__internal_86ff541455197e566bf8b79cc7662831b9a12ac59f3299479b64b8c05007b8fc_prof);

        
        $__internal_a53f432fac82ccda54a89dcd3eb651a56e48fd916404e3898cb103907440bb3c->leave($__internal_a53f432fac82ccda54a89dcd3eb651a56e48fd916404e3898cb103907440bb3c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec0f0529f64f2f38c581d9cad64d897a3870ca7841b103bd655809e94a3fa9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0f0529f64f2f38c581d9cad64d897a3870ca7841b103bd655809e94a3fa9a9->enter($__internal_ec0f0529f64f2f38c581d9cad64d897a3870ca7841b103bd655809e94a3fa9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b783d5cf6f741387face88f3320b0fe4847b64320fe431b3f34cf88a3de7b0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b783d5cf6f741387face88f3320b0fe4847b64320fe431b3f34cf88a3de7b0aa->enter($__internal_b783d5cf6f741387face88f3320b0fe4847b64320fe431b3f34cf88a3de7b0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b783d5cf6f741387face88f3320b0fe4847b64320fe431b3f34cf88a3de7b0aa->leave($__internal_b783d5cf6f741387face88f3320b0fe4847b64320fe431b3f34cf88a3de7b0aa_prof);

        
        $__internal_ec0f0529f64f2f38c581d9cad64d897a3870ca7841b103bd655809e94a3fa9a9->leave($__internal_ec0f0529f64f2f38c581d9cad64d897a3870ca7841b103bd655809e94a3fa9a9_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
