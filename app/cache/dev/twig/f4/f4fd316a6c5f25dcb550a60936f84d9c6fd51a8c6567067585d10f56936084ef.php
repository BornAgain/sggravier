<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9299250bf378a7313162add379bf0953461c403cb170996ea57cbdac3826b1fb extends Twig_Template
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
        $__internal_f34acbce98f75fab43aa9e3ecd13626edb30190c5f87d0e73cdb388d196989d5 = $this->env->getExtension("native_profiler");
        $__internal_f34acbce98f75fab43aa9e3ecd13626edb30190c5f87d0e73cdb388d196989d5->enter($__internal_f34acbce98f75fab43aa9e3ecd13626edb30190c5f87d0e73cdb388d196989d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f34acbce98f75fab43aa9e3ecd13626edb30190c5f87d0e73cdb388d196989d5->leave($__internal_f34acbce98f75fab43aa9e3ecd13626edb30190c5f87d0e73cdb388d196989d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
