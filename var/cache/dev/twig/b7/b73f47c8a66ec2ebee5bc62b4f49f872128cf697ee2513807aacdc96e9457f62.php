<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_93071bd5b19082a28a6f9750ad7f9a91e978ac8bb5bea7efe4fe84bdc1cdaeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93071bd5b19082a28a6f9750ad7f9a91e978ac8bb5bea7efe4fe84bdc1cdaeed->enter($__internal_93071bd5b19082a28a6f9750ad7f9a91e978ac8bb5bea7efe4fe84bdc1cdaeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_29a11e9777111a7d7d9dfe64baeb2e70d15ade5b0892d9d3d6bfc993d03a2f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a11e9777111a7d7d9dfe64baeb2e70d15ade5b0892d9d3d6bfc993d03a2f67->enter($__internal_29a11e9777111a7d7d9dfe64baeb2e70d15ade5b0892d9d3d6bfc993d03a2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93071bd5b19082a28a6f9750ad7f9a91e978ac8bb5bea7efe4fe84bdc1cdaeed->leave($__internal_93071bd5b19082a28a6f9750ad7f9a91e978ac8bb5bea7efe4fe84bdc1cdaeed_prof);

        
        $__internal_29a11e9777111a7d7d9dfe64baeb2e70d15ade5b0892d9d3d6bfc993d03a2f67->leave($__internal_29a11e9777111a7d7d9dfe64baeb2e70d15ade5b0892d9d3d6bfc993d03a2f67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de62253e350f6c532442e9dc38defbfa438dd0372159586c5a7c5d5a746b5906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de62253e350f6c532442e9dc38defbfa438dd0372159586c5a7c5d5a746b5906->enter($__internal_de62253e350f6c532442e9dc38defbfa438dd0372159586c5a7c5d5a746b5906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b68bbefdcbf33227a45eec07067763bda7340a5e46edcb3603dd8bc59ec50feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68bbefdcbf33227a45eec07067763bda7340a5e46edcb3603dd8bc59ec50feb->enter($__internal_b68bbefdcbf33227a45eec07067763bda7340a5e46edcb3603dd8bc59ec50feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b68bbefdcbf33227a45eec07067763bda7340a5e46edcb3603dd8bc59ec50feb->leave($__internal_b68bbefdcbf33227a45eec07067763bda7340a5e46edcb3603dd8bc59ec50feb_prof);

        
        $__internal_de62253e350f6c532442e9dc38defbfa438dd0372159586c5a7c5d5a746b5906->leave($__internal_de62253e350f6c532442e9dc38defbfa438dd0372159586c5a7c5d5a746b5906_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0963477f19788c7a7db2a2ffa2b372887fbc83b1f3f52deabcfc66721c48111e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0963477f19788c7a7db2a2ffa2b372887fbc83b1f3f52deabcfc66721c48111e->enter($__internal_0963477f19788c7a7db2a2ffa2b372887fbc83b1f3f52deabcfc66721c48111e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_466609253bd65bf84444a388b95b831461a422214c91376c9d9c922929bce085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466609253bd65bf84444a388b95b831461a422214c91376c9d9c922929bce085->enter($__internal_466609253bd65bf84444a388b95b831461a422214c91376c9d9c922929bce085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_466609253bd65bf84444a388b95b831461a422214c91376c9d9c922929bce085->leave($__internal_466609253bd65bf84444a388b95b831461a422214c91376c9d9c922929bce085_prof);

        
        $__internal_0963477f19788c7a7db2a2ffa2b372887fbc83b1f3f52deabcfc66721c48111e->leave($__internal_0963477f19788c7a7db2a2ffa2b372887fbc83b1f3f52deabcfc66721c48111e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cc0cde9c38474b95558ce4862c61340d0fbd826ac33e3575c4deb1d6973be67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc0cde9c38474b95558ce4862c61340d0fbd826ac33e3575c4deb1d6973be67->enter($__internal_3cc0cde9c38474b95558ce4862c61340d0fbd826ac33e3575c4deb1d6973be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1788c29aa14ebbd73884ec34b62980db020e3b219386c2716ecc19635f28e85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1788c29aa14ebbd73884ec34b62980db020e3b219386c2716ecc19635f28e85e->enter($__internal_1788c29aa14ebbd73884ec34b62980db020e3b219386c2716ecc19635f28e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1788c29aa14ebbd73884ec34b62980db020e3b219386c2716ecc19635f28e85e->leave($__internal_1788c29aa14ebbd73884ec34b62980db020e3b219386c2716ecc19635f28e85e_prof);

        
        $__internal_3cc0cde9c38474b95558ce4862c61340d0fbd826ac33e3575c4deb1d6973be67->leave($__internal_3cc0cde9c38474b95558ce4862c61340d0fbd826ac33e3575c4deb1d6973be67_prof);

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
