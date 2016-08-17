<?php

/* AdminBundle:Roles:list.html.twig */
class __TwigTemplate_8043743ca0a4e388dfbc17a3ebe6107906765cf8e937d37b9dedb0006a99af25 extends Twig_Template
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
        $__internal_7f6a586609cda01717555e6b53ea0b9d58f9d77b1526b5d2763ec8bfb526b4a7 = $this->env->getExtension("native_profiler");
        $__internal_7f6a586609cda01717555e6b53ea0b9d58f9d77b1526b5d2763ec8bfb526b4a7->enter($__internal_7f6a586609cda01717555e6b53ea0b9d58f9d77b1526b5d2763ec8bfb526b4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f6a586609cda01717555e6b53ea0b9d58f9d77b1526b5d2763ec8bfb526b4a7->leave($__internal_7f6a586609cda01717555e6b53ea0b9d58f9d77b1526b5d2763ec8bfb526b4a7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88b1668b2bc244ec232975f97aba4a30ac5af3bd2ae52cfc178ccf285152cd52 = $this->env->getExtension("native_profiler");
        $__internal_88b1668b2bc244ec232975f97aba4a30ac5af3bd2ae52cfc178ccf285152cd52->enter($__internal_88b1668b2bc244ec232975f97aba4a30ac5af3bd2ae52cfc178ccf285152cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_88b1668b2bc244ec232975f97aba4a30ac5af3bd2ae52cfc178ccf285152cd52->leave($__internal_88b1668b2bc244ec232975f97aba4a30ac5af3bd2ae52cfc178ccf285152cd52_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5ba50786bf9ebedad7bb4d7733815699dfa4a0697d67d012b8595733b6295327 = $this->env->getExtension("native_profiler");
        $__internal_5ba50786bf9ebedad7bb4d7733815699dfa4a0697d67d012b8595733b6295327->enter($__internal_5ba50786bf9ebedad7bb4d7733815699dfa4a0697d67d012b8595733b6295327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ab_roles_list");
        echo "\">Roles</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <span>List</span>
    </li>
";
        
        $__internal_5ba50786bf9ebedad7bb4d7733815699dfa4a0697d67d012b8595733b6295327->leave($__internal_5ba50786bf9ebedad7bb4d7733815699dfa4a0697d67d012b8595733b6295327_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_c117c90b34ef0b89ca6663643667fcd4f8c582f5ee871b4f3cd1973a4b07d0ef = $this->env->getExtension("native_profiler");
        $__internal_c117c90b34ef0b89ca6663643667fcd4f8c582f5ee871b4f3cd1973a4b07d0ef->enter($__internal_c117c90b34ef0b89ca6663643667fcd4f8c582f5ee871b4f3cd1973a4b07d0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c117c90b34ef0b89ca6663643667fcd4f8c582f5ee871b4f3cd1973a4b07d0ef->leave($__internal_c117c90b34ef0b89ca6663643667fcd4f8c582f5ee871b4f3cd1973a4b07d0ef_prof);

    }

    // line 43
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_7ce5fdeace82486c59f6715b1f5f9d02ed521c87f9e55ba3685bcc477859a925 = $this->env->getExtension("native_profiler");
        $__internal_7ce5fdeace82486c59f6715b1f5f9d02ed521c87f9e55ba3685bcc477859a925->enter($__internal_7ce5fdeace82486c59f6715b1f5f9d02ed521c87f9e55ba3685bcc477859a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_7ce5fdeace82486c59f6715b1f5f9d02ed521c87f9e55ba3685bcc477859a925->leave($__internal_7ce5fdeace82486c59f6715b1f5f9d02ed521c87f9e55ba3685bcc477859a925_prof);

    }

    // line 51
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_56a1e14238023a044efa091a038c05a2c1f210620cb97a14fddc2b7fcc071754 = $this->env->getExtension("native_profiler");
        $__internal_56a1e14238023a044efa091a038c05a2c1f210620cb97a14fddc2b7fcc071754->enter($__internal_56a1e14238023a044efa091a038c05a2c1f210620cb97a14fddc2b7fcc071754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 52
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_56a1e14238023a044efa091a038c05a2c1f210620cb97a14fddc2b7fcc071754->leave($__internal_56a1e14238023a044efa091a038c05a2c1f210620cb97a14fddc2b7fcc071754_prof);

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
        return array (  171 => 53,  168 => 52,  162 => 51,  152 => 47,  148 => 46,  144 => 45,  141 => 44,  135 => 43,  126 => 40,  121 => 37,  110 => 34,  107 => 33,  103 => 32,  93 => 24,  87 => 23,  73 => 15,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("ab_roles_list") }}">Roles</a>*/
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
