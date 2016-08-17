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
        $__internal_c2858d00818f17d7b13cf38d287ee51c2cef8e6bc3bacca05e3d225ba9008145 = $this->env->getExtension("native_profiler");
        $__internal_c2858d00818f17d7b13cf38d287ee51c2cef8e6bc3bacca05e3d225ba9008145->enter($__internal_c2858d00818f17d7b13cf38d287ee51c2cef8e6bc3bacca05e3d225ba9008145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2858d00818f17d7b13cf38d287ee51c2cef8e6bc3bacca05e3d225ba9008145->leave($__internal_c2858d00818f17d7b13cf38d287ee51c2cef8e6bc3bacca05e3d225ba9008145_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf46e01d66170d4919adfa404a8dac033c70334a550814a3897c95940d0b9044 = $this->env->getExtension("native_profiler");
        $__internal_cf46e01d66170d4919adfa404a8dac033c70334a550814a3897c95940d0b9044->enter($__internal_cf46e01d66170d4919adfa404a8dac033c70334a550814a3897c95940d0b9044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf46e01d66170d4919adfa404a8dac033c70334a550814a3897c95940d0b9044->leave($__internal_cf46e01d66170d4919adfa404a8dac033c70334a550814a3897c95940d0b9044_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e929704e51492d7671609073d9dddcf6e4f6d9ea8de2e77c1cf61347dde6533 = $this->env->getExtension("native_profiler");
        $__internal_7e929704e51492d7671609073d9dddcf6e4f6d9ea8de2e77c1cf61347dde6533->enter($__internal_7e929704e51492d7671609073d9dddcf6e4f6d9ea8de2e77c1cf61347dde6533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e929704e51492d7671609073d9dddcf6e4f6d9ea8de2e77c1cf61347dde6533->leave($__internal_7e929704e51492d7671609073d9dddcf6e4f6d9ea8de2e77c1cf61347dde6533_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7ee2fe41b91ce4ff10bc4a265d69b777072404bbd31240fa2c020eec30c1796 = $this->env->getExtension("native_profiler");
        $__internal_d7ee2fe41b91ce4ff10bc4a265d69b777072404bbd31240fa2c020eec30c1796->enter($__internal_d7ee2fe41b91ce4ff10bc4a265d69b777072404bbd31240fa2c020eec30c1796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7ee2fe41b91ce4ff10bc4a265d69b777072404bbd31240fa2c020eec30c1796->leave($__internal_d7ee2fe41b91ce4ff10bc4a265d69b777072404bbd31240fa2c020eec30c1796_prof);

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