<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_a75d6c3d619b2218cef253752d1709e472ced12fb07c201926af8fed28108d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a738a5fb7a1c866d18a2704d87aeeba21d78b38863f6435a9032695a7fc70f41 = $this->env->getExtension("native_profiler");
        $__internal_a738a5fb7a1c866d18a2704d87aeeba21d78b38863f6435a9032695a7fc70f41->enter($__internal_a738a5fb7a1c866d18a2704d87aeeba21d78b38863f6435a9032695a7fc70f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a738a5fb7a1c866d18a2704d87aeeba21d78b38863f6435a9032695a7fc70f41->leave($__internal_a738a5fb7a1c866d18a2704d87aeeba21d78b38863f6435a9032695a7fc70f41_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b667ee5f3bce37333826d464ad772889a8221b224527bc1f2276fd382bed731b = $this->env->getExtension("native_profiler");
        $__internal_b667ee5f3bce37333826d464ad772889a8221b224527bc1f2276fd382bed731b->enter($__internal_b667ee5f3bce37333826d464ad772889a8221b224527bc1f2276fd382bed731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b667ee5f3bce37333826d464ad772889a8221b224527bc1f2276fd382bed731b->leave($__internal_b667ee5f3bce37333826d464ad772889a8221b224527bc1f2276fd382bed731b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4044022b1c907d6e3ee072b0704a1a354f2c12f84a3a636a34b25093b46354cf = $this->env->getExtension("native_profiler");
        $__internal_4044022b1c907d6e3ee072b0704a1a354f2c12f84a3a636a34b25093b46354cf->enter($__internal_4044022b1c907d6e3ee072b0704a1a354f2c12f84a3a636a34b25093b46354cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4044022b1c907d6e3ee072b0704a1a354f2c12f84a3a636a34b25093b46354cf->leave($__internal_4044022b1c907d6e3ee072b0704a1a354f2c12f84a3a636a34b25093b46354cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f40fc2c627e37505df231b390a036cc06fd0006bf6bc9d61bcbdda7609e58f53 = $this->env->getExtension("native_profiler");
        $__internal_f40fc2c627e37505df231b390a036cc06fd0006bf6bc9d61bcbdda7609e58f53->enter($__internal_f40fc2c627e37505df231b390a036cc06fd0006bf6bc9d61bcbdda7609e58f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f40fc2c627e37505df231b390a036cc06fd0006bf6bc9d61bcbdda7609e58f53->leave($__internal_f40fc2c627e37505df231b390a036cc06fd0006bf6bc9d61bcbdda7609e58f53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
