<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74205f008662b49130d6b474f544772fc2515a6f37f10e5202b717409a17c8fe extends Twig_Template
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
        $__internal_384658d4e1de75556030411804699257209938e9a7c02b5f52c3cb681d1d828d = $this->env->getExtension("native_profiler");
        $__internal_384658d4e1de75556030411804699257209938e9a7c02b5f52c3cb681d1d828d->enter($__internal_384658d4e1de75556030411804699257209938e9a7c02b5f52c3cb681d1d828d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384658d4e1de75556030411804699257209938e9a7c02b5f52c3cb681d1d828d->leave($__internal_384658d4e1de75556030411804699257209938e9a7c02b5f52c3cb681d1d828d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_722d3c0d18b70be9d834a31c4f19e2ccc65339a2c0ca29b0935a4cd6819f4388 = $this->env->getExtension("native_profiler");
        $__internal_722d3c0d18b70be9d834a31c4f19e2ccc65339a2c0ca29b0935a4cd6819f4388->enter($__internal_722d3c0d18b70be9d834a31c4f19e2ccc65339a2c0ca29b0935a4cd6819f4388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_722d3c0d18b70be9d834a31c4f19e2ccc65339a2c0ca29b0935a4cd6819f4388->leave($__internal_722d3c0d18b70be9d834a31c4f19e2ccc65339a2c0ca29b0935a4cd6819f4388_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e4f4ee346b9af3e24bdc627e217593a1206c5a233296aa99335d72cf8dbd78c = $this->env->getExtension("native_profiler");
        $__internal_1e4f4ee346b9af3e24bdc627e217593a1206c5a233296aa99335d72cf8dbd78c->enter($__internal_1e4f4ee346b9af3e24bdc627e217593a1206c5a233296aa99335d72cf8dbd78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e4f4ee346b9af3e24bdc627e217593a1206c5a233296aa99335d72cf8dbd78c->leave($__internal_1e4f4ee346b9af3e24bdc627e217593a1206c5a233296aa99335d72cf8dbd78c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a54263946a856057922061915c4b904846b60d5c80f4fb30a0b4b16be1ea200 = $this->env->getExtension("native_profiler");
        $__internal_0a54263946a856057922061915c4b904846b60d5c80f4fb30a0b4b16be1ea200->enter($__internal_0a54263946a856057922061915c4b904846b60d5c80f4fb30a0b4b16be1ea200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0a54263946a856057922061915c4b904846b60d5c80f4fb30a0b4b16be1ea200->leave($__internal_0a54263946a856057922061915c4b904846b60d5c80f4fb30a0b4b16be1ea200_prof);

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
