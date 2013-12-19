<?php

/* SyliusWebBundle:Backend/Settings:general.html.twig */
class __TwigTemplate_fb91cd0c4c93af27ccdb7bb004923d37aaad3ecf84a005a2b735846a2aa266e9 extends Twig_Template
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
        $context["__internal_ed544ab496d544630db5bae170204f3edb5e4f9df8b672be4dee47378191881d"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:actions.html.twig");
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
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.general_settings"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        // line 14
        echo $this->env->getExtension('translator')->trans("sylius.settings.general_header");
        echo "</h1>
</div>

";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sylius_backend_general_settings");
        echo "\" method=\"post\" class=\"form-horizontal\" novalidate>
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meta_keywords"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meta_description"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 24
        echo $context["__internal_ed544ab496d544630db5bae170204f3edb5e4f9df8b672be4dee47378191881d"]->getupdate();
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Settings:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  60 => 17,  54 => 14,  51 => 13,  48 => 12,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
