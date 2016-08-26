<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f6d89b7c1d36af65751c65e915ac71ddf49f35772f9f5b25f6d6605ee55b99da extends Twig_Template
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
        $__internal_3e36a6795ee8f09710f97051bc74d245e880f7da682adf13561fb2047773f4c1 = $this->env->getExtension("native_profiler");
        $__internal_3e36a6795ee8f09710f97051bc74d245e880f7da682adf13561fb2047773f4c1->enter($__internal_3e36a6795ee8f09710f97051bc74d245e880f7da682adf13561fb2047773f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3e36a6795ee8f09710f97051bc74d245e880f7da682adf13561fb2047773f4c1->leave($__internal_3e36a6795ee8f09710f97051bc74d245e880f7da682adf13561fb2047773f4c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
