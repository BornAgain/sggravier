<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5e2d367ddbdc8bf126216dc07db950af719104cd1a8ae5ce84f1a9ce021b0845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_fff7364c15a3d1a5649cbc6cd83fd736e5b5239ff3d358702326e05a31a1a746 = $this->env->getExtension("native_profiler");
        $__internal_fff7364c15a3d1a5649cbc6cd83fd736e5b5239ff3d358702326e05a31a1a746->enter($__internal_fff7364c15a3d1a5649cbc6cd83fd736e5b5239ff3d358702326e05a31a1a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff7364c15a3d1a5649cbc6cd83fd736e5b5239ff3d358702326e05a31a1a746->leave($__internal_fff7364c15a3d1a5649cbc6cd83fd736e5b5239ff3d358702326e05a31a1a746_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6f40b27bdb9b893a5d3709cb429312bb88824ba7dc6360e1714f96378ce6c32 = $this->env->getExtension("native_profiler");
        $__internal_d6f40b27bdb9b893a5d3709cb429312bb88824ba7dc6360e1714f96378ce6c32->enter($__internal_d6f40b27bdb9b893a5d3709cb429312bb88824ba7dc6360e1714f96378ce6c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d6f40b27bdb9b893a5d3709cb429312bb88824ba7dc6360e1714f96378ce6c32->leave($__internal_d6f40b27bdb9b893a5d3709cb429312bb88824ba7dc6360e1714f96378ce6c32_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
