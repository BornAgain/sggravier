<?php

/* @DataSource/File/ajouter.html.twig */
class __TwigTemplate_812b85705c2a6d130b24c93d3d920aafce6ddd91497fa7cac6c971b8e00d74fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DataSource/File/ajouter.html.twig", 1);
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
        $__internal_9b3fdf136d14f0b7547111f8f67a1ed8cb69ad80bb864920fcf185fe46fac966 = $this->env->getExtension("native_profiler");
        $__internal_9b3fdf136d14f0b7547111f8f67a1ed8cb69ad80bb864920fcf185fe46fac966->enter($__internal_9b3fdf136d14f0b7547111f8f67a1ed8cb69ad80bb864920fcf185fe46fac966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataSource/File/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3fdf136d14f0b7547111f8f67a1ed8cb69ad80bb864920fcf185fe46fac966->leave($__internal_9b3fdf136d14f0b7547111f8f67a1ed8cb69ad80bb864920fcf185fe46fac966_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fc1163064cf200871eeba4db0473480cb0c69f92ad82704be9cb86f82faa15e = $this->env->getExtension("native_profiler");
        $__internal_6fc1163064cf200871eeba4db0473480cb0c69f92ad82704be9cb86f82faa15e->enter($__internal_6fc1163064cf200871eeba4db0473480cb0c69f92ad82704be9cb86f82faa15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ACMediaBundle:File:ajouter";
        
        $__internal_6fc1163064cf200871eeba4db0473480cb0c69f92ad82704be9cb86f82faa15e->leave($__internal_6fc1163064cf200871eeba4db0473480cb0c69f92ad82704be9cb86f82faa15e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43de9b4a3df1d503f118755a4eafe5c9a10e95700d8e10b8cc4cf43e69c76824 = $this->env->getExtension("native_profiler");
        $__internal_43de9b4a3df1d503f118755a4eafe5c9a10e95700d8e10b8cc4cf43e69c76824->enter($__internal_43de9b4a3df1d503f118755a4eafe5c9a10e95700d8e10b8cc4cf43e69c76824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Adding a new product</h1>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_43de9b4a3df1d503f118755a4eafe5c9a10e95700d8e10b8cc4cf43e69c76824->leave($__internal_43de9b4a3df1d503f118755a4eafe5c9a10e95700d8e10b8cc4cf43e69c76824_prof);

    }

    public function getTemplateName()
    {
        return "@DataSource/File/ajouter.html.twig";
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
