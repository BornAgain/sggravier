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
        $__internal_e1ae44d07d7fa3f2380b24fff348b9fb29043c44e89216082b08585d3eefed72 = $this->env->getExtension("native_profiler");
        $__internal_e1ae44d07d7fa3f2380b24fff348b9fb29043c44e89216082b08585d3eefed72->enter($__internal_e1ae44d07d7fa3f2380b24fff348b9fb29043c44e89216082b08585d3eefed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CubesBundle:Cubes:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ae44d07d7fa3f2380b24fff348b9fb29043c44e89216082b08585d3eefed72->leave($__internal_e1ae44d07d7fa3f2380b24fff348b9fb29043c44e89216082b08585d3eefed72_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5212e19bdcc794f3a2b44ffaa11814c8d7befece1cdc991b3fa47638c25b2cc5 = $this->env->getExtension("native_profiler");
        $__internal_5212e19bdcc794f3a2b44ffaa11814c8d7befece1cdc991b3fa47638c25b2cc5->enter($__internal_5212e19bdcc794f3a2b44ffaa11814c8d7befece1cdc991b3fa47638c25b2cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5212e19bdcc794f3a2b44ffaa11814c8d7befece1cdc991b3fa47638c25b2cc5->leave($__internal_5212e19bdcc794f3a2b44ffaa11814c8d7befece1cdc991b3fa47638c25b2cc5_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_aee15d0ded9a5f5fe8d09b04eee279ccfb7e2b1c3a80662be5a93112e846d2ce = $this->env->getExtension("native_profiler");
        $__internal_aee15d0ded9a5f5fe8d09b04eee279ccfb7e2b1c3a80662be5a93112e846d2ce->enter($__internal_aee15d0ded9a5f5fe8d09b04eee279ccfb7e2b1c3a80662be5a93112e846d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_aee15d0ded9a5f5fe8d09b04eee279ccfb7e2b1c3a80662be5a93112e846d2ce->leave($__internal_aee15d0ded9a5f5fe8d09b04eee279ccfb7e2b1c3a80662be5a93112e846d2ce_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_1477a58169be86e8dcd6ab3964fe50f593fdf4c1a49047348695af24e0c0f20e = $this->env->getExtension("native_profiler");
        $__internal_1477a58169be86e8dcd6ab3964fe50f593fdf4c1a49047348695af24e0c0f20e->enter($__internal_1477a58169be86e8dcd6ab3964fe50f593fdf4c1a49047348695af24e0c0f20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1477a58169be86e8dcd6ab3964fe50f593fdf4c1a49047348695af24e0c0f20e->leave($__internal_1477a58169be86e8dcd6ab3964fe50f593fdf4c1a49047348695af24e0c0f20e_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_498f96c8be81697531f9cd4048d5b6141fa5a528c6a96c502c40e02d9e79ced3 = $this->env->getExtension("native_profiler");
        $__internal_498f96c8be81697531f9cd4048d5b6141fa5a528c6a96c502c40e02d9e79ced3->enter($__internal_498f96c8be81697531f9cd4048d5b6141fa5a528c6a96c502c40e02d9e79ced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_498f96c8be81697531f9cd4048d5b6141fa5a528c6a96c502c40e02d9e79ced3->leave($__internal_498f96c8be81697531f9cd4048d5b6141fa5a528c6a96c502c40e02d9e79ced3_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_f48ebd34681580749a9f5edfd24a616cb7e0256490165721383805e773472a58 = $this->env->getExtension("native_profiler");
        $__internal_f48ebd34681580749a9f5edfd24a616cb7e0256490165721383805e773472a58->enter($__internal_f48ebd34681580749a9f5edfd24a616cb7e0256490165721383805e773472a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_f48ebd34681580749a9f5edfd24a616cb7e0256490165721383805e773472a58->leave($__internal_f48ebd34681580749a9f5edfd24a616cb7e0256490165721383805e773472a58_prof);

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
