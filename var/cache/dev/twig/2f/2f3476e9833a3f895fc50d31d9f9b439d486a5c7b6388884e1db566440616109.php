<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2d5a561363a2617836ba29a7c76482dc3874404bc793e75eba72a11f41f3ec26 extends Twig_Template
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
        $__internal_c2555659c57d393b93c94152a8f738f11096dc1967c8a5766a25e73764a1fe66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2555659c57d393b93c94152a8f738f11096dc1967c8a5766a25e73764a1fe66->enter($__internal_c2555659c57d393b93c94152a8f738f11096dc1967c8a5766a25e73764a1fe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_29b7f3ef2c65e0bb2345fdd3a4b90fb67e39b0a7a288ad82e878db1c600c362a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b7f3ef2c65e0bb2345fdd3a4b90fb67e39b0a7a288ad82e878db1c600c362a->enter($__internal_29b7f3ef2c65e0bb2345fdd3a4b90fb67e39b0a7a288ad82e878db1c600c362a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2555659c57d393b93c94152a8f738f11096dc1967c8a5766a25e73764a1fe66->leave($__internal_c2555659c57d393b93c94152a8f738f11096dc1967c8a5766a25e73764a1fe66_prof);

        
        $__internal_29b7f3ef2c65e0bb2345fdd3a4b90fb67e39b0a7a288ad82e878db1c600c362a->leave($__internal_29b7f3ef2c65e0bb2345fdd3a4b90fb67e39b0a7a288ad82e878db1c600c362a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4b3f86e250f9f3c3e759c4262339cb4605b4a0d43b1825de5eda1897d773f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b3f86e250f9f3c3e759c4262339cb4605b4a0d43b1825de5eda1897d773f4e->enter($__internal_b4b3f86e250f9f3c3e759c4262339cb4605b4a0d43b1825de5eda1897d773f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57c152be0690ea13a05722a7847aa3b194128af734a3694cfaff92033f645a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c152be0690ea13a05722a7847aa3b194128af734a3694cfaff92033f645a77->enter($__internal_57c152be0690ea13a05722a7847aa3b194128af734a3694cfaff92033f645a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_57c152be0690ea13a05722a7847aa3b194128af734a3694cfaff92033f645a77->leave($__internal_57c152be0690ea13a05722a7847aa3b194128af734a3694cfaff92033f645a77_prof);

        
        $__internal_b4b3f86e250f9f3c3e759c4262339cb4605b4a0d43b1825de5eda1897d773f4e->leave($__internal_b4b3f86e250f9f3c3e759c4262339cb4605b4a0d43b1825de5eda1897d773f4e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2c4aae6d5df7346c6ee3b882036fbd13a376a1373f7a717da1d9297760cfe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c4aae6d5df7346c6ee3b882036fbd13a376a1373f7a717da1d9297760cfe09->enter($__internal_b2c4aae6d5df7346c6ee3b882036fbd13a376a1373f7a717da1d9297760cfe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18130fd7cec9e018934065ffdfed08f34e2078966f762f1f2c8c34d20278b448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18130fd7cec9e018934065ffdfed08f34e2078966f762f1f2c8c34d20278b448->enter($__internal_18130fd7cec9e018934065ffdfed08f34e2078966f762f1f2c8c34d20278b448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18130fd7cec9e018934065ffdfed08f34e2078966f762f1f2c8c34d20278b448->leave($__internal_18130fd7cec9e018934065ffdfed08f34e2078966f762f1f2c8c34d20278b448_prof);

        
        $__internal_b2c4aae6d5df7346c6ee3b882036fbd13a376a1373f7a717da1d9297760cfe09->leave($__internal_b2c4aae6d5df7346c6ee3b882036fbd13a376a1373f7a717da1d9297760cfe09_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aefa539254fa64befbb2f9501376db2f0b4d6de4358ac70de556d86db8f35bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefa539254fa64befbb2f9501376db2f0b4d6de4358ac70de556d86db8f35bdf->enter($__internal_aefa539254fa64befbb2f9501376db2f0b4d6de4358ac70de556d86db8f35bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4507fa08f7812bcc0e09bc2ff83e7cbba7e99c71c2641dd396639ad440a6a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507fa08f7812bcc0e09bc2ff83e7cbba7e99c71c2641dd396639ad440a6a354->enter($__internal_4507fa08f7812bcc0e09bc2ff83e7cbba7e99c71c2641dd396639ad440a6a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4507fa08f7812bcc0e09bc2ff83e7cbba7e99c71c2641dd396639ad440a6a354->leave($__internal_4507fa08f7812bcc0e09bc2ff83e7cbba7e99c71c2641dd396639ad440a6a354_prof);

        
        $__internal_aefa539254fa64befbb2f9501376db2f0b4d6de4358ac70de556d86db8f35bdf->leave($__internal_aefa539254fa64befbb2f9501376db2f0b4d6de4358ac70de556d86db8f35bdf_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
