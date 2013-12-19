<?php

/* SyliusWebBundle:Backend/Payment:macros.html.twig */
class __TwigTemplate_27898b302b6056fcdc46e9e62585d49d55960d93c10be95164f50faf9f9d45da extends Twig_Template
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
    public function getlist($_payments = null)
    {
        $context = $this->env->mergeGlobals(array(
            "payments" => $_payments,
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
            if ((twig_length_filter($this->env, (isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments"))) > 0)) {
                // line 8
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.payment.id"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("method", $this->env->getExtension('translator')->trans("sylius.payment.method"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("amount", $this->env->getExtension('translator')->trans("sylius.payment.amount"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("state", $this->env->getExtension('translator')->trans("sylius.payment.state"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("createdAt", $this->env->getExtension('translator')->trans("sylius.payment.created_at"));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.payment.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments")));
                foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                    // line 22
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "id"), "html", null, true);
                    echo "</td>
            <td><span class=\"label label-primary\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "method"), "html", null, true);
                    echo "</span></td>
            <td>
                ";
                    // line 26
                    echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "amount"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "currency"));
                    echo "
            </td>
            <td>";
                    // line 28
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "state"), "payment");
                    echo "</td>
            <td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "createdAt")), "html", null, true);
                    echo "</td>
            <td>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 33
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_payment_update", array("id" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "id"))));
                    echo "
                ";
                    // line 34
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_payment_delete", array("id" => $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "    </tbody>
</table>
";
            } else {
                // line 42
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.payment.no_results"));
                echo "
";
            }
            // line 44
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
        return "SyliusWebBundle:Backend/Payment:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  136 => 42,  131 => 39,  120 => 34,  116 => 33,  110 => 30,  106 => 29,  102 => 28,  97 => 26,  92 => 24,  88 => 23,  83 => 22,  79 => 21,  71 => 16,  67 => 15,  63 => 14,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  78 => 24,  74 => 23,  70 => 22,  64 => 19,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
