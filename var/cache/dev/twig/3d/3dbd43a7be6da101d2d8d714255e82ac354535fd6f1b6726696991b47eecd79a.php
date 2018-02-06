<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_3b6fabe447df3775463a1bf59d7b1f0766d2d58108d3008d244e2ae5b0e52b05 extends Twig_Template
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
        $__internal_eec848eba632c86a7d0fa1f1dfe3c1844cbbeedc8dff81bfb9b4aa3deb97d811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec848eba632c86a7d0fa1f1dfe3c1844cbbeedc8dff81bfb9b4aa3deb97d811->enter($__internal_eec848eba632c86a7d0fa1f1dfe3c1844cbbeedc8dff81bfb9b4aa3deb97d811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_208b50505cd9ed4e108a93272b2664f5e1558a5989f49d38179648ca8e5a730b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208b50505cd9ed4e108a93272b2664f5e1558a5989f49d38179648ca8e5a730b->enter($__internal_208b50505cd9ed4e108a93272b2664f5e1558a5989f49d38179648ca8e5a730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_eec848eba632c86a7d0fa1f1dfe3c1844cbbeedc8dff81bfb9b4aa3deb97d811->leave($__internal_eec848eba632c86a7d0fa1f1dfe3c1844cbbeedc8dff81bfb9b4aa3deb97d811_prof);

        
        $__internal_208b50505cd9ed4e108a93272b2664f5e1558a5989f49d38179648ca8e5a730b->leave($__internal_208b50505cd9ed4e108a93272b2664f5e1558a5989f49d38179648ca8e5a730b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\pidev0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
