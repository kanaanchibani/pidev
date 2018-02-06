<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
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
        $__internal_24dfcb424886b488b5cc00ffac1359c2420e97b3635c196e767d2ad9368b6c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dfcb424886b488b5cc00ffac1359c2420e97b3635c196e767d2ad9368b6c4f->enter($__internal_24dfcb424886b488b5cc00ffac1359c2420e97b3635c196e767d2ad9368b6c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a3750ced0e9d9b9839d2154da70a99290ea7f298b1066497d21ffc93dd04b04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3750ced0e9d9b9839d2154da70a99290ea7f298b1066497d21ffc93dd04b04c->enter($__internal_a3750ced0e9d9b9839d2154da70a99290ea7f298b1066497d21ffc93dd04b04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_24dfcb424886b488b5cc00ffac1359c2420e97b3635c196e767d2ad9368b6c4f->leave($__internal_24dfcb424886b488b5cc00ffac1359c2420e97b3635c196e767d2ad9368b6c4f_prof);

        
        $__internal_a3750ced0e9d9b9839d2154da70a99290ea7f298b1066497d21ffc93dd04b04c->leave($__internal_a3750ced0e9d9b9839d2154da70a99290ea7f298b1066497d21ffc93dd04b04c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4ad741bd5ceb02e60dbd1eda0a74a0a6ced76999dfc3fb8d9c1380cd427b169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ad741bd5ceb02e60dbd1eda0a74a0a6ced76999dfc3fb8d9c1380cd427b169->enter($__internal_c4ad741bd5ceb02e60dbd1eda0a74a0a6ced76999dfc3fb8d9c1380cd427b169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4b0bb2f03a510ba146158b7f49e99360dd719acce2df3ce2eae08903b0406b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b0bb2f03a510ba146158b7f49e99360dd719acce2df3ce2eae08903b0406b3->enter($__internal_e4b0bb2f03a510ba146158b7f49e99360dd719acce2df3ce2eae08903b0406b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e4b0bb2f03a510ba146158b7f49e99360dd719acce2df3ce2eae08903b0406b3->leave($__internal_e4b0bb2f03a510ba146158b7f49e99360dd719acce2df3ce2eae08903b0406b3_prof);

        
        $__internal_c4ad741bd5ceb02e60dbd1eda0a74a0a6ced76999dfc3fb8d9c1380cd427b169->leave($__internal_c4ad741bd5ceb02e60dbd1eda0a74a0a6ced76999dfc3fb8d9c1380cd427b169_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dd82f05e89a9b7b34a052255420a45d87b94340b193efce1185b88b61f56999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd82f05e89a9b7b34a052255420a45d87b94340b193efce1185b88b61f56999->enter($__internal_7dd82f05e89a9b7b34a052255420a45d87b94340b193efce1185b88b61f56999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_407852b122dd20208e7469aae4d1e875634ce6784d1f37bc3b0f9dcd4128ebf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407852b122dd20208e7469aae4d1e875634ce6784d1f37bc3b0f9dcd4128ebf0->enter($__internal_407852b122dd20208e7469aae4d1e875634ce6784d1f37bc3b0f9dcd4128ebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_407852b122dd20208e7469aae4d1e875634ce6784d1f37bc3b0f9dcd4128ebf0->leave($__internal_407852b122dd20208e7469aae4d1e875634ce6784d1f37bc3b0f9dcd4128ebf0_prof);

        
        $__internal_7dd82f05e89a9b7b34a052255420a45d87b94340b193efce1185b88b61f56999->leave($__internal_7dd82f05e89a9b7b34a052255420a45d87b94340b193efce1185b88b61f56999_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f288e5a84bee3c5b99ba5a1d5e56d0df00aaec5c3f55ac2ee3f507373ef9de2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f288e5a84bee3c5b99ba5a1d5e56d0df00aaec5c3f55ac2ee3f507373ef9de2f->enter($__internal_f288e5a84bee3c5b99ba5a1d5e56d0df00aaec5c3f55ac2ee3f507373ef9de2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c7b31dc7e0a5176c5708e94352d678b198b47337075d2671b05f42e396f15f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7b31dc7e0a5176c5708e94352d678b198b47337075d2671b05f42e396f15f4->enter($__internal_8c7b31dc7e0a5176c5708e94352d678b198b47337075d2671b05f42e396f15f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c7b31dc7e0a5176c5708e94352d678b198b47337075d2671b05f42e396f15f4->leave($__internal_8c7b31dc7e0a5176c5708e94352d678b198b47337075d2671b05f42e396f15f4_prof);

        
        $__internal_f288e5a84bee3c5b99ba5a1d5e56d0df00aaec5c3f55ac2ee3f507373ef9de2f->leave($__internal_f288e5a84bee3c5b99ba5a1d5e56d0df00aaec5c3f55ac2ee3f507373ef9de2f_prof);

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
