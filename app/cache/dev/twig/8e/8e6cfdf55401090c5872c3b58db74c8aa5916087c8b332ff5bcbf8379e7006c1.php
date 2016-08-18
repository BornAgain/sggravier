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
        $__internal_777ee0251581711c782b95cf3a9638503c1cc751644b0f29139d3971be8adead = $this->env->getExtension("native_profiler");
        $__internal_777ee0251581711c782b95cf3a9638503c1cc751644b0f29139d3971be8adead->enter($__internal_777ee0251581711c782b95cf3a9638503c1cc751644b0f29139d3971be8adead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777ee0251581711c782b95cf3a9638503c1cc751644b0f29139d3971be8adead->leave($__internal_777ee0251581711c782b95cf3a9638503c1cc751644b0f29139d3971be8adead_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_d9e4a48fece7f103c56d7373e2b09c2b1935384e50946bd503f91704a5e8eeab = $this->env->getExtension("native_profiler");
        $__internal_d9e4a48fece7f103c56d7373e2b09c2b1935384e50946bd503f91704a5e8eeab->enter($__internal_d9e4a48fece7f103c56d7373e2b09c2b1935384e50946bd503f91704a5e8eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_d9e4a48fece7f103c56d7373e2b09c2b1935384e50946bd503f91704a5e8eeab->leave($__internal_d9e4a48fece7f103c56d7373e2b09c2b1935384e50946bd503f91704a5e8eeab_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30182be8cb1f1599138253cf8502d9e94687329fe1786f097285900be252335 = $this->env->getExtension("native_profiler");
        $__internal_e30182be8cb1f1599138253cf8502d9e94687329fe1786f097285900be252335->enter($__internal_e30182be8cb1f1599138253cf8502d9e94687329fe1786f097285900be252335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e30182be8cb1f1599138253cf8502d9e94687329fe1786f097285900be252335->leave($__internal_e30182be8cb1f1599138253cf8502d9e94687329fe1786f097285900be252335_prof);

    }

    // line 36
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_fbe19205192024ddc5f468b2fcc4721cc8e0f8077cafe4842546dda69432bb11 = $this->env->getExtension("native_profiler");
        $__internal_fbe19205192024ddc5f468b2fcc4721cc8e0f8077cafe4842546dda69432bb11->enter($__internal_fbe19205192024ddc5f468b2fcc4721cc8e0f8077cafe4842546dda69432bb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 37
        echo "    <!-- Load jQuery from Google's CDN if needed -->

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 42
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart1"]) ? $context["chart1"] : $this->getContext($context, "chart1")));
        echo "
    </script>
    ";
        // line 44
        if (array_key_exists("chart2", $context)) {
            // line 45
            echo "    <script type=\"text/javascript\">
        ";
            // line 46
            echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart2"]) ? $context["chart2"] : $this->getContext($context, "chart2")));
            echo "
    </script>
    ";
        }
        
        $__internal_fbe19205192024ddc5f468b2fcc4721cc8e0f8077cafe4842546dda69432bb11->leave($__internal_fbe19205192024ddc5f468b2fcc4721cc8e0f8077cafe4842546dda69432bb11_prof);

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
        return array (  117 => 46,  114 => 45,  112 => 44,  107 => 42,  100 => 37,  94 => 36,  72 => 18,  66 => 17,  52 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
