<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c801f248996c4377acb320567ebbe7c6def680dc6cf71583f61141824811cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237a41c300c1b78d60e3d222739ba7b85dc4f9e65f71e2d83ee786d88a328654 = $this->env->getExtension("native_profiler");
        $__internal_237a41c300c1b78d60e3d222739ba7b85dc4f9e65f71e2d83ee786d88a328654->enter($__internal_237a41c300c1b78d60e3d222739ba7b85dc4f9e65f71e2d83ee786d88a328654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237a41c300c1b78d60e3d222739ba7b85dc4f9e65f71e2d83ee786d88a328654->leave($__internal_237a41c300c1b78d60e3d222739ba7b85dc4f9e65f71e2d83ee786d88a328654_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91fa11d55bb97118dd89a826c0ced737a6929e2fab776673a23c84ec8f6df14f = $this->env->getExtension("native_profiler");
        $__internal_91fa11d55bb97118dd89a826c0ced737a6929e2fab776673a23c84ec8f6df14f->enter($__internal_91fa11d55bb97118dd89a826c0ced737a6929e2fab776673a23c84ec8f6df14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91fa11d55bb97118dd89a826c0ced737a6929e2fab776673a23c84ec8f6df14f->leave($__internal_91fa11d55bb97118dd89a826c0ced737a6929e2fab776673a23c84ec8f6df14f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9962bb251b9bd9f8acc30863df5c418ecd169a4223dfbd5825c123a10ecca54f = $this->env->getExtension("native_profiler");
        $__internal_9962bb251b9bd9f8acc30863df5c418ecd169a4223dfbd5825c123a10ecca54f->enter($__internal_9962bb251b9bd9f8acc30863df5c418ecd169a4223dfbd5825c123a10ecca54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9962bb251b9bd9f8acc30863df5c418ecd169a4223dfbd5825c123a10ecca54f->leave($__internal_9962bb251b9bd9f8acc30863df5c418ecd169a4223dfbd5825c123a10ecca54f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_309f2801c1d97e15a09b4438487e7e13fac86c32e7a4ede48d0d108029b20838 = $this->env->getExtension("native_profiler");
        $__internal_309f2801c1d97e15a09b4438487e7e13fac86c32e7a4ede48d0d108029b20838->enter($__internal_309f2801c1d97e15a09b4438487e7e13fac86c32e7a4ede48d0d108029b20838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_309f2801c1d97e15a09b4438487e7e13fac86c32e7a4ede48d0d108029b20838->leave($__internal_309f2801c1d97e15a09b4438487e7e13fac86c32e7a4ede48d0d108029b20838_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
