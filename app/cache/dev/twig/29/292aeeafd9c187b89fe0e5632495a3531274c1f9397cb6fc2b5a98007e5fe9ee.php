<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_c14e49df19bd42df3c9332c6bd726075ad7ae597f89c5e939073799f124982b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_b119f07ac0efd3f146fa6f5e6a556fd268e8a139dafc34187acaf5cb969ba830 = $this->env->getExtension("native_profiler");
        $__internal_b119f07ac0efd3f146fa6f5e6a556fd268e8a139dafc34187acaf5cb969ba830->enter($__internal_b119f07ac0efd3f146fa6f5e6a556fd268e8a139dafc34187acaf5cb969ba830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b119f07ac0efd3f146fa6f5e6a556fd268e8a139dafc34187acaf5cb969ba830->leave($__internal_b119f07ac0efd3f146fa6f5e6a556fd268e8a139dafc34187acaf5cb969ba830_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c8a96ffcfda95f57ac84f18d5ad314e1ff48ba0504bf2ad5ce45f2f20a6676c = $this->env->getExtension("native_profiler");
        $__internal_5c8a96ffcfda95f57ac84f18d5ad314e1ff48ba0504bf2ad5ce45f2f20a6676c->enter($__internal_5c8a96ffcfda95f57ac84f18d5ad314e1ff48ba0504bf2ad5ce45f2f20a6676c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5c8a96ffcfda95f57ac84f18d5ad314e1ff48ba0504bf2ad5ce45f2f20a6676c->leave($__internal_5c8a96ffcfda95f57ac84f18d5ad314e1ff48ba0504bf2ad5ce45f2f20a6676c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
