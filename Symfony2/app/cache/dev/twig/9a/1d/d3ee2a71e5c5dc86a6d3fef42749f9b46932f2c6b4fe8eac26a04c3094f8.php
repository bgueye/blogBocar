<?php

/* gueyeblogBundle::layout.html.twig */
class __TwigTemplate_9a1dd3ee2a71e5c5dc86a6d3fef42749f9b46932f2c6b4fe8eac26a04c3094f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gueyeblog_body' => array($this, 'block_gueyeblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        // line 6
        echo "\t<h1>Bienvenue dans mon blog</h1>
\t<hr>
\t";
        // line 9
        echo "\t";
        $this->displayBlock('gueyeblog_body', $context, $blocks);
    }

    public function block_gueyeblog_body($context, array $blocks = array())
    {
        // line 10
        echo "\t";
    }

    public function getTemplateName()
    {
        return "gueyeblogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  48 => 9,  42 => 5,  39 => 4,  30 => 2,  116 => 22,  105 => 19,  98 => 18,  93 => 17,  88 => 13,  81 => 11,  67 => 9,  64 => 8,  62 => 7,  44 => 6,  41 => 5,  38 => 4,  29 => 2,);
    }
}
