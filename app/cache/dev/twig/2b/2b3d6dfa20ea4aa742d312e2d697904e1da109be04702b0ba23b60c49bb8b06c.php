<?php

/* AdminBundle:Roles:list.html.twig */
class __TwigTemplate_35337ba13d0d6ce410bdb13b877f55da119703d4b1e3e3da37f3ebe8f6c5f95e extends Twig_Template
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
        $__internal_fd0ee6b5a1f0ecddaf520f9666226cc4ab27d60cc6a71807ff2f9f7373ceb932 = $this->env->getExtension("native_profiler");
        $__internal_fd0ee6b5a1f0ecddaf520f9666226cc4ab27d60cc6a71807ff2f9f7373ceb932->enter($__internal_fd0ee6b5a1f0ecddaf520f9666226cc4ab27d60cc6a71807ff2f9f7373ceb932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0ee6b5a1f0ecddaf520f9666226cc4ab27d60cc6a71807ff2f9f7373ceb932->leave($__internal_fd0ee6b5a1f0ecddaf520f9666226cc4ab27d60cc6a71807ff2f9f7373ceb932_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13861197a800c043c86a8a5b7d829f540e3f5c4ff8fb12b09948a4c8c769db20 = $this->env->getExtension("native_profiler");
        $__internal_13861197a800c043c86a8a5b7d829f540e3f5c4ff8fb12b09948a4c8c769db20->enter($__internal_13861197a800c043c86a8a5b7d829f540e3f5c4ff8fb12b09948a4c8c769db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_13861197a800c043c86a8a5b7d829f540e3f5c4ff8fb12b09948a4c8c769db20->leave($__internal_13861197a800c043c86a8a5b7d829f540e3f5c4ff8fb12b09948a4c8c769db20_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_24d17fda5c15ba95bd21088ad44ea9ed4ace52b8e3153769f9c472dfec59f738 = $this->env->getExtension("native_profiler");
        $__internal_24d17fda5c15ba95bd21088ad44ea9ed4ace52b8e3153769f9c472dfec59f738->enter($__internal_24d17fda5c15ba95bd21088ad44ea9ed4ace52b8e3153769f9c472dfec59f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\"><b>Roles</b></a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <span>List</span>
    </li>
";
        
        $__internal_24d17fda5c15ba95bd21088ad44ea9ed4ace52b8e3153769f9c472dfec59f738->leave($__internal_24d17fda5c15ba95bd21088ad44ea9ed4ace52b8e3153769f9c472dfec59f738_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b3b5d41618c7eed320a5e6e8b3cc0d09831699f6bf0009008944431951b6f6 = $this->env->getExtension("native_profiler");
        $__internal_60b3b5d41618c7eed320a5e6e8b3cc0d09831699f6bf0009008944431951b6f6->enter($__internal_60b3b5d41618c7eed320a5e6e8b3cc0d09831699f6bf0009008944431951b6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "   
    <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Description</th>  
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
                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_roles_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Description", array()), "html", null, true);
            echo "</a></td>                   
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ab_roles_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
";
        
        $__internal_60b3b5d41618c7eed320a5e6e8b3cc0d09831699f6bf0009008944431951b6f6->leave($__internal_60b3b5d41618c7eed320a5e6e8b3cc0d09831699f6bf0009008944431951b6f6_prof);

    }

    // line 43
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_105593486b19f0a734533ff8ae49c0f0fcbaa8a6215baafd9c0b71a69f8ee15e = $this->env->getExtension("native_profiler");
        $__internal_105593486b19f0a734533ff8ae49c0f0fcbaa8a6215baafd9c0b71a69f8ee15e->enter($__internal_105593486b19f0a734533ff8ae49c0f0fcbaa8a6215baafd9c0b71a69f8ee15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 44
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_105593486b19f0a734533ff8ae49c0f0fcbaa8a6215baafd9c0b71a69f8ee15e->leave($__internal_105593486b19f0a734533ff8ae49c0f0fcbaa8a6215baafd9c0b71a69f8ee15e_prof);

    }

    // line 51
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_894776667ae3c828d127cfd5761611a8ab4d11a7acb43d76aa67060e48c65719 = $this->env->getExtension("native_profiler");
        $__internal_894776667ae3c828d127cfd5761611a8ab4d11a7acb43d76aa67060e48c65719->enter($__internal_894776667ae3c828d127cfd5761611a8ab4d11a7acb43d76aa67060e48c65719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 52
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_894776667ae3c828d127cfd5761611a8ab4d11a7acb43d76aa67060e48c65719->leave($__internal_894776667ae3c828d127cfd5761611a8ab4d11a7acb43d76aa67060e48c65719_prof);

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
        return array (  174 => 53,  171 => 52,  165 => 51,  155 => 47,  151 => 46,  147 => 45,  144 => 44,  138 => 43,  129 => 40,  124 => 37,  113 => 34,  110 => 33,  106 => 32,  96 => 24,  90 => 23,  76 => 15,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("ab_roles_list") }}"><b>Roles</b></a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <span>List</span>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*    */
/*     <table id="example1" class="table table-bordered table-striped">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Description</th>  */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_roles_see",{'id':entity.id}) }}" title="view">{{ entity.Description }}</a></td>                   */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path ("ab_roles_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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