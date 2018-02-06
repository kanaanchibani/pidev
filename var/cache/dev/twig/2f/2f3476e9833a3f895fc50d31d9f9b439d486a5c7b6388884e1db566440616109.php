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
        $__internal_554a6b18b312538dcdd2cb8e7b6a0526f66408e34e13a8b3ec410ea24ab1a5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554a6b18b312538dcdd2cb8e7b6a0526f66408e34e13a8b3ec410ea24ab1a5ad->enter($__internal_554a6b18b312538dcdd2cb8e7b6a0526f66408e34e13a8b3ec410ea24ab1a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ee08e078bd1cb0393d652f733d096e5acada5bad3944021809febd7dd8910ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee08e078bd1cb0393d652f733d096e5acada5bad3944021809febd7dd8910ad1->enter($__internal_ee08e078bd1cb0393d652f733d096e5acada5bad3944021809febd7dd8910ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554a6b18b312538dcdd2cb8e7b6a0526f66408e34e13a8b3ec410ea24ab1a5ad->leave($__internal_554a6b18b312538dcdd2cb8e7b6a0526f66408e34e13a8b3ec410ea24ab1a5ad_prof);

        
        $__internal_ee08e078bd1cb0393d652f733d096e5acada5bad3944021809febd7dd8910ad1->leave($__internal_ee08e078bd1cb0393d652f733d096e5acada5bad3944021809febd7dd8910ad1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e905f509761e0403f77b4b34ee02058606e78f156a14045b50525d4b931ff8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e905f509761e0403f77b4b34ee02058606e78f156a14045b50525d4b931ff8f->enter($__internal_7e905f509761e0403f77b4b34ee02058606e78f156a14045b50525d4b931ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a80cfa3c00e69e2c523b8220ba5dcf4cb64fc8fbc522c70ca4155b82b5b6447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80cfa3c00e69e2c523b8220ba5dcf4cb64fc8fbc522c70ca4155b82b5b6447d->enter($__internal_a80cfa3c00e69e2c523b8220ba5dcf4cb64fc8fbc522c70ca4155b82b5b6447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a80cfa3c00e69e2c523b8220ba5dcf4cb64fc8fbc522c70ca4155b82b5b6447d->leave($__internal_a80cfa3c00e69e2c523b8220ba5dcf4cb64fc8fbc522c70ca4155b82b5b6447d_prof);

        
        $__internal_7e905f509761e0403f77b4b34ee02058606e78f156a14045b50525d4b931ff8f->leave($__internal_7e905f509761e0403f77b4b34ee02058606e78f156a14045b50525d4b931ff8f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2251be838af7e77b2c966283f911d7bffcdda7aaa3f5717ef020a6e83211bc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2251be838af7e77b2c966283f911d7bffcdda7aaa3f5717ef020a6e83211bc1b->enter($__internal_2251be838af7e77b2c966283f911d7bffcdda7aaa3f5717ef020a6e83211bc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a9ec4a1f20ba02a1605d4ef3f0e35c2c3ed2b3e9b5a3c46515f3590e891a7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9ec4a1f20ba02a1605d4ef3f0e35c2c3ed2b3e9b5a3c46515f3590e891a7cd->enter($__internal_3a9ec4a1f20ba02a1605d4ef3f0e35c2c3ed2b3e9b5a3c46515f3590e891a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a9ec4a1f20ba02a1605d4ef3f0e35c2c3ed2b3e9b5a3c46515f3590e891a7cd->leave($__internal_3a9ec4a1f20ba02a1605d4ef3f0e35c2c3ed2b3e9b5a3c46515f3590e891a7cd_prof);

        
        $__internal_2251be838af7e77b2c966283f911d7bffcdda7aaa3f5717ef020a6e83211bc1b->leave($__internal_2251be838af7e77b2c966283f911d7bffcdda7aaa3f5717ef020a6e83211bc1b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_340b7dbb0a77288e8658df0c1c7f8ed6b67e18f1cc1c4b738282ee8d02fd7c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340b7dbb0a77288e8658df0c1c7f8ed6b67e18f1cc1c4b738282ee8d02fd7c5f->enter($__internal_340b7dbb0a77288e8658df0c1c7f8ed6b67e18f1cc1c4b738282ee8d02fd7c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ecd005e08789d0cd5e541eb2153c5109cfc80cd976b3a1f9e66690035086f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecd005e08789d0cd5e541eb2153c5109cfc80cd976b3a1f9e66690035086f58->enter($__internal_6ecd005e08789d0cd5e541eb2153c5109cfc80cd976b3a1f9e66690035086f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6ecd005e08789d0cd5e541eb2153c5109cfc80cd976b3a1f9e66690035086f58->leave($__internal_6ecd005e08789d0cd5e541eb2153c5109cfc80cd976b3a1f9e66690035086f58_prof);

        
        $__internal_340b7dbb0a77288e8658df0c1c7f8ed6b67e18f1cc1c4b738282ee8d02fd7c5f->leave($__internal_340b7dbb0a77288e8658df0c1c7f8ed6b67e18f1cc1c4b738282ee8d02fd7c5f_prof);

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
