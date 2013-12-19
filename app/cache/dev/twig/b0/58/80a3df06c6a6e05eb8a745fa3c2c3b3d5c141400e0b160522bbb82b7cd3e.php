<?php

/* SyliusWebBundle:Backend/TaxRate:index.html.twig */
class __TwigTemplate_b05880a3df06c6a6e05eb8a745fa3c2c3b3d5c141400e0b160522bbb82b7cd3e extends Twig_Template
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
        $context["__internal_1cd4dc599f379baeebc7efe688a77c34941d87506aa323c8fac11ae20e377ef0"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_88a6c4ec1028bf3850c90b8139e5da5ad74fbbc04655bccae3ebfe1ed6c4c503"] = $this->env->loadTemplate("SyliusWebBundle:Backend/TaxRate:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.tax_rate.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_create"), $this->env->getExtension('translator')->trans("sylius.tax_rate.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_tax_category_index"), $this->env->getExtension('translator')->trans("sylius.tax_category.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.tax_rate.index_header");
        echo "</h1>
</div>


";
        // line 24
        echo $context["__internal_1cd4dc599f379baeebc7efe688a77c34941d87506aa323c8fac11ae20e377ef0"]->getpagination((isset($context["tax_rates"]) ? $context["tax_rates"] : $this->getContext($context, "tax_rates")));
        echo "
";
        // line 25
        echo $context["__internal_88a6c4ec1028bf3850c90b8139e5da5ad74fbbc04655bccae3ebfe1ed6c4c503"]->getlist((isset($context["tax_rates"]) ? $context["tax_rates"] : $this->getContext($context, "tax_rates")));
        echo "
";
        // line 26
        echo $context["__internal_1cd4dc599f379baeebc7efe688a77c34941d87506aa323c8fac11ae20e377ef0"]->getpagination((isset($context["tax_rates"]) ? $context["tax_rates"] : $this->getContext($context, "tax_rates")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/TaxRate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  79 => 25,  75 => 24,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
