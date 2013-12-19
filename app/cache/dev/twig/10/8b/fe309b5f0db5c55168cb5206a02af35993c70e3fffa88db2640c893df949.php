<?php

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_108bfe309b5f0db5c55168cb5206a02af35993c70e3fffa88db2640c893df949 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
            // line 4
            echo "        ";
            if (((isset($context["currentOrder"]) ? $context["currentOrder"] : $this->getContext($context, "currentOrder")) == "desc")) {
                // line 5
                echo "            <i class=\"icon icon-chevron-down\"></i>
        ";
            } else {
                // line 7
                echo "            <i class=\"icon icon-chevron-up\"></i>
        ";
            }
            // line 9
            echo "    ";
        }
        // line 10
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  170 => 52,  154 => 46,  148 => 44,  144 => 42,  138 => 40,  135 => 39,  132 => 38,  108 => 30,  101 => 27,  98 => 26,  92 => 24,  191 => 35,  179 => 34,  163 => 49,  151 => 45,  142 => 21,  112 => 15,  76 => 8,  34 => 5,  26 => 3,  22 => 12,  52 => 4,  37 => 7,  28 => 3,  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 20,  125 => 34,  121 => 33,  114 => 32,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 10,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 50,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 34,  115 => 27,  111 => 31,  106 => 25,  89 => 23,  81 => 20,  73 => 17,  69 => 19,  65 => 15,  61 => 25,  50 => 3,  48 => 7,  45 => 2,  43 => 5,  41 => 9,  39 => 3,  36 => 2,  24 => 2,  19 => 1,  244 => 79,  200 => 79,  196 => 36,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 48,  157 => 47,  153 => 21,  126 => 36,  123 => 35,  116 => 6,  104 => 28,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 6,  57 => 5,  53 => 11,  51 => 11,  42 => 5,  40 => 7,  33 => 5,  31 => 4,  145 => 22,  141 => 41,  133 => 35,  129 => 37,  117 => 33,  113 => 5,  107 => 14,  103 => 26,  95 => 25,  91 => 23,  83 => 21,  70 => 15,  64 => 7,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 18,);
    }
}
