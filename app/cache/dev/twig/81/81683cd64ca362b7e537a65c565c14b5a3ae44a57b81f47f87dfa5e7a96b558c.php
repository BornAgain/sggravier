<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cb08b398b6b09ffef23853e86573b80998f2998ac3e864e84b3b4e3544246795 extends Twig_Template
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
        $__internal_1acb65feeb6674f1eabee62821bc0930aaa5bf0c82fc086272c65a18a6ec0990 = $this->env->getExtension("native_profiler");
        $__internal_1acb65feeb6674f1eabee62821bc0930aaa5bf0c82fc086272c65a18a6ec0990->enter($__internal_1acb65feeb6674f1eabee62821bc0930aaa5bf0c82fc086272c65a18a6ec0990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1acb65feeb6674f1eabee62821bc0930aaa5bf0c82fc086272c65a18a6ec0990->leave($__internal_1acb65feeb6674f1eabee62821bc0930aaa5bf0c82fc086272c65a18a6ec0990_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
