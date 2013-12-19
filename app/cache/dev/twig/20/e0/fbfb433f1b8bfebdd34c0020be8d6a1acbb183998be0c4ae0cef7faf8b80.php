<?php

/* SyliusWebBundle:Backend/Inventory:macros.html.twig */
class __TwigTemplate_20e0fbfb433f1b8bfebdd34c0020be8d6a1acbb183998be0c4ae0cef7faf8b80 extends Twig_Template
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
    }

    // line 1
    public function getlist($_products = null)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["__internal_75ac6359aeaef36690f887c67363410bbc9781ee0aee96477615e87c22a6afb6"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Variant:macros.html.twig");
            // line 4
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 5
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 6
            echo "
";
            // line 7
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) > 0)) {
                // line 8
                echo "<table class=\"table\" id=\"stockables\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("sku", $this->env->getExtension('translator')->trans("sylius.stockable.sku"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.product.name"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("onHand", $this->env->getExtension('translator')->trans("sylius.stockable.on_hand"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "            <tr>
                <td>
                    ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                    echo "
                </td>
                <td>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku"), "html", null, true);
                    echo "
                </td>
                <td>
                    <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                        <strong>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                    echo "</strong>
                    </a>
                </td>
                <td>
                    ";
                    // line 33
                    if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions"))) {
                        // line 34
                        echo "                        <span class=\"label label-";
                        echo (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "isInStock")) ? ("success") : ("danger"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand"), "html", null, true);
                        echo "</span>
                    ";
                    } else {
                        // line 36
                        echo "                        -
                    ";
                    }
                    // line 38
                    echo "                </td>
                <td>
                    <div class=\"pull-right\">
                        ";
                    // line 41
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))));
                    echo "
                    </div>
                </td>
            </tr>
            ";
                    // line 45
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
                        // line 46
                        echo "            <tr class=\"sub-table\">
                <td class=\"variant-table-toggle\"><i class=\"icon icon-chevron-down\"></i></td>
                <td colspan=\"4\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.availability"), "html", null, true);
                        echo "</th>
                                <th>";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.options"), "html", null, true);
                        echo "</th>
                                <th></th>
                                <th colspan=\"2\"></th>
                            </tr>
                        </thead>
                        <tbody style=\"display: none\">
                            ";
                        // line 60
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants"));
                        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                            // line 61
                            echo "                                <tr>
                                    <td>";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"), "html", null, true);
                            echo "</td>
                                    <td><span class=\"label label-";
                            // line 63
                            echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "available")) ? ("success") : ("danger"));
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "availableOn")), "html", null, true);
                            echo "</span></td>
                                    <td>
                                        <ul>
                                        ";
                            // line 66
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 67
                                echo "                                            <li><strong>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                                echo "</strong>: ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                                echo "</li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 69
                            echo "                                        </ul>
                                    </td>
                                    <td><span class=\"label label-";
                            // line 71
                            echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "inStock")) ? ("success") : ("danger"));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHand"), "html", null, true);
                            echo "</span></td>
                                    <td>
                                        <div class=\"pull-right\">
                                            ";
                            // line 74
                            echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_variant_update", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"))));
                            echo "
                                        </div>
                                    </td>
                                </tr>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "                        </tbody>
                    </table>
                </td>
            </tr>
            ";
                    }
                    // line 84
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "    </tbody>
</table>
";
            } else {
                // line 88
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_results"));
                echo "
";
            }
            // line 90
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
        return "SyliusWebBundle:Backend/Inventory:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 90,  227 => 88,  222 => 85,  216 => 84,  209 => 79,  198 => 74,  190 => 71,  186 => 69,  175 => 67,  171 => 66,  163 => 63,  159 => 62,  156 => 61,  152 => 60,  143 => 54,  139 => 53,  130 => 46,  128 => 45,  121 => 41,  116 => 38,  112 => 36,  104 => 34,  102 => 33,  95 => 29,  91 => 28,  85 => 25,  79 => 22,  75 => 20,  71 => 19,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 25,  78 => 24,  74 => 23,  68 => 20,  63 => 14,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
