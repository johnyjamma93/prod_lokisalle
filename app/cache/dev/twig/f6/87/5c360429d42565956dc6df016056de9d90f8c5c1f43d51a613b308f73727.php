<?php

/* SyliusWebBundle:Backend/Prototype:build.html.twig */
class __TwigTemplate_f6875c360429d42565956dc6df016056de9d90f8c5c1f43d51a613b308f73727 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topbar($context, array $blocks = array())
    {
        // line 5
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.assortment"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("sylius_backend_prototype_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.prototype.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.build"), "html", null, true);
        echo "</a></li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
    <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("sylius.prototype.build_header");
        echo "</h1>
</div>

<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_prototype_build", array("id" => $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 18
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product:_form.html.twig")->display($context);
        // line 19
        echo "    <div class=\"form-actions\">
        <input type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.create"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\" />
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("sylius_backend_prototype_index");
        echo "\" class=\"btn btn-lg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Prototype:build.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  75 => 20,  72 => 19,  70 => 18,  64 => 17,  58 => 14,  55 => 13,  52 => 12,  45 => 8,  39 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
