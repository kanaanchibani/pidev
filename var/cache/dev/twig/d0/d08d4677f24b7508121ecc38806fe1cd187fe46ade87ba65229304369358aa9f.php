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
        $__internal_1ecc8bda18d6efb018e11cc33c407c0c4ba197f2b70c3225ceb26d5ddad20542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecc8bda18d6efb018e11cc33c407c0c4ba197f2b70c3225ceb26d5ddad20542->enter($__internal_1ecc8bda18d6efb018e11cc33c407c0c4ba197f2b70c3225ceb26d5ddad20542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2dc1afd0095b3c4bb118182ef3c9662cb204b9f6e904175b711f3dfcb87aa29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc1afd0095b3c4bb118182ef3c9662cb204b9f6e904175b711f3dfcb87aa29b->enter($__internal_2dc1afd0095b3c4bb118182ef3c9662cb204b9f6e904175b711f3dfcb87aa29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecc8bda18d6efb018e11cc33c407c0c4ba197f2b70c3225ceb26d5ddad20542->leave($__internal_1ecc8bda18d6efb018e11cc33c407c0c4ba197f2b70c3225ceb26d5ddad20542_prof);

        
        $__internal_2dc1afd0095b3c4bb118182ef3c9662cb204b9f6e904175b711f3dfcb87aa29b->leave($__internal_2dc1afd0095b3c4bb118182ef3c9662cb204b9f6e904175b711f3dfcb87aa29b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8027d355f217d175089f7978db0b82279719987e4b85e21bd9d7e0ccd452920f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8027d355f217d175089f7978db0b82279719987e4b85e21bd9d7e0ccd452920f->enter($__internal_8027d355f217d175089f7978db0b82279719987e4b85e21bd9d7e0ccd452920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7291ff61778f5cbd333e3a4a90ff53dbb0b0e5ec0db77e100ad0240c3dd8ce09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7291ff61778f5cbd333e3a4a90ff53dbb0b0e5ec0db77e100ad0240c3dd8ce09->enter($__internal_7291ff61778f5cbd333e3a4a90ff53dbb0b0e5ec0db77e100ad0240c3dd8ce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7291ff61778f5cbd333e3a4a90ff53dbb0b0e5ec0db77e100ad0240c3dd8ce09->leave($__internal_7291ff61778f5cbd333e3a4a90ff53dbb0b0e5ec0db77e100ad0240c3dd8ce09_prof);

        
        $__internal_8027d355f217d175089f7978db0b82279719987e4b85e21bd9d7e0ccd452920f->leave($__internal_8027d355f217d175089f7978db0b82279719987e4b85e21bd9d7e0ccd452920f_prof);

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
