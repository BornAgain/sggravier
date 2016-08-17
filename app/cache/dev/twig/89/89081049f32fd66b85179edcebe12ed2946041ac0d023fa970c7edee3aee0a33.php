<?php

/* AdminBundle:Entities:list.html.twig */
class __TwigTemplate_24417015becdaf517890e7f84c65091827056c0c52471df1f35e67a515a1b7e0 extends Twig_Template
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
        $__internal_7551770c7726dc10d1e6ef0b38c4991871f30abe89028d2755cd551efe04382d = $this->env->getExtension("native_profiler");
        $__internal_7551770c7726dc10d1e6ef0b38c4991871f30abe89028d2755cd551efe04382d->enter($__internal_7551770c7726dc10d1e6ef0b38c4991871f30abe89028d2755cd551efe04382d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7551770c7726dc10d1e6ef0b38c4991871f30abe89028d2755cd551efe04382d->leave($__internal_7551770c7726dc10d1e6ef0b38c4991871f30abe89028d2755cd551efe04382d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fa813db036b39d74f35b51d7f1a2ecd72d9b90b10b4249eb7a3d64604e28bba = $this->env->getExtension("native_profiler");
        $__internal_6fa813db036b39d74f35b51d7f1a2ecd72d9b90b10b4249eb7a3d64604e28bba->enter($__internal_6fa813db036b39d74f35b51d7f1a2ecd72d9b90b10b4249eb7a3d64604e28bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6fa813db036b39d74f35b51d7f1a2ecd72d9b90b10b4249eb7a3d64604e28bba->leave($__internal_6fa813db036b39d74f35b51d7f1a2ecd72d9b90b10b4249eb7a3d64604e28bba_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0da9ece066b92b5a343742e6d3d45bcdbaf23d092a37963a6c9d86debdd97eac = $this->env->getExtension("native_profiler");
        $__internal_0da9ece066b92b5a343742e6d3d45bcdbaf23d092a37963a6c9d86debdd97eac->enter($__internal_0da9ece066b92b5a343742e6d3d45bcdbaf23d092a37963a6c9d86debdd97eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\">Entities</a>
    </li>
    
";
        
        $__internal_0da9ece066b92b5a343742e6d3d45bcdbaf23d092a37963a6c9d86debdd97eac->leave($__internal_0da9ece066b92b5a343742e6d3d45bcdbaf23d092a37963a6c9d86debdd97eac_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5955b0a6d3dec51c5a0c5b013cbe0e95deb33003a45e3301b87dce11892e41e = $this->env->getExtension("native_profiler");
        $__internal_c5955b0a6d3dec51c5a0c5b013cbe0e95deb33003a45e3301b87dce11892e41e->enter($__internal_c5955b0a6d3dec51c5a0c5b013cbe0e95deb33003a45e3301b87dce11892e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
                <th>Description</th>
                <th>Short label</th>    
            </tr>
        </thead>
        <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                <tr>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ab_entities_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Description", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ShortLabel", array()), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ab_entities_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
";
        
        $__internal_c5955b0a6d3dec51c5a0c5b013cbe0e95deb33003a45e3301b87dce11892e41e->leave($__internal_c5955b0a6d3dec51c5a0c5b013cbe0e95deb33003a45e3301b87dce11892e41e_prof);

    }

    // line 41
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_1353de4da56ce977bea5fff1fe0df9563200ae6478d81b2524927d78826d539e = $this->env->getExtension("native_profiler");
        $__internal_1353de4da56ce977bea5fff1fe0df9563200ae6478d81b2524927d78826d539e->enter($__internal_1353de4da56ce977bea5fff1fe0df9563200ae6478d81b2524927d78826d539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 42
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_1353de4da56ce977bea5fff1fe0df9563200ae6478d81b2524927d78826d539e->leave($__internal_1353de4da56ce977bea5fff1fe0df9563200ae6478d81b2524927d78826d539e_prof);

    }

    // line 49
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_83e1cfd10d610b355e21e3f11a62bafe0643626ff93276ee2073428930857756 = $this->env->getExtension("native_profiler");
        $__internal_83e1cfd10d610b355e21e3f11a62bafe0643626ff93276ee2073428930857756->enter($__internal_83e1cfd10d610b355e21e3f11a62bafe0643626ff93276ee2073428930857756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 50
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_83e1cfd10d610b355e21e3f11a62bafe0643626ff93276ee2073428930857756->leave($__internal_83e1cfd10d610b355e21e3f11a62bafe0643626ff93276ee2073428930857756_prof);

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
        return array (  172 => 51,  169 => 50,  163 => 49,  153 => 45,  149 => 44,  145 => 43,  142 => 42,  136 => 41,  127 => 38,  123 => 36,  114 => 33,  108 => 32,  105 => 31,  101 => 30,  90 => 21,  84 => 20,  73 => 15,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("ab_entities_list") }}">Entities</a>*/
/*     </li>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
/*     <a href="{{ path ("ab_entities_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
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
