<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ca3a59e813362578723146c52505381f3eaca87d439abed10e14760c3a82ead6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_bea26f12d10e6829b63155b134a37d4ce833d127f37946812b2479b75b358470 = $this->env->getExtension("native_profiler");
        $__internal_bea26f12d10e6829b63155b134a37d4ce833d127f37946812b2479b75b358470->enter($__internal_bea26f12d10e6829b63155b134a37d4ce833d127f37946812b2479b75b358470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea26f12d10e6829b63155b134a37d4ce833d127f37946812b2479b75b358470->leave($__internal_bea26f12d10e6829b63155b134a37d4ce833d127f37946812b2479b75b358470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82232f2d06cb260d2bbaa786c4bee8bb6d05f5f2a35fb4ade9ac3c691213ce00 = $this->env->getExtension("native_profiler");
        $__internal_82232f2d06cb260d2bbaa786c4bee8bb6d05f5f2a35fb4ade9ac3c691213ce00->enter($__internal_82232f2d06cb260d2bbaa786c4bee8bb6d05f5f2a35fb4ade9ac3c691213ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_82232f2d06cb260d2bbaa786c4bee8bb6d05f5f2a35fb4ade9ac3c691213ce00->leave($__internal_82232f2d06cb260d2bbaa786c4bee8bb6d05f5f2a35fb4ade9ac3c691213ce00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
