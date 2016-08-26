<?php

/* CubesBundle:Cubes:add.html.twig */
class __TwigTemplate_0737fd5369c2e786c33b0b15ea86334421656216e43376fd5cc55c868774ef4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CubesBundle:Cubes:add.html.twig", 1);
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
        $__internal_cb2a552efe2afa5f37cf7030cbfb2a080a481671b40c94aeabfd1763411ce2f8 = $this->env->getExtension("native_profiler");
        $__internal_cb2a552efe2afa5f37cf7030cbfb2a080a481671b40c94aeabfd1763411ce2f8->enter($__internal_cb2a552efe2afa5f37cf7030cbfb2a080a481671b40c94aeabfd1763411ce2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CubesBundle:Cubes:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2a552efe2afa5f37cf7030cbfb2a080a481671b40c94aeabfd1763411ce2f8->leave($__internal_cb2a552efe2afa5f37cf7030cbfb2a080a481671b40c94aeabfd1763411ce2f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e5b7e16edcb8ed35950195153c6669ae4bafd0539a5e77c3d1f98b41dac35c = $this->env->getExtension("native_profiler");
        $__internal_d5e5b7e16edcb8ed35950195153c6669ae4bafd0539a5e77c3d1f98b41dac35c->enter($__internal_d5e5b7e16edcb8ed35950195153c6669ae4bafd0539a5e77c3d1f98b41dac35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CubesBundle:Cubes:Add";
        
        $__internal_d5e5b7e16edcb8ed35950195153c6669ae4bafd0539a5e77c3d1f98b41dac35c->leave($__internal_d5e5b7e16edcb8ed35950195153c6669ae4bafd0539a5e77c3d1f98b41dac35c_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e9a3d40196d04a892f38c2755d3b7f281db6065d340e44ffd63f7ebd9f5d8e3c = $this->env->getExtension("native_profiler");
        $__internal_e9a3d40196d04a892f38c2755d3b7f281db6065d340e44ffd63f7ebd9f5d8e3c->enter($__internal_e9a3d40196d04a892f38c2755d3b7f281db6065d340e44ffd63f7ebd9f5d8e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_e9a3d40196d04a892f38c2755d3b7f281db6065d340e44ffd63f7ebd9f5d8e3c->leave($__internal_e9a3d40196d04a892f38c2755d3b7f281db6065d340e44ffd63f7ebd9f5d8e3c_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_549380ccfad973884f754175ca9a98d66e194dcf5f0d6b5ad62b43679a9ee045 = $this->env->getExtension("native_profiler");
        $__internal_549380ccfad973884f754175ca9a98d66e194dcf5f0d6b5ad62b43679a9ee045->enter($__internal_549380ccfad973884f754175ca9a98d66e194dcf5f0d6b5ad62b43679a9ee045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_549380ccfad973884f754175ca9a98d66e194dcf5f0d6b5ad62b43679a9ee045->leave($__internal_549380ccfad973884f754175ca9a98d66e194dcf5f0d6b5ad62b43679a9ee045_prof);

    }

    public function getTemplateName()
    {
        return "CubesBundle:Cubes:add.html.twig";
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
