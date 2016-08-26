<?php

/* DashboardBundle:Dashboard:update.html.twig */
class __TwigTemplate_ef183c7f37fbcdec63a39446c59d7df89077260008cdc8be0c9d66084586600e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:update.html.twig", 1);
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
        $__internal_3f0962bd6e5277713f94dc53de6b96dfd7226e4385241aaa1f921c1de6dc4593 = $this->env->getExtension("native_profiler");
        $__internal_3f0962bd6e5277713f94dc53de6b96dfd7226e4385241aaa1f921c1de6dc4593->enter($__internal_3f0962bd6e5277713f94dc53de6b96dfd7226e4385241aaa1f921c1de6dc4593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f0962bd6e5277713f94dc53de6b96dfd7226e4385241aaa1f921c1de6dc4593->leave($__internal_3f0962bd6e5277713f94dc53de6b96dfd7226e4385241aaa1f921c1de6dc4593_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29253c53648638336e06e0e6f4b8beb1f7a0bfad13dd72349ae9b618137d8ac2 = $this->env->getExtension("native_profiler");
        $__internal_29253c53648638336e06e0e6f4b8beb1f7a0bfad13dd72349ae9b618137d8ac2->enter($__internal_29253c53648638336e06e0e6f4b8beb1f7a0bfad13dd72349ae9b618137d8ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Dashboard:update";
        
        $__internal_29253c53648638336e06e0e6f4b8beb1f7a0bfad13dd72349ae9b618137d8ac2->leave($__internal_29253c53648638336e06e0e6f4b8beb1f7a0bfad13dd72349ae9b618137d8ac2_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0ba13e4f118b44b3f2bfb4bc7c83665cb735bcfaeaf2eea87669c71a62a87165 = $this->env->getExtension("native_profiler");
        $__internal_0ba13e4f118b44b3f2bfb4bc7c83665cb735bcfaeaf2eea87669c71a62a87165->enter($__internal_0ba13e4f118b44b3f2bfb4bc7c83665cb735bcfaeaf2eea87669c71a62a87165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboards</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Update</b>
    </li>
";
        
        $__internal_0ba13e4f118b44b3f2bfb4bc7c83665cb735bcfaeaf2eea87669c71a62a87165->leave($__internal_0ba13e4f118b44b3f2bfb4bc7c83665cb735bcfaeaf2eea87669c71a62a87165_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea70f4c3d08d7e95fdfb24078964145f6fd88bf11fbe23eae887808a6b484df9 = $this->env->getExtension("native_profiler");
        $__internal_ea70f4c3d08d7e95fdfb24078964145f6fd88bf11fbe23eae887808a6b484df9->enter($__internal_ea70f4c3d08d7e95fdfb24078964145f6fd88bf11fbe23eae887808a6b484df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"box box-primary\">
        <div class=\"box-header\"></div><!-- /.box-header -->
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
        <div class=\"box-body row\">
            <div class=\"form-group col-md-6\">
                <label for=\"dashboard_name_id\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("id" => "dashboard_name_id", "class" => "form-control", "placeholder" => "Dashboard Name")));
        echo "
            </div>                
        </div>

        <div class=\"box-footer pull-right\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>

        </div>
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
";
        
        $__internal_ea70f4c3d08d7e95fdfb24078964145f6fd88bf11fbe23eae887808a6b484df9->leave($__internal_ea70f4c3d08d7e95fdfb24078964145f6fd88bf11fbe23eae887808a6b484df9_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  104 => 29,  100 => 28,  92 => 23,  88 => 22,  82 => 19,  77 => 16,  71 => 15,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}DashboardBundle:Dashboard:update{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboards</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Update</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="box box-primary">*/
/*         <div class="box-header"></div><!-- /.box-header -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*         <div class="box-body row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label for="dashboard_name_id">{{ form_label(form.name) }}</label>*/
/*                 {{ form_widget(form.name, {'attr': {'id' : 'dashboard_name_id','class': 'form-control','placeholder': 'Dashboard Name'}}) }}*/
/*             </div>                */
/*         </div>*/
/* */
/*         <div class="box-footer pull-right">*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*             <a href="{{ path ("db_dashboard_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/* */
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     */
/* {% endblock %}*/
