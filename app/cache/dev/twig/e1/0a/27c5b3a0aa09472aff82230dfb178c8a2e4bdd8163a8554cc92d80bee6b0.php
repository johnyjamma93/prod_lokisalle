<?php

/* SyliusWebBundle:Backend/Inventory:index.html.twig */
class __TwigTemplate_e10a27c5b3a0aa09472aff82230dfb178c8a2e4bdd8163a8554cc92d80bee6b0 extends Twig_Template
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
        $context["__internal_d80a0a85282c311e9520c64443946639b42db0960917eb7545f1c03baacdbf4f"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 4
        $context["__internal_e1c1ea083e5dc5459dd4fa8eba07310914c77eab1c277572fe452716468aa89c"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Inventory:macros.html.twig");
        // line 5
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.inventory.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_product_create"), $this->env->getExtension('translator')->trans("sylius.product.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_product_index"), $this->env->getExtension('translator')->trans("sylius.product.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-tasks\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.stockable.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_d80a0a85282c311e9520c64443946639b42db0960917eb7545f1c03baacdbf4f"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 24
        echo $context["__internal_e1c1ea083e5dc5459dd4fa8eba07310914c77eab1c277572fe452716468aa89c"]->getlist((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 25
        echo $context["__internal_d80a0a85282c311e9520c64443946639b42db0960917eb7545f1c03baacdbf4f"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Inventory:index.html.twig";
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
