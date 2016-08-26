<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6c67c10c6afabd040206a853ba5d55c5ecfa54c81cf8ff11d266356a6b43e0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5efeeaad1f410825f40f099d2b44fd230c87230ce391b6e1bb45c1e9e95c592d = $this->env->getExtension("native_profiler");
        $__internal_5efeeaad1f410825f40f099d2b44fd230c87230ce391b6e1bb45c1e9e95c592d->enter($__internal_5efeeaad1f410825f40f099d2b44fd230c87230ce391b6e1bb45c1e9e95c592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efeeaad1f410825f40f099d2b44fd230c87230ce391b6e1bb45c1e9e95c592d->leave($__internal_5efeeaad1f410825f40f099d2b44fd230c87230ce391b6e1bb45c1e9e95c592d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8865a57efb3c3d41e6fe4a7bfc5a9f36f71fcc58d1c927195a49cb481d1cc887 = $this->env->getExtension("native_profiler");
        $__internal_8865a57efb3c3d41e6fe4a7bfc5a9f36f71fcc58d1c927195a49cb481d1cc887->enter($__internal_8865a57efb3c3d41e6fe4a7bfc5a9f36f71fcc58d1c927195a49cb481d1cc887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8865a57efb3c3d41e6fe4a7bfc5a9f36f71fcc58d1c927195a49cb481d1cc887->leave($__internal_8865a57efb3c3d41e6fe4a7bfc5a9f36f71fcc58d1c927195a49cb481d1cc887_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
