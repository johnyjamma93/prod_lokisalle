<?php

/* SyliusWebBundle:Backend/ShippingMethod:macros.html.twig */
class __TwigTemplate_62f51ed66a224281741c7c4d3451496825671073fb2b16a604150d29939979f4 extends Twig_Template
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
    public function getlist($_shipping_methods = null)
    {
        $context = $this->env->mergeGlobals(array(
            "shipping_methods" => $_shipping_methods,
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
            if ((twig_length_filter($this->env, (isset($context["shipping_methods"]) ? $context["shipping_methods"] : $this->getContext($context, "shipping_methods"))) > 0)) {
                // line 8
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.shipping_method.id"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.shipping_method.name"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("zone", $this->env->getExtension('translator')->trans("sylius.shipping_method.zone"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("category", $this->env->getExtension('translator')->trans("sylius.shipping_method.category"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("enabled", $this->env->getExtension('translator')->trans("sylius.shipping_method.enabled"));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("calculator", $this->env->getExtension('translator')->trans("sylius.shipping_method.calculator"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : $this->getContext($context, "shipping_methods")));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    // line 22
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "name"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "zone"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 26
                    echo (($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : null), "category", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : null), "category"), "<em>undefined</em>")) : ("<em>undefined</em>"));
                    echo "</td>
            <td>
                ";
                    // line 28
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "enabled"));
                    echo "
            </td>
            <td><span class=\"label label-info\">";
                    // line 30
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "calculator"))), "html", null, true);
                    echo "</span></td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 33
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_show", array("id" => $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"))));
                    echo "
                ";
                    // line 34
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_update", array("id" => $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"))));
                    echo "
                ";
                    // line 35
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_delete", array("id" => $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "    </tbody>
</table>
";
            } else {
                // line 43
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.shipping_method.no_results"));
                echo "
";
            }
            // line 45
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
        return "SyliusWebBundle:Backend/ShippingMethod:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 43,  135 => 40,  124 => 35,  120 => 34,  116 => 33,  110 => 30,  105 => 28,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  83 => 22,  79 => 21,  71 => 16,  67 => 15,  51 => 11,  46 => 8,  44 => 7,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 25,  78 => 24,  74 => 23,  68 => 20,  63 => 14,  59 => 13,  55 => 12,  52 => 14,  45 => 10,  41 => 6,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
