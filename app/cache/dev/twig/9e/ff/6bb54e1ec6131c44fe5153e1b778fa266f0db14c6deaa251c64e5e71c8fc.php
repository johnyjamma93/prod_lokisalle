<?php

/* SyliusWebBundle:Backend/PaymentMethod:macros.html.twig */
class __TwigTemplate_9eff6bb54e1ec6131c44fe5153e1b778fa266f0db14c6deaa251c64e5e71c8fc extends Twig_Template
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
    public function getlist($_payment_methods = null)
    {
        $context = $this->env->mergeGlobals(array(
            "payment_methods" => $_payment_methods,
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
            if ((twig_length_filter($this->env, (isset($context["payment_methods"]) ? $context["payment_methods"] : $this->getContext($context, "payment_methods"))) > 0)) {
                // line 7
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.payment_method.id"));
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.payment_method.name"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("gateway", $this->env->getExtension('translator')->trans("sylius.payment_method.gateway"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("enabled", $this->env->getExtension('translator')->trans("sylius.payment_method.enabled"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.payment_method.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : $this->getContext($context, "payment_methods")));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 20
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "id"), "html", null, true);
                    echo "</td>
            <td>
                <strong>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "name"), "html", null, true);
                    echo "</strong>
                <p>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "description"), "html", null, true);
                    echo "</p>
            </td>
            <td><span class=\"label label-primary\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "gateway"), "html", null, true);
                    echo "</span></td>
            <td>
                <span class=\"label label-";
                    // line 28
                    echo (($this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "enabled")) ? ("success") : ("danger"));
                    echo "\">
                    ";
                    // line 29
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "enabled")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                </span>
            </td>
            <td>";
                    // line 32
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 35
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_payment_method_update", array("id" => $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "id"))));
                    echo "
                ";
                    // line 36
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_payment_method_delete", array("id" => $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : $this->getContext($context, "payment_method")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "    </tbody>
</table>
";
            } else {
                // line 44
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.payment_method.no_results"));
                echo "
";
            }
            // line 46
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
        return "SyliusWebBundle:Backend/PaymentMethod:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  137 => 44,  132 => 41,  121 => 36,  117 => 35,  111 => 32,  105 => 29,  101 => 28,  96 => 26,  91 => 24,  87 => 23,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 21,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
