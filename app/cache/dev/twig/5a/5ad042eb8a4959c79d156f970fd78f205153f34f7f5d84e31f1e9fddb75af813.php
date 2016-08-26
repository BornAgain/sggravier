<?php

/* @DataSource/Default/index.html.twig */
class __TwigTemplate_c009fe085907e0b7a2407745d73277ecf999ff5b8da3b298acf27b3f9ba1548a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DataSource/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2fbdbd3ef4ffa5dcbf2c005c3c7cec495157534016f9b6a2a832e2664058df = $this->env->getExtension("native_profiler");
        $__internal_6f2fbdbd3ef4ffa5dcbf2c005c3c7cec495157534016f9b6a2a832e2664058df->enter($__internal_6f2fbdbd3ef4ffa5dcbf2c005c3c7cec495157534016f9b6a2a832e2664058df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataSource/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2fbdbd3ef4ffa5dcbf2c005c3c7cec495157534016f9b6a2a832e2664058df->leave($__internal_6f2fbdbd3ef4ffa5dcbf2c005c3c7cec495157534016f9b6a2a832e2664058df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a26c815dc3b397475fc259a36915851eaa4f914cafb56a89781175a9badfcd = $this->env->getExtension("native_profiler");
        $__internal_03a26c815dc3b397475fc259a36915851eaa4f914cafb56a89781175a9badfcd->enter($__internal_03a26c815dc3b397475fc259a36915851eaa4f914cafb56a89781175a9badfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    TEST
";
        
        $__internal_03a26c815dc3b397475fc259a36915851eaa4f914cafb56a89781175a9badfcd->leave($__internal_03a26c815dc3b397475fc259a36915851eaa4f914cafb56a89781175a9badfcd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1685d221a185387e1ecb2a4bf92021de35b7bf99014d39e635b10dbd4a3dd306 = $this->env->getExtension("native_profiler");
        $__internal_1685d221a185387e1ecb2a4bf92021de35b7bf99014d39e635b10dbd4a3dd306->enter($__internal_1685d221a185387e1ecb2a4bf92021de35b7bf99014d39e635b10dbd4a3dd306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_1685d221a185387e1ecb2a4bf92021de35b7bf99014d39e635b10dbd4a3dd306->leave($__internal_1685d221a185387e1ecb2a4bf92021de35b7bf99014d39e635b10dbd4a3dd306_prof);

    }

    public function getTemplateName()
    {
        return "@DataSource/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     TEST*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
