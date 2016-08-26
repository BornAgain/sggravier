<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_db8b7a4a1a6f4bb287a8eab90ea06c046e6d8df23f7bd458993fda0f94c8650b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_98174d9e4564b65e41f9687963c6c9b706b60e1acfce387aa3959006bae69f7c = $this->env->getExtension("native_profiler");
        $__internal_98174d9e4564b65e41f9687963c6c9b706b60e1acfce387aa3959006bae69f7c->enter($__internal_98174d9e4564b65e41f9687963c6c9b706b60e1acfce387aa3959006bae69f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98174d9e4564b65e41f9687963c6c9b706b60e1acfce387aa3959006bae69f7c->leave($__internal_98174d9e4564b65e41f9687963c6c9b706b60e1acfce387aa3959006bae69f7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb447b181f24532b92eba1fd1a95acf74fb808bb371bf5d8382ad1316a4c68bf = $this->env->getExtension("native_profiler");
        $__internal_bb447b181f24532b92eba1fd1a95acf74fb808bb371bf5d8382ad1316a4c68bf->enter($__internal_bb447b181f24532b92eba1fd1a95acf74fb808bb371bf5d8382ad1316a4c68bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bb447b181f24532b92eba1fd1a95acf74fb808bb371bf5d8382ad1316a4c68bf->leave($__internal_bb447b181f24532b92eba1fd1a95acf74fb808bb371bf5d8382ad1316a4c68bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
