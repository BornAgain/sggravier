<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ff55aad1b246a6033c82f30b09067e31af0ac8df9eb6b46d7181b9ebeb7d781d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_754a0e715b13b11593a340b2073aefb872f80eaf51e891ee1b46fc6022fa845a = $this->env->getExtension("native_profiler");
        $__internal_754a0e715b13b11593a340b2073aefb872f80eaf51e891ee1b46fc6022fa845a->enter($__internal_754a0e715b13b11593a340b2073aefb872f80eaf51e891ee1b46fc6022fa845a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_754a0e715b13b11593a340b2073aefb872f80eaf51e891ee1b46fc6022fa845a->leave($__internal_754a0e715b13b11593a340b2073aefb872f80eaf51e891ee1b46fc6022fa845a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd86c8a1adc535546b77fe9eef57e158127ea38b845346a25d2bc8a74443f2ea = $this->env->getExtension("native_profiler");
        $__internal_bd86c8a1adc535546b77fe9eef57e158127ea38b845346a25d2bc8a74443f2ea->enter($__internal_bd86c8a1adc535546b77fe9eef57e158127ea38b845346a25d2bc8a74443f2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bd86c8a1adc535546b77fe9eef57e158127ea38b845346a25d2bc8a74443f2ea->leave($__internal_bd86c8a1adc535546b77fe9eef57e158127ea38b845346a25d2bc8a74443f2ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
