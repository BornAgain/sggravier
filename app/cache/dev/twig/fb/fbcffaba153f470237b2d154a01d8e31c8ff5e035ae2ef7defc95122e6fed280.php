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
        $__internal_cd59709b1c640cf417ffd1bf0277d19a5253c26f8bc1749ca04567287fd22bdb = $this->env->getExtension("native_profiler");
        $__internal_cd59709b1c640cf417ffd1bf0277d19a5253c26f8bc1749ca04567287fd22bdb->enter($__internal_cd59709b1c640cf417ffd1bf0277d19a5253c26f8bc1749ca04567287fd22bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd59709b1c640cf417ffd1bf0277d19a5253c26f8bc1749ca04567287fd22bdb->leave($__internal_cd59709b1c640cf417ffd1bf0277d19a5253c26f8bc1749ca04567287fd22bdb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9cdefa55e68098b7e939388e5fd004315ade1f6177162b3e9971881f99defba = $this->env->getExtension("native_profiler");
        $__internal_a9cdefa55e68098b7e939388e5fd004315ade1f6177162b3e9971881f99defba->enter($__internal_a9cdefa55e68098b7e939388e5fd004315ade1f6177162b3e9971881f99defba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9cdefa55e68098b7e939388e5fd004315ade1f6177162b3e9971881f99defba->leave($__internal_a9cdefa55e68098b7e939388e5fd004315ade1f6177162b3e9971881f99defba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf6d32fd68dd136a56ec83c30e18588154ed9bc246641d43bc15b5c066e85544 = $this->env->getExtension("native_profiler");
        $__internal_bf6d32fd68dd136a56ec83c30e18588154ed9bc246641d43bc15b5c066e85544->enter($__internal_bf6d32fd68dd136a56ec83c30e18588154ed9bc246641d43bc15b5c066e85544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf6d32fd68dd136a56ec83c30e18588154ed9bc246641d43bc15b5c066e85544->leave($__internal_bf6d32fd68dd136a56ec83c30e18588154ed9bc246641d43bc15b5c066e85544_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44c718cd1b8aa5c19389f98d57ad9c5d57240360838d7d7b62ee75a4c90fe525 = $this->env->getExtension("native_profiler");
        $__internal_44c718cd1b8aa5c19389f98d57ad9c5d57240360838d7d7b62ee75a4c90fe525->enter($__internal_44c718cd1b8aa5c19389f98d57ad9c5d57240360838d7d7b62ee75a4c90fe525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44c718cd1b8aa5c19389f98d57ad9c5d57240360838d7d7b62ee75a4c90fe525->leave($__internal_44c718cd1b8aa5c19389f98d57ad9c5d57240360838d7d7b62ee75a4c90fe525_prof);

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
