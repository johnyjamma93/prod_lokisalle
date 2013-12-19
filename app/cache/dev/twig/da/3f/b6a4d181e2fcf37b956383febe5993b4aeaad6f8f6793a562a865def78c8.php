<?php

/* SyliusWebBundle:Backend/User:index.html.twig */
class __TwigTemplate_da3fb6a4d181e2fcf37b956383febe5993b4aeaad6f8f6793a562a865def78c8 extends Twig_Template
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
        $context["__internal_4acadf19cf305a9c44aebc0bb30d3fa3eea5c0069871c70be68df116bc55c8d5"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_79cf42477d36704660995a1e5b7511be1a5078a4eca443010faaab59633dca6a"] = $this->env->loadTemplate("SyliusWebBundle:Backend/User:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.customers"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.user.index"), "html", null, true);
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_user_create"), $this->env->getExtension('translator')->trans("sylius.user.create"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 19
        echo $this->env->getExtension('translator')->trans("sylius.user.index_header");
        echo "</h1>
</div>

";
        // line 22
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sylius_backend_user_filter_form", array("criteria" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "criteria"), "method"))), array());
        // line 23
        echo "
";
        // line 24
        $context["activeTab"] = ((((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "criteria"), "method"))) && ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "criteria"), "method", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "criteria"), "method", false, true), "enabled"), "1")) : ("1")) == "0"))) ? ("disabled") : ("all"));
        // line 25
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs grid-tabs\">
            <li class=\"";
        // line 29
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "all")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.filter.all"), "html", null, true);
        echo "</a></li>
            <li class=\"";
        // line 30
        echo ((((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "disabled")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_index", array("criteria" => array("enabled" => false))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.filter.unconfirmed"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>
</div>

";
        // line 35
        echo $context["__internal_79cf42477d36704660995a1e5b7511be1a5078a4eca443010faaab59633dca6a"]->getlist((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
";
        // line 36
        echo $context["__internal_4acadf19cf305a9c44aebc0bb30d3fa3eea5c0069871c70be68df116bc55c8d5"]->getpagination((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  103 => 35,  91 => 30,  83 => 29,  77 => 25,  75 => 24,  72 => 23,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
