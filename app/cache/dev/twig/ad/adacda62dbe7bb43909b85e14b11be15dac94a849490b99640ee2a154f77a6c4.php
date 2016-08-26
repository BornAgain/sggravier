<?php

/* @Cubes/Cubes/list.html.twig */
class __TwigTemplate_6fb1abb6aa711bc4e7909ca6344831c89d68ddf196b7b74eae7bd7f742f1f1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Cubes/Cubes/list.html.twig", 1);
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
        $__internal_76ad5c4d47f91cf37ac785ccde314f9d311a697dcc22d09993b93445a57782ae = $this->env->getExtension("native_profiler");
        $__internal_76ad5c4d47f91cf37ac785ccde314f9d311a697dcc22d09993b93445a57782ae->enter($__internal_76ad5c4d47f91cf37ac785ccde314f9d311a697dcc22d09993b93445a57782ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cubes/Cubes/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ad5c4d47f91cf37ac785ccde314f9d311a697dcc22d09993b93445a57782ae->leave($__internal_76ad5c4d47f91cf37ac785ccde314f9d311a697dcc22d09993b93445a57782ae_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca1d283451778d5488aa9c779d585c0f97cfed879adddf286027db7e26185466 = $this->env->getExtension("native_profiler");
        $__internal_ca1d283451778d5488aa9c779d585c0f97cfed879adddf286027db7e26185466->enter($__internal_ca1d283451778d5488aa9c779d585c0f97cfed879adddf286027db7e26185466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ca1d283451778d5488aa9c779d585c0f97cfed879adddf286027db7e26185466->leave($__internal_ca1d283451778d5488aa9c779d585c0f97cfed879adddf286027db7e26185466_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6770450eeea3cae85f7f9d588249706ddc8493de0c1e7a6f6bf937a88e4e1e31 = $this->env->getExtension("native_profiler");
        $__internal_6770450eeea3cae85f7f9d588249706ddc8493de0c1e7a6f6bf937a88e4e1e31->enter($__internal_6770450eeea3cae85f7f9d588249706ddc8493de0c1e7a6f6bf937a88e4e1e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Cubes</b>
    </li>
";
        
        $__internal_6770450eeea3cae85f7f9d588249706ddc8493de0c1e7a6f6bf937a88e4e1e31->leave($__internal_6770450eeea3cae85f7f9d588249706ddc8493de0c1e7a6f6bf937a88e4e1e31_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d79e88d2722ef05ee638d44492244d3f2fc8c7e9a17cdac3d077f35d85c700b = $this->env->getExtension("native_profiler");
        $__internal_8d79e88d2722ef05ee638d44492244d3f2fc8c7e9a17cdac3d077f35d85c700b->enter($__internal_8d79e88d2722ef05ee638d44492244d3f2fc8c7e9a17cdac3d077f35d85c700b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("cb_cubes_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" style=\"border-bottom: 15px\" value=\"Add\"/> </a>
    </div>
    <br/>
            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Contract</th>
                <th>Loc_Contract</th>
                <th>ACCT_DATE</th>
                <th>AMT_LCY</th>
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
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contract", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "locContract", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "aCCTDATE", array()), "Y-m-d H:i:s "), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aMTLCY", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:i:s "), "html", null, true);
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
        
        $__internal_8d79e88d2722ef05ee638d44492244d3f2fc8c7e9a17cdac3d077f35d85c700b->leave($__internal_8d79e88d2722ef05ee638d44492244d3f2fc8c7e9a17cdac3d077f35d85c700b_prof);

    }

    // line 53
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_71f0114da650128fc97daddc976525b7edf8fd7c6c110144e248ba98174cf9c5 = $this->env->getExtension("native_profiler");
        $__internal_71f0114da650128fc97daddc976525b7edf8fd7c6c110144e248ba98174cf9c5->enter($__internal_71f0114da650128fc97daddc976525b7edf8fd7c6c110144e248ba98174cf9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_71f0114da650128fc97daddc976525b7edf8fd7c6c110144e248ba98174cf9c5->leave($__internal_71f0114da650128fc97daddc976525b7edf8fd7c6c110144e248ba98174cf9c5_prof);

    }

    // line 61
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_e6f69703352def23e95efae2a3d2a0ef901c7bccb87bbda01375bd8cbe00189c = $this->env->getExtension("native_profiler");
        $__internal_e6f69703352def23e95efae2a3d2a0ef901c7bccb87bbda01375bd8cbe00189c->enter($__internal_e6f69703352def23e95efae2a3d2a0ef901c7bccb87bbda01375bd8cbe00189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 62
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_e6f69703352def23e95efae2a3d2a0ef901c7bccb87bbda01375bd8cbe00189c->leave($__internal_e6f69703352def23e95efae2a3d2a0ef901c7bccb87bbda01375bd8cbe00189c_prof);

    }

    public function getTemplateName()
    {
        return "@Cubes/Cubes/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 63,  187 => 62,  181 => 61,  171 => 57,  167 => 56,  163 => 55,  160 => 54,  154 => 53,  143 => 47,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  111 => 38,  93 => 23,  89 => 21,  83 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Cubes</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer">*/
/*         <a href="{{ path ("cb_cubes_add")}}"> <input class="btn btn-success" type="submit" style="border-bottom: 15px" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Contract</th>*/
/*                 <th>Loc_Contract</th>*/
/*                 <th>ACCT_DATE</th>*/
/*                 <th>AMT_LCY</th>*/
/*                 <th>Update date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{entity.contract }}</td>*/
/*                     <td>{{ entity.locContract }}</td>*/
/*                     <td>{{ entity.aCCTDATE | date("Y-m-d H:i:s ")}}</td>*/
/*                     <td>{{ entity.aMTLCY}}</td>*/
/*                     <td>{{ entity.updateDate | date("Y-m-d H:i:s ")}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
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
