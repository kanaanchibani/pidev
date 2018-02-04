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
        $__internal_950460e025a38e6ce18ef54258a0d719d5ee182dbde263d0b9ee2a66641b12b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950460e025a38e6ce18ef54258a0d719d5ee182dbde263d0b9ee2a66641b12b5->enter($__internal_950460e025a38e6ce18ef54258a0d719d5ee182dbde263d0b9ee2a66641b12b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_877669f961b5bd555694346d4be55d0927b3094db0868557cb6b2f7d187b3497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877669f961b5bd555694346d4be55d0927b3094db0868557cb6b2f7d187b3497->enter($__internal_877669f961b5bd555694346d4be55d0927b3094db0868557cb6b2f7d187b3497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950460e025a38e6ce18ef54258a0d719d5ee182dbde263d0b9ee2a66641b12b5->leave($__internal_950460e025a38e6ce18ef54258a0d719d5ee182dbde263d0b9ee2a66641b12b5_prof);

        
        $__internal_877669f961b5bd555694346d4be55d0927b3094db0868557cb6b2f7d187b3497->leave($__internal_877669f961b5bd555694346d4be55d0927b3094db0868557cb6b2f7d187b3497_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15c478a25fed878b38b38982511351f02f24151fe8bab991baf03d060d776a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c478a25fed878b38b38982511351f02f24151fe8bab991baf03d060d776a97->enter($__internal_15c478a25fed878b38b38982511351f02f24151fe8bab991baf03d060d776a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3045e3d1a11027df57edfe09efe2a59c323757c0ccc0092285e6e0dab840fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3045e3d1a11027df57edfe09efe2a59c323757c0ccc0092285e6e0dab840fbd->enter($__internal_f3045e3d1a11027df57edfe09efe2a59c323757c0ccc0092285e6e0dab840fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f3045e3d1a11027df57edfe09efe2a59c323757c0ccc0092285e6e0dab840fbd->leave($__internal_f3045e3d1a11027df57edfe09efe2a59c323757c0ccc0092285e6e0dab840fbd_prof);

        
        $__internal_15c478a25fed878b38b38982511351f02f24151fe8bab991baf03d060d776a97->leave($__internal_15c478a25fed878b38b38982511351f02f24151fe8bab991baf03d060d776a97_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9de912f38cc7832b72c5d4ae9536d8142a9ef5b6f5659dd904889a13546b90ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de912f38cc7832b72c5d4ae9536d8142a9ef5b6f5659dd904889a13546b90ee->enter($__internal_9de912f38cc7832b72c5d4ae9536d8142a9ef5b6f5659dd904889a13546b90ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2abd56d5f66c8f9798eea6648786d5364e34f3682c39fd8dab17b2b53755beab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abd56d5f66c8f9798eea6648786d5364e34f3682c39fd8dab17b2b53755beab->enter($__internal_2abd56d5f66c8f9798eea6648786d5364e34f3682c39fd8dab17b2b53755beab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2abd56d5f66c8f9798eea6648786d5364e34f3682c39fd8dab17b2b53755beab->leave($__internal_2abd56d5f66c8f9798eea6648786d5364e34f3682c39fd8dab17b2b53755beab_prof);

        
        $__internal_9de912f38cc7832b72c5d4ae9536d8142a9ef5b6f5659dd904889a13546b90ee->leave($__internal_9de912f38cc7832b72c5d4ae9536d8142a9ef5b6f5659dd904889a13546b90ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6242f0e2a201d172dfc9d9cdbd6088d4988226e6b8c44a4097569576a71fd2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6242f0e2a201d172dfc9d9cdbd6088d4988226e6b8c44a4097569576a71fd2f5->enter($__internal_6242f0e2a201d172dfc9d9cdbd6088d4988226e6b8c44a4097569576a71fd2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4646a34b7151cb15929b364935ca4c96d82896bc2d04f7ee6a0a9e32799cb298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4646a34b7151cb15929b364935ca4c96d82896bc2d04f7ee6a0a9e32799cb298->enter($__internal_4646a34b7151cb15929b364935ca4c96d82896bc2d04f7ee6a0a9e32799cb298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4646a34b7151cb15929b364935ca4c96d82896bc2d04f7ee6a0a9e32799cb298->leave($__internal_4646a34b7151cb15929b364935ca4c96d82896bc2d04f7ee6a0a9e32799cb298_prof);

        
        $__internal_6242f0e2a201d172dfc9d9cdbd6088d4988226e6b8c44a4097569576a71fd2f5->leave($__internal_6242f0e2a201d172dfc9d9cdbd6088d4988226e6b8c44a4097569576a71fd2f5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
