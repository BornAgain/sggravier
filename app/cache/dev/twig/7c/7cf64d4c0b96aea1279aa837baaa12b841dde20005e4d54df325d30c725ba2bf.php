<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_292a08ffc7e13030e56853abc7f538816079c171918776d8cf953d5a173af15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_ab4130cc467e45614d1c59aa44cc7d1a50a73c89e959e3984d72a6d31b8dbb1e = $this->env->getExtension("native_profiler");
        $__internal_ab4130cc467e45614d1c59aa44cc7d1a50a73c89e959e3984d72a6d31b8dbb1e->enter($__internal_ab4130cc467e45614d1c59aa44cc7d1a50a73c89e959e3984d72a6d31b8dbb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4130cc467e45614d1c59aa44cc7d1a50a73c89e959e3984d72a6d31b8dbb1e->leave($__internal_ab4130cc467e45614d1c59aa44cc7d1a50a73c89e959e3984d72a6d31b8dbb1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7378b00bec056df4b98ce5352ac99d5b29a8731a18bee93ae333a7ae40db2d5e = $this->env->getExtension("native_profiler");
        $__internal_7378b00bec056df4b98ce5352ac99d5b29a8731a18bee93ae333a7ae40db2d5e->enter($__internal_7378b00bec056df4b98ce5352ac99d5b29a8731a18bee93ae333a7ae40db2d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_7378b00bec056df4b98ce5352ac99d5b29a8731a18bee93ae333a7ae40db2d5e->leave($__internal_7378b00bec056df4b98ce5352ac99d5b29a8731a18bee93ae333a7ae40db2d5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
