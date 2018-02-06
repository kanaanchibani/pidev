<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4838a6931b88ba289931e4d48841d5f2beee27d7a38510e2af32c946c320cd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04c12876f8b489876b012d2c38f60e54af4e3583e73e09c5a5e4d62b3fc7029e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c12876f8b489876b012d2c38f60e54af4e3583e73e09c5a5e4d62b3fc7029e->enter($__internal_04c12876f8b489876b012d2c38f60e54af4e3583e73e09c5a5e4d62b3fc7029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6203ed6b57b636bf5d4a6c7cdd9b35965264237638dda891654b6e1de83def7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6203ed6b57b636bf5d4a6c7cdd9b35965264237638dda891654b6e1de83def7->enter($__internal_d6203ed6b57b636bf5d4a6c7cdd9b35965264237638dda891654b6e1de83def7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c12876f8b489876b012d2c38f60e54af4e3583e73e09c5a5e4d62b3fc7029e->leave($__internal_04c12876f8b489876b012d2c38f60e54af4e3583e73e09c5a5e4d62b3fc7029e_prof);

        
        $__internal_d6203ed6b57b636bf5d4a6c7cdd9b35965264237638dda891654b6e1de83def7->leave($__internal_d6203ed6b57b636bf5d4a6c7cdd9b35965264237638dda891654b6e1de83def7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bb7ad264356fcc191c99559fed0bb830711515f3710baa9f280322e5639afa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb7ad264356fcc191c99559fed0bb830711515f3710baa9f280322e5639afa8->enter($__internal_4bb7ad264356fcc191c99559fed0bb830711515f3710baa9f280322e5639afa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_527e68c8c32c2ad25add406a759906974b9a751a891c1759bcf1399e2605bcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527e68c8c32c2ad25add406a759906974b9a751a891c1759bcf1399e2605bcbe->enter($__internal_527e68c8c32c2ad25add406a759906974b9a751a891c1759bcf1399e2605bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_527e68c8c32c2ad25add406a759906974b9a751a891c1759bcf1399e2605bcbe->leave($__internal_527e68c8c32c2ad25add406a759906974b9a751a891c1759bcf1399e2605bcbe_prof);

        
        $__internal_4bb7ad264356fcc191c99559fed0bb830711515f3710baa9f280322e5639afa8->leave($__internal_4bb7ad264356fcc191c99559fed0bb830711515f3710baa9f280322e5639afa8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
