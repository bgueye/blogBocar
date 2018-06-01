<?php

/* gueyeblogBundle:Blog:modifier.html.twig */
class __TwigTemplate_601e0c179481fe1dd9720f333c5e3bf1aa27f944556856e5f8f0cf60024b8822 extends Twig_Template
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
        echo "Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_gueyeblog_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Modifier un article</h2>
";
        // line 7
        $this->env->loadTemplate("gueyeblogBundle:Blog:formulaire.html.twig")->display($context);
        // line 8
        echo "<p>
\tVous éditez un article déjà existant, ne le changez pas trop pour éviter
\taux membres de ne pas comprendre ce qu'il se passe.
</p>
<p>
\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gueyeblog_voir", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
        echo "\" class=\"btn\"><i class=\"icon-chevron-left\"></i>
\tRetour à l'article
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
