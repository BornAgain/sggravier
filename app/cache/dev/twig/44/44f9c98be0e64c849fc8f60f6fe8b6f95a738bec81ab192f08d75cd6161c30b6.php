<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a4da742c18bd3305cc3cb3899929856beb4c57112503050b4fd22eda9f79f77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_2e1cdf75fd57be3ef8777345c85c87a96bdf45b7567f958b357fb70df2125f07 = $this->env->getExtension("native_profiler");
        $__internal_2e1cdf75fd57be3ef8777345c85c87a96bdf45b7567f958b357fb70df2125f07->enter($__internal_2e1cdf75fd57be3ef8777345c85c87a96bdf45b7567f958b357fb70df2125f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1cdf75fd57be3ef8777345c85c87a96bdf45b7567f958b357fb70df2125f07->leave($__internal_2e1cdf75fd57be3ef8777345c85c87a96bdf45b7567f958b357fb70df2125f07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e7c6e5fcc61e286bdd402f6b01810e2653c4271767b04107b7d518efcb710a4 = $this->env->getExtension("native_profiler");
        $__internal_0e7c6e5fcc61e286bdd402f6b01810e2653c4271767b04107b7d518efcb710a4->enter($__internal_0e7c6e5fcc61e286bdd402f6b01810e2653c4271767b04107b7d518efcb710a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0e7c6e5fcc61e286bdd402f6b01810e2653c4271767b04107b7d518efcb710a4->leave($__internal_0e7c6e5fcc61e286bdd402f6b01810e2653c4271767b04107b7d518efcb710a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
