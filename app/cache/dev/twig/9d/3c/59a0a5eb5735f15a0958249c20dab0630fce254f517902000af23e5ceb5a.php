<?php

/* SyliusWebBundle:Backend/ShippingMethod:create.html.twig */
class __TwigTemplate_9d3c59a0a5eb5735f15a0958249c20dab0630fce254f517902000af23e5ceb5a extends Twig_Template
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
        $context["__internal_640aacc65f3d46794dfb850584cd302dba0ab35ee639a7ac6c6d480c5276c572"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
            // asset "8727235_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8727235_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_shipping_method_prototype-handler_1.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "8727235_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8727235_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_shipping_method_sylius-shipping-method_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "8727235"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8727235") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_shipping_method.js");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.shipping_method.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 25
        echo $this->env->getExtension('translator')->trans("sylius.shipping_method.create_header");
        echo "</h1>
</div>

";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_create");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 31
        $this->env->loadTemplate("SyliusWebBundle:Backend/ShippingMethod:_form.html.twig")->display($context);
        // line 32
        echo "    ";
        echo $context["__internal_640aacc65f3d46794dfb850584cd302dba0ab35ee639a7ac6c6d480c5276c572"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingMethod:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  109 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  43 => 11,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
