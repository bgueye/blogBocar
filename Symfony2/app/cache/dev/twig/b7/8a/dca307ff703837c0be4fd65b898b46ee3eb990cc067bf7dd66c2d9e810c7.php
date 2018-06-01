<?php

/* gueyeblogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_b78adca307ff703837c0be4fd65b898b46ee3eb990cc067bf7dd66c2d9e810c7 extends Twig_Template
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
        // line 5
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gueyeblog/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<h3>Formulaire d'article</h3>
<div class=\"well\">
\t<form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t</form>
</div>
";
        // line 15
        echo "

<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>


";
        // line 21
        echo "
<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\t// On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
\t\tvar \$container = \$('div#gueye_blogbundle_article_categories');

\t\t// On ajoute un lien pour ajouter une nouvelle catégorie 
\t\tvar \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\">Ajouter une catégorie</a>');
\t\t\$container.append(\$lienAjout);

\t\t// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
\t\t\$lienAjout.click(function(e) {
\t\t\tajouterCategorie(\$container);
\t\t\te.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t\t\treturn false;
\t\t});

\t\t// On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
\t\tvar index = \$container.find(':input').length;

\t\t// On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
\t\tif (index == 0) {
\t\t\tajouterCategorie(\$container);
\t\t} 
\t\telse {

\t\t\t// Pour chaque catégorie déjà existante, on ajoute un lien de suppression
\t\t\t\$container.children('div').each(function() {
\t\t\t\tajouterLienSuppression(\$(this));
\t\t\t});
\t\t}

\t\t// La fonction qui ajoute un formulaire Categorie
\t\tfunction ajouterCategorie(\$container) {
\t\t\t// Dans le contenu de l'attribut « data-prototype », on remplace :
\t\t\t// - le texte \"__name__label__\" qu'il contient par le label du champ
\t\t\t// - le texte \"__name__\" qu'il contient par le numéro du champ
\t\t\tvar \$prototype = \$(\$container.attr('data-prototype')
\t\t\t\t.replace('__name__label__', 'Catégorie n° ' + (index+1))
\t\t\t\t.replace('__name__', index));
\t\t\t
\t\t\t// On ajoute au prototype un lien pour pouvoir supprimer la catégorie
\t\t\tajouterLienSuppression(\$prototype);
\t\t\t
\t\t\t// On ajoute le prototype modifié à la fin de la balise <div>
\t\t\t\$container.append(\$prototype);
\t\t\t
\t\t\t// Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
\t\t\tindex++;
\t\t}
\t\t// La fonction qui ajoute un lien de suppression d'une catégorie
\t\tfunction ajouterLienSuppression(\$prototype) {

\t\t\t// Création du lien
\t\t\t\$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

\t\t\t// Ajout du lien
\t\t\t\$prototype.append(\$lienSuppression);

\t\t\t// Ajout du listener sur le clic du lien
\t\t\t\$lienSuppression.click(function(e) {
\t\t\t\t\$prototype.remove();
\t\t\t\te.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t\t\t\treturn false;
\t\t\t});
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  37 => 15,  30 => 9,  26 => 8,  19 => 5,  54 => 13,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
