<?php

/* DashboardBundle:Widget:list.html.twig */
class __TwigTemplate_4ddd26255aa1bce1cc26a789f221fa12911afb6ffa6460ba9757a868489681ad extends Twig_Template
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
        $__internal_2cc8cb663e99de22a2476af7b2f767f3600089d9df69e03b0ec091b1a2093100 = $this->env->getExtension("native_profiler");
        $__internal_2cc8cb663e99de22a2476af7b2f767f3600089d9df69e03b0ec091b1a2093100->enter($__internal_2cc8cb663e99de22a2476af7b2f767f3600089d9df69e03b0ec091b1a2093100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc8cb663e99de22a2476af7b2f767f3600089d9df69e03b0ec091b1a2093100->leave($__internal_2cc8cb663e99de22a2476af7b2f767f3600089d9df69e03b0ec091b1a2093100_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8e6353bc1a58e901994791206af6cc4d91c4de88f54449691877c58601cc390 = $this->env->getExtension("native_profiler");
        $__internal_f8e6353bc1a58e901994791206af6cc4d91c4de88f54449691877c58601cc390->enter($__internal_f8e6353bc1a58e901994791206af6cc4d91c4de88f54449691877c58601cc390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f8e6353bc1a58e901994791206af6cc4d91c4de88f54449691877c58601cc390->leave($__internal_f8e6353bc1a58e901994791206af6cc4d91c4de88f54449691877c58601cc390_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_dfc7e34f633000edfb601fa1d5425114eb177e33bedf3d2aeee2b783328da6e3 = $this->env->getExtension("native_profiler");
        $__internal_dfc7e34f633000edfb601fa1d5425114eb177e33bedf3d2aeee2b783328da6e3->enter($__internal_dfc7e34f633000edfb601fa1d5425114eb177e33bedf3d2aeee2b783328da6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_dfc7e34f633000edfb601fa1d5425114eb177e33bedf3d2aeee2b783328da6e3->leave($__internal_dfc7e34f633000edfb601fa1d5425114eb177e33bedf3d2aeee2b783328da6e3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bce9fd4a34ffdca86816af8b5a085fbd36ec97d1425f371b72f1e816f2084bf = $this->env->getExtension("native_profiler");
        $__internal_1bce9fd4a34ffdca86816af8b5a085fbd36ec97d1425f371b72f1e816f2084bf->enter($__internal_1bce9fd4a34ffdca86816af8b5a085fbd36ec97d1425f371b72f1e816f2084bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1bce9fd4a34ffdca86816af8b5a085fbd36ec97d1425f371b72f1e816f2084bf->leave($__internal_1bce9fd4a34ffdca86816af8b5a085fbd36ec97d1425f371b72f1e816f2084bf_prof);

    }

    // line 54
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_94f9509eb2367f81844134b2e464e695d85c7ce90c407442eadd7efddbed8ef2 = $this->env->getExtension("native_profiler");
        $__internal_94f9509eb2367f81844134b2e464e695d85c7ce90c407442eadd7efddbed8ef2->enter($__internal_94f9509eb2367f81844134b2e464e695d85c7ce90c407442eadd7efddbed8ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_94f9509eb2367f81844134b2e464e695d85c7ce90c407442eadd7efddbed8ef2->leave($__internal_94f9509eb2367f81844134b2e464e695d85c7ce90c407442eadd7efddbed8ef2_prof);

    }

    // line 62
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_64c531f1b556d706c1bd5a35bf12487e175ad588fdfe6d103aeffe63e64c6f39 = $this->env->getExtension("native_profiler");
        $__internal_64c531f1b556d706c1bd5a35bf12487e175ad588fdfe6d103aeffe63e64c6f39->enter($__internal_64c531f1b556d706c1bd5a35bf12487e175ad588fdfe6d103aeffe63e64c6f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 63
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_64c531f1b556d706c1bd5a35bf12487e175ad588fdfe6d103aeffe63e64c6f39->leave($__internal_64c531f1b556d706c1bd5a35bf12487e175ad588fdfe6d103aeffe63e64c6f39_prof);

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
