<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_02d52dad9cb61f8e1a4dab32235467745332985b5e297908b8c22aaa2f871ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7472220c15e649fc9c7507f6f2a980fc037c1f236535bee2b813419071f41ad4 = $this->env->getExtension("native_profiler");
        $__internal_7472220c15e649fc9c7507f6f2a980fc037c1f236535bee2b813419071f41ad4->enter($__internal_7472220c15e649fc9c7507f6f2a980fc037c1f236535bee2b813419071f41ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7472220c15e649fc9c7507f6f2a980fc037c1f236535bee2b813419071f41ad4->leave($__internal_7472220c15e649fc9c7507f6f2a980fc037c1f236535bee2b813419071f41ad4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19e1ed8f98b95c85fe92d5e9de1ff26ecb6fa28ded8b902b3913635a9438c5bc = $this->env->getExtension("native_profiler");
        $__internal_19e1ed8f98b95c85fe92d5e9de1ff26ecb6fa28ded8b902b3913635a9438c5bc->enter($__internal_19e1ed8f98b95c85fe92d5e9de1ff26ecb6fa28ded8b902b3913635a9438c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_19e1ed8f98b95c85fe92d5e9de1ff26ecb6fa28ded8b902b3913635a9438c5bc->leave($__internal_19e1ed8f98b95c85fe92d5e9de1ff26ecb6fa28ded8b902b3913635a9438c5bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
