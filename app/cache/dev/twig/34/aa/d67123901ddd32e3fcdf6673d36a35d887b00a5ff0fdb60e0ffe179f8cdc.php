<?php

/* SyliusWebBundle:Backend/TaxRate:macros.html.twig */
class __TwigTemplate_34aad67123901ddd32e3fcdf6673d36a35d887b00a5ff0fdb60e0ffe179f8cdc extends Twig_Template
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
    public function getlist($_tax_rates = null)
    {
        $context = $this->env->mergeGlobals(array(
            "tax_rates" => $_tax_rates,
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
            if ((twig_length_filter($this->env, (isset($context["tax_rates"]) ? $context["tax_rates"] : $this->getContext($context, "tax_rates"))) > 0)) {
                // line 8
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("category", $this->env->getExtension('translator')->trans("sylius.tax_rate.category"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("zone", $this->env->getExtension('translator')->trans("sylius.tax_rate.zone"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.tax_rate.name"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("amount", $this->env->getExtension('translator')->trans("sylius.tax_rate.amount"));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("includedInPrice", $this->env->getExtension('translator')->trans("sylius.tax_rate.included_in_price"));
                echo "</th>
            <th>";
                // line 17
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("calculator", $this->env->getExtension('translator')->trans("sylius.tax_rate.calculator"));
                echo "</th>
            <th>";
                // line 18
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.tax_rate.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tax_rates"]) ? $context["tax_rates"] : $this->getContext($context, "tax_rates")));
                foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                    // line 24
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "category"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "zone"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "name"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "amountAsPercentage"), "html", null, true);
                    echo "%</td>
            <td>
                ";
                    // line 31
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "includedInPrice"));
                    echo "
            </td>
            <td><span class=\"label label-primary\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "calculator")))), "html", null, true);
                    echo "</span></td>
            <td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 37
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_show", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))));
                    echo "
                ";
                    // line 38
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_update", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))));
                    echo "
                ";
                    // line 39
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_delete", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "    </tbody>
</table>
";
            } else {
                // line 47
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.tax_rate.no_results"));
                echo "
";
            }
            // line 49
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
        return "SyliusWebBundle:Backend/TaxRate:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 49,  156 => 47,  151 => 44,  140 => 39,  136 => 38,  132 => 37,  126 => 34,  122 => 33,  117 => 31,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  91 => 24,  87 => 23,  71 => 16,  67 => 15,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  83 => 26,  79 => 18,  75 => 17,  68 => 20,  63 => 14,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
