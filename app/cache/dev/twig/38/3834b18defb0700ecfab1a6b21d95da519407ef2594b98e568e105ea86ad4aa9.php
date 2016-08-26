<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_91d10036b9a078d2cb322513d7dccad53a974e17451df9c65e79f58fde85fef1 extends Twig_Template
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
        $__internal_e14cbd095c09a7dfd2d5f186168b0ceada0b64002e177245e5d1cc52ac17b9a3 = $this->env->getExtension("native_profiler");
        $__internal_e14cbd095c09a7dfd2d5f186168b0ceada0b64002e177245e5d1cc52ac17b9a3->enter($__internal_e14cbd095c09a7dfd2d5f186168b0ceada0b64002e177245e5d1cc52ac17b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e14cbd095c09a7dfd2d5f186168b0ceada0b64002e177245e5d1cc52ac17b9a3->leave($__internal_e14cbd095c09a7dfd2d5f186168b0ceada0b64002e177245e5d1cc52ac17b9a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
