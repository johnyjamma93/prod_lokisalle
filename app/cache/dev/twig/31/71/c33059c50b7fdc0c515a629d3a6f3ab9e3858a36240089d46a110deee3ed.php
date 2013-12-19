<?php

/* SyliusWebBundle:Backend/Option:index.html.twig */
class __TwigTemplate_3171c33059c50b7fdc0c515a629d3a6f3ab9e3858a36240089d46a110deee3ed extends Twig_Template
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
        $context["__internal_53d67fbd15c5c477fd11cc363a6a3a4b7c19fa013aa46528fe0d35bb9db5e07e"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_0e39421d8336507b2be203f227d1fb7eaebbd4719d44d524f9d44c503eaf47ef"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Option:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.option.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_option_create"), $this->env->getExtension('translator')->trans("sylius.option.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_property_index"), $this->env->getExtension('translator')->trans("sylius.property.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-th\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.option.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_53d67fbd15c5c477fd11cc363a6a3a4b7c19fa013aa46528fe0d35bb9db5e07e"]->getpagination((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "
";
        // line 24
        echo $context["__internal_0e39421d8336507b2be203f227d1fb7eaebbd4719d44d524f9d44c503eaf47ef"]->getlist((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "
";
        // line 25
        echo $context["__internal_53d67fbd15c5c477fd11cc363a6a3a4b7c19fa013aa46528fe0d35bb9db5e07e"]->getpagination((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Option:index.html.twig";
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
