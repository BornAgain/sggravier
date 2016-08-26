<?php

/* AdminBundle:Entities:see.html.twig */
class __TwigTemplate_e123720d00b8b78e1662dcf06748c8d2350d28ec1ce6be439ba28b1cc1a460c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Entities:see.html.twig", 1);
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
        $__internal_6da4673b5f9231eb581a7ae2290672759d4732426070863532eebb45fa12c03a = $this->env->getExtension("native_profiler");
        $__internal_6da4673b5f9231eb581a7ae2290672759d4732426070863532eebb45fa12c03a->enter($__internal_6da4673b5f9231eb581a7ae2290672759d4732426070863532eebb45fa12c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da4673b5f9231eb581a7ae2290672759d4732426070863532eebb45fa12c03a->leave($__internal_6da4673b5f9231eb581a7ae2290672759d4732426070863532eebb45fa12c03a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_684fbb20069151d9a513d3347356c5b511dd98d02a5a6d1b3ec49d4f05f46bba = $this->env->getExtension("native_profiler");
        $__internal_684fbb20069151d9a513d3347356c5b511dd98d02a5a6d1b3ec49d4f05f46bba->enter($__internal_684fbb20069151d9a513d3347356c5b511dd98d02a5a6d1b3ec49d4f05f46bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Entities:see";
        
        $__internal_684fbb20069151d9a513d3347356c5b511dd98d02a5a6d1b3ec49d4f05f46bba->leave($__internal_684fbb20069151d9a513d3347356c5b511dd98d02a5a6d1b3ec49d4f05f46bba_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e5b522d0edc29e2091bc08f6d2e89d1e541ef3ab8d7daf837f8c514e0c304f83 = $this->env->getExtension("native_profiler");
        $__internal_e5b522d0edc29e2091bc08f6d2e89d1e541ef3ab8d7daf837f8c514e0c304f83->enter($__internal_e5b522d0edc29e2091bc08f6d2e89d1e541ef3ab8d7daf837f8c514e0c304f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_e5b522d0edc29e2091bc08f6d2e89d1e541ef3ab8d7daf837f8c514e0c304f83->leave($__internal_e5b522d0edc29e2091bc08f6d2e89d1e541ef3ab8d7daf837f8c514e0c304f83_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef4102ba9ce38c8bdecc6176a4d86fe9bc4b4b51a5d56e0e2aef9e148ffd2e12 = $this->env->getExtension("native_profiler");
        $__internal_ef4102ba9ce38c8bdecc6176a4d86fe9bc4b4b51a5d56e0e2aef9e148ffd2e12->enter($__internal_ef4102ba9ce38c8bdecc6176a4d86fe9bc4b4b51a5d56e0e2aef9e148ffd2e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef4102ba9ce38c8bdecc6176a4d86fe9bc4b4b51a5d56e0e2aef9e148ffd2e12->leave($__internal_ef4102ba9ce38c8bdecc6176a4d86fe9bc4b4b51a5d56e0e2aef9e148ffd2e12_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Entities:see.html.twig";
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
