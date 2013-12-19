<?php

/* SyliusWebBundle:Backend/Promotion:show.html.twig */
class __TwigTemplate_8caab1ac6438c4283f160e8a7ee0eea487251d8ed38c57e85e522e509c31e385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        // line 4
        $context["__internal_45f83772719d29699d00a7d53fe75c7de52517eddbb9fe3ebfd0c6e220de5e90"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Promotion:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_topbar($context, array $blocks = array())
    {
        // line 7
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sylius_backend_promotion_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.promotion.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "name"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 17
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_promotion_index"), $this->env->getExtension('translator')->trans("sylius.promotion.manage"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_promotion_update", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
        echo "
        ";
        // line 19
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_promotion_delete", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), null, false, false);
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "couponBased")) {
            // line 21
            echo "        ";
            echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_promotion_coupon_index", array("promotionId" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), $this->env->getExtension('translator')->trans("sylius.promotion_coupon.index"));
            echo "
        ";
            // line 22
            echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_promotion_coupon_create", array("promotionId" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), $this->env->getExtension('translator')->trans("sylius.promotion_coupon.create"));
            echo "
        ";
            // line 23
            echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_promotion_coupon_generate", array("promotionId" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), $this->env->getExtension('translator')->trans("sylius.promotion_coupon.generate"));
            echo "
    ";
        }
        // line 25
        echo "    </div>
    <h1><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        // line 26
        echo $this->env->getExtension('translator')->trans("sylius.promotion.show_header");
        echo "</h1>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.general_info"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.id"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.name"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "name"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.coupon_based"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "couponBased")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.starts_at"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 52
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "startsAt"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "startsAt")))), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.ends_at"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 56
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "endsAt"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "endsAt")))), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><strong>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.usage_limit"), "html", null, true);
        echo "</strong></td>
                    <td>
                        <span class=\"label label-info\">
                            ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit"), $this->env->getExtension('translator')->trans("sylius.no"))) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
        echo "
                        </span>
                    </td>
                </tr>
                <tr>
                    <td><strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.used"), "html", null, true);
        echo "</strong></td>
                    <td>
                        <span class=\"label label-";
        // line 69
        echo ((($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "used") < (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : null), "usageLimit"), 1)) : (1)))) ? ("success") : ("danger"));
        echo "\">
                            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "used"), "html", null, true);
        echo "
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 81
        if ($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "hasRules")) {
            // line 82
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.rules"), "html", null, true);
            echo "</h4>
        <table id=\"rules\" class=\"table table-condensed\">
            <thead>
                <tr>
                    <th>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion_rule.type"), "html", null, true);
            echo "</th>
                    <th>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion_rule.configuration"), "html", null, true);
            echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "rules"));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 93
                echo "                    <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rule"]) ? $context["rule"] : $this->getContext($context, "rule")), "id"), "html", null, true);
                echo "\">
                        <td><span class=\"label label-info\">";
                // line 94
                echo twig_escape_filter($this->env, strtr(twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rule"]) ? $context["rule"] : $this->getContext($context, "rule")), "type")), "_", " "), "html", null, true);
                echo "</span></td>
                        <td>";
                // line 95
                echo $context["__internal_45f83772719d29699d00a7d53fe75c7de52517eddbb9fe3ebfd0c6e220de5e90"]->getconfiguration($this->getAttribute((isset($context["rule"]) ? $context["rule"] : $this->getContext($context, "rule")), "configuration"));
                echo "</td>
                        <td>
                            <div class=\"btn-group pull-right\">
                                ";
                // line 98
                echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_promotion_rule_delete", array("id" => $this->getAttribute((isset($context["rule"]) ? $context["rule"] : $this->getContext($context, "rule")), "id"), "promotionId" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
                echo "
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </tbody>
        </table>
        ";
        }
        // line 106
        echo "    </div>
    <div class=\"col-md-6\">
        ";
        // line 108
        if ($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "hasActions")) {
            // line 109
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.actions"), "html", null, true);
            echo "</h4>
        <table id=\"actions\" class=\"table table-condensed\">
            <thead>
                <tr>
                    <th>";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion_action.type"), "html", null, true);
            echo "</th>
                    <th>";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion_action.configuration"), "html", null, true);
            echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 119
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "actions"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 120
                echo "                    <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "id"), "html", null, true);
                echo "\">
                        <td><span class=\"label label-info\">";
                // line 121
                echo twig_escape_filter($this->env, strtr(twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "type")), "_", " "), "html", null, true);
                echo "</span></td>
                        <td>";
                // line 122
                echo $context["__internal_45f83772719d29699d00a7d53fe75c7de52517eddbb9fe3ebfd0c6e220de5e90"]->getconfiguration($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "configuration"));
                echo "</td>
                        <td>
                            <div class=\"btn-group pull-right\">
                                ";
                // line 125
                echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_promotion_action_delete", array("id" => $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "id"), "promotionId" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))));
                echo "
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "            </tbody>
        </table>
        ";
        }
        // line 133
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Promotion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 133,  313 => 130,  302 => 125,  296 => 122,  292 => 121,  287 => 120,  283 => 119,  275 => 114,  271 => 113,  263 => 109,  261 => 108,  257 => 106,  252 => 103,  241 => 98,  235 => 95,  231 => 94,  226 => 93,  222 => 92,  214 => 87,  210 => 86,  202 => 82,  200 => 81,  186 => 70,  182 => 69,  177 => 67,  169 => 62,  163 => 59,  157 => 56,  153 => 55,  147 => 52,  143 => 51,  137 => 48,  133 => 47,  127 => 44,  123 => 43,  117 => 40,  113 => 39,  105 => 34,  94 => 26,  91 => 25,  86 => 23,  82 => 22,  77 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 15,  56 => 14,  49 => 10,  43 => 9,  39 => 8,  36 => 7,  33 => 6,  28 => 4,  26 => 3,);
    }
}
