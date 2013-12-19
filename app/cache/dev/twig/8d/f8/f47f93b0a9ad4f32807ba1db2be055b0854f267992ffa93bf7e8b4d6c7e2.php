<?php

/* SyliusWebBundle:Backend/Prototype:macros.html.twig */
class __TwigTemplate_8df8f47f93b0a9ad4f32807ba1db2be055b0854f267992ffa93bf7e8b4d6c7e2 extends Twig_Template
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
    public function getlist($_prototypes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prototypes" => $_prototypes,
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
            if ((twig_length_filter($this->env, (isset($context["prototypes"]) ? $context["prototypes"] : $this->getContext($context, "prototypes"))) > 0)) {
                // line 7
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.prototype.name"));
                echo "</th>
            <th>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.prototype.options"), "html", null, true);
                echo "</th>
            <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.prototype.properties"), "html", null, true);
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.prototype.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["prototypes"]) ? $context["prototypes"] : $this->getContext($context, "prototypes")));
                foreach ($context['_seq'] as $context["_key"] => $context["prototype"]) {
                    // line 20
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "name"), "html", null, true);
                    echo "</td>
            <td>
                <ul>
                    ";
                    // line 25
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "options"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 26
                        echo "                    <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                        echo "</li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                </ul>
            </td>
            <td>
                <ul>
                    ";
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "properties"));
                    foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                        // line 33
                        echo "                    <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name"), "html", null, true);
                        echo "</li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                </ul>
            </td>
            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "updatedAt")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 40
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_prototype_build", array("id" => $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"))), $this->env->getExtension('translator')->trans("sylius.prototype.build"));
                    echo "
                ";
                    // line 41
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_prototype_update", array("id" => $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"))));
                    echo "
                ";
                    // line 42
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_prototype_delete", array("id" => $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prototype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "    </tbody>
</table>
";
            } else {
                // line 50
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.prototype.no_results"));
                echo "
";
            }
            // line 52
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
        return "SyliusWebBundle:Backend/Prototype:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 52,  158 => 50,  153 => 47,  142 => 42,  138 => 41,  134 => 40,  128 => 37,  124 => 35,  115 => 33,  111 => 32,  105 => 28,  96 => 26,  92 => 25,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  86 => 22,  82 => 21,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
