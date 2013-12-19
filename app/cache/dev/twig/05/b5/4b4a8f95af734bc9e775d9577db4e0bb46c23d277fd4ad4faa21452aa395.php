<?php

/* SyliusWebBundle:Backend/ShippingCategory:index.html.twig */
class __TwigTemplate_05b54b4a8f95af734bc9e775d9577db4e0bb46c23d277fd4ad4faa21452aa395 extends Twig_Template
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
        $context["__internal_654754dedd524a07d268c42991fb477768517a6229271ef2d71791fd16da9607"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_21c5cf72d26af0e0b6fd1c36e36cd13bd37391134f9d399cc7dde9beff1767bb"] = $this->env->loadTemplate("SyliusWebBundle:Backend/ShippingCategory:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.shipping_category.index"), "html", null, true);
        echo "</a></li>
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_shipping_category_create"), $this->env->getExtension('translator')->trans("sylius.shipping_category.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_index"), $this->env->getExtension('translator')->trans("sylius.shipping_method.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.shipping_category.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_654754dedd524a07d268c42991fb477768517a6229271ef2d71791fd16da9607"]->getpagination((isset($context["shipping_categories"]) ? $context["shipping_categories"] : $this->getContext($context, "shipping_categories")));
        echo "
";
        // line 24
        echo $context["__internal_21c5cf72d26af0e0b6fd1c36e36cd13bd37391134f9d399cc7dde9beff1767bb"]->getlist((isset($context["shipping_categories"]) ? $context["shipping_categories"] : $this->getContext($context, "shipping_categories")));
        echo "
";
        // line 25
        echo $context["__internal_654754dedd524a07d268c42991fb477768517a6229271ef2d71791fd16da9607"]->getpagination((isset($context["shipping_categories"]) ? $context["shipping_categories"] : $this->getContext($context, "shipping_categories")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingCategory:index.html.twig";
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
