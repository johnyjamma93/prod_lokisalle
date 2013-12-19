<?php

/* SyliusWebBundle:Backend/Property:update.html.twig */
class __TwigTemplate_7ef26d49acf0ea61225586af65df3895284ac9ff6736a1af90f11c66d5bade9c extends Twig_Template
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
        $context["__internal_a0b6e9697612c8d0f6fcc30f7ebe96a99072a81847396df3e3ae07ff58475ebc"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name"), "html", null, true);
        echo "</li>
    <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 25
        echo $this->env->getExtension('translator')->trans("sylius.property.update_header");
        echo "</h1>
</div>

";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_property_update", array("id" => $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 32
        $this->env->loadTemplate("SyliusWebBundle:Backend/Property:_form.html.twig")->display($context);
        // line 33
        echo "    ";
        echo $context["__internal_a0b6e9697612c8d0f6fcc30f7ebe96a99072a81847396df3e3ae07ff58475ebc"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Property:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  108 => 32,  103 => 30,  98 => 28,  92 => 25,  89 => 24,  86 => 23,  79 => 19,  75 => 18,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  43 => 10,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
