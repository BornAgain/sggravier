<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f677459d2b4898f52b0a8a1d75c88b452fda6a129f164652ac5b014d347d7ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a0315310c04cf9c154a4515c8cfce3a83f159c6ae4f9e0e79579542dcc5a05c = $this->env->getExtension("native_profiler");
        $__internal_9a0315310c04cf9c154a4515c8cfce3a83f159c6ae4f9e0e79579542dcc5a05c->enter($__internal_9a0315310c04cf9c154a4515c8cfce3a83f159c6ae4f9e0e79579542dcc5a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0315310c04cf9c154a4515c8cfce3a83f159c6ae4f9e0e79579542dcc5a05c->leave($__internal_9a0315310c04cf9c154a4515c8cfce3a83f159c6ae4f9e0e79579542dcc5a05c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f328759b0b146705d4d7b64ba5c885b15037baad03829c2d8259bcffeeebd0a3 = $this->env->getExtension("native_profiler");
        $__internal_f328759b0b146705d4d7b64ba5c885b15037baad03829c2d8259bcffeeebd0a3->enter($__internal_f328759b0b146705d4d7b64ba5c885b15037baad03829c2d8259bcffeeebd0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f328759b0b146705d4d7b64ba5c885b15037baad03829c2d8259bcffeeebd0a3->leave($__internal_f328759b0b146705d4d7b64ba5c885b15037baad03829c2d8259bcffeeebd0a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e40d101ef9ef79eebdd3cb493202d8bf09ad69a92b28cca7021c2be0b3f55d3 = $this->env->getExtension("native_profiler");
        $__internal_3e40d101ef9ef79eebdd3cb493202d8bf09ad69a92b28cca7021c2be0b3f55d3->enter($__internal_3e40d101ef9ef79eebdd3cb493202d8bf09ad69a92b28cca7021c2be0b3f55d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3e40d101ef9ef79eebdd3cb493202d8bf09ad69a92b28cca7021c2be0b3f55d3->leave($__internal_3e40d101ef9ef79eebdd3cb493202d8bf09ad69a92b28cca7021c2be0b3f55d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
