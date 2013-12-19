<?php

/* SyliusWebBundle:Backend/Country:index.html.twig */
class __TwigTemplate_17ebcdd86e4327a5f5d414e4ef02f359e442dd75afa0d0352835edfceaf5ce3b extends Twig_Template
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
        $context["__internal_6722a52f36cb54df65ef9a0da65d1fe6ee4db289c2a3cb35c2c29f0228dbc6e2"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_4e08a1aae5cf6430589d72014455bf9e6a913c0e79f7c2a183f5cf716353badf"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Country:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.country.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_country_create"), $this->env->getExtension('translator')->trans("sylius.country.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_zone_index"), $this->env->getExtension('translator')->trans("sylius.zone.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.country.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_6722a52f36cb54df65ef9a0da65d1fe6ee4db289c2a3cb35c2c29f0228dbc6e2"]->getpagination((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        echo "
";
        // line 24
        echo $context["__internal_4e08a1aae5cf6430589d72014455bf9e6a913c0e79f7c2a183f5cf716353badf"]->getlist((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        echo "
";
        // line 25
        echo $context["__internal_6722a52f36cb54df65ef9a0da65d1fe6ee4db289c2a3cb35c2c29f0228dbc6e2"]->getpagination((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Country:index.html.twig";
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
