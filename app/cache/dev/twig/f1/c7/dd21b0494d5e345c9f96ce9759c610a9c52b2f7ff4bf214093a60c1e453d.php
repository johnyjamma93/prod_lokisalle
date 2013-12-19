<?php

/* SyliusWebBundle:Backend/Country:macros.html.twig */
class __TwigTemplate_f1c7dd21b0494d5e345c9f96ce9759c610a9c52b2f7ff4bf214093a60c1e453d extends Twig_Template
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
                echo "<table class=\"table table-condensed\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.country.id"));
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.country.name"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("isoName", $this->env->getExtension('translator')->trans("sylius.country.iso_name"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 18
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_country_show", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "name"), "html", null, true);
                    echo "</a></td>
            <td><span class=\"label label-primary\">";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "isoName"), "html", null, true);
                    echo "</span></td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 24
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_country_update", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))));
                    echo "
                ";
                    // line 25
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_country_delete", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    </tbody>
</table>
";
            } else {
                // line 33
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.country.no_results"));
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
        return "SyliusWebBundle:Backend/Country:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  110 => 33,  105 => 30,  94 => 25,  90 => 24,  84 => 21,  69 => 18,  65 => 17,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 25,  78 => 20,  74 => 19,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
