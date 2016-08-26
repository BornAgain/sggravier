<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_cca5203d0a5192c8d4f7201f3d91dea369320774aa7054cd21e283f7952cdc37 extends Twig_Template
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
        $__internal_3f8980b3c08479cdf0abae9f577950ca64c04d29118b0a3d69db0d6b06f4b3b6 = $this->env->getExtension("native_profiler");
        $__internal_3f8980b3c08479cdf0abae9f577950ca64c04d29118b0a3d69db0d6b06f4b3b6->enter($__internal_3f8980b3c08479cdf0abae9f577950ca64c04d29118b0a3d69db0d6b06f4b3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3f8980b3c08479cdf0abae9f577950ca64c04d29118b0a3d69db0d6b06f4b3b6->leave($__internal_3f8980b3c08479cdf0abae9f577950ca64c04d29118b0a3d69db0d6b06f4b3b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
