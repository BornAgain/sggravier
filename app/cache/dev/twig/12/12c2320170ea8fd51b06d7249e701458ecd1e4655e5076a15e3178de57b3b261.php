<?php

/* AdminBundle:Entities:add.html.twig */
class __TwigTemplate_b70264728964841c26a1f26701b2e7b8e6a58ebd1455389141dbfd28a2f67b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Entities:add.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e0b1d49715f0ef8bc19f72c763df75e6cc6cc35ae490df6c20b328e9c5f0cc2 = $this->env->getExtension("native_profiler");
        $__internal_3e0b1d49715f0ef8bc19f72c763df75e6cc6cc35ae490df6c20b328e9c5f0cc2->enter($__internal_3e0b1d49715f0ef8bc19f72c763df75e6cc6cc35ae490df6c20b328e9c5f0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0b1d49715f0ef8bc19f72c763df75e6cc6cc35ae490df6c20b328e9c5f0cc2->leave($__internal_3e0b1d49715f0ef8bc19f72c763df75e6cc6cc35ae490df6c20b328e9c5f0cc2_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_345aa550823e09088708d2b23acc5672e4a177b5c63ffed44b84648b5c7ff6be = $this->env->getExtension("native_profiler");
        $__internal_345aa550823e09088708d2b23acc5672e4a177b5c63ffed44b84648b5c7ff6be->enter($__internal_345aa550823e09088708d2b23acc5672e4a177b5c63ffed44b84648b5c7ff6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 5
        echo "    <li>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\">Entities</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_345aa550823e09088708d2b23acc5672e4a177b5c63ffed44b84648b5c7ff6be->leave($__internal_345aa550823e09088708d2b23acc5672e4a177b5c63ffed44b84648b5c7ff6be_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_8839c111066919719b9ab5fad90d9289616d3bd4002540d3e8cf654287b717a7 = $this->env->getExtension("native_profiler");
        $__internal_8839c111066919719b9ab5fad90d9289616d3bd4002540d3e8cf654287b717a7->enter($__internal_8839c111066919719b9ab5fad90d9289616d3bd4002540d3e8cf654287b717a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            <div class=\"box-body row\">
                
                    <div class=\"form-group col-md-6\">
                        <label for=\"name\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Name")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'label');
        echo "</label>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
            </div><!-- /.box-body -->
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            </div>
        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div><!-- /.box -->
";
        
        $__internal_8839c111066919719b9ab5fad90d9289616d3bd4002540d3e8cf654287b717a7->leave($__internal_8839c111066919719b9ab5fad90d9289616d3bd4002540d3e8cf654287b717a7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Entities:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  116 => 41,  108 => 36,  104 => 35,  98 => 32,  94 => 31,  88 => 28,  84 => 27,  77 => 23,  71 => 19,  65 => 18,  51 => 10,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_entities_list") }}">Entities</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Add</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*             <div class="box-body row">*/
/*                 */
/*                     <div class="form-group col-md-6">*/
/*                         <label for="name">{{ form_label(form.description) }}</label>*/
/*                         {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder': 'Institution Name'}}) }}*/
/*                     </div>*/
/*                     <div class="form-group col-md-6">*/
/*                         <label for="country">{{ form_label(form.shortLabel) }}</label>*/
/*                         {{ form_widget(form.shortLabel, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                     </div>*/
/*                     <div class="form-group col-md-6">*/
/*                         <label for="country">{{ form_label(form.enabled) }}</label>*/
/*                         {{ form_widget(form.enabled, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                     </div>*/
/*             </div><!-- /.box-body -->*/
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_entities_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
/* */
