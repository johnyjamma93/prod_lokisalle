<?php

/* SyliusWebBundle:Backend/Taxon:update.html.twig */
class __TwigTemplate_a6b8565ce5f06ebcf139f19c90978e2395df77fa15924f5bf7200035e263d718 extends Twig_Template
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
        $context["__internal_d2f420e7a7448e8d90c811133c3ee9214f4ea9dd448164e00257203fc22a039a"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.taxonomy.index"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "taxonomy"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "taxonomy"), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 17
        echo $this->env->getExtension('translator')->trans("sylius.taxon.update_header");
        echo "</h1>
</div>

";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_taxon_update", array("taxonomyId" => $this->getAttribute($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "taxonomy"), "id"), "id" => $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "id"))), "html", null, true);
        echo "\" method=\"post\"  class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 24
        $this->env->loadTemplate("SyliusWebBundle:Backend/Taxon:_form.html.twig")->display($context);
        // line 25
        echo "    ";
        echo $context["__internal_d2f420e7a7448e8d90c811133c3ee9214f4ea9dd448164e00257203fc22a039a"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Taxon:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  88 => 24,  81 => 22,  76 => 20,  70 => 17,  67 => 16,  64 => 15,  57 => 11,  53 => 10,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
