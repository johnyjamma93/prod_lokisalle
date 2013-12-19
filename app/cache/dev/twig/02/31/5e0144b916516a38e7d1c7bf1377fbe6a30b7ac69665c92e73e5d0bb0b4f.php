<?php

/* SyliusWebBundle:Frontend/Checkout/Step:shipping.html.twig */
class __TwigTemplate_02315e0144b916516a38e7d1c7bf1377fbe6a30b7ac69665c92e73e5d0bb0b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <h1>";
        // line 5
        echo $this->env->getExtension('translator')->trans("sylius.checkout.shipping.header");
        echo "</h1>
</div>

";
        // line 8
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig")->display($context);
        // line 9
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_forward", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "currentStep"), "name"))), "html", null, true);
        echo "\" class=\"form-horizontal\" novalidate>

<fieldset>
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "shipments"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 16
            echo "
";
            // line 17
            $context["shipmentForm"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shipments"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array");
            // line 18
            echo "
";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["shipmentForm"]) ? $context["shipmentForm"] : $this->getContext($context, "shipmentForm")), "method"), 'row');
            echo "

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</fieldset>

";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "

<div class=\"form-actions\">
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_display", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "previousStep"), "name"))), "html", null, true);
        echo "\" class=\"btn btn-lg\"><i class=\"icon-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.back"), "html", null, true);
        echo "</a> &nbsp;
    <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.forward"), "html", null, true);
        echo " <i class=\"icon-chevron-right\"></i></button>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout/Step:shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  108 => 27,  102 => 24,  98 => 22,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  56 => 15,  50 => 12,  45 => 10,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
