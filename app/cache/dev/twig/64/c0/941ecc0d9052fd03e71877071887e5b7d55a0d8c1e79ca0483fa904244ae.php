<?php

/* SyliusWebBundle:Backend/TaxCategory:index.html.twig */
class __TwigTemplate_64c0941ecc0d9052fd03e71877071887e5b7d55a0d8c1e79ca0483fa904244ae extends Twig_Template
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
        $context["__internal_d478a7457f2d5c171e9d238996d5550a226cc12c18fd718903a6c11273134c32"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_90de2a39741d54fd19c7ee7bca14e53d6d77c1832d3f03e8b103b59fa7bf83c1"] = $this->env->loadTemplate("SyliusWebBundle:Backend/TaxCategory:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.tax_category.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_tax_category_create"), $this->env->getExtension('translator')->trans("sylius.tax_category.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_index"), $this->env->getExtension('translator')->trans("sylius.tax_rate.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.tax_category.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_d478a7457f2d5c171e9d238996d5550a226cc12c18fd718903a6c11273134c32"]->getpagination((isset($context["tax_categories"]) ? $context["tax_categories"] : $this->getContext($context, "tax_categories")));
        echo "
";
        // line 24
        echo $context["__internal_90de2a39741d54fd19c7ee7bca14e53d6d77c1832d3f03e8b103b59fa7bf83c1"]->getlist((isset($context["tax_categories"]) ? $context["tax_categories"] : $this->getContext($context, "tax_categories")));
        echo "
";
        // line 25
        echo $context["__internal_d478a7457f2d5c171e9d238996d5550a226cc12c18fd718903a6c11273134c32"]->getpagination((isset($context["tax_categories"]) ? $context["tax_categories"] : $this->getContext($context, "tax_categories")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/TaxCategory:index.html.twig";
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
