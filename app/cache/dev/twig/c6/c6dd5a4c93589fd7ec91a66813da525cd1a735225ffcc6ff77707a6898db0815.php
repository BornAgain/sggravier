<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f35a1bb70d7714d8404ab07c5a52563fc749483d17f98e0cc1a1308b49b38da2 extends Twig_Template
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
        $__internal_6bd9ce41375213821dc1d8f4011248916929c2acacb9e7fb2332dbb42586570c = $this->env->getExtension("native_profiler");
        $__internal_6bd9ce41375213821dc1d8f4011248916929c2acacb9e7fb2332dbb42586570c->enter($__internal_6bd9ce41375213821dc1d8f4011248916929c2acacb9e7fb2332dbb42586570c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6bd9ce41375213821dc1d8f4011248916929c2acacb9e7fb2332dbb42586570c->leave($__internal_6bd9ce41375213821dc1d8f4011248916929c2acacb9e7fb2332dbb42586570c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
