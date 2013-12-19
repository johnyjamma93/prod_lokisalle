<?php

/* SyliusWebBundle:Backend/Payment:index.html.twig */
class __TwigTemplate_bfc7fc60a9bcb29672667939602d0023f2dd2320138b5a1ede63262ff4746a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        // line 4
        $context["__internal_307bd4ff30121f17e5bc8130807f13e69b6e51309e6123b17dac7ebe3eacd61b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_4385e7e3ce72aa6525ddacdb10e4148683cf65dc4e68852a480d5c09b524247b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Payment:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.sales"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.payment.index"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <div class=\"pull-right\">
        ";
        // line 17
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_payment_create"), $this->env->getExtension('translator')->trans("sylius.payment.create"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-credit-card\"></i> ";
        // line 19
        echo $this->env->getExtension('translator')->trans("sylius.payment.index_header");
        echo "</h1>
</div>

";
        // line 22
        echo $context["__internal_307bd4ff30121f17e5bc8130807f13e69b6e51309e6123b17dac7ebe3eacd61b"]->getpagination((isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments")));
        echo "
";
        // line 23
        echo $context["__internal_4385e7e3ce72aa6525ddacdb10e4148683cf65dc4e68852a480d5c09b524247b"]->getlist((isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments")));
        echo "
";
        // line 24
        echo $context["__internal_307bd4ff30121f17e5bc8130807f13e69b6e51309e6123b17dac7ebe3eacd61b"]->getpagination((isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Payment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 23,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
