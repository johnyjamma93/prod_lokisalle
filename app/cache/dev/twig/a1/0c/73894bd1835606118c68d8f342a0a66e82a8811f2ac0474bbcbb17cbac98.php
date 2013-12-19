<?php

/* SyliusWebBundle:Backend/Settings:taxation.html.twig */
class __TwigTemplate_a10c73894bd1835606118c68d8f342a0a66e82a8811f2ac0474bbcbb17cbac98 extends Twig_Template
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
        $context["__internal_fa5c394c8141d018cc8284f8caa6a95eb3db7501f956d7df881d3e06189e5d0d"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.taxation_settings"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 14
        echo $this->env->getExtension('translator')->trans("sylius.settings.taxation_header");
        echo "</h1>
</div>

";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sylius_backend_taxation_settings");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "default_tax_zone"), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 22
        echo $context["__internal_fa5c394c8141d018cc8284f8caa6a95eb3db7501f956d7df881d3e06189e5d0d"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Settings:taxation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  73 => 21,  69 => 20,  65 => 19,  60 => 17,  54 => 14,  51 => 13,  48 => 12,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
