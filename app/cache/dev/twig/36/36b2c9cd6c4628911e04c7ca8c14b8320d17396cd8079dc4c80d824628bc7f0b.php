<?php

/* AdminBundle:Users:login.html.twig */
class __TwigTemplate_1291322125cee5b77b2a66c9e01c3a052db9002f8a9daf1d212e3eae99eee1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Users:login.html.twig", 1);
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
        $__internal_f45985dce438246d42bb7a8d10c0737a17eb0d1b9db6150d59db2cb2f78bac5c = $this->env->getExtension("native_profiler");
        $__internal_f45985dce438246d42bb7a8d10c0737a17eb0d1b9db6150d59db2cb2f78bac5c->enter($__internal_f45985dce438246d42bb7a8d10c0737a17eb0d1b9db6150d59db2cb2f78bac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Users:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45985dce438246d42bb7a8d10c0737a17eb0d1b9db6150d59db2cb2f78bac5c->leave($__internal_f45985dce438246d42bb7a8d10c0737a17eb0d1b9db6150d59db2cb2f78bac5c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27dfd978b4348c7415d6a95c6f280ecf5aa4f56afd445673d47c5eae4998a73a = $this->env->getExtension("native_profiler");
        $__internal_27dfd978b4348c7415d6a95c6f280ecf5aa4f56afd445673d47c5eae4998a73a->enter($__internal_27dfd978b4348c7415d6a95c6f280ecf5aa4f56afd445673d47c5eae4998a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

";
        
        $__internal_27dfd978b4348c7415d6a95c6f280ecf5aa4f56afd445673d47c5eae4998a73a->leave($__internal_27dfd978b4348c7415d6a95c6f280ecf5aa4f56afd445673d47c5eae4998a73a_prof);

    }

    // line 9
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f8ef4c24e25593aea3a04041f6c2f6fbf055c63ff7ff09e9b1b7371ec870a5e7 = $this->env->getExtension("native_profiler");
        $__internal_f8ef4c24e25593aea3a04041f6c2f6fbf055c63ff7ff09e9b1b7371ec870a5e7->enter($__internal_f8ef4c24e25593aea3a04041f6c2f6fbf055c63ff7ff09e9b1b7371ec870a5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        <span>Add</span>
    </li>
";
        
        $__internal_f8ef4c24e25593aea3a04041f6c2f6fbf055c63ff7ff09e9b1b7371ec870a5e7->leave($__internal_f8ef4c24e25593aea3a04041f6c2f6fbf055c63ff7ff09e9b1b7371ec870a5e7_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_889cc686e66aa29434365ebb5b2609599aaf8b4dfe7ff6c858406eb809f2437e = $this->env->getExtension("native_profiler");
        $__internal_889cc686e66aa29434365ebb5b2609599aaf8b4dfe7ff6c858406eb809f2437e->enter($__internal_889cc686e66aa29434365ebb5b2609599aaf8b4dfe7ff6c858406eb809f2437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_889cc686e66aa29434365ebb5b2609599aaf8b4dfe7ff6c858406eb809f2437e->leave($__internal_889cc686e66aa29434365ebb5b2609599aaf8b4dfe7ff6c858406eb809f2437e_prof);

    }

    // line 48
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_023fd9a42d43b515ef0382666bc0bf8be4cbbcfdc7705c58cfdae6d0df103df7 = $this->env->getExtension("native_profiler");
        $__internal_023fd9a42d43b515ef0382666bc0bf8be4cbbcfdc7705c58cfdae6d0df103df7->enter($__internal_023fd9a42d43b515ef0382666bc0bf8be4cbbcfdc7705c58cfdae6d0df103df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_023fd9a42d43b515ef0382666bc0bf8be4cbbcfdc7705c58cfdae6d0df103df7->leave($__internal_023fd9a42d43b515ef0382666bc0bf8be4cbbcfdc7705c58cfdae6d0df103df7_prof);

    }

    // line 57
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_261d2e8b88707a45545270428ea4ce2c2a99f0fcc455544d35d1514608246a27 = $this->env->getExtension("native_profiler");
        $__internal_261d2e8b88707a45545270428ea4ce2c2a99f0fcc455544d35d1514608246a27->enter($__internal_261d2e8b88707a45545270428ea4ce2c2a99f0fcc455544d35d1514608246a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 58
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/form-wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_261d2e8b88707a45545270428ea4ce2c2a99f0fcc455544d35d1514608246a27->leave($__internal_261d2e8b88707a45545270428ea4ce2c2a99f0fcc455544d35d1514608246a27_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Users:login.html.twig";
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
/*         <span>Add</span>*/
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
