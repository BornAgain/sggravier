<?php

/* AdminBundle:Users:see.html.twig */
class __TwigTemplate_d55e0c38416b446708607fb232ad7b217cb5d1c92e336e9bafb60f7b48bead6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:see.html.twig", 1);
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
        $__internal_3d7f49f556527adae2da0365edeb42352bec30648f68c10401eaf6a6e1c7f0f3 = $this->env->getExtension("native_profiler");
        $__internal_3d7f49f556527adae2da0365edeb42352bec30648f68c10401eaf6a6e1c7f0f3->enter($__internal_3d7f49f556527adae2da0365edeb42352bec30648f68c10401eaf6a6e1c7f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7f49f556527adae2da0365edeb42352bec30648f68c10401eaf6a6e1c7f0f3->leave($__internal_3d7f49f556527adae2da0365edeb42352bec30648f68c10401eaf6a6e1c7f0f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42d1aaae28b36fac4f044fd3160f0e95a4817f82d53759f363ee72f1f4d5f344 = $this->env->getExtension("native_profiler");
        $__internal_42d1aaae28b36fac4f044fd3160f0e95a4817f82d53759f363ee72f1f4d5f344->enter($__internal_42d1aaae28b36fac4f044fd3160f0e95a4817f82d53759f363ee72f1f4d5f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:see";
        
        $__internal_42d1aaae28b36fac4f044fd3160f0e95a4817f82d53759f363ee72f1f4d5f344->leave($__internal_42d1aaae28b36fac4f044fd3160f0e95a4817f82d53759f363ee72f1f4d5f344_prof);

    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0d88551a5ec5d087baed1a195ad330a0d178109080d4e37f55dea8637264856f = $this->env->getExtension("native_profiler");
        $__internal_0d88551a5ec5d087baed1a195ad330a0d178109080d4e37f55dea8637264856f->enter($__internal_0d88551a5ec5d087baed1a195ad330a0d178109080d4e37f55dea8637264856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 7
        echo "    <li>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\">Users</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"ab_users_see\"><b>See</b></a>
    </li>
";
        
        $__internal_0d88551a5ec5d087baed1a195ad330a0d178109080d4e37f55dea8637264856f->leave($__internal_0d88551a5ec5d087baed1a195ad330a0d178109080d4e37f55dea8637264856f_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aea4742b97cd8925a3dc0cc441a92661a48e62d169eadf6805d302527dee443 = $this->env->getExtension("native_profiler");
        $__internal_0aea4742b97cd8925a3dc0cc441a92661a48e62d169eadf6805d302527dee443->enter($__internal_0aea4742b97cd8925a3dc0cc441a92661a48e62d169eadf6805d302527dee443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_ticket_add"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "    <div class=\"alert-success\">
        ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div class=\"form-group\">
                <label for=\"country\">UserId</label>
                <div class=\"form-control\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</div>      
            </div>

            <div class=\"form-group\">
                <label for=\"country\">First name</label>
                <div class=\"form-control\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "</div>                    
            </div> 
            
            <div class=\"form-group\">
                <label for=\"country\">Last Name</label>
                <div class=\"form-control\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
        echo "</div>                    
            </div>
                  
            <div class=\"form-group\">
                <label for=\"country\">Mail</label>
                <div class=\"form-control\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail", array()), "html", null, true);
        echo "</div>                    
            </div>

            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_see", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
            </div>

        </div><!-- /.box-body -->
";
        
        $__internal_0aea4742b97cd8925a3dc0cc441a92661a48e62d169eadf6805d302527dee443->leave($__internal_0aea4742b97cd8925a3dc0cc441a92661a48e62d169eadf6805d302527dee443_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  133 => 47,  125 => 42,  117 => 37,  109 => 32,  101 => 26,  92 => 23,  89 => 22,  84 => 21,  78 => 20,  64 => 12,  57 => 8,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Users:see{% endblock %}*/
/* */
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_users_list") }}">Users</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="ab_users_see"><b>See</b></a>*/
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
/*             <div class="form-group">*/
/*                 <label for="country">UserId</label>*/
/*                 <div class="form-control">{{ entity.username }}</div>      */
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="country">First name</label>*/
/*                 <div class="form-control">{{ entity.firstname }}</div>                    */
/*             </div> */
/*             */
/*             <div class="form-group">*/
/*                 <label for="country">Last Name</label>*/
/*                 <div class="form-control">{{ entity.lastname }}</div>                    */
/*             </div>*/
/*                   */
/*             <div class="form-group">*/
/*                 <label for="country">Mail</label>*/
/*                 <div class="form-control">{{ entity.mail }}</div>                    */
/*             </div>*/
/* */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_users_see", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/* {% endblock %}*/
