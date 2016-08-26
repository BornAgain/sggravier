<?php

/* @Admin/Users/login_1.html.twig */
class __TwigTemplate_14771c8bb869fa3982982c6ead5cf4703a68918493c1e38a5c65a0551dd468d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Users/login_1.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'plg_javascripts' => array($this, 'block_plg_javascripts'),
            'script_javascripts' => array($this, 'block_script_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_042aee90e121996823148a1489935fb4c48e509d7cd7dfe617151590f45c7716 = $this->env->getExtension("native_profiler");
        $__internal_042aee90e121996823148a1489935fb4c48e509d7cd7dfe617151590f45c7716->enter($__internal_042aee90e121996823148a1489935fb4c48e509d7cd7dfe617151590f45c7716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Users/login_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042aee90e121996823148a1489935fb4c48e509d7cd7dfe617151590f45c7716->leave($__internal_042aee90e121996823148a1489935fb4c48e509d7cd7dfe617151590f45c7716_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cecd5da8cc6e9288468f52a30c64025348ff2eab60f8478cf49c352ed152cc0 = $this->env->getExtension("native_profiler");
        $__internal_6cecd5da8cc6e9288468f52a30c64025348ff2eab60f8478cf49c352ed152cc0->enter($__internal_6cecd5da8cc6e9288468f52a30c64025348ff2eab60f8478cf49c352ed152cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        
        $__internal_6cecd5da8cc6e9288468f52a30c64025348ff2eab60f8478cf49c352ed152cc0->leave($__internal_6cecd5da8cc6e9288468f52a30c64025348ff2eab60f8478cf49c352ed152cc0_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_4172b8e9b272a359353adcdb919e963a6ae1ce4625af181c8c0dea7f2dc9a7d1 = $this->env->getExtension("native_profiler");
        $__internal_4172b8e9b272a359353adcdb919e963a6ae1ce4625af181c8c0dea7f2dc9a7d1->enter($__internal_4172b8e9b272a359353adcdb919e963a6ae1ce4625af181c8c0dea7f2dc9a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 10
        echo "    <li>
        <a href=\"index.html\">Home</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <span>User</span>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Add</b>
    </li>
";
        
        $__internal_4172b8e9b272a359353adcdb919e963a6ae1ce4625af181c8c0dea7f2dc9a7d1->leave($__internal_4172b8e9b272a359353adcdb919e963a6ae1ce4625af181c8c0dea7f2dc9a7d1_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2adb4fa3b9a1aaa4d535926c545bba31ec8afcbcbfb52ebd840e7fb0221971 = $this->env->getExtension("native_profiler");
        $__internal_9b2adb4fa3b9a1aaa4d535926c545bba31ec8afcbcbfb52ebd840e7fb0221971->enter($__internal_9b2adb4fa3b9a1aaa4d535926c545bba31ec8afcbcbfb52ebd840e7fb0221971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h3 class=\"box-title\"></h3>
        </div><!-- /.box-header -->
        
  ";
        // line 30
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 31
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 33
        echo "
  ";
        // line 35
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

        
";
        
        $__internal_9b2adb4fa3b9a1aaa4d535926c545bba31ec8afcbcbfb52ebd840e7fb0221971->leave($__internal_9b2adb4fa3b9a1aaa4d535926c545bba31ec8afcbcbfb52ebd840e7fb0221971_prof);

    }

    // line 48
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_df9fef826197bcc406e84f7114195bb91d5ed65b9a925ea1133d7acfeb305e8c = $this->env->getExtension("native_profiler");
        $__internal_df9fef826197bcc406e84f7114195bb91d5ed65b9a925ea1133d7acfeb305e8c->enter($__internal_df9fef826197bcc406e84f7114195bb91d5ed65b9a925ea1133d7acfeb305e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 49
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_df9fef826197bcc406e84f7114195bb91d5ed65b9a925ea1133d7acfeb305e8c->leave($__internal_df9fef826197bcc406e84f7114195bb91d5ed65b9a925ea1133d7acfeb305e8c_prof);

    }

    // line 57
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_a0b42855d09b0496cae04be0ec21e5649eb08dddee9b0389d84106938eb0a46d = $this->env->getExtension("native_profiler");
        $__internal_a0b42855d09b0496cae04be0ec21e5649eb08dddee9b0389d84106938eb0a46d->enter($__internal_a0b42855d09b0496cae04be0ec21e5649eb08dddee9b0389d84106938eb0a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 58
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/form-wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_a0b42855d09b0496cae04be0ec21e5649eb08dddee9b0389d84106938eb0a46d->leave($__internal_a0b42855d09b0496cae04be0ec21e5649eb08dddee9b0389d84106938eb0a46d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Users/login_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  168 => 58,  162 => 57,  152 => 53,  148 => 52,  144 => 51,  140 => 50,  137 => 49,  131 => 48,  114 => 37,  108 => 35,  105 => 33,  99 => 31,  96 => 30,  89 => 24,  83 => 23,  65 => 10,  59 => 9,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />*/
/*     <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Home</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <span>User</span>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Add</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title"></h3>*/
/*         </div><!-- /.box-header -->*/
/*         */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/*         */
/* {% endblock %}*/
/* */
/* {% block plg_javascripts %}*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*     <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>*/
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %}*/
/* */
/* {% block script_javascripts %}*/
/*     <!-- BEGIN PAGE LEVEL PLUGINS -->*/
/*     <script src="{{ asset('assets/pages/scripts/form-wizard.min.js') }}" type="text/javascript"></script>    */
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %} */
/* */
