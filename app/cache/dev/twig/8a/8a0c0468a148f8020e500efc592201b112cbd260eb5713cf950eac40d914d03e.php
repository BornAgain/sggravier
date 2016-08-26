<?php

/* SampleBundle:User:see.html.twig */
class __TwigTemplate_b1a4d9e6f13d37ae9e8f7cc521963123b0f26013dabbcc3cc74239f0ed2899ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SampleBundle:User:see.html.twig", 1);
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
        $__internal_3af04df8f08485e7aaa5e69f7bf066c2d3d60dcd5f8217aabdceefb23f01b1bb = $this->env->getExtension("native_profiler");
        $__internal_3af04df8f08485e7aaa5e69f7bf066c2d3d60dcd5f8217aabdceefb23f01b1bb->enter($__internal_3af04df8f08485e7aaa5e69f7bf066c2d3d60dcd5f8217aabdceefb23f01b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SampleBundle:User:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af04df8f08485e7aaa5e69f7bf066c2d3d60dcd5f8217aabdceefb23f01b1bb->leave($__internal_3af04df8f08485e7aaa5e69f7bf066c2d3d60dcd5f8217aabdceefb23f01b1bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_252e2da88e92e6cb15959455ac7af7fca777ad290fa7ecc349de02ff74fcc1ca = $this->env->getExtension("native_profiler");
        $__internal_252e2da88e92e6cb15959455ac7af7fca777ad290fa7ecc349de02ff74fcc1ca->enter($__internal_252e2da88e92e6cb15959455ac7af7fca777ad290fa7ecc349de02ff74fcc1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:See";
        
        $__internal_252e2da88e92e6cb15959455ac7af7fca777ad290fa7ecc349de02ff74fcc1ca->leave($__internal_252e2da88e92e6cb15959455ac7af7fca777ad290fa7ecc349de02ff74fcc1ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3080f37586bc0091cc769c3ac18386b0bbcb32eb7291191e4b4c6bbbabac6333 = $this->env->getExtension("native_profiler");
        $__internal_3080f37586bc0091cc769c3ac18386b0bbcb32eb7291191e4b4c6bbbabac6333->enter($__internal_3080f37586bc0091cc769c3ac18386b0bbcb32eb7291191e4b4c6bbbabac6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:See page</h1>
";
        
        $__internal_3080f37586bc0091cc769c3ac18386b0bbcb32eb7291191e4b4c6bbbabac6333->leave($__internal_3080f37586bc0091cc769c3ac18386b0bbcb32eb7291191e4b4c6bbbabac6333_prof);

    }

    public function getTemplateName()
    {
        return "SampleBundle:User:see.html.twig";
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
