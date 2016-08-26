<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d941542e7a95e3b3ede5cc67558cfbcf035afb9a93bd9406858e5e46f35fdd9d extends Twig_Template
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
        $__internal_989ca94ec02ce39167d04734f8805aa1b1a2a8bc178e4675131aec144177f823 = $this->env->getExtension("native_profiler");
        $__internal_989ca94ec02ce39167d04734f8805aa1b1a2a8bc178e4675131aec144177f823->enter($__internal_989ca94ec02ce39167d04734f8805aa1b1a2a8bc178e4675131aec144177f823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_989ca94ec02ce39167d04734f8805aa1b1a2a8bc178e4675131aec144177f823->leave($__internal_989ca94ec02ce39167d04734f8805aa1b1a2a8bc178e4675131aec144177f823_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
