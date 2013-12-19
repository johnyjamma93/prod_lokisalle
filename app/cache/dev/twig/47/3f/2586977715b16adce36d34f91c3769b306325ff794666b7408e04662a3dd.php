<?php

/* SyliusWebBundle:Backend/ExchangeRate:index.html.twig */
class __TwigTemplate_473f2586977715b16adce36d34f91c3769b306325ff794666b7408e04662a3dd extends Twig_Template
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
        $context["__internal_d38147cf6ed2522f0fa6fce5444640b9b7cdd91fb60b7f7db851788857fc8f17"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ExchangeRate:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_topbar($context, array $blocks = array())
    {
        // line 7
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.exchange_rate.index"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 16
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_exchange_rate_create"), $this->env->getExtension('translator')->trans("sylius.exchange_rate.create"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-usd\"></i> ";
        // line 18
        echo $this->env->getExtension('translator')->trans("sylius.exchange_rate.index_header");
        echo "</h1>
</div>

";
        // line 21
        echo $context["__internal_d38147cf6ed2522f0fa6fce5444640b9b7cdd91fb60b7f7db851788857fc8f17"]->getlist((isset($context["exchange_rates"]) ? $context["exchange_rates"] : $this->getContext($context, "exchange_rates")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ExchangeRate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  62 => 18,  57 => 16,  53 => 14,  50 => 13,  43 => 9,  39 => 8,  36 => 7,  33 => 6,  28 => 4,  26 => 3,);
    }
}
