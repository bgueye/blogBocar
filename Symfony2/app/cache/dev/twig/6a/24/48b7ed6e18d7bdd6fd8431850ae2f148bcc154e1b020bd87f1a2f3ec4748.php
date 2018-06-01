<?php

/* gueyeblogBundle:Blog:voir.html.twig */
class __TwigTemplate_6a2448b7ed6e18d7bdd6fd8431850ae2f148bcc154e1b020bd87f1a2f3ec4748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gueyeblogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gueyeblog_body' => array($this, 'block_gueyeblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gueyeblogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_gueyeblog_body($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        // line 7
        echo "  ";
        $this->env->loadTemplate("gueyeblogBundle:Blog:article.html.twig")->display($context);
        // line 8
        echo "  ";
        // line 16
        echo "
  ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence"))) > 0)) {
            // line 18
            echo "    <div>
      Compétences utilisées dans cet article :
      <ul>
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCompetence"]) {
                // line 22
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "competence"), "nom"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "niveau"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCompetence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </ul>
    </div>
  ";
        }
        // line 27
        echo "  <p>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gueyeblog_Accueil");
        echo "\" class=\"btn\"><i class=\"icon-chevron-left\"></i>
    Retour à la liste
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_modifier", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
        echo "\" class=\"btn\"><i class=\"icon-edit\"></i>
    Modifier l'article
    </a>
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_supprimer", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
        echo "\" class=\"btn btn-danger\"><i class=\"icon-trash\"></i>
    Supprimer l'article
    </a>
  </p>
  <div class=\"well\"> 
    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "commentaires"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 40
            echo "    <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
            echo "</strong>
    <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
            echo "</p>
    <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  113 => 41,  106 => 40,  102 => 39,  94 => 34,  88 => 31,  82 => 28,  79 => 27,  74 => 24,  63 => 22,  59 => 21,  54 => 18,  52 => 17,  49 => 16,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
