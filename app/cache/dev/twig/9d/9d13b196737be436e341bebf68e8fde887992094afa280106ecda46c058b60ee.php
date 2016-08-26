<?php

/* @Sample/User/add.html.twig */
class __TwigTemplate_e6876a4616ca530b72881dd672961c5fe8b8e0a0a7cb570f30e9e7f64d96cf96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Sample/User/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31fa900307a3e48fb3b99f69276428d818a1adc44b20e3f9fc43b0eee20f7d6a = $this->env->getExtension("native_profiler");
        $__internal_31fa900307a3e48fb3b99f69276428d818a1adc44b20e3f9fc43b0eee20f7d6a->enter($__internal_31fa900307a3e48fb3b99f69276428d818a1adc44b20e3f9fc43b0eee20f7d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sample/User/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31fa900307a3e48fb3b99f69276428d818a1adc44b20e3f9fc43b0eee20f7d6a->leave($__internal_31fa900307a3e48fb3b99f69276428d818a1adc44b20e3f9fc43b0eee20f7d6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc4ed27005ccc46c649e1bd55c2ce17a9ca4743e0dae9de5f7452723dcdd86c7 = $this->env->getExtension("native_profiler");
        $__internal_cc4ed27005ccc46c649e1bd55c2ce17a9ca4743e0dae9de5f7452723dcdd86c7->enter($__internal_cc4ed27005ccc46c649e1bd55c2ce17a9ca4743e0dae9de5f7452723dcdd86c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:add";
        
        $__internal_cc4ed27005ccc46c649e1bd55c2ce17a9ca4743e0dae9de5f7452723dcdd86c7->leave($__internal_cc4ed27005ccc46c649e1bd55c2ce17a9ca4743e0dae9de5f7452723dcdd86c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0ca74836de705669aec12f8f9ac09e66d63eefbb2ef3718426e6e0a7780b799 = $this->env->getExtension("native_profiler");
        $__internal_f0ca74836de705669aec12f8f9ac09e66d63eefbb2ef3718426e6e0a7780b799->enter($__internal_f0ca74836de705669aec12f8f9ac09e66d63eefbb2ef3718426e6e0a7780b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:add page</h1>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
    <div class=\"x_content\">
        <br />
        <div id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">
            <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"month-title\">Username <span class=\"required\">*</span>
                </label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                </div>
            </div>                                        
            <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Password<span class=\"required\">*</span>
                </label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                </div>
            </div>

            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">

                    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("sb_user_list");
        echo "\"><button type=\"submit\" class=\"btn btn-primary\">Cancel</button></a>
                    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>

        </div>
    </div>
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f0ca74836de705669aec12f8f9ac09e66d63eefbb2ef3718426e6e0a7780b799->leave($__internal_f0ca74836de705669aec12f8f9ac09e66d63eefbb2ef3718426e6e0a7780b799_prof);

    }

    public function getTemplateName()
    {
        return "@Sample/User/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  89 => 31,  78 => 23,  68 => 16,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}SampleBundle:User:add{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:add page</h1>*/
/* */
/* {{ form_start(form, {'method': 'POST'}) }}*/
/*     <div class="x_content">*/
/*         <br />*/
/*         <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">*/
/*             <div class="form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="month-title">Username <span class="required">*</span>*/
/*                 </label>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     {{ form_widget(form.username, {'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                 </div>*/
/*             </div>                                        */
/*             <div class="form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span>*/
/*                 </label>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     {{ form_widget(form.password, {'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="ln_solid"></div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/* */
/*                     <a href="{{ path("sb_user_list")}}"><button type="submit" class="btn btn-primary">Cancel</button></a>*/
/*                     <button type="submit" class="btn btn-success">Submit</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
