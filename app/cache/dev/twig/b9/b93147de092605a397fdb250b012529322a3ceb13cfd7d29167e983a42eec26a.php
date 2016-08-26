<?php

/* AdminBundle:Roles:list.html.twig */
class __TwigTemplate_c774640f1c098a90bcdbaf38c5ee18efbcb633d7c2ceeff6d618bbe41724060b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Roles:list.html.twig", 1);
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
        $__internal_c3c636f677ca8085fd7d6e50b01f89f5dbf456969f2f92f8c7bdd24347b7c07f = $this->env->getExtension("native_profiler");
        $__internal_c3c636f677ca8085fd7d6e50b01f89f5dbf456969f2f92f8c7bdd24347b7c07f->enter($__internal_c3c636f677ca8085fd7d6e50b01f89f5dbf456969f2f92f8c7bdd24347b7c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c636f677ca8085fd7d6e50b01f89f5dbf456969f2f92f8c7bdd24347b7c07f->leave($__internal_c3c636f677ca8085fd7d6e50b01f89f5dbf456969f2f92f8c7bdd24347b7c07f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8890cfab78d427b4bd93235d2d1b322b5eb36a97fe8cb65298a3cc77ad3becd = $this->env->getExtension("native_profiler");
        $__internal_a8890cfab78d427b4bd93235d2d1b322b5eb36a97fe8cb65298a3cc77ad3becd->enter($__internal_a8890cfab78d427b4bd93235d2d1b322b5eb36a97fe8cb65298a3cc77ad3becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a8890cfab78d427b4bd93235d2d1b322b5eb36a97fe8cb65298a3cc77ad3becd->leave($__internal_a8890cfab78d427b4bd93235d2d1b322b5eb36a97fe8cb65298a3cc77ad3becd_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_7c1f58584b557392ac9d870f36ab629a520b53a855ad53710b64b4a28f69af6c = $this->env->getExtension("native_profiler");
        $__internal_7c1f58584b557392ac9d870f36ab629a520b53a855ad53710b64b4a28f69af6c->enter($__internal_7c1f58584b557392ac9d870f36ab629a520b53a855ad53710b64b4a28f69af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_7c1f58584b557392ac9d870f36ab629a520b53a855ad53710b64b4a28f69af6c->leave($__internal_7c1f58584b557392ac9d870f36ab629a520b53a855ad53710b64b4a28f69af6c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ff9eb220f7e18aceb72984973506c30fe40f40e4dec920002e4836a148d82e = $this->env->getExtension("native_profiler");
        $__internal_69ff9eb220f7e18aceb72984973506c30fe40f40e4dec920002e4836a148d82e->enter($__internal_69ff9eb220f7e18aceb72984973506c30fe40f40e4dec920002e4836a148d82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69ff9eb220f7e18aceb72984973506c30fe40f40e4dec920002e4836a148d82e->leave($__internal_69ff9eb220f7e18aceb72984973506c30fe40f40e4dec920002e4836a148d82e_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_832092c2b1cf21f86e09d2c0fb8be55a62e234696684563125204223d9303bd3 = $this->env->getExtension("native_profiler");
        $__internal_832092c2b1cf21f86e09d2c0fb8be55a62e234696684563125204223d9303bd3->enter($__internal_832092c2b1cf21f86e09d2c0fb8be55a62e234696684563125204223d9303bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_832092c2b1cf21f86e09d2c0fb8be55a62e234696684563125204223d9303bd3->leave($__internal_832092c2b1cf21f86e09d2c0fb8be55a62e234696684563125204223d9303bd3_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_cd811020572266c7e2565e0b79b95051b909580be907a6b12c873e703c1c103e = $this->env->getExtension("native_profiler");
        $__internal_cd811020572266c7e2565e0b79b95051b909580be907a6b12c873e703c1c103e->enter($__internal_cd811020572266c7e2565e0b79b95051b909580be907a6b12c873e703c1c103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_cd811020572266c7e2565e0b79b95051b909580be907a6b12c873e703c1c103e->leave($__internal_cd811020572266c7e2565e0b79b95051b909580be907a6b12c873e703c1c103e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Roles:list.html.twig";
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
