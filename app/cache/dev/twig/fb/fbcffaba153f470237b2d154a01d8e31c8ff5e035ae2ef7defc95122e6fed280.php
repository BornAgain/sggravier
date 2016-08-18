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
        $__internal_c1caddfaaf4235ecbe5c5727484d88fdb995fb82b55044831e661f641a2a7f11 = $this->env->getExtension("native_profiler");
        $__internal_c1caddfaaf4235ecbe5c5727484d88fdb995fb82b55044831e661f641a2a7f11->enter($__internal_c1caddfaaf4235ecbe5c5727484d88fdb995fb82b55044831e661f641a2a7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1caddfaaf4235ecbe5c5727484d88fdb995fb82b55044831e661f641a2a7f11->leave($__internal_c1caddfaaf4235ecbe5c5727484d88fdb995fb82b55044831e661f641a2a7f11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fbcbe8c6f5641cf33d32295abc0c9973ace4aeb6aa056570d9f30786654721b = $this->env->getExtension("native_profiler");
        $__internal_8fbcbe8c6f5641cf33d32295abc0c9973ace4aeb6aa056570d9f30786654721b->enter($__internal_8fbcbe8c6f5641cf33d32295abc0c9973ace4aeb6aa056570d9f30786654721b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8fbcbe8c6f5641cf33d32295abc0c9973ace4aeb6aa056570d9f30786654721b->leave($__internal_8fbcbe8c6f5641cf33d32295abc0c9973ace4aeb6aa056570d9f30786654721b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cdf087f648529fe95c9addbf70e5b6854f6df90a11da0d7f3fb60f92f67303a = $this->env->getExtension("native_profiler");
        $__internal_0cdf087f648529fe95c9addbf70e5b6854f6df90a11da0d7f3fb60f92f67303a->enter($__internal_0cdf087f648529fe95c9addbf70e5b6854f6df90a11da0d7f3fb60f92f67303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cdf087f648529fe95c9addbf70e5b6854f6df90a11da0d7f3fb60f92f67303a->leave($__internal_0cdf087f648529fe95c9addbf70e5b6854f6df90a11da0d7f3fb60f92f67303a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c12f6f6168d3ae344ba11b40dd959bf8cc67d30159dcbedc1b8363f8927d8cb3 = $this->env->getExtension("native_profiler");
        $__internal_c12f6f6168d3ae344ba11b40dd959bf8cc67d30159dcbedc1b8363f8927d8cb3->enter($__internal_c12f6f6168d3ae344ba11b40dd959bf8cc67d30159dcbedc1b8363f8927d8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c12f6f6168d3ae344ba11b40dd959bf8cc67d30159dcbedc1b8363f8927d8cb3->leave($__internal_c12f6f6168d3ae344ba11b40dd959bf8cc67d30159dcbedc1b8363f8927d8cb3_prof);

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
