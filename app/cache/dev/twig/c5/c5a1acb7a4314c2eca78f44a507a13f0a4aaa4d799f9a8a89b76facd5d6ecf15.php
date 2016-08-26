<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_688f12e11482681c8f90b2583b37bcc6ec5f315da9162fbe3aee8a7398d6d46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_caabc8ecb5bce4a589ad878b1312e1b65279b02b85085570f28adb0f87292483 = $this->env->getExtension("native_profiler");
        $__internal_caabc8ecb5bce4a589ad878b1312e1b65279b02b85085570f28adb0f87292483->enter($__internal_caabc8ecb5bce4a589ad878b1312e1b65279b02b85085570f28adb0f87292483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caabc8ecb5bce4a589ad878b1312e1b65279b02b85085570f28adb0f87292483->leave($__internal_caabc8ecb5bce4a589ad878b1312e1b65279b02b85085570f28adb0f87292483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dca4d2183a4599eec9dad4f66d1d2ec60829b64b19cd1dfbb5fcbed79b7aca33 = $this->env->getExtension("native_profiler");
        $__internal_dca4d2183a4599eec9dad4f66d1d2ec60829b64b19cd1dfbb5fcbed79b7aca33->enter($__internal_dca4d2183a4599eec9dad4f66d1d2ec60829b64b19cd1dfbb5fcbed79b7aca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_dca4d2183a4599eec9dad4f66d1d2ec60829b64b19cd1dfbb5fcbed79b7aca33->leave($__internal_dca4d2183a4599eec9dad4f66d1d2ec60829b64b19cd1dfbb5fcbed79b7aca33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
