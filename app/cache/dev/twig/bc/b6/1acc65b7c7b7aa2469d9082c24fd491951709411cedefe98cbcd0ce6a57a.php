<?php

/* SyliusWebBundle:Backend/Product:filterForm.html.twig */
class __TwigTemplate_bcb61acc65b7c7b7aa2469d9082c24fd491951709411cedefe98cbcd0ce6a57a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_index");
        echo "\" class=\"form-inline form-filter\">
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sku"), 'row');
        echo "
<button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-search\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.filter"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  24 => 3,  19 => 1,  262 => 100,  257 => 98,  252 => 95,  240 => 89,  236 => 88,  232 => 87,  226 => 84,  222 => 83,  218 => 82,  211 => 78,  207 => 76,  201 => 73,  198 => 72,  192 => 69,  189 => 68,  186 => 67,  182 => 64,  179 => 63,  173 => 60,  170 => 59,  164 => 56,  161 => 55,  158 => 54,  152 => 51,  149 => 50,  147 => 49,  141 => 45,  133 => 43,  131 => 42,  127 => 40,  121 => 38,  119 => 37,  114 => 35,  110 => 34,  106 => 33,  98 => 28,  94 => 27,  90 => 26,  77 => 20,  73 => 19,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 5,  21 => 2,  91 => 28,  87 => 27,  83 => 22,  80 => 25,  78 => 24,  72 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
