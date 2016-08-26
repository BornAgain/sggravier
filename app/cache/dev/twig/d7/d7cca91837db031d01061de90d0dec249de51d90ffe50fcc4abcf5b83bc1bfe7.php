<?php

/* ::layout.html.twig */
class __TwigTemplate_26ac1c5eedea5bb10bf1e892c236eef0eac7a092ce516b95ab0a521ef4ed9f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'plg_javascripts' => array($this, 'block_plg_javascripts'),
            'script_javascripts' => array($this, 'block_script_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b075ad380d24e1adba2a06cd4ee34a250e61f9b99a58b953609a8c8dcaa447c = $this->env->getExtension("native_profiler");
        $__internal_9b075ad380d24e1adba2a06cd4ee34a250e61f9b99a58b953609a8c8dcaa447c->enter($__internal_9b075ad380d24e1adba2a06cd4ee34a250e61f9b99a58b953609a8c8dcaa447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js') }}\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js') }}\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>SIGMAREPORTS</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/css/login-5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />

    ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/themes/grey.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
<!-- END HEAD -->
<body class=\" login\">
    ";
        // line 54
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 57
        echo "
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 69
        $this->displayBlock('plg_javascripts', $context, $blocks);
        // line 70
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/login-5.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        // line 81
        $this->displayBlock('script_javascripts', $context, $blocks);
        echo " 
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>

";
        
        $__internal_9b075ad380d24e1adba2a06cd4ee34a250e61f9b99a58b953609a8c8dcaa447c->leave($__internal_9b075ad380d24e1adba2a06cd4ee34a250e61f9b99a58b953609a8c8dcaa447c_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ffd8f1043fa2d9ad1170a53ec510965644de261f45c43488dfd1ad2063ed5cd = $this->env->getExtension("native_profiler");
        $__internal_0ffd8f1043fa2d9ad1170a53ec510965644de261f45c43488dfd1ad2063ed5cd->enter($__internal_0ffd8f1043fa2d9ad1170a53ec510965644de261f45c43488dfd1ad2063ed5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ffd8f1043fa2d9ad1170a53ec510965644de261f45c43488dfd1ad2063ed5cd->leave($__internal_0ffd8f1043fa2d9ad1170a53ec510965644de261f45c43488dfd1ad2063ed5cd_prof);

    }

    // line 54
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4fc9f9a1aae6e7ec357322c2b5065b9a79d58f086757567a0848054630a36f5 = $this->env->getExtension("native_profiler");
        $__internal_a4fc9f9a1aae6e7ec357322c2b5065b9a79d58f086757567a0848054630a36f5->enter($__internal_a4fc9f9a1aae6e7ec357322c2b5065b9a79d58f086757567a0848054630a36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 55
        echo "        <p></p>
    ";
        
        $__internal_a4fc9f9a1aae6e7ec357322c2b5065b9a79d58f086757567a0848054630a36f5->leave($__internal_a4fc9f9a1aae6e7ec357322c2b5065b9a79d58f086757567a0848054630a36f5_prof);

    }

    // line 69
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_6cd06d0c87ae303009298635e9b03727e710d68c997edb4b038a8f9f837493ff = $this->env->getExtension("native_profiler");
        $__internal_6cd06d0c87ae303009298635e9b03727e710d68c997edb4b038a8f9f837493ff->enter($__internal_6cd06d0c87ae303009298635e9b03727e710d68c997edb4b038a8f9f837493ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        
        $__internal_6cd06d0c87ae303009298635e9b03727e710d68c997edb4b038a8f9f837493ff->leave($__internal_6cd06d0c87ae303009298635e9b03727e710d68c997edb4b038a8f9f837493ff_prof);

    }

    // line 81
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_eaa1295929291814e66bbe0a64c4d24859767da6a002034c43c11f605ee4434b = $this->env->getExtension("native_profiler");
        $__internal_eaa1295929291814e66bbe0a64c4d24859767da6a002034c43c11f605ee4434b->enter($__internal_eaa1295929291814e66bbe0a64c4d24859767da6a002034c43c11f605ee4434b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        
        $__internal_eaa1295929291814e66bbe0a64c4d24859767da6a002034c43c11f605ee4434b->leave($__internal_eaa1295929291814e66bbe0a64c4d24859767da6a002034c43c11f605ee4434b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 81,  247 => 69,  239 => 55,  233 => 54,  222 => 40,  209 => 86,  205 => 85,  201 => 84,  195 => 81,  190 => 79,  184 => 76,  178 => 73,  174 => 72,  170 => 71,  165 => 70,  163 => 69,  157 => 66,  153 => 65,  149 => 64,  145 => 63,  141 => 62,  137 => 61,  133 => 60,  129 => 59,  125 => 57,  123 => 54,  115 => 49,  111 => 48,  107 => 47,  101 => 44,  97 => 43,  93 => 41,  91 => 40,  86 => 38,  82 => 37,  78 => 36,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- */
/* Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5*/
/* Version: 4.5.1*/
/* Author: KeenThemes*/
/* Website: http://www.keenthemes.com/*/
/* Contact: support@keenthemes.com*/
/* Follow: www.twitter.com/keenthemes*/
/* Like: www.facebook.com/keenthemes*/
/* Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes*/
/* License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.*/
/* -->*/
/* <!--[if IE 8]> <html lang="en" class="ie8 no-js') }}"> <![endif]-->*/
/* <!--[if IE 9]> <html lang="en" class="ie9 no-js') }}"> <![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en">*/
/*     <!--<![endif]-->*/
/*     <!-- BEGIN HEAD -->*/
/* */
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title>SIGMAREPORTS</title>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1" name="viewport" />*/
/*         <meta content="" name="description" />*/
/*         <meta content="" name="author" />*/
/*         <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*         <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <!-- END GLOBAL MANDATORY STYLES -->*/
/*         <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*         <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*         <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*         <link href="{{ asset('assets/pages/css/login-5.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/*     <!-- BEGIN THEME GLOBAL STYLES -->*/
/*     <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*     <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!-- END THEME GLOBAL STYLES -->*/
/*     <!-- BEGIN THEME LAYOUT STYLES -->*/
/*     <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/layouts/layout/css/themes/grey.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />*/
/*     <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!-- END THEME LAYOUT STYLES -->*/
/*     <link rel="shortcut icon" href="favicon.ico" /> </head>*/
/* <!-- END HEAD -->*/
/* <body class=" login">*/
/*     {% block fos_user_content %}*/
/*         <p></p>*/
/*     {% endblock %}*/
/* */
/*     <!-- BEGIN CORE PLUGINS -->*/
/*     <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>*/
/*     <!-- END CORE PLUGINS -->*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/* {% block plg_javascripts %}{% endblock %}*/
/* <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>*/
/* <!-- END PAGE LEVEL PLUGINS -->*/
/* <!-- BEGIN THEME GLOBAL SCRIPTS -->*/
/* <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>*/
/* <!-- END THEME GLOBAL SCRIPTS -->*/
/* <!-- BEGIN PAGE LEVEL SCRIPTS -->*/
/* <script src="{{ asset('assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>*/
/* */
/* {% block script_javascripts %}{% endblock %} */
/* <!-- END PAGE LEVEL SCRIPTS -->*/
/* <!-- BEGIN THEME LAYOUT SCRIPTS -->*/
/* <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>*/
/* <!-- END THEME LAYOUT SCRIPTS -->*/
/* </body>*/
/* </html>*/
/* */
/* */
