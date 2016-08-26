<?php

/* @Dashboard/Widget/see.html.twig */
class __TwigTemplate_c34f843a25e74a28c6b9f8beef4ebc2e8e3736c15b4ea5c0f2f02c1f86908e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Widget/see.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ead4f5598bd7c5e3b710d66c6495736513c0d56246f21aa21410620b26d0c042 = $this->env->getExtension("native_profiler");
        $__internal_ead4f5598bd7c5e3b710d66c6495736513c0d56246f21aa21410620b26d0c042->enter($__internal_ead4f5598bd7c5e3b710d66c6495736513c0d56246f21aa21410620b26d0c042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Widget/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead4f5598bd7c5e3b710d66c6495736513c0d56246f21aa21410620b26d0c042->leave($__internal_ead4f5598bd7c5e3b710d66c6495736513c0d56246f21aa21410620b26d0c042_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_9a82ebcc951f652bb635a0893cfcb044c9024fce319a89ce58b24f564da7c675 = $this->env->getExtension("native_profiler");
        $__internal_9a82ebcc951f652bb635a0893cfcb044c9024fce319a89ce58b24f564da7c675->enter($__internal_9a82ebcc951f652bb635a0893cfcb044c9024fce319a89ce58b24f564da7c675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\">Widgets</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>See</b>
    </li>
";
        
        $__internal_9a82ebcc951f652bb635a0893cfcb044c9024fce319a89ce58b24f564da7c675->leave($__internal_9a82ebcc951f652bb635a0893cfcb044c9024fce319a89ce58b24f564da7c675_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_62631ed41e309f3020bf98c2b55ba54eee5ddf7bf251a9745bc65659157e1721 = $this->env->getExtension("native_profiler");
        $__internal_62631ed41e309f3020bf98c2b55ba54eee5ddf7bf251a9745bc65659157e1721->enter($__internal_62631ed41e309f3020bf98c2b55ba54eee5ddf7bf251a9745bc65659157e1721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_ticket_add"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "    <div class=\"alert-success\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            
            <div class=\"form-group col-md-6\">
                <label for=\"country\">Type</label>
                <div class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</div>                    
            </div> 
            
            <div class=\"form-group col-md-6\">
                <label for=\"country\">Name</label>
                <div class=\"form-control\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</div>                    
            </div>
            
            <div class=\"form-group col-md-6\">
                <label for=\"country\">Position</label>
                <div class=\"form-control\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "</div>                    
            </div>
            
            <div class=\"form-group col-md-6\">
                <label for=\"country\">Query</label>
                <div class=\"form-control\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "query", array()), "html", null, true);
        echo "</div>                    
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "html", null, true);
        echo "</div>                    
            </div>
            
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_62631ed41e309f3020bf98c2b55ba54eee5ddf7bf251a9745bc65659157e1721->leave($__internal_62631ed41e309f3020bf98c2b55ba54eee5ddf7bf251a9745bc65659157e1721_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Widget/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  136 => 54,  128 => 49,  121 => 45,  113 => 40,  105 => 35,  97 => 30,  88 => 23,  79 => 20,  76 => 19,  71 => 18,  65 => 17,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_widget_list") }}">Widgets</a>*/
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
/*             <div class="form-group col-md-6">*/
/*                 <label for="country">Type</label>*/
/*                 <div class="form-control">{{ entity.type }}</div>                    */
/*             </div> */
/*             */
/*             <div class="form-group col-md-6">*/
/*                 <label for="country">Name</label>*/
/*                 <div class="form-control">{{ entity.type }}</div>                    */
/*             </div>*/
/*             */
/*             <div class="form-group col-md-6">*/
/*                 <label for="country">Position</label>*/
/*                 <div class="form-control">{{ entity.position }}</div>                    */
/*             </div>*/
/*             */
/*             <div class="form-group col-md-6">*/
/*                 <label for="country">Query</label>*/
/*                 <div class="form-control">{{ entity.query }}</div>                    */
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate }}</div>                    */
/*             </div>*/
/*             */
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("db_widget_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("db_widget_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
