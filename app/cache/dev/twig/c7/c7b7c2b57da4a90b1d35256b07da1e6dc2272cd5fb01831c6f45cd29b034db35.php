<?php

/* DataSourceBundle:Default:index.html.twig */
class __TwigTemplate_af73a37f0e59f0902f2f3a3e8ae1c7e54d0cc3c1adbe8f87711c9b9a27142707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DataSourceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0d13e707efc9d013e554a97fe3b14b7e6c86418a7986dd834ded232734050c8 = $this->env->getExtension("native_profiler");
        $__internal_d0d13e707efc9d013e554a97fe3b14b7e6c86418a7986dd834ded232734050c8->enter($__internal_d0d13e707efc9d013e554a97fe3b14b7e6c86418a7986dd834ded232734050c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DataSourceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d13e707efc9d013e554a97fe3b14b7e6c86418a7986dd834ded232734050c8->leave($__internal_d0d13e707efc9d013e554a97fe3b14b7e6c86418a7986dd834ded232734050c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93910bd56420c8b2e2cb663b2a7a01d478fd1832b339c48b3e66c0ab9d66b947 = $this->env->getExtension("native_profiler");
        $__internal_93910bd56420c8b2e2cb663b2a7a01d478fd1832b339c48b3e66c0ab9d66b947->enter($__internal_93910bd56420c8b2e2cb663b2a7a01d478fd1832b339c48b3e66c0ab9d66b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    TEST
";
        
        $__internal_93910bd56420c8b2e2cb663b2a7a01d478fd1832b339c48b3e66c0ab9d66b947->leave($__internal_93910bd56420c8b2e2cb663b2a7a01d478fd1832b339c48b3e66c0ab9d66b947_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab0efdf39ece28303860825329b02eddda6c708cbafbdb95b117302b3b355600 = $this->env->getExtension("native_profiler");
        $__internal_ab0efdf39ece28303860825329b02eddda6c708cbafbdb95b117302b3b355600->enter($__internal_ab0efdf39ece28303860825329b02eddda6c708cbafbdb95b117302b3b355600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_ab0efdf39ece28303860825329b02eddda6c708cbafbdb95b117302b3b355600->leave($__internal_ab0efdf39ece28303860825329b02eddda6c708cbafbdb95b117302b3b355600_prof);

    }

    public function getTemplateName()
    {
        return "DataSourceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     TEST*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
