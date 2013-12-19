<?php

/* SyliusWebBundle:Backend/Property:macros.html.twig */
class __TwigTemplate_03ca372e8895ce0c80b738304bd0533c2cacf5d979cf32608e7557f4a88963a3 extends Twig_Template
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
    public function getlist($_properties = null)
    {
        $context = $this->env->mergeGlobals(array(
            "properties" => $_properties,
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
            if ((twig_length_filter($this->env, (isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties"))) > 0)) {
                // line 7
                echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
                <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.property.name"));
                echo "</th>
                <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("presentation", $this->env->getExtension('translator')->trans("sylius.property.presentation"));
                echo "</th>
                <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("type", $this->env->getExtension('translator')->trans("sylius.property.type"));
                echo "</th>
                <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.property.updated_at"));
                echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
                foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                    // line 20
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "id"), "html", null, true);
                    echo "\">
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "id"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "presentation"), "html", null, true);
                    echo "</td>
                <td><span class=\"label label-primary\">";
                    // line 24
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "type")), "html", null, true);
                    echo "</span></td>
                <td>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "updatedAt")), "html", null, true);
                    echo "</td>
                <td>
                    <div class=\"pull-right\">
                    ";
                    // line 28
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_property_update", array("id" => $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "id"))));
                    echo "
                    ";
                    // line 29
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_property_delete", array("id" => $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "id"))));
                    echo "
                   </div>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </tbody>
    </table>
";
            } else {
                // line 37
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.property.no_results"));
                echo "
";
            }
            // line 39
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
        return "SyliusWebBundle:Backend/Property:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  124 => 37,  119 => 34,  108 => 29,  104 => 28,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 21,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
