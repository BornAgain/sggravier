<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_21335870dd55970e122080d192c0e12fde49c6c64b92ad655a5787a8d6bb2e52 extends Twig_Template
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
        $__internal_1cda1f3312b245607e64e0cf2e7713bfc8afb15efabc9961b664b8634d11dea3 = $this->env->getExtension("native_profiler");
        $__internal_1cda1f3312b245607e64e0cf2e7713bfc8afb15efabc9961b664b8634d11dea3->enter($__internal_1cda1f3312b245607e64e0cf2e7713bfc8afb15efabc9961b664b8634d11dea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1cda1f3312b245607e64e0cf2e7713bfc8afb15efabc9961b664b8634d11dea3->leave($__internal_1cda1f3312b245607e64e0cf2e7713bfc8afb15efabc9961b664b8634d11dea3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
