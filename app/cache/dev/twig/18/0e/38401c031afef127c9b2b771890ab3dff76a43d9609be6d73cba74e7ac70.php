<?php

/* SyliusWebBundle:Backend:menu.html.twig */
class __TwigTemplate_180e38401c031afef127c9b2b771890ab3dff76a43d9609be6d73cba74e7ac70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle::menu.html.twig");

        $this->blocks = array(
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle::menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<a";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren")) {
            echo " <b class=\"caret\">";
        }
        echo "</b></a>";
    }

    // line 3
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  37 => 12,  28 => 11,  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 40,  125 => 34,  121 => 33,  114 => 29,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 47,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 3,  39 => 3,  36 => 2,  24 => 1,  19 => 1,  244 => 79,  200 => 79,  196 => 59,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  126 => 14,  123 => 13,  116 => 6,  104 => 68,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 6,  57 => 5,  53 => 9,  51 => 29,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 43,  141 => 55,  133 => 35,  129 => 35,  117 => 42,  113 => 5,  107 => 82,  103 => 26,  95 => 24,  91 => 23,  83 => 28,  70 => 15,  64 => 42,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
