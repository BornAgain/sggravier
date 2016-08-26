<?php

/* DataSourceBundle:Default:stp1.html.twig */
class __TwigTemplate_60861af08b274c821c61fc183cc710af68afd958ff84cffb83e86de021ae445b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DataSourceBundle:Default:stp1.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_a6e31ce728cb3839c507666abe5502b7e3c8ad2d1281f1e49f994ac2225172fa = $this->env->getExtension("native_profiler");
        $__internal_a6e31ce728cb3839c507666abe5502b7e3c8ad2d1281f1e49f994ac2225172fa->enter($__internal_a6e31ce728cb3839c507666abe5502b7e3c8ad2d1281f1e49f994ac2225172fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DataSourceBundle:Default:stp1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e31ce728cb3839c507666abe5502b7e3c8ad2d1281f1e49f994ac2225172fa->leave($__internal_a6e31ce728cb3839c507666abe5502b7e3c8ad2d1281f1e49f994ac2225172fa_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_ec6dfdf8169e0e6dca466e5862534f45081e9d1a63baba304cd0dc0c3f0703f5 = $this->env->getExtension("native_profiler");
        $__internal_ec6dfdf8169e0e6dca466e5862534f45081e9d1a63baba304cd0dc0c3f0703f5->enter($__internal_ec6dfdf8169e0e6dca466e5862534f45081e9d1a63baba304cd0dc0c3f0703f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    ";
        
        $__internal_ec6dfdf8169e0e6dca466e5862534f45081e9d1a63baba304cd0dc0c3f0703f5->leave($__internal_ec6dfdf8169e0e6dca466e5862534f45081e9d1a63baba304cd0dc0c3f0703f5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b170a289204ac5f50181a6138acc8b604088080c65a742211d6ddc7dc804931 = $this->env->getExtension("native_profiler");
        $__internal_4b170a289204ac5f50181a6138acc8b604088080c65a742211d6ddc7dc804931->enter($__internal_4b170a289204ac5f50181a6138acc8b604088080c65a742211d6ddc7dc804931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_4b170a289204ac5f50181a6138acc8b604088080c65a742211d6ddc7dc804931->leave($__internal_4b170a289204ac5f50181a6138acc8b604088080c65a742211d6ddc7dc804931_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_84c9f905a85d999b4498ff93f850ce88adbe20906b0d8d43ff707ea8664712ea = $this->env->getExtension("native_profiler");
        $__internal_84c9f905a85d999b4498ff93f850ce88adbe20906b0d8d43ff707ea8664712ea->enter($__internal_84c9f905a85d999b4498ff93f850ce88adbe20906b0d8d43ff707ea8664712ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "  <!-- BEGIN CONTENT BODY -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">                            
                            <div class=\"portlet light bordered\" id=\"form_wizard_1\">                                
                                <div class=\"portlet-body form\">
                                    
                                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "method" => "POST", "id" => "submit_form")));
        echo "  
                                    <div class=\"form-wizard\">
                                            <div class=\"form-body\">
                                                <ul class=\"nav nav-pills nav-justified steps\">
                                                    <li>
                                                        <a href=\"#tab1\" data-toggle=\"tab\" class=\"step\">
                                                            <span class=\"number\"> 1 </span>
                                                            <span class=\"desc\">
                                                                <i class=\"fa fa-check\"></i> General </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab2\" data-toggle=\"tab\" class=\"step\">
                                                            <span class=\"number\"> 2 </span>
                                                            <span class=\"desc\">
                                                                <i class=\"fa fa-check\"></i> Source </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab3\" data-toggle=\"tab\" class=\"step active\">
                                                            <span class=\"number\"> 3 </span>
                                                            <span class=\"desc\">
                                                                <i class=\"fa fa-check\"></i> Définition </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab4\" data-toggle=\"tab\" class=\"step\">
                                                            <span class=\"number\"> 4 </span>
                                                            <span class=\"desc\">
                                                                <i class=\"fa fa-check\"></i> Confirm </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id=\"bar\" class=\"progress progress-striped\" role=\"progressbar\">
                                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 25%;\"></div>
                                                </div>
                                                <div class=\"tab-content\">
                                                    <div class=\"alert alert-danger display-none\">
                                                        <button class=\"close\" data-dismiss=\"alert\"></button> You have some form errors. Please check below. </div>
                                                    <div class=\"alert alert-success display-none\">
                                                        <button class=\"close\" data-dismiss=\"alert\"></button> Your form validation is successful! </div>
                                                    <div class=\"tab-pane active\" id=\"tab1\">                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Title
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">                                                                
                                                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                                                                <span class=\"help-block\"> Provide your title </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Short name
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Short Name")));
        echo "
                                                                <span class=\"help-block\"> Short name. </span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Enabled
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                <div class=\"checkbox-list\">
                                                                    <label>                                                                        
                                                                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo " </label>                                                                    
                                                                </div>
                                                                <div id=\"form_gender_error\"> </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"tab2\">                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Fullname
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                <input type=\"text\" class=\"form-control\" name=\"fullname\" />
                                                                <span class=\"help-block\"> Provide your fullname </span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"tab3\">                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Fullname
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                <input type=\"text\" class=\"form-control\" name=\"fullname\" />
                                                                <span class=\"help-block\"> Provide your fullname </span>
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"tab4\">
                                                        <h3 class=\"block\">Confirm creation</h3>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-offset-3 col-md-9\">
                                                        <a href=\"javascript:;\" class=\"btn default button-previous\">
                                                            <i class=\"fa fa-angle-left\"></i> Back </a>
                                                        <button type=\"submit\" value=\"Send\"  class=\"btn green button-submit\"> Continue
                                                            <i class=\"fa fa-angle-right\"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 138
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END CONTENT BODY -->
";
        
        $__internal_84c9f905a85d999b4498ff93f850ce88adbe20906b0d8d43ff707ea8664712ea->leave($__internal_84c9f905a85d999b4498ff93f850ce88adbe20906b0d8d43ff707ea8664712ea_prof);

    }

    // line 148
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_e3fcafcd93da79c2286f3512499d0dab61069e38b3c7feb0a2d5c822130892f1 = $this->env->getExtension("native_profiler");
        $__internal_e3fcafcd93da79c2286f3512499d0dab61069e38b3c7feb0a2d5c822130892f1->enter($__internal_e3fcafcd93da79c2286f3512499d0dab61069e38b3c7feb0a2d5c822130892f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 149
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_e3fcafcd93da79c2286f3512499d0dab61069e38b3c7feb0a2d5c822130892f1->leave($__internal_e3fcafcd93da79c2286f3512499d0dab61069e38b3c7feb0a2d5c822130892f1_prof);

    }

    // line 157
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_aa0ffc84224df7ad6fab1b2b5cfec38b3061292db882e83ff3a176d5db35dd0a = $this->env->getExtension("native_profiler");
        $__internal_aa0ffc84224df7ad6fab1b2b5cfec38b3061292db882e83ff3a176d5db35dd0a->enter($__internal_aa0ffc84224df7ad6fab1b2b5cfec38b3061292db882e83ff3a176d5db35dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 158
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    ";
        // line 160
        echo "    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_aa0ffc84224df7ad6fab1b2b5cfec38b3061292db882e83ff3a176d5db35dd0a->leave($__internal_aa0ffc84224df7ad6fab1b2b5cfec38b3061292db882e83ff3a176d5db35dd0a_prof);

    }

    public function getTemplateName()
    {
        return "DataSourceBundle:Default:stp1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 160,  268 => 158,  262 => 157,  252 => 153,  248 => 152,  244 => 151,  240 => 150,  237 => 149,  231 => 148,  216 => 138,  164 => 89,  148 => 76,  136 => 67,  86 => 20,  78 => 14,  72 => 13,  63 => 9,  59 => 8,  51 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block titlePage %}*/
/*     {#DATASOURCE <small>Wizard</small>#}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}        */
/*     <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*   <!-- BEGIN CONTENT BODY -->*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">                            */
/*                             <div class="portlet light bordered" id="form_wizard_1">                                */
/*                                 <div class="portlet-body form">*/
/*                                     */
/*                                     {{ form_start(form, { 'attr': {'class': 'form-horizontal', 'method': 'POST', 'id': 'submit_form' } }) }}  */
/*                                     <div class="form-wizard">*/
/*                                             <div class="form-body">*/
/*                                                 <ul class="nav nav-pills nav-justified steps">*/
/*                                                     <li>*/
/*                                                         <a href="#tab1" data-toggle="tab" class="step">*/
/*                                                             <span class="number"> 1 </span>*/
/*                                                             <span class="desc">*/
/*                                                                 <i class="fa fa-check"></i> General </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         <a href="#tab2" data-toggle="tab" class="step">*/
/*                                                             <span class="number"> 2 </span>*/
/*                                                             <span class="desc">*/
/*                                                                 <i class="fa fa-check"></i> Source </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         <a href="#tab3" data-toggle="tab" class="step active">*/
/*                                                             <span class="number"> 3 </span>*/
/*                                                             <span class="desc">*/
/*                                                                 <i class="fa fa-check"></i> Définition </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         <a href="#tab4" data-toggle="tab" class="step">*/
/*                                                             <span class="number"> 4 </span>*/
/*                                                             <span class="desc">*/
/*                                                                 <i class="fa fa-check"></i> Confirm </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 </ul>*/
/*                                                 <div id="bar" class="progress progress-striped" role="progressbar">*/
/*                                                     <div class="progress-bar progress-bar-success" style="width: 25%;"></div>*/
/*                                                 </div>*/
/*                                                 <div class="tab-content">*/
/*                                                     <div class="alert alert-danger display-none">*/
/*                                                         <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>*/
/*                                                     <div class="alert alert-success display-none">*/
/*                                                         <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>*/
/*                                                     <div class="tab-pane active" id="tab1">                                                        */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Title*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">                                                                */
/*                                                                 {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Title'}}) }}*/
/*                                                                 <span class="help-block"> Provide your title </span>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Short name*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder': 'Short Name'}}) }}*/
/*                                                                 <span class="help-block"> Short name. </span>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         */
/*                                                         */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Enabled*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <div class="checkbox-list">*/
/*                                                                     <label>                                                                        */
/*                                                                         {{ form_widget(form.enabled)}} </label>                                                                    */
/*                                                                 </div>*/
/*                                                                 <div id="form_gender_error"> </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         */
/*                                                         */
/*                                                         */
/*                                                     </div>*/
/*                                                     <div class="tab-pane" id="tab2">                                                        */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Fullname*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <input type="text" class="form-control" name="fullname" />*/
/*                                                                 <span class="help-block"> Provide your fullname </span>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         */
/*                                                     </div>*/
/*                                                     <div class="tab-pane" id="tab3">                                                        */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Fullname*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <input type="text" class="form-control" name="fullname" />*/
/*                                                                 <span class="help-block"> Provide your fullname </span>*/
/*                                                             </div>*/
/*                                                         </div>                                                       */
/*                                                     </div>*/
/*                                                     <div class="tab-pane" id="tab4">*/
/*                                                         <h3 class="block">Confirm creation</h3>                                                        */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-actions">*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-md-offset-3 col-md-9">*/
/*                                                         <a href="javascript:;" class="btn default button-previous">*/
/*                                                             <i class="fa fa-angle-left"></i> Back </a>*/
/*                                                         <button type="submit" value="Send"  class="btn green button-submit"> Continue*/
/*                                                             <i class="fa fa-angle-right"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         {{ form_end(form) }}*/
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 <!-- END CONTENT BODY -->*/
/* {% endblock %}*/
/* */
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
/*     {#<script src="{{ asset('assets/pages/scripts/form-wizard.min.js') }}" type="text/javascript"></script>    #}*/
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %} */
/* */
/* */
/* */
