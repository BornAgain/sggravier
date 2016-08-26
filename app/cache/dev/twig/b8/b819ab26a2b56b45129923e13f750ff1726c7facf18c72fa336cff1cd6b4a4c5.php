<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4a1a1526376d72310bd40577913493cb7b20286dfe506e9f04a3127f74b45034 extends Twig_Template
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
        $__internal_9f8fa62fec8a13cdda967c43d5b55678fa49c755c03217a751bffbbbf0287220 = $this->env->getExtension("native_profiler");
        $__internal_9f8fa62fec8a13cdda967c43d5b55678fa49c755c03217a751bffbbbf0287220->enter($__internal_9f8fa62fec8a13cdda967c43d5b55678fa49c755c03217a751bffbbbf0287220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9f8fa62fec8a13cdda967c43d5b55678fa49c755c03217a751bffbbbf0287220->leave($__internal_9f8fa62fec8a13cdda967c43d5b55678fa49c755c03217a751bffbbbf0287220_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
