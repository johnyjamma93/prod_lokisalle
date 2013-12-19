<?php

/* SyliusWebBundle:Backend/Prototype:index.html.twig */
class __TwigTemplate_ac9a83a338eea85264865ec87849c9658c83df2e24b36220f23003da8169245b extends Twig_Template
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
        $context["__internal_878bd57a254a3a424f09d54cc29160dc575a8fb582d4e3bf60dcf6c21b6176ba"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_35f931d7e03fab6d3e6a0ac2faaa9d9fc45cacb20ab4bb9e7098abd0e0487cb6"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Prototype:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.prototype.index"), "html", null, true);
        echo "</a></li>
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_prototype_create"), $this->env->getExtension('translator')->trans("sylius.prototype.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_option_index"), $this->env->getExtension('translator')->trans("sylius.option.manage"));
        echo "
        ";
        // line 19
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_property_index"), $this->env->getExtension('translator')->trans("sylius.property.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-compressed\"></i> ";
        // line 21
        echo $this->env->getExtension('translator')->trans("sylius.prototype.index_header");
        echo "</h1>
</div>

";
        // line 24
        echo $context["__internal_878bd57a254a3a424f09d54cc29160dc575a8fb582d4e3bf60dcf6c21b6176ba"]->getpagination((isset($context["prototypes"]) ? $context["prototypes"] : $this->getContext($context, "prototypes")));
        echo "
";
        // line 25
        echo $context["__internal_35f931d7e03fab6d3e6a0ac2faaa9d9fc45cacb20ab4bb9e7098abd0e0487cb6"]->getlist((isset($context["prototypes"]) ? $context["prototypes"] : $this->getContext($context, "prototypes")));
        echo "
";
        // line 26
        echo $context["__internal_878bd57a254a3a424f09d54cc29160dc575a8fb582d4e3bf60dcf6c21b6176ba"]->getpagination((isset($context["prototypes"]) ? $context["prototypes"] : $this->getContext($context, "prototypes")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Prototype:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  82 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
