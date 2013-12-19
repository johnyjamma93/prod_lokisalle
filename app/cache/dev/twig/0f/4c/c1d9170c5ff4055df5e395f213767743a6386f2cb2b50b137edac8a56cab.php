<?php

/* SyliusWebBundle:Frontend/Product:indexByTaxon.html.twig */
class __TwigTemplate_0f4cc1d9170c5ff4055df5e395f213767743a6386f2cb2b50b137edac8a56cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusWebBundle:Frontend/Macros:buttons.html.twig");
        // line 4
        $context["__internal_5a4d685d35274a8642b6075c7b84034abb1f2a6804c6a6a0ed822e961f44b942"] = $this->env->loadTemplate("SyliusWebBundle:Frontend/Macros:misc.html.twig");
        // line 5
        $context["__internal_71ce03f8f796d48e3ff692a0b3600b548dfe14151d08b92d39ef95c8238435de"] = $this->env->loadTemplate("SyliusWebBundle:Frontend/Product:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
    <h1>";
        // line 9
        echo $this->env->getExtension('translator')->trans("sylius.product.index_by_taxon_header", array("%taxon%" => $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name")));
        echo "</h1>
</div>

";
        // line 12
        echo $context["__internal_5a4d685d35274a8642b6075c7b84034abb1f2a6804c6a6a0ed822e961f44b942"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 13
        echo $context["__internal_71ce03f8f796d48e3ff692a0b3600b548dfe14151d08b92d39ef95c8238435de"]->getlist((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
";
        // line 14
        echo $context["__internal_5a4d685d35274a8642b6075c7b84034abb1f2a6804c6a6a0ed822e961f44b942"]->getpagination((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:indexByTaxon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  29 => 5,  27 => 4,  25 => 3,);
    }
}
