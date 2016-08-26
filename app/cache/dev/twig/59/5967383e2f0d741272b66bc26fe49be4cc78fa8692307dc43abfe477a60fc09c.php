<?php

/* @Admin/Users/list.html.twig */
class __TwigTemplate_1ed68173ff8578f73640af3ebd44e9b9da43114bee9fd283b750e0828d14901c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Users/list.html.twig", 1);
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
        $__internal_f5eaec07e8e5acc462835082e59eb5e6df61e1e70b80925f88250eed2038da09 = $this->env->getExtension("native_profiler");
        $__internal_f5eaec07e8e5acc462835082e59eb5e6df61e1e70b80925f88250eed2038da09->enter($__internal_f5eaec07e8e5acc462835082e59eb5e6df61e1e70b80925f88250eed2038da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Users/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5eaec07e8e5acc462835082e59eb5e6df61e1e70b80925f88250eed2038da09->leave($__internal_f5eaec07e8e5acc462835082e59eb5e6df61e1e70b80925f88250eed2038da09_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf32ddbf43b9920c5110ff17407257783507fa3062621280a8e2cbf96144e33d = $this->env->getExtension("native_profiler");
        $__internal_bf32ddbf43b9920c5110ff17407257783507fa3062621280a8e2cbf96144e33d->enter($__internal_bf32ddbf43b9920c5110ff17407257783507fa3062621280a8e2cbf96144e33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bf32ddbf43b9920c5110ff17407257783507fa3062621280a8e2cbf96144e33d->leave($__internal_bf32ddbf43b9920c5110ff17407257783507fa3062621280a8e2cbf96144e33d_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_32c58cfe3238e279a593d8f5fd0c31aad7ef0a4330f657b14e13f967a7849ef4 = $this->env->getExtension("native_profiler");
        $__internal_32c58cfe3238e279a593d8f5fd0c31aad7ef0a4330f657b14e13f967a7849ef4->enter($__internal_32c58cfe3238e279a593d8f5fd0c31aad7ef0a4330f657b14e13f967a7849ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Users</b>
    </li>
";
        
        $__internal_32c58cfe3238e279a593d8f5fd0c31aad7ef0a4330f657b14e13f967a7849ef4->leave($__internal_32c58cfe3238e279a593d8f5fd0c31aad7ef0a4330f657b14e13f967a7849ef4_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d03deb99bf7ba06a93754890a743edfe8431bf9832301d574eacbdd1c5c97b5f = $this->env->getExtension("native_profiler");
        $__internal_d03deb99bf7ba06a93754890a743edfe8431bf9832301d574eacbdd1c5c97b5f->enter($__internal_d03deb99bf7ba06a93754890a743edfe8431bf9832301d574eacbdd1c5c97b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ab_users_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>
            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Update date</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "                <tr>
                    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "UserName", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "FirstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "LastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    
";
        
        $__internal_d03deb99bf7ba06a93754890a743edfe8431bf9832301d574eacbdd1c5c97b5f->leave($__internal_d03deb99bf7ba06a93754890a743edfe8431bf9832301d574eacbdd1c5c97b5f_prof);

    }

    // line 51
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_0671a51075c28ad639cd565acc232e265ce3a37cc34dcb6a90068f3bf8f894a1 = $this->env->getExtension("native_profiler");
        $__internal_0671a51075c28ad639cd565acc232e265ce3a37cc34dcb6a90068f3bf8f894a1->enter($__internal_0671a51075c28ad639cd565acc232e265ce3a37cc34dcb6a90068f3bf8f894a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 52
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_0671a51075c28ad639cd565acc232e265ce3a37cc34dcb6a90068f3bf8f894a1->leave($__internal_0671a51075c28ad639cd565acc232e265ce3a37cc34dcb6a90068f3bf8f894a1_prof);

    }

    // line 59
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_d851171c9078438c6eff9d91e73006392afffe578022f214c9d59a959f108922 = $this->env->getExtension("native_profiler");
        $__internal_d851171c9078438c6eff9d91e73006392afffe578022f214c9d59a959f108922->enter($__internal_d851171c9078438c6eff9d91e73006392afffe578022f214c9d59a959f108922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 60
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_d851171c9078438c6eff9d91e73006392afffe578022f214c9d59a959f108922->leave($__internal_d851171c9078438c6eff9d91e73006392afffe578022f214c9d59a959f108922_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Users/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  184 => 60,  178 => 59,  168 => 55,  164 => 54,  160 => 53,  157 => 52,  151 => 51,  140 => 45,  131 => 42,  127 => 41,  123 => 40,  117 => 39,  114 => 38,  110 => 37,  93 => 23,  89 => 21,  83 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Users</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer" style="border-bottom: 15px">*/
/*         <a href="{{ path ("ab_users_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Id</th>*/
/*                 <th>FirstName</th>*/
/*                 <th>LastName</th>*/
/*                 <th>Update date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_users_see",{'id':entity.id}) }}"title="view">{{ entity.UserName }}</a></td>*/
/*                     <td>{{ entity.FirstName }}</td>*/
/*                     <td>{{ entity.LastName}}</td>*/
/*                     <td>{{ entity.updateDate | date('Y-m-d H:i:s')}}</td>*/
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
