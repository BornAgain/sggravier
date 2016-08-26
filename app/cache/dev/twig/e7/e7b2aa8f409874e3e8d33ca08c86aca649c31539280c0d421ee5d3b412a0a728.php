<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ab0e9bdde9bd89479ccd6d0d40bd418c5227c3a2ce9610584bbbf1e36999d379 extends Twig_Template
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
        $__internal_2acb613f7c9aa20f36e29382631fb63f902607480355e1f9422451e7413c98cf = $this->env->getExtension("native_profiler");
        $__internal_2acb613f7c9aa20f36e29382631fb63f902607480355e1f9422451e7413c98cf->enter($__internal_2acb613f7c9aa20f36e29382631fb63f902607480355e1f9422451e7413c98cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2acb613f7c9aa20f36e29382631fb63f902607480355e1f9422451e7413c98cf->leave($__internal_2acb613f7c9aa20f36e29382631fb63f902607480355e1f9422451e7413c98cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
