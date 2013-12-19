<?php

/* SyliusWebBundle:Backend/User:filterForm.html.twig */
class __TwigTemplate_25c8fe9b6fd71c0c228ce3cd3a9ef338f15e0ebc6fe473dfb3e9badcde5edfdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SyliusWebBundle:Backend:filterForms.html.twig"));
        // line 2
        echo "
<form method=\"get\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\" class=\"form-inline form-filter\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "query"), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-search\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.search"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  24 => 3,  21 => 2,  19 => 1,  107 => 36,  103 => 35,  91 => 30,  83 => 29,  77 => 25,  75 => 24,  72 => 23,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
