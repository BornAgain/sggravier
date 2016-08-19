<?php

/* DashboardBundle:Widget:list.html.twig */
class __TwigTemplate_5cf5a05364b37fc426f643c1a3be96d33d8f0b2b0d1c7ae3693842676daacca3 extends Twig_Template
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
        $__internal_d8484b6904870b5e5560ae92e555914e19cc80cb13a802c687bbfe8c7e1b7462 = $this->env->getExtension("native_profiler");
        $__internal_d8484b6904870b5e5560ae92e555914e19cc80cb13a802c687bbfe8c7e1b7462->enter($__internal_d8484b6904870b5e5560ae92e555914e19cc80cb13a802c687bbfe8c7e1b7462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8484b6904870b5e5560ae92e555914e19cc80cb13a802c687bbfe8c7e1b7462->leave($__internal_d8484b6904870b5e5560ae92e555914e19cc80cb13a802c687bbfe8c7e1b7462_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86b7f87c00c577ea9b0d0718f9bebd7c0bd892938eab3c9fad44de594ac3a57a = $this->env->getExtension("native_profiler");
        $__internal_86b7f87c00c577ea9b0d0718f9bebd7c0bd892938eab3c9fad44de594ac3a57a->enter($__internal_86b7f87c00c577ea9b0d0718f9bebd7c0bd892938eab3c9fad44de594ac3a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_86b7f87c00c577ea9b0d0718f9bebd7c0bd892938eab3c9fad44de594ac3a57a->leave($__internal_86b7f87c00c577ea9b0d0718f9bebd7c0bd892938eab3c9fad44de594ac3a57a_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6ef1c1b5a59f0006ff4b0e512b5ed0a0d0657d7abfcfa9e97e987b1f6a6c52e6 = $this->env->getExtension("native_profiler");
        $__internal_6ef1c1b5a59f0006ff4b0e512b5ed0a0d0657d7abfcfa9e97e987b1f6a6c52e6->enter($__internal_6ef1c1b5a59f0006ff4b0e512b5ed0a0d0657d7abfcfa9e97e987b1f6a6c52e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_6ef1c1b5a59f0006ff4b0e512b5ed0a0d0657d7abfcfa9e97e987b1f6a6c52e6->leave($__internal_6ef1c1b5a59f0006ff4b0e512b5ed0a0d0657d7abfcfa9e97e987b1f6a6c52e6_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1e47d62cf1c128efec5d22da651810476c6f7721e44bc8373bf93ff17e44b80 = $this->env->getExtension("native_profiler");
        $__internal_c1e47d62cf1c128efec5d22da651810476c6f7721e44bc8373bf93ff17e44b80->enter($__internal_c1e47d62cf1c128efec5d22da651810476c6f7721e44bc8373bf93ff17e44b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1e47d62cf1c128efec5d22da651810476c6f7721e44bc8373bf93ff17e44b80->leave($__internal_c1e47d62cf1c128efec5d22da651810476c6f7721e44bc8373bf93ff17e44b80_prof);

    }

    // line 53
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_d2783cf2b5a1d2d0a9f9e845e425a987843799070992637e79730d0e94f45513 = $this->env->getExtension("native_profiler");
        $__internal_d2783cf2b5a1d2d0a9f9e845e425a987843799070992637e79730d0e94f45513->enter($__internal_d2783cf2b5a1d2d0a9f9e845e425a987843799070992637e79730d0e94f45513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_d2783cf2b5a1d2d0a9f9e845e425a987843799070992637e79730d0e94f45513->leave($__internal_d2783cf2b5a1d2d0a9f9e845e425a987843799070992637e79730d0e94f45513_prof);

    }

    // line 61
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_e34cea02dd7269d6b1448a3794e8b6b8fad49a25368b8a61c7fa860a9fda581d = $this->env->getExtension("native_profiler");
        $__internal_e34cea02dd7269d6b1448a3794e8b6b8fad49a25368b8a61c7fa860a9fda581d->enter($__internal_e34cea02dd7269d6b1448a3794e8b6b8fad49a25368b8a61c7fa860a9fda581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 62
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_e34cea02dd7269d6b1448a3794e8b6b8fad49a25368b8a61c7fa860a9fda581d->leave($__internal_e34cea02dd7269d6b1448a3794e8b6b8fad49a25368b8a61c7fa860a9fda581d_prof);

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
