<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e6c74bcd989be82c4b60ebb6309d4392f4951dbd7045ff3d8efd9da6ad467b92 extends Twig_Template
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
        $__internal_66f3bad424b95b7d90de33a23197866d7407a3db27deb09abada5787f4b858aa = $this->env->getExtension("native_profiler");
        $__internal_66f3bad424b95b7d90de33a23197866d7407a3db27deb09abada5787f4b858aa->enter($__internal_66f3bad424b95b7d90de33a23197866d7407a3db27deb09abada5787f4b858aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_66f3bad424b95b7d90de33a23197866d7407a3db27deb09abada5787f4b858aa->leave($__internal_66f3bad424b95b7d90de33a23197866d7407a3db27deb09abada5787f4b858aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_160671da9a19538310ff910898546bf1471aecff250296cb6c659c22668f31ad = $this->env->getExtension("native_profiler");
        $__internal_160671da9a19538310ff910898546bf1471aecff250296cb6c659c22668f31ad->enter($__internal_160671da9a19538310ff910898546bf1471aecff250296cb6c659c22668f31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_160671da9a19538310ff910898546bf1471aecff250296cb6c659c22668f31ad->leave($__internal_160671da9a19538310ff910898546bf1471aecff250296cb6c659c22668f31ad_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71d306005dab4f56e2c096349c3bc5a417546bd04fb61e358812457bf50036be = $this->env->getExtension("native_profiler");
        $__internal_71d306005dab4f56e2c096349c3bc5a417546bd04fb61e358812457bf50036be->enter($__internal_71d306005dab4f56e2c096349c3bc5a417546bd04fb61e358812457bf50036be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_71d306005dab4f56e2c096349c3bc5a417546bd04fb61e358812457bf50036be->leave($__internal_71d306005dab4f56e2c096349c3bc5a417546bd04fb61e358812457bf50036be_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdc396456aca2eb50bac785baec9059b5ed77aed6cabf468ca82694fef44a586 = $this->env->getExtension("native_profiler");
        $__internal_cdc396456aca2eb50bac785baec9059b5ed77aed6cabf468ca82694fef44a586->enter($__internal_cdc396456aca2eb50bac785baec9059b5ed77aed6cabf468ca82694fef44a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cdc396456aca2eb50bac785baec9059b5ed77aed6cabf468ca82694fef44a586->leave($__internal_cdc396456aca2eb50bac785baec9059b5ed77aed6cabf468ca82694fef44a586_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
