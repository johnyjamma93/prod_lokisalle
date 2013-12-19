<?php

/* SyliusWebBundle:Frontend/Product:_variant.html.twig */
class __TwigTemplate_436e99b7581846a537e6bed7f4f417d8b99fcb62776672a50d756d8fb2e63c4d extends Twig_Template
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
        $context["product"] = $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product");
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"thumbnail pull-left\" style=\"margin-right: 15px;\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_90x60")) : ("http://placehold.it/90x60")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "\" />
</a>
<div>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</strong></a>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "presentation")))) {
            // line 8
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "presentation"), "html", null, true);
            echo "</strong>
    ";
        } elseif ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
            // line 10
            echo "        <ul class=\"list-unstyled\">
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 12
                echo "                <li><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "presentation"), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    ";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:_variant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  55 => 12,  51 => 11,  42 => 8,  26 => 3,  47 => 14,  35 => 8,  24 => 3,  21 => 2,  144 => 25,  140 => 24,  137 => 23,  126 => 22,  112 => 18,  108 => 17,  105 => 16,  94 => 15,  80 => 11,  76 => 10,  73 => 9,  62 => 8,  44 => 3,  41 => 11,  30 => 1,  25 => 21,  22 => 14,  19 => 1,  258 => 90,  254 => 89,  251 => 88,  246 => 85,  240 => 83,  230 => 78,  224 => 77,  219 => 75,  214 => 73,  208 => 70,  204 => 69,  192 => 62,  182 => 57,  177 => 54,  168 => 52,  158 => 50,  153 => 49,  148 => 47,  138 => 42,  134 => 40,  125 => 36,  121 => 34,  119 => 33,  115 => 31,  101 => 30,  98 => 29,  81 => 28,  74 => 24,  70 => 16,  65 => 21,  61 => 20,  53 => 17,  48 => 10,  46 => 12,  40 => 7,  37 => 8,  34 => 6,  29 => 5,  27 => 3,);
    }
}
