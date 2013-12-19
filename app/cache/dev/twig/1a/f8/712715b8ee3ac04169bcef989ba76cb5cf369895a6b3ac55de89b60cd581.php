<?php

/* SyliusWebBundle:Backend/Product/Form:_categorization.html.twig */
class __TwigTemplate_1af8712715b8ee3ac04169bcef989ba76cb5cf369895a6b3ac55de89b60cd581 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"categorization\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taxons"));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyForm"]) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["taxonomyForm"]) ? $context["taxonomyForm"] : $this->getContext($context, "taxonomyForm")), 'row');
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product/Form:_categorization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 9,  45 => 7,  24 => 3,  72 => 16,  64 => 14,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  48 => 13,  40 => 6,  37 => 8,  34 => 5,  31 => 4,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 15,  65 => 15,  43 => 8,  39 => 7,  35 => 5,  32 => 5,  27 => 3,);
    }
}
