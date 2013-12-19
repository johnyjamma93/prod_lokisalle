<?php

/* SyliusWebBundle:Backend/Product/Form:_tabs.html.twig */
class __TwigTemplate_c1c11d48cecdd0d47e49b037381c06ce2c1ed3426163d46ed2d908c809724f4e extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#main\" data-toggle=\"tab\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.product"), "html", null, true);
        echo "</a></li>
    ";
        // line 3
        if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasVariants"))) {
            // line 4
            echo "    <li><a href=\"#options\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.options"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 6
        echo "    <li><a href=\"#properties\" data-toggle=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.properties"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#categorization\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.categorization"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#images\" data-toggle=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.images"), "html", null, true);
        echo "</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product/Form:_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 2,  48 => 13,  40 => 9,  37 => 8,  34 => 6,  31 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
