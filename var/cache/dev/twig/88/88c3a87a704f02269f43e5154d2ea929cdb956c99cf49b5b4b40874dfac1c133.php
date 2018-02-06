<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9ebb96c8679854681c05e13a6833352d69f11876cc0199bcde4c73dec49136e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23b561f4f1731f711e4fe0f19569b1096a5468df21a9cd878d1dd95e5c4832c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b561f4f1731f711e4fe0f19569b1096a5468df21a9cd878d1dd95e5c4832c5->enter($__internal_23b561f4f1731f711e4fe0f19569b1096a5468df21a9cd878d1dd95e5c4832c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b83120ef0974792f102ed70d42eb77526dc8a9e2d0fb78e343c6a343daf17395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83120ef0974792f102ed70d42eb77526dc8a9e2d0fb78e343c6a343daf17395->enter($__internal_b83120ef0974792f102ed70d42eb77526dc8a9e2d0fb78e343c6a343daf17395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_23b561f4f1731f711e4fe0f19569b1096a5468df21a9cd878d1dd95e5c4832c5->leave($__internal_23b561f4f1731f711e4fe0f19569b1096a5468df21a9cd878d1dd95e5c4832c5_prof);

        
        $__internal_b83120ef0974792f102ed70d42eb77526dc8a9e2d0fb78e343c6a343daf17395->leave($__internal_b83120ef0974792f102ed70d42eb77526dc8a9e2d0fb78e343c6a343daf17395_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\pidev0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
