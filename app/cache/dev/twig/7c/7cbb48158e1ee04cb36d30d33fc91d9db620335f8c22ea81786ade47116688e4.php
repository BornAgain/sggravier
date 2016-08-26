<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_644f29feade1dde4b5530003172fc6cc899d236b9d1ab3747f730abb024f56f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_58a14bfa0f057c14709462b9783e2d4a4ea14b012f5e205531e35bcfe7509fa7 = $this->env->getExtension("native_profiler");
        $__internal_58a14bfa0f057c14709462b9783e2d4a4ea14b012f5e205531e35bcfe7509fa7->enter($__internal_58a14bfa0f057c14709462b9783e2d4a4ea14b012f5e205531e35bcfe7509fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a14bfa0f057c14709462b9783e2d4a4ea14b012f5e205531e35bcfe7509fa7->leave($__internal_58a14bfa0f057c14709462b9783e2d4a4ea14b012f5e205531e35bcfe7509fa7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccc204f7bf9e14ad2ab3a671e6ccd5240554d3135e2d5aecf665bc7b0f9513fa = $this->env->getExtension("native_profiler");
        $__internal_ccc204f7bf9e14ad2ab3a671e6ccd5240554d3135e2d5aecf665bc7b0f9513fa->enter($__internal_ccc204f7bf9e14ad2ab3a671e6ccd5240554d3135e2d5aecf665bc7b0f9513fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ccc204f7bf9e14ad2ab3a671e6ccd5240554d3135e2d5aecf665bc7b0f9513fa->leave($__internal_ccc204f7bf9e14ad2ab3a671e6ccd5240554d3135e2d5aecf665bc7b0f9513fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
