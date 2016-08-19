<?php

/* DashboardBundle:Widget:see.html.twig */
class __TwigTemplate_e959b3077b042dd1ca8f1342257742c260092d55021433610ed678cf1c3b86c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Widget:see.html.twig", 1);
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
        $__internal_99ff7d0fb7b42950c1cb3045deb70a04b9bae3729121d9aa4aca39f16d9d58fa = $this->env->getExtension("native_profiler");
        $__internal_99ff7d0fb7b42950c1cb3045deb70a04b9bae3729121d9aa4aca39f16d9d58fa->enter($__internal_99ff7d0fb7b42950c1cb3045deb70a04b9bae3729121d9aa4aca39f16d9d58fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ff7d0fb7b42950c1cb3045deb70a04b9bae3729121d9aa4aca39f16d9d58fa->leave($__internal_99ff7d0fb7b42950c1cb3045deb70a04b9bae3729121d9aa4aca39f16d9d58fa_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_224fedba170259df986142f638436595a95a18d69d4c9ed3d62e1afebdbaa05b = $this->env->getExtension("native_profiler");
        $__internal_224fedba170259df986142f638436595a95a18d69d4c9ed3d62e1afebdbaa05b->enter($__internal_224fedba170259df986142f638436595a95a18d69d4c9ed3d62e1afebdbaa05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_224fedba170259df986142f638436595a95a18d69d4c9ed3d62e1afebdbaa05b->leave($__internal_224fedba170259df986142f638436595a95a18d69d4c9ed3d62e1afebdbaa05b_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_d019d476a98430c61ce68a7f14d97d9202a10b60e7b71333b14b9364b58b02bd = $this->env->getExtension("native_profiler");
        $__internal_d019d476a98430c61ce68a7f14d97d9202a10b60e7b71333b14b9364b58b02bd->enter($__internal_d019d476a98430c61ce68a7f14d97d9202a10b60e7b71333b14b9364b58b02bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            
            <div class=\"form-group\">
                <label for=\"country\">Type</label>
                <div class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</div>                    
            </div> 
            
            <div class=\"form-group\">
                <label for=\"country\">Position</label>
                <div class=\"form-control\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "</div>                    
            </div>
            
            <div class=\"form-group\">
                <label for=\"country\">Query</label>
                <div class=\"form-control\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "query", array()), "html", null, true);
        echo "</div>                    
            </div>
            
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_d019d476a98430c61ce68a7f14d97d9202a10b60e7b71333b14b9364b58b02bd->leave($__internal_d019d476a98430c61ce68a7f14d97d9202a10b60e7b71333b14b9364b58b02bd_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Widget:see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  121 => 45,  113 => 40,  105 => 35,  97 => 30,  88 => 23,  79 => 20,  76 => 19,  71 => 18,  65 => 17,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <div class="form-group">*/
/*                 <label for="country">Type</label>*/
/*                 <div class="form-control">{{ entity.type }}</div>                    */
/*             </div> */
/*             */
/*             <div class="form-group">*/
/*                 <label for="country">Position</label>*/
/*                 <div class="form-control">{{ entity.position }}</div>                    */
/*             </div>*/
/*             */
/*             <div class="form-group">*/
/*                 <label for="country">Query</label>*/
/*                 <div class="form-control">{{ entity.query }}</div>                    */
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
