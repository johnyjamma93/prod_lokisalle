<?php

/* SyliusWebBundle::menu.html.twig */
class __TwigTemplate_2428860cb9b0e9136b524f5aacd76dd965a1c475d80ebd27125b45779f845b97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method")) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 5
        echo "    ";
        if ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "iconOnly"), "method"))) {
            // line 6
            echo "        ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
                echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label")), "html", null, true);
            }
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "data-image"), "method")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "data-image"), "method"), "sylius_16x16", true), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  338 => 103,  312 => 101,  308 => 96,  304 => 94,  301 => 93,  294 => 87,  289 => 85,  285 => 83,  282 => 82,  278 => 77,  275 => 76,  273 => 75,  270 => 74,  266 => 68,  263 => 67,  257 => 63,  253 => 62,  248 => 61,  245 => 60,  238 => 69,  236 => 67,  232 => 65,  230 => 60,  225 => 57,  222 => 56,  218 => 54,  211 => 53,  202 => 50,  196 => 48,  191 => 47,  185 => 46,  182 => 45,  172 => 42,  167 => 40,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 17,  113 => 7,  110 => 6,  104 => 104,  101 => 93,  97 => 90,  95 => 82,  92 => 81,  89 => 80,  86 => 78,  84 => 74,  81 => 73,  79 => 56,  76 => 55,  74 => 45,  71 => 44,  69 => 35,  59 => 27,  56 => 17,  49 => 12,  45 => 11,  41 => 6,  39 => 6,  32 => 2,  29 => 1,  44 => 9,  38 => 5,  34 => 3,  31 => 4,  28 => 3,);
    }
}
