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
        $__internal_53b05436bcb2b99b33b9511f5feb7621ce8e3a12a6729dcd4dd0e1c228cdba16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b05436bcb2b99b33b9511f5feb7621ce8e3a12a6729dcd4dd0e1c228cdba16->enter($__internal_53b05436bcb2b99b33b9511f5feb7621ce8e3a12a6729dcd4dd0e1c228cdba16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ce9d4f20efccf9cf8e0e8e48ef3b1f0abcfce9035ea04bd1c87be9faea2c24fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9d4f20efccf9cf8e0e8e48ef3b1f0abcfce9035ea04bd1c87be9faea2c24fc->enter($__internal_ce9d4f20efccf9cf8e0e8e48ef3b1f0abcfce9035ea04bd1c87be9faea2c24fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b05436bcb2b99b33b9511f5feb7621ce8e3a12a6729dcd4dd0e1c228cdba16->leave($__internal_53b05436bcb2b99b33b9511f5feb7621ce8e3a12a6729dcd4dd0e1c228cdba16_prof);

        
        $__internal_ce9d4f20efccf9cf8e0e8e48ef3b1f0abcfce9035ea04bd1c87be9faea2c24fc->leave($__internal_ce9d4f20efccf9cf8e0e8e48ef3b1f0abcfce9035ea04bd1c87be9faea2c24fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b9fc16b244b929de2e84dcaaa75119f4e88e7d70527e29e0313ea18690b343f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9fc16b244b929de2e84dcaaa75119f4e88e7d70527e29e0313ea18690b343f->enter($__internal_2b9fc16b244b929de2e84dcaaa75119f4e88e7d70527e29e0313ea18690b343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06d78e0f6364ef292b179332fca8263deee4bc8ccb674bca848d1d6487d88690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d78e0f6364ef292b179332fca8263deee4bc8ccb674bca848d1d6487d88690->enter($__internal_06d78e0f6364ef292b179332fca8263deee4bc8ccb674bca848d1d6487d88690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_06d78e0f6364ef292b179332fca8263deee4bc8ccb674bca848d1d6487d88690->leave($__internal_06d78e0f6364ef292b179332fca8263deee4bc8ccb674bca848d1d6487d88690_prof);

        
        $__internal_2b9fc16b244b929de2e84dcaaa75119f4e88e7d70527e29e0313ea18690b343f->leave($__internal_2b9fc16b244b929de2e84dcaaa75119f4e88e7d70527e29e0313ea18690b343f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcdda559eeab98b6c3cd5c695099f408b2d7ad01f91f7ed3a5b0a6574c9b762a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdda559eeab98b6c3cd5c695099f408b2d7ad01f91f7ed3a5b0a6574c9b762a->enter($__internal_dcdda559eeab98b6c3cd5c695099f408b2d7ad01f91f7ed3a5b0a6574c9b762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6703079e81b2ffe5b8b73a575fe4defca26299a2a6ba46b0c35a9c53c0b0134d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6703079e81b2ffe5b8b73a575fe4defca26299a2a6ba46b0c35a9c53c0b0134d->enter($__internal_6703079e81b2ffe5b8b73a575fe4defca26299a2a6ba46b0c35a9c53c0b0134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6703079e81b2ffe5b8b73a575fe4defca26299a2a6ba46b0c35a9c53c0b0134d->leave($__internal_6703079e81b2ffe5b8b73a575fe4defca26299a2a6ba46b0c35a9c53c0b0134d_prof);

        
        $__internal_dcdda559eeab98b6c3cd5c695099f408b2d7ad01f91f7ed3a5b0a6574c9b762a->leave($__internal_dcdda559eeab98b6c3cd5c695099f408b2d7ad01f91f7ed3a5b0a6574c9b762a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_670e7d959390483a9c41591ffae11c82d44201e9c85f0c3e46c6ae3e66b39d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670e7d959390483a9c41591ffae11c82d44201e9c85f0c3e46c6ae3e66b39d2b->enter($__internal_670e7d959390483a9c41591ffae11c82d44201e9c85f0c3e46c6ae3e66b39d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5efc233ded0a117beb4d6b10ae2d4b920cd50a29a83b879830786cb504c80298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efc233ded0a117beb4d6b10ae2d4b920cd50a29a83b879830786cb504c80298->enter($__internal_5efc233ded0a117beb4d6b10ae2d4b920cd50a29a83b879830786cb504c80298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5efc233ded0a117beb4d6b10ae2d4b920cd50a29a83b879830786cb504c80298->leave($__internal_5efc233ded0a117beb4d6b10ae2d4b920cd50a29a83b879830786cb504c80298_prof);

        
        $__internal_670e7d959390483a9c41591ffae11c82d44201e9c85f0c3e46c6ae3e66b39d2b->leave($__internal_670e7d959390483a9c41591ffae11c82d44201e9c85f0c3e46c6ae3e66b39d2b_prof);

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
