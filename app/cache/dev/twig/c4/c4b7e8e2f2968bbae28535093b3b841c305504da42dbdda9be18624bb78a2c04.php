<?php

/* DashboardBundle:Dashboard:see.html.twig */
class __TwigTemplate_2abde6ab40c2886c355de1568430d6ba863bf4c6b02dc5127bd52c40cabfbdd4 extends Twig_Template
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
        $__internal_9ecaf193fc0a27c6265a2afc3499f3e1d052f42a0b7ce9575dbc0d720c2a9735 = $this->env->getExtension("native_profiler");
        $__internal_9ecaf193fc0a27c6265a2afc3499f3e1d052f42a0b7ce9575dbc0d720c2a9735->enter($__internal_9ecaf193fc0a27c6265a2afc3499f3e1d052f42a0b7ce9575dbc0d720c2a9735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ecaf193fc0a27c6265a2afc3499f3e1d052f42a0b7ce9575dbc0d720c2a9735->leave($__internal_9ecaf193fc0a27c6265a2afc3499f3e1d052f42a0b7ce9575dbc0d720c2a9735_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff06f1380c650108bc4efdab0f9cbbd60738bfdad21bd02627097c8f58e17669 = $this->env->getExtension("native_profiler");
        $__internal_ff06f1380c650108bc4efdab0f9cbbd60738bfdad21bd02627097c8f58e17669->enter($__internal_ff06f1380c650108bc4efdab0f9cbbd60738bfdad21bd02627097c8f58e17669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:see";
        
        $__internal_ff06f1380c650108bc4efdab0f9cbbd60738bfdad21bd02627097c8f58e17669->leave($__internal_ff06f1380c650108bc4efdab0f9cbbd60738bfdad21bd02627097c8f58e17669_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_78773330c0a91d7b547f24cf453785f16679db754cb4699e7f269505e64ed11c = $this->env->getExtension("native_profiler");
        $__internal_78773330c0a91d7b547f24cf453785f16679db754cb4699e7f269505e64ed11c->enter($__internal_78773330c0a91d7b547f24cf453785f16679db754cb4699e7f269505e64ed11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_78773330c0a91d7b547f24cf453785f16679db754cb4699e7f269505e64ed11c->leave($__internal_78773330c0a91d7b547f24cf453785f16679db754cb4699e7f269505e64ed11c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b94b7f7840945cd95778b057aadfda319e9a75b2b731e55c6f66456798e6c64 = $this->env->getExtension("native_profiler");
        $__internal_9b94b7f7840945cd95778b057aadfda319e9a75b2b731e55c6f66456798e6c64->enter($__internal_9b94b7f7840945cd95778b057aadfda319e9a75b2b731e55c6f66456798e6c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b94b7f7840945cd95778b057aadfda319e9a75b2b731e55c6f66456798e6c64->leave($__internal_9b94b7f7840945cd95778b057aadfda319e9a75b2b731e55c6f66456798e6c64_prof);

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
