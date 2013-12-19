<?php

/* SyliusWebBundle:Frontend/Cart:_item.html.twig */
class __TwigTemplate_a9f14956c01cc05d6f57e18b0c662a5b07cefa92ba4f4a466a20378d0eefe5f4 extends Twig_Template
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
        $context["product"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant"), "product");
        // line 2
        echo "<tr>
    <td class=\"col-md-1\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 5
        echo twig_include($this->env, $context, "SyliusWebBundle:Frontend/Product:_variant.html.twig", array("variant" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant")));
        echo "
    </td>
    <td class=\"col-md-2\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "items"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), "quantity"), 'row', array("label" => false));
        echo "
    </td>
    <td class=\"col-md-1\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_item_remove", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></a>
    </td>
    <td class=\"col-md-1\">
        ";
        // line 14
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "unitPrice"));
        echo "
    </td>
    <td class=\"col-md-1\" style=\"text-align: right\">
        ";
        // line 17
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "total"));
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Cart:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  35 => 8,  24 => 3,  21 => 2,  144 => 25,  140 => 24,  137 => 23,  126 => 22,  112 => 18,  108 => 17,  105 => 16,  94 => 15,  80 => 11,  76 => 10,  73 => 9,  62 => 8,  44 => 3,  41 => 11,  30 => 1,  25 => 21,  22 => 14,  19 => 1,  258 => 90,  254 => 89,  251 => 88,  246 => 85,  240 => 83,  230 => 78,  224 => 77,  219 => 75,  214 => 73,  208 => 70,  204 => 69,  192 => 62,  182 => 57,  177 => 54,  168 => 52,  158 => 50,  153 => 49,  148 => 47,  138 => 42,  134 => 40,  125 => 36,  121 => 34,  119 => 33,  115 => 31,  101 => 30,  98 => 29,  81 => 28,  74 => 24,  70 => 23,  65 => 21,  61 => 20,  53 => 17,  48 => 4,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  29 => 5,  27 => 3,);
    }
}
