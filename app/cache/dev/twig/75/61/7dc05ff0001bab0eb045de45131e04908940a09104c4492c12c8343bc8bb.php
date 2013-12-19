<?php

/* SyliusWebBundle:Backend/Product:show.html.twig */
class __TwigTemplate_75617dc05ff0001bab0eb045de45131e04908940a09104c4492c12c8343bc8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_87c357bc66ffb611abe927dce743d6ca47b3c08c192bb32f39f522579cfadd65"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Variant:macros.html.twig");
        // line 4
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        // line 5
        $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
        // line 6
        $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_topbar($context, array $blocks = array())
    {
        // line 9
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.product.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
    ";
        // line 19
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_index"), $this->env->getExtension('translator')->trans("sylius.product.manage"));
        echo "
    ";
        // line 20
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))));
        echo "
    ";
        // line 21
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), null, false, false);
        echo "
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"btn btn-info\">
       <i class=\"glyphicon glyphicon-shopping-cart\"></i>
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.show_in_store"), "html", null, true);
        echo "
    </a>
    </div>
    <h1><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        // line 27
        echo $this->env->getExtension('translator')->trans("sylius.product.show_header", array("%product%" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name")));
        echo "</h1>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</div>
            <div class=\"panel-body\">";
        // line 34
        echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription"), $this->env->getExtension('translator')->trans("sylius.product.no_short_description"))) : ($this->env->getExtension('translator')->trans("sylius.product.no_short_description")));
        echo "</div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"well\">
            <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.general_info"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipment.id"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.sku"), "html", null, true);
        echo "</td>
                    <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.name"), "html", null, true);
        echo "</td>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.available_on"), "html", null, true);
        echo "</td>
                    <td><span class=\"label label-";
        // line 67
        echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "available")) ? ("success") : ("danger"));
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "availableOn")), "html", null, true);
        echo "</span></td>
                </tr>
                <tr>
                    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.options"), "html", null, true);
        echo "</td>
                    <td>
                        ";
        // line 72
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "options")) > 0)) {
            // line 73
            echo "                        <ul>
                        ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "options"));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 75
                echo "                            <li><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "values"), ", "), "html", null, true);
                echo ".</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                        </ul>
                        ";
        } else {
            // line 79
            echo "                            <span class=\"label label-info\">
                                <i class=\"glyphicon glyphicon-list-alt icon-white\"></i> ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.no_options"), "html", null, true);
            echo "
                            </span>
                        ";
        }
        // line 83
        echo "                    </td>
                </tr>
                <tr>
                    <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.categorization"), "html", null, true);
        echo "</td>
                    <td>
                        ";
        // line 88
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "taxons")) > 0)) {
            // line 89
            echo "                        <ul>
                        ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "taxons"));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 91
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name"), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </ul>
                        ";
        } else {
            // line 95
            echo "                            <span class=\"label label-info\">
                                <i class=\"glyphicon glyphicon-list-alt icon-white\"></i> ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.no_taxons"), "html", null, true);
            echo "
                            </span>
                        ";
        }
        // line 99
        echo "                    </td>
                </tr>
                <tr>
                    <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tax_category"), "html", null, true);
        echo "</td>
                    <td>";
        // line 103
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "taxCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "taxCategory"), $this->env->getExtension('translator')->trans("sylius.product.no_tax_category"))) : ($this->env->getExtension('translator')->trans("sylius.product.no_tax_category"))), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.shipping_category"), "html", null, true);
        echo "</td>
                    <td>";
        // line 107
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shippingCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shippingCategory"), $this->env->getExtension('translator')->trans("sylius.product.no_shipping_category"))) : ($this->env->getExtension('translator')->trans("sylius.product.no_shipping_category"))), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.available_on_demand"), "html", null, true);
        echo "</td>
                    <td>
                        ";
        // line 112
        echo $context["misc"]->getstate_label($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "availableOnDemand"));
        echo "
                    </td>
                </tr>
                ";
        // line 115
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "restrictedZone")) {
            // line 116
            echo "                    <tr>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.restricted_zone"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_zone_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "restrictedZone"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "restrictedZone"), "name"), "html", null, true);
            echo "</a>
                        </td>
                    </tr>
                ";
        }
        // line 123
        echo "                <tr>
                    <td>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.stock"), "html", null, true);
        echo "</td>
                    <td><span class=\"label label-";
        // line 125
        echo (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "inStock")) ? ("success") : ("important"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand"), "html", null, true);
        echo "</span></td>
                </tr>
                <tr>
                    <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.price"), "html", null, true);
        echo "</td>
                    <td>";
        // line 129
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=\"col-md-6\">
        ";
        // line 136
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images")) > 0)) {
            // line 137
            echo "            <div id=\"gallery\">
                ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 139
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_gallery"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\" class=\"thumbnail\">
                    <img src=\"";
                // line 140
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
            // line 143
            echo "            </div>
        ";
        } else {
            // line 145
            echo "            ";
            echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_images"));
            echo "
        ";
        }
        // line 147
        echo "
        <hr>
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.properties"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "properties"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 157
            echo "                <tr>
                    <td><strong>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "value"), "html", null, true);
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 162
            echo "                <tr>
                    <td colspan=\"2\">
                        <span class=\"label label-info\">
                            <i class=\"glyphicon glyphicon-list-alt icon-white\"></i> ";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.no_properties"), "html", null, true);
            echo "
                        </span>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "            </tbody>
        </table>
    </div>
</div>

";
        // line 175
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
            // line 176
            echo "<hr>
<div class=\"well well-sm\">
    ";
            // line 178
            echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_variant_create", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), $this->env->getExtension('translator')->trans("sylius.variant.create"));
            echo "
    ";
            // line 179
            echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_variant_generate", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), $this->env->getExtension('translator')->trans("sylius.product.generate_variants"));
            echo "
    <div class=\"pull-right\">
        <strong>";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.variant_selection_method"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variantSelectionMethodLabel"), "html", null, true);
            echo "
    </div>
</div>

";
            // line 185
            echo $context["__internal_87c357bc66ffb611abe927dce743d6ca47b3c08c192bb32f39f522579cfadd65"]->getlist($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants"));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 185,  446 => 181,  441 => 179,  437 => 178,  433 => 176,  431 => 175,  424 => 170,  413 => 165,  408 => 162,  400 => 159,  396 => 158,  393 => 157,  388 => 156,  381 => 152,  374 => 147,  368 => 145,  364 => 143,  353 => 140,  346 => 139,  342 => 138,  339 => 137,  337 => 136,  327 => 129,  323 => 128,  315 => 125,  311 => 124,  308 => 123,  299 => 119,  294 => 117,  291 => 116,  289 => 115,  283 => 112,  278 => 110,  272 => 107,  268 => 106,  262 => 103,  258 => 102,  253 => 99,  247 => 96,  244 => 95,  240 => 93,  231 => 91,  227 => 90,  224 => 89,  222 => 88,  217 => 86,  212 => 83,  206 => 80,  203 => 79,  199 => 77,  188 => 75,  184 => 74,  181 => 73,  179 => 72,  174 => 70,  166 => 67,  162 => 66,  156 => 63,  152 => 62,  146 => 59,  142 => 58,  136 => 55,  132 => 54,  124 => 49,  111 => 39,  103 => 34,  99 => 33,  90 => 27,  84 => 24,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 17,  60 => 16,  53 => 12,  47 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 6,  30 => 5,  28 => 4,  26 => 3,);
    }
}
