<?php

/* @Sample/User/see.html.twig */
class __TwigTemplate_9fde6b0afd08435f9e9deb1300f2738ca4fe3e990b809d14c2f0800b38f10a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Sample/User/see.html.twig", 1);
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
        $__internal_f683e5c04e0a330d2ecbd1fd7e29ef364e453d95970d46853946127b6ee29790 = $this->env->getExtension("native_profiler");
        $__internal_f683e5c04e0a330d2ecbd1fd7e29ef364e453d95970d46853946127b6ee29790->enter($__internal_f683e5c04e0a330d2ecbd1fd7e29ef364e453d95970d46853946127b6ee29790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sample/User/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f683e5c04e0a330d2ecbd1fd7e29ef364e453d95970d46853946127b6ee29790->leave($__internal_f683e5c04e0a330d2ecbd1fd7e29ef364e453d95970d46853946127b6ee29790_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f3a056c59dfb83e0f0f6f98d3a0552c4eb5cef9affa59017eb22a91fd33d067 = $this->env->getExtension("native_profiler");
        $__internal_4f3a056c59dfb83e0f0f6f98d3a0552c4eb5cef9affa59017eb22a91fd33d067->enter($__internal_4f3a056c59dfb83e0f0f6f98d3a0552c4eb5cef9affa59017eb22a91fd33d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:See";
        
        $__internal_4f3a056c59dfb83e0f0f6f98d3a0552c4eb5cef9affa59017eb22a91fd33d067->leave($__internal_4f3a056c59dfb83e0f0f6f98d3a0552c4eb5cef9affa59017eb22a91fd33d067_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba14235cca9ae7c58799753e09a905da1582082fc6d3ef036de8a08e80450442 = $this->env->getExtension("native_profiler");
        $__internal_ba14235cca9ae7c58799753e09a905da1582082fc6d3ef036de8a08e80450442->enter($__internal_ba14235cca9ae7c58799753e09a905da1582082fc6d3ef036de8a08e80450442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:See page</h1>
";
        
        $__internal_ba14235cca9ae7c58799753e09a905da1582082fc6d3ef036de8a08e80450442->leave($__internal_ba14235cca9ae7c58799753e09a905da1582082fc6d3ef036de8a08e80450442_prof);

    }

    public function getTemplateName()
    {
        return "@Sample/User/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}SampleBundle:User:See{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:See page</h1>*/
/* {% endblock %}*/
/* */
