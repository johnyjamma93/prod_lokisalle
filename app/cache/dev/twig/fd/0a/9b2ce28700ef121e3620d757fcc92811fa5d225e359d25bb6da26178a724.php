<?php

/* SyliusWebBundle:Backend/Taxonomy:show.html.twig */
class __TwigTemplate_fd0a9b2ce28700ef121e3620d757fcc92811fa5d225e359d25bb6da26178a724 extends Twig_Template
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
        $context["__internal_d2989a96eaddb32889ed882f47cce275e4792bfa426c2e2ace27ffdcc34172b6"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Taxon:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_topbar($context, array $blocks = array())
    {
        // line 7
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.taxonomy.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_taxon_create", array("taxonomyId" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"))), $this->env->getExtension('translator')->trans("sylius.taxon.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_index"), $this->env->getExtension('translator')->trans("sylius.taxonomy.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-tags\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.taxonomy.show_header", array("%name%" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name")));
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_d2989a96eaddb32889ed882f47cce275e4792bfa426c2e2ace27ffdcc34172b6"]->getlist((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "taxons"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Taxonomy:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 20,  67 => 18,  63 => 17,  59 => 15,  56 => 14,  49 => 10,  43 => 9,  39 => 8,  36 => 7,  33 => 6,  28 => 4,  26 => 3,);
    }
}
