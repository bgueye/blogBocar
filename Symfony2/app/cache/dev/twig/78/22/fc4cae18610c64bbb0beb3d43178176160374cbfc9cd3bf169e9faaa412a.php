<?php

/* gueyeblogBundle:Blog:article.html.twig */
class __TwigTemplate_7822fc4cae18610c64bbb0beb3d43178176160374cbfc9cd3bf169e9faaa412a extends Twig_Template
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
        // line 2
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), false)) : (false));
        // line 3
        echo "<h2>
\t";
        // line 5
        echo "\t";
        if ((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil"))) {
            // line 6
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_voir", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">
\t\t";
            // line 8
            echo "\t\t";
            if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                // line 9
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 11
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
\t";
        } else {
            // line 13
            echo "\t\t";
            if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                // line 14
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 16
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "
\t";
        }
        // line 18
        echo "</h2>
<i>Le ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ".</i>
<div class=\"well\">
\t";
        // line 21
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu");
        echo "
</div>
";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"), "count") > 0)) {
            // line 25
            echo "\t<div class=\"well well-small\">
\t\t<p><i>Catégories :
\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 28
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 29
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</i></p>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  110 => 29,  104 => 28,  87 => 27,  83 => 25,  76 => 21,  69 => 19,  66 => 18,  49 => 13,  43 => 11,  32 => 8,  27 => 6,  24 => 5,  21 => 3,  40 => 9,  25 => 6,  19 => 2,  162 => 67,  158 => 65,  156 => 64,  153 => 63,  149 => 55,  146 => 54,  139 => 7,  136 => 6,  130 => 5,  125 => 69,  123 => 63,  117 => 60,  111 => 56,  109 => 54,  102 => 50,  92 => 46,  89 => 45,  85 => 42,  77 => 36,  70 => 32,  60 => 16,  54 => 25,  52 => 14,  35 => 9,  33 => 6,  23 => 1,  55 => 10,  48 => 9,  42 => 5,  39 => 4,  30 => 2,  116 => 22,  105 => 19,  98 => 48,  93 => 17,  88 => 13,  81 => 24,  67 => 31,  64 => 8,  62 => 7,  44 => 6,  41 => 5,  38 => 4,  29 => 7,);
    }
}
