<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bf6cae7180598bd687fec7848f823d4ae12060e2c14218454eac52e63617330b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_283b86a353d1f0d27afab19275b2823f2718bdb8ee47859dc3770fa34ebf4b54 = $this->env->getExtension("native_profiler");
        $__internal_283b86a353d1f0d27afab19275b2823f2718bdb8ee47859dc3770fa34ebf4b54->enter($__internal_283b86a353d1f0d27afab19275b2823f2718bdb8ee47859dc3770fa34ebf4b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283b86a353d1f0d27afab19275b2823f2718bdb8ee47859dc3770fa34ebf4b54->leave($__internal_283b86a353d1f0d27afab19275b2823f2718bdb8ee47859dc3770fa34ebf4b54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94ac076eeb56d4b8bba91e3642f91790bee401900b591dd9e04b65bc5221a1c4 = $this->env->getExtension("native_profiler");
        $__internal_94ac076eeb56d4b8bba91e3642f91790bee401900b591dd9e04b65bc5221a1c4->enter($__internal_94ac076eeb56d4b8bba91e3642f91790bee401900b591dd9e04b65bc5221a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_94ac076eeb56d4b8bba91e3642f91790bee401900b591dd9e04b65bc5221a1c4->leave($__internal_94ac076eeb56d4b8bba91e3642f91790bee401900b591dd9e04b65bc5221a1c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
