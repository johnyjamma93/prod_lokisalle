<?php

/* SyliusWebBundle:Backend/Property:index.html.twig */
class __TwigTemplate_fd59c55490d74a50456e2ce6db6e336a9f8ead6021e95ca1c696fc50376fca84 extends Twig_Template
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
        $context["__internal_876daba9401a4b12a523c12270ba72a25b0dcb3bfe8a872d8dcafe8489c6362a"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_4ea359ea9386b49c5968bb055c9abc741b892329be0277e7c9546261acbe4205"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Property:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.property.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_property_create"), $this->env->getExtension('translator')->trans("sylius.property.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_option_index"), $this->env->getExtension('translator')->trans("sylius.option.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-list-alt\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.property.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_876daba9401a4b12a523c12270ba72a25b0dcb3bfe8a872d8dcafe8489c6362a"]->getpagination((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        echo "
";
        // line 24
        echo $context["__internal_4ea359ea9386b49c5968bb055c9abc741b892329be0277e7c9546261acbe4205"]->getlist((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        echo "
";
        // line 25
        echo $context["__internal_876daba9401a4b12a523c12270ba72a25b0dcb3bfe8a872d8dcafe8489c6362a"]->getpagination((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Property:index.html.twig";
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
