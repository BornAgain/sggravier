<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d5fc8e941f8fa25dee1d789d346514e2da6fe5ce413fd317bc365a16ed3ea57e extends Twig_Template
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
        $__internal_1be63c2faa6ab8ae449f2eff7403890c30016cb0a96ff8f2c5b3b01c8229b8a5 = $this->env->getExtension("native_profiler");
        $__internal_1be63c2faa6ab8ae449f2eff7403890c30016cb0a96ff8f2c5b3b01c8229b8a5->enter($__internal_1be63c2faa6ab8ae449f2eff7403890c30016cb0a96ff8f2c5b3b01c8229b8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1be63c2faa6ab8ae449f2eff7403890c30016cb0a96ff8f2c5b3b01c8229b8a5->leave($__internal_1be63c2faa6ab8ae449f2eff7403890c30016cb0a96ff8f2c5b3b01c8229b8a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
