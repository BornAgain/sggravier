<?php

/* DashboardBundle:Dashboard:add.html.twig */
class __TwigTemplate_0ee8ccb841ffefb53e6b2627486a2be72aa96c1504c895544ae0afd4257fc487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:add.html.twig", 1);
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
        $__internal_b4e85196b2ea80afffbf007f42e3df69bde07cf7cf3d6065b8cf43a90573cf29 = $this->env->getExtension("native_profiler");
        $__internal_b4e85196b2ea80afffbf007f42e3df69bde07cf7cf3d6065b8cf43a90573cf29->enter($__internal_b4e85196b2ea80afffbf007f42e3df69bde07cf7cf3d6065b8cf43a90573cf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e85196b2ea80afffbf007f42e3df69bde07cf7cf3d6065b8cf43a90573cf29->leave($__internal_b4e85196b2ea80afffbf007f42e3df69bde07cf7cf3d6065b8cf43a90573cf29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cef4340db10b9429dccd6ca2209e6e1f94f8ffd919c4cf557eed289ead9e50f = $this->env->getExtension("native_profiler");
        $__internal_4cef4340db10b9429dccd6ca2209e6e1f94f8ffd919c4cf557eed289ead9e50f->enter($__internal_4cef4340db10b9429dccd6ca2209e6e1f94f8ffd919c4cf557eed289ead9e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:add";
        
        $__internal_4cef4340db10b9429dccd6ca2209e6e1f94f8ffd919c4cf557eed289ead9e50f->leave($__internal_4cef4340db10b9429dccd6ca2209e6e1f94f8ffd919c4cf557eed289ead9e50f_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_4240e2f19587d5e9e10cab563e8b0c22b24cf08993213300107f565f2810728f = $this->env->getExtension("native_profiler");
        $__internal_4240e2f19587d5e9e10cab563e8b0c22b24cf08993213300107f565f2810728f->enter($__internal_4240e2f19587d5e9e10cab563e8b0c22b24cf08993213300107f565f2810728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_4240e2f19587d5e9e10cab563e8b0c22b24cf08993213300107f565f2810728f->leave($__internal_4240e2f19587d5e9e10cab563e8b0c22b24cf08993213300107f565f2810728f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fdaf2d83406fa2813e53d11db6a0474d4836d8e7a4536a3ed9d4e9e06baaf6 = $this->env->getExtension("native_profiler");
        $__internal_f3fdaf2d83406fa2813e53d11db6a0474d4836d8e7a4536a3ed9d4e9e06baaf6->enter($__internal_f3fdaf2d83406fa2813e53d11db6a0474d4836d8e7a4536a3ed9d4e9e06baaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3fdaf2d83406fa2813e53d11db6a0474d4836d8e7a4536a3ed9d4e9e06baaf6->leave($__internal_f3fdaf2d83406fa2813e53d11db6a0474d4836d8e7a4536a3ed9d4e9e06baaf6_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:add.html.twig";
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
