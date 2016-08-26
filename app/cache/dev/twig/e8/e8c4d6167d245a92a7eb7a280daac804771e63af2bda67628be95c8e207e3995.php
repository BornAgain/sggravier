<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6c21eea43600608cabcfafd65ad791f79ac2c00700e6a984d85c36a3e698e8ac extends Twig_Template
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
        $__internal_0ce05fab86d4aa785fd1496f6a16d56a829e536a6ef4f7f1630f4495002a5674 = $this->env->getExtension("native_profiler");
        $__internal_0ce05fab86d4aa785fd1496f6a16d56a829e536a6ef4f7f1630f4495002a5674->enter($__internal_0ce05fab86d4aa785fd1496f6a16d56a829e536a6ef4f7f1630f4495002a5674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0ce05fab86d4aa785fd1496f6a16d56a829e536a6ef4f7f1630f4495002a5674->leave($__internal_0ce05fab86d4aa785fd1496f6a16d56a829e536a6ef4f7f1630f4495002a5674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
