<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d0f1d19749ce2de8ab09e25f69a10cb6f226c28282f05b3d785caf457c9df7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_34707a743ae09fa41872c7072cd534f313b365c51ba90a756f471e2079c2dcb0 = $this->env->getExtension("native_profiler");
        $__internal_34707a743ae09fa41872c7072cd534f313b365c51ba90a756f471e2079c2dcb0->enter($__internal_34707a743ae09fa41872c7072cd534f313b365c51ba90a756f471e2079c2dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34707a743ae09fa41872c7072cd534f313b365c51ba90a756f471e2079c2dcb0->leave($__internal_34707a743ae09fa41872c7072cd534f313b365c51ba90a756f471e2079c2dcb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a7277f65bef4f6d325dd2276c5c1bc66ffaef77091bdbbc1f4200abfce57b69 = $this->env->getExtension("native_profiler");
        $__internal_7a7277f65bef4f6d325dd2276c5c1bc66ffaef77091bdbbc1f4200abfce57b69->enter($__internal_7a7277f65bef4f6d325dd2276c5c1bc66ffaef77091bdbbc1f4200abfce57b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7a7277f65bef4f6d325dd2276c5c1bc66ffaef77091bdbbc1f4200abfce57b69->leave($__internal_7a7277f65bef4f6d325dd2276c5c1bc66ffaef77091bdbbc1f4200abfce57b69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
