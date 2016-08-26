<?php

/* @Admin/Entities/update.html.twig */
class __TwigTemplate_98c63f9a1fbfe9634dacc09e928e8db9f0ab7564ce0477be7f09c7c09ffb8e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Entities/update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_c96bf6d2fc1c0e7743452697fa1460cd4bd2345445087e1733c054803bac1f84 = $this->env->getExtension("native_profiler");
        $__internal_c96bf6d2fc1c0e7743452697fa1460cd4bd2345445087e1733c054803bac1f84->enter($__internal_c96bf6d2fc1c0e7743452697fa1460cd4bd2345445087e1733c054803bac1f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Entities/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96bf6d2fc1c0e7743452697fa1460cd4bd2345445087e1733c054803bac1f84->leave($__internal_c96bf6d2fc1c0e7743452697fa1460cd4bd2345445087e1733c054803bac1f84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70291ba919c09c9b1ab9b6b56c48c9f13ff972993cffa2f3c294a8d38d7bfb67 = $this->env->getExtension("native_profiler");
        $__internal_70291ba919c09c9b1ab9b6b56c48c9f13ff972993cffa2f3c294a8d38d7bfb67->enter($__internal_70291ba919c09c9b1ab9b6b56c48c9f13ff972993cffa2f3c294a8d38d7bfb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Entities:update";
        
        $__internal_70291ba919c09c9b1ab9b6b56c48c9f13ff972993cffa2f3c294a8d38d7bfb67->leave($__internal_70291ba919c09c9b1ab9b6b56c48c9f13ff972993cffa2f3c294a8d38d7bfb67_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f158d077d36d5404aa8a33a66f6a4b85a0a56d599ae33868235428511f469a2b = $this->env->getExtension("native_profiler");
        $__internal_f158d077d36d5404aa8a33a66f6a4b85a0a56d599ae33868235428511f469a2b->enter($__internal_f158d077d36d5404aa8a33a66f6a4b85a0a56d599ae33868235428511f469a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\">Entities</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Update</b>
    </li>
";
        
        $__internal_f158d077d36d5404aa8a33a66f6a4b85a0a56d599ae33868235428511f469a2b->leave($__internal_f158d077d36d5404aa8a33a66f6a4b85a0a56d599ae33868235428511f469a2b_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_2455ff007bf2b829b15ca3c3fa4a3eb8b12fc5d53ec48933c2643af9cae5ae17 = $this->env->getExtension("native_profiler");
        $__internal_2455ff007bf2b829b15ca3c3fa4a3eb8b12fc5d53ec48933c2643af9cae5ae17->enter($__internal_2455ff007bf2b829b15ca3c3fa4a3eb8b12fc5d53ec48933c2643af9cae5ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            <div class=\"box-body row\">
                
                    <div class=\"form-group col-md-6\">
                        <label for=\"name\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Name")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'label');
        echo "</label>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
          
            </div><!-- /.box-body -->
            <div class=\"box-footer pull-right\">
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>
            </div>
        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div><!-- /.box -->
";
        
        $__internal_2455ff007bf2b829b15ca3c3fa4a3eb8b12fc5d53ec48933c2643af9cae5ae17->leave($__internal_2455ff007bf2b829b15ca3c3fa4a3eb8b12fc5d53ec48933c2643af9cae5ae17_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Entities/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  133 => 43,  129 => 42,  121 => 37,  117 => 36,  111 => 33,  107 => 32,  101 => 29,  97 => 28,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Entities:update{% endblock %}*/
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
/*         <b>Update</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
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
/*           */
/*             </div><!-- /.box-body -->*/
/*             <div class="box-footer pull-right">*/
/*                     <a href="{{ path ("ab_entities_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*                     <a href="{{ path ("ab_entities_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
