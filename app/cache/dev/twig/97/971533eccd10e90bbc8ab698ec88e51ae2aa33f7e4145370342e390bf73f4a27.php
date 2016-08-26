<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6ab4fb4c0de03135ac61dfedf665bcecb2251b0ad7078578276e77ba09f51d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_455f7476429ddc6e39d0f45875b5292452c275326a96e73bc63bdc8b5b4b65d7 = $this->env->getExtension("native_profiler");
        $__internal_455f7476429ddc6e39d0f45875b5292452c275326a96e73bc63bdc8b5b4b65d7->enter($__internal_455f7476429ddc6e39d0f45875b5292452c275326a96e73bc63bdc8b5b4b65d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455f7476429ddc6e39d0f45875b5292452c275326a96e73bc63bdc8b5b4b65d7->leave($__internal_455f7476429ddc6e39d0f45875b5292452c275326a96e73bc63bdc8b5b4b65d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e4c0cce66a09116c9542183cab4f6bfd8bd2c4aae0f87ff9837063fea102aef = $this->env->getExtension("native_profiler");
        $__internal_3e4c0cce66a09116c9542183cab4f6bfd8bd2c4aae0f87ff9837063fea102aef->enter($__internal_3e4c0cce66a09116c9542183cab4f6bfd8bd2c4aae0f87ff9837063fea102aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3e4c0cce66a09116c9542183cab4f6bfd8bd2c4aae0f87ff9837063fea102aef->leave($__internal_3e4c0cce66a09116c9542183cab4f6bfd8bd2c4aae0f87ff9837063fea102aef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
