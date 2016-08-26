<?php

/* DashboardBundle:Dashboard:see.html.twig */
class __TwigTemplate_ea273c1cbb1b7f9518388e55de76049f230d0209e5c69a2e99116c33ebac5b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:see.html.twig", 1);
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
        $__internal_bbd4f1c6ebf06d84b65276c12de5d3c16f45b86af3257556c36e90b26acba0b4 = $this->env->getExtension("native_profiler");
        $__internal_bbd4f1c6ebf06d84b65276c12de5d3c16f45b86af3257556c36e90b26acba0b4->enter($__internal_bbd4f1c6ebf06d84b65276c12de5d3c16f45b86af3257556c36e90b26acba0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbd4f1c6ebf06d84b65276c12de5d3c16f45b86af3257556c36e90b26acba0b4->leave($__internal_bbd4f1c6ebf06d84b65276c12de5d3c16f45b86af3257556c36e90b26acba0b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a444df09e285e8dd79084dd41f04f6cd2c37f5c8ae96d506a1b0df3f8e91f898 = $this->env->getExtension("native_profiler");
        $__internal_a444df09e285e8dd79084dd41f04f6cd2c37f5c8ae96d506a1b0df3f8e91f898->enter($__internal_a444df09e285e8dd79084dd41f04f6cd2c37f5c8ae96d506a1b0df3f8e91f898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:see";
        
        $__internal_a444df09e285e8dd79084dd41f04f6cd2c37f5c8ae96d506a1b0df3f8e91f898->leave($__internal_a444df09e285e8dd79084dd41f04f6cd2c37f5c8ae96d506a1b0df3f8e91f898_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0221c6fb1b539a0f1b16721a1304a7f23a13bd86171f237f305e9fe5516f817a = $this->env->getExtension("native_profiler");
        $__internal_0221c6fb1b539a0f1b16721a1304a7f23a13bd86171f237f305e9fe5516f817a->enter($__internal_0221c6fb1b539a0f1b16721a1304a7f23a13bd86171f237f305e9fe5516f817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_0221c6fb1b539a0f1b16721a1304a7f23a13bd86171f237f305e9fe5516f817a->leave($__internal_0221c6fb1b539a0f1b16721a1304a7f23a13bd86171f237f305e9fe5516f817a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6809a0f8453e4cc3e6412f3d1d12f6e164b05c000098a1eec190753c552b0219 = $this->env->getExtension("native_profiler");
        $__internal_6809a0f8453e4cc3e6412f3d1d12f6e164b05c000098a1eec190753c552b0219->enter($__internal_6809a0f8453e4cc3e6412f3d1d12f6e164b05c000098a1eec190753c552b0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6809a0f8453e4cc3e6412f3d1d12f6e164b05c000098a1eec190753c552b0219->leave($__internal_6809a0f8453e4cc3e6412f3d1d12f6e164b05c000098a1eec190753c552b0219_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:see.html.twig";
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
