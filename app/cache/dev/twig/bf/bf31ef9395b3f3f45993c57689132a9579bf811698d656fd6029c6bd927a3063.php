<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_542baf506559f9bd5e5bf1bc45ee315a8522b6b32f9923c4287d0b53158980ab extends Twig_Template
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
        $__internal_2ea40f567c7cb92e5db117076e790caab07af34d0881a63e3530f0bfaa6fbc87 = $this->env->getExtension("native_profiler");
        $__internal_2ea40f567c7cb92e5db117076e790caab07af34d0881a63e3530f0bfaa6fbc87->enter($__internal_2ea40f567c7cb92e5db117076e790caab07af34d0881a63e3530f0bfaa6fbc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2ea40f567c7cb92e5db117076e790caab07af34d0881a63e3530f0bfaa6fbc87->leave($__internal_2ea40f567c7cb92e5db117076e790caab07af34d0881a63e3530f0bfaa6fbc87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
