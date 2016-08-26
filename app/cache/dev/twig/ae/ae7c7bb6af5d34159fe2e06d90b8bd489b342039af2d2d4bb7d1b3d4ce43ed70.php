<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_99e4baa0594fa5091281a682b41bedb36defd13ac8d49325467c6e91c2e14b8c extends Twig_Template
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
        $__internal_436e431210e5a4d83c4033aedade9ba2944ca43356fadb60deeae80f4c30c4a9 = $this->env->getExtension("native_profiler");
        $__internal_436e431210e5a4d83c4033aedade9ba2944ca43356fadb60deeae80f4c30c4a9->enter($__internal_436e431210e5a4d83c4033aedade9ba2944ca43356fadb60deeae80f4c30c4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_436e431210e5a4d83c4033aedade9ba2944ca43356fadb60deeae80f4c30c4a9->leave($__internal_436e431210e5a4d83c4033aedade9ba2944ca43356fadb60deeae80f4c30c4a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
