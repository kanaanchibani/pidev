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
        $__internal_4b6ffc791e5a3995e36dd4c676487278af37898f48206bba7a3899af5332647e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6ffc791e5a3995e36dd4c676487278af37898f48206bba7a3899af5332647e->enter($__internal_4b6ffc791e5a3995e36dd4c676487278af37898f48206bba7a3899af5332647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e84aee22220876bad3c0db02d97e84befb4bb45a4a316a6d3ba3bc0195f6515a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84aee22220876bad3c0db02d97e84befb4bb45a4a316a6d3ba3bc0195f6515a->enter($__internal_e84aee22220876bad3c0db02d97e84befb4bb45a4a316a6d3ba3bc0195f6515a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6ffc791e5a3995e36dd4c676487278af37898f48206bba7a3899af5332647e->leave($__internal_4b6ffc791e5a3995e36dd4c676487278af37898f48206bba7a3899af5332647e_prof);

        
        $__internal_e84aee22220876bad3c0db02d97e84befb4bb45a4a316a6d3ba3bc0195f6515a->leave($__internal_e84aee22220876bad3c0db02d97e84befb4bb45a4a316a6d3ba3bc0195f6515a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6d3d5a77f5fc35e9b47991272b312ae07ba2265696e77f5b2832cff08cbd7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d3d5a77f5fc35e9b47991272b312ae07ba2265696e77f5b2832cff08cbd7c1->enter($__internal_c6d3d5a77f5fc35e9b47991272b312ae07ba2265696e77f5b2832cff08cbd7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f17a19eacba1a60c56abfc6a5761730a51eba8e80a079fd03874d6a6daad3a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17a19eacba1a60c56abfc6a5761730a51eba8e80a079fd03874d6a6daad3a1f->enter($__internal_f17a19eacba1a60c56abfc6a5761730a51eba8e80a079fd03874d6a6daad3a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f17a19eacba1a60c56abfc6a5761730a51eba8e80a079fd03874d6a6daad3a1f->leave($__internal_f17a19eacba1a60c56abfc6a5761730a51eba8e80a079fd03874d6a6daad3a1f_prof);

        
        $__internal_c6d3d5a77f5fc35e9b47991272b312ae07ba2265696e77f5b2832cff08cbd7c1->leave($__internal_c6d3d5a77f5fc35e9b47991272b312ae07ba2265696e77f5b2832cff08cbd7c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29842303314c1dd62eff153f6559f2c3fc4ccf1bba8482f6c160a1a983b1dffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29842303314c1dd62eff153f6559f2c3fc4ccf1bba8482f6c160a1a983b1dffe->enter($__internal_29842303314c1dd62eff153f6559f2c3fc4ccf1bba8482f6c160a1a983b1dffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9df04f17f8645012279c6dc99627cfcb5d70274f9861d3ec4a02ff3e4cbb35dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df04f17f8645012279c6dc99627cfcb5d70274f9861d3ec4a02ff3e4cbb35dc->enter($__internal_9df04f17f8645012279c6dc99627cfcb5d70274f9861d3ec4a02ff3e4cbb35dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9df04f17f8645012279c6dc99627cfcb5d70274f9861d3ec4a02ff3e4cbb35dc->leave($__internal_9df04f17f8645012279c6dc99627cfcb5d70274f9861d3ec4a02ff3e4cbb35dc_prof);

        
        $__internal_29842303314c1dd62eff153f6559f2c3fc4ccf1bba8482f6c160a1a983b1dffe->leave($__internal_29842303314c1dd62eff153f6559f2c3fc4ccf1bba8482f6c160a1a983b1dffe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_975b9e13d35bd7ba320b56c55a846aa25a646346d57029936a36dda2e8c6a956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975b9e13d35bd7ba320b56c55a846aa25a646346d57029936a36dda2e8c6a956->enter($__internal_975b9e13d35bd7ba320b56c55a846aa25a646346d57029936a36dda2e8c6a956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13a9cff91320f2426e835dc657bd3fa56e7622612b99c43f8005d99b1f147076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a9cff91320f2426e835dc657bd3fa56e7622612b99c43f8005d99b1f147076->enter($__internal_13a9cff91320f2426e835dc657bd3fa56e7622612b99c43f8005d99b1f147076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13a9cff91320f2426e835dc657bd3fa56e7622612b99c43f8005d99b1f147076->leave($__internal_13a9cff91320f2426e835dc657bd3fa56e7622612b99c43f8005d99b1f147076_prof);

        
        $__internal_975b9e13d35bd7ba320b56c55a846aa25a646346d57029936a36dda2e8c6a956->leave($__internal_975b9e13d35bd7ba320b56c55a846aa25a646346d57029936a36dda2e8c6a956_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Esprit Entr'aide\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
