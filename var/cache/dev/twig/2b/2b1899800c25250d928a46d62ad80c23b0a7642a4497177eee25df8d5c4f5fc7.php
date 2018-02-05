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
        $__internal_80bf7329b672977f7645bd54120cbb62352977b5654123f4f6dc87e62ce1a1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bf7329b672977f7645bd54120cbb62352977b5654123f4f6dc87e62ce1a1ea->enter($__internal_80bf7329b672977f7645bd54120cbb62352977b5654123f4f6dc87e62ce1a1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d868aaa28e68c8b63653559a9aa2b8dc3e9311f541a05ff1d37b1acbdae5d5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d868aaa28e68c8b63653559a9aa2b8dc3e9311f541a05ff1d37b1acbdae5d5aa->enter($__internal_d868aaa28e68c8b63653559a9aa2b8dc3e9311f541a05ff1d37b1acbdae5d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80bf7329b672977f7645bd54120cbb62352977b5654123f4f6dc87e62ce1a1ea->leave($__internal_80bf7329b672977f7645bd54120cbb62352977b5654123f4f6dc87e62ce1a1ea_prof);

        
        $__internal_d868aaa28e68c8b63653559a9aa2b8dc3e9311f541a05ff1d37b1acbdae5d5aa->leave($__internal_d868aaa28e68c8b63653559a9aa2b8dc3e9311f541a05ff1d37b1acbdae5d5aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34338910ed6b30862c4cb813adaea23df786b8a275362babb304cc65ce5d5863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34338910ed6b30862c4cb813adaea23df786b8a275362babb304cc65ce5d5863->enter($__internal_34338910ed6b30862c4cb813adaea23df786b8a275362babb304cc65ce5d5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4384ad048c030932f67d57c85ee3d1d137573598770304aff09a1c44fb1ae97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4384ad048c030932f67d57c85ee3d1d137573598770304aff09a1c44fb1ae97->enter($__internal_c4384ad048c030932f67d57c85ee3d1d137573598770304aff09a1c44fb1ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4384ad048c030932f67d57c85ee3d1d137573598770304aff09a1c44fb1ae97->leave($__internal_c4384ad048c030932f67d57c85ee3d1d137573598770304aff09a1c44fb1ae97_prof);

        
        $__internal_34338910ed6b30862c4cb813adaea23df786b8a275362babb304cc65ce5d5863->leave($__internal_34338910ed6b30862c4cb813adaea23df786b8a275362babb304cc65ce5d5863_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40b267e114ee56fa1ce50c644a50fa82875da8f37eedeb109a5aa59e29a0459c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b267e114ee56fa1ce50c644a50fa82875da8f37eedeb109a5aa59e29a0459c->enter($__internal_40b267e114ee56fa1ce50c644a50fa82875da8f37eedeb109a5aa59e29a0459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd3b14a193305f07a22f74606f9cffb04cba3fbbfcc07753a21b7514b665d03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3b14a193305f07a22f74606f9cffb04cba3fbbfcc07753a21b7514b665d03d->enter($__internal_bd3b14a193305f07a22f74606f9cffb04cba3fbbfcc07753a21b7514b665d03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd3b14a193305f07a22f74606f9cffb04cba3fbbfcc07753a21b7514b665d03d->leave($__internal_bd3b14a193305f07a22f74606f9cffb04cba3fbbfcc07753a21b7514b665d03d_prof);

        
        $__internal_40b267e114ee56fa1ce50c644a50fa82875da8f37eedeb109a5aa59e29a0459c->leave($__internal_40b267e114ee56fa1ce50c644a50fa82875da8f37eedeb109a5aa59e29a0459c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_865f1a980007b93947b912a71e926f2afb38ce7d2543d36f4ef959c149241c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865f1a980007b93947b912a71e926f2afb38ce7d2543d36f4ef959c149241c95->enter($__internal_865f1a980007b93947b912a71e926f2afb38ce7d2543d36f4ef959c149241c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa09870684350ac937b1b246941d7de59cb0e6a50b68829acd13045d3d2643b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa09870684350ac937b1b246941d7de59cb0e6a50b68829acd13045d3d2643b5->enter($__internal_fa09870684350ac937b1b246941d7de59cb0e6a50b68829acd13045d3d2643b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa09870684350ac937b1b246941d7de59cb0e6a50b68829acd13045d3d2643b5->leave($__internal_fa09870684350ac937b1b246941d7de59cb0e6a50b68829acd13045d3d2643b5_prof);

        
        $__internal_865f1a980007b93947b912a71e926f2afb38ce7d2543d36f4ef959c149241c95->leave($__internal_865f1a980007b93947b912a71e926f2afb38ce7d2543d36f4ef959c149241c95_prof);

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
