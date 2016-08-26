<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_72fb8597a8a35b93862db53fb70c0b8965beebc0166435b83bc60d6218797545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_01930705b15f4b4edace61ff457ad5b9a349edea5ff66d2951ec86f21d7b412e = $this->env->getExtension("native_profiler");
        $__internal_01930705b15f4b4edace61ff457ad5b9a349edea5ff66d2951ec86f21d7b412e->enter($__internal_01930705b15f4b4edace61ff457ad5b9a349edea5ff66d2951ec86f21d7b412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01930705b15f4b4edace61ff457ad5b9a349edea5ff66d2951ec86f21d7b412e->leave($__internal_01930705b15f4b4edace61ff457ad5b9a349edea5ff66d2951ec86f21d7b412e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_279c8a9704011aeb274f7e86a7a0e8ad0bddcba0ee1317dd872c8f78fe435eeb = $this->env->getExtension("native_profiler");
        $__internal_279c8a9704011aeb274f7e86a7a0e8ad0bddcba0ee1317dd872c8f78fe435eeb->enter($__internal_279c8a9704011aeb274f7e86a7a0e8ad0bddcba0ee1317dd872c8f78fe435eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_279c8a9704011aeb274f7e86a7a0e8ad0bddcba0ee1317dd872c8f78fe435eeb->leave($__internal_279c8a9704011aeb274f7e86a7a0e8ad0bddcba0ee1317dd872c8f78fe435eeb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
