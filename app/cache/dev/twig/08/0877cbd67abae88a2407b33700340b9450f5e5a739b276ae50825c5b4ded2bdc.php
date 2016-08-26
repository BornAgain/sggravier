<?php

/* @Sample/User/update.html.twig */
class __TwigTemplate_ee0e620ffdd30ad3e7d6bb91382115ddd0891f81faf0b159b0614f3b20d1a084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Sample/User/update.html.twig", 1);
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
        $__internal_7c774ac33323ef52d0a88c64d5f3b8fd2ea3e4ea3831252d5dabc5073e95de46 = $this->env->getExtension("native_profiler");
        $__internal_7c774ac33323ef52d0a88c64d5f3b8fd2ea3e4ea3831252d5dabc5073e95de46->enter($__internal_7c774ac33323ef52d0a88c64d5f3b8fd2ea3e4ea3831252d5dabc5073e95de46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sample/User/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c774ac33323ef52d0a88c64d5f3b8fd2ea3e4ea3831252d5dabc5073e95de46->leave($__internal_7c774ac33323ef52d0a88c64d5f3b8fd2ea3e4ea3831252d5dabc5073e95de46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69a218c07eb96a7ad42535d576f07c71958480d6ac42d4bd82a3866ea44a81e5 = $this->env->getExtension("native_profiler");
        $__internal_69a218c07eb96a7ad42535d576f07c71958480d6ac42d4bd82a3866ea44a81e5->enter($__internal_69a218c07eb96a7ad42535d576f07c71958480d6ac42d4bd82a3866ea44a81e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:update";
        
        $__internal_69a218c07eb96a7ad42535d576f07c71958480d6ac42d4bd82a3866ea44a81e5->leave($__internal_69a218c07eb96a7ad42535d576f07c71958480d6ac42d4bd82a3866ea44a81e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a35f196a8d9f956e6d155b352c75c91bf9cf63dff62cb1796ceb07366842c2 = $this->env->getExtension("native_profiler");
        $__internal_52a35f196a8d9f956e6d155b352c75c91bf9cf63dff62cb1796ceb07366842c2->enter($__internal_52a35f196a8d9f956e6d155b352c75c91bf9cf63dff62cb1796ceb07366842c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:update page</h1>
";
        
        $__internal_52a35f196a8d9f956e6d155b352c75c91bf9cf63dff62cb1796ceb07366842c2->leave($__internal_52a35f196a8d9f956e6d155b352c75c91bf9cf63dff62cb1796ceb07366842c2_prof);

    }

    public function getTemplateName()
    {
        return "@Sample/User/update.html.twig";
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
/* {% block title %}SampleBundle:User:update{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:update page</h1>*/
/* {% endblock %}*/
/* */
