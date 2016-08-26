<?php

/* @Dashboard/Dashboard/home.html.twig */
class __TwigTemplate_a7f50c001a5ca3cd913953a95758f19ff4b635c34ca772e7fa9e8343342ecc71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Dashboard/Dashboard/home.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'script_javascripts' => array($this, 'block_script_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cf0f7ebcf1af31cfb4555571151985ec29b8d1a2572cada53e7ad8594915f4f = $this->env->getExtension("native_profiler");
        $__internal_3cf0f7ebcf1af31cfb4555571151985ec29b8d1a2572cada53e7ad8594915f4f->enter($__internal_3cf0f7ebcf1af31cfb4555571151985ec29b8d1a2572cada53e7ad8594915f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cf0f7ebcf1af31cfb4555571151985ec29b8d1a2572cada53e7ad8594915f4f->leave($__internal_3cf0f7ebcf1af31cfb4555571151985ec29b8d1a2572cada53e7ad8594915f4f_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5dc2da6437e95a6b8b3fea4ef94ef3d309828bdb99b1e7f54429a0ac8eca2986 = $this->env->getExtension("native_profiler");
        $__internal_5dc2da6437e95a6b8b3fea4ef94ef3d309828bdb99b1e7f54429a0ac8eca2986->enter($__internal_5dc2da6437e95a6b8b3fea4ef94ef3d309828bdb99b1e7f54429a0ac8eca2986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
    </li>
";
        
        $__internal_5dc2da6437e95a6b8b3fea4ef94ef3d309828bdb99b1e7f54429a0ac8eca2986->leave($__internal_5dc2da6437e95a6b8b3fea4ef94ef3d309828bdb99b1e7f54429a0ac8eca2986_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b8aa4abb5e348a45e214c046fc36642fb4324f36ae1df5189f4c13b87ce0c98 = $this->env->getExtension("native_profiler");
        $__internal_3b8aa4abb5e348a45e214c046fc36642fb4324f36ae1df5189f4c13b87ce0c98->enter($__internal_3b8aa4abb5e348a45e214c046fc36642fb4324f36ae1df5189f4c13b87ce0c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div id=\"widget1\" ></div>
                </div>
                <div class=\"col-md-6\">
                    <div id=\"widget2\" ></div>
                </div
            </div>
        </div><!-- /.box-body -->
    </div>
    </div>
";
        
        $__internal_3b8aa4abb5e348a45e214c046fc36642fb4324f36ae1df5189f4c13b87ce0c98->leave($__internal_3b8aa4abb5e348a45e214c046fc36642fb4324f36ae1df5189f4c13b87ce0c98_prof);

    }

    // line 28
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_eeac0bfe671e3df0e82a90caf6678d103180c89e81d638694b5fa1e14daf0797 = $this->env->getExtension("native_profiler");
        $__internal_eeac0bfe671e3df0e82a90caf6678d103180c89e81d638694b5fa1e14daf0797->enter($__internal_eeac0bfe671e3df0e82a90caf6678d103180c89e81d638694b5fa1e14daf0797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 29
        echo "    <!-- Load jQuery from Google's CDN if needed -->

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 34
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart1"]) ? $context["chart1"] : $this->getContext($context, "chart1")));
        echo "
    </script>
    ";
        // line 36
        if (array_key_exists("chart2", $context)) {
            // line 37
            echo "    <script type=\"text/javascript\">
        ";
            // line 38
            echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart2"]) ? $context["chart2"] : $this->getContext($context, "chart2")));
            echo "
    </script>
    ";
        }
        
        $__internal_eeac0bfe671e3df0e82a90caf6678d103180c89e81d638694b5fa1e14daf0797->leave($__internal_eeac0bfe671e3df0e82a90caf6678d103180c89e81d638694b5fa1e14daf0797_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  103 => 37,  101 => 36,  96 => 34,  89 => 29,  83 => 28,  61 => 10,  55 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div id="widget1" ></div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <div id="widget2" ></div>*/
/*                 </div*/
/*             </div>*/
/*         </div><!-- /.box-body -->*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block script_javascripts %}*/
/*     <!-- Load jQuery from Google's CDN if needed -->*/
/* */
/*     <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/*     <script type="text/javascript">*/
/*         {{ chart(chart1) }}*/
/*     </script>*/
/*     {% if chart2 is defined %}*/
/*     <script type="text/javascript">*/
/*         {{ chart(chart2) }}*/
/*     </script>*/
/*     {% endif %}*/
/* {% endblock %} */
/* */
/* */
