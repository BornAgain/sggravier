<?php

/* DataSourceBundle:Default:add.html.twig */
class __TwigTemplate_3a52592c1c30dec84e2854b9afee3d10cd95539d05b1dc8ca9b499c4019d5371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DataSourceBundle:Default:add.html.twig", 1);
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
        $__internal_2d0714a71e9b9fb4e97fe5ac141964fc6c4dad38ae43445e19cd659a378b851b = $this->env->getExtension("native_profiler");
        $__internal_2d0714a71e9b9fb4e97fe5ac141964fc6c4dad38ae43445e19cd659a378b851b->enter($__internal_2d0714a71e9b9fb4e97fe5ac141964fc6c4dad38ae43445e19cd659a378b851b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DataSourceBundle:Default:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0714a71e9b9fb4e97fe5ac141964fc6c4dad38ae43445e19cd659a378b851b->leave($__internal_2d0714a71e9b9fb4e97fe5ac141964fc6c4dad38ae43445e19cd659a378b851b_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_a2aedba52bcd8bd573d1d48eb603196e424b6813dde075452ae96153d653648f = $this->env->getExtension("native_profiler");
        $__internal_a2aedba52bcd8bd573d1d48eb603196e424b6813dde075452ae96153d653648f->enter($__internal_a2aedba52bcd8bd573d1d48eb603196e424b6813dde075452ae96153d653648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    ";
        
        $__internal_a2aedba52bcd8bd573d1d48eb603196e424b6813dde075452ae96153d653648f->leave($__internal_a2aedba52bcd8bd573d1d48eb603196e424b6813dde075452ae96153d653648f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50e4c1d06bac69a76b6375ff46b0579181870b98399a47e9ddfb8b00863ee843 = $this->env->getExtension("native_profiler");
        $__internal_50e4c1d06bac69a76b6375ff46b0579181870b98399a47e9ddfb8b00863ee843->enter($__internal_50e4c1d06bac69a76b6375ff46b0579181870b98399a47e9ddfb8b00863ee843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_50e4c1d06bac69a76b6375ff46b0579181870b98399a47e9ddfb8b00863ee843->leave($__internal_50e4c1d06bac69a76b6375ff46b0579181870b98399a47e9ddfb8b00863ee843_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_66862dc8dd948e3f7e785f0ba1d52d7997070ab65d6b003d5827432046d7a8c6 = $this->env->getExtension("native_profiler");
        $__internal_66862dc8dd948e3f7e785f0ba1d52d7997070ab65d6b003d5827432046d7a8c6->enter($__internal_66862dc8dd948e3f7e785f0ba1d52d7997070ab65d6b003d5827432046d7a8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "  <!-- BEGIN CONTENT BODY -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">                            
                            <div class=\"portlet light bordered\" id=\"form_wizard_1\">                                
                                <div class=\"portlet-body form\">
                                    <form action=\"#\" class=\"form-horizontal\" id=\"submit_form\" method=\"POST\">
                                    ";
        // line 21
        echo "                                        <div class=\"form-wizard\">
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
                                                    <div class=\"progress-bar progress-bar-success\"> </div>
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
                                                                        <input type=\"checkbox\" name=\"enabled\" value=\"1\" data-title=\"Enable\" />
                                                                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo " Enabled </label>                                                                    
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
                                                        ";
        // line 211
        echo "                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-offset-3 col-md-9\">
                                                        <a href=\"javascript:;\" class=\"btn default button-previous\">
                                                            <i class=\"fa fa-angle-left\"></i> Back </a>
                                                        <a href=\"javascript:;\" class=\"btn btn-outline green button-next\"> Continue
                                                            <i class=\"fa fa-angle-right\"></i>
                                                        </a>
                                                        <a href=\"javascript:;\" class=\"btn green button-submit\"> Submit
                                                            <i class=\"fa fa-check\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 230
        echo "                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END CONTENT BODY -->
";
        
        $__internal_66862dc8dd948e3f7e785f0ba1d52d7997070ab65d6b003d5827432046d7a8c6->leave($__internal_66862dc8dd948e3f7e785f0ba1d52d7997070ab65d6b003d5827432046d7a8c6_prof);

    }

    // line 239
    public function block_plg_javascripts($context, array $blocks = array())
    {
        $__internal_02f66c5e5dae9f24aff28f8dc316769845b5b20b8a771e45e4866231c26439ef = $this->env->getExtension("native_profiler");
        $__internal_02f66c5e5dae9f24aff28f8dc316769845b5b20b8a771e45e4866231c26439ef->enter($__internal_02f66c5e5dae9f24aff28f8dc316769845b5b20b8a771e45e4866231c26439ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plg_javascripts"));

        // line 240
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_02f66c5e5dae9f24aff28f8dc316769845b5b20b8a771e45e4866231c26439ef->leave($__internal_02f66c5e5dae9f24aff28f8dc316769845b5b20b8a771e45e4866231c26439ef_prof);

    }

    // line 248
    public function block_script_javascripts($context, array $blocks = array())
    {
        $__internal_b3a059e676167e3e28eb1c7396c3d83997e495b16994b31af55a70a97d789fcf = $this->env->getExtension("native_profiler");
        $__internal_b3a059e676167e3e28eb1c7396c3d83997e495b16994b31af55a70a97d789fcf->enter($__internal_b3a059e676167e3e28eb1c7396c3d83997e495b16994b31af55a70a97d789fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_javascripts"));

        // line 249
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/pages/scripts/form-wizard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_b3a059e676167e3e28eb1c7396c3d83997e495b16994b31af55a70a97d789fcf->leave($__internal_b3a059e676167e3e28eb1c7396c3d83997e495b16994b31af55a70a97d789fcf_prof);

    }

    public function getTemplateName()
    {
        return "DataSourceBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 250,  270 => 249,  264 => 248,  254 => 244,  250 => 243,  246 => 242,  242 => 241,  239 => 240,  233 => 239,  220 => 230,  200 => 211,  163 => 90,  146 => 76,  134 => 67,  86 => 21,  78 => 14,  72 => 13,  63 => 9,  59 => 8,  51 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
/*                                     <form action="#" class="form-horizontal" id="submit_form" method="POST">*/
/*                                     {#{{ form_start(form, {'method': 'POST','class': 'form-horizontal'}) }}#}*/
/*                                         <div class="form-wizard">*/
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
/*                                                     <div class="progress-bar progress-bar-success"> </div>*/
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
/*                                                                     <label>*/
/*                                                                         <input type="checkbox" name="enabled" value="1" data-title="Enable" />*/
/*                                                                         {{ form_widget(form.enabled)}} Enabled </label>                                                                    */
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
/*                                                         <h3 class="block">Confirm creation</h3>*/
/*                                                         {#<h4 class="form-section">Account</h4>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Title:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="datasource[title]  "> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Short Name:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="email"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <h4 class="form-section">Profile</h4>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Fullname:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="fullname"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Gender:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="gender"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Phone:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="phone"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Address:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="address"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">City/Town:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="city"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Country:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="country"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Remarks:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="remarks"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <h4 class="form-section">Billing</h4>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Card Holder Name:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="card_name"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Card Number:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="card_number"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">CVC:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="card_cvc"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Expiration:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="card_expiry_date"> </p>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="control-label col-md-3">Payment Options:</label>*/
/*                                                             <div class="col-md-4">*/
/*                                                                 <p class="form-control-static" data-display="payment[]"> </p>*/
/*                                                             </div>*/
/*                                                         </div>#}*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-actions">*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-md-offset-3 col-md-9">*/
/*                                                         <a href="javascript:;" class="btn default button-previous">*/
/*                                                             <i class="fa fa-angle-left"></i> Back </a>*/
/*                                                         <a href="javascript:;" class="btn btn-outline green button-next"> Continue*/
/*                                                             <i class="fa fa-angle-right"></i>*/
/*                                                         </a>*/
/*                                                         <a href="javascript:;" class="btn green button-submit"> Submit*/
/*                                                             <i class="fa fa-check"></i>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         {#{{ form_end(form) }}#}*/
/*                                     </form>*/
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
/*     <script src="{{ asset('assets/pages/scripts/form-wizard.min.js') }}" type="text/javascript"></script>    */
/*     <!-- END PAGE LEVEL PLUGINS -->*/
/* {% endblock %} */
/* */
/* */
/* */
