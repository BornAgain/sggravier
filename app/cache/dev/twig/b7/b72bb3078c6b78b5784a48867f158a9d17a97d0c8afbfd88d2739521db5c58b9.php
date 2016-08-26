<?php

/* SampleBundle:User:update.html.twig */
class __TwigTemplate_37cf1a9ba2ec85b867132db4c6ff33083484fd4b02e217c8fdfd7aabf8b0af46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SampleBundle:User:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d33260c984535f1c0459cf581c285dd6dc41ccf2d547ff97244ac1739ebb221 = $this->env->getExtension("native_profiler");
        $__internal_8d33260c984535f1c0459cf581c285dd6dc41ccf2d547ff97244ac1739ebb221->enter($__internal_8d33260c984535f1c0459cf581c285dd6dc41ccf2d547ff97244ac1739ebb221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SampleBundle:User:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d33260c984535f1c0459cf581c285dd6dc41ccf2d547ff97244ac1739ebb221->leave($__internal_8d33260c984535f1c0459cf581c285dd6dc41ccf2d547ff97244ac1739ebb221_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8ccdac17c4837de79b836a32c754be0e73e9f8148826fce8d1f2c2980eb3e3f = $this->env->getExtension("native_profiler");
        $__internal_f8ccdac17c4837de79b836a32c754be0e73e9f8148826fce8d1f2c2980eb3e3f->enter($__internal_f8ccdac17c4837de79b836a32c754be0e73e9f8148826fce8d1f2c2980eb3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:update";
        
        $__internal_f8ccdac17c4837de79b836a32c754be0e73e9f8148826fce8d1f2c2980eb3e3f->leave($__internal_f8ccdac17c4837de79b836a32c754be0e73e9f8148826fce8d1f2c2980eb3e3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c680dfe8ca55112c4e00e43f02af182aa40b6d06b13c14171fa6a294c29bae9b = $this->env->getExtension("native_profiler");
        $__internal_c680dfe8ca55112c4e00e43f02af182aa40b6d06b13c14171fa6a294c29bae9b->enter($__internal_c680dfe8ca55112c4e00e43f02af182aa40b6d06b13c14171fa6a294c29bae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:update page</h1>
";
        
        $__internal_c680dfe8ca55112c4e00e43f02af182aa40b6d06b13c14171fa6a294c29bae9b->leave($__internal_c680dfe8ca55112c4e00e43f02af182aa40b6d06b13c14171fa6a294c29bae9b_prof);

    }

    public function getTemplateName()
    {
        return "SampleBundle:User:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}SampleBundle:User:update{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:update page</h1>*/
/* {% endblock %}*/
/* */
