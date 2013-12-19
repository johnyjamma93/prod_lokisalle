<?php

/* SyliusWebBundle:Backend/ShippingCategory:macros.html.twig */
class __TwigTemplate_5daffdf2935ed8fdd0d85a87b575e684b85331e60924d3e0e353a77e93da10b2 extends Twig_Template
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
    public function getlist($_shipping_categories = null)
    {
        $context = $this->env->mergeGlobals(array(
            "shipping_categories" => $_shipping_categories,
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
            if ((twig_length_filter($this->env, (isset($context["shipping_categories"]) ? $context["shipping_categories"] : $this->getContext($context, "shipping_categories"))) > 0)) {
                // line 7
                echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.shipping_category.id"));
                echo "</th>
                <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.shipping_category.name"));
                echo "</th>
                <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.shipping_category.updated_at"));
                echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_categories"]) ? $context["shipping_categories"] : $this->getContext($context, "shipping_categories")));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_category"]) {
                    // line 18
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "id"), "html", null, true);
                    echo "\">
                <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "id"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "name"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "updatedAt")), "html", null, true);
                    echo "</td>
                <td>
                    <div class=\"pull-right\">
                    ";
                    // line 24
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_shipping_category_update", array("id" => $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "id"))));
                    echo "
                    ";
                    // line 25
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_shipping_category_delete", array("id" => $this->getAttribute((isset($context["shipping_category"]) ? $context["shipping_category"] : $this->getContext($context, "shipping_category")), "id"))));
                    echo "
                   </div>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "        </tbody>
    </table>
";
            } else {
                // line 33
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.shipping_category.no_results"));
                echo "
";
            }
            // line 35
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
        return "SyliusWebBundle:Backend/ShippingCategory:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  108 => 33,  103 => 30,  92 => 25,  88 => 24,  69 => 18,  65 => 17,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 21,  78 => 20,  74 => 19,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
