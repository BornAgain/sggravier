<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_90c6903ed4684de4424098b0c47f5cebe25aacfebe73fbf4b2597ef0c22cb9e2 extends Twig_Template
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
        $__internal_bf661b6685df5fd6831f290d3714e2d3beb9f2db37e20ad67f4a594639d3c172 = $this->env->getExtension("native_profiler");
        $__internal_bf661b6685df5fd6831f290d3714e2d3beb9f2db37e20ad67f4a594639d3c172->enter($__internal_bf661b6685df5fd6831f290d3714e2d3beb9f2db37e20ad67f4a594639d3c172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bf661b6685df5fd6831f290d3714e2d3beb9f2db37e20ad67f4a594639d3c172->leave($__internal_bf661b6685df5fd6831f290d3714e2d3beb9f2db37e20ad67f4a594639d3c172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
