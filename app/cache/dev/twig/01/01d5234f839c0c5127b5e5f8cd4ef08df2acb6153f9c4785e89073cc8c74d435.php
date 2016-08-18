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
        $__internal_1354855b26112b7c738bbf6f9185aae94beb47fafa3b885ef39eb62488f96495 = $this->env->getExtension("native_profiler");
        $__internal_1354855b26112b7c738bbf6f9185aae94beb47fafa3b885ef39eb62488f96495->enter($__internal_1354855b26112b7c738bbf6f9185aae94beb47fafa3b885ef39eb62488f96495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1354855b26112b7c738bbf6f9185aae94beb47fafa3b885ef39eb62488f96495->leave($__internal_1354855b26112b7c738bbf6f9185aae94beb47fafa3b885ef39eb62488f96495_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdded720337bc8a2343650e8a43f231f65f8a62faaca879b5bbd478267d9863e = $this->env->getExtension("native_profiler");
        $__internal_fdded720337bc8a2343650e8a43f231f65f8a62faaca879b5bbd478267d9863e->enter($__internal_fdded720337bc8a2343650e8a43f231f65f8a62faaca879b5bbd478267d9863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fdded720337bc8a2343650e8a43f231f65f8a62faaca879b5bbd478267d9863e->leave($__internal_fdded720337bc8a2343650e8a43f231f65f8a62faaca879b5bbd478267d9863e_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f915af568fb3cb7388f0ccce9ae5b0da6a9ee68e8df9b39e5e605b5ff28ee620 = $this->env->getExtension("native_profiler");
        $__internal_f915af568fb3cb7388f0ccce9ae5b0da6a9ee68e8df9b39e5e605b5ff28ee620->enter($__internal_f915af568fb3cb7388f0ccce9ae5b0da6a9ee68e8df9b39e5e605b5ff28ee620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\"><b>Widgets</b></a>
    </li>
";
        
        $__internal_f915af568fb3cb7388f0ccce9ae5b0da6a9ee68e8df9b39e5e605b5ff28ee620->leave($__internal_f915af568fb3cb7388f0ccce9ae5b0da6a9ee68e8df9b39e5e605b5ff28ee620_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d600e4f14088bf222e271d787c469ab8050f0fc88b34be30f1d6b5498891d01 = $this->env->getExtension("native_profiler");
        $__internal_1d600e4f14088bf222e271d787c469ab8050f0fc88b34be30f1d6b5498891d01->enter($__internal_1d600e4f14088bf222e271d787c469ab8050f0fc88b34be30f1d6b5498891d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Type</th>
                <th>Position</th>
                <th>Query</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "query", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    
    <div class=\"box-footer pull-right\">
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("db_widget_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    
";
        
        $__internal_1d600e4f14088bf222e271d787c469ab8050f0fc88b34be30f1d6b5498891d01->leave($__internal_1d600e4f14088bf222e271d787c469ab8050f0fc88b34be30f1d6b5498891d01_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_bbeefda09a398a2fd5c06b6e01fcc045aa7d030ad3769ae781c458ce65379e92 = $this->env->getExtension("native_profiler");
        $__internal_bbeefda09a398a2fd5c06b6e01fcc045aa7d030ad3769ae781c458ce65379e92->enter($__internal_bbeefda09a398a2fd5c06b6e01fcc045aa7d030ad3769ae781c458ce65379e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 48
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_bbeefda09a398a2fd5c06b6e01fcc045aa7d030ad3769ae781c458ce65379e92->leave($__internal_bbeefda09a398a2fd5c06b6e01fcc045aa7d030ad3769ae781c458ce65379e92_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_e695d616eb1df144e430a4355136089418f5c9c3452dbd38807a85fe54b368f9 = $this->env->getExtension("native_profiler");
        $__internal_e695d616eb1df144e430a4355136089418f5c9c3452dbd38807a85fe54b368f9->enter($__internal_e695d616eb1df144e430a4355136089418f5c9c3452dbd38807a85fe54b368f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_e695d616eb1df144e430a4355136089418f5c9c3452dbd38807a85fe54b368f9->leave($__internal_e695d616eb1df144e430a4355136089418f5c9c3452dbd38807a85fe54b368f9_prof);

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
        return array (  183 => 57,  180 => 56,  174 => 55,  164 => 51,  160 => 50,  156 => 49,  153 => 48,  147 => 47,  136 => 42,  130 => 38,  121 => 35,  117 => 34,  111 => 33,  108 => 32,  104 => 31,  92 => 21,  86 => 20,  76 => 15,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("db_widget_list") }}"><b>Widgets</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Type</th>*/
/*                 <th>Position</th>*/
/*                 <th>Query</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_widget_see",{'id':entity.id}) }}"title="view">{{ entity.type }}</a></td>*/
/*                     <td>{{ entity.position }}</td>*/
/*                     <td>{{ entity.query }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*     <div class="box-footer pull-right">*/
/*         <a href="{{ path ("db_widget_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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
