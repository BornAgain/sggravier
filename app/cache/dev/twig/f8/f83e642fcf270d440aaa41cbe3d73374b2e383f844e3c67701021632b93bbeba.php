<?php

/* @Cubes/Cubes/add.html.twig */
class __TwigTemplate_6f98eb38da7439e94891ef6cde14298429edeef6ed1e98abd417082f336d956c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Cubes/Cubes/add.html.twig", 1);
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
        $__internal_f88213714749711fa4f071e77c988d7d71032a9881d41b91ef79924f743f6d00 = $this->env->getExtension("native_profiler");
        $__internal_f88213714749711fa4f071e77c988d7d71032a9881d41b91ef79924f743f6d00->enter($__internal_f88213714749711fa4f071e77c988d7d71032a9881d41b91ef79924f743f6d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cubes/Cubes/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88213714749711fa4f071e77c988d7d71032a9881d41b91ef79924f743f6d00->leave($__internal_f88213714749711fa4f071e77c988d7d71032a9881d41b91ef79924f743f6d00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b81fef970940868b9856f39c3c8655b2cd0a8b546a6d056d3ddfcff7703a833a = $this->env->getExtension("native_profiler");
        $__internal_b81fef970940868b9856f39c3c8655b2cd0a8b546a6d056d3ddfcff7703a833a->enter($__internal_b81fef970940868b9856f39c3c8655b2cd0a8b546a6d056d3ddfcff7703a833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CubesBundle:Cubes:Add";
        
        $__internal_b81fef970940868b9856f39c3c8655b2cd0a8b546a6d056d3ddfcff7703a833a->leave($__internal_b81fef970940868b9856f39c3c8655b2cd0a8b546a6d056d3ddfcff7703a833a_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f94775909b40da6cc7b04b0321e748f992c98deb08e367104a100f55aff5ec15 = $this->env->getExtension("native_profiler");
        $__internal_f94775909b40da6cc7b04b0321e748f992c98deb08e367104a100f55aff5ec15->enter($__internal_f94775909b40da6cc7b04b0321e748f992c98deb08e367104a100f55aff5ec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("cb_cubes_list");
        echo "\">Cubes</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"cb_cubes_add\"><b>Add</b></a>
    </li>
";
        
        $__internal_f94775909b40da6cc7b04b0321e748f992c98deb08e367104a100f55aff5ec15->leave($__internal_f94775909b40da6cc7b04b0321e748f992c98deb08e367104a100f55aff5ec15_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c22fd42aa3d7a92490cd32eb1ae41318a8c863bfe001a6a9a5cdcf67de6b855 = $this->env->getExtension("native_profiler");
        $__internal_7c22fd42aa3d7a92490cd32eb1ae41318a8c863bfe001a6a9a5cdcf67de6b855->enter($__internal_7c22fd42aa3d7a92490cd32eb1ae41318a8c863bfe001a6a9a5cdcf67de6b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"box box-primary\">
        <div class=\"box-header\">
            <h3 class=\"box-title\"></h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-6\">
                <label for=\"cubes_contract_id\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contract", array()), 'label');
        echo "</label>
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contract", array()), 'widget', array("attr" => array("tabindex" => "1", "id" => "cubes_contract_id", "class" => "form-control", "placeholder" => "Contract")));
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"cubes_locContract_id\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locContract", array()), 'label');
        echo "</label>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locContract", array()), 'widget', array("attr" => array("tabindex" => "3", "id" => "cubes_loccontract_id", "class" => "form-control", "placeholder" => "Loc_Contract")));
        echo "
            </div>  
            <div class=\"form-group col-md-6\">
                <label for=\"cubes_aMTLCY_id\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aMTLCY", array()), 'label');
        echo "</label>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aMTLCY", array()), 'widget', array("attr" => array("tabindex" => "4", "id" => "cubes_amtlcy_id", "class" => "form-control", "placeholder" => "AMT LCY")));
        echo "
            </div>
        
    </div>

    <div class=\"box-footer pull-right\">
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("cb_cubes_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
    </div>
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7c22fd42aa3d7a92490cd32eb1ae41318a8c863bfe001a6a9a5cdcf67de6b855->leave($__internal_7c22fd42aa3d7a92490cd32eb1ae41318a8c863bfe001a6a9a5cdcf67de6b855_prof);

    }

    public function getTemplateName()
    {
        return "@Cubes/Cubes/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  130 => 43,  121 => 37,  117 => 36,  111 => 33,  107 => 32,  101 => 29,  97 => 28,  91 => 25,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}CubesBundle:Cubes:Add{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("cb_cubes_list") }}">Cubes</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="cb_cubes_add"><b>Add</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="box box-primary">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title"></h3>*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="cubes_contract_id">{{ form_label(form.contract) }}</label>*/
/*                 {{ form_widget(form.contract, {'attr': {'tabindex' : '1','id' : 'cubes_contract_id','class': 'form-control','placeholder': 'Contract'}}) }}*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="cubes_locContract_id">{{ form_label(form.locContract) }}</label>*/
/*                 {{ form_widget(form.locContract, {'attr': {'tabindex' : '3','id' : 'cubes_loccontract_id','class': 'form-control','placeholder': 'Loc_Contract'}}) }}*/
/*             </div>  */
/*             <div class="form-group col-md-6">*/
/*                 <label for="cubes_aMTLCY_id">{{ form_label(form.aMTLCY) }}</label>*/
/*                 {{ form_widget(form.aMTLCY, {'attr': {'tabindex' : '4','id' : 'cubes_amtlcy_id','class': 'form-control','placeholder': 'AMT LCY'}}) }}*/
/*             </div>*/
/*         */
/*     </div>*/
/* */
/*     <div class="box-footer pull-right">*/
/*         <a href="{{ path ("cb_cubes_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
