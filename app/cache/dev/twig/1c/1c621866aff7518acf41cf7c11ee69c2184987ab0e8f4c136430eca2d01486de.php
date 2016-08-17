<?php

/* DashboardBundle:Widget:list.html.twig */
class __TwigTemplate_5cf5a05364b37fc426f643c1a3be96d33d8f0b2b0d1c7ae3693842676daacca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Widget:list.html.twig", 1);
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
        $__internal_f0360e0ca0633109cebbbf95975396b8601b43aed83074b3a2ac8beba250f5de = $this->env->getExtension("native_profiler");
        $__internal_f0360e0ca0633109cebbbf95975396b8601b43aed83074b3a2ac8beba250f5de->enter($__internal_f0360e0ca0633109cebbbf95975396b8601b43aed83074b3a2ac8beba250f5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Widget:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0360e0ca0633109cebbbf95975396b8601b43aed83074b3a2ac8beba250f5de->leave($__internal_f0360e0ca0633109cebbbf95975396b8601b43aed83074b3a2ac8beba250f5de_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f43902b86ca2d989e3fd3f34f47b281940724e1ccea499774f3a0a4d2d77bc2e = $this->env->getExtension("native_profiler");
        $__internal_f43902b86ca2d989e3fd3f34f47b281940724e1ccea499774f3a0a4d2d77bc2e->enter($__internal_f43902b86ca2d989e3fd3f34f47b281940724e1ccea499774f3a0a4d2d77bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f43902b86ca2d989e3fd3f34f47b281940724e1ccea499774f3a0a4d2d77bc2e->leave($__internal_f43902b86ca2d989e3fd3f34f47b281940724e1ccea499774f3a0a4d2d77bc2e_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_9a9d3f6331b5aa29e4ea0f924c9705b4dd5d23eb595e7b0d81906a9a33e8a483 = $this->env->getExtension("native_profiler");
        $__internal_9a9d3f6331b5aa29e4ea0f924c9705b4dd5d23eb595e7b0d81906a9a33e8a483->enter($__internal_9a9d3f6331b5aa29e4ea0f924c9705b4dd5d23eb595e7b0d81906a9a33e8a483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Widgets</a>
    </li>
";
        
        $__internal_9a9d3f6331b5aa29e4ea0f924c9705b4dd5d23eb595e7b0d81906a9a33e8a483->leave($__internal_9a9d3f6331b5aa29e4ea0f924c9705b4dd5d23eb595e7b0d81906a9a33e8a483_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_0562ecf97f52dc8cfdf601f398e4e78f8fe28512e7c3823080633c9d1ed29da6 = $this->env->getExtension("native_profiler");
        $__internal_0562ecf97f52dc8cfdf601f398e4e78f8fe28512e7c3823080633c9d1ed29da6->enter($__internal_0562ecf97f52dc8cfdf601f398e4e78f8fe28512e7c3823080633c9d1ed29da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            
    <table class=\"table table-striped table-bordered table-hover table-header-fixed\" id=\"sample_1\">
        <thead>
            <tr class=\"table table-striped table-bordered table-hover table-header-fixed \" id=\"sample_1\">
                <th>Type</th>
                <th>Position</th>
                <th>Query</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("db_widget_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"title=\"view\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "query", array()), "html", null, true);
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
    
    <div class=\"box-footer pull-right\">
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("db_widget_add");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Add\"/> </a>
    </div>
    
";
        
        $__internal_0562ecf97f52dc8cfdf601f398e4e78f8fe28512e7c3823080633c9d1ed29da6->leave($__internal_0562ecf97f52dc8cfdf601f398e4e78f8fe28512e7c3823080633c9d1ed29da6_prof);

    }

    // line 47
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_a9d13bd1405a336fb7cd5f4ca3c482eb067d5f46b8388869936f3e998fb3fc6d = $this->env->getExtension("native_profiler");
        $__internal_a9d13bd1405a336fb7cd5f4ca3c482eb067d5f46b8388869936f3e998fb3fc6d->enter($__internal_a9d13bd1405a336fb7cd5f4ca3c482eb067d5f46b8388869936f3e998fb3fc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_a9d13bd1405a336fb7cd5f4ca3c482eb067d5f46b8388869936f3e998fb3fc6d->leave($__internal_a9d13bd1405a336fb7cd5f4ca3c482eb067d5f46b8388869936f3e998fb3fc6d_prof);

    }

    // line 55
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_71485ae2ecce5e7f86781b354051695693c71a9afe77691bd3db21e613483c85 = $this->env->getExtension("native_profiler");
        $__internal_71485ae2ecce5e7f86781b354051695693c71a9afe77691bd3db21e613483c85->enter($__internal_71485ae2ecce5e7f86781b354051695693c71a9afe77691bd3db21e613483c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 56
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_71485ae2ecce5e7f86781b354051695693c71a9afe77691bd3db21e613483c85->leave($__internal_71485ae2ecce5e7f86781b354051695693c71a9afe77691bd3db21e613483c85_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  177 => 56,  171 => 55,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  144 => 47,  133 => 42,  127 => 38,  118 => 35,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  89 => 21,  83 => 20,  73 => 15,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("db_dashboard_list") }}">Widgets</a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*             */
/*     <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">*/
/*         <thead>*/
/*             <tr class="table table-striped table-bordered table-hover table-header-fixed " id="sample_1">*/
/*                 <th>Type</th>*/
/*                 <th>Position</th>*/
/*                 <th>Query</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path("db_widget_see",{'id':entity.id}) }}"title="view">{{ entity.type }}</a></td>*/
/*                     <td>{{ entity.position }}</td>*/
/*                     <td>{{ entity.query }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*     <div class="box-footer pull-right">*/
/*         <a href="{{ path ("db_widget_add")}}"> <input class="btn btn-success" type="submit" value="Add"/> </a>*/
/*     </div>*/
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
