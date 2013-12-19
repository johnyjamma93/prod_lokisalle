<?php

/* SyliusWebBundle:Backend/Product:index.html.twig */
class __TwigTemplate_a4b8bd62bfe04a5653eec7da770c741d10219231b735aeecaff5ba6fec97c44f extends Twig_Template
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
        $context["__internal_e82a83fb49c71c7efad734786fe865b358d6b0851acff0217e39677d8386a9fa"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_5cd5788e62834dfdc88ee7010c75dd7226df398b34701c14e31f51e4cd6fae31"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Product:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.product.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_product_create"), $this->env->getExtension('translator')->trans("sylius.product.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_option_index"), $this->env->getExtension('translator')->trans("sylius.option.manage"));
        echo "
        ";
        // line 19
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_property_index"), $this->env->getExtension('translator')->trans("sylius.property.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-th-list\"></i> ";
        // line 21
        echo $this->env->getExtension('translator')->trans("sylius.product.index_header");
        echo "</h1>
</div>

";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sylius_backend_product_filter_form", array("criteria" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "criteria"), "method"))), array());
        // line 25
        echo "
";
        // line 26
        echo $context["__internal_e82a83fb49c71c7efad734786fe865b358d6b0851acff0217e39677d8386a9fa"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 27
        echo $context["__internal_5cd5788e62834dfdc88ee7010c75dd7226df398b34701c14e31f51e4cd6fae31"]->getlist((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 28
        echo $context["__internal_e82a83fb49c71c7efad734786fe865b358d6b0851acff0217e39677d8386a9fa"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  87 => 27,  83 => 26,  80 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
