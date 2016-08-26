<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4ab606cae9dd29af0aa3d68f4f6bb6d60bfcb3384ebc98bd9e49896d53aa7251 extends Twig_Template
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
        $__internal_378ba237bbe1fbc9211a5b89138612b79bc9d832fce43e9fe5cc45ae54a13cda = $this->env->getExtension("native_profiler");
        $__internal_378ba237bbe1fbc9211a5b89138612b79bc9d832fce43e9fe5cc45ae54a13cda->enter($__internal_378ba237bbe1fbc9211a5b89138612b79bc9d832fce43e9fe5cc45ae54a13cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_378ba237bbe1fbc9211a5b89138612b79bc9d832fce43e9fe5cc45ae54a13cda->leave($__internal_378ba237bbe1fbc9211a5b89138612b79bc9d832fce43e9fe5cc45ae54a13cda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
