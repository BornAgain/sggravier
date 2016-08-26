<?php

/* @Admin/Roles/add.html.twig */
class __TwigTemplate_0c826be8c365fad2247213b74721e563bff229683f01a0078398bf8dd48caf34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Roles/add.html.twig", 1);
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
        $__internal_e26fdc069abaf9bac7c600528eef2b450a555912e32cd409823e43e963d0c04b = $this->env->getExtension("native_profiler");
        $__internal_e26fdc069abaf9bac7c600528eef2b450a555912e32cd409823e43e963d0c04b->enter($__internal_e26fdc069abaf9bac7c600528eef2b450a555912e32cd409823e43e963d0c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Roles/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26fdc069abaf9bac7c600528eef2b450a555912e32cd409823e43e963d0c04b->leave($__internal_e26fdc069abaf9bac7c600528eef2b450a555912e32cd409823e43e963d0c04b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be132b98636e2901ee8ca31e565edf7439328626bd12bac0b5736b04f1c57ed9 = $this->env->getExtension("native_profiler");
        $__internal_be132b98636e2901ee8ca31e565edf7439328626bd12bac0b5736b04f1c57ed9->enter($__internal_be132b98636e2901ee8ca31e565edf7439328626bd12bac0b5736b04f1c57ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:add";
        
        $__internal_be132b98636e2901ee8ca31e565edf7439328626bd12bac0b5736b04f1c57ed9->leave($__internal_be132b98636e2901ee8ca31e565edf7439328626bd12bac0b5736b04f1c57ed9_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_626d7682ea65a5d91a7022b6eb690d1483b1c0634efaa6ba1a0e6273bb46537d = $this->env->getExtension("native_profiler");
        $__internal_626d7682ea65a5d91a7022b6eb690d1483b1c0634efaa6ba1a0e6273bb46537d->enter($__internal_626d7682ea65a5d91a7022b6eb690d1483b1c0634efaa6ba1a0e6273bb46537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"><b>Add</b></a>
    </li>
";
        
        $__internal_626d7682ea65a5d91a7022b6eb690d1483b1c0634efaa6ba1a0e6273bb46537d->leave($__internal_626d7682ea65a5d91a7022b6eb690d1483b1c0634efaa6ba1a0e6273bb46537d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_39d59dfe71d882c2c536e43ca5e4c39284f8fbd729e0d6e4aec382958aca977f = $this->env->getExtension("native_profiler");
        $__internal_39d59dfe71d882c2c536e43ca5e4c39284f8fbd729e0d6e4aec382958aca977f->enter($__internal_39d59dfe71d882c2c536e43ca5e4c39284f8fbd729e0d6e4aec382958aca977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo " <div class=\"box box-primary\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Roles Form</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body\">
            <div class=\"form-group\">
                <label for=\"roles_description_id\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("id" => "roles_description_id", "class" => "form-control", "placeholder" => "User role")));
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"roles_enabled_id\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("id" => "roles_enabled_id", "attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
            </div>                
            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            </div>
        </div><!-- /.box -->
    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_39d59dfe71d882c2c536e43ca5e4c39284f8fbd729e0d6e4aec382958aca977f->leave($__internal_39d59dfe71d882c2c536e43ca5e4c39284f8fbd729e0d6e4aec382958aca977f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Roles/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  120 => 36,  114 => 33,  110 => 32,  104 => 29,  100 => 28,  94 => 25,  87 => 20,  81 => 19,  71 => 15,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:add{% endblock %}*/
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
/*         <a href="{{ path("ab_roles_list") }}"><b>Add</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*  <div class="box box-primary">*/
/*     <div class="box-header">*/
/*         <h3 class="box-title">Roles Form</h3>*/
/*     </div><!-- /.box-header -->*/
/*     <!-- form start -->*/
/*     {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body">*/
/*             <div class="form-group">*/
/*                 <label for="roles_description_id">{{ form_label(form.description) }}</label>*/
/*                     {{ form_widget(form.description, {'attr': {'id' : 'roles_description_id','class': 'form-control','placeholder': 'User role'}}) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="roles_enabled_id">{{ form_label(form.enabled) }}</label>*/
/*                     {{ form_widget(form.enabled, {'id' : 'roles_enabled_id', 'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*             </div>                */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             </div>*/
/*         </div><!-- /.box -->*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
