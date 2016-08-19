<?php

/* DashboardBundle:Dashboard:home.html.twig */
class __TwigTemplate_68be6d23ae6f615db185d8b1ed8aec51d27d005ca200ba1727d5dd643f953e96 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
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
        <b>Home</b>
    </li>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
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
    }

    // line 36
    public function block_script_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "    <!-- Load jQuery from Google's CDN if needed -->

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 42
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart1"]) ? $context["chart1"] : null));
        echo "
    </script>
    ";
        // line 44
        if (array_key_exists("chart2", $context)) {
            // line 45
            echo "    <script type=\"text/javascript\">
        ";
            // line 46
            echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart2"]) ? $context["chart2"] : null));
            echo "
    </script>
    ";
        }
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
        return array (  96 => 46,  93 => 45,  91 => 44,  86 => 42,  79 => 37,  76 => 36,  57 => 18,  54 => 17,  43 => 9,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
/*         <b>Home</b>*/
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
