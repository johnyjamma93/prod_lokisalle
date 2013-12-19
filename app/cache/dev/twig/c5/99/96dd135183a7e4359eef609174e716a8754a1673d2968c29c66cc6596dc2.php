<?php

/* SyliusWebBundle:Backend/ShippingMethod:index.html.twig */
class __TwigTemplate_c59996dd135183a7e4359eef609174e716a8754a1673d2968c29c66cc6596dc2 extends Twig_Template
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
        $context["__internal_0f322234b4eaded336c1cb0a4c3012a69b6e8880bd22375d1a2568bb7aba252b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_110241d3f2d722ce98a914abfd2389bf8ed7bf188e0732ba45e76e2edc1764ef"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ShippingMethod:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.shipping_method.index"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 17
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_create"), $this->env->getExtension('translator')->trans("sylius.shipping_method.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_shipping_category_index"), $this->env->getExtension('translator')->trans("sylius.shipping_category.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.shipping_method.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_0f322234b4eaded336c1cb0a4c3012a69b6e8880bd22375d1a2568bb7aba252b"]->getpagination((isset($context["shipping_methods"]) ? $context["shipping_methods"] : $this->getContext($context, "shipping_methods")));
        echo "
";
        // line 24
        echo $context["__internal_110241d3f2d722ce98a914abfd2389bf8ed7bf188e0732ba45e76e2edc1764ef"]->getlist((isset($context["shipping_methods"]) ? $context["shipping_methods"] : $this->getContext($context, "shipping_methods")));
        echo "
";
        // line 25
        echo $context["__internal_0f322234b4eaded336c1cb0a4c3012a69b6e8880bd22375d1a2568bb7aba252b"]->getpagination((isset($context["shipping_methods"]) ? $context["shipping_methods"] : $this->getContext($context, "shipping_methods")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingMethod:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
