<?php

/* SyliusWebBundle:Backend/Order:index.html.twig */
class __TwigTemplate_4671ea868310fa1a0c6576b6a4ff361f745803c9988e35280e019cdc7433468d extends Twig_Template
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
        $context["__internal_27e54d8fd21419afc029892a2b74856e9fccc366006c61d1dc7294c32699ce44"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_5fe40155b1196470a1416ecff9d48c8d5f0509dc9c2e15b968c7448257a2b021"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Order:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.order.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_order_create"), $this->env->getExtension('translator')->trans("sylius.order.create"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-shopping-cart\"></i> ";
        // line 19
        echo $this->env->getExtension('translator')->trans("sylius.order.index_header");
        echo "</h1>
</div>

";
        // line 22
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sylius_backend_order_filter_form", array("criteria" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "criteria"), "method"))), array());
        // line 23
        echo "
";
        // line 24
        echo $context["__internal_27e54d8fd21419afc029892a2b74856e9fccc366006c61d1dc7294c32699ce44"]->getpagination((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        echo "
";
        // line 25
        echo $context["__internal_5fe40155b1196470a1416ecff9d48c8d5f0509dc9c2e15b968c7448257a2b021"]->getlist((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        echo "
";
        // line 26
        echo $context["__internal_27e54d8fd21419afc029892a2b74856e9fccc366006c61d1dc7294c32699ce44"]->getpagination((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  79 => 25,  75 => 24,  72 => 23,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
