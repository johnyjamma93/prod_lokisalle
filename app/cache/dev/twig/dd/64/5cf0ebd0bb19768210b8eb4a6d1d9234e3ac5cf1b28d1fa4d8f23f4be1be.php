<?php

/* SyliusWebBundle:Frontend/Product:_singleBox.html.twig */
class __TwigTemplate_dd645cf0ebd0bb19768210b8eb4a6d1d9234e3ac5cf1b28d1fa4d8f23f4be1be extends Twig_Template
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
        echo "<div class=\"product-box\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\"><h4>";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), 18), "html", null, true);
        echo "</h4></a>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\">
        <img class=\"img-rounded img-responsive\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_262x255")) : ("http://placehold.it/262x255")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "\" />
        <span class=\"label label-primary\">";
        // line 5
        echo $this->env->getExtension('sylius_money')->formatPrice($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"));
        echo "</span>
        <button class=\"btn btn-success btn-xs pull-right\"><i class=\"icon-shopping-cart icon-white\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.add_to_cart"), "html", null, true);
        echo "</button>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:_singleBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
