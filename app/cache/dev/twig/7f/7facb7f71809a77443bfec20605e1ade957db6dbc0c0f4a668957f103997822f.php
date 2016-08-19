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
        $__internal_d32d17eb5a88138b4ed7f484cb8a98aec41b03da2c7d0afbde30a3979ff5c272 = $this->env->getExtension("native_profiler");
        $__internal_d32d17eb5a88138b4ed7f484cb8a98aec41b03da2c7d0afbde30a3979ff5c272->enter($__internal_d32d17eb5a88138b4ed7f484cb8a98aec41b03da2c7d0afbde30a3979ff5c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32d17eb5a88138b4ed7f484cb8a98aec41b03da2c7d0afbde30a3979ff5c272->leave($__internal_d32d17eb5a88138b4ed7f484cb8a98aec41b03da2c7d0afbde30a3979ff5c272_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_936a498a41abae1bde90ef9b790a8be5cfc6768decf0060d4c5ae0eec044af4b = $this->env->getExtension("native_profiler");
        $__internal_936a498a41abae1bde90ef9b790a8be5cfc6768decf0060d4c5ae0eec044af4b->enter($__internal_936a498a41abae1bde90ef9b790a8be5cfc6768decf0060d4c5ae0eec044af4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_936a498a41abae1bde90ef9b790a8be5cfc6768decf0060d4c5ae0eec044af4b->leave($__internal_936a498a41abae1bde90ef9b790a8be5cfc6768decf0060d4c5ae0eec044af4b_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_05f5fefc918f27f32907e3f4e4c474ddc5c6fd29e0ff03809025043fb4f429c5 = $this->env->getExtension("native_profiler");
        $__internal_05f5fefc918f27f32907e3f4e4c474ddc5c6fd29e0ff03809025043fb4f429c5->enter($__internal_05f5fefc918f27f32907e3f4e4c474ddc5c6fd29e0ff03809025043fb4f429c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <b>Dashboards</b>
    </li>
";
        
        $__internal_05f5fefc918f27f32907e3f4e4c474ddc5c6fd29e0ff03809025043fb4f429c5->leave($__internal_05f5fefc918f27f32907e3f4e4c474ddc5c6fd29e0ff03809025043fb4f429c5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabaa362f42cd276bbc59e0debec50cfce81cc7ce79111c3d706b2931c216ff1 = $this->env->getExtension("native_profiler");
        $__internal_dabaa362f42cd276bbc59e0debec50cfce81cc7ce79111c3d706b2931c216ff1->enter($__internal_dabaa362f42cd276bbc59e0debec50cfce81cc7ce79111c3d706b2931c216ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
    <div class=\"box-footer pull-right\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("db_dashboard_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>
            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Name</th>
                <th>Update Date</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                <tr>
                    <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Name", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
        
    
    
";
        
        $__internal_dabaa362f42cd276bbc59e0debec50cfce81cc7ce79111c3d706b2931c216ff1->leave($__internal_dabaa362f42cd276bbc59e0debec50cfce81cc7ce79111c3d706b2931c216ff1_prof);

    }

    // line 44
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_bebaed2404d2ad303e490fb18623c84c3b1b475ce960322680fccbbd1caa4196 = $this->env->getExtension("native_profiler");
        $__internal_bebaed2404d2ad303e490fb18623c84c3b1b475ce960322680fccbbd1caa4196->enter($__internal_bebaed2404d2ad303e490fb18623c84c3b1b475ce960322680fccbbd1caa4196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 45
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_bebaed2404d2ad303e490fb18623c84c3b1b475ce960322680fccbbd1caa4196->leave($__internal_bebaed2404d2ad303e490fb18623c84c3b1b475ce960322680fccbbd1caa4196_prof);

    }

    // line 52
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_2089909b21d17cfedae0b7026d223640ff32650d4b7b5ae1d9be85d0b790fcf7 = $this->env->getExtension("native_profiler");
        $__internal_2089909b21d17cfedae0b7026d223640ff32650d4b7b5ae1d9be85d0b790fcf7->enter($__internal_2089909b21d17cfedae0b7026d223640ff32650d4b7b5ae1d9be85d0b790fcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 53
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_2089909b21d17cfedae0b7026d223640ff32650d4b7b5ae1d9be85d0b790fcf7->leave($__internal_2089909b21d17cfedae0b7026d223640ff32650d4b7b5ae1d9be85d0b790fcf7_prof);

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
        return array (  171 => 54,  168 => 53,  162 => 52,  152 => 48,  148 => 47,  144 => 46,  141 => 45,  135 => 44,  123 => 37,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  86 => 19,  82 => 17,  76 => 16,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Dashboards</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer pull-right" style="border-bottom: 15px">*/
/*         <a href="{{ path ("db_dashboard_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Name</th>*/
/*                 <th>Update Date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_dashboard_see",{'id':entity.id}) }}"title="view">{{ entity.Name }}</a></td>*/
/*                     <td>{{ entity.updateDate | date("Y-m-d H:i:s")}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*     */
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
