<?php

/* SyliusWebBundle:Backend/Zone:create.html.twig */
class __TwigTemplate_9bc55bdebd1e5e6f3913787d0d86dcdfc19d3b44e20180f10cff3894dd0c9fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $context["__internal_a4b147c203949fde60ab521b0ae3a3dcdbf2d140b2aa331dd2bdfde809589aeb"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2b71270_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b71270_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_addressing_zone_sylius-addressing-zone_1.js");
            // line 9
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2b71270"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b71270") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_addressing_zone.js");
            // line 9
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_topbar($context, array $blocks = array())
    {
        // line 15
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sylius_backend_zone_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.zone.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 24
        echo $this->env->getExtension('translator')->trans("sylius.zone.create_header");
        echo "</h1>
</div>

";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_zone_create", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
    ";
        // line 30
        $this->env->loadTemplate("SyliusWebBundle:Backend/Zone:_form.html.twig")->display($context);
        // line 31
        echo "    ";
        echo $context["__internal_a4b147c203949fde60ab521b0ae3a3dcdbf2d140b2aa331dd2bdfde809589aeb"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Zone:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  109 => 30,  105 => 29,  100 => 27,  94 => 24,  91 => 23,  88 => 22,  81 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  57 => 10,  52 => 9,  45 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
