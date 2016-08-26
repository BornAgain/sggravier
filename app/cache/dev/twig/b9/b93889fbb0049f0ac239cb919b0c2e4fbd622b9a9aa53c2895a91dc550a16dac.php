<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5b96876a6f85cf851565c4fd33e26b1ce6448818e396a15f1db78528fc5122c0 extends Twig_Template
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
        $__internal_9e0e31f72c41e6a78b1fa1015d46ddbcb88a3c9db5255c45d608a73c7cb9acb6 = $this->env->getExtension("native_profiler");
        $__internal_9e0e31f72c41e6a78b1fa1015d46ddbcb88a3c9db5255c45d608a73c7cb9acb6->enter($__internal_9e0e31f72c41e6a78b1fa1015d46ddbcb88a3c9db5255c45d608a73c7cb9acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e0e31f72c41e6a78b1fa1015d46ddbcb88a3c9db5255c45d608a73c7cb9acb6->leave($__internal_9e0e31f72c41e6a78b1fa1015d46ddbcb88a3c9db5255c45d608a73c7cb9acb6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_15c2eaf180f2fc60c39ef9f887f27670f288cf2da6ef5d8627036f0d997e02e4 = $this->env->getExtension("native_profiler");
        $__internal_15c2eaf180f2fc60c39ef9f887f27670f288cf2da6ef5d8627036f0d997e02e4->enter($__internal_15c2eaf180f2fc60c39ef9f887f27670f288cf2da6ef5d8627036f0d997e02e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_15c2eaf180f2fc60c39ef9f887f27670f288cf2da6ef5d8627036f0d997e02e4->leave($__internal_15c2eaf180f2fc60c39ef9f887f27670f288cf2da6ef5d8627036f0d997e02e4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ca8a764b513f17c62a7c06b22902af2647a0568c7aabd3d550f8f9b55583c89 = $this->env->getExtension("native_profiler");
        $__internal_1ca8a764b513f17c62a7c06b22902af2647a0568c7aabd3d550f8f9b55583c89->enter($__internal_1ca8a764b513f17c62a7c06b22902af2647a0568c7aabd3d550f8f9b55583c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ca8a764b513f17c62a7c06b22902af2647a0568c7aabd3d550f8f9b55583c89->leave($__internal_1ca8a764b513f17c62a7c06b22902af2647a0568c7aabd3d550f8f9b55583c89_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0643487bdcbc192570b09dea34c6335167ff9160e9b538a5d795bb4014b138d = $this->env->getExtension("native_profiler");
        $__internal_a0643487bdcbc192570b09dea34c6335167ff9160e9b538a5d795bb4014b138d->enter($__internal_a0643487bdcbc192570b09dea34c6335167ff9160e9b538a5d795bb4014b138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a0643487bdcbc192570b09dea34c6335167ff9160e9b538a5d795bb4014b138d->leave($__internal_a0643487bdcbc192570b09dea34c6335167ff9160e9b538a5d795bb4014b138d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
