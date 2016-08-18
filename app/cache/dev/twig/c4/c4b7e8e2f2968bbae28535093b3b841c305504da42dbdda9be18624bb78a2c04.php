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
        $__internal_0cb26ff7cff5fc0b6616bf6c301e452d0be8630440bb27c78014d616d885828e = $this->env->getExtension("native_profiler");
        $__internal_0cb26ff7cff5fc0b6616bf6c301e452d0be8630440bb27c78014d616d885828e->enter($__internal_0cb26ff7cff5fc0b6616bf6c301e452d0be8630440bb27c78014d616d885828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb26ff7cff5fc0b6616bf6c301e452d0be8630440bb27c78014d616d885828e->leave($__internal_0cb26ff7cff5fc0b6616bf6c301e452d0be8630440bb27c78014d616d885828e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65fe0292061be3f744ba07fe4127b6390eafc107a11064a2421eef9a0eef1de5 = $this->env->getExtension("native_profiler");
        $__internal_65fe0292061be3f744ba07fe4127b6390eafc107a11064a2421eef9a0eef1de5->enter($__internal_65fe0292061be3f744ba07fe4127b6390eafc107a11064a2421eef9a0eef1de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:see";
        
        $__internal_65fe0292061be3f744ba07fe4127b6390eafc107a11064a2421eef9a0eef1de5->leave($__internal_65fe0292061be3f744ba07fe4127b6390eafc107a11064a2421eef9a0eef1de5_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_accee9a1302a3f3c3cc154b4b4f9d43f7193ca4595a470ef3ce97844f68e3d42 = $this->env->getExtension("native_profiler");
        $__internal_accee9a1302a3f3c3cc154b4b4f9d43f7193ca4595a470ef3ce97844f68e3d42->enter($__internal_accee9a1302a3f3c3cc154b4b4f9d43f7193ca4595a470ef3ce97844f68e3d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"db_dashboard_see\"><b>See</b></a>
    </li>
";
        
        $__internal_accee9a1302a3f3c3cc154b4b4f9d43f7193ca4595a470ef3ce97844f68e3d42->leave($__internal_accee9a1302a3f3c3cc154b4b4f9d43f7193ca4595a470ef3ce97844f68e3d42_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_89f8338cf683c1305d7a72a79db3f36011b9b9ce94c3907ffbdd66756971aa46 = $this->env->getExtension("native_profiler");
        $__internal_89f8338cf683c1305d7a72a79db3f36011b9b9ce94c3907ffbdd66756971aa46->enter($__internal_89f8338cf683c1305d7a72a79db3f36011b9b9ce94c3907ffbdd66756971aa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
            </div>

        </div><!-- /.box-body -->
";
        
        $__internal_89f8338cf683c1305d7a72a79db3f36011b9b9ce94c3907ffbdd66756971aa46->leave($__internal_89f8338cf683c1305d7a72a79db3f36011b9b9ce94c3907ffbdd66756971aa46_prof);

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
        return array (  110 => 32,  103 => 28,  94 => 21,  85 => 18,  82 => 17,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*         <a href="db_dashboard_see"><b>See</b></a>*/
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
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("db_dashboard_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/* {% endblock %}*/
/* */
