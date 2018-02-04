<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_efa87c9cef0ae78048743e75abbfbece1c9034a2007ec233b9872ad3c454662e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9891fde3998ae5c99d3344d7fe0358a2068e74b81d3568e33f354cdff7bdbd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9891fde3998ae5c99d3344d7fe0358a2068e74b81d3568e33f354cdff7bdbd1f->enter($__internal_9891fde3998ae5c99d3344d7fe0358a2068e74b81d3568e33f354cdff7bdbd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2ed72e68b7b049016c2c3e5cd99b22dfc55072d82897bcc665a5160b28135cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed72e68b7b049016c2c3e5cd99b22dfc55072d82897bcc665a5160b28135cc4->enter($__internal_2ed72e68b7b049016c2c3e5cd99b22dfc55072d82897bcc665a5160b28135cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9891fde3998ae5c99d3344d7fe0358a2068e74b81d3568e33f354cdff7bdbd1f->leave($__internal_9891fde3998ae5c99d3344d7fe0358a2068e74b81d3568e33f354cdff7bdbd1f_prof);

        
        $__internal_2ed72e68b7b049016c2c3e5cd99b22dfc55072d82897bcc665a5160b28135cc4->leave($__internal_2ed72e68b7b049016c2c3e5cd99b22dfc55072d82897bcc665a5160b28135cc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a90866db7c266177f834440d966add136bbe659b409dc82394150e7ab6c1441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a90866db7c266177f834440d966add136bbe659b409dc82394150e7ab6c1441->enter($__internal_5a90866db7c266177f834440d966add136bbe659b409dc82394150e7ab6c1441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_efcb696e90b7c6865883d130722cc1f1477ded3e0d3f092178bcf24ee0a4d998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcb696e90b7c6865883d130722cc1f1477ded3e0d3f092178bcf24ee0a4d998->enter($__internal_efcb696e90b7c6865883d130722cc1f1477ded3e0d3f092178bcf24ee0a4d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efcb696e90b7c6865883d130722cc1f1477ded3e0d3f092178bcf24ee0a4d998->leave($__internal_efcb696e90b7c6865883d130722cc1f1477ded3e0d3f092178bcf24ee0a4d998_prof);

        
        $__internal_5a90866db7c266177f834440d966add136bbe659b409dc82394150e7ab6c1441->leave($__internal_5a90866db7c266177f834440d966add136bbe659b409dc82394150e7ab6c1441_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8783e2a4a4a6391b9e5d41c1d07e540b44d31a602a9d8509411ddb471096c7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8783e2a4a4a6391b9e5d41c1d07e540b44d31a602a9d8509411ddb471096c7e8->enter($__internal_8783e2a4a4a6391b9e5d41c1d07e540b44d31a602a9d8509411ddb471096c7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02c9e496153537f5dbe93d2e6286f1b207ad2a8e38cd3cf3e1aa1c49ba9c91bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c9e496153537f5dbe93d2e6286f1b207ad2a8e38cd3cf3e1aa1c49ba9c91bf->enter($__internal_02c9e496153537f5dbe93d2e6286f1b207ad2a8e38cd3cf3e1aa1c49ba9c91bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02c9e496153537f5dbe93d2e6286f1b207ad2a8e38cd3cf3e1aa1c49ba9c91bf->leave($__internal_02c9e496153537f5dbe93d2e6286f1b207ad2a8e38cd3cf3e1aa1c49ba9c91bf_prof);

        
        $__internal_8783e2a4a4a6391b9e5d41c1d07e540b44d31a602a9d8509411ddb471096c7e8->leave($__internal_8783e2a4a4a6391b9e5d41c1d07e540b44d31a602a9d8509411ddb471096c7e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_837f5a7288fdfa9c4f72dec533ba96203f483c23bf690c889a3ba1b1c2f2f935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837f5a7288fdfa9c4f72dec533ba96203f483c23bf690c889a3ba1b1c2f2f935->enter($__internal_837f5a7288fdfa9c4f72dec533ba96203f483c23bf690c889a3ba1b1c2f2f935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc3e0e6517544029ba41dc5f92f348f4a6eb15cba8e88d73a30938c1403b8739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3e0e6517544029ba41dc5f92f348f4a6eb15cba8e88d73a30938c1403b8739->enter($__internal_dc3e0e6517544029ba41dc5f92f348f4a6eb15cba8e88d73a30938c1403b8739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc3e0e6517544029ba41dc5f92f348f4a6eb15cba8e88d73a30938c1403b8739->leave($__internal_dc3e0e6517544029ba41dc5f92f348f4a6eb15cba8e88d73a30938c1403b8739_prof);

        
        $__internal_837f5a7288fdfa9c4f72dec533ba96203f483c23bf690c889a3ba1b1c2f2f935->leave($__internal_837f5a7288fdfa9c4f72dec533ba96203f483c23bf690c889a3ba1b1c2f2f935_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidev0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
