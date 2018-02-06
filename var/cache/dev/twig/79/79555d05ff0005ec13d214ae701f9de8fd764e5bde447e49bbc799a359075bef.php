<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d4cf4b6d0e8560d8d827a1ca1c0387f7af680f3fc7a8202f8b3ba7b7978f861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4cf4b6d0e8560d8d827a1ca1c0387f7af680f3fc7a8202f8b3ba7b7978f861->enter($__internal_2d4cf4b6d0e8560d8d827a1ca1c0387f7af680f3fc7a8202f8b3ba7b7978f861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8b78487da2c2a9a6d36284bdb73e8e7bf4bbe14b7d306efe7ab6ba60544afa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b78487da2c2a9a6d36284bdb73e8e7bf4bbe14b7d306efe7ab6ba60544afa0c->enter($__internal_8b78487da2c2a9a6d36284bdb73e8e7bf4bbe14b7d306efe7ab6ba60544afa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d4cf4b6d0e8560d8d827a1ca1c0387f7af680f3fc7a8202f8b3ba7b7978f861->leave($__internal_2d4cf4b6d0e8560d8d827a1ca1c0387f7af680f3fc7a8202f8b3ba7b7978f861_prof);

        
        $__internal_8b78487da2c2a9a6d36284bdb73e8e7bf4bbe14b7d306efe7ab6ba60544afa0c->leave($__internal_8b78487da2c2a9a6d36284bdb73e8e7bf4bbe14b7d306efe7ab6ba60544afa0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d05a3c87901ad8ae886498ede32de301111dad363ecd5572ca34fce5b03da147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05a3c87901ad8ae886498ede32de301111dad363ecd5572ca34fce5b03da147->enter($__internal_d05a3c87901ad8ae886498ede32de301111dad363ecd5572ca34fce5b03da147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f386ccead93790f95f6b3c48f45839b009f3aa9c092ffe35f7f92b59c57756a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f386ccead93790f95f6b3c48f45839b009f3aa9c092ffe35f7f92b59c57756a4->enter($__internal_f386ccead93790f95f6b3c48f45839b009f3aa9c092ffe35f7f92b59c57756a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f386ccead93790f95f6b3c48f45839b009f3aa9c092ffe35f7f92b59c57756a4->leave($__internal_f386ccead93790f95f6b3c48f45839b009f3aa9c092ffe35f7f92b59c57756a4_prof);

        
        $__internal_d05a3c87901ad8ae886498ede32de301111dad363ecd5572ca34fce5b03da147->leave($__internal_d05a3c87901ad8ae886498ede32de301111dad363ecd5572ca34fce5b03da147_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0061b0b2b8fbe0162e71c1e1f269d9fe2ce6e7e8c688e6bc003e951af2e87b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0061b0b2b8fbe0162e71c1e1f269d9fe2ce6e7e8c688e6bc003e951af2e87b9c->enter($__internal_0061b0b2b8fbe0162e71c1e1f269d9fe2ce6e7e8c688e6bc003e951af2e87b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3299af6e52260053558aa6f777ab2abfc41fde687657beb383ae13e3ee2743bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3299af6e52260053558aa6f777ab2abfc41fde687657beb383ae13e3ee2743bd->enter($__internal_3299af6e52260053558aa6f777ab2abfc41fde687657beb383ae13e3ee2743bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3299af6e52260053558aa6f777ab2abfc41fde687657beb383ae13e3ee2743bd->leave($__internal_3299af6e52260053558aa6f777ab2abfc41fde687657beb383ae13e3ee2743bd_prof);

        
        $__internal_0061b0b2b8fbe0162e71c1e1f269d9fe2ce6e7e8c688e6bc003e951af2e87b9c->leave($__internal_0061b0b2b8fbe0162e71c1e1f269d9fe2ce6e7e8c688e6bc003e951af2e87b9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c57f29d284b810dd4cd9d59625121726a3459ca78fc82b7f8fce252a91f8a10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57f29d284b810dd4cd9d59625121726a3459ca78fc82b7f8fce252a91f8a10f->enter($__internal_c57f29d284b810dd4cd9d59625121726a3459ca78fc82b7f8fce252a91f8a10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25a90184e978c7b6ded91875dec7bc6d4ff0af408ff28e9341aafe9f8d4c3e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a90184e978c7b6ded91875dec7bc6d4ff0af408ff28e9341aafe9f8d4c3e80->enter($__internal_25a90184e978c7b6ded91875dec7bc6d4ff0af408ff28e9341aafe9f8d4c3e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_25a90184e978c7b6ded91875dec7bc6d4ff0af408ff28e9341aafe9f8d4c3e80->leave($__internal_25a90184e978c7b6ded91875dec7bc6d4ff0af408ff28e9341aafe9f8d4c3e80_prof);

        
        $__internal_c57f29d284b810dd4cd9d59625121726a3459ca78fc82b7f8fce252a91f8a10f->leave($__internal_c57f29d284b810dd4cd9d59625121726a3459ca78fc82b7f8fce252a91f8a10f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
