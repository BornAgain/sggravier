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
        $__internal_961c98c66667483bc62f616034f87b91fc303259ee62886962c29a88e5cf6ad2 = $this->env->getExtension("native_profiler");
        $__internal_961c98c66667483bc62f616034f87b91fc303259ee62886962c29a88e5cf6ad2->enter($__internal_961c98c66667483bc62f616034f87b91fc303259ee62886962c29a88e5cf6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_961c98c66667483bc62f616034f87b91fc303259ee62886962c29a88e5cf6ad2->leave($__internal_961c98c66667483bc62f616034f87b91fc303259ee62886962c29a88e5cf6ad2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb0a82c86cd1e15db4c25a6fee2dcea91441d93da9d0a18dbdac5eef4339ffa7 = $this->env->getExtension("native_profiler");
        $__internal_cb0a82c86cd1e15db4c25a6fee2dcea91441d93da9d0a18dbdac5eef4339ffa7->enter($__internal_cb0a82c86cd1e15db4c25a6fee2dcea91441d93da9d0a18dbdac5eef4339ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cb0a82c86cd1e15db4c25a6fee2dcea91441d93da9d0a18dbdac5eef4339ffa7->leave($__internal_cb0a82c86cd1e15db4c25a6fee2dcea91441d93da9d0a18dbdac5eef4339ffa7_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_64c63587345a01961c0a5c14074c7fdfff6c79622968ba8d7895c3686c78e1b6 = $this->env->getExtension("native_profiler");
        $__internal_64c63587345a01961c0a5c14074c7fdfff6c79622968ba8d7895c3686c78e1b6->enter($__internal_64c63587345a01961c0a5c14074c7fdfff6c79622968ba8d7895c3686c78e1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"><b>Dashboards</b></a>
    </li>
";
        
        $__internal_64c63587345a01961c0a5c14074c7fdfff6c79622968ba8d7895c3686c78e1b6->leave($__internal_64c63587345a01961c0a5c14074c7fdfff6c79622968ba8d7895c3686c78e1b6_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0f51a7fe1584a685d513b4c23c551936ce6fb3acd1576e6a51a614c1feadbc = $this->env->getExtension("native_profiler");
        $__internal_cc0f51a7fe1584a685d513b4c23c551936ce6fb3acd1576e6a51a614c1feadbc->enter($__internal_cc0f51a7fe1584a685d513b4c23c551936ce6fb3acd1576e6a51a614c1feadbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc0f51a7fe1584a685d513b4c23c551936ce6fb3acd1576e6a51a614c1feadbc->leave($__internal_cc0f51a7fe1584a685d513b4c23c551936ce6fb3acd1576e6a51a614c1feadbc_prof);

    }

    // line 39
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_80e4ca42961f888db4a504dc17672e16338274acdcab5fee436f2fb7ef093e92 = $this->env->getExtension("native_profiler");
        $__internal_80e4ca42961f888db4a504dc17672e16338274acdcab5fee436f2fb7ef093e92->enter($__internal_80e4ca42961f888db4a504dc17672e16338274acdcab5fee436f2fb7ef093e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_80e4ca42961f888db4a504dc17672e16338274acdcab5fee436f2fb7ef093e92->leave($__internal_80e4ca42961f888db4a504dc17672e16338274acdcab5fee436f2fb7ef093e92_prof);

    }

    // line 47
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_f779aca27d2fa7b2864368d019796c9a4880800d9c6b57e530e65867325fe329 = $this->env->getExtension("native_profiler");
        $__internal_f779aca27d2fa7b2864368d019796c9a4880800d9c6b57e530e65867325fe329->enter($__internal_f779aca27d2fa7b2864368d019796c9a4880800d9c6b57e530e65867325fe329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 48
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_f779aca27d2fa7b2864368d019796c9a4880800d9c6b57e530e65867325fe329->leave($__internal_f779aca27d2fa7b2864368d019796c9a4880800d9c6b57e530e65867325fe329_prof);

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
