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
        $__internal_cd7993953d6df21d58a7c0e4029c93a3d6ddc107c7f51756aa06bbc4f0f74b21 = $this->env->getExtension("native_profiler");
        $__internal_cd7993953d6df21d58a7c0e4029c93a3d6ddc107c7f51756aa06bbc4f0f74b21->enter($__internal_cd7993953d6df21d58a7c0e4029c93a3d6ddc107c7f51756aa06bbc4f0f74b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7993953d6df21d58a7c0e4029c93a3d6ddc107c7f51756aa06bbc4f0f74b21->leave($__internal_cd7993953d6df21d58a7c0e4029c93a3d6ddc107c7f51756aa06bbc4f0f74b21_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_02e3952de473a17e72d7e73bf7436fa1abcdef6f46132d1f60548a1f161d34e4 = $this->env->getExtension("native_profiler");
        $__internal_02e3952de473a17e72d7e73bf7436fa1abcdef6f46132d1f60548a1f161d34e4->enter($__internal_02e3952de473a17e72d7e73bf7436fa1abcdef6f46132d1f60548a1f161d34e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_02e3952de473a17e72d7e73bf7436fa1abcdef6f46132d1f60548a1f161d34e4->leave($__internal_02e3952de473a17e72d7e73bf7436fa1abcdef6f46132d1f60548a1f161d34e4_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9cb776398d9acf5879d0b94732e5fbfe8b1477dac9a39200b50f5f2726c120 = $this->env->getExtension("native_profiler");
        $__internal_0d9cb776398d9acf5879d0b94732e5fbfe8b1477dac9a39200b50f5f2726c120->enter($__internal_0d9cb776398d9acf5879d0b94732e5fbfe8b1477dac9a39200b50f5f2726c120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_0d9cb776398d9acf5879d0b94732e5fbfe8b1477dac9a39200b50f5f2726c120->leave($__internal_0d9cb776398d9acf5879d0b94732e5fbfe8b1477dac9a39200b50f5f2726c120_prof);

    }

    // line 29
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_cba86f5151ac282760adcfbe94d440eb9058189bbde85a9dd204ac44bc7c8ede = $this->env->getExtension("native_profiler");
        $__internal_cba86f5151ac282760adcfbe94d440eb9058189bbde85a9dd204ac44bc7c8ede->enter($__internal_cba86f5151ac282760adcfbe94d440eb9058189bbde85a9dd204ac44bc7c8ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

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
        
        $__internal_cba86f5151ac282760adcfbe94d440eb9058189bbde85a9dd204ac44bc7c8ede->leave($__internal_cba86f5151ac282760adcfbe94d440eb9058189bbde85a9dd204ac44bc7c8ede_prof);

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
