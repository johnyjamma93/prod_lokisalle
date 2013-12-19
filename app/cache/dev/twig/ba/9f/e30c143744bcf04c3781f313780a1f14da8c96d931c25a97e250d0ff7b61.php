<?php

/* SyliusWebBundle:Backend/Variant:create.html.twig */
class __TwigTemplate_ba9fe30c143744bcf04c3781f313780a1f14da8c96d931c25a97e250d0ff7b61 extends Twig_Template
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
        $context["__internal_eb05a89c6de336e1e1f4abff2fb4f6ed2977ead5ae88498a6967ef5813cf0778"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.product.index"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product"), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 16
        echo $this->env->getExtension('translator')->trans("sylius.variant.create_header");
        echo "</h1>
</div>

";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_variant_create", array("productId" => $this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 22
        $this->env->loadTemplate("SyliusWebBundle:Backend/Variant:_form.html.twig")->display($context);
        // line 23
        echo "    ";
        echo $context["__internal_eb05a89c6de336e1e1f4abff2fb4f6ed2977ead5ae88498a6967ef5813cf0778"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Variant:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  83 => 22,  77 => 21,  72 => 19,  66 => 16,  63 => 15,  60 => 14,  53 => 10,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
