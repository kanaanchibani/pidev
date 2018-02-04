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
        $__internal_cfe9331e45cc9641f7188053ab26a07f71fa07e29f0e845bcdcff063d0e24d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe9331e45cc9641f7188053ab26a07f71fa07e29f0e845bcdcff063d0e24d3a->enter($__internal_cfe9331e45cc9641f7188053ab26a07f71fa07e29f0e845bcdcff063d0e24d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_440f7fd696ab611cf2e19c44dbf4e45354d285a0de28ed3beabfcf7b5eff64d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440f7fd696ab611cf2e19c44dbf4e45354d285a0de28ed3beabfcf7b5eff64d4->enter($__internal_440f7fd696ab611cf2e19c44dbf4e45354d285a0de28ed3beabfcf7b5eff64d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe9331e45cc9641f7188053ab26a07f71fa07e29f0e845bcdcff063d0e24d3a->leave($__internal_cfe9331e45cc9641f7188053ab26a07f71fa07e29f0e845bcdcff063d0e24d3a_prof);

        
        $__internal_440f7fd696ab611cf2e19c44dbf4e45354d285a0de28ed3beabfcf7b5eff64d4->leave($__internal_440f7fd696ab611cf2e19c44dbf4e45354d285a0de28ed3beabfcf7b5eff64d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fac389cafccd6312e1bff09b4f03eaf7957ae8237cbc7ffd339716f8e29ba493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac389cafccd6312e1bff09b4f03eaf7957ae8237cbc7ffd339716f8e29ba493->enter($__internal_fac389cafccd6312e1bff09b4f03eaf7957ae8237cbc7ffd339716f8e29ba493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ea82b03a8b56e574735b6b42c66aad3063e39af55fbdc5706f549b1723d3a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea82b03a8b56e574735b6b42c66aad3063e39af55fbdc5706f549b1723d3a3a->enter($__internal_2ea82b03a8b56e574735b6b42c66aad3063e39af55fbdc5706f549b1723d3a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2ea82b03a8b56e574735b6b42c66aad3063e39af55fbdc5706f549b1723d3a3a->leave($__internal_2ea82b03a8b56e574735b6b42c66aad3063e39af55fbdc5706f549b1723d3a3a_prof);

        
        $__internal_fac389cafccd6312e1bff09b4f03eaf7957ae8237cbc7ffd339716f8e29ba493->leave($__internal_fac389cafccd6312e1bff09b4f03eaf7957ae8237cbc7ffd339716f8e29ba493_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a7900faa347fecdfa060f63d93eb95b62ac576ea0b5c34f0f1762f7229de169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7900faa347fecdfa060f63d93eb95b62ac576ea0b5c34f0f1762f7229de169->enter($__internal_6a7900faa347fecdfa060f63d93eb95b62ac576ea0b5c34f0f1762f7229de169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4afbb930207dcd54f30a39870d9bac13406bd2d918e65f88a4e0dc4042fef382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afbb930207dcd54f30a39870d9bac13406bd2d918e65f88a4e0dc4042fef382->enter($__internal_4afbb930207dcd54f30a39870d9bac13406bd2d918e65f88a4e0dc4042fef382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4afbb930207dcd54f30a39870d9bac13406bd2d918e65f88a4e0dc4042fef382->leave($__internal_4afbb930207dcd54f30a39870d9bac13406bd2d918e65f88a4e0dc4042fef382_prof);

        
        $__internal_6a7900faa347fecdfa060f63d93eb95b62ac576ea0b5c34f0f1762f7229de169->leave($__internal_6a7900faa347fecdfa060f63d93eb95b62ac576ea0b5c34f0f1762f7229de169_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba1bcb02534c7e5e5bd3fe86b8912567717bbfb83379d25ff84d8f83dc9bd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba1bcb02534c7e5e5bd3fe86b8912567717bbfb83379d25ff84d8f83dc9bd55->enter($__internal_7ba1bcb02534c7e5e5bd3fe86b8912567717bbfb83379d25ff84d8f83dc9bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_734a8c869709c76fbb9bee48692f25f0decc428b58e600bfc3126ee9dbeb62af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734a8c869709c76fbb9bee48692f25f0decc428b58e600bfc3126ee9dbeb62af->enter($__internal_734a8c869709c76fbb9bee48692f25f0decc428b58e600bfc3126ee9dbeb62af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_734a8c869709c76fbb9bee48692f25f0decc428b58e600bfc3126ee9dbeb62af->leave($__internal_734a8c869709c76fbb9bee48692f25f0decc428b58e600bfc3126ee9dbeb62af_prof);

        
        $__internal_7ba1bcb02534c7e5e5bd3fe86b8912567717bbfb83379d25ff84d8f83dc9bd55->leave($__internal_7ba1bcb02534c7e5e5bd3fe86b8912567717bbfb83379d25ff84d8f83dc9bd55_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\pidev0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
