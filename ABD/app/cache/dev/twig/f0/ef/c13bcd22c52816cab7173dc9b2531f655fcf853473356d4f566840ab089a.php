<?php

/* aaannonceBundle:Default:index.html.twig */
class __TwigTemplate_f0efc13bcd22c52816cab7173dc9b2531f655fcf853473356d4f566840ab089a extends Twig_Template
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
        echo "
\t<main class=\"bs-docs-masthead\" id=\"content\" role=\"main\" tabindex=\"-1\">
\t\t<div class=\"container\">
\t\t    <span class=\"bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline\">ABD</span>
\t    \t<p class=\"lead\">ABData est la première plateforme d'informations politiques et d'affaires africaine</p>
\t    </div>
\t    <div class=\"container\">
\t\t    <button  type=\"button\" class=\"btn btn-primary btn-lg btn-index\">Connexion</button>
\t\t</div>
\t    <div class=\"container\">
\t    \t<button type=\"button\" class=\"btn btn-default btn-lg btn-index\">Inscription</button>
\t    </div>
\t</main>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1>ABData, une plateforme d'informations politiques et d'affaires africaine</h1>
\t\t</div>
\t</div>
</div>

<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-4 well\">
\t\t\t<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. <br/>Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur.</p>
\t\t</div>
\t\t<dic class=\"col-lg-4 well\">
\t\t\t<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat.<br/> Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
\t\t</dic>
\t\t<dic class=\"col-lg-4 well\">
\t\t\t<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. <br/>Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
\t\t</dic>
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
