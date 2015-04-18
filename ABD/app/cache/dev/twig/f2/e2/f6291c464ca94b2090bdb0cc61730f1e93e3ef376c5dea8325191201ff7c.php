<?php

/* ::nav.html.twig */
class __TwigTemplate_f2e2f6291c464ca94b2090bdb0cc61730f1e93e3ef376c5dea8325191201ff7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"container\"><!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("aaAnnonce_homepage");
        echo "\">Afrique Affaires</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("aaAnnonce_homepage");
        echo "\"><span class=\"fa fa-home\"> </span> Accueil</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Offres</a></li>
                            <li><a href=\"#\">Demandes</a></li>
                            <li><a href=\"#\">Publier</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Mes annonces</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Les plus rechercher</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Mes Annonces</a></li>
                    <li><a href=\"#\">Boutiques</a></li>
                    <li><a href=\"#\">Mon Compte</a></li>
                </ul>
                <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  30 => 10,  19 => 1,);
    }
}
