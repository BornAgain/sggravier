<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ec53245e9bfcdc82527f71c36b8304b720c03fb50d822a7f5301646b0e169b8f extends Twig_Template
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
        $__internal_85e3a69d143a746270540fdc9feb230929259501b8865cb98d8b5b50644ad843 = $this->env->getExtension("native_profiler");
        $__internal_85e3a69d143a746270540fdc9feb230929259501b8865cb98d8b5b50644ad843->enter($__internal_85e3a69d143a746270540fdc9feb230929259501b8865cb98d8b5b50644ad843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_85e3a69d143a746270540fdc9feb230929259501b8865cb98d8b5b50644ad843->leave($__internal_85e3a69d143a746270540fdc9feb230929259501b8865cb98d8b5b50644ad843_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c16aeaa2c41b69a25058a2f5ea824df7712d899091334fd040ce7561761504a1 = $this->env->getExtension("native_profiler");
        $__internal_c16aeaa2c41b69a25058a2f5ea824df7712d899091334fd040ce7561761504a1->enter($__internal_c16aeaa2c41b69a25058a2f5ea824df7712d899091334fd040ce7561761504a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c16aeaa2c41b69a25058a2f5ea824df7712d899091334fd040ce7561761504a1->leave($__internal_c16aeaa2c41b69a25058a2f5ea824df7712d899091334fd040ce7561761504a1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c02ee8b5bcfc57af8f6d0d6524961d7e481bd850ac7db1f6a94b986caf33527 = $this->env->getExtension("native_profiler");
        $__internal_9c02ee8b5bcfc57af8f6d0d6524961d7e481bd850ac7db1f6a94b986caf33527->enter($__internal_9c02ee8b5bcfc57af8f6d0d6524961d7e481bd850ac7db1f6a94b986caf33527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c02ee8b5bcfc57af8f6d0d6524961d7e481bd850ac7db1f6a94b986caf33527->leave($__internal_9c02ee8b5bcfc57af8f6d0d6524961d7e481bd850ac7db1f6a94b986caf33527_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f75f9cdcdfb1e867ea6b0f4586db484b84ad4fc33d71b8266effbcf06f181b4 = $this->env->getExtension("native_profiler");
        $__internal_7f75f9cdcdfb1e867ea6b0f4586db484b84ad4fc33d71b8266effbcf06f181b4->enter($__internal_7f75f9cdcdfb1e867ea6b0f4586db484b84ad4fc33d71b8266effbcf06f181b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7f75f9cdcdfb1e867ea6b0f4586db484b84ad4fc33d71b8266effbcf06f181b4->leave($__internal_7f75f9cdcdfb1e867ea6b0f4586db484b84ad4fc33d71b8266effbcf06f181b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
