<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c49f35c7630321caaae37e2f1b7daac75add372925f055f43de28a27eefdc70a extends Twig_Template
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
        $__internal_bb7ef3edf8fb6e22f8c9eb1d2b5cddc4cdccd64be6e381bf9225c92391ef8a20 = $this->env->getExtension("native_profiler");
        $__internal_bb7ef3edf8fb6e22f8c9eb1d2b5cddc4cdccd64be6e381bf9225c92391ef8a20->enter($__internal_bb7ef3edf8fb6e22f8c9eb1d2b5cddc4cdccd64be6e381bf9225c92391ef8a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bb7ef3edf8fb6e22f8c9eb1d2b5cddc4cdccd64be6e381bf9225c92391ef8a20->leave($__internal_bb7ef3edf8fb6e22f8c9eb1d2b5cddc4cdccd64be6e381bf9225c92391ef8a20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
