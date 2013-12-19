<?php

/* SyliusWebBundle:Backend/ExchangeRate:macros.html.twig */
class __TwigTemplate_07b6d8c1d37928708d5e9ccf908974dba1e8718a5ebf305c4ee6b5e6cbd8ccec extends Twig_Template
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
    public function getlist($_countries = null)
    {
        $context = $this->env->mergeGlobals(array(
            "countries" => $_countries,
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
            if ((twig_length_filter($this->env, (isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries"))) > 0)) {
                // line 7
                echo "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.exchange_rate.id"));
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("currency", $this->env->getExtension('translator')->trans("sylius.exchange_rate.currency"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("rate", $this->env->getExtension('translator')->trans("sylius.exchange_rate.rate"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.exchange_rate.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
                foreach ($context['_seq'] as $context["_key"] => $context["exchange_rate"]) {
                    // line 19
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "currencyName"), "html", null, true);
                    echo "</td>
            <td><span class=\"label label-primary\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "rate"), "html", null, true);
                    echo "</span></td>
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 26
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_exchange_rate_update", array("id" => $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "id"))));
                    echo "
                ";
                    // line 27
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_exchange_rate_delete", array("id" => $this->getAttribute((isset($context["exchange_rate"]) ? $context["exchange_rate"] : $this->getContext($context, "exchange_rate")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exchange_rate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "    </tbody>
</table>
";
            } else {
                // line 35
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.exchange_rate.no_results"));
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
        return "SyliusWebBundle:Backend/ExchangeRate:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  116 => 35,  111 => 32,  100 => 27,  96 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 19,  69 => 18,  61 => 13,  49 => 10,  44 => 7,  42 => 6,  37 => 4,  35 => 3,  32 => 2,  21 => 1,  68 => 21,  62 => 18,  57 => 12,  53 => 11,  50 => 13,  43 => 9,  39 => 5,  36 => 7,  33 => 6,  28 => 4,  26 => 3,);
    }
}
