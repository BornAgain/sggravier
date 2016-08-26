<?php

/* @Dashboard/Dashboard/list.html.twig */
class __TwigTemplate_3daf10b69cf65ea31e0e5c972bb17230c3d906fc9dd2a602094d95cb292208f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Dashboard/list.html.twig", 1);
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
        $__internal_81efdf7b142d2a008979d1b68c00990d3895980860eaf5a5912c8b99a7309a3b = $this->env->getExtension("native_profiler");
        $__internal_81efdf7b142d2a008979d1b68c00990d3895980860eaf5a5912c8b99a7309a3b->enter($__internal_81efdf7b142d2a008979d1b68c00990d3895980860eaf5a5912c8b99a7309a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81efdf7b142d2a008979d1b68c00990d3895980860eaf5a5912c8b99a7309a3b->leave($__internal_81efdf7b142d2a008979d1b68c00990d3895980860eaf5a5912c8b99a7309a3b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46c741e70f546704ecea9ae3b801b120edd64ed444850eeb6d72a85909519bb4 = $this->env->getExtension("native_profiler");
        $__internal_46c741e70f546704ecea9ae3b801b120edd64ed444850eeb6d72a85909519bb4->enter($__internal_46c741e70f546704ecea9ae3b801b120edd64ed444850eeb6d72a85909519bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_46c741e70f546704ecea9ae3b801b120edd64ed444850eeb6d72a85909519bb4->leave($__internal_46c741e70f546704ecea9ae3b801b120edd64ed444850eeb6d72a85909519bb4_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6a54ae17b4004c00b3e3ef41157db442e4f6f0f836a48ccb7c839e39ca9b3748 = $this->env->getExtension("native_profiler");
        $__internal_6a54ae17b4004c00b3e3ef41157db442e4f6f0f836a48ccb7c839e39ca9b3748->enter($__internal_6a54ae17b4004c00b3e3ef41157db442e4f6f0f836a48ccb7c839e39ca9b3748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <b>Dashboards</b>
    </li>
";
        
        $__internal_6a54ae17b4004c00b3e3ef41157db442e4f6f0f836a48ccb7c839e39ca9b3748->leave($__internal_6a54ae17b4004c00b3e3ef41157db442e4f6f0f836a48ccb7c839e39ca9b3748_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf0b753c57231505e490cbaf923f7d62b85bde28830955d18c71d9f0970186d = $this->env->getExtension("native_profiler");
        $__internal_7cf0b753c57231505e490cbaf923f7d62b85bde28830955d18c71d9f0970186d->enter($__internal_7cf0b753c57231505e490cbaf923f7d62b85bde28830955d18c71d9f0970186d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
    <div class=\"box-footer\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("db_dashboard_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>
            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Name</th>
                <th>Update Date</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_dashboard_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Name", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
        
    
    
";
        
        $__internal_7cf0b753c57231505e490cbaf923f7d62b85bde28830955d18c71d9f0970186d->leave($__internal_7cf0b753c57231505e490cbaf923f7d62b85bde28830955d18c71d9f0970186d_prof);

    }

    // line 44
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_cb2c76f91acaa8c39e79d33c6eca69e7ddabb5194a18735b70f5457e1763e17f = $this->env->getExtension("native_profiler");
        $__internal_cb2c76f91acaa8c39e79d33c6eca69e7ddabb5194a18735b70f5457e1763e17f->enter($__internal_cb2c76f91acaa8c39e79d33c6eca69e7ddabb5194a18735b70f5457e1763e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 45
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_cb2c76f91acaa8c39e79d33c6eca69e7ddabb5194a18735b70f5457e1763e17f->leave($__internal_cb2c76f91acaa8c39e79d33c6eca69e7ddabb5194a18735b70f5457e1763e17f_prof);

    }

    // line 52
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_f1f70bc9e3247f8c3e94132a903df082a915e2a11645d997a5f58bd0ab44cf06 = $this->env->getExtension("native_profiler");
        $__internal_f1f70bc9e3247f8c3e94132a903df082a915e2a11645d997a5f58bd0ab44cf06->enter($__internal_f1f70bc9e3247f8c3e94132a903df082a915e2a11645d997a5f58bd0ab44cf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 53
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_f1f70bc9e3247f8c3e94132a903df082a915e2a11645d997a5f58bd0ab44cf06->leave($__internal_f1f70bc9e3247f8c3e94132a903df082a915e2a11645d997a5f58bd0ab44cf06_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  168 => 53,  162 => 52,  152 => 48,  148 => 47,  144 => 46,  141 => 45,  135 => 44,  123 => 37,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  86 => 19,  82 => 17,  76 => 16,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Dashboards</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer" style="border-bottom: 15px">*/
/*         <a href="{{ path ("db_dashboard_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Name</th>*/
/*                 <th>Update Date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_dashboard_see",{'id':entity.id}) }}"title="view">{{ entity.Name }}</a></td>*/
/*                     <td>{{ entity.updateDate | date("Y-m-d H:i:s")}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*     */
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
