<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d8e8b0caecbf6c69f4e84b3f77c7c4b3fc2ee3c868fe60c6e9a7296961dee70d extends Twig_Template
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
        $__internal_1f5f8453132b6c195cb7e98d3695db882cd165e020bfa2dda4fa05cd4e931232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5f8453132b6c195cb7e98d3695db882cd165e020bfa2dda4fa05cd4e931232->enter($__internal_1f5f8453132b6c195cb7e98d3695db882cd165e020bfa2dda4fa05cd4e931232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_904b89f72e45a75bb0eb64b52c3f5f47550ffcb91e9ac3cf007a8e5f7d02eadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904b89f72e45a75bb0eb64b52c3f5f47550ffcb91e9ac3cf007a8e5f7d02eadd->enter($__internal_904b89f72e45a75bb0eb64b52c3f5f47550ffcb91e9ac3cf007a8e5f7d02eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5f8453132b6c195cb7e98d3695db882cd165e020bfa2dda4fa05cd4e931232->leave($__internal_1f5f8453132b6c195cb7e98d3695db882cd165e020bfa2dda4fa05cd4e931232_prof);

        
        $__internal_904b89f72e45a75bb0eb64b52c3f5f47550ffcb91e9ac3cf007a8e5f7d02eadd->leave($__internal_904b89f72e45a75bb0eb64b52c3f5f47550ffcb91e9ac3cf007a8e5f7d02eadd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2573f48e97f3bff45106864a0fac240df4dd6a96ffda127b59051da91b49c72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2573f48e97f3bff45106864a0fac240df4dd6a96ffda127b59051da91b49c72a->enter($__internal_2573f48e97f3bff45106864a0fac240df4dd6a96ffda127b59051da91b49c72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a415eb286f88dde96a5bfd857d99c19e5e473e6a84a38dc917b34924294da72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a415eb286f88dde96a5bfd857d99c19e5e473e6a84a38dc917b34924294da72b->enter($__internal_a415eb286f88dde96a5bfd857d99c19e5e473e6a84a38dc917b34924294da72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a415eb286f88dde96a5bfd857d99c19e5e473e6a84a38dc917b34924294da72b->leave($__internal_a415eb286f88dde96a5bfd857d99c19e5e473e6a84a38dc917b34924294da72b_prof);

        
        $__internal_2573f48e97f3bff45106864a0fac240df4dd6a96ffda127b59051da91b49c72a->leave($__internal_2573f48e97f3bff45106864a0fac240df4dd6a96ffda127b59051da91b49c72a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6b08af4f69515c42886c946c58b85b619dce083dce95404aa7f74f182a565ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b08af4f69515c42886c946c58b85b619dce083dce95404aa7f74f182a565ac->enter($__internal_e6b08af4f69515c42886c946c58b85b619dce083dce95404aa7f74f182a565ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ea9d15fc24262fd3af23cf034ba9c3e09dc410a63690500841cb83cc7ce9aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea9d15fc24262fd3af23cf034ba9c3e09dc410a63690500841cb83cc7ce9aa6->enter($__internal_1ea9d15fc24262fd3af23cf034ba9c3e09dc410a63690500841cb83cc7ce9aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ea9d15fc24262fd3af23cf034ba9c3e09dc410a63690500841cb83cc7ce9aa6->leave($__internal_1ea9d15fc24262fd3af23cf034ba9c3e09dc410a63690500841cb83cc7ce9aa6_prof);

        
        $__internal_e6b08af4f69515c42886c946c58b85b619dce083dce95404aa7f74f182a565ac->leave($__internal_e6b08af4f69515c42886c946c58b85b619dce083dce95404aa7f74f182a565ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7df1396f093803df24af81b04f64bb86f56dfe3a5abd898b6a234923aae0d2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df1396f093803df24af81b04f64bb86f56dfe3a5abd898b6a234923aae0d2fd->enter($__internal_7df1396f093803df24af81b04f64bb86f56dfe3a5abd898b6a234923aae0d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c14b2893f7f17ab6a57a698bf2343df413c5e21f27a905ec3046fb3134b6f6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14b2893f7f17ab6a57a698bf2343df413c5e21f27a905ec3046fb3134b6f6a0->enter($__internal_c14b2893f7f17ab6a57a698bf2343df413c5e21f27a905ec3046fb3134b6f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c14b2893f7f17ab6a57a698bf2343df413c5e21f27a905ec3046fb3134b6f6a0->leave($__internal_c14b2893f7f17ab6a57a698bf2343df413c5e21f27a905ec3046fb3134b6f6a0_prof);

        
        $__internal_7df1396f093803df24af81b04f64bb86f56dfe3a5abd898b6a234923aae0d2fd->leave($__internal_7df1396f093803df24af81b04f64bb86f56dfe3a5abd898b6a234923aae0d2fd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidev0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
