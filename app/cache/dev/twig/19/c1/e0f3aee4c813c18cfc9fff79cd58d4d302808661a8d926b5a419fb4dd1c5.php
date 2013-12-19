<?php

/* SyliusWebBundle:Backend/Property:create.html.twig */
class __TwigTemplate_19c1e0f3aee4c813c18cfc9fff79cd58d4d302808661a8d926b5a419fb4dd1c5 extends Twig_Template
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
        $context["__internal_cc1f7af634dae0ee55029329643a780c390d373f303122a868661d64b0dc9bf8"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
            // asset "cff6c74_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cff6c74_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_property_sylius-property-choices_1.js");
            // line 10
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cff6c74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cff6c74") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_property.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_topbar($context, array $blocks = array())
    {
        // line 15
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sylius_backend_property_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.property.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 24
        echo $this->env->getExtension('translator')->trans("sylius.property.create_header");
        echo "</h1>
</div>

";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sylius_backend_property_create");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 30
        $this->env->loadTemplate("SyliusWebBundle:Backend/Property:_form.html.twig")->display($context);
        // line 31
        echo "    ";
        echo $context["__internal_cc1f7af634dae0ee55029329643a780c390d373f303122a868661d64b0dc9bf8"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Property:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  103 => 30,  99 => 29,  94 => 27,  88 => 24,  85 => 23,  82 => 22,  75 => 18,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  43 => 10,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
