<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8852b844087a78cac07d92095efc8b301ce0e32965d24e2c49866e3fb84eb0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30ff764331a7cec1f26b080506aca359f671b389e8fa32894fb6b96624be5deb = $this->env->getExtension("native_profiler");
        $__internal_30ff764331a7cec1f26b080506aca359f671b389e8fa32894fb6b96624be5deb->enter($__internal_30ff764331a7cec1f26b080506aca359f671b389e8fa32894fb6b96624be5deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_30ff764331a7cec1f26b080506aca359f671b389e8fa32894fb6b96624be5deb->leave($__internal_30ff764331a7cec1f26b080506aca359f671b389e8fa32894fb6b96624be5deb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
