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
        $__internal_01025b67a656e214af5dccb7719ed9ea252d55b79d835534246e6e0dc2deac35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01025b67a656e214af5dccb7719ed9ea252d55b79d835534246e6e0dc2deac35->enter($__internal_01025b67a656e214af5dccb7719ed9ea252d55b79d835534246e6e0dc2deac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b30cca55eaf78c4ff5e4b22c18f211536defd7f18f9d7edefa6ca1225fc9a82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30cca55eaf78c4ff5e4b22c18f211536defd7f18f9d7edefa6ca1225fc9a82c->enter($__internal_b30cca55eaf78c4ff5e4b22c18f211536defd7f18f9d7edefa6ca1225fc9a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_01025b67a656e214af5dccb7719ed9ea252d55b79d835534246e6e0dc2deac35->leave($__internal_01025b67a656e214af5dccb7719ed9ea252d55b79d835534246e6e0dc2deac35_prof);

        
        $__internal_b30cca55eaf78c4ff5e4b22c18f211536defd7f18f9d7edefa6ca1225fc9a82c->leave($__internal_b30cca55eaf78c4ff5e4b22c18f211536defd7f18f9d7edefa6ca1225fc9a82c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_741b5c650a057037fb7b3d3c04adca710b904bea516a3d347834e8fdbe1fa79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741b5c650a057037fb7b3d3c04adca710b904bea516a3d347834e8fdbe1fa79e->enter($__internal_741b5c650a057037fb7b3d3c04adca710b904bea516a3d347834e8fdbe1fa79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc25e7a72a0a0f043082bc27448cfa0f76a485f65806f2b3500003e7181ad8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc25e7a72a0a0f043082bc27448cfa0f76a485f65806f2b3500003e7181ad8da->enter($__internal_cc25e7a72a0a0f043082bc27448cfa0f76a485f65806f2b3500003e7181ad8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc25e7a72a0a0f043082bc27448cfa0f76a485f65806f2b3500003e7181ad8da->leave($__internal_cc25e7a72a0a0f043082bc27448cfa0f76a485f65806f2b3500003e7181ad8da_prof);

        
        $__internal_741b5c650a057037fb7b3d3c04adca710b904bea516a3d347834e8fdbe1fa79e->leave($__internal_741b5c650a057037fb7b3d3c04adca710b904bea516a3d347834e8fdbe1fa79e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d3a9726c06ad30753557c235e994746edb6bb362eabc29ee8464e16b35eba72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3a9726c06ad30753557c235e994746edb6bb362eabc29ee8464e16b35eba72->enter($__internal_5d3a9726c06ad30753557c235e994746edb6bb362eabc29ee8464e16b35eba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff7a85d05cbe7a43d00a510a5409b660d8d3321f2be895cd0012bd0673b5f610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7a85d05cbe7a43d00a510a5409b660d8d3321f2be895cd0012bd0673b5f610->enter($__internal_ff7a85d05cbe7a43d00a510a5409b660d8d3321f2be895cd0012bd0673b5f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ff7a85d05cbe7a43d00a510a5409b660d8d3321f2be895cd0012bd0673b5f610->leave($__internal_ff7a85d05cbe7a43d00a510a5409b660d8d3321f2be895cd0012bd0673b5f610_prof);

        
        $__internal_5d3a9726c06ad30753557c235e994746edb6bb362eabc29ee8464e16b35eba72->leave($__internal_5d3a9726c06ad30753557c235e994746edb6bb362eabc29ee8464e16b35eba72_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_982d2f48a50948f083c84dd73df3c08269dcc11256ad003b170c4bb3f2d66d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982d2f48a50948f083c84dd73df3c08269dcc11256ad003b170c4bb3f2d66d5f->enter($__internal_982d2f48a50948f083c84dd73df3c08269dcc11256ad003b170c4bb3f2d66d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c4d641a8a893de20ceede467f8fd53c149e910e12bcd1ca075b6e16de2f1242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4d641a8a893de20ceede467f8fd53c149e910e12bcd1ca075b6e16de2f1242->enter($__internal_3c4d641a8a893de20ceede467f8fd53c149e910e12bcd1ca075b6e16de2f1242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c4d641a8a893de20ceede467f8fd53c149e910e12bcd1ca075b6e16de2f1242->leave($__internal_3c4d641a8a893de20ceede467f8fd53c149e910e12bcd1ca075b6e16de2f1242_prof);

        
        $__internal_982d2f48a50948f083c84dd73df3c08269dcc11256ad003b170c4bb3f2d66d5f->leave($__internal_982d2f48a50948f083c84dd73df3c08269dcc11256ad003b170c4bb3f2d66d5f_prof);

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
