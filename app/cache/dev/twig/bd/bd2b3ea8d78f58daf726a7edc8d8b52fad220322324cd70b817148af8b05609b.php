<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2eac2be49c4a21aedd39fb9d2ffc8913d1045424c1665fad4209a17797e101be extends Twig_Template
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
        $__internal_a3d3d29d40ab31e6648828c8628769d7d1f15f0e2aed09ddf0f411cd9e0cf302 = $this->env->getExtension("native_profiler");
        $__internal_a3d3d29d40ab31e6648828c8628769d7d1f15f0e2aed09ddf0f411cd9e0cf302->enter($__internal_a3d3d29d40ab31e6648828c8628769d7d1f15f0e2aed09ddf0f411cd9e0cf302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d3d29d40ab31e6648828c8628769d7d1f15f0e2aed09ddf0f411cd9e0cf302->leave($__internal_a3d3d29d40ab31e6648828c8628769d7d1f15f0e2aed09ddf0f411cd9e0cf302_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_748a64a3c002261e4100dfbc2e164c406d024fb12c27f19cc9e01fbd065d3234 = $this->env->getExtension("native_profiler");
        $__internal_748a64a3c002261e4100dfbc2e164c406d024fb12c27f19cc9e01fbd065d3234->enter($__internal_748a64a3c002261e4100dfbc2e164c406d024fb12c27f19cc9e01fbd065d3234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_748a64a3c002261e4100dfbc2e164c406d024fb12c27f19cc9e01fbd065d3234->leave($__internal_748a64a3c002261e4100dfbc2e164c406d024fb12c27f19cc9e01fbd065d3234_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68864480aaa48a1871e57ab648c7ea14ae405e5bc4f5c1dc8bc6311854597f53 = $this->env->getExtension("native_profiler");
        $__internal_68864480aaa48a1871e57ab648c7ea14ae405e5bc4f5c1dc8bc6311854597f53->enter($__internal_68864480aaa48a1871e57ab648c7ea14ae405e5bc4f5c1dc8bc6311854597f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68864480aaa48a1871e57ab648c7ea14ae405e5bc4f5c1dc8bc6311854597f53->leave($__internal_68864480aaa48a1871e57ab648c7ea14ae405e5bc4f5c1dc8bc6311854597f53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2af70b33ce8af7b813812e3604db5cf051f79002b3a25348120f321826084c8 = $this->env->getExtension("native_profiler");
        $__internal_a2af70b33ce8af7b813812e3604db5cf051f79002b3a25348120f321826084c8->enter($__internal_a2af70b33ce8af7b813812e3604db5cf051f79002b3a25348120f321826084c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2af70b33ce8af7b813812e3604db5cf051f79002b3a25348120f321826084c8->leave($__internal_a2af70b33ce8af7b813812e3604db5cf051f79002b3a25348120f321826084c8_prof);

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
