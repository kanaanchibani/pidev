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
        $__internal_6357e6a093f34e7bdd5460a56470ff867abde2329cd23859fe902e6a14b7bc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6357e6a093f34e7bdd5460a56470ff867abde2329cd23859fe902e6a14b7bc80->enter($__internal_6357e6a093f34e7bdd5460a56470ff867abde2329cd23859fe902e6a14b7bc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fec30f2ba39a56b2226521f2587626482a59c0f14430f5c995d159112fda2d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec30f2ba39a56b2226521f2587626482a59c0f14430f5c995d159112fda2d12->enter($__internal_fec30f2ba39a56b2226521f2587626482a59c0f14430f5c995d159112fda2d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6357e6a093f34e7bdd5460a56470ff867abde2329cd23859fe902e6a14b7bc80->leave($__internal_6357e6a093f34e7bdd5460a56470ff867abde2329cd23859fe902e6a14b7bc80_prof);

        
        $__internal_fec30f2ba39a56b2226521f2587626482a59c0f14430f5c995d159112fda2d12->leave($__internal_fec30f2ba39a56b2226521f2587626482a59c0f14430f5c995d159112fda2d12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d1327c9b7a01a3782b9d4106e830e6cfdb372466af029a0aa96308a1e96bbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1327c9b7a01a3782b9d4106e830e6cfdb372466af029a0aa96308a1e96bbaa->enter($__internal_5d1327c9b7a01a3782b9d4106e830e6cfdb372466af029a0aa96308a1e96bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b4840d87c04f98a9ecc6f5f6f14fa621e003908898670a38a0a67408b91c4208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4840d87c04f98a9ecc6f5f6f14fa621e003908898670a38a0a67408b91c4208->enter($__internal_b4840d87c04f98a9ecc6f5f6f14fa621e003908898670a38a0a67408b91c4208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b4840d87c04f98a9ecc6f5f6f14fa621e003908898670a38a0a67408b91c4208->leave($__internal_b4840d87c04f98a9ecc6f5f6f14fa621e003908898670a38a0a67408b91c4208_prof);

        
        $__internal_5d1327c9b7a01a3782b9d4106e830e6cfdb372466af029a0aa96308a1e96bbaa->leave($__internal_5d1327c9b7a01a3782b9d4106e830e6cfdb372466af029a0aa96308a1e96bbaa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b5d08789b4a4e3f3ea1de9a1d2c19e318f3c9b84a877c7f2dcd56ed19535eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5d08789b4a4e3f3ea1de9a1d2c19e318f3c9b84a877c7f2dcd56ed19535eb5->enter($__internal_0b5d08789b4a4e3f3ea1de9a1d2c19e318f3c9b84a877c7f2dcd56ed19535eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9816a912a4e92be14ba436e37bf1864f17bfa2503c7d7cbd9c56de2c584e2923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9816a912a4e92be14ba436e37bf1864f17bfa2503c7d7cbd9c56de2c584e2923->enter($__internal_9816a912a4e92be14ba436e37bf1864f17bfa2503c7d7cbd9c56de2c584e2923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9816a912a4e92be14ba436e37bf1864f17bfa2503c7d7cbd9c56de2c584e2923->leave($__internal_9816a912a4e92be14ba436e37bf1864f17bfa2503c7d7cbd9c56de2c584e2923_prof);

        
        $__internal_0b5d08789b4a4e3f3ea1de9a1d2c19e318f3c9b84a877c7f2dcd56ed19535eb5->leave($__internal_0b5d08789b4a4e3f3ea1de9a1d2c19e318f3c9b84a877c7f2dcd56ed19535eb5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e11c5ada97a4b3f731d3e2b51c834e6acc2cb329c853a85462b90e12864af05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e11c5ada97a4b3f731d3e2b51c834e6acc2cb329c853a85462b90e12864af05->enter($__internal_1e11c5ada97a4b3f731d3e2b51c834e6acc2cb329c853a85462b90e12864af05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb2cbfb955300e00486a87736b572aa2a781bee614b9067c2af1a71374c72bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2cbfb955300e00486a87736b572aa2a781bee614b9067c2af1a71374c72bbd->enter($__internal_fb2cbfb955300e00486a87736b572aa2a781bee614b9067c2af1a71374c72bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fb2cbfb955300e00486a87736b572aa2a781bee614b9067c2af1a71374c72bbd->leave($__internal_fb2cbfb955300e00486a87736b572aa2a781bee614b9067c2af1a71374c72bbd_prof);

        
        $__internal_1e11c5ada97a4b3f731d3e2b51c834e6acc2cb329c853a85462b90e12864af05->leave($__internal_1e11c5ada97a4b3f731d3e2b51c834e6acc2cb329c853a85462b90e12864af05_prof);

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
