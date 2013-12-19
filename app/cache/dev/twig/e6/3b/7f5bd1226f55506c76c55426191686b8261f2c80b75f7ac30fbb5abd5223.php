<?php

/* SyliusWebBundle:Backend/Order:macros.html.twig */
class __TwigTemplate_e63b7f5bd1226f55506c76c55426191686b8261f2c80b75f7ac30fbb5abd5223 extends Twig_Template
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
        // line 63
        echo "
";
    }

    // line 1
    public function getlist($_orders = null, $_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "orders" => $_orders,
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 4
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 5
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 6
            echo "
";
            // line 7
            $context["router_paramters"] = (((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) ? (array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) : (array()));
            // line 8
            echo "
";
            // line 9
            if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
                // line 10
                echo "<table id=\"orders\" class=\"table\">
    <thead>
        <tr>
            <th></th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("createdAt", $this->env->getExtension('translator')->trans("sylius.order.created_at"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("number", $this->env->getExtension('translator')->trans("sylius.order.number"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("paymentState", $this->env->getExtension('translator')->trans("sylius.order.payment_state"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 17
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("shipmentState", $this->env->getExtension('translator')->trans("sylius.order.shipment_state"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 18
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("user", $this->env->getExtension('translator')->trans("sylius.order.user"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th>";
                // line 19
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("total", $this->env->getExtension('translator')->trans("sylius.order.total"), null, array("route_params" => (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters"))));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 25
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"), "html", null, true);
                    echo "\">
            <td class=\"center-text\"><input type=\"checkbox\" value=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"), "html", null, true);
                    echo "\" /></td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "createdAt")), "html", null, true);
                    echo "</td>
            <td>
                <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                    echo "\">
                    <strong>#";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "number"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            <td>
                ";
                    // line 34
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_paymentState.html.twig")->display($context);
                    // line 35
                    echo "            </td>
            <td>
                ";
                    // line 37
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_shippingState.html.twig")->display($context);
                    // line 38
                    echo "            </td>
            <td>
                <p>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "fullName"), "html", null, true);
                    echo " <br><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "email"), "html", null, true);
                    echo "</a></p>
            </td>
            <td>";
                    // line 42
                    echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency"));
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 45
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                    echo "
                ";
                    // line 46
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_order_update", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                    echo "
                ";
                    // line 47
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_order_delete", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    </tbody>
</table>
";
            } else {
                // line 55
                echo "    ";
                if ((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) {
                    // line 56
                    echo "        ";
                    echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.order.no_results"));
                    echo "
    ";
                } else {
                    // line 58
                    echo "        ";
                    echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.order.no_results"));
                    echo "
    ";
                }
            }
            // line 61
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getsimple_list($_orders = null)
    {
        $context = $this->env->mergeGlobals(array(
            "orders" => $_orders,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "
";
            // line 66
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 67
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 68
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 69
            echo "
";
            // line 70
            if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
                // line 71
                echo "<table id=\"orders\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.number"), "html", null, true);
                echo "</th>
            <th>";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.payment_state"), "html", null, true);
                echo "</th>
            <th>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.shipment_state"), "html", null, true);
                echo "</th>
            <th>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.user"), "html", null, true);
                echo "</th>
            <th>";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.total"), "html", null, true);
                echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 82
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 83
                    echo "        <tr>
            <td>
                <a href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                    echo "\">
                <strong>#";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "number"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            <td>
                ";
                    // line 90
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_paymentState.html.twig")->display($context);
                    // line 91
                    echo "            </td>
            <td>
                ";
                    // line 93
                    $this->env->loadTemplate("SyliusWebBundle:Backend/Order:_shippingState.html.twig")->display($context);
                    // line 94
                    echo "            </td>
            <td style=\"width: 20%\">
                ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "fullname"), "html", null, true);
                    echo "<br>
                <a href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "user"), "email"), "html", null, true);
                    echo "
                </a>
            </td>
            <td>";
                    // line 101
                    echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency"));
                    echo "</td>
        </tr>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "    </tbody>
</table>
";
            } else {
                // line 107
                echo "    ";
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.order.no_results"));
                echo "
";
            }
            // line 109
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Order:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 77,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 68,  234 => 67,  232 => 66,  229 => 65,  218 => 64,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 47,  162 => 46,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 63,  244 => 81,  200 => 79,  196 => 71,  192 => 69,  189 => 68,  185 => 52,  182 => 49,  178 => 44,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  126 => 14,  123 => 13,  116 => 6,  104 => 68,  88 => 58,  85 => 56,  82 => 55,  77 => 18,  75 => 49,  72 => 48,  66 => 45,  59 => 39,  57 => 32,  53 => 9,  51 => 29,  42 => 22,  40 => 13,  33 => 8,  31 => 5,  145 => 56,  141 => 55,  133 => 35,  129 => 15,  117 => 42,  113 => 5,  107 => 82,  103 => 37,  95 => 61,  91 => 59,  83 => 28,  70 => 47,  64 => 42,  55 => 10,  49 => 14,  38 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 1,);
    }
}
