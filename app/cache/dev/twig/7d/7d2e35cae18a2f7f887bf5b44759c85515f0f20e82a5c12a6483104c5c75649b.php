<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f28f25aed726ca74c68a274971fb100f49bdaabab7b1025619feb7165d079746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_90ef0693a0d59f18e0a45a46af205e35f761d9cbaa4e69edbbcc985f96940d2c = $this->env->getExtension("native_profiler");
        $__internal_90ef0693a0d59f18e0a45a46af205e35f761d9cbaa4e69edbbcc985f96940d2c->enter($__internal_90ef0693a0d59f18e0a45a46af205e35f761d9cbaa4e69edbbcc985f96940d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ef0693a0d59f18e0a45a46af205e35f761d9cbaa4e69edbbcc985f96940d2c->leave($__internal_90ef0693a0d59f18e0a45a46af205e35f761d9cbaa4e69edbbcc985f96940d2c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11c7b95fdaf40a0b2d8ae39cd0725a8bb8e7c06a1824ad27bde59d1b6936ed72 = $this->env->getExtension("native_profiler");
        $__internal_11c7b95fdaf40a0b2d8ae39cd0725a8bb8e7c06a1824ad27bde59d1b6936ed72->enter($__internal_11c7b95fdaf40a0b2d8ae39cd0725a8bb8e7c06a1824ad27bde59d1b6936ed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11c7b95fdaf40a0b2d8ae39cd0725a8bb8e7c06a1824ad27bde59d1b6936ed72->leave($__internal_11c7b95fdaf40a0b2d8ae39cd0725a8bb8e7c06a1824ad27bde59d1b6936ed72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
