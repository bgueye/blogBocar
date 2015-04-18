<?php

/* ::nav.html.twig */
class __TwigTemplate_7e436d5ca7e89e3740796144929bcdf827569b891c8a7fdf7e690fb74d97064f extends Twig_Template
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
        <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("aaAnnonce_homepage");
        echo "\">African Bisiness Data</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("aaAnnonce_homepage");
        echo "\"><span class=\"fa fa-home\"> </span> Accueil</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pays</a>
                        <!--<ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Offres</a></li>
                            <li><a href=\"#\">Demandes</a></li>
                            <li><a href=\"#\">Publier</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Mes annonces</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Les plus rechercher</a></li>
                        </ul> -->
                    </li>
                    <li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Bisiness</a></li>
                    <li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Data</a></li>
                    <li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Actualités</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                        </form>
                    </li>
                </ul>
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
        return array (  40 => 17,  31 => 11,  19 => 1,);
    }
}
