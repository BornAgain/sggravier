<?php

/* CubesBundle:Cubes:list.html.twig */
class __TwigTemplate_84c53139d9ffb5b423bc8dd58b82c5fdcdc7d8bdea9b00061df6b63e97bd2b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CubesBundle:Cubes:list.html.twig", 1);
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
        $__internal_333b69436a70dad90d3ac00699bd70da8c2829a5ba7169a237a2378ba452e58e = $this->env->getExtension("native_profiler");
        $__internal_333b69436a70dad90d3ac00699bd70da8c2829a5ba7169a237a2378ba452e58e->enter($__internal_333b69436a70dad90d3ac00699bd70da8c2829a5ba7169a237a2378ba452e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CubesBundle:Cubes:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333b69436a70dad90d3ac00699bd70da8c2829a5ba7169a237a2378ba452e58e->leave($__internal_333b69436a70dad90d3ac00699bd70da8c2829a5ba7169a237a2378ba452e58e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d7fa6b65542b561e944339e4bd995d75cd951d3450c437dd430320feb3f034d = $this->env->getExtension("native_profiler");
        $__internal_7d7fa6b65542b561e944339e4bd995d75cd951d3450c437dd430320feb3f034d->enter($__internal_7d7fa6b65542b561e944339e4bd995d75cd951d3450c437dd430320feb3f034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7d7fa6b65542b561e944339e4bd995d75cd951d3450c437dd430320feb3f034d->leave($__internal_7d7fa6b65542b561e944339e4bd995d75cd951d3450c437dd430320feb3f034d_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1adb85dc72e56e3fb35c7d9ba2567c20f7cbed71d35e41aac25691702b49d262 = $this->env->getExtension("native_profiler");
        $__internal_1adb85dc72e56e3fb35c7d9ba2567c20f7cbed71d35e41aac25691702b49d262->enter($__internal_1adb85dc72e56e3fb35c7d9ba2567c20f7cbed71d35e41aac25691702b49d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("cb_cubes_list");
        echo "\"><b>Cubes</b></a>
    </li>
";
        
        $__internal_1adb85dc72e56e3fb35c7d9ba2567c20f7cbed71d35e41aac25691702b49d262->leave($__internal_1adb85dc72e56e3fb35c7d9ba2567c20f7cbed71d35e41aac25691702b49d262_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30871a7c39a11792958e7e523abba94fcc6ddf2d9deb478adb58659f520770f = $this->env->getExtension("native_profiler");
        $__internal_c30871a7c39a11792958e7e523abba94fcc6ddf2d9deb478adb58659f520770f->enter($__internal_c30871a7c39a11792958e7e523abba94fcc6ddf2d9deb478adb58659f520770f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Contract</th>
                <th>Loc_Contract</th>
                <th>ACCT_DATE</th>
                <th>AMT_LCY</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contract", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "locContract", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "aCCTDATE", array()), "Y-m-d H:i:s "), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aMTLCY", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("cb_cubes_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    
";
        
        $__internal_c30871a7c39a11792958e7e523abba94fcc6ddf2d9deb478adb58659f520770f->leave($__internal_c30871a7c39a11792958e7e523abba94fcc6ddf2d9deb478adb58659f520770f_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_30f3047d800b35af169549cd49b522ed2cc38925c8580b3a12bf958ba2244de2 = $this->env->getExtension("native_profiler");
        $__internal_30f3047d800b35af169549cd49b522ed2cc38925c8580b3a12bf958ba2244de2->enter($__internal_30f3047d800b35af169549cd49b522ed2cc38925c8580b3a12bf958ba2244de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_30f3047d800b35af169549cd49b522ed2cc38925c8580b3a12bf958ba2244de2->leave($__internal_30f3047d800b35af169549cd49b522ed2cc38925c8580b3a12bf958ba2244de2_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_33428cd8352dca06e58addcf941e15ba860b224d0f850b43074cc16ecced0677 = $this->env->getExtension("native_profiler");
        $__internal_33428cd8352dca06e58addcf941e15ba860b224d0f850b43074cc16ecced0677->enter($__internal_33428cd8352dca06e58addcf941e15ba860b224d0f850b43074cc16ecced0677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_33428cd8352dca06e58addcf941e15ba860b224d0f850b43074cc16ecced0677->leave($__internal_33428cd8352dca06e58addcf941e15ba860b224d0f850b43074cc16ecced0677_prof);

    }

    public function getTemplateName()
    {
        return "CubesBundle:Cubes:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 57,  181 => 56,  175 => 55,  165 => 51,  161 => 50,  157 => 49,  154 => 48,  148 => 47,  138 => 43,  133 => 40,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  109 => 33,  105 => 32,  92 => 21,  86 => 20,  76 => 15,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("cb_cubes_list") }}"><b>Cubes</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Contract</th>*/
/*                 <th>Loc_Contract</th>*/
/*                 <th>ACCT_DATE</th>*/
/*                 <th>AMT_LCY</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{entity.contract }}</td>*/
/*                     <td>{{ entity.locContract }}</td>*/
/*                     <td>{{ entity.aCCTDATE | date("Y-m-d H:i:s ")}}</td>*/
/*                     <td>{{ entity.aMTLCY}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path ("cb_cubes_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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
