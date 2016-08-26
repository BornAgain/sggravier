<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ee7683793b66095095f7ebf2cb0b8c827b795a907d26aa49a4212afa8dbbdce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_88d638c8fcab6903ceae6caad6365e75606962f006c1caf4dc7ebe308bfc164d = $this->env->getExtension("native_profiler");
        $__internal_88d638c8fcab6903ceae6caad6365e75606962f006c1caf4dc7ebe308bfc164d->enter($__internal_88d638c8fcab6903ceae6caad6365e75606962f006c1caf4dc7ebe308bfc164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d638c8fcab6903ceae6caad6365e75606962f006c1caf4dc7ebe308bfc164d->leave($__internal_88d638c8fcab6903ceae6caad6365e75606962f006c1caf4dc7ebe308bfc164d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc93fd250ca0d3848042b8392897cb9f96e16a650e80cae0c879f0cd2855de05 = $this->env->getExtension("native_profiler");
        $__internal_dc93fd250ca0d3848042b8392897cb9f96e16a650e80cae0c879f0cd2855de05->enter($__internal_dc93fd250ca0d3848042b8392897cb9f96e16a650e80cae0c879f0cd2855de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc93fd250ca0d3848042b8392897cb9f96e16a650e80cae0c879f0cd2855de05->leave($__internal_dc93fd250ca0d3848042b8392897cb9f96e16a650e80cae0c879f0cd2855de05_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34b50591d86ce71bd17a2da99f7c6ed64d205a6b6729dc2eff9fedbb5cb8cd88 = $this->env->getExtension("native_profiler");
        $__internal_34b50591d86ce71bd17a2da99f7c6ed64d205a6b6729dc2eff9fedbb5cb8cd88->enter($__internal_34b50591d86ce71bd17a2da99f7c6ed64d205a6b6729dc2eff9fedbb5cb8cd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34b50591d86ce71bd17a2da99f7c6ed64d205a6b6729dc2eff9fedbb5cb8cd88->leave($__internal_34b50591d86ce71bd17a2da99f7c6ed64d205a6b6729dc2eff9fedbb5cb8cd88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d8fb0d32eb29fd7b37a99a1c3e8a8a12a35129fee2f2a45f0046b305e6b5f92 = $this->env->getExtension("native_profiler");
        $__internal_3d8fb0d32eb29fd7b37a99a1c3e8a8a12a35129fee2f2a45f0046b305e6b5f92->enter($__internal_3d8fb0d32eb29fd7b37a99a1c3e8a8a12a35129fee2f2a45f0046b305e6b5f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d8fb0d32eb29fd7b37a99a1c3e8a8a12a35129fee2f2a45f0046b305e6b5f92->leave($__internal_3d8fb0d32eb29fd7b37a99a1c3e8a8a12a35129fee2f2a45f0046b305e6b5f92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
