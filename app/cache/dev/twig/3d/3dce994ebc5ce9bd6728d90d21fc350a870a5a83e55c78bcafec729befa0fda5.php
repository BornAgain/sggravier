<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2510453192dd095a47c18b33757ce68760867a984c3f32d324dfbbf3183920cc extends Twig_Template
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
        $__internal_48e6c39a956d7bdd90b5a0cb65ef50affe8a3b8eda5eca8c174e0401c703c2f1 = $this->env->getExtension("native_profiler");
        $__internal_48e6c39a956d7bdd90b5a0cb65ef50affe8a3b8eda5eca8c174e0401c703c2f1->enter($__internal_48e6c39a956d7bdd90b5a0cb65ef50affe8a3b8eda5eca8c174e0401c703c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_48e6c39a956d7bdd90b5a0cb65ef50affe8a3b8eda5eca8c174e0401c703c2f1->leave($__internal_48e6c39a956d7bdd90b5a0cb65ef50affe8a3b8eda5eca8c174e0401c703c2f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
