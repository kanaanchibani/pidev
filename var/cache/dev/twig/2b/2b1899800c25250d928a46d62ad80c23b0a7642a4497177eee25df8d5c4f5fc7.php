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
        $__internal_5fc473176a4cacc92090ea5b9ab77108f416d5f9b2cc08cdbeccbfc75eb0f07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc473176a4cacc92090ea5b9ab77108f416d5f9b2cc08cdbeccbfc75eb0f07b->enter($__internal_5fc473176a4cacc92090ea5b9ab77108f416d5f9b2cc08cdbeccbfc75eb0f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e7d9edba0738ebc17de4f5a03a5dddf450840b0263588d385982797ceafd3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7d9edba0738ebc17de4f5a03a5dddf450840b0263588d385982797ceafd3f4->enter($__internal_5e7d9edba0738ebc17de4f5a03a5dddf450840b0263588d385982797ceafd3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc473176a4cacc92090ea5b9ab77108f416d5f9b2cc08cdbeccbfc75eb0f07b->leave($__internal_5fc473176a4cacc92090ea5b9ab77108f416d5f9b2cc08cdbeccbfc75eb0f07b_prof);

        
        $__internal_5e7d9edba0738ebc17de4f5a03a5dddf450840b0263588d385982797ceafd3f4->leave($__internal_5e7d9edba0738ebc17de4f5a03a5dddf450840b0263588d385982797ceafd3f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3416c59dbb1dc350bc1fb0542d77ab714225142473e2610f1d7dd7f04d672acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3416c59dbb1dc350bc1fb0542d77ab714225142473e2610f1d7dd7f04d672acc->enter($__internal_3416c59dbb1dc350bc1fb0542d77ab714225142473e2610f1d7dd7f04d672acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a08fb86db41392f7bb26bfb677e590a96e03ccd79230f2a14e156f4d8b989ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08fb86db41392f7bb26bfb677e590a96e03ccd79230f2a14e156f4d8b989ecb->enter($__internal_a08fb86db41392f7bb26bfb677e590a96e03ccd79230f2a14e156f4d8b989ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a08fb86db41392f7bb26bfb677e590a96e03ccd79230f2a14e156f4d8b989ecb->leave($__internal_a08fb86db41392f7bb26bfb677e590a96e03ccd79230f2a14e156f4d8b989ecb_prof);

        
        $__internal_3416c59dbb1dc350bc1fb0542d77ab714225142473e2610f1d7dd7f04d672acc->leave($__internal_3416c59dbb1dc350bc1fb0542d77ab714225142473e2610f1d7dd7f04d672acc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30776687de9d4dddb923f1e60e7442dc29fae7581777134ac408b8da46268298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30776687de9d4dddb923f1e60e7442dc29fae7581777134ac408b8da46268298->enter($__internal_30776687de9d4dddb923f1e60e7442dc29fae7581777134ac408b8da46268298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1a58f1cf6e7be1f1a7e3e895e6f9d97c70332bf89c5d2524e9e88a0e1a50a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a58f1cf6e7be1f1a7e3e895e6f9d97c70332bf89c5d2524e9e88a0e1a50a4d->enter($__internal_b1a58f1cf6e7be1f1a7e3e895e6f9d97c70332bf89c5d2524e9e88a0e1a50a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1a58f1cf6e7be1f1a7e3e895e6f9d97c70332bf89c5d2524e9e88a0e1a50a4d->leave($__internal_b1a58f1cf6e7be1f1a7e3e895e6f9d97c70332bf89c5d2524e9e88a0e1a50a4d_prof);

        
        $__internal_30776687de9d4dddb923f1e60e7442dc29fae7581777134ac408b8da46268298->leave($__internal_30776687de9d4dddb923f1e60e7442dc29fae7581777134ac408b8da46268298_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_785fa239713a3e1699ed02675f6cd67df933771ba03346a5b1bab5f0c59d7aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785fa239713a3e1699ed02675f6cd67df933771ba03346a5b1bab5f0c59d7aac->enter($__internal_785fa239713a3e1699ed02675f6cd67df933771ba03346a5b1bab5f0c59d7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_745ad66d4048ef3da4bb4e9d24f7596b0abef159ff23cd80b1a43dc7dc0dea56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745ad66d4048ef3da4bb4e9d24f7596b0abef159ff23cd80b1a43dc7dc0dea56->enter($__internal_745ad66d4048ef3da4bb4e9d24f7596b0abef159ff23cd80b1a43dc7dc0dea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_745ad66d4048ef3da4bb4e9d24f7596b0abef159ff23cd80b1a43dc7dc0dea56->leave($__internal_745ad66d4048ef3da4bb4e9d24f7596b0abef159ff23cd80b1a43dc7dc0dea56_prof);

        
        $__internal_785fa239713a3e1699ed02675f6cd67df933771ba03346a5b1bab5f0c59d7aac->leave($__internal_785fa239713a3e1699ed02675f6cd67df933771ba03346a5b1bab5f0c59d7aac_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
