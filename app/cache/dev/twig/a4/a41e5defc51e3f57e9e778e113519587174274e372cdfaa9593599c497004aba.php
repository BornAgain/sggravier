<?php

/* AdminBundle:Security:login.html.twig */
class __TwigTemplate_6b2f70094c6fb8c204fbe1e6ce0abc146758e4d53a4563040d41731a2b2cd3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ee8008b29dfc040b170e6e0db17a2669f5f70a9d3f21fc51a9d10c5ea145fb37 = $this->env->getExtension("native_profiler");
        $__internal_ee8008b29dfc040b170e6e0db17a2669f5f70a9d3f21fc51a9d10c5ea145fb37->enter($__internal_ee8008b29dfc040b170e6e0db17a2669f5f70a9d3f21fc51a9d10c5ea145fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8008b29dfc040b170e6e0db17a2669f5f70a9d3f21fc51a9d10c5ea145fb37->leave($__internal_ee8008b29dfc040b170e6e0db17a2669f5f70a9d3f21fc51a9d10c5ea145fb37_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_d0ed335d11f95fcd30e10bbb5fe54ad32a1126420612a3393ddcf20aaba8a155 = $this->env->getExtension("native_profiler");
        $__internal_d0ed335d11f95fcd30e10bbb5fe54ad32a1126420612a3393ddcf20aaba8a155->enter($__internal_d0ed335d11f95fcd30e10bbb5fe54ad32a1126420612a3393ddcf20aaba8a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <li>
        <a href=\"index.html\">Dashboard</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ab_security_login");
        echo "\">Security</a>
    </li>
";
        
        $__internal_d0ed335d11f95fcd30e10bbb5fe54ad32a1126420612a3393ddcf20aaba8a155->leave($__internal_d0ed335d11f95fcd30e10bbb5fe54ad32a1126420612a3393ddcf20aaba8a155_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b00c5dc16271904b3df3935d85fec63e39772d9ad4c497c5c7bc1376f0b7475 = $this->env->getExtension("native_profiler");
        $__internal_5b00c5dc16271904b3df3935d85fec63e39772d9ad4c497c5c7bc1376f0b7475->enter($__internal_5b00c5dc16271904b3df3935d85fec63e39772d9ad4c497c5c7bc1376f0b7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "    
    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        
        <label for=\"password\">Password: </label>
        <input type=\"password\" id=\"password\" name=\"_password\"/>
        <br/>
        
        <div class=\"box-footer pull-left\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ab_users_list");
        echo "\"> <input class=\"btn btn-success\" type=\"submit\" value=\"Connexion\"/> </a>
        </div>
    </form>
        
";
        
        $__internal_5b00c5dc16271904b3df3935d85fec63e39772d9ad4c497c5c7bc1376f0b7475->leave($__internal_5b00c5dc16271904b3df3935d85fec63e39772d9ad4c497c5c7bc1376f0b7475_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  81 => 19,  76 => 17,  73 => 16,  67 => 14,  64 => 13,  58 => 12,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <li>*/
/*         <a href="index.html">Dashboard</a>*/
/*         <i class="fa fa-circle"></i>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path("ab_security_login") }}">Security</a>*/
/*     </li>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/*     */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Login :</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*         */
/*         <label for="password">Password: </label>*/
/*         <input type="password" id="password" name="_password"/>*/
/*         <br/>*/
/*         */
/*         <div class="box-footer pull-left">*/
/*             <a href="{{ path ("ab_users_list")}}"> <input class="btn btn-success" type="submit" value="Connexion"/> </a>*/
/*         </div>*/
/*     </form>*/
/*         */
/* {% endblock %}*/
