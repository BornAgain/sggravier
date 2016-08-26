<?php

/* AdminBundle:Roles:see.html.twig */
class __TwigTemplate_6448971072e76c95127e75950cf9a354d54586507b14b45ea2921da5617041d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Roles:see.html.twig", 1);
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
        $__internal_b909ce438b8aae20c828cb7dd7cc806dbfa1e651a10e137b5b3c7c5042752389 = $this->env->getExtension("native_profiler");
        $__internal_b909ce438b8aae20c828cb7dd7cc806dbfa1e651a10e137b5b3c7c5042752389->enter($__internal_b909ce438b8aae20c828cb7dd7cc806dbfa1e651a10e137b5b3c7c5042752389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b909ce438b8aae20c828cb7dd7cc806dbfa1e651a10e137b5b3c7c5042752389->leave($__internal_b909ce438b8aae20c828cb7dd7cc806dbfa1e651a10e137b5b3c7c5042752389_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec5788ddb94cf3d47c0366c54bda3651a781a9660c5c501ad002da8398a41ceb = $this->env->getExtension("native_profiler");
        $__internal_ec5788ddb94cf3d47c0366c54bda3651a781a9660c5c501ad002da8398a41ceb->enter($__internal_ec5788ddb94cf3d47c0366c54bda3651a781a9660c5c501ad002da8398a41ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:see";
        
        $__internal_ec5788ddb94cf3d47c0366c54bda3651a781a9660c5c501ad002da8398a41ceb->leave($__internal_ec5788ddb94cf3d47c0366c54bda3651a781a9660c5c501ad002da8398a41ceb_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1238f4355bc60fcf743bdffe869098673c209e2cacbb2fddfd313791617506f1 = $this->env->getExtension("native_profiler");
        $__internal_1238f4355bc60fcf743bdffe869098673c209e2cacbb2fddfd313791617506f1->enter($__internal_1238f4355bc60fcf743bdffe869098673c209e2cacbb2fddfd313791617506f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\">Roles</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>See</b>
    </li>
";
        
        $__internal_1238f4355bc60fcf743bdffe869098673c209e2cacbb2fddfd313791617506f1->leave($__internal_1238f4355bc60fcf743bdffe869098673c209e2cacbb2fddfd313791617506f1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_50952d1603b5b0757700647165e58def18ceb7303d9c63498e942a12493503f0 = $this->env->getExtension("native_profiler");
        $__internal_50952d1603b5b0757700647165e58def18ceb7303d9c63498e942a12493503f0->enter($__internal_50952d1603b5b0757700647165e58def18ceb7303d9c63498e942a12493503f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>    
            </div>
            
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>
        </div><!-- /.box-body --> 
";
        
        $__internal_50952d1603b5b0757700647165e58def18ceb7303d9c63498e942a12493503f0->leave($__internal_50952d1603b5b0757700647165e58def18ceb7303d9c63498e942a12493503f0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Roles:see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  107 => 35,  99 => 30,  92 => 26,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:see{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_roles_list") }}">Roles</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>See</b>*/
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
/*             <div class="form-group">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate | date("Y-m-d H:i:s") }}</div>    */
/*             </div>*/
/*             */
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("ab_roles_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/*         </div><!-- /.box-body --> */
/* {% endblock %}*/
/* */
