<?php

/* DashboardBundle:Dashboard:home.html.twig */
class __TwigTemplate_5693710e305ceeb056d6551c0e12e249f52eaef1d1b4038dc30b8de4f6d84019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Dashboard:home.html.twig", 1);
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
        $__internal_b9aaf612582d3c231ec4ae9821b2faa4d642f8a7eea8c37df9da95e3ee6dd9f4 = $this->env->getExtension("native_profiler");
        $__internal_b9aaf612582d3c231ec4ae9821b2faa4d642f8a7eea8c37df9da95e3ee6dd9f4->enter($__internal_b9aaf612582d3c231ec4ae9821b2faa4d642f8a7eea8c37df9da95e3ee6dd9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9aaf612582d3c231ec4ae9821b2faa4d642f8a7eea8c37df9da95e3ee6dd9f4->leave($__internal_b9aaf612582d3c231ec4ae9821b2faa4d642f8a7eea8c37df9da95e3ee6dd9f4_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f51a9f8370dab2ae0076195530a74030fd9d546083e62fb02cebafb13ac963da = $this->env->getExtension("native_profiler");
        $__internal_f51a9f8370dab2ae0076195530a74030fd9d546083e62fb02cebafb13ac963da->enter($__internal_f51a9f8370dab2ae0076195530a74030fd9d546083e62fb02cebafb13ac963da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("db_widget_list");
        echo "\">Widgets</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"db_widget_see\"><b>See</b></a>
    </li>
";
        
        $__internal_f51a9f8370dab2ae0076195530a74030fd9d546083e62fb02cebafb13ac963da->leave($__internal_f51a9f8370dab2ae0076195530a74030fd9d546083e62fb02cebafb13ac963da_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2d879b597c6dfc588ca2ac57909dcf0c6e31094e1feec23270103d76fe1660 = $this->env->getExtension("native_profiler");
        $__internal_be2d879b597c6dfc588ca2ac57909dcf0c6e31094e1feec23270103d76fe1660->enter($__internal_be2d879b597c6dfc588ca2ac57909dcf0c6e31094e1feec23270103d76fe1660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_be2d879b597c6dfc588ca2ac57909dcf0c6e31094e1feec23270103d76fe1660->leave($__internal_be2d879b597c6dfc588ca2ac57909dcf0c6e31094e1feec23270103d76fe1660_prof);

    }

    // line 29
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_47de9ad94d95d745386b8e1f01a397f8ef4ff49dbb1b2ef58edd70f32a1ae010 = $this->env->getExtension("native_profiler");
        $__internal_47de9ad94d95d745386b8e1f01a397f8ef4ff49dbb1b2ef58edd70f32a1ae010->enter($__internal_47de9ad94d95d745386b8e1f01a397f8ef4ff49dbb1b2ef58edd70f32a1ae010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 30
        echo "    <!-- Load jQuery from Google's CDN if needed -->

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 35
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart1"]) ? $context["chart1"] : $this->getContext($context, "chart1")));
        echo "
</script>
";
        
        $__internal_47de9ad94d95d745386b8e1f01a397f8ef4ff49dbb1b2ef58edd70f32a1ae010->leave($__internal_47de9ad94d95d745386b8e1f01a397f8ef4ff49dbb1b2ef58edd70f32a1ae010_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Dashboard:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  93 => 30,  87 => 29,  72 => 18,  66 => 17,  52 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_widget_list") }}">Widgets</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="db_widget_see"><b>See</b></a>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/*         </div><!-- /.box-body -->*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block script_javascripts %}*/
/*     <!-- Load jQuery from Google's CDN if needed -->*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart1) }}*/
/* </script>*/
/* {% endblock %} */
/* */
/* */
