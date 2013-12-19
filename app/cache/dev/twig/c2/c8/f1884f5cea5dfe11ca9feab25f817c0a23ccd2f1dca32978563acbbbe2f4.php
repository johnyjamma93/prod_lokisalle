<?php

/* SyliusWebBundle:Backend/Option:_form.html.twig */
class __TwigTemplate_c2c8f1884f5cea5dfe11ca9feab25f817c0a23ccd2f1dca32978563acbbbe2f4 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"row\">
    <div class=\"col-md-8 row-split\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'row');
        echo "
    </div>

    <div class=\"col-md-4\">
        <div id=\"sylius-option-values\" class=\"collection-container\" data-prototype=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "values"), "vars"), "prototype"), "value"), 'row', array("label" => "")));
        echo "\">
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "values"));
        foreach ($context['_seq'] as $context["_key"] => $context["valueForm"]) {
            // line 12
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["valueForm"]) ? $context["valueForm"] : $this->getContext($context, "valueForm")), "value"), 'row');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
        <a href=\"#\" class=\"btn btn-primary btn-block\" data-collection-button=\"add\" data-prototype=\"sylius-option-values\" data-collection=\"sylius-option-values\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.form.option_value.add_value"), "html", null, true);
        echo "</a>
    </div>
</div>
<hr>

";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Option:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  45 => 12,  30 => 6,  19 => 1,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  60 => 15,  57 => 15,  54 => 14,  47 => 9,  41 => 11,  37 => 10,  34 => 6,  31 => 5,  26 => 5,);
    }
}
