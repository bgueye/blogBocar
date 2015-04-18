<?php

/* ::footer.html.twig */
class __TwigTemplate_9f91582819931aed401fdebf5dc0669e55e08a6adcd8a16a60fc66a8123f0587 extends Twig_Template
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
        echo "<footer id=\"footer\">
    <div class=\"container panel-footer\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li>1</li>
                    <li>2</li>
                </ul>
            </div> 

            <div class=\"col-sm-4\">
                <h4>Siège</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
            </div>

            <div class=\"col-sm-4\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span12 text-center\"><hr/>
                <p>&copy; Copyright ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Gueye</p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  46 => 20,  42 => 19,  34 => 14,  19 => 1,);
    }
}
