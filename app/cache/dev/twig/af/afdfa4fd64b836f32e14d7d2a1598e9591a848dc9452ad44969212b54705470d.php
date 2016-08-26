<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_41f026ff9473df5dfd0d0f846a1324a97b60f77aa1b94dc5107a62b1bef447a0 extends Twig_Template
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
        $__internal_415fd460bc3a514bae14256a2fe697075d61cb69b6f74e07d1ad3c672d60974f = $this->env->getExtension("native_profiler");
        $__internal_415fd460bc3a514bae14256a2fe697075d61cb69b6f74e07d1ad3c672d60974f->enter($__internal_415fd460bc3a514bae14256a2fe697075d61cb69b6f74e07d1ad3c672d60974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_415fd460bc3a514bae14256a2fe697075d61cb69b6f74e07d1ad3c672d60974f->leave($__internal_415fd460bc3a514bae14256a2fe697075d61cb69b6f74e07d1ad3c672d60974f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
