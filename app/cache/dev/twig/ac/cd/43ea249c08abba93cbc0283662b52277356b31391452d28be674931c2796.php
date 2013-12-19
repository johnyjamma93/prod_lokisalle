<?php

/* SyliusWebBundle:Frontend/Cart:summary.html.twig */
class __TwigTemplate_accd43ea249c08abba93cbc0283662b52277356b31391452d28be674931c2796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sylius_cart_item_row' => array($this, 'block_sylius_cart_item_row'),
            'form_message' => array($this, 'block_form_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Frontend/Macros:alerts.html.twig");
        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
<h1>";
        // line 9
        echo $this->env->getExtension('translator')->trans("sylius.cart.summary_header");
        echo "</h1>
</div>

";
        // line 12
        if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "empty"))) {
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

<form action=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("sylius_cart_save");
            echo "\" method=\"post\" novalidate>
<table class=\"table\">
    <thead>
        <tr>
            <th>#</th>
            <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.product"), "html", null, true);
            echo "</th>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.quantity"), "html", null, true);
            echo "</th>
            <th></th>
            <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.unit_price"), "html", null, true);
            echo "</th>
            <th style=\"text-align: right;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.total"), "html", null, true);
            echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "items"));
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
                // line 29
                echo "            ";
                $this->env->loadTemplate("SyliusWebBundle:Frontend/Cart:_item.html.twig")->display($context);
                // line 30
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </tbody>
    <tfoot>
        ";
            // line 33
            if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "promotionTotal")) {
                // line 34
                echo "        <tr>
            <td colspan=\"6\" style=\"text-align: right;\">
                <strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.promotion_total"), "html", null, true);
                echo "</strong>: ";
                echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "promotionTotal"));
                echo "
            </td>
        </tr>
        ";
            }
            // line 40
            echo "        <tr>
            <td colspan=\"6\" style=\"text-align: right;\">
                <strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.shipping_total"), "html", null, true);
            echo "</strong>: ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "shippingTotal"));
            echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <p><strong>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.taxes"), "html", null, true);
            echo "</strong></p>
                <ul>
                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "taxAdjustments"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["taxAdjustment"]) {
                // line 50
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxAdjustment"]) ? $context["taxAdjustment"] : $this->getContext($context, "taxAdjustment")), "description"), "html", null, true);
                echo " ";
                echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["taxAdjustment"]) ? $context["taxAdjustment"] : $this->getContext($context, "taxAdjustment")), "amount"));
                echo " </li>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 52
                echo "                    <li><span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.no_taxes"), "html", null, true);
                echo "</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxAdjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </ul>
            </td>
            <td colspan=\"2\" style=\"text-align: right;\">
                <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.tax_total"), "html", null, true);
            echo "</strong>: ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "taxTotal"));
            echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"6\" style=\"text-align: right;\">
                <strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.grand_total"), "html", null, true);
            echo "</strong>: ";
            echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "total"));
            echo "
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"well well-sm\">
    ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotionCoupon"), 'row', array("label_attr" => array("class" => "col-lg-12")));
            echo "
    <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.add_coupon"), "html", null, true);
            echo "</button>
</div>

";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
<div class=\"well\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"icon-save\"></i> ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.save"), "html", null, true);
            echo "</button>
    <div class=\"pull-right\">
    <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("sylius_checkout_start");
            echo "\" class=\"btn btn-success btn-lg\"><i class=\"icon-shopping-cart\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.checkout"), "html", null, true);
            echo "</a>
    <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("sylius_cart_clear");
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.clear"), "html", null, true);
            echo "</a>
    </div>
</div>
</form>
";
        } else {
            // line 83
            echo "    ";
            echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.cart.empty"));
            echo "
";
        }
        // line 85
        echo "
";
    }

    // line 88
    public function block_sylius_cart_item_row($context, array $blocks = array())
    {
        // line 89
        $this->displayParentBlock("sylius_cart_item_row", $context, $blocks);
        echo "
";
        // line 90
        $this->displayBlock('form_message', $context, $blocks);
    }

    public function block_form_message($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 90,  254 => 89,  251 => 88,  246 => 85,  240 => 83,  230 => 78,  224 => 77,  219 => 75,  214 => 73,  208 => 70,  204 => 69,  192 => 62,  182 => 57,  177 => 54,  168 => 52,  158 => 50,  153 => 49,  148 => 47,  138 => 42,  134 => 40,  125 => 36,  121 => 34,  119 => 33,  115 => 31,  101 => 30,  98 => 29,  81 => 28,  74 => 24,  70 => 23,  65 => 21,  61 => 20,  53 => 15,  48 => 13,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  29 => 5,  27 => 3,);
    }
}
