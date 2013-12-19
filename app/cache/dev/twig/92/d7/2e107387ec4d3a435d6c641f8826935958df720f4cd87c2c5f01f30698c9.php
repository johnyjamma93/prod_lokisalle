<?php

/* SyliusWebBundle:Frontend/Product:_single.html.twig */
class __TwigTemplate_92d72e107387ec4d3a435d6c641f8826935958df720f4cd87c2c5f01f30698c9 extends Twig_Template
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
        echo "<div class=\"row product\">
    <div class=\"col-md-3\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"thumbnail\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "sylius_200x200")) : ("http://placehold.it/200x200")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div class=\"col-md-9\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"btn btn-link\"><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</h3></a>
        <p>";
        // line 9
        echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "shortDescription"), $this->env->getExtension('translator')->trans("sylius.product.no_description"))) : ($this->env->getExtension('translator')->trans("sylius.product.no_description")));
        echo "</p>

        <hr>
        ";
        // line 12
        if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions"))) {
            // line 13
            echo "            <div class=\"pull-left\">
            ";
            // line 14
            if ((!$this->env->getExtension('sylius_inventory')->isStockAvailable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant")))) {
                // line 15
                echo "                <br />
                <span class=\"label label-important\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.out_of_stock"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 18
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_item_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                echo "\" method=\"post\" class=\"clearfix\">
                    ";
                // line 19
                $context["form"] = $this->env->getExtension('sylius_cart')->getItemFormView(array("product" => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))));
                // line 20
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'widget', array("attr" => array("class" => "center-text"), "empty_value" => "1"));
                echo "
                    ";
                // line 21
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
                echo "
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"icon-shopping-cart icon-white\"></i> ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.add_to_cart"), "html", null, true);
                echo "</button>
                </form>
            ";
            }
            // line 25
            echo "            </div>
        ";
        }
        // line 27
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-info pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.show"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Product:_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 25,  79 => 22,  75 => 21,  70 => 20,  68 => 19,  63 => 18,  58 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  42 => 9,  36 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
