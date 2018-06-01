<?php

/* gueyeblogBundle:Blog:index.html.twig */
class __TwigTemplate_472a4c2310e3a47fc9757d32dc5fdb270234ff1e3fbbd8563ed2d5b7258eacf7 extends Twig_Template
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
        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 4
    public function block_gueyeblog_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div>
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "\t\t\t";
            // line 8
            echo "\t\t\t";
            $this->env->loadTemplate("gueyeblogBundle:Blog:article.html.twig")->display(array_merge($context, array("accueil" => true)));
            // line 9
            echo "\t\t\t<hr />
\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "\t\t\t<p>Pas (encore !) d'articles</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>
\t<div class=\"pagination text-center\">
\t\t<ul>
\t\t";
        // line 17
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "\t\t\t<li";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_Accueil", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  105 => 19,  98 => 18,  93 => 17,  88 => 13,  81 => 11,  67 => 9,  64 => 8,  62 => 7,  44 => 6,  41 => 5,  38 => 4,  29 => 2,);
    }
}
