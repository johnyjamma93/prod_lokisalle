<?php

/* SyliusWebBundle:Frontend/Checkout/Step:finalize.html.twig */
class __TwigTemplate_ac073d0c6ef78c4efa02c93d4a3fedc29f6d02aecb14ac853f1a9632419d9ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <h1>";
        // line 5
        echo $this->env->getExtension('translator')->trans("sylius.checkout.finalize.header");
        echo "</h1>
</div>

";
        // line 8
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig")->display($context);
        // line 9
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.shipping_address"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.firstname"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "firstname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.lastname"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "lastname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.country"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "country"), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 31
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "province")))) {
            // line 32
            echo "                <tr>
                    <td><strong>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.province"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "province"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 37
        echo "                <tr>
                    <td><strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.street"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "street"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.city"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "city"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.postcode"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAddress"), "postcode"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-md-6\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.billing_address"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.firstname"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "firstname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.lastname"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "lastname"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.country"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "country"), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 72
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "province")))) {
            // line 73
            echo "                <tr>
                    <td><strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.province"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "province"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <td><strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.street"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "street"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.city"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "city"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.address.postcode"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAddress"), "postcode"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<table class=\"table table-striped table-bordered\">
    <thead>
        <tr>
            <th>#</th>
            <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.product.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order_item.quantity"), "html", null, true);
        echo "</th>
            <th><span class=\"pull-right\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order_item.unit_price"), "html", null, true);
        echo "</span></th>
            <th><span class=\"pull-right\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order_item.total"), "html", null, true);
        echo "</span></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "items"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            echo "            ";
            $this->env->loadTemplate("SyliusWebBundle:Frontend/Checkout/Step/Finalize:_item.html.twig")->display($context);
            // line 108
            echo "        ";
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
            // line 109
            echo "        <tr>
            <td colspan=\"6\">
                <hr />
                <div class=\"alert alert-info\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.no_items"), "html", null, true);
            echo "</div>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"6\">
                <span class=\"pull-right\">
                <strong>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.items_total"), "html", null, true);
        echo "</strong>: ";
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "itemsTotal"));
        echo "
                </span>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
            <p><strong>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.taxes"), "html", null, true);
        echo "</strong></p>
            <ul>
            ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "taxAdjustments"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["taxAdjustment"]) {
            // line 130
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxAdjustment"]) ? $context["taxAdjustment"] : $this->getContext($context, "taxAdjustment")), "description"), "html", null, true);
            echo " ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["taxAdjustment"]) ? $context["taxAdjustment"] : $this->getContext($context, "taxAdjustment")), "amount"));
            echo " </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            echo "                <li><span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.no_taxes"), "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxAdjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </ul>
            </td>
            <td colspan=\"2\">
                <span class=\"pull-right\">
                <strong>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.tax_total"), "html", null, true);
        echo "</strong>: ";
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "taxTotal"));
        echo "
                </span>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
            <p><strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.shipping_charges"), "html", null, true);
        echo "</strong></p>
            <ul>
            ";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingAdjustments"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 147
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adjustment"]) ? $context["adjustment"] : $this->getContext($context, "adjustment")), "description"), "html", null, true);
            echo " ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["adjustment"]) ? $context["adjustment"] : $this->getContext($context, "adjustment")), "amount"));
            echo " </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            echo "                <li><span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.no_shipping_charges"), "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "            </ul>
            </td>
            <td colspan=\"2\">
                <span class=\"pull-right\">
                <strong>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.shipping_total"), "html", null, true);
        echo "</strong>: ";
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shippingTotal"));
        echo "
                </span>
            </td>
        </tr>
        ";
        // line 159
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "promotionAdjustments")) > 0)) {
            // line 160
            echo "            <tr>
                <td colspan=\"4\">
                <p><strong>";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.promotion_discount"), "html", null, true);
            echo "</strong></p>
                <ul>
                ";
            // line 164
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "promotionAdjustments"));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 165
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adjustment"]) ? $context["adjustment"] : $this->getContext($context, "adjustment")), "description"), "html", null, true);
                echo " ";
                echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["adjustment"]) ? $context["adjustment"] : $this->getContext($context, "adjustment")), "amount"));
                echo " </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                </ul>
                </td>
                <td colspan=\"2\">
                    <span class=\"pull-right\">
                    <strong>";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.promotion_total"), "html", null, true);
            echo "</strong>: ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "promotionTotal"));
            echo "
                    </span>
                </td>
            </tr>
        ";
        }
        // line 176
        echo "        <tr style=\"background-color: #f1f1f1;\">
            <td colspan=\"6\">
                <span class=\"pull-right\">
                <strong>";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.total"), "html", null, true);
        echo "</strong>: ";
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"));
        echo "
                </span>
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"form-horizontal\">
    <div class=\"form-actions\">
        <a href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_display", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "previousStep"), "name"))), "html", null, true);
        echo "\" class=\"btn btn-lg\"><i class=\"icon-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.back"), "html", null, true);
        echo "</a> &nbsp;
        <a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_forward", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "currentStep"), "name"))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-success\"><i class=\"icon-ok\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.place_order"), "html", null, true);
        echo "</i></a> &nbsp;
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout/Step:finalize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 189,  471 => 188,  457 => 179,  452 => 176,  442 => 171,  436 => 167,  425 => 165,  421 => 164,  416 => 162,  412 => 160,  410 => 159,  401 => 155,  395 => 151,  386 => 149,  376 => 147,  371 => 146,  366 => 144,  355 => 138,  349 => 134,  340 => 132,  330 => 130,  325 => 129,  320 => 127,  309 => 121,  302 => 116,  292 => 112,  287 => 109,  274 => 108,  271 => 107,  253 => 106,  246 => 102,  242 => 101,  238 => 100,  234 => 99,  220 => 88,  216 => 87,  210 => 84,  206 => 83,  200 => 80,  196 => 79,  193 => 78,  187 => 75,  183 => 74,  180 => 73,  178 => 72,  173 => 70,  169 => 69,  163 => 66,  159 => 65,  153 => 62,  149 => 61,  141 => 56,  129 => 47,  125 => 46,  119 => 43,  115 => 42,  109 => 39,  105 => 38,  102 => 37,  96 => 34,  92 => 33,  89 => 32,  87 => 31,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  62 => 21,  58 => 20,  50 => 15,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
