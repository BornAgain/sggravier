<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3811db999f9eed9eec1c062f9fc521899454945816723492465d6e0c2c363d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6af911faceb84c686618e3b6855b10dee57b4c73a0320399e17acad1d23a1ff4 = $this->env->getExtension("native_profiler");
        $__internal_6af911faceb84c686618e3b6855b10dee57b4c73a0320399e17acad1d23a1ff4->enter($__internal_6af911faceb84c686618e3b6855b10dee57b4c73a0320399e17acad1d23a1ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af911faceb84c686618e3b6855b10dee57b4c73a0320399e17acad1d23a1ff4->leave($__internal_6af911faceb84c686618e3b6855b10dee57b4c73a0320399e17acad1d23a1ff4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_979acc3a85b205bb63873b668e891594eb0307bf6c23bf2c5e35bce998d1adc3 = $this->env->getExtension("native_profiler");
        $__internal_979acc3a85b205bb63873b668e891594eb0307bf6c23bf2c5e35bce998d1adc3->enter($__internal_979acc3a85b205bb63873b668e891594eb0307bf6c23bf2c5e35bce998d1adc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_979acc3a85b205bb63873b668e891594eb0307bf6c23bf2c5e35bce998d1adc3->leave($__internal_979acc3a85b205bb63873b668e891594eb0307bf6c23bf2c5e35bce998d1adc3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7962fb2bdbe4085d1499c374d85db769f69a2a6329dcae0843c81dd62570c3 = $this->env->getExtension("native_profiler");
        $__internal_ca7962fb2bdbe4085d1499c374d85db769f69a2a6329dcae0843c81dd62570c3->enter($__internal_ca7962fb2bdbe4085d1499c374d85db769f69a2a6329dcae0843c81dd62570c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca7962fb2bdbe4085d1499c374d85db769f69a2a6329dcae0843c81dd62570c3->leave($__internal_ca7962fb2bdbe4085d1499c374d85db769f69a2a6329dcae0843c81dd62570c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
