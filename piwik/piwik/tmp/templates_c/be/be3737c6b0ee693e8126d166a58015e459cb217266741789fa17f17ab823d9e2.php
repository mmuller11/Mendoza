<?php

/* @Ecommerce/getSparklines.twig */
class __TwigTemplate_4683e9716ec4ffb1e7089ab3ad19b2ead10407b0072a01a15ab7e5583f6b56b5 extends Twig_Template
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
        echo "<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;";
        // line 2
        if ( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
            echo "width:33%;'";
        }
        echo "\">
    <div class=\"sparkline\">";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineConversions"]) ? $context["urlSparklineConversions"] : $this->getContext($context, "urlSparklineConversions"))));
        echo "
\t<div>
        <strong>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), array((isset($context["nb_conversions"]) ? $context["nb_conversions"] : $this->getContext($context, "nb_conversions")))), "html", null, true);
        echo "</strong>
        ";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EcommerceOrders")), "html", null, true);
        echo "
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        ";
        // line 9
        if ((array_key_exists("goalAllowMultipleConversionsPerVisit", $context) && (isset($context["goalAllowMultipleConversionsPerVisit"]) ? $context["goalAllowMultipleConversionsPerVisit"] : $this->getContext($context, "goalAllowMultipleConversionsPerVisit")))) {
            // line 10
            echo "            (";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", (("<strong>" . (isset($context["nb_visits_converted"]) ? $context["nb_visits_converted"] : $this->getContext($context, "nb_visits_converted"))) . "</strong>")));
            echo ")
        ";
        }
        // line 12
        echo "\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineRevenue"]) ? $context["urlSparklineRevenue"] : $this->getContext($context, "urlSparklineRevenue"))));
        echo "
\t<div>
        ";
        // line 18
        $context["revenue"] = call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        // line 19
        echo "        <strong>";
        echo (isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue"));
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TotalRevenue")), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">";
        // line 23
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineAverageOrderValue"]) ? $context["urlSparklineAverageOrderValue"] : $this->getContext($context, "urlSparklineAverageOrderValue"))));
        echo "
\t<div>
        <strong>";
        // line 25
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["avg_order_revenue"]) ? $context["avg_order_revenue"] : $this->getContext($context, "avg_order_revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        echo "</strong>
        ";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AverageOrderValue")), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div id='leftcolumn' ";
        // line 30
        if ( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
            echo "style='width:33%;'";
        }
        echo ">
    <div class=\"sparkline\">";
        // line 31
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineConversionRate"]) ? $context["urlSparklineConversionRate"] : $this->getContext($context, "urlSparklineConversionRate"))));
        echo "
\t<div>
        ";
        // line 33
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EcommerceOrders")), "html", null, true);
        $context["ecommerceOrdersText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "        ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionRate", ((("<strong>" . call_user_func_array($this->env->getFilter('percent')->getCallable(), array((isset($context["conversion_rate"]) ? $context["conversion_rate"] : $this->getContext($context, "conversion_rate"))))) . "</strong> ") . (isset($context["ecommerceOrdersText"]) ? $context["ecommerceOrdersText"] : $this->getContext($context, "ecommerceOrdersText")))));
        echo "
\t</div>
    </div>
    <div class=\"sparkline\">";
        // line 37
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklinePurchasedProducts"]) ? $context["urlSparklinePurchasedProducts"] : $this->getContext($context, "urlSparklinePurchasedProducts"))));
        echo "
\t<div>
    <strong>";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), array((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PurchasedProducts")), "html", null, true);
        echo "</div></div>
</div>
<div id='rightcolumn' ";
        // line 41
        if ( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
            echo "style='width:30%;'";
        }
        echo ">
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AbandonedCarts")), "html", null, true);
        echo "
    </div>

    <div class=\"sparkline\">
        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineConversions"]) ? $context["cart_urlSparklineConversions"] : $this->getContext($context, "cart_urlSparklineConversions"))));
        echo "
\t<div>
        ";
        // line 49
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
        $context["ecommerceAbandonedCartsText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), array((isset($context["cart_nb_conversions"]) ? $context["cart_nb_conversions"] : $this->getContext($context, "cart_nb_conversions")))), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) ? $context["ecommerceAbandonedCartsText"] : $this->getContext($context, "ecommerceAbandonedCartsText")))), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineRevenue"]) ? $context["cart_urlSparklineRevenue"] : $this->getContext($context, "cart_urlSparklineRevenue"))));
        echo "
\t<div>
        ";
        // line 57
        ob_start();
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["cart_revenue"]) ? $context["cart_revenue"] : $this->getContext($context, "cart_revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        $context["revenue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "        ";
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
        $context["revenueText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", (isset($context["revenueText"]) ? $context["revenueText"] : $this->getContext($context, "revenueText")))), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 64
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineConversionRate"]) ? $context["cart_urlSparklineConversionRate"] : $this->getContext($context, "cart_urlSparklineConversionRate"))));
        echo "
\t<div>
        <strong>";
        // line 66
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('percent')->getCallable(), array((isset($context["cart_conversion_rate"]) ? $context["cart_conversion_rate"] : $this->getContext($context, "cart_conversion_rate")))), "html", null, true);
        echo "</strong>
        ";
        // line 67
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) ? $context["ecommerceAbandonedCartsText"] : $this->getContext($context, "ecommerceAbandonedCartsText")))), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
";
        // line 72
        $this->loadTemplate("_sparklineFooter.twig", "@Ecommerce/getSparklines.twig", 72)->display($context);
        // line 73
        echo "    </div></div>
";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/getSparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 73,  200 => 72,  192 => 67,  188 => 66,  183 => 64,  172 => 59,  167 => 58,  163 => 57,  158 => 55,  147 => 50,  143 => 49,  138 => 47,  131 => 43,  124 => 41,  117 => 39,  112 => 37,  105 => 34,  101 => 33,  96 => 31,  90 => 30,  83 => 26,  79 => 25,  74 => 23,  64 => 19,  62 => 18,  57 => 16,  51 => 12,  45 => 10,  43 => 9,  37 => 6,  33 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;{% if not isWidget %}width:33%;'{% endif %}\">
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversions) }}
\t<div>
        <strong>{{ nb_conversions|number }}</strong>
        {{ 'General_EcommerceOrders'|translate }}
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        {% if goalAllowMultipleConversionsPerVisit is defined and goalAllowMultipleConversionsPerVisit %}
            ({{ 'General_NVisits'|translate(\"<strong>\"~nb_visits_converted~\"</strong>\")|raw }})
        {% endif %}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(urlSparklineRevenue) }}
\t<div>
        {% set revenue=revenue|money(idSite) %}
        <strong>{{ revenue|raw }}</strong> {{ 'General_TotalRevenue'|translate }}
\t</div>
    </div>

    <div class=\"sparkline\">{{ sparkline(urlSparklineAverageOrderValue) }}
\t<div>
        <strong>{{ avg_order_revenue|money(idSite)|raw }}</strong>
        {{ 'General_AverageOrderValue'|translate }}
\t</div>
    </div>
</div>
<div id='leftcolumn' {% if not isWidget %}style='width:33%;'{% endif %}>
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversionRate) }}
\t<div>
        {% set ecommerceOrdersText %}{{ 'General_EcommerceOrders'|translate }}{% endset %}
        {{ 'Goals_ConversionRate'|translate(\"<strong>\"~conversion_rate|percent~\"</strong> \"~ecommerceOrdersText)|raw }}
\t</div>
    </div>
    <div class=\"sparkline\">{{ sparkline(urlSparklinePurchasedProducts) }}
\t<div>
    <strong>{{ items|number }}</strong> {{ 'General_PurchasedProducts'|translate }}</div></div>
</div>
<div id='rightcolumn' {% if not isWidget %}style='width:30%;'{% endif %}>
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> {{ 'General_AbandonedCarts'|translate }}
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversions) }}
\t<div>
        {% set ecommerceAbandonedCartsText %}{{ 'Goals_AbandonedCart'|translate }}{% endset %}
        <strong>{{ cart_nb_conversions|number }}</strong> {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineRevenue) }}
\t<div>
        {% set revenue %}{{ cart_revenue|money(idSite)|raw }}{% endset %}
        {% set revenueText %}{{ 'General_ColumnRevenue'|translate }}{% endset %}
        <strong>{{ revenue }}</strong> {{ 'Goals_LeftInCart'|translate(revenueText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversionRate) }}
\t<div>
        <strong>{{ cart_conversion_rate|percent }}</strong>
        {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
{% include \"_sparklineFooter.twig\" %}
    </div></div>
", "@Ecommerce/getSparklines.twig", "C:\\wamp64\\www\\Mendoza\\piwik\\piwik\\plugins\\Ecommerce\\templates\\getSparklines.twig");
    }
}
