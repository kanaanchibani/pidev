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
        $__internal_fd369a12a65658c0463b04e8bc644858741078287038711253557bd265f5a614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd369a12a65658c0463b04e8bc644858741078287038711253557bd265f5a614->enter($__internal_fd369a12a65658c0463b04e8bc644858741078287038711253557bd265f5a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9bba96bccb12ae81e69e250244cac07748c12738e68388afb1ec71ec96b7fb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba96bccb12ae81e69e250244cac07748c12738e68388afb1ec71ec96b7fb16->enter($__internal_9bba96bccb12ae81e69e250244cac07748c12738e68388afb1ec71ec96b7fb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fd369a12a65658c0463b04e8bc644858741078287038711253557bd265f5a614->leave($__internal_fd369a12a65658c0463b04e8bc644858741078287038711253557bd265f5a614_prof);

        
        $__internal_9bba96bccb12ae81e69e250244cac07748c12738e68388afb1ec71ec96b7fb16->leave($__internal_9bba96bccb12ae81e69e250244cac07748c12738e68388afb1ec71ec96b7fb16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51d219da9c9d5b88a71feac055a23b4d42938da338e3749bcf5b11a1972aca8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d219da9c9d5b88a71feac055a23b4d42938da338e3749bcf5b11a1972aca8d->enter($__internal_51d219da9c9d5b88a71feac055a23b4d42938da338e3749bcf5b11a1972aca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65561d096af2b3fc5953d3cdef19f536e4cf9db2f0b867c33c1f390e2e0e6988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65561d096af2b3fc5953d3cdef19f536e4cf9db2f0b867c33c1f390e2e0e6988->enter($__internal_65561d096af2b3fc5953d3cdef19f536e4cf9db2f0b867c33c1f390e2e0e6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_65561d096af2b3fc5953d3cdef19f536e4cf9db2f0b867c33c1f390e2e0e6988->leave($__internal_65561d096af2b3fc5953d3cdef19f536e4cf9db2f0b867c33c1f390e2e0e6988_prof);

        
        $__internal_51d219da9c9d5b88a71feac055a23b4d42938da338e3749bcf5b11a1972aca8d->leave($__internal_51d219da9c9d5b88a71feac055a23b4d42938da338e3749bcf5b11a1972aca8d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_35a086f2f8152ecb40a3c3806f4a0ac8f2a471da9e9c25d0e11aa6023905ac12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a086f2f8152ecb40a3c3806f4a0ac8f2a471da9e9c25d0e11aa6023905ac12->enter($__internal_35a086f2f8152ecb40a3c3806f4a0ac8f2a471da9e9c25d0e11aa6023905ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0184a3878978f07342d94390794f573e68d6a5e178d8034b28dd2c008de5f1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0184a3878978f07342d94390794f573e68d6a5e178d8034b28dd2c008de5f1f0->enter($__internal_0184a3878978f07342d94390794f573e68d6a5e178d8034b28dd2c008de5f1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0184a3878978f07342d94390794f573e68d6a5e178d8034b28dd2c008de5f1f0->leave($__internal_0184a3878978f07342d94390794f573e68d6a5e178d8034b28dd2c008de5f1f0_prof);

        
        $__internal_35a086f2f8152ecb40a3c3806f4a0ac8f2a471da9e9c25d0e11aa6023905ac12->leave($__internal_35a086f2f8152ecb40a3c3806f4a0ac8f2a471da9e9c25d0e11aa6023905ac12_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_86d63135cd3d4f9a19ded2565614930646a4a38494d311aa6e5a4b92c842b016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d63135cd3d4f9a19ded2565614930646a4a38494d311aa6e5a4b92c842b016->enter($__internal_86d63135cd3d4f9a19ded2565614930646a4a38494d311aa6e5a4b92c842b016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd198ad4a0277aa69b2379f9a3c32fc5d2f463229d991789e53d271e3f684b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd198ad4a0277aa69b2379f9a3c32fc5d2f463229d991789e53d271e3f684b75->enter($__internal_fd198ad4a0277aa69b2379f9a3c32fc5d2f463229d991789e53d271e3f684b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd198ad4a0277aa69b2379f9a3c32fc5d2f463229d991789e53d271e3f684b75->leave($__internal_fd198ad4a0277aa69b2379f9a3c32fc5d2f463229d991789e53d271e3f684b75_prof);

        
        $__internal_86d63135cd3d4f9a19ded2565614930646a4a38494d311aa6e5a4b92c842b016->leave($__internal_86d63135cd3d4f9a19ded2565614930646a4a38494d311aa6e5a4b92c842b016_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
