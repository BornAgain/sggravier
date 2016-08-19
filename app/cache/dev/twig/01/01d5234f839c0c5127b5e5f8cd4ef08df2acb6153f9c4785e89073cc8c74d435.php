<?php

/* DashboardBundle:Widget:list.html.twig */
class __TwigTemplate_ac3e934d8b78ebb9d98dc4b4b43d581cf7eb994499ca212a542ae3ff337e7382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Widget:list.html.twig", 1);
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
        $__internal_ac12d8cd4ea8e9e3f8c21cbb02ae4cb9018ad5e116528131bbcb5f120a6c42bd = $this->env->getExtension("native_profiler");
        $__internal_ac12d8cd4ea8e9e3f8c21cbb02ae4cb9018ad5e116528131bbcb5f120a6c42bd->enter($__internal_ac12d8cd4ea8e9e3f8c21cbb02ae4cb9018ad5e116528131bbcb5f120a6c42bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac12d8cd4ea8e9e3f8c21cbb02ae4cb9018ad5e116528131bbcb5f120a6c42bd->leave($__internal_ac12d8cd4ea8e9e3f8c21cbb02ae4cb9018ad5e116528131bbcb5f120a6c42bd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_346b1fdc44b19a889df8418f1e2633028cef0ed27428b76c0f5b473f5106fa1f = $this->env->getExtension("native_profiler");
        $__internal_346b1fdc44b19a889df8418f1e2633028cef0ed27428b76c0f5b473f5106fa1f->enter($__internal_346b1fdc44b19a889df8418f1e2633028cef0ed27428b76c0f5b473f5106fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_346b1fdc44b19a889df8418f1e2633028cef0ed27428b76c0f5b473f5106fa1f->leave($__internal_346b1fdc44b19a889df8418f1e2633028cef0ed27428b76c0f5b473f5106fa1f_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_85413efcd8d364fde8b9b562038fea89622b37f18b6ffc7e137bbe1dbc2080b4 = $this->env->getExtension("native_profiler");
        $__internal_85413efcd8d364fde8b9b562038fea89622b37f18b6ffc7e137bbe1dbc2080b4->enter($__internal_85413efcd8d364fde8b9b562038fea89622b37f18b6ffc7e137bbe1dbc2080b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Widgets</b>
    </li>
";
        
        $__internal_85413efcd8d364fde8b9b562038fea89622b37f18b6ffc7e137bbe1dbc2080b4->leave($__internal_85413efcd8d364fde8b9b562038fea89622b37f18b6ffc7e137bbe1dbc2080b4_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_46d58879211418a0b7daa801c47f91b6472742ff82a68dc31653481412e497ca = $this->env->getExtension("native_profiler");
        $__internal_46d58879211418a0b7daa801c47f91b6472742ff82a68dc31653481412e497ca->enter($__internal_46d58879211418a0b7daa801c47f91b6472742ff82a68dc31653481412e497ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer pull-right\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("db_widget_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>
            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Name</th>
                <th>Type</th>
                <th>Position</th>
                <th>Dashboard</th>
                
            </tr>
        </thead>
        <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "                <tr>
                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "dashboard", array()), "name", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    
   
    
";
        
        $__internal_46d58879211418a0b7daa801c47f91b6472742ff82a68dc31653481412e497ca->leave($__internal_46d58879211418a0b7daa801c47f91b6472742ff82a68dc31653481412e497ca_prof);

    }

    // line 53
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_d868e2fd4f784f4945724534f8ba333fde2048d75f651cdb02a38aa35c9abe71 = $this->env->getExtension("native_profiler");
        $__internal_d868e2fd4f784f4945724534f8ba333fde2048d75f651cdb02a38aa35c9abe71->enter($__internal_d868e2fd4f784f4945724534f8ba333fde2048d75f651cdb02a38aa35c9abe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 54
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_d868e2fd4f784f4945724534f8ba333fde2048d75f651cdb02a38aa35c9abe71->leave($__internal_d868e2fd4f784f4945724534f8ba333fde2048d75f651cdb02a38aa35c9abe71_prof);

    }

    // line 61
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_de8c61d55493ff690a0320b66494a1977b141833bea354f308ff524c125f6b26 = $this->env->getExtension("native_profiler");
        $__internal_de8c61d55493ff690a0320b66494a1977b141833bea354f308ff524c125f6b26->enter($__internal_de8c61d55493ff690a0320b66494a1977b141833bea354f308ff524c125f6b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 62
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_de8c61d55493ff690a0320b66494a1977b141833bea354f308ff524c125f6b26->leave($__internal_de8c61d55493ff690a0320b66494a1977b141833bea354f308ff524c125f6b26_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 63,  186 => 62,  180 => 61,  170 => 57,  166 => 56,  162 => 55,  159 => 54,  153 => 53,  141 => 46,  132 => 43,  128 => 42,  124 => 41,  118 => 40,  115 => 39,  111 => 38,  93 => 23,  89 => 21,  83 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Widgets</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer pull-right" style="border-bottom: 15px">*/
/*         <a href="{{ path ("db_widget_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Name</th>*/
/*                 <th>Type</th>*/
/*                 <th>Position</th>*/
/*                 <th>Dashboard</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_widget_see",{'id':entity.id}) }}"title="view">{{ entity.name }}</a></td>*/
/*                     <td>{{ entity.type }}</td>*/
/*                     <td>{{ entity.position }}</td>*/
/*                     <td>{{ entity.dashboard.name }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*    */
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
