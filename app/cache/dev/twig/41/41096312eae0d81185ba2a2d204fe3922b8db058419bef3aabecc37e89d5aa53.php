<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_3f23aaf6e48c78cc32665246712d121dc024d522e8992f2f624b980f990cf27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6918e5256ed0eb177d74bfb45af2809c3a8936990cda02050d46dd311777054 = $this->env->getExtension("native_profiler");
        $__internal_c6918e5256ed0eb177d74bfb45af2809c3a8936990cda02050d46dd311777054->enter($__internal_c6918e5256ed0eb177d74bfb45af2809c3a8936990cda02050d46dd311777054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6918e5256ed0eb177d74bfb45af2809c3a8936990cda02050d46dd311777054->leave($__internal_c6918e5256ed0eb177d74bfb45af2809c3a8936990cda02050d46dd311777054_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c8ac933cf9846d1bdb6f4f3a3513f942bab1d3ed6d6fb504f39b69a609c0965 = $this->env->getExtension("native_profiler");
        $__internal_4c8ac933cf9846d1bdb6f4f3a3513f942bab1d3ed6d6fb504f39b69a609c0965->enter($__internal_4c8ac933cf9846d1bdb6f4f3a3513f942bab1d3ed6d6fb504f39b69a609c0965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4c8ac933cf9846d1bdb6f4f3a3513f942bab1d3ed6d6fb504f39b69a609c0965->leave($__internal_4c8ac933cf9846d1bdb6f4f3a3513f942bab1d3ed6d6fb504f39b69a609c0965_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
