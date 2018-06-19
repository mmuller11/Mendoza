<?php

/* @Ecommerce/conversionOverview.twig */
class __TwigTemplate_0fd8f2c8a67455beb8686cacd6fab59155bdee868cef0758b82d97b729058aa0 extends Twig_Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionsOverview")), "html_attr");
        echo "\">
    <ul class=\"ulGoalTopElements\">
        ";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
        echo ": ";
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        // line 5
        if ( !twig_test_empty((isset($context["revenue_subtotal"]) ? $context["revenue_subtotal"] : $this->getContext($context, "revenue_subtotal")))) {
            echo ",
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Subtotal")), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_subtotal"]) ? $context["revenue_subtotal"] : $this->getContext($context, "revenue_subtotal")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        }
        // line 8
        if ( !twig_test_empty((isset($context["revenue_tax"]) ? $context["revenue_tax"] : $this->getContext($context, "revenue_tax")))) {
            echo ",
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Tax")), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_tax"]) ? $context["revenue_tax"] : $this->getContext($context, "revenue_tax")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        }
        // line 11
        if ( !twig_test_empty((isset($context["revenue_shipping"]) ? $context["revenue_shipping"] : $this->getContext($context, "revenue_shipping")))) {
            echo ",
            ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Shipping")), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_shipping"]) ? $context["revenue_shipping"] : $this->getContext($context, "revenue_shipping")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        }
        // line 14
        if ( !twig_test_empty((isset($context["revenue_discount"]) ? $context["revenue_discount"] : $this->getContext($context, "revenue_discount")))) {
            echo ",
            ";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Discount")), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_discount"]) ? $context["revenue_discount"] : $this->getContext($context, "revenue_discount")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        }
        // line 17
        echo "    </ul>
    <a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId==";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idGoal"]) ? $context["idGoal"] : $this->getContext($context, "idGoal")), "html", null, true);
        echo "', {})\">
        ";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_RowActionTooltipWithDimension", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Goal")))), "html", null, true);
        echo "
    </a>
    <br style=\"clear:left\"/>
</div>";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/conversionOverview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  67 => 17,  62 => 15,  58 => 14,  53 => 12,  49 => 11,  44 => 9,  40 => 8,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-block
     content-title=\"{{ 'Goals_ConversionsOverview'|translate|e('html_attr') }}\">
    <ul class=\"ulGoalTopElements\">
        {{ 'General_ColumnRevenue'|translate }}: {{ revenue|money(idSite)|raw -}}
        {% if revenue_subtotal is not empty %},
            {{ 'General_Subtotal'|translate }}: {{ revenue_subtotal|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_tax is not empty -%},
            {{ 'General_Tax'|translate }}: {{ revenue_tax|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_shipping is not empty -%},
            {{ 'General_Shipping'|translate }}: {{ revenue_shipping|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_discount is not empty -%},
            {{ 'General_Discount'|translate }}: {{ revenue_discount|money(idSite)|raw -}}
        {% endif %}
    </ul>
    <a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId=={{ idGoal }}', {})\">
        {{ 'Live_RowActionTooltipWithDimension'|translate('General_Goal'|translate) }}
    </a>
    <br style=\"clear:left\"/>
</div>", "@Ecommerce/conversionOverview.twig", "C:\\wamp64\\www\\Mendoza\\piwik\\piwik\\plugins\\Ecommerce\\templates\\conversionOverview.twig");
    }
}
