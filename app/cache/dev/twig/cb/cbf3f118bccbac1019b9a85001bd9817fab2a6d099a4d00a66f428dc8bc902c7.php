<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_37cffc481e7fe3fddcafb8fe74059d471f63dd2e83eca0d0821b17769f83b18d extends Twig_Template
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
        $__internal_36e6df3699a9832637d08127189fcd92bee55e127a428ec814fd159674f31e29 = $this->env->getExtension("native_profiler");
        $__internal_36e6df3699a9832637d08127189fcd92bee55e127a428ec814fd159674f31e29->enter($__internal_36e6df3699a9832637d08127189fcd92bee55e127a428ec814fd159674f31e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_36e6df3699a9832637d08127189fcd92bee55e127a428ec814fd159674f31e29->leave($__internal_36e6df3699a9832637d08127189fcd92bee55e127a428ec814fd159674f31e29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
