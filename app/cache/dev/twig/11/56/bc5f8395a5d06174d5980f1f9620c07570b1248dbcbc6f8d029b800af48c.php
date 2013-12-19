<?php

/* SyliusWebBundle:Backend/TaxCategory:macros.html.twig */
class __TwigTemplate_1156bc5f8395a5d06174d5980f1f9620c07570b1248dbcbc6f8d029b800af48c extends Twig_Template
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
    public function getlist($_tax_categories = null)
    {
        $context = $this->env->mergeGlobals(array(
            "tax_categories" => $_tax_categories,
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
            if ((twig_length_filter($this->env, (isset($context["tax_categories"]) ? $context["tax_categories"] : $this->getContext($context, "tax_categories"))) > 0)) {
                // line 7
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.tax_category.id"));
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.tax_category.name"));
                echo "</th>
            <th>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_category.description"), "html", null, true);
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.tax_category.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tax_categories"]) ? $context["tax_categories"] : $this->getContext($context, "tax_categories")));
                foreach ($context['_seq'] as $context["_key"] => $context["tax_category"]) {
                    // line 19
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "name"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 22
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : null), "description"), $this->env->getExtension('translator')->trans("sylius.tax_category.no_description"))) : ($this->env->getExtension('translator')->trans("sylius.tax_category.no_description"))), "html", null, true);
                    echo "</td>
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 26
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_tax_category_update", array("id" => $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "id"))));
                    echo "
                    ";
                    // line 27
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_tax_category_delete", array("id" => $this->getAttribute((isset($context["tax_category"]) ? $context["tax_category"] : $this->getContext($context, "tax_category")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "    </tbody>
</table>
";
            } else {
                // line 35
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.tax_category.no_results"));
                echo "
";
            }
            // line 37
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
        return "SyliusWebBundle:Backend/TaxCategory:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  111 => 32,  100 => 27,  96 => 26,  90 => 23,  86 => 22,  73 => 19,  69 => 18,  61 => 13,  49 => 10,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  244 => 81,  200 => 79,  196 => 71,  192 => 69,  189 => 68,  185 => 50,  182 => 49,  178 => 44,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  133 => 19,  129 => 15,  126 => 14,  123 => 13,  116 => 35,  113 => 5,  107 => 82,  104 => 68,  95 => 61,  91 => 59,  88 => 58,  85 => 56,  77 => 51,  75 => 49,  72 => 48,  70 => 47,  66 => 45,  64 => 42,  57 => 12,  53 => 11,  51 => 29,  42 => 6,  40 => 13,  33 => 8,  31 => 5,  25 => 1,  82 => 21,  78 => 20,  74 => 23,  68 => 20,  63 => 18,  59 => 39,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
