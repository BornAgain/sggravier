<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2b74b77add4b291d2abcd1ef69dd02c506119091e14e83520436e1c9d1f72c47 extends Twig_Template
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
        $__internal_e11be876d297ae7ba8605a45347c686afc3b352aaa28057e1c76587c7ce5760e = $this->env->getExtension("native_profiler");
        $__internal_e11be876d297ae7ba8605a45347c686afc3b352aaa28057e1c76587c7ce5760e->enter($__internal_e11be876d297ae7ba8605a45347c686afc3b352aaa28057e1c76587c7ce5760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e11be876d297ae7ba8605a45347c686afc3b352aaa28057e1c76587c7ce5760e->leave($__internal_e11be876d297ae7ba8605a45347c686afc3b352aaa28057e1c76587c7ce5760e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
