<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_9052ce87c60ec8d2450f43cf5f91da48c4f209c10b1903a3d4a28d18c8de2fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_b81cd3217c847925242930a1a5f7b4331a45204a5775055a2901fd00b8a8045f = $this->env->getExtension("native_profiler");
        $__internal_b81cd3217c847925242930a1a5f7b4331a45204a5775055a2901fd00b8a8045f->enter($__internal_b81cd3217c847925242930a1a5f7b4331a45204a5775055a2901fd00b8a8045f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81cd3217c847925242930a1a5f7b4331a45204a5775055a2901fd00b8a8045f->leave($__internal_b81cd3217c847925242930a1a5f7b4331a45204a5775055a2901fd00b8a8045f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42c4a22c446c36cf0ee3e5d4ee3a069c0c091237b365eba037711d09368b6851 = $this->env->getExtension("native_profiler");
        $__internal_42c4a22c446c36cf0ee3e5d4ee3a069c0c091237b365eba037711d09368b6851->enter($__internal_42c4a22c446c36cf0ee3e5d4ee3a069c0c091237b365eba037711d09368b6851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_42c4a22c446c36cf0ee3e5d4ee3a069c0c091237b365eba037711d09368b6851->leave($__internal_42c4a22c446c36cf0ee3e5d4ee3a069c0c091237b365eba037711d09368b6851_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
