<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9080bbb5aa65ed53f59619844bb52085f01bab11a942246a0d75624d1f2119fa extends Twig_Template
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
        $__internal_f70fe0e1a0bda1d266d4ae9ce45fa29002270e66bf95120b4d57a6f6c7baca72 = $this->env->getExtension("native_profiler");
        $__internal_f70fe0e1a0bda1d266d4ae9ce45fa29002270e66bf95120b4d57a6f6c7baca72->enter($__internal_f70fe0e1a0bda1d266d4ae9ce45fa29002270e66bf95120b4d57a6f6c7baca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f70fe0e1a0bda1d266d4ae9ce45fa29002270e66bf95120b4d57a6f6c7baca72->leave($__internal_f70fe0e1a0bda1d266d4ae9ce45fa29002270e66bf95120b4d57a6f6c7baca72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
