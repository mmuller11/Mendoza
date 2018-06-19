<?php

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_57628b76649f685c8217496e237450f050d65a629d14a55139e9b8e93bb201a0 extends Twig_Template
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
        echo "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
</div>", "@CoreHome/_siteSelectHeader.twig", "C:\\wamp64\\www\\Mendoza\\piwik\\piwik\\plugins\\CoreHome\\templates\\_siteSelectHeader.twig");
    }
}
