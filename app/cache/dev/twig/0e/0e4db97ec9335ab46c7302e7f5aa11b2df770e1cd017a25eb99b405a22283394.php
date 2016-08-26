<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b209957a5bead2f9557e31500b20d7b5c3c898e97a877d9f800aa173b9d7184f extends Twig_Template
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
        $__internal_275e9a52342cdfff0a9fd7dba3bbfd9776bef5bc74802b1bf34e45bdf3e685c2 = $this->env->getExtension("native_profiler");
        $__internal_275e9a52342cdfff0a9fd7dba3bbfd9776bef5bc74802b1bf34e45bdf3e685c2->enter($__internal_275e9a52342cdfff0a9fd7dba3bbfd9776bef5bc74802b1bf34e45bdf3e685c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_275e9a52342cdfff0a9fd7dba3bbfd9776bef5bc74802b1bf34e45bdf3e685c2->leave($__internal_275e9a52342cdfff0a9fd7dba3bbfd9776bef5bc74802b1bf34e45bdf3e685c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
