<?php

/* @Admin/Entities/add.html.twig */
class __TwigTemplate_653fe61ec8fa7c1e2d3c62f359aae5bfc130a286e5a826cdf9a9b79186b42e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Entities/add.html.twig", 1);
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
        $__internal_9952009eb6fe53638ab45072fc92db4c7e5881ac7783d7ac7adeabd1b10cc7f4 = $this->env->getExtension("native_profiler");
        $__internal_9952009eb6fe53638ab45072fc92db4c7e5881ac7783d7ac7adeabd1b10cc7f4->enter($__internal_9952009eb6fe53638ab45072fc92db4c7e5881ac7783d7ac7adeabd1b10cc7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Entities/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9952009eb6fe53638ab45072fc92db4c7e5881ac7783d7ac7adeabd1b10cc7f4->leave($__internal_9952009eb6fe53638ab45072fc92db4c7e5881ac7783d7ac7adeabd1b10cc7f4_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_79db731415d07a99bc657bb5d5ca1ed7fc27aa465668bd11063012e00455f432 = $this->env->getExtension("native_profiler");
        $__internal_79db731415d07a99bc657bb5d5ca1ed7fc27aa465668bd11063012e00455f432->enter($__internal_79db731415d07a99bc657bb5d5ca1ed7fc27aa465668bd11063012e00455f432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_79db731415d07a99bc657bb5d5ca1ed7fc27aa465668bd11063012e00455f432->leave($__internal_79db731415d07a99bc657bb5d5ca1ed7fc27aa465668bd11063012e00455f432_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9851c1fc355091fdb084a1dcb58bd958bb8cc6f3d0dacb7c1416c8dee3e7c013 = $this->env->getExtension("native_profiler");
        $__internal_9851c1fc355091fdb084a1dcb58bd958bb8cc6f3d0dacb7c1416c8dee3e7c013->enter($__internal_9851c1fc355091fdb084a1dcb58bd958bb8cc6f3d0dacb7c1416c8dee3e7c013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9851c1fc355091fdb084a1dcb58bd958bb8cc6f3d0dacb7c1416c8dee3e7c013->leave($__internal_9851c1fc355091fdb084a1dcb58bd958bb8cc6f3d0dacb7c1416c8dee3e7c013_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Entities/add.html.twig";
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
