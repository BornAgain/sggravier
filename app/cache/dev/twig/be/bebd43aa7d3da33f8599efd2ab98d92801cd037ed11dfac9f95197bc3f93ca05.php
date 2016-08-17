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
        $__internal_b27a51b6fa23e1fcf683338d5d0b834cbd5ca5a8fca616fc2470571c955ff21c = $this->env->getExtension("native_profiler");
        $__internal_b27a51b6fa23e1fcf683338d5d0b834cbd5ca5a8fca616fc2470571c955ff21c->enter($__internal_b27a51b6fa23e1fcf683338d5d0b834cbd5ca5a8fca616fc2470571c955ff21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Dashboard:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27a51b6fa23e1fcf683338d5d0b834cbd5ca5a8fca616fc2470571c955ff21c->leave($__internal_b27a51b6fa23e1fcf683338d5d0b834cbd5ca5a8fca616fc2470571c955ff21c_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_fb53eec75700701cd86e2a564ce08764da67ed735b3e474443c57f54f0ccdd5e = $this->env->getExtension("native_profiler");
        $__internal_fb53eec75700701cd86e2a564ce08764da67ed735b3e474443c57f54f0ccdd5e->enter($__internal_fb53eec75700701cd86e2a564ce08764da67ed735b3e474443c57f54f0ccdd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
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
        <a href=\"db_widget_see\">See</a>
    </li>
";
        
        $__internal_fb53eec75700701cd86e2a564ce08764da67ed735b3e474443c57f54f0ccdd5e->leave($__internal_fb53eec75700701cd86e2a564ce08764da67ed735b3e474443c57f54f0ccdd5e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_cffd5e3d80dbafd86d453b9ba0ff38361f6cb0d6a088cf2da8f005305b57d834 = $this->env->getExtension("native_profiler");
        $__internal_cffd5e3d80dbafd86d453b9ba0ff38361f6cb0d6a088cf2da8f005305b57d834->enter($__internal_cffd5e3d80dbafd86d453b9ba0ff38361f6cb0d6a088cf2da8f005305b57d834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

        </div><!-- /.box-body -->
    </div>
";
        
        $__internal_cffd5e3d80dbafd86d453b9ba0ff38361f6cb0d6a088cf2da8f005305b57d834->leave($__internal_cffd5e3d80dbafd86d453b9ba0ff38361f6cb0d6a088cf2da8f005305b57d834_prof);

    }

    // line 29
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_4c2bef7690e309eba1f5845a8c951270c44ab1cc190afaa4662cd0d05d0a897f = $this->env->getExtension("native_profiler");
        $__internal_4c2bef7690e309eba1f5845a8c951270c44ab1cc190afaa4662cd0d05d0a897f->enter($__internal_4c2bef7690e309eba1f5845a8c951270c44ab1cc190afaa4662cd0d05d0a897f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

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
        
        $__internal_4c2bef7690e309eba1f5845a8c951270c44ab1cc190afaa4662cd0d05d0a897f->leave($__internal_4c2bef7690e309eba1f5845a8c951270c44ab1cc190afaa4662cd0d05d0a897f_prof);

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
        return array (  97 => 35,  90 => 30,  84 => 29,  69 => 18,  63 => 17,  49 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("db_widget_list") }}">Widgets</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="db_widget_see">See</a>*/
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
