<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1a397ce8a29605e50b9b48ebbbe5d69d277745fd3c3d9c28000c8afea31bd104 extends Twig_Template
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
        $__internal_1794824c0f5f14ffe1a1334fc37e5174ebebb0666171ead276740cf6e5c85e8d = $this->env->getExtension("native_profiler");
        $__internal_1794824c0f5f14ffe1a1334fc37e5174ebebb0666171ead276740cf6e5c85e8d->enter($__internal_1794824c0f5f14ffe1a1334fc37e5174ebebb0666171ead276740cf6e5c85e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1794824c0f5f14ffe1a1334fc37e5174ebebb0666171ead276740cf6e5c85e8d->leave($__internal_1794824c0f5f14ffe1a1334fc37e5174ebebb0666171ead276740cf6e5c85e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
