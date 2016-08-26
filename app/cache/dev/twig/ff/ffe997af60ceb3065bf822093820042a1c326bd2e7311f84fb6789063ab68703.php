<?php

/* @Dashboard/Widget/list.html.twig */
class __TwigTemplate_8e64184daac72f75f10fd4ad09d67643e7cacbc3964d27d1fb16b91cee584f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Widget/list.html.twig", 1);
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
        $__internal_b8f0a7ccb94fd146a9c34b09e39cdd2f2531dbcd4136f3c2b9a2f5029c2e063c = $this->env->getExtension("native_profiler");
        $__internal_b8f0a7ccb94fd146a9c34b09e39cdd2f2531dbcd4136f3c2b9a2f5029c2e063c->enter($__internal_b8f0a7ccb94fd146a9c34b09e39cdd2f2531dbcd4136f3c2b9a2f5029c2e063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Widget/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f0a7ccb94fd146a9c34b09e39cdd2f2531dbcd4136f3c2b9a2f5029c2e063c->leave($__internal_b8f0a7ccb94fd146a9c34b09e39cdd2f2531dbcd4136f3c2b9a2f5029c2e063c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4367ddb52f3f4cacaa93230858a6f815c7198cfe0b5684cea80fe4959e38e5ee = $this->env->getExtension("native_profiler");
        $__internal_4367ddb52f3f4cacaa93230858a6f815c7198cfe0b5684cea80fe4959e38e5ee->enter($__internal_4367ddb52f3f4cacaa93230858a6f815c7198cfe0b5684cea80fe4959e38e5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4367ddb52f3f4cacaa93230858a6f815c7198cfe0b5684cea80fe4959e38e5ee->leave($__internal_4367ddb52f3f4cacaa93230858a6f815c7198cfe0b5684cea80fe4959e38e5ee_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_a334290d1eb58f8fedc53633acc096b84b92a2697b335c497c8f6626c11a0799 = $this->env->getExtension("native_profiler");
        $__internal_a334290d1eb58f8fedc53633acc096b84b92a2697b335c497c8f6626c11a0799->enter($__internal_a334290d1eb58f8fedc53633acc096b84b92a2697b335c497c8f6626c11a0799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_a334290d1eb58f8fedc53633acc096b84b92a2697b335c497c8f6626c11a0799->leave($__internal_a334290d1eb58f8fedc53633acc096b84b92a2697b335c497c8f6626c11a0799_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_450b09e6f59da97c1b6f501630956066328929d6d56b85e7fc8ccc5647911df3 = $this->env->getExtension("native_profiler");
        $__internal_450b09e6f59da97c1b6f501630956066328929d6d56b85e7fc8ccc5647911df3->enter($__internal_450b09e6f59da97c1b6f501630956066328929d6d56b85e7fc8ccc5647911df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footert\" style=\"border-bottom: 15px\">
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
                <th>Update date</th>
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
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:m:s"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
    
   
    
";
        
        $__internal_450b09e6f59da97c1b6f501630956066328929d6d56b85e7fc8ccc5647911df3->leave($__internal_450b09e6f59da97c1b6f501630956066328929d6d56b85e7fc8ccc5647911df3_prof);

    }

    // line 54
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_aa1a20847fc6d484dcf719737e0a522a4ea6ed6304de8547c1e4908a46f95887 = $this->env->getExtension("native_profiler");
        $__internal_aa1a20847fc6d484dcf719737e0a522a4ea6ed6304de8547c1e4908a46f95887->enter($__internal_aa1a20847fc6d484dcf719737e0a522a4ea6ed6304de8547c1e4908a46f95887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 55
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_aa1a20847fc6d484dcf719737e0a522a4ea6ed6304de8547c1e4908a46f95887->leave($__internal_aa1a20847fc6d484dcf719737e0a522a4ea6ed6304de8547c1e4908a46f95887_prof);

    }

    // line 62
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_42c682bb3298d82b94a59bc6a90cfa6706d35dd029e251656a4e7624498bbedc = $this->env->getExtension("native_profiler");
        $__internal_42c682bb3298d82b94a59bc6a90cfa6706d35dd029e251656a4e7624498bbedc->enter($__internal_42c682bb3298d82b94a59bc6a90cfa6706d35dd029e251656a4e7624498bbedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 63
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_42c682bb3298d82b94a59bc6a90cfa6706d35dd029e251656a4e7624498bbedc->leave($__internal_42c682bb3298d82b94a59bc6a90cfa6706d35dd029e251656a4e7624498bbedc_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 64,  190 => 63,  184 => 62,  174 => 58,  170 => 57,  166 => 56,  163 => 55,  157 => 54,  145 => 47,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  118 => 40,  115 => 39,  111 => 38,  93 => 23,  89 => 21,  83 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*     <div class="box-footert" style="border-bottom: 15px">*/
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
/*                 <th>Update date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_widget_see",{'id':entity.id}) }}"title="view">{{ entity.name }}</a></td>*/
/*                     <td>{{ entity.type }}</td>*/
/*                     <td>{{ entity.position }}</td>*/
/*                     <td>{{ entity.dashboard.name }}</td>*/
/*                     <td>{{ entity.updateDate | date('Y-m-d H:m:s')}}</td>*/
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
