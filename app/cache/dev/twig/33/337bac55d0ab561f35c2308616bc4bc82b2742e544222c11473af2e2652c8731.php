<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_70d6d9640393eab186657d066e020b7bae5cd1c9ee0e9c17920c2dae5d789aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_f28c6325a8b3249bbd0fbcdca05bf0445fa783664951bb55a84cc1f8a6fc093e = $this->env->getExtension("native_profiler");
        $__internal_f28c6325a8b3249bbd0fbcdca05bf0445fa783664951bb55a84cc1f8a6fc093e->enter($__internal_f28c6325a8b3249bbd0fbcdca05bf0445fa783664951bb55a84cc1f8a6fc093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28c6325a8b3249bbd0fbcdca05bf0445fa783664951bb55a84cc1f8a6fc093e->leave($__internal_f28c6325a8b3249bbd0fbcdca05bf0445fa783664951bb55a84cc1f8a6fc093e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_926f0760ab59a3effc809ad4e5ed75ec1d34bc743c76c85a61001df3ce986ec1 = $this->env->getExtension("native_profiler");
        $__internal_926f0760ab59a3effc809ad4e5ed75ec1d34bc743c76c85a61001df3ce986ec1->enter($__internal_926f0760ab59a3effc809ad4e5ed75ec1d34bc743c76c85a61001df3ce986ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_926f0760ab59a3effc809ad4e5ed75ec1d34bc743c76c85a61001df3ce986ec1->leave($__internal_926f0760ab59a3effc809ad4e5ed75ec1d34bc743c76c85a61001df3ce986ec1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
