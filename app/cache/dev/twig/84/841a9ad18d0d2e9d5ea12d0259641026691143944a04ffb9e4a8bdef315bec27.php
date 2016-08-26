<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_37ec4197613bbdbdeeed92765ca79a83c97c3d68411bd115ce1e788a9127645f extends Twig_Template
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
        $__internal_af3eb6792e70cb98eab4d6bae2b04a4971aec7e19266fa70ac0c8c29353fa783 = $this->env->getExtension("native_profiler");
        $__internal_af3eb6792e70cb98eab4d6bae2b04a4971aec7e19266fa70ac0c8c29353fa783->enter($__internal_af3eb6792e70cb98eab4d6bae2b04a4971aec7e19266fa70ac0c8c29353fa783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_af3eb6792e70cb98eab4d6bae2b04a4971aec7e19266fa70ac0c8c29353fa783->leave($__internal_af3eb6792e70cb98eab4d6bae2b04a4971aec7e19266fa70ac0c8c29353fa783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
