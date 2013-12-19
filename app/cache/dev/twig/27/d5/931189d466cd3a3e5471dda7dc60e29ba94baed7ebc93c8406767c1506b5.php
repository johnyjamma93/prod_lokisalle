<?php

/* SyliusWebBundle:Backend/TaxCategory:create.html.twig */
class __TwigTemplate_27d5931189d466cd3a3e5471dda7dc60e29ba94baed7ebc93c8406767c1506b5 extends Twig_Template
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
        $context["__internal_40f00511e385b155e77c4b33c556d50bfa32e2eacf4cbcbec9fde61859f8d374"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_tax_category_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.tax_category.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 15
        echo $this->env->getExtension('translator')->trans("sylius.tax_category.create_header");
        echo "</h1>
</div>

";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sylius_backend_tax_category_create");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 21
        $this->env->loadTemplate("SyliusWebBundle:Backend/TaxCategory:_form.html.twig")->display($context);
        // line 22
        echo "    ";
        echo $context["__internal_40f00511e385b155e77c4b33c556d50bfa32e2eacf4cbcbec9fde61859f8d374"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/TaxCategory:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  75 => 21,  71 => 20,  66 => 18,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
