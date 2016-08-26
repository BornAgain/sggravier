<?php

/* @DataSource/Default/stp2.html.twig */
class __TwigTemplate_7b0b24593a767e245a0cd8fefaaea586c1a91cace7583d4e54b6599cebed7e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DataSource/Default/stp2.html.twig", 1);
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
        $__internal_2543a86cb1aa9703b8f45d98043bbdd3b97a638b9dbe01d7fdd29f562faf37e7 = $this->env->getExtension("native_profiler");
        $__internal_2543a86cb1aa9703b8f45d98043bbdd3b97a638b9dbe01d7fdd29f562faf37e7->enter($__internal_2543a86cb1aa9703b8f45d98043bbdd3b97a638b9dbe01d7fdd29f562faf37e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DataSource/Default/stp2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2543a86cb1aa9703b8f45d98043bbdd3b97a638b9dbe01d7fdd29f562faf37e7->leave($__internal_2543a86cb1aa9703b8f45d98043bbdd3b97a638b9dbe01d7fdd29f562faf37e7_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_ba6821e522fe6b97da7fffd0781209b772105db00f8c1802921b450984ed2699 = $this->env->getExtension("native_profiler");
        $__internal_ba6821e522fe6b97da7fffd0781209b772105db00f8c1802921b450984ed2699->enter($__internal_ba6821e522fe6b97da7fffd0781209b772105db00f8c1802921b450984ed2699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    ";
        
        $__internal_ba6821e522fe6b97da7fffd0781209b772105db00f8c1802921b450984ed2699->leave($__internal_ba6821e522fe6b97da7fffd0781209b772105db00f8c1802921b450984ed2699_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_930b7dcc1a04e915036666cffed7de6b022ba976e42984ddc4c2918ebf874f34 = $this->env->getExtension("native_profiler");
        $__internal_930b7dcc1a04e915036666cffed7de6b022ba976e42984ddc4c2918ebf874f34->enter($__internal_930b7dcc1a04e915036666cffed7de6b022ba976e42984ddc4c2918ebf874f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_930b7dcc1a04e915036666cffed7de6b022ba976e42984ddc4c2918ebf874f34->leave($__internal_930b7dcc1a04e915036666cffed7de6b022ba976e42984ddc4c2918ebf874f34_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3d9ef9cbff32d4f4b8f3a457b14160d2b332300d75f2427d9c97ac427fd54fb = $this->env->getExtension("native_profiler");
        $__internal_f3d9ef9cbff32d4f4b8f3a457b14160d2b332300d75f2427d9c97ac427fd54fb->enter($__internal_f3d9ef9cbff32d4f4b8f3a457b14160d2b332300d75f2427d9c97ac427fd54fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 50%;\"></div>
                                                </div>
                                                <div class=\"tab-content\">
                                                    <div class=\"alert alert-danger display-none\">
                                                        <button class=\"close\" data-dismiss=\"alert\"></button> You have some form errors. Please check below. </div>
                                                    <div class=\"alert alert-success display-none\">
                                                        <button class=\"close\" data-dismiss=\"alert\"></button> Your form validation is successful! </div>
                                                    <div class=\"tab-pane\" id=\"tab1\">                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Title
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">                                                                
                                                                
                                                                <span class=\"help-block\"> Provide your title </span>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">Short name
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                
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
                                                                        
                                                                </div>
                                                                <div id=\"form_gender_error\"> </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class=\"tab-pane active\" id=\"tab2\">                                                        
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-3\">File
                                                                <span class=\"required\"> * </span>
                                                            </label>
                                                            <div class=\"col-md-4\">
                                                                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
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
        
        $__internal_f3d9ef9cbff32d4f4b8f3a457b14160d2b332300d75f2427d9c97ac427fd54fb->leave($__internal_f3d9ef9cbff32d4f4b8f3a457b14160d2b332300d75f2427d9c97ac427fd54fb_prof);

    }

    // line 148
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_a996340214f0ae00c36b419451d658e8f5cc563245cab8ea9d94e5d4f161d9f6 = $this->env->getExtension("native_profiler");
        $__internal_a996340214f0ae00c36b419451d658e8f5cc563245cab8ea9d94e5d4f161d9f6->enter($__internal_a996340214f0ae00c36b419451d658e8f5cc563245cab8ea9d94e5d4f161d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

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
        
        $__internal_a996340214f0ae00c36b419451d658e8f5cc563245cab8ea9d94e5d4f161d9f6->leave($__internal_a996340214f0ae00c36b419451d658e8f5cc563245cab8ea9d94e5d4f161d9f6_prof);

    }

    // line 157
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_2354df2c882111cef4a05801458dff5404875e16509fbcdbd33eee543291e808 = $this->env->getExtension("native_profiler");
        $__internal_2354df2c882111cef4a05801458dff5404875e16509fbcdbd33eee543291e808->enter($__internal_2354df2c882111cef4a05801458dff5404875e16509fbcdbd33eee543291e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 158
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    ";
        // line 160
        echo "    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_2354df2c882111cef4a05801458dff5404875e16509fbcdbd33eee543291e808->leave($__internal_2354df2c882111cef4a05801458dff5404875e16509fbcdbd33eee543291e808_prof);

    }

    public function getTemplateName()
    {
        return "@DataSource/Default/stp2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 160,  262 => 158,  256 => 157,  246 => 153,  242 => 152,  238 => 151,  234 => 150,  231 => 149,  225 => 148,  210 => 138,  173 => 104,  86 => 20,  78 => 14,  72 => 13,  63 => 9,  59 => 8,  51 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
/*                                                     <div class="progress-bar progress-bar-success" style="width: 50%;"></div>*/
/*                                                 </div>*/
/*                                                 <div class="tab-content">*/
/*                                                     <div class="alert alert-danger display-none">*/
/*                                                         <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>*/
/*                                                     <div class="alert alert-success display-none">*/
/*                                                         <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>*/
/*                                                     <div class="tab-pane" id="tab1">                                                        */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Title*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">                                                                */
/*                                                                 */
/*                                                                 <span class="help-block"> Provide your title </span>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Short name*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 */
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
/*                                                                         */
/*                                                                 </div>*/
/*                                                                 <div id="form_gender_error"> </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         */
/*                                                         */
/*                                                         */
/*                                                     </div>*/
/*                                                     <div class="tab-pane active" id="tab2">                                                        */
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">File*/
/*                                                                 <span class="required"> * </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 {{ form_widget(form.file, {'attr': {'class': 'form-control', 'placeholder': 'Title'}}) }}*/
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
