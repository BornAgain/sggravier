<?php

/* AdminBundle:Entities:list.html.twig */
class __TwigTemplate_757b325384f2ca0f58073a6549c7dc73fdd6fd8533de6abd8a99f03e6ecc8598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Entities:list.html.twig", 1);
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
        $__internal_b8ad7c5c926b99bb6217c97e6a58d470bfd865ecf15bfe4c29abb7c0dd4a03fe = $this->env->getExtension("native_profiler");
        $__internal_b8ad7c5c926b99bb6217c97e6a58d470bfd865ecf15bfe4c29abb7c0dd4a03fe->enter($__internal_b8ad7c5c926b99bb6217c97e6a58d470bfd865ecf15bfe4c29abb7c0dd4a03fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ad7c5c926b99bb6217c97e6a58d470bfd865ecf15bfe4c29abb7c0dd4a03fe->leave($__internal_b8ad7c5c926b99bb6217c97e6a58d470bfd865ecf15bfe4c29abb7c0dd4a03fe_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d599c0ff699cb101876894db813dbc3cd9b917ef721d150ff38795bf6fcc5699 = $this->env->getExtension("native_profiler");
        $__internal_d599c0ff699cb101876894db813dbc3cd9b917ef721d150ff38795bf6fcc5699->enter($__internal_d599c0ff699cb101876894db813dbc3cd9b917ef721d150ff38795bf6fcc5699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d599c0ff699cb101876894db813dbc3cd9b917ef721d150ff38795bf6fcc5699->leave($__internal_d599c0ff699cb101876894db813dbc3cd9b917ef721d150ff38795bf6fcc5699_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_a42549d9919bdffc79ed7c01dcf31361945b03c0663b254efeb13cba0328f0d3 = $this->env->getExtension("native_profiler");
        $__internal_a42549d9919bdffc79ed7c01dcf31361945b03c0663b254efeb13cba0328f0d3->enter($__internal_a42549d9919bdffc79ed7c01dcf31361945b03c0663b254efeb13cba0328f0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Entities</b>
    </li>
    
";
        
        $__internal_a42549d9919bdffc79ed7c01dcf31361945b03c0663b254efeb13cba0328f0d3->leave($__internal_a42549d9919bdffc79ed7c01dcf31361945b03c0663b254efeb13cba0328f0d3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fcd401140c73afe821e51120c1d8aafb44147422fd62065c2740d1075e2d0ab = $this->env->getExtension("native_profiler");
        $__internal_3fcd401140c73afe821e51120c1d8aafb44147422fd62065c2740d1075e2d0ab->enter($__internal_3fcd401140c73afe821e51120c1d8aafb44147422fd62065c2740d1075e2d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ab_entities_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>

    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Description</th>
                <th>Short label</th>   
                <th>Update date</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "                <tr>
                    <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_entities_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Description", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ShortLabel", array()), "html", null, true);
            echo "</td>    
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td> 
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
    
";
        
        $__internal_3fcd401140c73afe821e51120c1d8aafb44147422fd62065c2740d1075e2d0ab->leave($__internal_3fcd401140c73afe821e51120c1d8aafb44147422fd62065c2740d1075e2d0ab_prof);

    }

    // line 48
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_67ebd94404becb1998318286c2dbe78b808235f94f1c997dd638dd54ceaae2f1 = $this->env->getExtension("native_profiler");
        $__internal_67ebd94404becb1998318286c2dbe78b808235f94f1c997dd638dd54ceaae2f1->enter($__internal_67ebd94404becb1998318286c2dbe78b808235f94f1c997dd638dd54ceaae2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 49
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_67ebd94404becb1998318286c2dbe78b808235f94f1c997dd638dd54ceaae2f1->leave($__internal_67ebd94404becb1998318286c2dbe78b808235f94f1c997dd638dd54ceaae2f1_prof);

    }

    // line 56
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_d54f469720a990e3364a7f87975fe08380364eb212cdef4e7459604c4bc865d2 = $this->env->getExtension("native_profiler");
        $__internal_d54f469720a990e3364a7f87975fe08380364eb212cdef4e7459604c4bc865d2->enter($__internal_d54f469720a990e3364a7f87975fe08380364eb212cdef4e7459604c4bc865d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 57
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_d54f469720a990e3364a7f87975fe08380364eb212cdef4e7459604c4bc865d2->leave($__internal_d54f469720a990e3364a7f87975fe08380364eb212cdef4e7459604c4bc865d2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Entities:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  179 => 57,  173 => 56,  163 => 52,  159 => 51,  155 => 50,  152 => 49,  146 => 48,  136 => 43,  127 => 40,  123 => 39,  117 => 38,  114 => 37,  110 => 36,  94 => 23,  90 => 21,  84 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Entities</b>*/
/*     </li>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer" style="border-bottom: 15px">*/
/*         <a href="{{ path ("ab_entities_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/* */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Description</th>*/
/*                 <th>Short label</th>   */
/*                 <th>Update date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_entities_see",{'id':entity.id}) }}" title="view">{{ entity.Description }}</a></td>*/
/*                     <td>{{ entity.ShortLabel }}</td>    */
/*                     <td>{{ entity.updateDate | date('Y-m-d H:i:s') }}</td> */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
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
/* {% endblock %} */
/* */
/*       */
/* */
/* */
