<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0199a68a5734a14e0ab920cec2600b221cb8b3743c91341a8e80488f7f9d664a extends Twig_Template
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
        $__internal_3f0b83837c26762bb55b5ef9e4137ee33f6cc8716dc3838e3e3f4e67f751f327 = $this->env->getExtension("native_profiler");
        $__internal_3f0b83837c26762bb55b5ef9e4137ee33f6cc8716dc3838e3e3f4e67f751f327->enter($__internal_3f0b83837c26762bb55b5ef9e4137ee33f6cc8716dc3838e3e3f4e67f751f327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f0b83837c26762bb55b5ef9e4137ee33f6cc8716dc3838e3e3f4e67f751f327->leave($__internal_3f0b83837c26762bb55b5ef9e4137ee33f6cc8716dc3838e3e3f4e67f751f327_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4154ac3562e1cbb6805bcbeb23c91dda6cd7767a9d7424ff709d64128bc51ca1 = $this->env->getExtension("native_profiler");
        $__internal_4154ac3562e1cbb6805bcbeb23c91dda6cd7767a9d7424ff709d64128bc51ca1->enter($__internal_4154ac3562e1cbb6805bcbeb23c91dda6cd7767a9d7424ff709d64128bc51ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4154ac3562e1cbb6805bcbeb23c91dda6cd7767a9d7424ff709d64128bc51ca1->leave($__internal_4154ac3562e1cbb6805bcbeb23c91dda6cd7767a9d7424ff709d64128bc51ca1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c58722cb08df39f63ad53fc29d1d2b158c67b926f71e34ef038cb9fa287ea19 = $this->env->getExtension("native_profiler");
        $__internal_9c58722cb08df39f63ad53fc29d1d2b158c67b926f71e34ef038cb9fa287ea19->enter($__internal_9c58722cb08df39f63ad53fc29d1d2b158c67b926f71e34ef038cb9fa287ea19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c58722cb08df39f63ad53fc29d1d2b158c67b926f71e34ef038cb9fa287ea19->leave($__internal_9c58722cb08df39f63ad53fc29d1d2b158c67b926f71e34ef038cb9fa287ea19_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a27a07506f1311252fe39c68abf726a775134ba4728994444cd3bd6934e7be2 = $this->env->getExtension("native_profiler");
        $__internal_4a27a07506f1311252fe39c68abf726a775134ba4728994444cd3bd6934e7be2->enter($__internal_4a27a07506f1311252fe39c68abf726a775134ba4728994444cd3bd6934e7be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a27a07506f1311252fe39c68abf726a775134ba4728994444cd3bd6934e7be2->leave($__internal_4a27a07506f1311252fe39c68abf726a775134ba4728994444cd3bd6934e7be2_prof);

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
