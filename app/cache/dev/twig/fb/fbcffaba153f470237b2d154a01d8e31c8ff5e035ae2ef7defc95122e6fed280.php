<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e63e881245406e4f8a263928287290c2b014de7e5a0880baac0a910d66774eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63535c8ee593b5466f87964cbe2cfc5bd1eb6712f662ce27e40b51854ee19c40 = $this->env->getExtension("native_profiler");
        $__internal_63535c8ee593b5466f87964cbe2cfc5bd1eb6712f662ce27e40b51854ee19c40->enter($__internal_63535c8ee593b5466f87964cbe2cfc5bd1eb6712f662ce27e40b51854ee19c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63535c8ee593b5466f87964cbe2cfc5bd1eb6712f662ce27e40b51854ee19c40->leave($__internal_63535c8ee593b5466f87964cbe2cfc5bd1eb6712f662ce27e40b51854ee19c40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab184799cf8e56561dcb342b5e855b66153e8005303f8abab7e3adeae7cf0646 = $this->env->getExtension("native_profiler");
        $__internal_ab184799cf8e56561dcb342b5e855b66153e8005303f8abab7e3adeae7cf0646->enter($__internal_ab184799cf8e56561dcb342b5e855b66153e8005303f8abab7e3adeae7cf0646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab184799cf8e56561dcb342b5e855b66153e8005303f8abab7e3adeae7cf0646->leave($__internal_ab184799cf8e56561dcb342b5e855b66153e8005303f8abab7e3adeae7cf0646_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43e1023e130d2ac3d76ae26b787790301fd0482a735fe89280525fe938520911 = $this->env->getExtension("native_profiler");
        $__internal_43e1023e130d2ac3d76ae26b787790301fd0482a735fe89280525fe938520911->enter($__internal_43e1023e130d2ac3d76ae26b787790301fd0482a735fe89280525fe938520911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43e1023e130d2ac3d76ae26b787790301fd0482a735fe89280525fe938520911->leave($__internal_43e1023e130d2ac3d76ae26b787790301fd0482a735fe89280525fe938520911_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e15b881a8d7b01b14d73c79645614460ace5c6c8e993e2e8a4949a9215293bd5 = $this->env->getExtension("native_profiler");
        $__internal_e15b881a8d7b01b14d73c79645614460ace5c6c8e993e2e8a4949a9215293bd5->enter($__internal_e15b881a8d7b01b14d73c79645614460ace5c6c8e993e2e8a4949a9215293bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e15b881a8d7b01b14d73c79645614460ace5c6c8e993e2e8a4949a9215293bd5->leave($__internal_e15b881a8d7b01b14d73c79645614460ace5c6c8e993e2e8a4949a9215293bd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
