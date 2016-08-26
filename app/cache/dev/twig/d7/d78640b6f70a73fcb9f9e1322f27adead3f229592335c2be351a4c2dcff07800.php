<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_19256cc8c6be9ec5cd9c125cb8ee9ec5157805bd8344e0d2cb30657d2f499e30 extends Twig_Template
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
        $__internal_8ada7bf28f78883a068711df06b2ae02e0622af4568206511e07425853a64bae = $this->env->getExtension("native_profiler");
        $__internal_8ada7bf28f78883a068711df06b2ae02e0622af4568206511e07425853a64bae->enter($__internal_8ada7bf28f78883a068711df06b2ae02e0622af4568206511e07425853a64bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8ada7bf28f78883a068711df06b2ae02e0622af4568206511e07425853a64bae->leave($__internal_8ada7bf28f78883a068711df06b2ae02e0622af4568206511e07425853a64bae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
