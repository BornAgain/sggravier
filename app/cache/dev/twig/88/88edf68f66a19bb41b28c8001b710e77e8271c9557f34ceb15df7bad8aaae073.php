<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_21e75f884383de2b72f8ff5ee2d722d6a42dcea3960d1aa816356d67446dc280 extends Twig_Template
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
        $__internal_a361a529ccca517db6dffd27735c7979562f8afc801de232f8d2425cf8c10d02 = $this->env->getExtension("native_profiler");
        $__internal_a361a529ccca517db6dffd27735c7979562f8afc801de232f8d2425cf8c10d02->enter($__internal_a361a529ccca517db6dffd27735c7979562f8afc801de232f8d2425cf8c10d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a361a529ccca517db6dffd27735c7979562f8afc801de232f8d2425cf8c10d02->leave($__internal_a361a529ccca517db6dffd27735c7979562f8afc801de232f8d2425cf8c10d02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
