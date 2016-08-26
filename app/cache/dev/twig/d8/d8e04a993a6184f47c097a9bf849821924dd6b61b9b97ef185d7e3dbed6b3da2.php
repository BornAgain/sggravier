<?php

/* @Admin/Roles/update.html.twig */
class __TwigTemplate_603f7121b1773132f6b6bc6c6124fa924c7508f3024c92ee28160a349c963efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Roles/update.html.twig", 1);
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
        $__internal_32320286d18af81ba33a22a247f67e16b454cacf30643ee4c3b370a2681d5f67 = $this->env->getExtension("native_profiler");
        $__internal_32320286d18af81ba33a22a247f67e16b454cacf30643ee4c3b370a2681d5f67->enter($__internal_32320286d18af81ba33a22a247f67e16b454cacf30643ee4c3b370a2681d5f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Roles/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32320286d18af81ba33a22a247f67e16b454cacf30643ee4c3b370a2681d5f67->leave($__internal_32320286d18af81ba33a22a247f67e16b454cacf30643ee4c3b370a2681d5f67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29f3abe5ab840007b55731870e576abf62846276f5cc67b3a67a24c64c5c7a4c = $this->env->getExtension("native_profiler");
        $__internal_29f3abe5ab840007b55731870e576abf62846276f5cc67b3a67a24c64c5c7a4c->enter($__internal_29f3abe5ab840007b55731870e576abf62846276f5cc67b3a67a24c64c5c7a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Roles:update";
        
        $__internal_29f3abe5ab840007b55731870e576abf62846276f5cc67b3a67a24c64c5c7a4c->leave($__internal_29f3abe5ab840007b55731870e576abf62846276f5cc67b3a67a24c64c5c7a4c_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_d398ef3ac8dd30030011628955c32027b47fccc5eba0e01f0786c63806c1f654 = $this->env->getExtension("native_profiler");
        $__internal_d398ef3ac8dd30030011628955c32027b47fccc5eba0e01f0786c63806c1f654->enter($__internal_d398ef3ac8dd30030011628955c32027b47fccc5eba0e01f0786c63806c1f654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <a href=\"ab_entities_update\"><b>Update</b></a>
    </li>
";
        
        $__internal_d398ef3ac8dd30030011628955c32027b47fccc5eba0e01f0786c63806c1f654->leave($__internal_d398ef3ac8dd30030011628955c32027b47fccc5eba0e01f0786c63806c1f654_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fea32e5e056ba4b06678f7b7a31b36459a9cf3d4fe276fe5c5de2918f2dea55 = $this->env->getExtension("native_profiler");
        $__internal_9fea32e5e056ba4b06678f7b7a31b36459a9cf3d4fe276fe5c5de2918f2dea55->enter($__internal_9fea32e5e056ba4b06678f7b7a31b36459a9cf3d4fe276fe5c5de2918f2dea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            <div class=\"box-body\">
                <div class=\"form-group col-md-6\">
                    <label for=\"name\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"country\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                </div>
            </div><!-- /.box-body -->

            <div class=\"box-footer pull-right\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

            </div>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div><!-- /.box -->
";
        
        $__internal_9fea32e5e056ba4b06678f7b7a31b36459a9cf3d4fe276fe5c5de2918f2dea55->leave($__internal_9fea32e5e056ba4b06678f7b7a31b36459a9cf3d4fe276fe5c5de2918f2dea55_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Roles/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  122 => 38,  118 => 37,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Roles:update{% endblock %}*/
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
/*         <a href="ab_entities_update"><b>Update</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*             <div class="box-body">*/
/*                 <div class="form-group col-md-6">*/
/*                     <label for="name">{{ form_label(form.description) }}</label>*/
/*                     {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder': 'Institution Name'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="country">{{ form_label(form.enabled) }}</label>*/
/*                     {{ form_widget(form.enabled, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                 </div>*/
/*             </div><!-- /.box-body -->*/
/* */
/*             <div class="box-footer pull-right">*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*                 <a href="{{ path ("ab_roles_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
/* */
