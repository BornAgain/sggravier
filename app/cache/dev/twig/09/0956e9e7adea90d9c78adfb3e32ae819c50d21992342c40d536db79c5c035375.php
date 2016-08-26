<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c56a1fbb39b42dd4ec7c37256acbe8426ab6965cf64d6764c399026840d4e2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1e4cd833a232e0746cdf5790aaff3782ad873e36bbeaa447cdc4baf4cc0a6eda = $this->env->getExtension("native_profiler");
        $__internal_1e4cd833a232e0746cdf5790aaff3782ad873e36bbeaa447cdc4baf4cc0a6eda->enter($__internal_1e4cd833a232e0746cdf5790aaff3782ad873e36bbeaa447cdc4baf4cc0a6eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4cd833a232e0746cdf5790aaff3782ad873e36bbeaa447cdc4baf4cc0a6eda->leave($__internal_1e4cd833a232e0746cdf5790aaff3782ad873e36bbeaa447cdc4baf4cc0a6eda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9148172cbc99eab0ab1994deb9446dbdcdba76fa0585199cd84f8a32f006015d = $this->env->getExtension("native_profiler");
        $__internal_9148172cbc99eab0ab1994deb9446dbdcdba76fa0585199cd84f8a32f006015d->enter($__internal_9148172cbc99eab0ab1994deb9446dbdcdba76fa0585199cd84f8a32f006015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_9148172cbc99eab0ab1994deb9446dbdcdba76fa0585199cd84f8a32f006015d->leave($__internal_9148172cbc99eab0ab1994deb9446dbdcdba76fa0585199cd84f8a32f006015d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
