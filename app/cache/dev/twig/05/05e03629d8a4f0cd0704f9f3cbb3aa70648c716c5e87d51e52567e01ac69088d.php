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
        $__internal_b8936c4abde7213ae65325ff15df86b8ba7fe8b8ba51415f05b1b58598d5cdcb = $this->env->getExtension("native_profiler");
        $__internal_b8936c4abde7213ae65325ff15df86b8ba7fe8b8ba51415f05b1b58598d5cdcb->enter($__internal_b8936c4abde7213ae65325ff15df86b8ba7fe8b8ba51415f05b1b58598d5cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8936c4abde7213ae65325ff15df86b8ba7fe8b8ba51415f05b1b58598d5cdcb->leave($__internal_b8936c4abde7213ae65325ff15df86b8ba7fe8b8ba51415f05b1b58598d5cdcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2776c3608016b19a0f5b70788ee3e169c79069177d820c43b6c7540ba99edf7 = $this->env->getExtension("native_profiler");
        $__internal_e2776c3608016b19a0f5b70788ee3e169c79069177d820c43b6c7540ba99edf7->enter($__internal_e2776c3608016b19a0f5b70788ee3e169c79069177d820c43b6c7540ba99edf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e2776c3608016b19a0f5b70788ee3e169c79069177d820c43b6c7540ba99edf7->leave($__internal_e2776c3608016b19a0f5b70788ee3e169c79069177d820c43b6c7540ba99edf7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_178ceda1d886a0a0976513f023b9764552d50abc9ca103cdab4326f6eede0e1e = $this->env->getExtension("native_profiler");
        $__internal_178ceda1d886a0a0976513f023b9764552d50abc9ca103cdab4326f6eede0e1e->enter($__internal_178ceda1d886a0a0976513f023b9764552d50abc9ca103cdab4326f6eede0e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_178ceda1d886a0a0976513f023b9764552d50abc9ca103cdab4326f6eede0e1e->leave($__internal_178ceda1d886a0a0976513f023b9764552d50abc9ca103cdab4326f6eede0e1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1399daf9eb653cba3d7429ecf2b7358938423f5f39538cb1ae6a7d3f108eb8 = $this->env->getExtension("native_profiler");
        $__internal_ff1399daf9eb653cba3d7429ecf2b7358938423f5f39538cb1ae6a7d3f108eb8->enter($__internal_ff1399daf9eb653cba3d7429ecf2b7358938423f5f39538cb1ae6a7d3f108eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff1399daf9eb653cba3d7429ecf2b7358938423f5f39538cb1ae6a7d3f108eb8->leave($__internal_ff1399daf9eb653cba3d7429ecf2b7358938423f5f39538cb1ae6a7d3f108eb8_prof);

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
