<?php

/* aaannonceBundle:Default:index.html.twig */
class __TwigTemplate_29ae9bfb1ddb389bda1e3b46541cd096f37a6ca11d6737e2943408b009fdbc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<p><a href=\"#\" class=\"text-center\">Publier une annonce</a></p>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-2  bord\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center gris\">
\t\t\t\t\t\t<strong>REGIONS</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-2 bord\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center gris\">
\t\t\t\t\t<strong>CATEGORIES</strong>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t    
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "aaannonceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
