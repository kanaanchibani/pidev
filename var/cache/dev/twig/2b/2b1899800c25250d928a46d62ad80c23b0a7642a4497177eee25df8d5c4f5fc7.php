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
        $__internal_422ed0ba111f67fe40a47325f6e623ca3a7c8206ee512d22f1c362cbb97339eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422ed0ba111f67fe40a47325f6e623ca3a7c8206ee512d22f1c362cbb97339eb->enter($__internal_422ed0ba111f67fe40a47325f6e623ca3a7c8206ee512d22f1c362cbb97339eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_26ffe691e36a2f0767b99d099faa2c286d6d071710a6b2d321c3ce443316ede4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ffe691e36a2f0767b99d099faa2c286d6d071710a6b2d321c3ce443316ede4->enter($__internal_26ffe691e36a2f0767b99d099faa2c286d6d071710a6b2d321c3ce443316ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422ed0ba111f67fe40a47325f6e623ca3a7c8206ee512d22f1c362cbb97339eb->leave($__internal_422ed0ba111f67fe40a47325f6e623ca3a7c8206ee512d22f1c362cbb97339eb_prof);

        
        $__internal_26ffe691e36a2f0767b99d099faa2c286d6d071710a6b2d321c3ce443316ede4->leave($__internal_26ffe691e36a2f0767b99d099faa2c286d6d071710a6b2d321c3ce443316ede4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcd03bcb52ff09876eacc837bc64863eb8424da2d16ddf7455f1d625cdca7c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd03bcb52ff09876eacc837bc64863eb8424da2d16ddf7455f1d625cdca7c84->enter($__internal_fcd03bcb52ff09876eacc837bc64863eb8424da2d16ddf7455f1d625cdca7c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_692dd831403c435ce35a3f600f6866b86c87727252f5e8692908042304ae3be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692dd831403c435ce35a3f600f6866b86c87727252f5e8692908042304ae3be1->enter($__internal_692dd831403c435ce35a3f600f6866b86c87727252f5e8692908042304ae3be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_692dd831403c435ce35a3f600f6866b86c87727252f5e8692908042304ae3be1->leave($__internal_692dd831403c435ce35a3f600f6866b86c87727252f5e8692908042304ae3be1_prof);

        
        $__internal_fcd03bcb52ff09876eacc837bc64863eb8424da2d16ddf7455f1d625cdca7c84->leave($__internal_fcd03bcb52ff09876eacc837bc64863eb8424da2d16ddf7455f1d625cdca7c84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e065088c5ace31ce3ecca0c216b04c994912c66fa541c6f427c08569cfeac479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e065088c5ace31ce3ecca0c216b04c994912c66fa541c6f427c08569cfeac479->enter($__internal_e065088c5ace31ce3ecca0c216b04c994912c66fa541c6f427c08569cfeac479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89c33073fcc924828925dd24875e0f4123f0a9316f7a66cce76565bf9bc8c505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c33073fcc924828925dd24875e0f4123f0a9316f7a66cce76565bf9bc8c505->enter($__internal_89c33073fcc924828925dd24875e0f4123f0a9316f7a66cce76565bf9bc8c505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89c33073fcc924828925dd24875e0f4123f0a9316f7a66cce76565bf9bc8c505->leave($__internal_89c33073fcc924828925dd24875e0f4123f0a9316f7a66cce76565bf9bc8c505_prof);

        
        $__internal_e065088c5ace31ce3ecca0c216b04c994912c66fa541c6f427c08569cfeac479->leave($__internal_e065088c5ace31ce3ecca0c216b04c994912c66fa541c6f427c08569cfeac479_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd0e38b233be4a7f699d850564f8481b79cec68ca55d69a5056fd75694efc26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0e38b233be4a7f699d850564f8481b79cec68ca55d69a5056fd75694efc26d->enter($__internal_cd0e38b233be4a7f699d850564f8481b79cec68ca55d69a5056fd75694efc26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a214cd53b91857b7f5b581166dbb4a03ed12b31eec06f37f3affcd1d42e54367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a214cd53b91857b7f5b581166dbb4a03ed12b31eec06f37f3affcd1d42e54367->enter($__internal_a214cd53b91857b7f5b581166dbb4a03ed12b31eec06f37f3affcd1d42e54367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a214cd53b91857b7f5b581166dbb4a03ed12b31eec06f37f3affcd1d42e54367->leave($__internal_a214cd53b91857b7f5b581166dbb4a03ed12b31eec06f37f3affcd1d42e54367_prof);

        
        $__internal_cd0e38b233be4a7f699d850564f8481b79cec68ca55d69a5056fd75694efc26d->leave($__internal_cd0e38b233be4a7f699d850564f8481b79cec68ca55d69a5056fd75694efc26d_prof);

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
