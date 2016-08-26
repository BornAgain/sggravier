<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_498c644d71f0d29cbcb689170ae1551ba3ea2c3b42acec2d94699ba82a12836a extends Twig_Template
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
        $__internal_49e2c4a2d1a2869ed98345244b2e55cb2d5fa98277a057178ced45da2fb2bfd3 = $this->env->getExtension("native_profiler");
        $__internal_49e2c4a2d1a2869ed98345244b2e55cb2d5fa98277a057178ced45da2fb2bfd3->enter($__internal_49e2c4a2d1a2869ed98345244b2e55cb2d5fa98277a057178ced45da2fb2bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_49e2c4a2d1a2869ed98345244b2e55cb2d5fa98277a057178ced45da2fb2bfd3->leave($__internal_49e2c4a2d1a2869ed98345244b2e55cb2d5fa98277a057178ced45da2fb2bfd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
