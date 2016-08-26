<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5441b026dfdf4c7bd08c755facd493e4fa1f92844bca71d25cf8e05ddac253dc extends Twig_Template
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
        $__internal_3a41a9c9c211a8df96c919261f0f15c7550b402d5d4f79b532e5b20d83259f20 = $this->env->getExtension("native_profiler");
        $__internal_3a41a9c9c211a8df96c919261f0f15c7550b402d5d4f79b532e5b20d83259f20->enter($__internal_3a41a9c9c211a8df96c919261f0f15c7550b402d5d4f79b532e5b20d83259f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3a41a9c9c211a8df96c919261f0f15c7550b402d5d4f79b532e5b20d83259f20->leave($__internal_3a41a9c9c211a8df96c919261f0f15c7550b402d5d4f79b532e5b20d83259f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
