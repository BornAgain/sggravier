<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0db6d5cdcad483eff1ec29de8ae29b1a942a1fead1c22c56be0418ba319bf6e5 extends Twig_Template
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
        $__internal_02e12e991c099120c78de83967c95f808b01476df31013413c8c743aa9aeec93 = $this->env->getExtension("native_profiler");
        $__internal_02e12e991c099120c78de83967c95f808b01476df31013413c8c743aa9aeec93->enter($__internal_02e12e991c099120c78de83967c95f808b01476df31013413c8c743aa9aeec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_02e12e991c099120c78de83967c95f808b01476df31013413c8c743aa9aeec93->leave($__internal_02e12e991c099120c78de83967c95f808b01476df31013413c8c743aa9aeec93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
