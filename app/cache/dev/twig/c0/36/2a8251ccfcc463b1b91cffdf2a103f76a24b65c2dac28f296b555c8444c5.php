<?php

/* SyliusWebBundle:Backend/Promotion:create.html.twig */
class __TwigTemplate_c0362a8251ccfcc463b1b91cffdf2a103f76a24b65c2dac28f296b555c8444c5 extends Twig_Template
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
        $context["__internal_fb3b1ee416eb8822430cbb9648ddb51347a82fe6771eec95a9eb2c72bc7f9db4"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
            // asset "7c00884_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7c00884_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_promotion_jquery.livequery_1.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "7c00884_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7c00884_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_promotion_sylius-promotion_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "7c00884"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7c00884") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_promotion.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_topbar($context, array $blocks = array())
    {
        // line 16
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sylius_backend_promotion_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.promotion.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.new"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-plus-sign\"></i> ";
        // line 25
        echo $this->env->getExtension('translator')->trans("sylius.promotion.create_header");
        echo "</h1>
</div>

";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sylius_backend_promotion_create");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 31
        $this->env->loadTemplate("SyliusWebBundle:Backend/Promotion:_form.html.twig")->display($context);
        // line 32
        echo "    ";
        echo $context["__internal_fb3b1ee416eb8822430cbb9648ddb51347a82fe6771eec95a9eb2c72bc7f9db4"]->getcreate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Promotion:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  109 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  43 => 11,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
