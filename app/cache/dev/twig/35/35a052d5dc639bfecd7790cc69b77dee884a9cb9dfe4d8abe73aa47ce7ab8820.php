<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4d6489d0801ca4bdee77232f32e4da6cb4efed73b6de3451ba429780b634af6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_243cce9993ee83ef3c59db727489d9a4f71fa3f7fa189f09cfa507879f4e65c3 = $this->env->getExtension("native_profiler");
        $__internal_243cce9993ee83ef3c59db727489d9a4f71fa3f7fa189f09cfa507879f4e65c3->enter($__internal_243cce9993ee83ef3c59db727489d9a4f71fa3f7fa189f09cfa507879f4e65c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243cce9993ee83ef3c59db727489d9a4f71fa3f7fa189f09cfa507879f4e65c3->leave($__internal_243cce9993ee83ef3c59db727489d9a4f71fa3f7fa189f09cfa507879f4e65c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c9b9a87859ca83999338fbb5ce972bc5c47abced63744c17e72a5cb6834b102 = $this->env->getExtension("native_profiler");
        $__internal_3c9b9a87859ca83999338fbb5ce972bc5c47abced63744c17e72a5cb6834b102->enter($__internal_3c9b9a87859ca83999338fbb5ce972bc5c47abced63744c17e72a5cb6834b102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3c9b9a87859ca83999338fbb5ce972bc5c47abced63744c17e72a5cb6834b102->leave($__internal_3c9b9a87859ca83999338fbb5ce972bc5c47abced63744c17e72a5cb6834b102_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
