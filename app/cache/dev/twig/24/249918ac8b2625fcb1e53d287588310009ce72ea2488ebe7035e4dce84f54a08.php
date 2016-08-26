<?php

/* DashboardBundle:Dashboard:home.html.twig */
class __TwigTemplate_d51dec299d2b89737082171d574026dcce06b863c775a065cc6c3eafed4ab3af extends Twig_Template
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
        $__internal_1b66ddb306a3c78ae1a223e9f3c66dc22f19b98237207236d5e4e87bf8b99f8e = $this->env->getExtension("native_profiler");
        $__internal_1b66ddb306a3c78ae1a223e9f3c66dc22f19b98237207236d5e4e87bf8b99f8e->enter($__internal_1b66ddb306a3c78ae1a223e9f3c66dc22f19b98237207236d5e4e87bf8b99f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b66ddb306a3c78ae1a223e9f3c66dc22f19b98237207236d5e4e87bf8b99f8e->leave($__internal_1b66ddb306a3c78ae1a223e9f3c66dc22f19b98237207236d5e4e87bf8b99f8e_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b1f5838d1a7a4964fb4449203d0ff2dd4aecc9a037bf0a48e483d33d8d65ff5c = $this->env->getExtension("native_profiler");
        $__internal_b1f5838d1a7a4964fb4449203d0ff2dd4aecc9a037bf0a48e483d33d8d65ff5c->enter($__internal_b1f5838d1a7a4964fb4449203d0ff2dd4aecc9a037bf0a48e483d33d8d65ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
    </li>
";
        
        $__internal_b1f5838d1a7a4964fb4449203d0ff2dd4aecc9a037bf0a48e483d33d8d65ff5c->leave($__internal_b1f5838d1a7a4964fb4449203d0ff2dd4aecc9a037bf0a48e483d33d8d65ff5c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e29223b4a4d6ffce713273d88b74cd3e3b84b8581b0484fca0d9fbbc2ae2c4bc = $this->env->getExtension("native_profiler");
        $__internal_e29223b4a4d6ffce713273d88b74cd3e3b84b8581b0484fca0d9fbbc2ae2c4bc->enter($__internal_e29223b4a4d6ffce713273d88b74cd3e3b84b8581b0484fca0d9fbbc2ae2c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e29223b4a4d6ffce713273d88b74cd3e3b84b8581b0484fca0d9fbbc2ae2c4bc->leave($__internal_e29223b4a4d6ffce713273d88b74cd3e3b84b8581b0484fca0d9fbbc2ae2c4bc_prof);

    }

    // line 28
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_fbe72c328377704f5775a094e70f7dda071c38193cda25f9a86aaadbe866f44b = $this->env->getExtension("native_profiler");
        $__internal_fbe72c328377704f5775a094e70f7dda071c38193cda25f9a86aaadbe866f44b->enter($__internal_fbe72c328377704f5775a094e70f7dda071c38193cda25f9a86aaadbe866f44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

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
        
        $__internal_fbe72c328377704f5775a094e70f7dda071c38193cda25f9a86aaadbe866f44b->leave($__internal_fbe72c328377704f5775a094e70f7dda071c38193cda25f9a86aaadbe866f44b_prof);

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
