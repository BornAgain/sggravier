<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_38d27f50cfcdb79cb897423480d2b993a47ef2f277ebd8f953905f092547b98a extends Twig_Template
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
        $__internal_63b54ede9b71f9476ca6c2fa1f3c46193691365f880656fb869cb637cdb4640c = $this->env->getExtension("native_profiler");
        $__internal_63b54ede9b71f9476ca6c2fa1f3c46193691365f880656fb869cb637cdb4640c->enter($__internal_63b54ede9b71f9476ca6c2fa1f3c46193691365f880656fb869cb637cdb4640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_63b54ede9b71f9476ca6c2fa1f3c46193691365f880656fb869cb637cdb4640c->leave($__internal_63b54ede9b71f9476ca6c2fa1f3c46193691365f880656fb869cb637cdb4640c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
