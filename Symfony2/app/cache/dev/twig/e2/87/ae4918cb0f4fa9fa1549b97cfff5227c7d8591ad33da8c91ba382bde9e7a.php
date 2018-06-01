<?php

/* ::layout.html.twig */
class __TwigTemplate_e287ae4918cb0f4fa9fa1549b97cfff5227c7d8591ad33da8c91ba382bde9e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit text-center\">
\t\t\t\t<h1>Mon Premier Blog WEB</h1>
\t\t\t\t<p>Ce projet est propulsé par Symfony2.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-primary btn-large\"
\t\t\t\t\t\thref=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votresite-web-avec-le-framework-symfony2\">
\t\t\t\t\t\tLire le tutoriel »
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-primary btn-large\"
\t\t\t\t\t\thref=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votresite-web-avec-le-framework-symfony2\">
\t\t\t\t\t\tautres tutoriels »
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "\t\t\t\t\t\tBienvenue  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " 
\t\t\t\t\t\t<a class=\"btn btn-primary btn-large\"
\t\t\t\t\t\t\thref=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t<a class=\"btn btn-primary btn-large\"
\t\t\t\t\t\t\thref=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog de Bocar</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("gueyeblog_Accueil");
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t";
        // line 45
        echo "\t\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 46
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gueyeblog_ajouter");
            echo "\">Nouvel article</a></li>
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("gueyeblogBundle:Blog:menu", array("nombre" => 3)));
        echo "
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<footer class=\"text-center\">
\t\t\t\t<p>© ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo " 2014.</p>
\t\t\t</footer>
\t\t</div>
\t\t";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Blog de Bocar";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "\t\t\t\t\t";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "\t\t\t";
        // line 65
        echo "\t\t\t<script
\t\t\tsrc=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 67,  158 => 65,  156 => 64,  153 => 63,  149 => 55,  146 => 54,  139 => 7,  136 => 6,  130 => 5,  125 => 69,  123 => 63,  117 => 60,  111 => 56,  109 => 54,  102 => 50,  92 => 46,  89 => 45,  85 => 42,  77 => 36,  70 => 32,  60 => 27,  54 => 25,  52 => 24,  35 => 9,  33 => 6,  23 => 1,  55 => 10,  48 => 9,  42 => 5,  39 => 4,  30 => 2,  116 => 22,  105 => 19,  98 => 48,  93 => 17,  88 => 13,  81 => 11,  67 => 31,  64 => 8,  62 => 7,  44 => 6,  41 => 5,  38 => 4,  29 => 5,);
    }
}
