<?php

/* @Dashboard/Dashboard/update.html.twig */
class __TwigTemplate_743d8e6cc7359089431a23a994d83070c48a5f7f4b853c5d388b17c39b54cb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Dashboard/update.html.twig", 1);
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
        $__internal_9d1566d7f871b265437b2dc0f0d9375267230108a4fe36a48353c3bd2562babd = $this->env->getExtension("native_profiler");
        $__internal_9d1566d7f871b265437b2dc0f0d9375267230108a4fe36a48353c3bd2562babd->enter($__internal_9d1566d7f871b265437b2dc0f0d9375267230108a4fe36a48353c3bd2562babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1566d7f871b265437b2dc0f0d9375267230108a4fe36a48353c3bd2562babd->leave($__internal_9d1566d7f871b265437b2dc0f0d9375267230108a4fe36a48353c3bd2562babd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d8148026c9e71410105e90f10ae076da193420f3b6af147695065912e55da21 = $this->env->getExtension("native_profiler");
        $__internal_5d8148026c9e71410105e90f10ae076da193420f3b6af147695065912e55da21->enter($__internal_5d8148026c9e71410105e90f10ae076da193420f3b6af147695065912e55da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:update";
        
        $__internal_5d8148026c9e71410105e90f10ae076da193420f3b6af147695065912e55da21->leave($__internal_5d8148026c9e71410105e90f10ae076da193420f3b6af147695065912e55da21_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_4fac6f0cc5ef0072b56e283d5cfd9345809bdef4d9e5c70356836fff03328c7a = $this->env->getExtension("native_profiler");
        $__internal_4fac6f0cc5ef0072b56e283d5cfd9345809bdef4d9e5c70356836fff03328c7a->enter($__internal_4fac6f0cc5ef0072b56e283d5cfd9345809bdef4d9e5c70356836fff03328c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Update</b>
    </li>
";
        
        $__internal_4fac6f0cc5ef0072b56e283d5cfd9345809bdef4d9e5c70356836fff03328c7a->leave($__internal_4fac6f0cc5ef0072b56e283d5cfd9345809bdef4d9e5c70356836fff03328c7a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d918ac689fe340e37b47f0d63ec731d94579aeb39350e74894c546efd3e22893 = $this->env->getExtension("native_profiler");
        $__internal_d918ac689fe340e37b47f0d63ec731d94579aeb39350e74894c546efd3e22893->enter($__internal_d918ac689fe340e37b47f0d63ec731d94579aeb39350e74894c546efd3e22893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header\"></div><!-- /.box-header -->
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-6\">
                <label for=\"dashboard_name_id\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard Name")));
        echo "
            </div>                
        </div>

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

        </div>
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_d918ac689fe340e37b47f0d63ec731d94579aeb39350e74894c546efd3e22893->leave($__internal_d918ac689fe340e37b47f0d63ec731d94579aeb39350e74894c546efd3e22893_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  104 => 29,  100 => 28,  92 => 23,  88 => 22,  82 => 19,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:update{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Update</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="box box-primary">*/
/*         <div class="box-header"></div><!-- /.box-header -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="dashboard_name_id">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'id' : 'dashboard_name_id','class': 'form-control','placeholder': 'Dashboard Name'}}) }}*/
/*             </div>                */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     */
/* {% endblock %}*/
