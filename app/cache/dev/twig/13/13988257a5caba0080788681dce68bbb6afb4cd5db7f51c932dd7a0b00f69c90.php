<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7d23384c4a10a68fdec4ee580d0e4ffaf3883fc34f20a71782af5459ad006fb6 extends Twig_Template
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
        $__internal_998cd1720ddb09a43ec540468c903b0cbc3a17823a2a70e2bce4fb33d8346f7a = $this->env->getExtension("native_profiler");
        $__internal_998cd1720ddb09a43ec540468c903b0cbc3a17823a2a70e2bce4fb33d8346f7a->enter($__internal_998cd1720ddb09a43ec540468c903b0cbc3a17823a2a70e2bce4fb33d8346f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_998cd1720ddb09a43ec540468c903b0cbc3a17823a2a70e2bce4fb33d8346f7a->leave($__internal_998cd1720ddb09a43ec540468c903b0cbc3a17823a2a70e2bce4fb33d8346f7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
