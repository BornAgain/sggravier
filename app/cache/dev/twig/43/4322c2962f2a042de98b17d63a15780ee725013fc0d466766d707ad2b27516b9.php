<?php

/* @Admin/Users/see.html.twig */
class __TwigTemplate_853e35bf795b9dae277836975fdd446254427a834024b4c62c84cde78a0ce00d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Users/see.html.twig", 1);
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
        $__internal_01c738bfe9f59827ff6eee7b1630b8f2bc0f32ceed08eea81893af3bb85ecf80 = $this->env->getExtension("native_profiler");
        $__internal_01c738bfe9f59827ff6eee7b1630b8f2bc0f32ceed08eea81893af3bb85ecf80->enter($__internal_01c738bfe9f59827ff6eee7b1630b8f2bc0f32ceed08eea81893af3bb85ecf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Users/see.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c738bfe9f59827ff6eee7b1630b8f2bc0f32ceed08eea81893af3bb85ecf80->leave($__internal_01c738bfe9f59827ff6eee7b1630b8f2bc0f32ceed08eea81893af3bb85ecf80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_841c04e0307d24ceba27c04906f118a25163328f8e639e25e2e710e79f5c10ff = $this->env->getExtension("native_profiler");
        $__internal_841c04e0307d24ceba27c04906f118a25163328f8e639e25e2e710e79f5c10ff->enter($__internal_841c04e0307d24ceba27c04906f118a25163328f8e639e25e2e710e79f5c10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Users:see";
        
        $__internal_841c04e0307d24ceba27c04906f118a25163328f8e639e25e2e710e79f5c10ff->leave($__internal_841c04e0307d24ceba27c04906f118a25163328f8e639e25e2e710e79f5c10ff_prof);

    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b2709b9bcd3f7756a2156ed55403e0b5d5fead5031befb6b8465d45986f7a9ab = $this->env->getExtension("native_profiler");
        $__internal_b2709b9bcd3f7756a2156ed55403e0b5d5fead5031befb6b8465d45986f7a9ab->enter($__internal_b2709b9bcd3f7756a2156ed55403e0b5d5fead5031befb6b8465d45986f7a9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <b>See</b>
    </li>
";
        
        $__internal_b2709b9bcd3f7756a2156ed55403e0b5d5fead5031befb6b8465d45986f7a9ab->leave($__internal_b2709b9bcd3f7756a2156ed55403e0b5d5fead5031befb6b8465d45986f7a9ab_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_40bf0218a15b9244d5d0c0e570c90b9e27cd2c7358cd2525608b16ff2c3ff5d2 = $this->env->getExtension("native_profiler");
        $__internal_40bf0218a15b9244d5d0c0e570c90b9e27cd2c7358cd2525608b16ff2c3ff5d2->enter($__internal_40bf0218a15b9244d5d0c0e570c90b9e27cd2c7358cd2525608b16ff2c3ff5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"form-group\">
                <label for=\"country\">Update date</label>
                <div class=\"form-control\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>                    
            </div>

            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Update\"/> </a>
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Delete\"/> </a>

            </div>

        </div><!-- /.box-body -->
";
        
        $__internal_40bf0218a15b9244d5d0c0e570c90b9e27cd2c7358cd2525608b16ff2c3ff5d2->leave($__internal_40bf0218a15b9244d5d0c0e570c90b9e27cd2c7358cd2525608b16ff2c3ff5d2_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Users/see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  147 => 55,  140 => 51,  133 => 47,  125 => 42,  117 => 37,  109 => 32,  101 => 26,  92 => 23,  89 => 22,  84 => 21,  78 => 20,  64 => 12,  57 => 8,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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
/*             <div class="form-group">*/
/*                 <label for="country">Update date</label>*/
/*                 <div class="form-control">{{ entity.updateDate | date('Y-m-d H:i:s')}}</div>                    */
/*             </div>*/
/* */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_users_update", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Update"/> </a>*/
/*                 <a href="{{ path ("ab_users_delete", {'id':entity.id})}}"> <input class="btn btn-success" type="submit" value="Delete"/> </a>*/
/* */
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/* {% endblock %}*/
