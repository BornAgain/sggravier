<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ad12be3542a0723a4a5c81e2832e73d1e13e33050bf20e55b952d6aad0398f72 extends Twig_Template
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
        $__internal_3099aa97d7c4a07fd148a549bd225d3e91915218aab1cdc7e418effe870a53c7 = $this->env->getExtension("native_profiler");
        $__internal_3099aa97d7c4a07fd148a549bd225d3e91915218aab1cdc7e418effe870a53c7->enter($__internal_3099aa97d7c4a07fd148a549bd225d3e91915218aab1cdc7e418effe870a53c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3099aa97d7c4a07fd148a549bd225d3e91915218aab1cdc7e418effe870a53c7->leave($__internal_3099aa97d7c4a07fd148a549bd225d3e91915218aab1cdc7e418effe870a53c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
