<?php

/* SyliusWebBundle:Backend/Taxonomy:index.html.twig */
class __TwigTemplate_195036f2256ae72d6d38bbe703539141bf8b3757e695396fce51a3925bf82c8d extends Twig_Template
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
        $context["__internal_0784bc3073ae93f4431798f7668e7a92267739520280e1e51a9eaa50f0513a8b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_323d45496d16d10c8ed57d265415c2d99c5014d33390b51aa71e4e63ed8b6e7c"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Taxonomy:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.taxonomy.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_create"), $this->env->getExtension('translator')->trans("sylius.taxonomy.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_index"), $this->env->getExtension('translator')->trans("sylius.product.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-folder-close\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.taxonomy.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_0784bc3073ae93f4431798f7668e7a92267739520280e1e51a9eaa50f0513a8b"]->getpagination((isset($context["taxonomies"]) ? $context["taxonomies"] : $this->getContext($context, "taxonomies")));
        echo "
";
        // line 24
        echo $context["__internal_323d45496d16d10c8ed57d265415c2d99c5014d33390b51aa71e4e63ed8b6e7c"]->getlist((isset($context["taxonomies"]) ? $context["taxonomies"] : $this->getContext($context, "taxonomies")));
        echo "
";
        // line 25
        echo $context["__internal_0784bc3073ae93f4431798f7668e7a92267739520280e1e51a9eaa50f0513a8b"]->getpagination((isset($context["taxonomies"]) ? $context["taxonomies"] : $this->getContext($context, "taxonomies")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Taxonomy:index.html.twig";
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
