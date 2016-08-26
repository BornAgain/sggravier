<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_892c2e718c15437f7fe9fa96318d996f49186d425f9037928dec2f409cdd67fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_f718812eea09d2cef9585e115977fdc4bf842399faec041cdece68168cde0559 = $this->env->getExtension("native_profiler");
        $__internal_f718812eea09d2cef9585e115977fdc4bf842399faec041cdece68168cde0559->enter($__internal_f718812eea09d2cef9585e115977fdc4bf842399faec041cdece68168cde0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f718812eea09d2cef9585e115977fdc4bf842399faec041cdece68168cde0559->leave($__internal_f718812eea09d2cef9585e115977fdc4bf842399faec041cdece68168cde0559_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77383dad226626b47c11e1b9108a7c25dd63533ea2451a82af02a972ca9e4525 = $this->env->getExtension("native_profiler");
        $__internal_77383dad226626b47c11e1b9108a7c25dd63533ea2451a82af02a972ca9e4525->enter($__internal_77383dad226626b47c11e1b9108a7c25dd63533ea2451a82af02a972ca9e4525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_77383dad226626b47c11e1b9108a7c25dd63533ea2451a82af02a972ca9e4525->leave($__internal_77383dad226626b47c11e1b9108a7c25dd63533ea2451a82af02a972ca9e4525_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
