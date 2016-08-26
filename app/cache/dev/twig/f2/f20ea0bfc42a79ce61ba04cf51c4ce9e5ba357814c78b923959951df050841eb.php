<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f95f0724019d373b15c1cb422cf8951e341ccb28e446eea06d7002ff7a3ab76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7ca4d0cf275c9f46b79269b56830b511d5935f59217d605bdfd87bdff1f5f7e7 = $this->env->getExtension("native_profiler");
        $__internal_7ca4d0cf275c9f46b79269b56830b511d5935f59217d605bdfd87bdff1f5f7e7->enter($__internal_7ca4d0cf275c9f46b79269b56830b511d5935f59217d605bdfd87bdff1f5f7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca4d0cf275c9f46b79269b56830b511d5935f59217d605bdfd87bdff1f5f7e7->leave($__internal_7ca4d0cf275c9f46b79269b56830b511d5935f59217d605bdfd87bdff1f5f7e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea3842ce363db944bf6d58bfb085d1c29c9d7d2a21c95f8456511160dd543caa = $this->env->getExtension("native_profiler");
        $__internal_ea3842ce363db944bf6d58bfb085d1c29c9d7d2a21c95f8456511160dd543caa->enter($__internal_ea3842ce363db944bf6d58bfb085d1c29c9d7d2a21c95f8456511160dd543caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ea3842ce363db944bf6d58bfb085d1c29c9d7d2a21c95f8456511160dd543caa->leave($__internal_ea3842ce363db944bf6d58bfb085d1c29c9d7d2a21c95f8456511160dd543caa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
