<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65e1d2ca9aa2d8638252bdf55e2378dca81d2afc46fb022a454cf1a603568027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d2147d05958fa3af41ff1ce11e8181997b26ef24f3bade384b3bb33596439e2b = $this->env->getExtension("native_profiler");
        $__internal_d2147d05958fa3af41ff1ce11e8181997b26ef24f3bade384b3bb33596439e2b->enter($__internal_d2147d05958fa3af41ff1ce11e8181997b26ef24f3bade384b3bb33596439e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2147d05958fa3af41ff1ce11e8181997b26ef24f3bade384b3bb33596439e2b->leave($__internal_d2147d05958fa3af41ff1ce11e8181997b26ef24f3bade384b3bb33596439e2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d18958244c1c40a0fbe66524326e899e6aea2a31c45e0ffb3bf2ca7e2558d0e4 = $this->env->getExtension("native_profiler");
        $__internal_d18958244c1c40a0fbe66524326e899e6aea2a31c45e0ffb3bf2ca7e2558d0e4->enter($__internal_d18958244c1c40a0fbe66524326e899e6aea2a31c45e0ffb3bf2ca7e2558d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d18958244c1c40a0fbe66524326e899e6aea2a31c45e0ffb3bf2ca7e2558d0e4->leave($__internal_d18958244c1c40a0fbe66524326e899e6aea2a31c45e0ffb3bf2ca7e2558d0e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
