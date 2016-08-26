<?php

/* @Admin/Roles/list.html.twig */
class __TwigTemplate_05a158f06c7c17186a7c64f14818e7540940edfe40129e61a38c1af6a595832d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Roles/list.html.twig", 1);
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
        $__internal_c4d2b178c428f424eaa57298af512002eea13b0a715d511c163b8af8b7de7be8 = $this->env->getExtension("native_profiler");
        $__internal_c4d2b178c428f424eaa57298af512002eea13b0a715d511c163b8af8b7de7be8->enter($__internal_c4d2b178c428f424eaa57298af512002eea13b0a715d511c163b8af8b7de7be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Roles/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d2b178c428f424eaa57298af512002eea13b0a715d511c163b8af8b7de7be8->leave($__internal_c4d2b178c428f424eaa57298af512002eea13b0a715d511c163b8af8b7de7be8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9e48b78f05d376e276e8f14f3b31c4f7ab9e4e9488cce6d12395a3b729cb692 = $this->env->getExtension("native_profiler");
        $__internal_e9e48b78f05d376e276e8f14f3b31c4f7ab9e4e9488cce6d12395a3b729cb692->enter($__internal_e9e48b78f05d376e276e8f14f3b31c4f7ab9e4e9488cce6d12395a3b729cb692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e9e48b78f05d376e276e8f14f3b31c4f7ab9e4e9488cce6d12395a3b729cb692->leave($__internal_e9e48b78f05d376e276e8f14f3b31c4f7ab9e4e9488cce6d12395a3b729cb692_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_745060c4066543015c1d2fc1d639e36576fe4206b375bc1953bd4478d30e2afb = $this->env->getExtension("native_profiler");
        $__internal_745060c4066543015c1d2fc1d639e36576fe4206b375bc1953bd4478d30e2afb->enter($__internal_745060c4066543015c1d2fc1d639e36576fe4206b375bc1953bd4478d30e2afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Roles</b>
    </li>
    
";
        
        $__internal_745060c4066543015c1d2fc1d639e36576fe4206b375bc1953bd4478d30e2afb->leave($__internal_745060c4066543015c1d2fc1d639e36576fe4206b375bc1953bd4478d30e2afb_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_264aa5dbd7d09c91b22eef8fbdb9235eb326dd164e38ea5e15a7d66b8a378bd8 = $this->env->getExtension("native_profiler");
        $__internal_264aa5dbd7d09c91b22eef8fbdb9235eb326dd164e38ea5e15a7d66b8a378bd8->enter($__internal_264aa5dbd7d09c91b22eef8fbdb9235eb326dd164e38ea5e15a7d66b8a378bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ab_roles_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>
   
    <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Description</th>  
                <th>Update date</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                <tr>
                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Description", array()), "html", null, true);
            echo "</a></td>                   
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, (($context["entity"]) ? (twig_date_format_filter($this->env, (isset($context["updateDate"]) ? $context["updateDate"] : $this->getContext($context, "updateDate")), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td> 
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
        
    
";
        
        $__internal_264aa5dbd7d09c91b22eef8fbdb9235eb326dd164e38ea5e15a7d66b8a378bd8->leave($__internal_264aa5dbd7d09c91b22eef8fbdb9235eb326dd164e38ea5e15a7d66b8a378bd8_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_2a2e882d86de82816f49edf8f705b4b6bc9b2b509fe5c2b1c558f796d2432b75 = $this->env->getExtension("native_profiler");
        $__internal_2a2e882d86de82816f49edf8f705b4b6bc9b2b509fe5c2b1c558f796d2432b75->enter($__internal_2a2e882d86de82816f49edf8f705b4b6bc9b2b509fe5c2b1c558f796d2432b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_2a2e882d86de82816f49edf8f705b4b6bc9b2b509fe5c2b1c558f796d2432b75->leave($__internal_2a2e882d86de82816f49edf8f705b4b6bc9b2b509fe5c2b1c558f796d2432b75_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_3043bc7febeda722692da607126a11be3ce2abdaef77fcf98043d0bb75597a42 = $this->env->getExtension("native_profiler");
        $__internal_3043bc7febeda722692da607126a11be3ce2abdaef77fcf98043d0bb75597a42->enter($__internal_3043bc7febeda722692da607126a11be3ce2abdaef77fcf98043d0bb75597a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_3043bc7febeda722692da607126a11be3ce2abdaef77fcf98043d0bb75597a42->leave($__internal_3043bc7febeda722692da607126a11be3ce2abdaef77fcf98043d0bb75597a42_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Roles/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  175 => 56,  169 => 55,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  142 => 47,  131 => 41,  122 => 38,  116 => 37,  113 => 36,  109 => 35,  94 => 23,  90 => 21,  84 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Roles</b>*/
/*     </li>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer" style="border-bottom: 15px">*/
/*         <a href="{{ path ("ab_roles_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*    */
/*     <table id="example1" class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Description</th>  */
/*                 <th>Update date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_roles_see",{'id':entity.id}) }}" title="view">{{ entity.Description }}</a></td>                   */
/*                     <td>{{ entity?updateDate | date("Y-m-d H:i:s") }}</td> */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
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
