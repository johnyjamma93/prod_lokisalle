<?php

/* SyliusWebBundle:Backend/Macros:misc.html.twig */
class __TwigTemplate_b7aff59c74835ca3e25fd304e9e4c10f8ceb1479a4a3ed4e2831b312f7c0e8c8 extends Twig_Template
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
        // line 18
        echo "
";
    }

    // line 1
    public function getpagination($_paginator = null, $_options = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
            "options" => $_options,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method"), false)) : (false))) {
                // line 3
                echo "<div class=\"row\">
    <div class=\"col-xs-9\">
        ";
                // line 5
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "twitter_bootstrap3_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array())) : (array())));
                echo "
    </div>

    <div class=\"col-xs-3\">
        <div class=\"pull-right\">
            <div class=\"btn-group paginator\">
                ";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderPaginateSelect((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), array(0 => 10, 1 => 20, 2 => 30));
                echo "
            </div>
        </div>
    </div>
</div>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getstate_label($_state = null, $_type = null)
    {
        $context = $this->env->mergeGlobals(array(
            "state" => $_state,
            "type" => $_type,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "payment")) {
                // line 21
                echo "    ";
                $context["label"] = ("sylius.payment.state." . (isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")));
                // line 22
                echo "    ";
                if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === "completed")) {
                    // line 23
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 24
                    echo "    ";
                } elseif (twig_in_filter((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")), array(0 => "checkout", 1 => "processing", 2 => "new"))) {
                    // line 25
                    echo "        ";
                    $context["class"] = "label-primary";
                    // line 26
                    echo "    ";
                } else {
                    // line 27
                    echo "        ";
                    $context["class"] = "label-danger";
                    // line 28
                    echo "    ";
                }
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "order")) {
                // line 30
                echo "    ";
                if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 1)) {
                    // line 31
                    echo "        ";
                    $context["label"] = "sylius.order.state.checkout";
                    // line 32
                    echo "        ";
                    $context["class"] = "label-warning";
                    // line 33
                    echo "    ";
                } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 2)) {
                    // line 34
                    echo "        ";
                    $context["label"] = "sylius.order.state.cart_locked";
                    // line 35
                    echo "        ";
                    $context["class"] = "label-default";
                    // line 36
                    echo "    ";
                } elseif (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) === 3)) {
                    // line 37
                    echo "        ";
                    $context["label"] = "sylius.order.state.ordered";
                    // line 38
                    echo "        ";
                    $context["class"] = "label-info";
                    // line 39
                    echo "    ";
                } else {
                    // line 40
                    echo "        ";
                    $context["label"] = "sylius.order.state.order_confimed";
                    // line 41
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 42
                    echo "    ";
                }
            } else {
                // line 44
                echo "    ";
                if ((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state"))) {
                    // line 45
                    echo "        ";
                    $context["label"] = "sylius.yes";
                    // line 46
                    echo "        ";
                    $context["class"] = "label-success";
                    // line 47
                    echo "    ";
                } else {
                    // line 48
                    echo "        ";
                    $context["label"] = "sylius.no";
                    // line 49
                    echo "        ";
                    $context["class"] = "label-danger";
                    // line 50
                    echo "    ";
                }
            }
            // line 52
            echo "<span class=\"label ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Macros:misc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  154 => 46,  148 => 44,  144 => 42,  138 => 40,  135 => 39,  132 => 38,  108 => 30,  101 => 27,  98 => 26,  92 => 24,  191 => 35,  179 => 34,  163 => 49,  151 => 45,  142 => 21,  112 => 15,  76 => 8,  34 => 5,  26 => 3,  22 => 12,  52 => 4,  37 => 12,  28 => 33,  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 20,  125 => 34,  121 => 33,  114 => 32,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 50,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 34,  115 => 27,  111 => 31,  106 => 25,  89 => 23,  81 => 20,  73 => 17,  69 => 19,  65 => 15,  61 => 25,  50 => 3,  48 => 7,  45 => 2,  43 => 5,  41 => 3,  39 => 3,  36 => 2,  24 => 1,  19 => 18,  244 => 79,  200 => 79,  196 => 36,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 48,  157 => 47,  153 => 21,  126 => 36,  123 => 35,  116 => 6,  104 => 28,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 6,  57 => 5,  53 => 11,  51 => 11,  42 => 5,  40 => 7,  33 => 1,  31 => 4,  145 => 22,  141 => 41,  133 => 35,  129 => 37,  117 => 33,  113 => 5,  107 => 14,  103 => 26,  95 => 25,  91 => 23,  83 => 21,  70 => 15,  64 => 7,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 18,);
    }
}
