<?php

/* AdminBundle:Users:list.html.twig */
class __TwigTemplate_1da7a748a6102315ea176c5012a0c6bcec066656a0d82752972cecfc38c478f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:list.html.twig", 1);
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
        $__internal_fe35a6b10012a03941151622c14620504629e5aa1cecd39001364bc43f1ee5fa = $this->env->getExtension("native_profiler");
        $__internal_fe35a6b10012a03941151622c14620504629e5aa1cecd39001364bc43f1ee5fa->enter($__internal_fe35a6b10012a03941151622c14620504629e5aa1cecd39001364bc43f1ee5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe35a6b10012a03941151622c14620504629e5aa1cecd39001364bc43f1ee5fa->leave($__internal_fe35a6b10012a03941151622c14620504629e5aa1cecd39001364bc43f1ee5fa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad6bb91f162ec5672b7c2e579b90a150cb994ca6611ae0193b6a1834ae530fca = $this->env->getExtension("native_profiler");
        $__internal_ad6bb91f162ec5672b7c2e579b90a150cb994ca6611ae0193b6a1834ae530fca->enter($__internal_ad6bb91f162ec5672b7c2e579b90a150cb994ca6611ae0193b6a1834ae530fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ad6bb91f162ec5672b7c2e579b90a150cb994ca6611ae0193b6a1834ae530fca->leave($__internal_ad6bb91f162ec5672b7c2e579b90a150cb994ca6611ae0193b6a1834ae530fca_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0cff69c1d81b3af8b0c2ecc054d302a422f51657c03d5e5a0e54154cd20d8319 = $this->env->getExtension("native_profiler");
        $__internal_0cff69c1d81b3af8b0c2ecc054d302a422f51657c03d5e5a0e54154cd20d8319->enter($__internal_0cff69c1d81b3af8b0c2ecc054d302a422f51657c03d5e5a0e54154cd20d8319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\"><b>Users</b></a>
    </li>
";
        
        $__internal_0cff69c1d81b3af8b0c2ecc054d302a422f51657c03d5e5a0e54154cd20d8319->leave($__internal_0cff69c1d81b3af8b0c2ecc054d302a422f51657c03d5e5a0e54154cd20d8319_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8426d6a66af5e6fba873432cba47df442316cd98aa57a2f3d1a39fbafd72f6f = $this->env->getExtension("native_profiler");
        $__internal_c8426d6a66af5e6fba873432cba47df442316cd98aa57a2f3d1a39fbafd72f6f->enter($__internal_c8426d6a66af5e6fba873432cba47df442316cd98aa57a2f3d1a39fbafd72f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "UserName", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "FirstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "LastName", array()), "html", null, true);
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

    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ab_users_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    
";
        
        $__internal_c8426d6a66af5e6fba873432cba47df442316cd98aa57a2f3d1a39fbafd72f6f->leave($__internal_c8426d6a66af5e6fba873432cba47df442316cd98aa57a2f3d1a39fbafd72f6f_prof);

    }

    // line 45
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_655857f826d5f95ca2790f4b88dd3212b0318f4bedf4139aab0ed2f1127296d3 = $this->env->getExtension("native_profiler");
        $__internal_655857f826d5f95ca2790f4b88dd3212b0318f4bedf4139aab0ed2f1127296d3->enter($__internal_655857f826d5f95ca2790f4b88dd3212b0318f4bedf4139aab0ed2f1127296d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 46
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_655857f826d5f95ca2790f4b88dd3212b0318f4bedf4139aab0ed2f1127296d3->leave($__internal_655857f826d5f95ca2790f4b88dd3212b0318f4bedf4139aab0ed2f1127296d3_prof);

    }

    // line 53
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_caec7a9d12a79d3a878737aae714d8db57156975adc3e9323da39debb49530e2 = $this->env->getExtension("native_profiler");
        $__internal_caec7a9d12a79d3a878737aae714d8db57156975adc3e9323da39debb49530e2->enter($__internal_caec7a9d12a79d3a878737aae714d8db57156975adc3e9323da39debb49530e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 54
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_caec7a9d12a79d3a878737aae714d8db57156975adc3e9323da39debb49530e2->leave($__internal_caec7a9d12a79d3a878737aae714d8db57156975adc3e9323da39debb49530e2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  178 => 54,  172 => 53,  162 => 49,  158 => 48,  154 => 47,  151 => 46,  145 => 45,  135 => 41,  130 => 38,  121 => 35,  117 => 34,  111 => 33,  108 => 32,  104 => 31,  92 => 21,  86 => 20,  76 => 15,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("ab_users_list") }}"><b>Users</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Id</th>*/
/*                 <th>FirstName</th>*/
/*                 <th>LastName</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_users_see",{'id':entity.id}) }}"title="view">{{ entity.UserName }}</a></td>*/
/*                     <td>{{ entity.FirstName }}</td>*/
/*                     <td>{{ entity.LastName}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path ("ab_users_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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
