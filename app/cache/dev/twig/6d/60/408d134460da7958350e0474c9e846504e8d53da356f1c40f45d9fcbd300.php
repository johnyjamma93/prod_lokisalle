<?php

/* SyliusWebBundle:Backend/Country:create.html.twig */
class __TwigTemplate_6d60408d134460da7958350e0474c9e846504e8d53da356f1c40f45d9fcbd300 extends Twig_Template
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
        $context["__internal_eb2debb09a968ed4d68a6fdfe4444050d8c1e101c7a1767986f6b94513c1dadf"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_country_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.country.index"), "html", null, true);
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
        echo $this->env->getExtension('translator')->trans("sylius.country.create_header");
        echo "</h1>
</div>

";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sylius_backend_country_create");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 21
        $this->env->loadTemplate("SyliusWebBundle:Backend/Country:_form.html.twig")->display($context);
        // line 22
        echo "    ";
        echo $context["__internal_eb2debb09a968ed4d68a6fdfe4444050d8c1e101c7a1767986f6b94513c1dadf"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Country:create.html.twig";
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
