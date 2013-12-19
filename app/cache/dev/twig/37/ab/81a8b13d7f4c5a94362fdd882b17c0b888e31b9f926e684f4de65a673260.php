<?php

/* SyliusWebBundle:Backend/Product:update.html.twig */
class __TwigTemplate_37ab81a8b13d7f4c5a94362fdd882b17c0b888e31b9f926e684f4de65a673260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $context["__internal_7df65f36094034151c33534df03b396a0d67f5ad1774d1e9623bb2f21c8819f0"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0be11ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0be11ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_product_prototype-handler_1.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "0be11ac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0be11ac_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_product_dynamic-property-types_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "0be11ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0be11ac") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_product.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_topbar($context, array $blocks = array())
    {
        // line 16
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.product.index"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 26
        echo $this->env->getExtension('translator')->trans("sylius.product.update_header");
        echo "</h1>
</div>

";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 33
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product:_form.html.twig")->display($context);
        // line 34
        echo "    ";
        echo $context["__internal_7df65f36094034151c33534df03b396a0d67f5ad1774d1e9623bb2f21c8819f0"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  118 => 33,  111 => 31,  106 => 29,  100 => 26,  97 => 25,  94 => 24,  87 => 20,  81 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  43 => 11,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
