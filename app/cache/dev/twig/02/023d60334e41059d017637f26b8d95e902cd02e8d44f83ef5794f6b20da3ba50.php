<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_84928cf6846b490dae8510ace79d88626d1e680f60f72db54c0be65541468a83 extends Twig_Template
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
        $__internal_7b5deffc2f46c42cdce30178d873b0eb012292285bc93fde69747f9d3571c41f = $this->env->getExtension("native_profiler");
        $__internal_7b5deffc2f46c42cdce30178d873b0eb012292285bc93fde69747f9d3571c41f->enter($__internal_7b5deffc2f46c42cdce30178d873b0eb012292285bc93fde69747f9d3571c41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7b5deffc2f46c42cdce30178d873b0eb012292285bc93fde69747f9d3571c41f->leave($__internal_7b5deffc2f46c42cdce30178d873b0eb012292285bc93fde69747f9d3571c41f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
