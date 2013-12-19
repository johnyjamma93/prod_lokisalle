<?php

/* SyliusWebBundle:Backend/Product:macros.html.twig */
class __TwigTemplate_dfd824bb0f8f819a4985514f8212c393bd9dc5a658d20f927c42067f4167691f extends Twig_Template
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
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 4
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 5
            echo "
";
            // line 6
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) > 0)) {
                // line 7
                echo "<table class=\"sylius-products-table table table-bordered\">
    <thead>
        <tr>
            <th class=\"id\">";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
            <th class=\"info\">";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.product.name"));
                echo "</th>
            <th class=\"stock\">";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.stock"), "html", null, true);
                echo "</th>
            <th class=\"retail-price\">";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.price"), "html", null, true);
                echo "</th>
            <th class=\"updated-at\">";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", "Updated At");
                echo "</th>
            <th class=\"actions\"></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                    echo "\">
            <td class=\"id\">
                ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                    echo "
            </td>
            <td class=\"info\">
                <div class=\"media\">
                    <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"pull-left\"
                       title=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.view_details", array("%product%" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"))), "html_attr");
                    echo "\">
                        <img src=\"";
                    // line 28
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_50x40")) : ("http://placehold.it/50x40")), "html", null, true);
                    echo "\" alt=\"\" class=\"imgmedia-object\" />
                    </a>
                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a class=\"name\"
                               href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\"
                               title=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.view_details", array("%product%" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"))), "html_attr");
                    echo "\">
                                ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                    echo "
                            </a>
                            ";
                    // line 37
                    if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isAvailable"))) {
                        // line 38
                        echo "                                <span class=\"label label-default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.unavailable"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 40
                    echo "                        </h5>
                        <div class=\"media-body\">
                            ";
                    // line 42
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku")) {
                        // line 43
                        echo "                                <strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.sku"), "html", null, true);
                        echo ": </strong> <code class=\"sku\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku"), "html", null, true);
                        echo "</code>
                            ";
                    }
                    // line 45
                    echo "                        </div>
                    </div>
                </div>
            </td>
            ";
                    // line 49
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
                        // line 50
                        echo "                <td class=\"stock contain-variants text-muted\">
                    <em>";
                        // line 51
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.contain_variants"), "html", null, true);
                        echo "</em>
                </td>
            ";
                    } else {
                        // line 54
                        echo "                ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand") > 0) && $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "isAvailable"))) {
                            // line 55
                            echo "                    <td class=\"stock in-stock\">
                        ";
                            // line 56
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand"), "html", null, true);
                            echo "
                    </td>
                ";
                        } else {
                            // line 59
                            echo "                    <td class=\"stock out-of-stock text-muted\">
                        <em>";
                            // line 60
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.out_of_stock"), "html", null, true);
                            echo "</em>
                    </td>
                ";
                        }
                        // line 63
                        echo "            ";
                    }
                    // line 64
                    echo "

            ";
                    // line 67
                    echo "            ";
                    if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions"))) {
                        // line 68
                        echo "                <td class=\"retail-price\">
                    ";
                        // line 69
                        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
                        echo "
                </td>
            ";
                    } else {
                        // line 72
                        echo "                <td class=\"retail-price text-muted\">
                    <em>";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.na"), "html", null, true);
                        echo "</em>
                </td>
            ";
                    }
                    // line 76
                    echo "
            <td class=\"updated-at\">
                ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "updatedAt"), "Y/m/d"), "html", null, true);
                    echo "
            </td>
            <td class=\"actions text-right\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-primary edit\" href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\"
                        title=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("sylius.edit")), "html", null, true);
                    echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span> ";
                    // line 84
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("sylius.edit")), "html", null, true);
                    echo "
                    </a>
                    <a class=\"btn btn-sm btn-danger delete\"
                       href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\"
                       title=\"";
                    // line 88
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("sylius.delete")), "html", null, true);
                    echo "\">
                        <span class=\"glyphicon glyphicon-trash\"></span> ";
                    // line 89
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("sylius.delete")), "html", null, true);
                    echo "
                    </a>
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "    </tbody>
</table>
";
            } else {
                // line 98
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.product.no_results"));
                echo "
";
            }
            // line 100
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
        return "SyliusWebBundle:Backend/Product:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 100,  257 => 98,  252 => 95,  240 => 89,  236 => 88,  232 => 87,  226 => 84,  222 => 83,  218 => 82,  211 => 78,  207 => 76,  201 => 73,  198 => 72,  192 => 69,  189 => 68,  186 => 67,  182 => 64,  179 => 63,  173 => 60,  170 => 59,  164 => 56,  161 => 55,  158 => 54,  152 => 51,  149 => 50,  147 => 49,  141 => 45,  133 => 43,  131 => 42,  127 => 40,  121 => 38,  119 => 37,  114 => 35,  110 => 34,  106 => 33,  98 => 28,  94 => 27,  90 => 26,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  91 => 28,  87 => 27,  83 => 22,  80 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
