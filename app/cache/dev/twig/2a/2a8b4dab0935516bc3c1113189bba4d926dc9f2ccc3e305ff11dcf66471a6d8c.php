<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_216745787ccabbac02a6c3ff6b735d701b981c6ea63e20e14a115ad007401d8f extends Twig_Template
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
        $__internal_9cf80230769f415dadbf1d0ae4c7300668e948db0b5c0f9638d0265dfafe4d50 = $this->env->getExtension("native_profiler");
        $__internal_9cf80230769f415dadbf1d0ae4c7300668e948db0b5c0f9638d0265dfafe4d50->enter($__internal_9cf80230769f415dadbf1d0ae4c7300668e948db0b5c0f9638d0265dfafe4d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf80230769f415dadbf1d0ae4c7300668e948db0b5c0f9638d0265dfafe4d50->leave($__internal_9cf80230769f415dadbf1d0ae4c7300668e948db0b5c0f9638d0265dfafe4d50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0f0baaa0213d1dcd567c2c4e907d8436b4ef37830e02292b263d79bd787b851 = $this->env->getExtension("native_profiler");
        $__internal_b0f0baaa0213d1dcd567c2c4e907d8436b4ef37830e02292b263d79bd787b851->enter($__internal_b0f0baaa0213d1dcd567c2c4e907d8436b4ef37830e02292b263d79bd787b851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0f0baaa0213d1dcd567c2c4e907d8436b4ef37830e02292b263d79bd787b851->leave($__internal_b0f0baaa0213d1dcd567c2c4e907d8436b4ef37830e02292b263d79bd787b851_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e010dfdf5f82ee07f239b413825dd511d1b725b0315e3c7879138bd381feb2 = $this->env->getExtension("native_profiler");
        $__internal_93e010dfdf5f82ee07f239b413825dd511d1b725b0315e3c7879138bd381feb2->enter($__internal_93e010dfdf5f82ee07f239b413825dd511d1b725b0315e3c7879138bd381feb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93e010dfdf5f82ee07f239b413825dd511d1b725b0315e3c7879138bd381feb2->leave($__internal_93e010dfdf5f82ee07f239b413825dd511d1b725b0315e3c7879138bd381feb2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b5590c4e78a244514f1a129079c8ea3d0bee0087815fa1563cebf7d8c28919 = $this->env->getExtension("native_profiler");
        $__internal_49b5590c4e78a244514f1a129079c8ea3d0bee0087815fa1563cebf7d8c28919->enter($__internal_49b5590c4e78a244514f1a129079c8ea3d0bee0087815fa1563cebf7d8c28919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_49b5590c4e78a244514f1a129079c8ea3d0bee0087815fa1563cebf7d8c28919->leave($__internal_49b5590c4e78a244514f1a129079c8ea3d0bee0087815fa1563cebf7d8c28919_prof);

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
