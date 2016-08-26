<?php

/* AdminBundle:Security_:login.html.twig */
class __TwigTemplate_fd8cbdff8c12cbd49492b49f477201fa1f6ff7b8a3ada839305de1aaa4b98b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Security_:login.html.twig", 1);
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
        $__internal_9cc9e4f8e4ab0cb8ffb531de77e2466917f2b3edf2a92291762ad22f37d95518 = $this->env->getExtension("native_profiler");
        $__internal_9cc9e4f8e4ab0cb8ffb531de77e2466917f2b3edf2a92291762ad22f37d95518->enter($__internal_9cc9e4f8e4ab0cb8ffb531de77e2466917f2b3edf2a92291762ad22f37d95518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security_:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc9e4f8e4ab0cb8ffb531de77e2466917f2b3edf2a92291762ad22f37d95518->leave($__internal_9cc9e4f8e4ab0cb8ffb531de77e2466917f2b3edf2a92291762ad22f37d95518_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_3a1cc70e7c0fc2c763162b86c8409b08cf4dae38e1c01157cb85e5778109dbee = $this->env->getExtension("native_profiler");
        $__internal_3a1cc70e7c0fc2c763162b86c8409b08cf4dae38e1c01157cb85e5778109dbee->enter($__internal_3a1cc70e7c0fc2c763162b86c8409b08cf4dae38e1c01157cb85e5778109dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

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
        
        $__internal_3a1cc70e7c0fc2c763162b86c8409b08cf4dae38e1c01157cb85e5778109dbee->leave($__internal_3a1cc70e7c0fc2c763162b86c8409b08cf4dae38e1c01157cb85e5778109dbee_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2017866a5dcffab5e0a3f4ebbb6d31e20c41338cb343718eddb804b835b9196b = $this->env->getExtension("native_profiler");
        $__internal_2017866a5dcffab5e0a3f4ebbb6d31e20c41338cb343718eddb804b835b9196b->enter($__internal_2017866a5dcffab5e0a3f4ebbb6d31e20c41338cb343718eddb804b835b9196b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2017866a5dcffab5e0a3f4ebbb6d31e20c41338cb343718eddb804b835b9196b->leave($__internal_2017866a5dcffab5e0a3f4ebbb6d31e20c41338cb343718eddb804b835b9196b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security_:login.html.twig";
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
