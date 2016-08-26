<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d4af093959b7c021d67982a292d53a282a5ee9da9f39692f2cebfc0f9dd0512f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ef707688afd94fd517ffd4adc1226333b362b9ce6f221a3cb59e66d399593b7 = $this->env->getExtension("native_profiler");
        $__internal_6ef707688afd94fd517ffd4adc1226333b362b9ce6f221a3cb59e66d399593b7->enter($__internal_6ef707688afd94fd517ffd4adc1226333b362b9ce6f221a3cb59e66d399593b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ef707688afd94fd517ffd4adc1226333b362b9ce6f221a3cb59e66d399593b7->leave($__internal_6ef707688afd94fd517ffd4adc1226333b362b9ce6f221a3cb59e66d399593b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_537d3d0eb56dff6550745aab0f242f3a0a50e20022dec0e46c27a084a5acf4ab = $this->env->getExtension("native_profiler");
        $__internal_537d3d0eb56dff6550745aab0f242f3a0a50e20022dec0e46c27a084a5acf4ab->enter($__internal_537d3d0eb56dff6550745aab0f242f3a0a50e20022dec0e46c27a084a5acf4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_537d3d0eb56dff6550745aab0f242f3a0a50e20022dec0e46c27a084a5acf4ab->leave($__internal_537d3d0eb56dff6550745aab0f242f3a0a50e20022dec0e46c27a084a5acf4ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
