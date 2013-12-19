<?php

/* SyliusWebBundle:Frontend/Product:latestSidebar.html.twig */
class __TwigTemplate_f941f1fef64da4ac8ccb40497007d82059bb2dd9cccbf2ed41dfdf4a7bb94dd4 extends Twig_Template
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
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.newest"), "html", null, true);
        echo "</h4>

<ul>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "        <li>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
            echo "\" class=\"btn btn-link\">
                <img class=\"thumbnail\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_50x40")) : ("http://placehold.it/50x40")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "\" />
                <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</h4>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:latestSidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  43 => 8,  33 => 6,  26 => 4,  19 => 1,  276 => 3,  272 => 2,  261 => 1,  251 => 85,  240 => 83,  227 => 81,  216 => 75,  214 => 74,  212 => 73,  208 => 70,  204 => 68,  198 => 66,  195 => 65,  192 => 62,  190 => 61,  188 => 60,  183 => 57,  180 => 55,  178 => 54,  175 => 52,  170 => 49,  168 => 48,  166 => 46,  163 => 45,  159 => 42,  157 => 41,  140 => 38,  118 => 34,  116 => 32,  114 => 31,  111 => 29,  103 => 24,  98 => 23,  93 => 21,  90 => 20,  72 => 10,  65 => 85,  62 => 84,  60 => 83,  57 => 82,  55 => 81,  52 => 80,  50 => 45,  47 => 44,  42 => 28,  40 => 20,  37 => 7,  35 => 15,  30 => 5,  27 => 8,  51 => 8,  48 => 7,  338 => 103,  312 => 101,  308 => 96,  304 => 94,  301 => 93,  294 => 87,  289 => 85,  285 => 83,  282 => 82,  278 => 4,  275 => 76,  273 => 75,  270 => 74,  266 => 68,  263 => 67,  257 => 63,  253 => 62,  248 => 61,  245 => 60,  238 => 69,  236 => 67,  232 => 65,  230 => 60,  225 => 57,  222 => 56,  218 => 76,  211 => 53,  202 => 67,  196 => 48,  191 => 47,  185 => 58,  182 => 45,  172 => 50,  167 => 40,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 37,  120 => 35,  113 => 7,  110 => 6,  104 => 104,  101 => 93,  97 => 90,  95 => 22,  92 => 81,  89 => 80,  86 => 17,  84 => 16,  81 => 15,  79 => 56,  76 => 55,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 29,  41 => 6,  39 => 6,  32 => 14,  29 => 1,  44 => 9,  38 => 5,  34 => 3,  31 => 4,  28 => 3,);
    }
}
