<?php

/* :default:index.html.twig */
class __TwigTemplate_5e3f4575d354922a186b3a597f87a4a3817fb2a39a6407117c3e0e211d1431e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459c8e0e4841dbcaf75b21f94c1522dc65ec9981ff190096bc919512c83bf373 = $this->env->getExtension("native_profiler");
        $__internal_459c8e0e4841dbcaf75b21f94c1522dc65ec9981ff190096bc919512c83bf373->enter($__internal_459c8e0e4841dbcaf75b21f94c1522dc65ec9981ff190096bc919512c83bf373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459c8e0e4841dbcaf75b21f94c1522dc65ec9981ff190096bc919512c83bf373->leave($__internal_459c8e0e4841dbcaf75b21f94c1522dc65ec9981ff190096bc919512c83bf373_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_412f31a5db776c02692d10814d5f98d95a378424de99b7362d6ac29e24149034 = $this->env->getExtension("native_profiler");
        $__internal_412f31a5db776c02692d10814d5f98d95a378424de99b7362d6ac29e24149034->enter($__internal_412f31a5db776c02692d10814d5f98d95a378424de99b7362d6ac29e24149034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    DATASOURCE <small>Wizard</small>
";
        
        $__internal_412f31a5db776c02692d10814d5f98d95a378424de99b7362d6ac29e24149034->leave($__internal_412f31a5db776c02692d10814d5f98d95a378424de99b7362d6ac29e24149034_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_79cab9bee79e663fdfe9ce4b79341e99ca8ac8e8a9ab2274852dc7391b6437e5 = $this->env->getExtension("native_profiler");
        $__internal_79cab9bee79e663fdfe9ce4b79341e99ca8ac8e8a9ab2274852dc7391b6437e5->enter($__internal_79cab9bee79e663fdfe9ce4b79341e99ca8ac8e8a9ab2274852dc7391b6437e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    TEST
";
        
        $__internal_79cab9bee79e663fdfe9ce4b79341e99ca8ac8e8a9ab2274852dc7391b6437e5->leave($__internal_79cab9bee79e663fdfe9ce4b79341e99ca8ac8e8a9ab2274852dc7391b6437e5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbe031a1ec15bb7ae0703370f509ce4122d8f55d216fe0046cc4d65157e3dae9 = $this->env->getExtension("native_profiler");
        $__internal_fbe031a1ec15bb7ae0703370f509ce4122d8f55d216fe0046cc4d65157e3dae9->enter($__internal_fbe031a1ec15bb7ae0703370f509ce4122d8f55d216fe0046cc4d65157e3dae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_fbe031a1ec15bb7ae0703370f509ce4122d8f55d216fe0046cc4d65157e3dae9->leave($__internal_fbe031a1ec15bb7ae0703370f509ce4122d8f55d216fe0046cc4d65157e3dae9_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5290f3ae61f22d5eb28c05ebe9cb79bf04ad8860298e43e4d8096826e3723f7b = $this->env->getExtension("native_profiler");
        $__internal_5290f3ae61f22d5eb28c05ebe9cb79bf04ad8860298e43e4d8096826e3723f7b->enter($__internal_5290f3ae61f22d5eb28c05ebe9cb79bf04ad8860298e43e4d8096826e3723f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    
";
        
        $__internal_5290f3ae61f22d5eb28c05ebe9cb79bf04ad8860298e43e4d8096826e3723f7b->leave($__internal_5290f3ae61f22d5eb28c05ebe9cb79bf04ad8860298e43e4d8096826e3723f7b_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 15,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block titlePage %}*/
/*     DATASOURCE <small>Wizard</small>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     TEST*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     */
/*     */
/* {% endblock %}*/
