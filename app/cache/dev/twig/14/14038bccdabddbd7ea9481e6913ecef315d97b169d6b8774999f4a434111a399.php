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
        $__internal_00affaf23535ab45f7200155178e0733fa06c018a3577aa18b553621bb87d144 = $this->env->getExtension("native_profiler");
        $__internal_00affaf23535ab45f7200155178e0733fa06c018a3577aa18b553621bb87d144->enter($__internal_00affaf23535ab45f7200155178e0733fa06c018a3577aa18b553621bb87d144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00affaf23535ab45f7200155178e0733fa06c018a3577aa18b553621bb87d144->leave($__internal_00affaf23535ab45f7200155178e0733fa06c018a3577aa18b553621bb87d144_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_27ce0026b77561e9fc13df96498fe13e14aabd675944bfe4fa847b6e6d9693ef = $this->env->getExtension("native_profiler");
        $__internal_27ce0026b77561e9fc13df96498fe13e14aabd675944bfe4fa847b6e6d9693ef->enter($__internal_27ce0026b77561e9fc13df96498fe13e14aabd675944bfe4fa847b6e6d9693ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_27ce0026b77561e9fc13df96498fe13e14aabd675944bfe4fa847b6e6d9693ef->leave($__internal_27ce0026b77561e9fc13df96498fe13e14aabd675944bfe4fa847b6e6d9693ef_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_79ea7f22bd40f2c5422a7235785d2f08d5b5419c7b052130e47a45900445937c = $this->env->getExtension("native_profiler");
        $__internal_79ea7f22bd40f2c5422a7235785d2f08d5b5419c7b052130e47a45900445937c->enter($__internal_79ea7f22bd40f2c5422a7235785d2f08d5b5419c7b052130e47a45900445937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79ea7f22bd40f2c5422a7235785d2f08d5b5419c7b052130e47a45900445937c->leave($__internal_79ea7f22bd40f2c5422a7235785d2f08d5b5419c7b052130e47a45900445937c_prof);

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
