<?php

/* @Dashboard/Dashboard/see.html.twig */
class __TwigTemplate_f5ab7e8044413c499e80731d847bc87309005d21e4b1a8e43c61d35dc234e432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Dashboard/see.html.twig", 1);
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
        $__internal_6404a3ef1364cced117ce813b7a7e098e78e209430759b92c154aec1c0106952 = $this->env->getExtension("native_profiler");
        $__internal_6404a3ef1364cced117ce813b7a7e098e78e209430759b92c154aec1c0106952->enter($__internal_6404a3ef1364cced117ce813b7a7e098e78e209430759b92c154aec1c0106952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6404a3ef1364cced117ce813b7a7e098e78e209430759b92c154aec1c0106952->leave($__internal_6404a3ef1364cced117ce813b7a7e098e78e209430759b92c154aec1c0106952_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_841e1cf30d4e1a8b59f68666e7abf135d4164e20bf7d276cd52878f6098efdcb = $this->env->getExtension("native_profiler");
        $__internal_841e1cf30d4e1a8b59f68666e7abf135d4164e20bf7d276cd52878f6098efdcb->enter($__internal_841e1cf30d4e1a8b59f68666e7abf135d4164e20bf7d276cd52878f6098efdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:see";
        
        $__internal_841e1cf30d4e1a8b59f68666e7abf135d4164e20bf7d276cd52878f6098efdcb->leave($__internal_841e1cf30d4e1a8b59f68666e7abf135d4164e20bf7d276cd52878f6098efdcb_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_a9ffbe18f1232840546900329f85522a20aa9f98c6ac37d9341d46e9b6baa6d0 = $this->env->getExtension("native_profiler");
        $__internal_a9ffbe18f1232840546900329f85522a20aa9f98c6ac37d9341d46e9b6baa6d0->enter($__internal_a9ffbe18f1232840546900329f85522a20aa9f98c6ac37d9341d46e9b6baa6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>See</b>
    </li>
";
        
        $__internal_a9ffbe18f1232840546900329f85522a20aa9f98c6ac37d9341d46e9b6baa6d0->leave($__internal_a9ffbe18f1232840546900329f85522a20aa9f98c6ac37d9341d46e9b6baa6d0_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a928ef118b3525f3c09fd3ce14186cf6d5351a6b41e244e3fb34446ab75b9137 = $this->env->getExtension("native_profiler");
        $__internal_a928ef118b3525f3c09fd3ce14186cf6d5351a6b41e244e3fb34446ab75b9137->enter($__internal_a928ef118b3525f3c09fd3ce14186cf6d5351a6b41e244e3fb34446ab75b9137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_ticket_add"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "    <div class=\"alert-success\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            
            <div class=\"form-group\">
                <label for=\"country\">Dashboard Name</label>
                <div class=\"form-control\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</div>                    
            </div> 
            <div class=\"form-group\">
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "Y-m-d H:i;s"), "html", null, true);
        echo "</div>                    
            </div> 
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>

        </div><!-- /.box-body -->
";
        
        $__internal_a928ef118b3525f3c09fd3ce14186cf6d5351a6b41e244e3fb34446ab75b9137->leave($__internal_a928ef118b3525f3c09fd3ce14186cf6d5351a6b41e244e3fb34446ab75b9137_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  117 => 36,  110 => 32,  103 => 28,  94 => 21,  85 => 18,  82 => 17,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:see{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>See</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice_ticket_add') %}*/
/*     <div class="alert-success">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             */
/*             <div class="form-group">*/
/*                 <label for="country">Dashboard Name</label>*/
/*                 <div class="form-control">{{ entity.name }}</div>                    */
/*             </div> */
/*             <div class="form-group">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate | date("Y-m-d H:i;s") }}</div>                    */
/*             </div> */
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("db_dashboard_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("db_dashboard_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/* {% endblock %}*/
/* */
