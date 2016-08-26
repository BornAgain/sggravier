<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_510ff049e8ae3f0a51140be7b99f52642cc0c221df23ad20ac18449d81a8b381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b16ad0f6a995dc508063d7941a76403f90cf89af18894bfd2573f85dc28c8f3e = $this->env->getExtension("native_profiler");
        $__internal_b16ad0f6a995dc508063d7941a76403f90cf89af18894bfd2573f85dc28c8f3e->enter($__internal_b16ad0f6a995dc508063d7941a76403f90cf89af18894bfd2573f85dc28c8f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16ad0f6a995dc508063d7941a76403f90cf89af18894bfd2573f85dc28c8f3e->leave($__internal_b16ad0f6a995dc508063d7941a76403f90cf89af18894bfd2573f85dc28c8f3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c61cbec273ad8156357272688df941a0b38a8d11f7a583fb5e7bb97917b5b91 = $this->env->getExtension("native_profiler");
        $__internal_0c61cbec273ad8156357272688df941a0b38a8d11f7a583fb5e7bb97917b5b91->enter($__internal_0c61cbec273ad8156357272688df941a0b38a8d11f7a583fb5e7bb97917b5b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0c61cbec273ad8156357272688df941a0b38a8d11f7a583fb5e7bb97917b5b91->leave($__internal_0c61cbec273ad8156357272688df941a0b38a8d11f7a583fb5e7bb97917b5b91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
