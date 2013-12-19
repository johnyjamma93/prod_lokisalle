<?php

/* SyliusWebBundle:Backend/Product/Form:_properties.html.twig */
class __TwigTemplate_90b186cbfd5bd7a17678cf95ba55155a2e2224360c4464001e9445154633de82 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"properties\">
    <div id=\"sylius-assortment-product-properties\" class=\"collection-container\" data-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, ("<div id=\"sylius_product_properties___name__\">" . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "property"), 'row', array("attr" => array("class" => "property-chooser")))));
        echo twig_escape_filter($this->env, ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "value"), 'row') . "</div>"));
        echo "\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"));
        foreach ($context['_seq'] as $context["_key"] => $context["propertyForm"]) {
            // line 4
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["propertyForm"]) ? $context["propertyForm"] : $this->getContext($context, "propertyForm")), 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propertyForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "vars"), "prototypes"));
        foreach ($context['_seq'] as $context["key"] => $context["prototype"]) {
            // line 7
            echo "            <div id=\"property-prototype_";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\" class=\"property-prototypes\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'widget'));
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['prototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-product-properties\" data-collection=\"sylius-assortment-product-properties\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.add_property"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product/Form:_properties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 9,  45 => 7,  24 => 3,  72 => 16,  64 => 14,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  48 => 13,  40 => 6,  37 => 8,  34 => 5,  31 => 4,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 15,  65 => 15,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
