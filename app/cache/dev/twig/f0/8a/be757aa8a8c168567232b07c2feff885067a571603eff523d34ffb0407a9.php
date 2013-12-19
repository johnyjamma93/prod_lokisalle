<?php

/* SyliusWebBundle:Backend/TaxRate:update.html.twig */
class __TwigTemplate_f08abe757aa8a8c168567232b07c2feff885067a571603eff523d34ffb0407a9 extends Twig_Template
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
        $context["__internal_972b8d910e975f8a4b1d75626dc809818aad4f19bd047439a050081d225ff5f1"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.tax_rate.index"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_show", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 16
        echo $this->env->getExtension('translator')->trans("sylius.tax_rate.update_header");
        echo "</h1>
</div>

";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_update", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 23
        $this->env->loadTemplate("SyliusWebBundle:Backend/TaxRate:_form.html.twig")->display($context);
        // line 24
        echo "    ";
        echo $context["__internal_972b8d910e975f8a4b1d75626dc809818aad4f19bd047439a050081d225ff5f1"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/TaxRate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  82 => 23,  77 => 21,  72 => 19,  66 => 16,  63 => 15,  60 => 14,  53 => 10,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
