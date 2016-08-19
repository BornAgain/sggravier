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
        $__internal_09db3cdf4bf433252301d18b8835c583ee7876057b9281e789d6392cd2df0d86 = $this->env->getExtension("native_profiler");
        $__internal_09db3cdf4bf433252301d18b8835c583ee7876057b9281e789d6392cd2df0d86->enter($__internal_09db3cdf4bf433252301d18b8835c583ee7876057b9281e789d6392cd2df0d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09db3cdf4bf433252301d18b8835c583ee7876057b9281e789d6392cd2df0d86->leave($__internal_09db3cdf4bf433252301d18b8835c583ee7876057b9281e789d6392cd2df0d86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c98e88fbd774e5fe18510aad6a3cc7e3ffecf8451acfbfde81bfc2c0871c576 = $this->env->getExtension("native_profiler");
        $__internal_2c98e88fbd774e5fe18510aad6a3cc7e3ffecf8451acfbfde81bfc2c0871c576->enter($__internal_2c98e88fbd774e5fe18510aad6a3cc7e3ffecf8451acfbfde81bfc2c0871c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c98e88fbd774e5fe18510aad6a3cc7e3ffecf8451acfbfde81bfc2c0871c576->leave($__internal_2c98e88fbd774e5fe18510aad6a3cc7e3ffecf8451acfbfde81bfc2c0871c576_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92f813ef5d53a6e51e464b47dadc3e614b4e9b10f845f1103c556e948941ead5 = $this->env->getExtension("native_profiler");
        $__internal_92f813ef5d53a6e51e464b47dadc3e614b4e9b10f845f1103c556e948941ead5->enter($__internal_92f813ef5d53a6e51e464b47dadc3e614b4e9b10f845f1103c556e948941ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92f813ef5d53a6e51e464b47dadc3e614b4e9b10f845f1103c556e948941ead5->leave($__internal_92f813ef5d53a6e51e464b47dadc3e614b4e9b10f845f1103c556e948941ead5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53af26dfa4cd96813303e5c1f9ec8cbeeeb50419d6c8972db7ea059a36aaf7c6 = $this->env->getExtension("native_profiler");
        $__internal_53af26dfa4cd96813303e5c1f9ec8cbeeeb50419d6c8972db7ea059a36aaf7c6->enter($__internal_53af26dfa4cd96813303e5c1f9ec8cbeeeb50419d6c8972db7ea059a36aaf7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53af26dfa4cd96813303e5c1f9ec8cbeeeb50419d6c8972db7ea059a36aaf7c6->leave($__internal_53af26dfa4cd96813303e5c1f9ec8cbeeeb50419d6c8972db7ea059a36aaf7c6_prof);

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
