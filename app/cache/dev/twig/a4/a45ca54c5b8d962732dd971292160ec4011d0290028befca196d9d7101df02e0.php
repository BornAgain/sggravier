<?php

/* @Admin/Roles/see.html.twig */
class __TwigTemplate_68a71efd73e663f387505b52831f40f4ef62f4c5d58aed5b4752cf6fb5a059c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Roles/see.html.twig", 1);
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
        $__internal_6483bd793190c594120b6b7744d33fa31a38c258c10ed7ca8eda88af30a1ae6f = $this->env->getExtension("native_profiler");
        $__internal_6483bd793190c594120b6b7744d33fa31a38c258c10ed7ca8eda88af30a1ae6f->enter($__internal_6483bd793190c594120b6b7744d33fa31a38c258c10ed7ca8eda88af30a1ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Roles/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6483bd793190c594120b6b7744d33fa31a38c258c10ed7ca8eda88af30a1ae6f->leave($__internal_6483bd793190c594120b6b7744d33fa31a38c258c10ed7ca8eda88af30a1ae6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_478b340a258bfe039dd1d695e855502535cff4e08fbc5e23a755b70d30a1994e = $this->env->getExtension("native_profiler");
        $__internal_478b340a258bfe039dd1d695e855502535cff4e08fbc5e23a755b70d30a1994e->enter($__internal_478b340a258bfe039dd1d695e855502535cff4e08fbc5e23a755b70d30a1994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:see";
        
        $__internal_478b340a258bfe039dd1d695e855502535cff4e08fbc5e23a755b70d30a1994e->leave($__internal_478b340a258bfe039dd1d695e855502535cff4e08fbc5e23a755b70d30a1994e_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_29c19ec16a0de234ecb210120d11e1f2ccec0f5f08fec0218e89d7824264bfff = $this->env->getExtension("native_profiler");
        $__internal_29c19ec16a0de234ecb210120d11e1f2ccec0f5f08fec0218e89d7824264bfff->enter($__internal_29c19ec16a0de234ecb210120d11e1f2ccec0f5f08fec0218e89d7824264bfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\">Roles</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>See</b>
    </li>
";
        
        $__internal_29c19ec16a0de234ecb210120d11e1f2ccec0f5f08fec0218e89d7824264bfff->leave($__internal_29c19ec16a0de234ecb210120d11e1f2ccec0f5f08fec0218e89d7824264bfff_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b859b3eba0faee44892021a9178a0bf051f7c96230f6820f2dee017d43bb8b5 = $this->env->getExtension("native_profiler");
        $__internal_4b859b3eba0faee44892021a9178a0bf051f7c96230f6820f2dee017d43bb8b5->enter($__internal_4b859b3eba0faee44892021a9178a0bf051f7c96230f6820f2dee017d43bb8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>    
            </div>
            
            
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>
        </div><!-- /.box-body --> 
";
        
        $__internal_4b859b3eba0faee44892021a9178a0bf051f7c96230f6820f2dee017d43bb8b5->leave($__internal_4b859b3eba0faee44892021a9178a0bf051f7c96230f6820f2dee017d43bb8b5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Roles/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  107 => 35,  99 => 30,  92 => 26,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:see{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_roles_list") }}">Roles</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>See</b>*/
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
/*             <div class="form-group">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate | date("Y-m-d H:i:s") }}</div>    */
/*             </div>*/
/*             */
/*             */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("ab_roles_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/*         </div><!-- /.box-body --> */
/* {% endblock %}*/
/* */
