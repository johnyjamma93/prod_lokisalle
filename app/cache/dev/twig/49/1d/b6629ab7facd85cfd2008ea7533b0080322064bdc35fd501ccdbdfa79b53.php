<?php

/* SyliusWebBundle:Frontend/Checkout/Step/Finalize:_item.html.twig */
class __TwigTemplate_491db6629ab7facd85cfd2008ea7533b0080322064bdc35fd501ccdbdfa79b53 extends Twig_Template
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
        // line 1
        $context["product"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "product");
        // line 2
        echo "<tr>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 5
        echo twig_include($this->env, $context, "SyliusWebBundle:Frontend/Product:_variant.html.twig", array("variant" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant")));
        echo "
    </td>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "quantity"), "html", null, true);
        echo "</td>
    <td>
        <span class=\"pull-right\">
        ";
        // line 10
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "unitPrice"));
        echo "
        </span>
    </td>
    <td>
        <span class=\"pull-right\">
        ";
        // line 15
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "total"));
        echo "
        </span>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout/Step/Finalize:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  29 => 5,  24 => 3,  21 => 2,  19 => 1,  477 => 189,  471 => 188,  457 => 179,  452 => 176,  442 => 171,  436 => 167,  425 => 165,  421 => 164,  416 => 162,  412 => 160,  410 => 159,  401 => 155,  395 => 151,  386 => 149,  376 => 147,  371 => 146,  366 => 144,  355 => 138,  349 => 134,  340 => 132,  330 => 130,  325 => 129,  320 => 127,  309 => 121,  302 => 116,  292 => 112,  287 => 109,  274 => 108,  271 => 107,  253 => 106,  246 => 102,  242 => 101,  238 => 100,  234 => 99,  220 => 88,  216 => 87,  210 => 84,  206 => 83,  200 => 80,  196 => 79,  193 => 78,  187 => 75,  183 => 74,  180 => 73,  178 => 72,  173 => 70,  169 => 69,  163 => 66,  159 => 65,  153 => 62,  149 => 61,  141 => 56,  129 => 47,  125 => 46,  119 => 43,  115 => 42,  109 => 39,  105 => 38,  102 => 37,  96 => 34,  92 => 33,  89 => 32,  87 => 31,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  62 => 21,  58 => 20,  50 => 15,  42 => 9,  40 => 10,  34 => 7,  31 => 4,  28 => 3,);
    }
}
