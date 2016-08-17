<?php

/* DashboardBundle:Dashboard:list.html.twig */
class __TwigTemplate_bc2e77fcb610bc45e7df9c94085b208ae4038d55e2f0841e1145f301041b40d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:list.html.twig", 1);
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
        $__internal_1a3cd3879067bdcb77a74e4ef95318326a115987fbd396363190a5c24d16a447 = $this->env->getExtension("native_profiler");
        $__internal_1a3cd3879067bdcb77a74e4ef95318326a115987fbd396363190a5c24d16a447->enter($__internal_1a3cd3879067bdcb77a74e4ef95318326a115987fbd396363190a5c24d16a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3cd3879067bdcb77a74e4ef95318326a115987fbd396363190a5c24d16a447->leave($__internal_1a3cd3879067bdcb77a74e4ef95318326a115987fbd396363190a5c24d16a447_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba5db5d7626ac2cc36a30f859616b65553d36aedfcb8816acb86952a1203fc8f = $this->env->getExtension("native_profiler");
        $__internal_ba5db5d7626ac2cc36a30f859616b65553d36aedfcb8816acb86952a1203fc8f->enter($__internal_ba5db5d7626ac2cc36a30f859616b65553d36aedfcb8816acb86952a1203fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ba5db5d7626ac2cc36a30f859616b65553d36aedfcb8816acb86952a1203fc8f->leave($__internal_ba5db5d7626ac2cc36a30f859616b65553d36aedfcb8816acb86952a1203fc8f_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_53e4abebd5aa367040fadcf5d95312670ea4c682c92a9b7d01061e0a6b8e253e = $this->env->getExtension("native_profiler");
        $__internal_53e4abebd5aa367040fadcf5d95312670ea4c682c92a9b7d01061e0a6b8e253e->enter($__internal_53e4abebd5aa367040fadcf5d95312670ea4c682c92a9b7d01061e0a6b8e253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\"><b>Dashboards</b></a>
    </li>
";
        
        $__internal_53e4abebd5aa367040fadcf5d95312670ea4c682c92a9b7d01061e0a6b8e253e->leave($__internal_53e4abebd5aa367040fadcf5d95312670ea4c682c92a9b7d01061e0a6b8e253e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2ab0eab596d5ae41d08ee887ac7ecf702d1b8ba37cb5d68558390a7fb72a098 = $this->env->getExtension("native_profiler");
        $__internal_b2ab0eab596d5ae41d08ee887ac7ecf702d1b8ba37cb5d68558390a7fb72a098->enter($__internal_b2ab0eab596d5ae41d08ee887ac7ecf702d1b8ba37cb5d68558390a7fb72a098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                <tr>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Name", array()), "html", null, true);
            echo "</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
        
    <div class=\"box-footer pull-right\">
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("db_dashboard_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    
";
        
        $__internal_b2ab0eab596d5ae41d08ee887ac7ecf702d1b8ba37cb5d68558390a7fb72a098->leave($__internal_b2ab0eab596d5ae41d08ee887ac7ecf702d1b8ba37cb5d68558390a7fb72a098_prof);

    }

    // line 39
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_44fe7e7da59af10059dd6d248634f3c4d26c217578f13ce893f50c76bba21314 = $this->env->getExtension("native_profiler");
        $__internal_44fe7e7da59af10059dd6d248634f3c4d26c217578f13ce893f50c76bba21314->enter($__internal_44fe7e7da59af10059dd6d248634f3c4d26c217578f13ce893f50c76bba21314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 40
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_44fe7e7da59af10059dd6d248634f3c4d26c217578f13ce893f50c76bba21314->leave($__internal_44fe7e7da59af10059dd6d248634f3c4d26c217578f13ce893f50c76bba21314_prof);

    }

    // line 47
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_543d1a5717f45adfaa874eb457e7a17982fa41fc0302df92ae44de6d541a5354 = $this->env->getExtension("native_profiler");
        $__internal_543d1a5717f45adfaa874eb457e7a17982fa41fc0302df92ae44de6d541a5354->enter($__internal_543d1a5717f45adfaa874eb457e7a17982fa41fc0302df92ae44de6d541a5354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 48
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_543d1a5717f45adfaa874eb457e7a17982fa41fc0302df92ae44de6d541a5354->leave($__internal_543d1a5717f45adfaa874eb457e7a17982fa41fc0302df92ae44de6d541a5354_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  163 => 48,  157 => 47,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  130 => 39,  119 => 34,  113 => 30,  102 => 27,  99 => 26,  95 => 25,  85 => 17,  79 => 16,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("db_dashboard_list") }}"><b>Dashboards</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Name</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_dashboard_see",{'id':entity.id}) }}"title="view">{{ entity.Name }}</a></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*     <div class="box-footer pull-right">*/
/*         <a href="{{ path ("db_dashboard_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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
