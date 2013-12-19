<?php

/* SyliusWebBundle:Backend/Option:macros.html.twig */
class __TwigTemplate_5ec82e7ff8ccba79dfd55078568578135b8cb83c366246219ab6e05204449216 extends Twig_Template
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
    public function getlist($_options = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $_options,
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
            if ((twig_length_filter($this->env, (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))) > 0)) {
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
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.option.name"));
                echo "</th>
                <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("presentation", $this->env->getExtension('translator')->trans("sylius.option.presentation"));
                echo "</th>
                <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.option.values"), "html", null, true);
                echo "</th>
                <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.option.updated_at"));
                echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id"), "html", null, true);
                    echo "\">
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "presentation"), "html", null, true);
                    echo "</td>
                <td>
                    <ul class=\"list-unstyled\">
                        ";
                    // line 26
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 27
                        echo "                        <span class=\"label label-primary\">";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                    </ul>
                </td>
                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "updatedAt")), "html", null, true);
                    echo "</td>
                <td>
                    <div class=\"pull-right\">
                    ";
                    // line 34
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_option_update", array("id" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id"))));
                    echo "
                    ";
                    // line 35
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_option_delete", array("id" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id"))));
                    echo "
                   </div>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </tbody>
    </table>
";
            } else {
                // line 43
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.option.no_results"));
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
        return "SyliusWebBundle:Backend/Option:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  139 => 43,  134 => 40,  123 => 35,  119 => 34,  113 => 31,  109 => 29,  100 => 27,  96 => 26,  90 => 23,  86 => 22,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 21,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
