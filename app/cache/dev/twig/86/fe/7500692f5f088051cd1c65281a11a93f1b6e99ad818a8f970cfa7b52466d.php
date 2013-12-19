<?php

/* SyliusWebBundle:Backend/Misc:delete.html.twig */
class __TwigTemplate_86fe7500692f5f088051cd1c65281a11a93f1b6e99ad818a8f970cfa7b52466d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) : ($this->env->getExtension('translator')->trans("sylius.confirmation.message"))), "html", null, true);
        echo "</h1>
</div>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"), "html", null, true);
        echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"confirmed\" value=\"1\">
    <div class=\"form-actions\">
        <button class=\"btn btn-danger\" type=\"submit\">
            <i class=\"glyphicon glyphicon-trash\"></i> <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.delete"), "html", null, true);
        echo "</span>
        </button>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "headers"), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\" class=\"btn btn-info\"><i class=\"glyphicon glyphicon-remove\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Misc:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  48 => 13,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
