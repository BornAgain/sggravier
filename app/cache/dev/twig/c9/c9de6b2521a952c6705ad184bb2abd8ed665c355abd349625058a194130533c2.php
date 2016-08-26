<?php

/* AdminBundle:Entities:add.html.twig */
class __TwigTemplate_64b602db1dc82a8f7fe1e118eba5d7893aea9a23fa5d92950722c1277e3f7621 extends Twig_Template
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
        $__internal_1d2b15425ca332515eafdef260825d73527ddf52884098cf966af5b05ebc751d = $this->env->getExtension("native_profiler");
        $__internal_1d2b15425ca332515eafdef260825d73527ddf52884098cf966af5b05ebc751d->enter($__internal_1d2b15425ca332515eafdef260825d73527ddf52884098cf966af5b05ebc751d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2b15425ca332515eafdef260825d73527ddf52884098cf966af5b05ebc751d->leave($__internal_1d2b15425ca332515eafdef260825d73527ddf52884098cf966af5b05ebc751d_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_17ce96b80e97bcd2f42676df6e8c6e2d8808ed9e8dc5f7df7fc14566adfb8b1a = $this->env->getExtension("native_profiler");
        $__internal_17ce96b80e97bcd2f42676df6e8c6e2d8808ed9e8dc5f7df7fc14566adfb8b1a->enter($__internal_17ce96b80e97bcd2f42676df6e8c6e2d8808ed9e8dc5f7df7fc14566adfb8b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_17ce96b80e97bcd2f42676df6e8c6e2d8808ed9e8dc5f7df7fc14566adfb8b1a->leave($__internal_17ce96b80e97bcd2f42676df6e8c6e2d8808ed9e8dc5f7df7fc14566adfb8b1a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5f7c0108b40a759a995de2ff1e8f56a3f27a986ae6db6ff03282fd3771ec4c = $this->env->getExtension("native_profiler");
        $__internal_2d5f7c0108b40a759a995de2ff1e8f56a3f27a986ae6db6ff03282fd3771ec4c->enter($__internal_2d5f7c0108b40a759a995de2ff1e8f56a3f27a986ae6db6ff03282fd3771ec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d5f7c0108b40a759a995de2ff1e8f56a3f27a986ae6db6ff03282fd3771ec4c->leave($__internal_2d5f7c0108b40a759a995de2ff1e8f56a3f27a986ae6db6ff03282fd3771ec4c_prof);

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
