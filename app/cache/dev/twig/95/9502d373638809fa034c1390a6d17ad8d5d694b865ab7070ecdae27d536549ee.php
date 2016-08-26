<?php

/* @Admin/Entities/see.html.twig */
class __TwigTemplate_edd6c5dc63bc8a6aba554376b6fae85f951b7ccad01b72e815bede8c00b96d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Entities/see.html.twig", 1);
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
        $__internal_0361ff9628759b65a0804a818ffab8b38595579be77966546a178ce1f58bac5a = $this->env->getExtension("native_profiler");
        $__internal_0361ff9628759b65a0804a818ffab8b38595579be77966546a178ce1f58bac5a->enter($__internal_0361ff9628759b65a0804a818ffab8b38595579be77966546a178ce1f58bac5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Entities/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0361ff9628759b65a0804a818ffab8b38595579be77966546a178ce1f58bac5a->leave($__internal_0361ff9628759b65a0804a818ffab8b38595579be77966546a178ce1f58bac5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_578cef093e2479036f42e2f19e8a487aebd5998750ef8dc3b46820b775007bfa = $this->env->getExtension("native_profiler");
        $__internal_578cef093e2479036f42e2f19e8a487aebd5998750ef8dc3b46820b775007bfa->enter($__internal_578cef093e2479036f42e2f19e8a487aebd5998750ef8dc3b46820b775007bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Entities:see";
        
        $__internal_578cef093e2479036f42e2f19e8a487aebd5998750ef8dc3b46820b775007bfa->leave($__internal_578cef093e2479036f42e2f19e8a487aebd5998750ef8dc3b46820b775007bfa_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b927bcbef9e211a2d95b90c37aed5a6e9386fd92e4dd7ea96af86fca26d18742 = $this->env->getExtension("native_profiler");
        $__internal_b927bcbef9e211a2d95b90c37aed5a6e9386fd92e4dd7ea96af86fca26d18742->enter($__internal_b927bcbef9e211a2d95b90c37aed5a6e9386fd92e4dd7ea96af86fca26d18742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <b>See</b>>
    </li>
";
        
        $__internal_b927bcbef9e211a2d95b90c37aed5a6e9386fd92e4dd7ea96af86fca26d18742->leave($__internal_b927bcbef9e211a2d95b90c37aed5a6e9386fd92e4dd7ea96af86fca26d18742_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc143c2101c08b4e557cb024fe97b473f0e67a00cb852388b2ca52a8dbfcb389 = $this->env->getExtension("native_profiler");
        $__internal_fc143c2101c08b4e557cb024fe97b473f0e67a00cb852388b2ca52a8dbfcb389->enter($__internal_fc143c2101c08b4e557cb024fe97b473f0e67a00cb852388b2ca52a8dbfcb389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div class=\"form-group\">
                <label for=\"country\">Description</label>
                <div class=\"form-control\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</div>    
            </div>
                    
            <div class=\"form-group\">
                <label for=\"country\">Short Label</label>
                <div class=\"form-control\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shortLabel", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"form-group\">
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
            </div>
            
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_entities_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_entities_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>
            
        </div><!-- /.box-body -->

       
";
        
        $__internal_fc143c2101c08b4e557cb024fe97b473f0e67a00cb852388b2ca52a8dbfcb389->leave($__internal_fc143c2101c08b4e557cb024fe97b473f0e67a00cb852388b2ca52a8dbfcb389_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Entities/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  115 => 40,  107 => 35,  100 => 31,  92 => 26,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Entities:see{% endblock %}*/
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
/*         <b>See</b>>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div class="form-group">*/
/*                 <label for="country">Description</label>*/
/*                 <div class="form-control">{{ entity.description }}</div>    */
/*             </div>*/
/*                     */
/*             <div class="form-group">*/
/*                 <label for="country">Short Label</label>*/
/*                 <div class="form-control">{{ entity.shortLabel }}</div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate | date('Y-m-d H:i:s') }}</div>*/
/*             </div>*/
/*             */
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_entities_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("ab_entities_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/*             */
/*         </div><!-- /.box-body -->*/
/* */
/*        */
/* {% endblock %}*/
