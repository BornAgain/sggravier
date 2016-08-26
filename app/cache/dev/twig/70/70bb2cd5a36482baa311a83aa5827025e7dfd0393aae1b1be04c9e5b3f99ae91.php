<?php

/* DataSourceBundle:File:ajouter.html.twig */
class __TwigTemplate_8b77f8ac40fc764d5d47f90a05827a61632431b0e06683ad6cf570d82d62779f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DataSourceBundle:File:ajouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cb1339a7f4553ae48efc8c5b5acdf86e40a2de0d4299c61227388b113a93ccd = $this->env->getExtension("native_profiler");
        $__internal_1cb1339a7f4553ae48efc8c5b5acdf86e40a2de0d4299c61227388b113a93ccd->enter($__internal_1cb1339a7f4553ae48efc8c5b5acdf86e40a2de0d4299c61227388b113a93ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DataSourceBundle:File:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb1339a7f4553ae48efc8c5b5acdf86e40a2de0d4299c61227388b113a93ccd->leave($__internal_1cb1339a7f4553ae48efc8c5b5acdf86e40a2de0d4299c61227388b113a93ccd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55e65ab2d7c3a14d0eb28c09f374b285ed1766c760ab016088df78e944b84d6d = $this->env->getExtension("native_profiler");
        $__internal_55e65ab2d7c3a14d0eb28c09f374b285ed1766c760ab016088df78e944b84d6d->enter($__internal_55e65ab2d7c3a14d0eb28c09f374b285ed1766c760ab016088df78e944b84d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACMediaBundle:File:ajouter";
        
        $__internal_55e65ab2d7c3a14d0eb28c09f374b285ed1766c760ab016088df78e944b84d6d->leave($__internal_55e65ab2d7c3a14d0eb28c09f374b285ed1766c760ab016088df78e944b84d6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90935a2755e5084ce085addca6d53e1b6d74ce70a5afc9f1e3d52ed9ddd52b6f = $this->env->getExtension("native_profiler");
        $__internal_90935a2755e5084ce085addca6d53e1b6d74ce70a5afc9f1e3d52ed9ddd52b6f->enter($__internal_90935a2755e5084ce085addca6d53e1b6d74ce70a5afc9f1e3d52ed9ddd52b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Adding a new product</h1>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_90935a2755e5084ce085addca6d53e1b6d74ce70a5afc9f1e3d52ed9ddd52b6f->leave($__internal_90935a2755e5084ce085addca6d53e1b6d74ce70a5afc9f1e3d52ed9ddd52b6f_prof);

    }

    public function getTemplateName()
    {
        return "DataSourceBundle:File:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ACMediaBundle:File:ajouter{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Adding a new product</h1>*/
/* */
/* {{ form(form) }}*/
/* */
/* {% endblock %}*/
/* */
