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
        $__internal_d64c0ae4eb2f35c8d853d70230ac2d1219025723637caa9c36402de75ace17c8 = $this->env->getExtension("native_profiler");
        $__internal_d64c0ae4eb2f35c8d853d70230ac2d1219025723637caa9c36402de75ace17c8->enter($__internal_d64c0ae4eb2f35c8d853d70230ac2d1219025723637caa9c36402de75ace17c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64c0ae4eb2f35c8d853d70230ac2d1219025723637caa9c36402de75ace17c8->leave($__internal_d64c0ae4eb2f35c8d853d70230ac2d1219025723637caa9c36402de75ace17c8_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_2f0cd766766213b7fe916a91a0d979fb92a70a269b9694e340101b474473b62e = $this->env->getExtension("native_profiler");
        $__internal_2f0cd766766213b7fe916a91a0d979fb92a70a269b9694e340101b474473b62e->enter($__internal_2f0cd766766213b7fe916a91a0d979fb92a70a269b9694e340101b474473b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
    </li>
";
        
        $__internal_2f0cd766766213b7fe916a91a0d979fb92a70a269b9694e340101b474473b62e->leave($__internal_2f0cd766766213b7fe916a91a0d979fb92a70a269b9694e340101b474473b62e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_782ec817a2483b2c3735db7b340bc122a3b5e3ac88e52176870ffbeeb1d04b73 = $this->env->getExtension("native_profiler");
        $__internal_782ec817a2483b2c3735db7b340bc122a3b5e3ac88e52176870ffbeeb1d04b73->enter($__internal_782ec817a2483b2c3735db7b340bc122a3b5e3ac88e52176870ffbeeb1d04b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_782ec817a2483b2c3735db7b340bc122a3b5e3ac88e52176870ffbeeb1d04b73->leave($__internal_782ec817a2483b2c3735db7b340bc122a3b5e3ac88e52176870ffbeeb1d04b73_prof);

    }

    // line 28
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_7406cc42f6d601bafd31bb63da548ce232913850a9b9e8315f2e5ec0dd1d9981 = $this->env->getExtension("native_profiler");
        $__internal_7406cc42f6d601bafd31bb63da548ce232913850a9b9e8315f2e5ec0dd1d9981->enter($__internal_7406cc42f6d601bafd31bb63da548ce232913850a9b9e8315f2e5ec0dd1d9981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

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
        
        $__internal_7406cc42f6d601bafd31bb63da548ce232913850a9b9e8315f2e5ec0dd1d9981->leave($__internal_7406cc42f6d601bafd31bb63da548ce232913850a9b9e8315f2e5ec0dd1d9981_prof);

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
