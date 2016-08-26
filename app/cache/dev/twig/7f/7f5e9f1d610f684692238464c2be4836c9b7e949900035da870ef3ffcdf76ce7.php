<?php

/* SampleBundle:User:list.html.twig */
class __TwigTemplate_53fd2db60ee397794da4db79e2c7c47c52d78a9a2ed0ceb137395cc2fac3d307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SampleBundle:User:list.html.twig", 1);
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
        $__internal_37efeaf8325caf0c2a51aebe3e1dfe664c61b9e4c88ace090c2d99679fca0f4c = $this->env->getExtension("native_profiler");
        $__internal_37efeaf8325caf0c2a51aebe3e1dfe664c61b9e4c88ace090c2d99679fca0f4c->enter($__internal_37efeaf8325caf0c2a51aebe3e1dfe664c61b9e4c88ace090c2d99679fca0f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SampleBundle:User:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37efeaf8325caf0c2a51aebe3e1dfe664c61b9e4c88ace090c2d99679fca0f4c->leave($__internal_37efeaf8325caf0c2a51aebe3e1dfe664c61b9e4c88ace090c2d99679fca0f4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ff7ddb3031bdc9e89cb313a38602e882c08d6e8b5d25663485496c42367640 = $this->env->getExtension("native_profiler");
        $__internal_45ff7ddb3031bdc9e89cb313a38602e882c08d6e8b5d25663485496c42367640->enter($__internal_45ff7ddb3031bdc9e89cb313a38602e882c08d6e8b5d25663485496c42367640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SampleBundle:User:List";
        
        $__internal_45ff7ddb3031bdc9e89cb313a38602e882c08d6e8b5d25663485496c42367640->leave($__internal_45ff7ddb3031bdc9e89cb313a38602e882c08d6e8b5d25663485496c42367640_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33dd1552454353ee2d8c5d2eecc35a72ea5f02d50b833660d12af62bed2918bb = $this->env->getExtension("native_profiler");
        $__internal_33dd1552454353ee2d8c5d2eecc35a72ea5f02d50b833660d12af62bed2918bb->enter($__internal_33dd1552454353ee2d8c5d2eecc35a72ea5f02d50b833660d12af62bed2918bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_33dd1552454353ee2d8c5d2eecc35a72ea5f02d50b833660d12af62bed2918bb->leave($__internal_33dd1552454353ee2d8c5d2eecc35a72ea5f02d50b833660d12af62bed2918bb_prof);

    }

    public function getTemplateName()
    {
        return "SampleBundle:User:list.html.twig";
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
