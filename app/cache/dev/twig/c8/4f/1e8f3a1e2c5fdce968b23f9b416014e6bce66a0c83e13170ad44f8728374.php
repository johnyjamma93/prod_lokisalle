<?php

/* SyliusWebBundle:Backend/Prototype:update.html.twig */
class __TwigTemplate_c84f1e8f3a1e2c5fdce968b23f9b416014e6bce66a0c83e13170ad44f8728374 extends Twig_Template
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
        $context["__internal_ba4040fce5e9a85df877f08ed0011091de528dbce44320a4164eccaafb855419"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_prototype_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.prototype.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "name"), "html", null, true);
        echo "</li>
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
    <h1>";
        // line 16
        echo $this->env->getExtension('translator')->trans("sylius.prototype.update_header");
        echo "</h1>
</div>

";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_prototype_update", array("id" => $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 23
        $this->env->loadTemplate("SyliusWebBundle:Backend/Prototype:_form.html.twig")->display($context);
        // line 24
        echo "    ";
        echo $context["__internal_ba4040fce5e9a85df877f08ed0011091de528dbce44320a4164eccaafb855419"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Prototype:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  80 => 23,  75 => 21,  70 => 19,  64 => 16,  61 => 15,  58 => 14,  51 => 10,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
