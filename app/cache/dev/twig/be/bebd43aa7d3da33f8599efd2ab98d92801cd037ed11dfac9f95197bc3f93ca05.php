<?php

/* DashboardBundle:Dashboard:home.html.twig */
class __TwigTemplate_3685be3b802fa24cb34c11645f4734bc6e381cea370ea5ebb985b1483f85825a extends Twig_Template
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
        $__internal_e47b47ceccf212204a2474ac775f9106a255b5ae6a4a1c6ea4573cd64900488e = $this->env->getExtension("native_profiler");
        $__internal_e47b47ceccf212204a2474ac775f9106a255b5ae6a4a1c6ea4573cd64900488e->enter($__internal_e47b47ceccf212204a2474ac775f9106a255b5ae6a4a1c6ea4573cd64900488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e47b47ceccf212204a2474ac775f9106a255b5ae6a4a1c6ea4573cd64900488e->leave($__internal_e47b47ceccf212204a2474ac775f9106a255b5ae6a4a1c6ea4573cd64900488e_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_018a9279180cae1a8af3f2ec0d1aa46ed20527259f739c527104517eeb4b25b0 = $this->env->getExtension("native_profiler");
        $__internal_018a9279180cae1a8af3f2ec0d1aa46ed20527259f739c527104517eeb4b25b0->enter($__internal_018a9279180cae1a8af3f2ec0d1aa46ed20527259f739c527104517eeb4b25b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
    </li>
";
        
        $__internal_018a9279180cae1a8af3f2ec0d1aa46ed20527259f739c527104517eeb4b25b0->leave($__internal_018a9279180cae1a8af3f2ec0d1aa46ed20527259f739c527104517eeb4b25b0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1801b1dcbfe20afd1170c2113b2f2c95ba760387be464c4a784a484cda718fbc = $this->env->getExtension("native_profiler");
        $__internal_1801b1dcbfe20afd1170c2113b2f2c95ba760387be464c4a784a484cda718fbc->enter($__internal_1801b1dcbfe20afd1170c2113b2f2c95ba760387be464c4a784a484cda718fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1801b1dcbfe20afd1170c2113b2f2c95ba760387be464c4a784a484cda718fbc->leave($__internal_1801b1dcbfe20afd1170c2113b2f2c95ba760387be464c4a784a484cda718fbc_prof);

    }

    // line 28
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_5f4c7f9e7549a8c7befacd0119220ff6bfe9165a823106b73ae52f015cd72821 = $this->env->getExtension("native_profiler");
        $__internal_5f4c7f9e7549a8c7befacd0119220ff6bfe9165a823106b73ae52f015cd72821->enter($__internal_5f4c7f9e7549a8c7befacd0119220ff6bfe9165a823106b73ae52f015cd72821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

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
        
        $__internal_5f4c7f9e7549a8c7befacd0119220ff6bfe9165a823106b73ae52f015cd72821->leave($__internal_5f4c7f9e7549a8c7befacd0119220ff6bfe9165a823106b73ae52f015cd72821_prof);

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
