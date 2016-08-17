<?php

/* DashboardBundle:Dashboard:list.html.twig */
class __TwigTemplate_e845eefd3da038ba3c746c706595f5d77d1cbf2df49f0f155ab30f3b2bafc2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'plg_javascripts' => array($this, 'block_plg_javascripts'),
            'script_javascripts' => array($this, 'block_script_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f115fe32ac86319a4238f1e28c8f708392bfa18b93e0cceeed310ac7935071 = $this->env->getExtension("native_profiler");
        $__internal_42f115fe32ac86319a4238f1e28c8f708392bfa18b93e0cceeed310ac7935071->enter($__internal_42f115fe32ac86319a4238f1e28c8f708392bfa18b93e0cceeed310ac7935071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f115fe32ac86319a4238f1e28c8f708392bfa18b93e0cceeed310ac7935071->leave($__internal_42f115fe32ac86319a4238f1e28c8f708392bfa18b93e0cceeed310ac7935071_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77f24ced11c134f8dd38d050270399843996bbf07dae5da7b7756a5418883870 = $this->env->getExtension("native_profiler");
        $__internal_77f24ced11c134f8dd38d050270399843996bbf07dae5da7b7756a5418883870->enter($__internal_77f24ced11c134f8dd38d050270399843996bbf07dae5da7b7756a5418883870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
";
        
        $__internal_77f24ced11c134f8dd38d050270399843996bbf07dae5da7b7756a5418883870->leave($__internal_77f24ced11c134f8dd38d050270399843996bbf07dae5da7b7756a5418883870_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_dc3b8a25c4d3eade1bddf8ec7e5dff877ec6ec78e74056efce2abc9001bf430a = $this->env->getExtension("native_profiler");
        $__internal_dc3b8a25c4d3eade1bddf8ec7e5dff877ec6ec78e74056efce2abc9001bf430a->enter($__internal_dc3b8a25c4d3eade1bddf8ec7e5dff877ec6ec78e74056efce2abc9001bf430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"><b>Dashboards</b></a>
    </li>
";
        
        $__internal_dc3b8a25c4d3eade1bddf8ec7e5dff877ec6ec78e74056efce2abc9001bf430a->leave($__internal_dc3b8a25c4d3eade1bddf8ec7e5dff877ec6ec78e74056efce2abc9001bf430a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6533e6caa510690a0903ddb7a6a5495f31ecac01c1cc81ed072037f7e37dec = $this->env->getExtension("native_profiler");
        $__internal_ac6533e6caa510690a0903ddb7a6a5495f31ecac01c1cc81ed072037f7e37dec->enter($__internal_ac6533e6caa510690a0903ddb7a6a5495f31ecac01c1cc81ed072037f7e37dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                <tr>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Name", array()), "html", null, true);
            echo "</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
        
    <div class=\"box-footer pull-right\">
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("db_dashboard_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    
";
        
        $__internal_ac6533e6caa510690a0903ddb7a6a5495f31ecac01c1cc81ed072037f7e37dec->leave($__internal_ac6533e6caa510690a0903ddb7a6a5495f31ecac01c1cc81ed072037f7e37dec_prof);

    }

    // line 39
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_49451e2295d35339e4a444ed0ec239c8c745c6bc879dde0aa8dd9ee2d939e882 = $this->env->getExtension("native_profiler");
        $__internal_49451e2295d35339e4a444ed0ec239c8c745c6bc879dde0aa8dd9ee2d939e882->enter($__internal_49451e2295d35339e4a444ed0ec239c8c745c6bc879dde0aa8dd9ee2d939e882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 40
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_49451e2295d35339e4a444ed0ec239c8c745c6bc879dde0aa8dd9ee2d939e882->leave($__internal_49451e2295d35339e4a444ed0ec239c8c745c6bc879dde0aa8dd9ee2d939e882_prof);

    }

    // line 47
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_d67818c013dece8d99c49f5e18e5f2cdc1e63dc490bec29865152a3a3e60f340 = $this->env->getExtension("native_profiler");
        $__internal_d67818c013dece8d99c49f5e18e5f2cdc1e63dc490bec29865152a3a3e60f340->enter($__internal_d67818c013dece8d99c49f5e18e5f2cdc1e63dc490bec29865152a3a3e60f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 48
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_d67818c013dece8d99c49f5e18e5f2cdc1e63dc490bec29865152a3a3e60f340->leave($__internal_d67818c013dece8d99c49f5e18e5f2cdc1e63dc490bec29865152a3a3e60f340_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  163 => 48,  157 => 47,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  130 => 39,  119 => 34,  113 => 30,  102 => 27,  99 => 26,  95 => 25,  85 => 17,  79 => 16,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block stylesheets %}        */
/*     <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*     */
/* {% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}"><b>Dashboards</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Name</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_dashboard_see",{'id':entity.id}) }}"title="view">{{ entity.Name }}</a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*     <div class="box-footer pull-right">*/
/*         <a href="{{ path ("db_dashboard_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block plg_javascripts %}*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*     <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>*/
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %}*/
/* */
/* {% block script_javascripts %}*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*     <script src="{{ asset('assets/pages/scripts/table-datatables-fixedheader.min.js') }}" type="text/javascript"></script> */
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %}*/
/* */
/* */
