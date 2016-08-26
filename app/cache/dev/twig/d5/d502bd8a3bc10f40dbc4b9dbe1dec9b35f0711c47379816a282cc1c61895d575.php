<?php

/* @Admin/Security_/login.html.twig */
class __TwigTemplate_1663dc03cb10cb11dd9672951457ac8cfcad57f5b27d5c636f8d8655e384cacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/Security_/login.html.twig", 1);
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
        $__internal_b55267e47a971f2c1c4024c69ad5d4d0646454c9bc54b0ae34fb7121db3a0806 = $this->env->getExtension("native_profiler");
        $__internal_b55267e47a971f2c1c4024c69ad5d4d0646454c9bc54b0ae34fb7121db3a0806->enter($__internal_b55267e47a971f2c1c4024c69ad5d4d0646454c9bc54b0ae34fb7121db3a0806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Security_/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55267e47a971f2c1c4024c69ad5d4d0646454c9bc54b0ae34fb7121db3a0806->leave($__internal_b55267e47a971f2c1c4024c69ad5d4d0646454c9bc54b0ae34fb7121db3a0806_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_33ebf5c797db4d312532c327f331e46cbbedc6777c9d3169d46d0ed6031aa065 = $this->env->getExtension("native_profiler");
        $__internal_33ebf5c797db4d312532c327f331e46cbbedc6777c9d3169d46d0ed6031aa065->enter($__internal_33ebf5c797db4d312532c327f331e46cbbedc6777c9d3169d46d0ed6031aa065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_33ebf5c797db4d312532c327f331e46cbbedc6777c9d3169d46d0ed6031aa065->leave($__internal_33ebf5c797db4d312532c327f331e46cbbedc6777c9d3169d46d0ed6031aa065_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c339268ca4e9978ea2eae481c49faab5d95fcca0a0883e77e1423c3ee36062 = $this->env->getExtension("native_profiler");
        $__internal_43c339268ca4e9978ea2eae481c49faab5d95fcca0a0883e77e1423c3ee36062->enter($__internal_43c339268ca4e9978ea2eae481c49faab5d95fcca0a0883e77e1423c3ee36062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_43c339268ca4e9978ea2eae481c49faab5d95fcca0a0883e77e1423c3ee36062->leave($__internal_43c339268ca4e9978ea2eae481c49faab5d95fcca0a0883e77e1423c3ee36062_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Security_/login.html.twig";
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
