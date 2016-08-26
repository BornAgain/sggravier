<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b6cadcb29dc064dc5ffeb8e9164bf2ab8b471227ffac6f815ab14663a136218c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7a9d478c556b1e78f55805c9d82dfa9eb98e2e5c0dbcab8cc45fe3e0a2ff1876 = $this->env->getExtension("native_profiler");
        $__internal_7a9d478c556b1e78f55805c9d82dfa9eb98e2e5c0dbcab8cc45fe3e0a2ff1876->enter($__internal_7a9d478c556b1e78f55805c9d82dfa9eb98e2e5c0dbcab8cc45fe3e0a2ff1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9d478c556b1e78f55805c9d82dfa9eb98e2e5c0dbcab8cc45fe3e0a2ff1876->leave($__internal_7a9d478c556b1e78f55805c9d82dfa9eb98e2e5c0dbcab8cc45fe3e0a2ff1876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e1b5e61c6603e09cca1fb4981c104a4a924897b4d907687beafea67661f670e = $this->env->getExtension("native_profiler");
        $__internal_0e1b5e61c6603e09cca1fb4981c104a4a924897b4d907687beafea67661f670e->enter($__internal_0e1b5e61c6603e09cca1fb4981c104a4a924897b4d907687beafea67661f670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e1b5e61c6603e09cca1fb4981c104a4a924897b4d907687beafea67661f670e->leave($__internal_0e1b5e61c6603e09cca1fb4981c104a4a924897b4d907687beafea67661f670e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c0042603b80f000db51835fe7bbfb325a8122877a94566fb1e08429ac846db8 = $this->env->getExtension("native_profiler");
        $__internal_1c0042603b80f000db51835fe7bbfb325a8122877a94566fb1e08429ac846db8->enter($__internal_1c0042603b80f000db51835fe7bbfb325a8122877a94566fb1e08429ac846db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c0042603b80f000db51835fe7bbfb325a8122877a94566fb1e08429ac846db8->leave($__internal_1c0042603b80f000db51835fe7bbfb325a8122877a94566fb1e08429ac846db8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb4080104cb550624496d9440efe055d89ed45d71494962835faa2b0e1c5e42 = $this->env->getExtension("native_profiler");
        $__internal_8fb4080104cb550624496d9440efe055d89ed45d71494962835faa2b0e1c5e42->enter($__internal_8fb4080104cb550624496d9440efe055d89ed45d71494962835faa2b0e1c5e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8fb4080104cb550624496d9440efe055d89ed45d71494962835faa2b0e1c5e42->leave($__internal_8fb4080104cb550624496d9440efe055d89ed45d71494962835faa2b0e1c5e42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
