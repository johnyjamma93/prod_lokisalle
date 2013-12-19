<?php

/* SyliusWebBundle:Backend/User:update.html.twig */
class __TwigTemplate_50cfeb3c70b51a242a94a0299d0bf760dd7a91b258f5e87806795497cdc7bf86 extends Twig_Template
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
        $context["__internal_817c401817f94198b7a5fdaa3c86c2d669893857c46aad9250e9e9f411e7a5b9"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ade1ead_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ade1ead_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_province_province-choices_1.js");
            // line 9
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "ade1ead"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ade1ead") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_province.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 13
    public function block_topbar($context, array $blocks = array())
    {
        // line 14
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.customers"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.user.index"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.edit"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 24
        echo $this->env->getExtension('translator')->trans("sylius.user.update_header");
        echo "</h1>
</div>

<form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 29
        $this->env->loadTemplate("SyliusWebBundle:Backend/User:_form.html.twig")->display($context);
        // line 30
        echo "    ";
        echo $context["__internal_817c401817f94198b7a5fdaa3c86c2d669893857c46aad9250e9e9f411e7a5b9"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  105 => 29,  100 => 27,  94 => 24,  91 => 23,  88 => 22,  81 => 18,  75 => 17,  69 => 16,  65 => 15,  62 => 14,  59 => 13,  43 => 9,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
