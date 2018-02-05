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
        $__internal_76d35bc5887033d8afcd718caa72d43f7d4e100f1a897357e41c03cfa3b86e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d35bc5887033d8afcd718caa72d43f7d4e100f1a897357e41c03cfa3b86e49->enter($__internal_76d35bc5887033d8afcd718caa72d43f7d4e100f1a897357e41c03cfa3b86e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fca1b50d0d854f0b0d363936f8965ffd8a717ab96c4406621d10b3e75029250d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca1b50d0d854f0b0d363936f8965ffd8a717ab96c4406621d10b3e75029250d->enter($__internal_fca1b50d0d854f0b0d363936f8965ffd8a717ab96c4406621d10b3e75029250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d35bc5887033d8afcd718caa72d43f7d4e100f1a897357e41c03cfa3b86e49->leave($__internal_76d35bc5887033d8afcd718caa72d43f7d4e100f1a897357e41c03cfa3b86e49_prof);

        
        $__internal_fca1b50d0d854f0b0d363936f8965ffd8a717ab96c4406621d10b3e75029250d->leave($__internal_fca1b50d0d854f0b0d363936f8965ffd8a717ab96c4406621d10b3e75029250d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fa74ac2fa9a1e7ffc8e92fc28dfd882b9d7bfeebf6bb8bdeb26cc127aae8826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa74ac2fa9a1e7ffc8e92fc28dfd882b9d7bfeebf6bb8bdeb26cc127aae8826->enter($__internal_4fa74ac2fa9a1e7ffc8e92fc28dfd882b9d7bfeebf6bb8bdeb26cc127aae8826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cee77dfff1edc87f99efc8875f37ce13824e78d6a36134fe86b340359d15ef42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee77dfff1edc87f99efc8875f37ce13824e78d6a36134fe86b340359d15ef42->enter($__internal_cee77dfff1edc87f99efc8875f37ce13824e78d6a36134fe86b340359d15ef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cee77dfff1edc87f99efc8875f37ce13824e78d6a36134fe86b340359d15ef42->leave($__internal_cee77dfff1edc87f99efc8875f37ce13824e78d6a36134fe86b340359d15ef42_prof);

        
        $__internal_4fa74ac2fa9a1e7ffc8e92fc28dfd882b9d7bfeebf6bb8bdeb26cc127aae8826->leave($__internal_4fa74ac2fa9a1e7ffc8e92fc28dfd882b9d7bfeebf6bb8bdeb26cc127aae8826_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec6c3807de8caf60c4be480780327a77236f821f2ec90e7104b7da59e423e6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6c3807de8caf60c4be480780327a77236f821f2ec90e7104b7da59e423e6fe->enter($__internal_ec6c3807de8caf60c4be480780327a77236f821f2ec90e7104b7da59e423e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a96479e98f475e474e0f080f86fd4bc656ef090887c065e6befbd4264bc953b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96479e98f475e474e0f080f86fd4bc656ef090887c065e6befbd4264bc953b8->enter($__internal_a96479e98f475e474e0f080f86fd4bc656ef090887c065e6befbd4264bc953b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a96479e98f475e474e0f080f86fd4bc656ef090887c065e6befbd4264bc953b8->leave($__internal_a96479e98f475e474e0f080f86fd4bc656ef090887c065e6befbd4264bc953b8_prof);

        
        $__internal_ec6c3807de8caf60c4be480780327a77236f821f2ec90e7104b7da59e423e6fe->leave($__internal_ec6c3807de8caf60c4be480780327a77236f821f2ec90e7104b7da59e423e6fe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2ffd80c73a183e2279485880834f976cd3a86f816cdd11228d9fbf6e4e8dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2ffd80c73a183e2279485880834f976cd3a86f816cdd11228d9fbf6e4e8dd2->enter($__internal_0d2ffd80c73a183e2279485880834f976cd3a86f816cdd11228d9fbf6e4e8dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2b3a1805fc36bf0bbee7ac1ef18c04e8ab734e9bc54ce842255ad944de64b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b3a1805fc36bf0bbee7ac1ef18c04e8ab734e9bc54ce842255ad944de64b6c->enter($__internal_d2b3a1805fc36bf0bbee7ac1ef18c04e8ab734e9bc54ce842255ad944de64b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d2b3a1805fc36bf0bbee7ac1ef18c04e8ab734e9bc54ce842255ad944de64b6c->leave($__internal_d2b3a1805fc36bf0bbee7ac1ef18c04e8ab734e9bc54ce842255ad944de64b6c_prof);

        
        $__internal_0d2ffd80c73a183e2279485880834f976cd3a86f816cdd11228d9fbf6e4e8dd2->leave($__internal_0d2ffd80c73a183e2279485880834f976cd3a86f816cdd11228d9fbf6e4e8dd2_prof);

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
