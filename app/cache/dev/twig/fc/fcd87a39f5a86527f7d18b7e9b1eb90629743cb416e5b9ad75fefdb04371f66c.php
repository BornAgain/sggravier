<?php

/* AdminBundle:Users:login_1.html.twig */
class __TwigTemplate_0a53bf541c5187d29f38175e4b3860157161b6c5140b3460d527c4b8e0f26d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:login_1.html.twig", 1);
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
        $__internal_b6831861ffef89deaaba99738dd8e69cdf108926eea7d699c79cb8a4c5cc426c = $this->env->getExtension("native_profiler");
        $__internal_b6831861ffef89deaaba99738dd8e69cdf108926eea7d699c79cb8a4c5cc426c->enter($__internal_b6831861ffef89deaaba99738dd8e69cdf108926eea7d699c79cb8a4c5cc426c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:login_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6831861ffef89deaaba99738dd8e69cdf108926eea7d699c79cb8a4c5cc426c->leave($__internal_b6831861ffef89deaaba99738dd8e69cdf108926eea7d699c79cb8a4c5cc426c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cae0539cd7a26b5bec4be090e19e5a130aeb7b1482ca8e0a435386192eddaf12 = $this->env->getExtension("native_profiler");
        $__internal_cae0539cd7a26b5bec4be090e19e5a130aeb7b1482ca8e0a435386192eddaf12->enter($__internal_cae0539cd7a26b5bec4be090e19e5a130aeb7b1482ca8e0a435386192eddaf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        
        $__internal_cae0539cd7a26b5bec4be090e19e5a130aeb7b1482ca8e0a435386192eddaf12->leave($__internal_cae0539cd7a26b5bec4be090e19e5a130aeb7b1482ca8e0a435386192eddaf12_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1af273047f5699baa292f63b3725ed2d1584758fc2857a48aef4ff605fcb7c34 = $this->env->getExtension("native_profiler");
        $__internal_1af273047f5699baa292f63b3725ed2d1584758fc2857a48aef4ff605fcb7c34->enter($__internal_1af273047f5699baa292f63b3725ed2d1584758fc2857a48aef4ff605fcb7c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_1af273047f5699baa292f63b3725ed2d1584758fc2857a48aef4ff605fcb7c34->leave($__internal_1af273047f5699baa292f63b3725ed2d1584758fc2857a48aef4ff605fcb7c34_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_840b8d16ff2f4cd3899bd98540d0f49763165d3b131c009b277359c872f4e1b2 = $this->env->getExtension("native_profiler");
        $__internal_840b8d16ff2f4cd3899bd98540d0f49763165d3b131c009b277359c872f4e1b2->enter($__internal_840b8d16ff2f4cd3899bd98540d0f49763165d3b131c009b277359c872f4e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_840b8d16ff2f4cd3899bd98540d0f49763165d3b131c009b277359c872f4e1b2->leave($__internal_840b8d16ff2f4cd3899bd98540d0f49763165d3b131c009b277359c872f4e1b2_prof);

    }

    // line 48
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_c95f87c5286ee842d2c3e348260feb61548a4de319fc92f3ec311defeb97d0f3 = $this->env->getExtension("native_profiler");
        $__internal_c95f87c5286ee842d2c3e348260feb61548a4de319fc92f3ec311defeb97d0f3->enter($__internal_c95f87c5286ee842d2c3e348260feb61548a4de319fc92f3ec311defeb97d0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_c95f87c5286ee842d2c3e348260feb61548a4de319fc92f3ec311defeb97d0f3->leave($__internal_c95f87c5286ee842d2c3e348260feb61548a4de319fc92f3ec311defeb97d0f3_prof);

    }

    // line 57
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_7ead046c7e8f8f46f8860c3abdb19a8d860bac2d6fc8b2e6998b48f0f114d009 = $this->env->getExtension("native_profiler");
        $__internal_7ead046c7e8f8f46f8860c3abdb19a8d860bac2d6fc8b2e6998b48f0f114d009->enter($__internal_7ead046c7e8f8f46f8860c3abdb19a8d860bac2d6fc8b2e6998b48f0f114d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 58
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/form-wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_7ead046c7e8f8f46f8860c3abdb19a8d860bac2d6fc8b2e6998b48f0f114d009->leave($__internal_7ead046c7e8f8f46f8860c3abdb19a8d860bac2d6fc8b2e6998b48f0f114d009_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:login_1.html.twig";
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
