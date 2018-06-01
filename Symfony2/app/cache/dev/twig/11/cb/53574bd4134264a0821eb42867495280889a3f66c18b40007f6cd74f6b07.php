<?php

/* gueyeblogBundle:Blog:menu.html.twig */
class __TwigTemplate_11cb53574bd4134264a0821eb42867495280889a3f66c18b40007f6cd74f6b07 extends Twig_Template
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
        echo "<p>Les Derniers Articles</p>
<ul>
\t<ul class=\"nav nav-pills nav-stacked\">

\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_voir", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  25 => 6,  19 => 2,  162 => 67,  158 => 65,  156 => 64,  153 => 63,  149 => 55,  146 => 54,  139 => 7,  136 => 6,  130 => 5,  125 => 69,  123 => 63,  117 => 60,  111 => 56,  109 => 54,  102 => 50,  92 => 46,  89 => 45,  85 => 42,  77 => 36,  70 => 32,  60 => 27,  54 => 25,  52 => 24,  35 => 9,  33 => 6,  23 => 1,  55 => 10,  48 => 9,  42 => 5,  39 => 4,  30 => 2,  116 => 22,  105 => 19,  98 => 48,  93 => 17,  88 => 13,  81 => 11,  67 => 31,  64 => 8,  62 => 7,  44 => 6,  41 => 5,  38 => 4,  29 => 7,);
    }
}
