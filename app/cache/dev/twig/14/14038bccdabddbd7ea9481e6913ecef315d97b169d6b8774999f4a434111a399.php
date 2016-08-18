<?php

/* DashboardBundle:Widget:see.html.twig */
class __TwigTemplate_59d959dd0a4c9672fde49c27f0928ce2ee0d51271f8b1b0ccc5f31da72c440b1 extends Twig_Template
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
        $__internal_6bb6e5bb8ff0469889970161fb8386495a008e09a1da16a1350cdabe807452ad = $this->env->getExtension("native_profiler");
        $__internal_6bb6e5bb8ff0469889970161fb8386495a008e09a1da16a1350cdabe807452ad->enter($__internal_6bb6e5bb8ff0469889970161fb8386495a008e09a1da16a1350cdabe807452ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb6e5bb8ff0469889970161fb8386495a008e09a1da16a1350cdabe807452ad->leave($__internal_6bb6e5bb8ff0469889970161fb8386495a008e09a1da16a1350cdabe807452ad_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_ad090fbba451d0180b1258cb70f4ae13a6c631d35565c91ce44ff6175900e822 = $this->env->getExtension("native_profiler");
        $__internal_ad090fbba451d0180b1258cb70f4ae13a6c631d35565c91ce44ff6175900e822->enter($__internal_ad090fbba451d0180b1258cb70f4ae13a6c631d35565c91ce44ff6175900e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <a href=\"db_widget_see\"><b>See</b></a>
    </li>
";
        
        $__internal_ad090fbba451d0180b1258cb70f4ae13a6c631d35565c91ce44ff6175900e822->leave($__internal_ad090fbba451d0180b1258cb70f4ae13a6c631d35565c91ce44ff6175900e822_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6aa83c5d1cec013d4f9a9138a8fad71a1ac85d45d504a42f28d4fe261809d3d = $this->env->getExtension("native_profiler");
        $__internal_e6aa83c5d1cec013d4f9a9138a8fad71a1ac85d45d504a42f28d4fe261809d3d->enter($__internal_e6aa83c5d1cec013d4f9a9138a8fad71a1ac85d45d504a42f28d4fe261809d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            </div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_e6aa83c5d1cec013d4f9a9138a8fad71a1ac85d45d504a42f28d4fe261809d3d->leave($__internal_e6aa83c5d1cec013d4f9a9138a8fad71a1ac85d45d504a42f28d4fe261809d3d_prof);

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
        return array (  121 => 45,  113 => 40,  105 => 35,  97 => 30,  88 => 23,  79 => 20,  76 => 19,  71 => 18,  65 => 17,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <a href="db_widget_see"><b>See</b></a>*/
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
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
