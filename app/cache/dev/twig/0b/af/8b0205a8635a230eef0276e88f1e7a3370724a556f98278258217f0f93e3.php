<?php

/* SyliusWebBundle:Frontend/Product:show.html.twig */
class __TwigTemplate_0baf8b0205a8635a230eef0276e88f1e7a3370724a556f98278258217f0f93e3 extends Twig_Template
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
        // line 3
        $context["form"] = $this->env->getExtension('sylius_cart')->getItemFormView(array("product" => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"thumbnail\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_200x200")) : ("http://placehold.it/200x200")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div class=\"col-md-9\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"btn btn-link\"><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</h3></a>
        <p>";
        // line 14
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription"), "sylius.product.no_description")) : ("sylius.product.no_description")));
        echo "</p>
    </div>
</div>
";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images")) > 0)) {
            // line 18
            echo "<hr>
<div id=\"gallery\">
    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_gallery"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\">
            <img class=\"img-rounded\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_90x60"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\" />
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
";
        }
        // line 27
        echo "<hr>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "properties")) > 0)) {
            // line 31
            echo "        <table class=\"table table-condensed\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.properties"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "properties"));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 39
                echo "                <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "presentation"), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "value"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tbody>
        </table>
        ";
        }
        // line 47
        echo "    </div>
    <div class=\"col-md-6\">
        <h4>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.description"), "html", null, true);
        echo "</h4>
        <p>";
        // line 50
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "sylius.product.no_description")) : ("sylius.product.no_description")));
        echo "</p>
    </div>
</div>
<hr>
<div class=\"row\">
    <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_item_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"clearfix form-horizontal\">
    ";
        // line 56
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasVariants")) {
            // line 57
            echo "        <div class=\"col-md-6\">
            ";
            // line 58
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isVariantSelectionMethodChoice")) {
                // line 59
                echo "            <table class=\"table table-condensed\">
                <thead>
                    <tr>
                        <th></th>
                        <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.price"), "html", null, true);
                echo "</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                    if ($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "available")) {
                        // line 69
                        echo "                    <tr>
                        <td>
                            ";
                        // line 71
                        if (twig_test_empty($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "presentation"))) {
                            // line 72
                            echo "                            <ul class=\"unstyled\">
                                ";
                            // line 73
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 74
                                echo "                                <li><strong>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "presentation"), "html", null, true);
                                echo "</strong>: ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                                echo "</li>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 76
                            echo "                            </ul>
                            ";
                        } else {
                            // line 78
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "presentation"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 80
                        echo "                        </td>
                        <td>
                            <span class=\"label label-success\">";
                        // line 82
                        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "price"));
                        echo "</span>
                        </td>
                        <td>
                        ";
                        // line 85
                        if ($this->env->getExtension('sylius_inventory')->isStockAvailable((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")))) {
                            // line 86
                            echo "                            ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variant"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), 'widget');
                            echo "
                        ";
                        } else {
                            // line 88
                            echo "                            <span class=\"label label-important\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.out_of_stock"), "html", null, true);
                            echo "</span>
                        ";
                        }
                        // line 90
                        echo "                        </td>
                    </tr>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                </tbody>
            </table>
            ";
            } else {
                // line 96
                echo "                <div class=\"well clearfix\">
                    ";
                // line 97
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variant"), 'widget');
                echo "
                </div>
            ";
            }
            // line 100
            echo "        </div>
    ";
        }
        // line 102
        echo "    <div class=\"col-md-6 pull-right\">
        ";
        // line 103
        if (((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasVariants")) && (!$this->env->getExtension('sylius_inventory')->isStockAvailable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"))))) {
            // line 104
            echo "            <span class=\"label label-important\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.out_of_stock"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 106
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'row', array("attr" => array("class" => "center-text"), "empty_value" => "1"));
            echo "
            ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
            echo "
            <br>
            <br>
            ";
            // line 110
            if ($this->env->getExtension('sylius_restricted_zone')->isRestricted((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")))) {
                // line 111
                echo "            <button disabled=\"disabled\" class=\"btn btn-success btn-lg btn-block\"><i class=\"icon-shopping-cart icon-white icon-large\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product_not_available_in_zone"), "html", null, true);
                echo "</button>
            ";
            } else {
                // line 113
                echo "                <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\"><i class=\"icon-shopping-cart icon-white icon-large\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.add_to_cart"), "html", null, true);
                echo "</button>
            ";
            }
            // line 115
            echo "        ";
        }
        // line 116
        echo "    </div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 116,  314 => 115,  308 => 113,  302 => 111,  300 => 110,  294 => 107,  289 => 106,  283 => 104,  281 => 103,  278 => 102,  274 => 100,  268 => 97,  265 => 96,  260 => 93,  248 => 90,  242 => 88,  236 => 86,  234 => 85,  228 => 82,  224 => 80,  218 => 78,  214 => 76,  203 => 74,  199 => 73,  196 => 72,  194 => 71,  190 => 69,  179 => 68,  171 => 63,  165 => 59,  163 => 58,  160 => 57,  158 => 56,  154 => 55,  146 => 50,  142 => 49,  138 => 47,  133 => 44,  124 => 41,  120 => 40,  117 => 39,  113 => 38,  106 => 34,  101 => 31,  99 => 30,  94 => 27,  90 => 25,  79 => 22,  72 => 21,  68 => 20,  64 => 18,  62 => 17,  56 => 14,  50 => 13,  41 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
