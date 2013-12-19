<?php

/* SyliusWebBundle:Frontend/Checkout/Step:addressing.html.twig */
class __TwigTemplate_f7241a54d0697014e89917347c0349a9ebd5e0c5c79652293976ade6acfd26b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a4ab320_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a4ab320_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_province_province-choices_1.js");
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a4ab320"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a4ab320") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_province.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
    <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("sylius.checkout.addressing.header");
        echo "</h1>
</div>

";
        // line 17
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig")->display($context);
        // line 18
        echo "
<form method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_forward", array("stepName" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "currentStep"), "name"))), "html", null, true);
        echo "\" class=\"form-horizontal\" novalidate>

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<fieldset>
    <div class=\"row\">
        <div class=\"col-md-6 address-container\">
            <div class=\"well\">
                <h4>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.shipping_address"), "html", null, true);
        echo "</h4>
                ";
        // line 28
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Form:_address.html.twig")->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shippingAddress"))));
        // line 29
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "differentBillingAddress"), 'row', array("attr" => array("class" => "sylius-different-billing-address-trigger")));
        echo "
            </div>
        </div>
        <div class=\"col-md-6 hidden address-container\" id=\"sylius-billing-address-container\">
            <div class=\"well\">
                <h4>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.finalize.order.billing_address"), "html", null, true);
        echo "</h4>
                ";
        // line 35
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Form:_address.html.twig")->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingAddress"))));
        // line 36
        echo "            </div>
        </div>
    </div>
</fieldset>

";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "

<div class=\"form-actions\">
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("sylius_cart_summary");
        echo "\" class=\"btn btn-lg\"><i class=\"icon-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.back"), "html", null, true);
        echo "</a> &nbsp;
    <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.forward"), "html", null, true);
        echo " <i class=\"icon-chevron-right\"></i></button>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout/Step:addressing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  121 => 44,  115 => 41,  108 => 36,  106 => 35,  102 => 34,  93 => 29,  91 => 28,  87 => 27,  78 => 21,  73 => 19,  70 => 18,  68 => 17,  62 => 14,  59 => 13,  56 => 12,  40 => 8,  36 => 5,  32 => 4,  29 => 3,);
    }
}
