<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7fb7238572ceee7cb877c001032c3ded6ae3f504ab21fe192e390905636708bd extends Twig_Template
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
        $__internal_522d9927d44da21171df6260a6f1a267525261059a0520f28293dd95975e3a9b = $this->env->getExtension("native_profiler");
        $__internal_522d9927d44da21171df6260a6f1a267525261059a0520f28293dd95975e3a9b->enter($__internal_522d9927d44da21171df6260a6f1a267525261059a0520f28293dd95975e3a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_522d9927d44da21171df6260a6f1a267525261059a0520f28293dd95975e3a9b->leave($__internal_522d9927d44da21171df6260a6f1a267525261059a0520f28293dd95975e3a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
