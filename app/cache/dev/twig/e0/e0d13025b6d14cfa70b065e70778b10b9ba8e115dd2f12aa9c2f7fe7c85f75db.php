<?php

/* DashboardBundle:Dashboard:add.html.twig */
class __TwigTemplate_c710da1b19deaad36cee49b1f45e80b8cf1994fea9ad9b4bbb3e02d971b44c1a extends Twig_Template
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
        $__internal_94cd3f774856a1999994844f07b5936613b2e6fc97899c185ec48cece4bbbf9d = $this->env->getExtension("native_profiler");
        $__internal_94cd3f774856a1999994844f07b5936613b2e6fc97899c185ec48cece4bbbf9d->enter($__internal_94cd3f774856a1999994844f07b5936613b2e6fc97899c185ec48cece4bbbf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94cd3f774856a1999994844f07b5936613b2e6fc97899c185ec48cece4bbbf9d->leave($__internal_94cd3f774856a1999994844f07b5936613b2e6fc97899c185ec48cece4bbbf9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e3215dbd6dc3151c09153c392ae6253e972d0697a751ef732e67848e942fb92 = $this->env->getExtension("native_profiler");
        $__internal_5e3215dbd6dc3151c09153c392ae6253e972d0697a751ef732e67848e942fb92->enter($__internal_5e3215dbd6dc3151c09153c392ae6253e972d0697a751ef732e67848e942fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:add";
        
        $__internal_5e3215dbd6dc3151c09153c392ae6253e972d0697a751ef732e67848e942fb92->leave($__internal_5e3215dbd6dc3151c09153c392ae6253e972d0697a751ef732e67848e942fb92_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f68ea7a3cafdb1974891f351975eb88523d0cd509d5da5aeee2c7cd2e62b07c7 = $this->env->getExtension("native_profiler");
        $__internal_f68ea7a3cafdb1974891f351975eb88523d0cd509d5da5aeee2c7cd2e62b07c7->enter($__internal_f68ea7a3cafdb1974891f351975eb88523d0cd509d5da5aeee2c7cd2e62b07c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"db_dashboard_add\">Add</a>
    </li>
";
        
        $__internal_f68ea7a3cafdb1974891f351975eb88523d0cd509d5da5aeee2c7cd2e62b07c7->leave($__internal_f68ea7a3cafdb1974891f351975eb88523d0cd509d5da5aeee2c7cd2e62b07c7_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f1721af5a90ca46f5a438286d1cc4a9d8704491707d81b81eaf22929bf48ce = $this->env->getExtension("native_profiler");
        $__internal_33f1721af5a90ca46f5a438286d1cc4a9d8704491707d81b81eaf22929bf48ce->enter($__internal_33f1721af5a90ca46f5a438286d1cc4a9d8704491707d81b81eaf22929bf48ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\"> </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group\">
                <label for=\"dashboard_name_id\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard name")));
        echo "
            </div>   
            
        </div>
        
        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
        </div>
        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_33f1721af5a90ca46f5a438286d1cc4a9d8704491707d81b81eaf22929bf48ce->leave($__internal_33f1721af5a90ca46f5a438286d1cc4a9d8704491707d81b81eaf22929bf48ce_prof);

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
        return array (  110 => 35,  105 => 33,  96 => 27,  92 => 26,  86 => 23,  81 => 20,  75 => 19,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="db_dashboard_add">Add</a>*/
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
