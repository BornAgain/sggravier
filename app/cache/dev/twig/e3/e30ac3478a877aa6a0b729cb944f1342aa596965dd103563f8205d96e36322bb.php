<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_361c33caf26d64c8f38cdd1e82bfd9e672061a81a752c37e64577df4b03d10a7 extends Twig_Template
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
        $__internal_04d8269699b03149523527f05f2135926bb6a64bec06b01a919ff55b8e74fe29 = $this->env->getExtension("native_profiler");
        $__internal_04d8269699b03149523527f05f2135926bb6a64bec06b01a919ff55b8e74fe29->enter($__internal_04d8269699b03149523527f05f2135926bb6a64bec06b01a919ff55b8e74fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_04d8269699b03149523527f05f2135926bb6a64bec06b01a919ff55b8e74fe29->leave($__internal_04d8269699b03149523527f05f2135926bb6a64bec06b01a919ff55b8e74fe29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
