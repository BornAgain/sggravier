<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d419d72199f87e5d270b3e9736b4c03baf2a89c84d26453d0e6b3d4349294ef6 extends Twig_Template
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
        $__internal_6f0b8dae4a1064e62aa06b88eb08e01530cdbd4c4dffed3257a2d2f0ed6722ac = $this->env->getExtension("native_profiler");
        $__internal_6f0b8dae4a1064e62aa06b88eb08e01530cdbd4c4dffed3257a2d2f0ed6722ac->enter($__internal_6f0b8dae4a1064e62aa06b88eb08e01530cdbd4c4dffed3257a2d2f0ed6722ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6f0b8dae4a1064e62aa06b88eb08e01530cdbd4c4dffed3257a2d2f0ed6722ac->leave($__internal_6f0b8dae4a1064e62aa06b88eb08e01530cdbd4c4dffed3257a2d2f0ed6722ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
