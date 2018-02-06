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
        $__internal_7600212d37e06b95afd1d9c86c376328704e5e1281094145d1d8e06bc9c8c869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7600212d37e06b95afd1d9c86c376328704e5e1281094145d1d8e06bc9c8c869->enter($__internal_7600212d37e06b95afd1d9c86c376328704e5e1281094145d1d8e06bc9c8c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_23fd8807f7f0e04936738b4b290030607d798a365a374e203ba5a1bf3083aa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fd8807f7f0e04936738b4b290030607d798a365a374e203ba5a1bf3083aa2f->enter($__internal_23fd8807f7f0e04936738b4b290030607d798a365a374e203ba5a1bf3083aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7600212d37e06b95afd1d9c86c376328704e5e1281094145d1d8e06bc9c8c869->leave($__internal_7600212d37e06b95afd1d9c86c376328704e5e1281094145d1d8e06bc9c8c869_prof);

        
        $__internal_23fd8807f7f0e04936738b4b290030607d798a365a374e203ba5a1bf3083aa2f->leave($__internal_23fd8807f7f0e04936738b4b290030607d798a365a374e203ba5a1bf3083aa2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ad1b1e13ee7842205c61690cb0c54ba51f4e4628e71058dbe58550cface405f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad1b1e13ee7842205c61690cb0c54ba51f4e4628e71058dbe58550cface405f->enter($__internal_9ad1b1e13ee7842205c61690cb0c54ba51f4e4628e71058dbe58550cface405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f74ca884957540ed87324a173a51569f2c53b3d6f403f7ac496a1216481a2984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74ca884957540ed87324a173a51569f2c53b3d6f403f7ac496a1216481a2984->enter($__internal_f74ca884957540ed87324a173a51569f2c53b3d6f403f7ac496a1216481a2984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f74ca884957540ed87324a173a51569f2c53b3d6f403f7ac496a1216481a2984->leave($__internal_f74ca884957540ed87324a173a51569f2c53b3d6f403f7ac496a1216481a2984_prof);

        
        $__internal_9ad1b1e13ee7842205c61690cb0c54ba51f4e4628e71058dbe58550cface405f->leave($__internal_9ad1b1e13ee7842205c61690cb0c54ba51f4e4628e71058dbe58550cface405f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_547e2c0b131bfd941dc1a35023eb4830eb54cc8150e2a17148da6bf2a689b849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547e2c0b131bfd941dc1a35023eb4830eb54cc8150e2a17148da6bf2a689b849->enter($__internal_547e2c0b131bfd941dc1a35023eb4830eb54cc8150e2a17148da6bf2a689b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c07e7e53ee1673f28c154f509e534841692527d39f05384b950ff8ae96063b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c07e7e53ee1673f28c154f509e534841692527d39f05384b950ff8ae96063b7->enter($__internal_0c07e7e53ee1673f28c154f509e534841692527d39f05384b950ff8ae96063b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0c07e7e53ee1673f28c154f509e534841692527d39f05384b950ff8ae96063b7->leave($__internal_0c07e7e53ee1673f28c154f509e534841692527d39f05384b950ff8ae96063b7_prof);

        
        $__internal_547e2c0b131bfd941dc1a35023eb4830eb54cc8150e2a17148da6bf2a689b849->leave($__internal_547e2c0b131bfd941dc1a35023eb4830eb54cc8150e2a17148da6bf2a689b849_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f415f2b7aaaecaf8702ef6f20651ba4eac484cfa2783a5a30bd2fb2db910fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f415f2b7aaaecaf8702ef6f20651ba4eac484cfa2783a5a30bd2fb2db910fab->enter($__internal_0f415f2b7aaaecaf8702ef6f20651ba4eac484cfa2783a5a30bd2fb2db910fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fa957f7f141d3e84f2894dafaf6efda7f6c020988838b95417bc981349ad47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa957f7f141d3e84f2894dafaf6efda7f6c020988838b95417bc981349ad47d->enter($__internal_7fa957f7f141d3e84f2894dafaf6efda7f6c020988838b95417bc981349ad47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7fa957f7f141d3e84f2894dafaf6efda7f6c020988838b95417bc981349ad47d->leave($__internal_7fa957f7f141d3e84f2894dafaf6efda7f6c020988838b95417bc981349ad47d_prof);

        
        $__internal_0f415f2b7aaaecaf8702ef6f20651ba4eac484cfa2783a5a30bd2fb2db910fab->leave($__internal_0f415f2b7aaaecaf8702ef6f20651ba4eac484cfa2783a5a30bd2fb2db910fab_prof);

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
