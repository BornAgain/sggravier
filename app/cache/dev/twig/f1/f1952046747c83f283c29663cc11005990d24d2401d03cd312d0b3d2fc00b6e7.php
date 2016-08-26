<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_71ce21cd40e28962247ae36959134f06d4afddc0e1cb5a1d4e5cc7c8e4613c63 extends Twig_Template
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
        $__internal_511a387e6e259b69076f1eee943eb0fd12b394b258d4e9d6914d56b4da5d7917 = $this->env->getExtension("native_profiler");
        $__internal_511a387e6e259b69076f1eee943eb0fd12b394b258d4e9d6914d56b4da5d7917->enter($__internal_511a387e6e259b69076f1eee943eb0fd12b394b258d4e9d6914d56b4da5d7917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_511a387e6e259b69076f1eee943eb0fd12b394b258d4e9d6914d56b4da5d7917->leave($__internal_511a387e6e259b69076f1eee943eb0fd12b394b258d4e9d6914d56b4da5d7917_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
