<?php

/* SyliusWebBundle:Backend/Promotion:macros.html.twig */
class __TwigTemplate_8eb10f4138bbabe1d702b851318157b9bc66ecfaef6ff80da6409cfe0e7f3628 extends Twig_Template
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
        // line 63
        echo "
";
    }

    // line 1
    public function getlist($_promotions = null)
    {
        $context = $this->env->mergeGlobals(array(
            "promotions" => $_promotions,
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
            if ((twig_length_filter($this->env, (isset($context["promotions"]) ? $context["promotions"] : $this->getContext($context, "promotions"))) > 0)) {
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
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.promotion.name"));
                echo "</th>
                <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("couponBased", $this->env->getExtension('translator')->trans("sylius.promotion.coupon_based"));
                echo "</th>
                <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("usageLimit", $this->env->getExtension('translator')->trans("sylius.promotion.usage_limit"));
                echo "</th>
                <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("used", $this->env->getExtension('translator')->trans("sylius.promotion.used"));
                echo "</th>
                <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("startsAt", $this->env->getExtension('translator')->trans("sylius.promotion.starts_at"));
                echo "</th>
                <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("endsAt", $this->env->getExtension('translator')->trans("sylius.promotion.ends_at"));
                echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : $this->getContext($context, "promotions")));
                foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                    // line 22
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"), "html", null, true);
                    echo "\">
                <td>
                    <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_promotion_show", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"), "html", null, true);
                    echo "</a>
                </td>
                <td>
                    <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_promotion_show", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "name"), "html", null, true);
                    echo "</a>
                    <p class=\"hidden-xs\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "description"), "html", null, true);
                    echo "</p>
                </td>
                <td>
                    <span class=\"label label-";
                    // line 31
                    echo (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "couponBased")) ? ("success") : ("default"));
                    echo "\">
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "couponBased")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                    </span>
                </td>
                <td>
                    <span class=\"label label-info\">
                        ";
                    // line 37
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit"), $this->env->getExtension('translator')->trans("sylius.no"))) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                    </span>
                </td>
                <td>
                    <span class=\"label label-";
                    // line 41
                    echo ((($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "used") < (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit"), 1)) : (1)))) ? ("success") : ("danger"));
                    echo "\">
                        ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "used"), "html", null, true);
                    echo "
                    </span>
                </td>
                <td>";
                    // line 45
                    echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "startsAt"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "startsAt")))), "html", null, true);
                    echo "</td>
                <td>";
                    // line 46
                    echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "endsAt"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "endsAt")))), "html", null, true);
                    echo "</td>
                <td>
                    <div class=\"pull-right\">
                        ";
                    // line 49
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_promotion_show", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
                    echo "
                        ";
                    // line 50
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_promotion_update", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
                    echo "
                        ";
                    // line 51
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_promotion_delete", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
                    echo "
                    </div>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </tbody>
    </table>
";
            } else {
                // line 59
                echo "    ";
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.promotion.no_results"));
                echo "
";
            }
            // line 61
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getconfiguration($_configuration = null)
    {
        $context = $this->env->mergeGlobals(array(
            "configuration" => $_configuration,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "
<ul>
";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 68
                echo "    <li><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "</ul>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Promotion:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 70,  206 => 65,  195 => 64,  183 => 61,  172 => 56,  161 => 51,  126 => 37,  118 => 32,  114 => 31,  108 => 28,  102 => 27,  88 => 22,  84 => 21,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  52 => 10,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  38 => 3,  35 => 2,  24 => 1,  19 => 63,  318 => 133,  313 => 130,  302 => 125,  296 => 122,  292 => 121,  287 => 120,  283 => 119,  275 => 114,  271 => 113,  263 => 109,  261 => 108,  257 => 106,  252 => 103,  241 => 98,  235 => 95,  231 => 94,  226 => 93,  222 => 92,  214 => 68,  210 => 67,  202 => 82,  200 => 81,  186 => 70,  182 => 69,  177 => 59,  169 => 62,  163 => 59,  157 => 50,  153 => 49,  147 => 46,  143 => 45,  137 => 42,  133 => 41,  127 => 44,  123 => 43,  117 => 40,  113 => 39,  105 => 34,  94 => 24,  91 => 25,  86 => 23,  82 => 22,  77 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 15,  56 => 11,  49 => 10,  43 => 9,  39 => 8,  36 => 7,  33 => 6,  28 => 4,  26 => 3,);
    }
}
