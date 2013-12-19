<?php

/* SyliusPayumBundle::Payum\Action\obtainCreditCard.html.twig */
class __TwigTemplate_8bd460db809b160ca6dff2d84a1644c59486c8026cd27be4703c7a1076b81a73 extends Twig_Template
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
        echo $this->env->getExtension('translator')->trans("sylius.checkout.credit_card.header");
        echo "</h1>
</div>

<form action=\"\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <fieldset>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </fieldset>

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "

    <div class=\"form-actions\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sylius_cart_summary");
        echo "\" class=\"btn btn-lg\"><i class=\"icon-chevron-left\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.back"), "html", null, true);
        echo "</a> &nbsp;
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.checkout.forward"), "html", null, true);
        echo " <i class=\"icon-chevron-right\"></i></button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusPayumBundle::Payum\\Action\\obtainCreditCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 18,  53 => 15,  47 => 12,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
