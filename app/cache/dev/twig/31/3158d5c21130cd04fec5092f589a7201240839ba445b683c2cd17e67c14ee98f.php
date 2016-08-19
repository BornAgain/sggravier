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
        $__internal_128e4da50cf744b5e331b0dc9720e4aa49503a40cfd4798d36d26e733031c5f6 = $this->env->getExtension("native_profiler");
        $__internal_128e4da50cf744b5e331b0dc9720e4aa49503a40cfd4798d36d26e733031c5f6->enter($__internal_128e4da50cf744b5e331b0dc9720e4aa49503a40cfd4798d36d26e733031c5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128e4da50cf744b5e331b0dc9720e4aa49503a40cfd4798d36d26e733031c5f6->leave($__internal_128e4da50cf744b5e331b0dc9720e4aa49503a40cfd4798d36d26e733031c5f6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_437f56460249b4deb66a4b5e3fbf13036ce8a4927bef50e547d6d5c5380c78c7 = $this->env->getExtension("native_profiler");
        $__internal_437f56460249b4deb66a4b5e3fbf13036ce8a4927bef50e547d6d5c5380c78c7->enter($__internal_437f56460249b4deb66a4b5e3fbf13036ce8a4927bef50e547d6d5c5380c78c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_437f56460249b4deb66a4b5e3fbf13036ce8a4927bef50e547d6d5c5380c78c7->leave($__internal_437f56460249b4deb66a4b5e3fbf13036ce8a4927bef50e547d6d5c5380c78c7_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_988a9a5a21f65db71b7042232830285d37b604378f5f2a67360c4bf13a96c33a = $this->env->getExtension("native_profiler");
        $__internal_988a9a5a21f65db71b7042232830285d37b604378f5f2a67360c4bf13a96c33a->enter($__internal_988a9a5a21f65db71b7042232830285d37b604378f5f2a67360c4bf13a96c33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_988a9a5a21f65db71b7042232830285d37b604378f5f2a67360c4bf13a96c33a->leave($__internal_988a9a5a21f65db71b7042232830285d37b604378f5f2a67360c4bf13a96c33a_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb7cb213673b98710b6deaa9277d2d2627e1115e66fff275287aabe8e4326597 = $this->env->getExtension("native_profiler");
        $__internal_cb7cb213673b98710b6deaa9277d2d2627e1115e66fff275287aabe8e4326597->enter($__internal_cb7cb213673b98710b6deaa9277d2d2627e1115e66fff275287aabe8e4326597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_users_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "UserName", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "FirstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "LastName", array()), "html", null, true);
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
        
        $__internal_cb7cb213673b98710b6deaa9277d2d2627e1115e66fff275287aabe8e4326597->leave($__internal_cb7cb213673b98710b6deaa9277d2d2627e1115e66fff275287aabe8e4326597_prof);

    }

    // line 49
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_e0048ea65d7a685dc29200e5feaac4d11b4c4a9cec89a6ee84f596a857257fd5 = $this->env->getExtension("native_profiler");
        $__internal_e0048ea65d7a685dc29200e5feaac4d11b4c4a9cec89a6ee84f596a857257fd5->enter($__internal_e0048ea65d7a685dc29200e5feaac4d11b4c4a9cec89a6ee84f596a857257fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 50
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_e0048ea65d7a685dc29200e5feaac4d11b4c4a9cec89a6ee84f596a857257fd5->leave($__internal_e0048ea65d7a685dc29200e5feaac4d11b4c4a9cec89a6ee84f596a857257fd5_prof);

    }

    // line 57
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_8ac9bfc9203adcc62bed11c7ebf88ac5a5f72cca9b15e9435819a0fbfe47f35a = $this->env->getExtension("native_profiler");
        $__internal_8ac9bfc9203adcc62bed11c7ebf88ac5a5f72cca9b15e9435819a0fbfe47f35a->enter($__internal_8ac9bfc9203adcc62bed11c7ebf88ac5a5f72cca9b15e9435819a0fbfe47f35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 58
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_8ac9bfc9203adcc62bed11c7ebf88ac5a5f72cca9b15e9435819a0fbfe47f35a->leave($__internal_8ac9bfc9203adcc62bed11c7ebf88ac5a5f72cca9b15e9435819a0fbfe47f35a_prof);

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
        return array (  182 => 59,  179 => 58,  173 => 57,  163 => 53,  159 => 52,  155 => 51,  152 => 50,  146 => 49,  135 => 43,  126 => 40,  122 => 39,  116 => 38,  113 => 37,  109 => 36,  93 => 23,  89 => 21,  83 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
