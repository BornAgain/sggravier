<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_dedb5dca069eac84efb946dc3efb04dd2ec35347cd663fb8dc47e2d86248e5de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f49401377b72e534aa6c8e9950aeeab23e98c56a582fdb51a713fe82efb08ece = $this->env->getExtension("native_profiler");
        $__internal_f49401377b72e534aa6c8e9950aeeab23e98c56a582fdb51a713fe82efb08ece->enter($__internal_f49401377b72e534aa6c8e9950aeeab23e98c56a582fdb51a713fe82efb08ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49401377b72e534aa6c8e9950aeeab23e98c56a582fdb51a713fe82efb08ece->leave($__internal_f49401377b72e534aa6c8e9950aeeab23e98c56a582fdb51a713fe82efb08ece_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f27d3b16704eb2fcda5206bf9b48ea90b27bdd324bac654e84b31572cddfae4 = $this->env->getExtension("native_profiler");
        $__internal_9f27d3b16704eb2fcda5206bf9b48ea90b27bdd324bac654e84b31572cddfae4->enter($__internal_9f27d3b16704eb2fcda5206bf9b48ea90b27bdd324bac654e84b31572cddfae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9f27d3b16704eb2fcda5206bf9b48ea90b27bdd324bac654e84b31572cddfae4->leave($__internal_9f27d3b16704eb2fcda5206bf9b48ea90b27bdd324bac654e84b31572cddfae4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
