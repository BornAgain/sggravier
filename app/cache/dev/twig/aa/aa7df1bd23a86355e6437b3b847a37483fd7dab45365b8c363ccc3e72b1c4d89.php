<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9099c78760f66abc426798e9d539343ba45841f5550dec8aa6b003c4a2854884 extends Twig_Template
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
        $__internal_cdcddae4c9a64d0b179cf7df930164d74ea817059e554d500fecc54b2736f00f = $this->env->getExtension("native_profiler");
        $__internal_cdcddae4c9a64d0b179cf7df930164d74ea817059e554d500fecc54b2736f00f->enter($__internal_cdcddae4c9a64d0b179cf7df930164d74ea817059e554d500fecc54b2736f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cdcddae4c9a64d0b179cf7df930164d74ea817059e554d500fecc54b2736f00f->leave($__internal_cdcddae4c9a64d0b179cf7df930164d74ea817059e554d500fecc54b2736f00f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
