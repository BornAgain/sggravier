<?php

/* @Sample/User/list.html.twig */
class __TwigTemplate_0cb5399af5475ec7fb90da2f4c5d29aac9dc60daeb8672ef020818c8a67110b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Sample/User/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d539fc6e6fce8124ade13b082e24517696bea668c96e00d55f2d60843f7b8f = $this->env->getExtension("native_profiler");
        $__internal_23d539fc6e6fce8124ade13b082e24517696bea668c96e00d55f2d60843f7b8f->enter($__internal_23d539fc6e6fce8124ade13b082e24517696bea668c96e00d55f2d60843f7b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sample/User/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d539fc6e6fce8124ade13b082e24517696bea668c96e00d55f2d60843f7b8f->leave($__internal_23d539fc6e6fce8124ade13b082e24517696bea668c96e00d55f2d60843f7b8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07461450c69474e398727de2850bcf5b870cfc16c1a49416241b845f9098d1e3 = $this->env->getExtension("native_profiler");
        $__internal_07461450c69474e398727de2850bcf5b870cfc16c1a49416241b845f9098d1e3->enter($__internal_07461450c69474e398727de2850bcf5b870cfc16c1a49416241b845f9098d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:List";
        
        $__internal_07461450c69474e398727de2850bcf5b870cfc16c1a49416241b845f9098d1e3->leave($__internal_07461450c69474e398727de2850bcf5b870cfc16c1a49416241b845f9098d1e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92969c33bdeba01c936cffbd067a220830ba34d1359df0233bdd01710861a547 = $this->env->getExtension("native_profiler");
        $__internal_92969c33bdeba01c936cffbd067a220830ba34d1359df0233bdd01710861a547->enter($__internal_92969c33bdeba01c936cffbd067a220830ba34d1359df0233bdd01710861a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:List page</h1>

<div class=\"pull-right col-md-6 col-md-6 col-md-12\">
            <a class=\"btn btn-success text-right pull-right\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sb_user_list");
        echo "\"><i class=\"fa fa-list-alt\"></i> lister</a>
        </div>

    <div class=\"x_content\">

        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 col-xs-12\" style=\"text-align:center;\">
                <ul class=\"pagination pagination-split\">
                    <li><a href=\"#\">A</a>
                    </li>
                    <li><a href=\"#\">B</a>
                    </li>
                    <li><a href=\"#\">C</a>
                    </li>
                    <li><a href=\"#\">D</a>
                    </li>
                    <li><a href=\"#\">E</a>
                    </li>
                    <li>...</li>
                    <li><a href=\"#\">W</a>
                    </li>
                    <li><a href=\"#\">X</a>
                    </li>
                    <li><a href=\"#\">Y</a>
                    </li>
                    <li><a href=\"#\">Z</a>
                    </li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 


                <div class=\"col-md-4 col-sm-4 col-xs-12 animated fadeInDown\">
                    <div class=\"well profile_view\">
                        <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                                <h2>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</h2>
                                <p><strong>About: </strong> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "password", array()), "html", null, true);
            echo " </p>
                                <ul class=\"list-unstyled\">
                                    <li><i class=\"fa fa-phone\"></i> Address: </li>
                                    <li><i class=\"fa fa-phone\"></i> Address: </li>

                                </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                                <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/img.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                        </div>
                        <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                                <p class=\"ratings\">
                                    <a>4.0</a>
                                    <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                    <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                    <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                    <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                    <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                                </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                                <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                    </i> <i class=\"fa fa-comments-o\"></i> </button>
                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sb_user_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-xs\"> <i class=\"fa fa-user\">

                                        </i>View Profile</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
        </div>

    </div>
";
        
        $__internal_92969c33bdeba01c936cffbd067a220830ba34d1359df0233bdd01710861a547->leave($__internal_92969c33bdeba01c936cffbd067a220830ba34d1359df0233bdd01710861a547_prof);

    }

    public function getTemplateName()
    {
        return "@Sample/User/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 84,  140 => 74,  120 => 57,  109 => 49,  105 => 48,  92 => 40,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}SampleBundle:User:List{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:List page</h1>*/
/* */
/* <div class="pull-right col-md-6 col-md-6 col-md-12">*/
/*             <a class="btn btn-success text-right pull-right" href="{{ path("sb_user_list") }}"><i class="fa fa-list-alt"></i> lister</a>*/
/*         </div>*/
/* */
/*     <div class="x_content">*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">*/
/*                 <ul class="pagination pagination-split">*/
/*                     <li><a href="#">A</a>*/
/*                     </li>*/
/*                     <li><a href="#">B</a>*/
/*                     </li>*/
/*                     <li><a href="#">C</a>*/
/*                     </li>*/
/*                     <li><a href="#">D</a>*/
/*                     </li>*/
/*                     <li><a href="#">E</a>*/
/*                     </li>*/
/*                     <li>...</li>*/
/*                     <li><a href="#">W</a>*/
/*                     </li>*/
/*                     <li><a href="#">X</a>*/
/*                     </li>*/
/*                     <li><a href="#">Y</a>*/
/*                     </li>*/
/*                     <li><a href="#">Z</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             {% for entity in entities %} */
/* */
/* */
/*                 <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">*/
/*                     <div class="well profile_view">*/
/*                         <div class="col-sm-12">*/
/*                             <h4 class="brief"><i>Digital Strategist</i></h4>*/
/*                             <div class="left col-xs-7">*/
/*                                 <h2>{{ entity.username}}</h2>*/
/*                                 <p><strong>About: </strong> {{ entity.password}} </p>*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li><i class="fa fa-phone"></i> Address: </li>*/
/*                                     <li><i class="fa fa-phone"></i> Address: </li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="right col-xs-5 text-center">*/
/*                                 <img src="{{ asset('images/img.jpg') }}" alt="" class="img-circle img-responsive">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-12 bottom text-center">*/
/*                             <div class="col-xs-12 col-sm-6 emphasis">*/
/*                                 <p class="ratings">*/
/*                                     <a>4.0</a>*/
/*                                     <a href="#"><span class="fa fa-star"></span></a>*/
/*                                     <a href="#"><span class="fa fa-star"></span></a>*/
/*                                     <a href="#"><span class="fa fa-star"></span></a>*/
/*                                     <a href="#"><span class="fa fa-star"></span></a>*/
/*                                     <a href="#"><span class="fa fa-star-o"></span></a>*/
/*                                 </p>*/
/*                             </div>*/
/*                             <div class="col-xs-12 col-sm-6 emphasis">*/
/*                                 <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">*/
/*                                     </i> <i class="fa fa-comments-o"></i> </button>*/
/*                                 <a href="{{ path("sb_user_see",{'id':entity.id})}}"><button type="button" class="btn btn-primary btn-xs"> <i class="fa fa-user">*/
/* */
/*                                         </i>View Profile</button></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             {% endfor %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
