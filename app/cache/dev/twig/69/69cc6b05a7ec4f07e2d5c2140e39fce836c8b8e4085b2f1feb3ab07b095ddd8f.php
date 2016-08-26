<?php

/* default/index.html.twig */
class __TwigTemplate_3b0ee0c68ddcc9aa6659457a7b2a6cc007a9d4108f517b8ea685a969dc4d9048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e0b939c0811e96b323681e55a625e067ebbbc330b2e3eb2b467c2847f08ac1 = $this->env->getExtension("native_profiler");
        $__internal_96e0b939c0811e96b323681e55a625e067ebbbc330b2e3eb2b467c2847f08ac1->enter($__internal_96e0b939c0811e96b323681e55a625e067ebbbc330b2e3eb2b467c2847f08ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e0b939c0811e96b323681e55a625e067ebbbc330b2e3eb2b467c2847f08ac1->leave($__internal_96e0b939c0811e96b323681e55a625e067ebbbc330b2e3eb2b467c2847f08ac1_prof);

    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        $__internal_3882ce563e43d3b297fb75dbf2b84479e63880d4da5316992c836d42768b2b4d = $this->env->getExtension("native_profiler");
        $__internal_3882ce563e43d3b297fb75dbf2b84479e63880d4da5316992c836d42768b2b4d->enter($__internal_3882ce563e43d3b297fb75dbf2b84479e63880d4da5316992c836d42768b2b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePage"));

        // line 4
        echo "    DATASOURCE <small>Wizard</small>
";
        
        $__internal_3882ce563e43d3b297fb75dbf2b84479e63880d4da5316992c836d42768b2b4d->leave($__internal_3882ce563e43d3b297fb75dbf2b84479e63880d4da5316992c836d42768b2b4d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77066a73d5422b618833f5416ffb87075be125c1a4caeff57b9f0b6e7b1ad23 = $this->env->getExtension("native_profiler");
        $__internal_f77066a73d5422b618833f5416ffb87075be125c1a4caeff57b9f0b6e7b1ad23->enter($__internal_f77066a73d5422b618833f5416ffb87075be125c1a4caeff57b9f0b6e7b1ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    TEST
";
        
        $__internal_f77066a73d5422b618833f5416ffb87075be125c1a4caeff57b9f0b6e7b1ad23->leave($__internal_f77066a73d5422b618833f5416ffb87075be125c1a4caeff57b9f0b6e7b1ad23_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e944d40e91ca98204b6acc4765ede88fbf67cea0832d93c5e6d0808cbd7022d = $this->env->getExtension("native_profiler");
        $__internal_5e944d40e91ca98204b6acc4765ede88fbf67cea0832d93c5e6d0808cbd7022d->enter($__internal_5e944d40e91ca98204b6acc4765ede88fbf67cea0832d93c5e6d0808cbd7022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5e944d40e91ca98204b6acc4765ede88fbf67cea0832d93c5e6d0808cbd7022d->leave($__internal_5e944d40e91ca98204b6acc4765ede88fbf67cea0832d93c5e6d0808cbd7022d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac25a528e1dc0605a3aa7331e8fa4394a71bdba2a76f8c7d82a367ef346f51ee = $this->env->getExtension("native_profiler");
        $__internal_ac25a528e1dc0605a3aa7331e8fa4394a71bdba2a76f8c7d82a367ef346f51ee->enter($__internal_ac25a528e1dc0605a3aa7331e8fa4394a71bdba2a76f8c7d82a367ef346f51ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    
";
        
        $__internal_ac25a528e1dc0605a3aa7331e8fa4394a71bdba2a76f8c7d82a367ef346f51ee->leave($__internal_ac25a528e1dc0605a3aa7331e8fa4394a71bdba2a76f8c7d82a367ef346f51ee_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 15,  71 => 12,  65 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block titlePage %}*/
/*     DATASOURCE <small>Wizard</small>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     TEST*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     */
/*     */
/* {% endblock %}*/
