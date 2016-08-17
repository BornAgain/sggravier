<?php

/* AdminBundle:Users:list.html.twig */
class __TwigTemplate_054fdea6aabcf4ead92a226db5bc62821b66d10d7b2b3e3489c90efb8c7e96da extends Twig_Template
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
        $__internal_9e29b15b4e4a88eca778aa12804f9c18fd891870f7edee879e6dbf4abb92c421 = $this->env->getExtension("native_profiler");
        $__internal_9e29b15b4e4a88eca778aa12804f9c18fd891870f7edee879e6dbf4abb92c421->enter($__internal_9e29b15b4e4a88eca778aa12804f9c18fd891870f7edee879e6dbf4abb92c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e29b15b4e4a88eca778aa12804f9c18fd891870f7edee879e6dbf4abb92c421->leave($__internal_9e29b15b4e4a88eca778aa12804f9c18fd891870f7edee879e6dbf4abb92c421_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e62e6f43b6d3d919bb902dc9c5d51d04fa2162443578ca272601a803bf51946 = $this->env->getExtension("native_profiler");
        $__internal_3e62e6f43b6d3d919bb902dc9c5d51d04fa2162443578ca272601a803bf51946->enter($__internal_3e62e6f43b6d3d919bb902dc9c5d51d04fa2162443578ca272601a803bf51946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3e62e6f43b6d3d919bb902dc9c5d51d04fa2162443578ca272601a803bf51946->leave($__internal_3e62e6f43b6d3d919bb902dc9c5d51d04fa2162443578ca272601a803bf51946_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_3c0405e42e88b91b2d8821071ffee19f97e5dae44888bc16a54dd9cbcdef5a51 = $this->env->getExtension("native_profiler");
        $__internal_3c0405e42e88b91b2d8821071ffee19f97e5dae44888bc16a54dd9cbcdef5a51->enter($__internal_3c0405e42e88b91b2d8821071ffee19f97e5dae44888bc16a54dd9cbcdef5a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\">Users</a>
    </li>
";
        
        $__internal_3c0405e42e88b91b2d8821071ffee19f97e5dae44888bc16a54dd9cbcdef5a51->leave($__internal_3c0405e42e88b91b2d8821071ffee19f97e5dae44888bc16a54dd9cbcdef5a51_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_93f231ab2228443aa8a24f8461c6d7b0d2cd9729d80e706839038bab948abcb3 = $this->env->getExtension("native_profiler");
        $__internal_93f231ab2228443aa8a24f8461c6d7b0d2cd9729d80e706839038bab948abcb3->enter($__internal_93f231ab2228443aa8a24f8461c6d7b0d2cd9729d80e706839038bab948abcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93f231ab2228443aa8a24f8461c6d7b0d2cd9729d80e706839038bab948abcb3->leave($__internal_93f231ab2228443aa8a24f8461c6d7b0d2cd9729d80e706839038bab948abcb3_prof);

    }

    // line 45
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_22a00c52ec3d096060e61bbe9551700c8cb221c9c9cd5e8cbe1c728244b9fe40 = $this->env->getExtension("native_profiler");
        $__internal_22a00c52ec3d096060e61bbe9551700c8cb221c9c9cd5e8cbe1c728244b9fe40->enter($__internal_22a00c52ec3d096060e61bbe9551700c8cb221c9c9cd5e8cbe1c728244b9fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_22a00c52ec3d096060e61bbe9551700c8cb221c9c9cd5e8cbe1c728244b9fe40->leave($__internal_22a00c52ec3d096060e61bbe9551700c8cb221c9c9cd5e8cbe1c728244b9fe40_prof);

    }

    // line 53
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_3aff34cd6a500f121fb76cacf8a04ea9f35d8652a5bffd0358f05e53b921794a = $this->env->getExtension("native_profiler");
        $__internal_3aff34cd6a500f121fb76cacf8a04ea9f35d8652a5bffd0358f05e53b921794a->enter($__internal_3aff34cd6a500f121fb76cacf8a04ea9f35d8652a5bffd0358f05e53b921794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 54
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_3aff34cd6a500f121fb76cacf8a04ea9f35d8652a5bffd0358f05e53b921794a->leave($__internal_3aff34cd6a500f121fb76cacf8a04ea9f35d8652a5bffd0358f05e53b921794a_prof);

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
        return array (  178 => 55,  175 => 54,  169 => 53,  159 => 49,  155 => 48,  151 => 47,  148 => 46,  142 => 45,  132 => 41,  127 => 38,  118 => 35,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  89 => 21,  83 => 20,  73 => 15,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_users_list") }}">Users</a>*/
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
