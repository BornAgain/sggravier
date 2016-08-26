<?php

/* @Admin/Security/login.html_1.twig */
class __TwigTemplate_c4d9803e8a245b10913bd97b73db0097d6c34a5b532e3d10b4f401335dd46116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Admin/Security/login.html_1.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c6bf53d25279b043fd0a4a3330d0fe54e3f2f2d34db2b62681645b85dec176 = $this->env->getExtension("native_profiler");
        $__internal_01c6bf53d25279b043fd0a4a3330d0fe54e3f2f2d34db2b62681645b85dec176->enter($__internal_01c6bf53d25279b043fd0a4a3330d0fe54e3f2f2d34db2b62681645b85dec176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Security/login.html_1.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c6bf53d25279b043fd0a4a3330d0fe54e3f2f2d34db2b62681645b85dec176->leave($__internal_01c6bf53d25279b043fd0a4a3330d0fe54e3f2f2d34db2b62681645b85dec176_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_797d09163de7af4b5956dee95d9ee36bd8e526906bef0fccc25741a3d8eab27b = $this->env->getExtension("native_profiler");
        $__internal_797d09163de7af4b5956dee95d9ee36bd8e526906bef0fccc25741a3d8eab27b->enter($__internal_797d09163de7af4b5956dee95d9ee36bd8e526906bef0fccc25741a3d8eab27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<p>LA CONNEXION A L'APP</p>
    
    ";
        // line 12
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\" class=\"col-md-6\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
      <div class=\"form-group\">
          <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo " :</label>
          <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
      </div>
      
      <div class=\"form-group\">
          <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo " :</label>
          <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
      </div>
    
    
     <div class=\"box-footer pull-right\">
            <input class=\"btn btn-success\" name=\"_submit\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
      </div>
  </form>

";
        
        $__internal_797d09163de7af4b5956dee95d9ee36bd8e526906bef0fccc25741a3d8eab27b->leave($__internal_797d09163de7af4b5956dee95d9ee36bd8e526906bef0fccc25741a3d8eab27b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Security/login.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  73 => 20,  66 => 16,  62 => 15,  57 => 13,  52 => 12,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <p>LA CONNEXION A L'APP</p>*/
/*     */
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('fos_user_security_check') }}" method="POST" class="col-md-6">*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*       <div class="form-group">*/
/*           <label for="username">{{ 'security.login.username'|trans }} :</label>*/
/*           <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*       </div>*/
/*       */
/*       <div class="form-group">*/
/*           <label for="password">{{ 'security.login.password'|trans }} :</label>*/
/*           <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*       </div>*/
/*     */
/*     */
/*      <div class="box-footer pull-right">*/
/*             <input class="btn btn-success" name="_submit" type="submit" value="{{ 'security.login.submit'|trans }}"/>*/
/*       </div>*/
/*   </form>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
