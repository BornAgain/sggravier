<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dc49b50cb070204a92db2e69852193e618c2eab8c47af91900a13d2274a884ea extends Twig_Template
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
        $__internal_3b6276200959a0ca710eb2e7117acb4a7191d2927aa8d7b4b62a1945cc2562bc = $this->env->getExtension("native_profiler");
        $__internal_3b6276200959a0ca710eb2e7117acb4a7191d2927aa8d7b4b62a1945cc2562bc->enter($__internal_3b6276200959a0ca710eb2e7117acb4a7191d2927aa8d7b4b62a1945cc2562bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3b6276200959a0ca710eb2e7117acb4a7191d2927aa8d7b4b62a1945cc2562bc->leave($__internal_3b6276200959a0ca710eb2e7117acb4a7191d2927aa8d7b4b62a1945cc2562bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
