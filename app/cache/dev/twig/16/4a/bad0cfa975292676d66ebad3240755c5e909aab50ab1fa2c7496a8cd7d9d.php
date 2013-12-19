<?php

/* SyliusWebBundle:Backend/Zone:update.html.twig */
class __TwigTemplate_164abad0cfa975292676d66ebad3240755c5e909aab50ab1fa2c7496a8cd7d9d extends Twig_Template
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
        $context["__internal_d0b46e96ab8e0c549424ec2024b2c5bc9d1381147644949ba476f275fc7828bc"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
    <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_zone_show", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "name"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 25
        echo $this->env->getExtension('translator')->trans("sylius.zone.update_header");
        echo "</h1>
</div>

";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_zone_update", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 32
        $this->env->loadTemplate("SyliusWebBundle:Backend/Zone:_form.html.twig")->display($context);
        // line 33
        echo "    ";
        echo $context["__internal_d0b46e96ab8e0c549424ec2024b2c5bc9d1381147644949ba476f275fc7828bc"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Zone:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  116 => 32,  111 => 30,  106 => 28,  100 => 25,  97 => 24,  94 => 23,  87 => 19,  81 => 18,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  57 => 10,  52 => 9,  45 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
