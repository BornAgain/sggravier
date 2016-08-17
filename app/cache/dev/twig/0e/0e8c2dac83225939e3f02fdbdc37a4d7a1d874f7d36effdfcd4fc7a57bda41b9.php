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
        $__internal_658179af81bce315b983558dfb41b05a828c306c511a88b519aab4234ee79d7a = $this->env->getExtension("native_profiler");
        $__internal_658179af81bce315b983558dfb41b05a828c306c511a88b519aab4234ee79d7a->enter($__internal_658179af81bce315b983558dfb41b05a828c306c511a88b519aab4234ee79d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_658179af81bce315b983558dfb41b05a828c306c511a88b519aab4234ee79d7a->leave($__internal_658179af81bce315b983558dfb41b05a828c306c511a88b519aab4234ee79d7a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1643ff67737c137487514fed5205509eb32d14fea224b80c634dcec427545235 = $this->env->getExtension("native_profiler");
        $__internal_1643ff67737c137487514fed5205509eb32d14fea224b80c634dcec427545235->enter($__internal_1643ff67737c137487514fed5205509eb32d14fea224b80c634dcec427545235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1643ff67737c137487514fed5205509eb32d14fea224b80c634dcec427545235->leave($__internal_1643ff67737c137487514fed5205509eb32d14fea224b80c634dcec427545235_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_34a93578fa16b2674b861520713abe56280d9af5ebd7c4816eb0160b69bb8712 = $this->env->getExtension("native_profiler");
        $__internal_34a93578fa16b2674b861520713abe56280d9af5ebd7c4816eb0160b69bb8712->enter($__internal_34a93578fa16b2674b861520713abe56280d9af5ebd7c4816eb0160b69bb8712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"><b>Entities</b></a>
    </li>
    
";
        
        $__internal_34a93578fa16b2674b861520713abe56280d9af5ebd7c4816eb0160b69bb8712->leave($__internal_34a93578fa16b2674b861520713abe56280d9af5ebd7c4816eb0160b69bb8712_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_350b0db6ff5f324d2145b7537bddf111977ab9c0596d118f4964e11658ff6930 = $this->env->getExtension("native_profiler");
        $__internal_350b0db6ff5f324d2145b7537bddf111977ab9c0596d118f4964e11658ff6930->enter($__internal_350b0db6ff5f324d2145b7537bddf111977ab9c0596d118f4964e11658ff6930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_350b0db6ff5f324d2145b7537bddf111977ab9c0596d118f4964e11658ff6930->leave($__internal_350b0db6ff5f324d2145b7537bddf111977ab9c0596d118f4964e11658ff6930_prof);

    }

    // line 41
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_47fe20d472b1b92ee054e4956a11c8f2cc2b2a956cbe17a11245d263fb68fc98 = $this->env->getExtension("native_profiler");
        $__internal_47fe20d472b1b92ee054e4956a11c8f2cc2b2a956cbe17a11245d263fb68fc98->enter($__internal_47fe20d472b1b92ee054e4956a11c8f2cc2b2a956cbe17a11245d263fb68fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_47fe20d472b1b92ee054e4956a11c8f2cc2b2a956cbe17a11245d263fb68fc98->leave($__internal_47fe20d472b1b92ee054e4956a11c8f2cc2b2a956cbe17a11245d263fb68fc98_prof);

    }

    // line 49
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_c8f52db1ea6a3d49e87893f4984e4f77eb52c567a5bf74fc4b5137ae158b88e9 = $this->env->getExtension("native_profiler");
        $__internal_c8f52db1ea6a3d49e87893f4984e4f77eb52c567a5bf74fc4b5137ae158b88e9->enter($__internal_c8f52db1ea6a3d49e87893f4984e4f77eb52c567a5bf74fc4b5137ae158b88e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 50
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_c8f52db1ea6a3d49e87893f4984e4f77eb52c567a5bf74fc4b5137ae158b88e9->leave($__internal_c8f52db1ea6a3d49e87893f4984e4f77eb52c567a5bf74fc4b5137ae158b88e9_prof);

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
        return array (  175 => 51,  172 => 50,  166 => 49,  156 => 45,  152 => 44,  148 => 43,  145 => 42,  139 => 41,  130 => 38,  126 => 36,  117 => 33,  111 => 32,  108 => 31,  104 => 30,  93 => 21,  87 => 20,  76 => 15,  69 => 11,  66 => 10,  60 => 9,  50 => 5,  46 => 4,  38 => 3,  11 => 1,);
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
/*         <a href="{{ path("ab_entities_list") }}"><b>Entities</b></a>*/
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
