<?php

/* SyliusWebBundle:Frontend/Checkout/Step:payment.html.twig */
class __TwigTemplate_f1abeb47f93b06eddc5e4de64baf96f94ccba5270c53ad3718135f7be99958ea extends Twig_Template
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
        echo $this->env->getExtension('translator')->trans("sylius.checkout.payment.header");
        echo "</h1>
</div>

";
        // line 8
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig")->display($context);
        // line 9
        echo "
<form method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_forward", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "currentStep"), "name"))), "html", null, true);
        echo "\" class=\"form-horizontal\" novalidate>

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentMethod"), 'label');
        echo "
<fieldset>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentMethod"));
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethodForm"]) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["paymentMethodForm"]) ? $context["paymentMethodForm"] : $this->getContext($context, "paymentMethodForm")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethodForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</fieldset>

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "

<div class=\"form-actions\">
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_display", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "previousStep"), "name"))), "html", null, true);
        echo "\" class=\"btn btn-lg\"><i class=\"icon-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.back"), "html", null, true);
        echo "</a> &nbsp;
    <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.forward"), "html", null, true);
        echo " <i class=\"icon-chevron-right\"></i></button>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout/Step:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 24,  77 => 21,  73 => 19,  64 => 17,  60 => 16,  55 => 14,  50 => 12,  45 => 10,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
