<?php

/* AdminBundle:Entities:list.html.twig */
class __TwigTemplate_5a13a3d5bec57bb4d5a3379527f1aedc74dff286d1a4efb9b3f0b1c8ad439f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Entities:list.html.twig", 1);
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
        $__internal_c34bfc9efcf8c9dc06b46c1508eec3a4a84f3ccfcc24c1c7e2e6497bbf69f950 = $this->env->getExtension("native_profiler");
        $__internal_c34bfc9efcf8c9dc06b46c1508eec3a4a84f3ccfcc24c1c7e2e6497bbf69f950->enter($__internal_c34bfc9efcf8c9dc06b46c1508eec3a4a84f3ccfcc24c1c7e2e6497bbf69f950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34bfc9efcf8c9dc06b46c1508eec3a4a84f3ccfcc24c1c7e2e6497bbf69f950->leave($__internal_c34bfc9efcf8c9dc06b46c1508eec3a4a84f3ccfcc24c1c7e2e6497bbf69f950_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41ec310497c3f412b2bfe8c15ea9c56be604da7d4bbcc0922fd792e91864b424 = $this->env->getExtension("native_profiler");
        $__internal_41ec310497c3f412b2bfe8c15ea9c56be604da7d4bbcc0922fd792e91864b424->enter($__internal_41ec310497c3f412b2bfe8c15ea9c56be604da7d4bbcc0922fd792e91864b424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_41ec310497c3f412b2bfe8c15ea9c56be604da7d4bbcc0922fd792e91864b424->leave($__internal_41ec310497c3f412b2bfe8c15ea9c56be604da7d4bbcc0922fd792e91864b424_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_de2e0cb0dd9db75889c3430306ee7609dd06aa77d3c1e03408b2e23e1fb2efd0 = $this->env->getExtension("native_profiler");
        $__internal_de2e0cb0dd9db75889c3430306ee7609dd06aa77d3c1e03408b2e23e1fb2efd0->enter($__internal_de2e0cb0dd9db75889c3430306ee7609dd06aa77d3c1e03408b2e23e1fb2efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Entities</b>
    </li>
    
";
        
        $__internal_de2e0cb0dd9db75889c3430306ee7609dd06aa77d3c1e03408b2e23e1fb2efd0->leave($__internal_de2e0cb0dd9db75889c3430306ee7609dd06aa77d3c1e03408b2e23e1fb2efd0_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_73bce5b8518ee45f60524931dfe13c4407dacd157d3dd4922e9aec09e7763fc1 = $this->env->getExtension("native_profiler");
        $__internal_73bce5b8518ee45f60524931dfe13c4407dacd157d3dd4922e9aec09e7763fc1->enter($__internal_73bce5b8518ee45f60524931dfe13c4407dacd157d3dd4922e9aec09e7763fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    <div class=\"box-footer\" style=\"border-bottom: 15px\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ab_entities_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    <br/>

    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Description</th>
                <th>Short label</th>    
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_entities_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Description", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ShortLabel", array()), "html", null, true);
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
        
        $__internal_73bce5b8518ee45f60524931dfe13c4407dacd157d3dd4922e9aec09e7763fc1->leave($__internal_73bce5b8518ee45f60524931dfe13c4407dacd157d3dd4922e9aec09e7763fc1_prof);

    }

    // line 46
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_290be0b49885949a85869e5c031dda07d88c7324a65e267a6f5c544a6127755e = $this->env->getExtension("native_profiler");
        $__internal_290be0b49885949a85869e5c031dda07d88c7324a65e267a6f5c544a6127755e->enter($__internal_290be0b49885949a85869e5c031dda07d88c7324a65e267a6f5c544a6127755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 47
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_290be0b49885949a85869e5c031dda07d88c7324a65e267a6f5c544a6127755e->leave($__internal_290be0b49885949a85869e5c031dda07d88c7324a65e267a6f5c544a6127755e_prof);

    }

    // line 54
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_dad4bff7836c1e992345e550763bba9d3139e4ef8b888c0bb074e83509075e84 = $this->env->getExtension("native_profiler");
        $__internal_dad4bff7836c1e992345e550763bba9d3139e4ef8b888c0bb074e83509075e84->enter($__internal_dad4bff7836c1e992345e550763bba9d3139e4ef8b888c0bb074e83509075e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 55
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_dad4bff7836c1e992345e550763bba9d3139e4ef8b888c0bb074e83509075e84->leave($__internal_dad4bff7836c1e992345e550763bba9d3139e4ef8b888c0bb074e83509075e84_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Entities:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 56,  174 => 55,  168 => 54,  158 => 50,  154 => 49,  150 => 48,  147 => 47,  141 => 46,  131 => 41,  122 => 38,  116 => 37,  113 => 36,  109 => 35,  94 => 23,  90 => 21,  84 => 20,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <b>Entities</b>*/
/*     </li>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="box-footer" style="border-bottom: 15px">*/
/*         <a href="{{ path ("ab_entities_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
/*     <br/>*/
/* */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*                 <th>Description</th>*/
/*                 <th>Short label</th>    */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("ab_entities_see",{'id':entity.id}) }}" title="view">{{ entity.Description }}</a></td>*/
/*                     <td>{{ entity.ShortLabel }}</td>                    */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
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
/* */
/*       */
/* */
/* */
