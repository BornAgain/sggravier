<?php

/* @Dashboard/Dashboard/add.html.twig */
class __TwigTemplate_22f217bb40f332d059f2dc24a9da8964c15cc61777e371bb09ca48f4a04e4924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Dashboard/add.html.twig", 1);
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
        $__internal_a1b78dc5718eb406ace03d0d1faeefcfc6f21fe6458ba7e66114ec10d0f286ff = $this->env->getExtension("native_profiler");
        $__internal_a1b78dc5718eb406ace03d0d1faeefcfc6f21fe6458ba7e66114ec10d0f286ff->enter($__internal_a1b78dc5718eb406ace03d0d1faeefcfc6f21fe6458ba7e66114ec10d0f286ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b78dc5718eb406ace03d0d1faeefcfc6f21fe6458ba7e66114ec10d0f286ff->leave($__internal_a1b78dc5718eb406ace03d0d1faeefcfc6f21fe6458ba7e66114ec10d0f286ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ea7cca30ca63c0a779e26de19401c96721a713d19fc79da2d64f3ca704cbb9 = $this->env->getExtension("native_profiler");
        $__internal_b4ea7cca30ca63c0a779e26de19401c96721a713d19fc79da2d64f3ca704cbb9->enter($__internal_b4ea7cca30ca63c0a779e26de19401c96721a713d19fc79da2d64f3ca704cbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:add";
        
        $__internal_b4ea7cca30ca63c0a779e26de19401c96721a713d19fc79da2d64f3ca704cbb9->leave($__internal_b4ea7cca30ca63c0a779e26de19401c96721a713d19fc79da2d64f3ca704cbb9_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_634ff06575a31ef03e9369837a330a84357dd00ee93d4b009fd3772711bff9e6 = $this->env->getExtension("native_profiler");
        $__internal_634ff06575a31ef03e9369837a330a84357dd00ee93d4b009fd3772711bff9e6->enter($__internal_634ff06575a31ef03e9369837a330a84357dd00ee93d4b009fd3772711bff9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_634ff06575a31ef03e9369837a330a84357dd00ee93d4b009fd3772711bff9e6->leave($__internal_634ff06575a31ef03e9369837a330a84357dd00ee93d4b009fd3772711bff9e6_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b5d3a0258e7575bae6d87e5980b79c021a3bd0a8c3021d38559b9a0164148a = $this->env->getExtension("native_profiler");
        $__internal_c7b5d3a0258e7575bae6d87e5980b79c021a3bd0a8c3021d38559b9a0164148a->enter($__internal_c7b5d3a0258e7575bae6d87e5980b79c021a3bd0a8c3021d38559b9a0164148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group\">
                <label for=\"dashboard_name_id\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard name")));
        echo "
            </div>   
            
        </div>
        
        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_c7b5d3a0258e7575bae6d87e5980b79c021a3bd0a8c3021d38559b9a0164148a->leave($__internal_c7b5d3a0258e7575bae6d87e5980b79c021a3bd0a8c3021d38559b9a0164148a_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  101 => 29,  92 => 23,  88 => 22,  82 => 19,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Add</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header"> </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group">*/
/*                 <label for="dashboard_name_id">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'tabindex' : '1','id' : 'dashboard_name_id','class': 'form-control','placeholder': 'Dashboard name'}}) }}*/
/*             </div>   */
/*             */
/*         </div>*/
/*         */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
