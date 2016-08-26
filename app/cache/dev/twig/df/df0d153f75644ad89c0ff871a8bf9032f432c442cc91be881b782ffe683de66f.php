<?php

/* AdminBundle:Entities:update.html.twig */
class __TwigTemplate_0216f2137c98de543e08aa7112a42ec081b85fde4d6fa8166f5e9b12b0ea6ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Entities:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38c80ef89648874ad117008a7087022ef81921eeaa8bc76b7154cdab61d2fec1 = $this->env->getExtension("native_profiler");
        $__internal_38c80ef89648874ad117008a7087022ef81921eeaa8bc76b7154cdab61d2fec1->enter($__internal_38c80ef89648874ad117008a7087022ef81921eeaa8bc76b7154cdab61d2fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Entities:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c80ef89648874ad117008a7087022ef81921eeaa8bc76b7154cdab61d2fec1->leave($__internal_38c80ef89648874ad117008a7087022ef81921eeaa8bc76b7154cdab61d2fec1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a415ee5f2ebf0068446eb7cd02dccd344258fcd8c9938de31d3bd51078d9275 = $this->env->getExtension("native_profiler");
        $__internal_0a415ee5f2ebf0068446eb7cd02dccd344258fcd8c9938de31d3bd51078d9275->enter($__internal_0a415ee5f2ebf0068446eb7cd02dccd344258fcd8c9938de31d3bd51078d9275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Entities:update";
        
        $__internal_0a415ee5f2ebf0068446eb7cd02dccd344258fcd8c9938de31d3bd51078d9275->leave($__internal_0a415ee5f2ebf0068446eb7cd02dccd344258fcd8c9938de31d3bd51078d9275_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5add9ec107313dd99265ae1701c5f162162ec59d65f14a981f0b105a03f29c6e = $this->env->getExtension("native_profiler");
        $__internal_5add9ec107313dd99265ae1701c5f162162ec59d65f14a981f0b105a03f29c6e->enter($__internal_5add9ec107313dd99265ae1701c5f162162ec59d65f14a981f0b105a03f29c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("db_dashboard_list");
        echo "\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\">Entities</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <b>Update</b>
    </li>
";
        
        $__internal_5add9ec107313dd99265ae1701c5f162162ec59d65f14a981f0b105a03f29c6e->leave($__internal_5add9ec107313dd99265ae1701c5f162162ec59d65f14a981f0b105a03f29c6e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_72730fe718117bbeef3afe64629b2ef458021252583523dc8fbb46a4fa5c9b0a = $this->env->getExtension("native_profiler");
        $__internal_72730fe718117bbeef3afe64629b2ef458021252583523dc8fbb46a4fa5c9b0a->enter($__internal_72730fe718117bbeef3afe64629b2ef458021252583523dc8fbb46a4fa5c9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            <div class=\"box-body row\">
                
                    <div class=\"form-group col-md-6\">
                        <label for=\"name\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Name")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'label');
        echo "</label>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortLabel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"country\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "</label>
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Institution Country")));
        echo "
                    </div>
          
            </div><!-- /.box-body -->
            <div class=\"box-footer pull-right\">
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"/> </a>
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ab_entities_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\"/> </a>
            </div>
        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div><!-- /.box -->
";
        
        $__internal_72730fe718117bbeef3afe64629b2ef458021252583523dc8fbb46a4fa5c9b0a->leave($__internal_72730fe718117bbeef3afe64629b2ef458021252583523dc8fbb46a4fa5c9b0a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Entities:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  133 => 43,  129 => 42,  121 => 37,  117 => 36,  111 => 33,  107 => 32,  101 => 29,  97 => 28,  90 => 24,  84 => 20,  78 => 19,  64 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdminBundle:Entities:update{% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="{{ path("db_dashboard_list") }}">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_entities_list") }}">Entities</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <b>Update</b>*/
/*     </li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(form, {'method': 'POST'}) }}*/
/*             <div class="box-body row">*/
/*                 */
/*                     <div class="form-group col-md-6">*/
/*                         <label for="name">{{ form_label(form.description) }}</label>*/
/*                         {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder': 'Institution Name'}}) }}*/
/*                     </div>*/
/*                     <div class="form-group col-md-6">*/
/*                         <label for="country">{{ form_label(form.shortLabel) }}</label>*/
/*                         {{ form_widget(form.shortLabel, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                     </div>*/
/*                     <div class="form-group col-md-6">*/
/*                         <label for="country">{{ form_label(form.enabled) }}</label>*/
/*                         {{ form_widget(form.enabled, {'attr': {'class': 'form-control','placeholder': 'Institution Country'}}) }}*/
/*                     </div>*/
/*           */
/*             </div><!-- /.box-body -->*/
/*             <div class="box-footer pull-right">*/
/*                     <a href="{{ path ("ab_entities_list")}}"> <input class="btn btn-success" type="submit" value="Save"/> </a>*/
/*                     <a href="{{ path ("ab_entities_list")}}"> <input class="btn btn-success" type="submit" value="Cancel"/> </a>*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div><!-- /.box -->*/
/* {% endblock %}*/
