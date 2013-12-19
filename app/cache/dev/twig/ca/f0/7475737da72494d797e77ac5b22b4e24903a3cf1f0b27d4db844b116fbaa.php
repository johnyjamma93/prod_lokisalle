<?php

/* SyliusWebBundle:Backend/Product/Form:_images.html.twig */
class __TwigTemplate_caf07475737da72494d797e77ac5b22b4e24903a3cf1f0b27d4db844b116fbaa extends Twig_Template
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
        // line 15
        echo "
<div class=\"tab-pane\" id=\"images\">
    <div id=\"sylius-assortment-product-images\" data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\" class=\"collection-container\" data-prototype=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this, "imagePrototype", array(), "method"));
        echo "\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "        <div class=\"sylius-assortment-variant-images-image row\">
            <div class=\"col-md-1\">
                ";
            // line 21
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path")) > 0)) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_gallery"), "html", null, true);
                echo "\" data-gallery=\"gallery\">
                    <img class=\"img-rounded\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_90x60"), "html", null, true);
                echo "\" alt=\"\" />
                </a>
                ";
            }
            // line 26
            echo "            </div>
            <div class=\"col-md-9\">
                ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "images"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), "file"), 'widget');
            echo "
            </div>
            <div class=\"col-md-2\">
                <a href=\"#\" class=\"btn btn-danger\" data-collection-button=\"delete\" data-prototype=\"sylius-assortment-product-images\" data-collection=\"sylius-assortment-product-images\"><i class=\"glyphicon glyphicon-trash\"></i>&nbsp;";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.delete_image"), "html", null, true);
            echo "</a>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>

    <hr>
    <a href=\"#\" class=\"btn btn-primary btn-block\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-product-images\" data-collection=\"sylius-assortment-product-images\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.add_image"), "html", null, true);
        echo "</a>
</div>
";
    }

    // line 1
    public function getimagePrototype()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"sylius-assortment-variant-images-image row\" id=\"sylius_product_masterVariant_images___name__\">
    <div class=\"col-md-1\">
        <span class=\"thumbnail\"></span>
    </div>
    <div class=\"col-md-9\">
        <span class=\"btn-primary btn-lg file-overlay\"><i class=\"glyphicon glyphicon-folder-open\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.form.choose_file"), "html", null, true);
            echo "</span>
        <input type=\"file\" class=\"form-control\" required=\"required\" name=\"sylius_product[masterVariant][images][__name__][file]\" id=\"sylius_product_masterVariant_images___name___file\">
    </div>
    <div class=\"col-md-2\">
        <a href=\"#\" class=\"btn btn-danger\" data-collection-button=\"delete\" data-prototype=\"sylius-assortment-product-images\" data-collection=\"sylius-assortment-product-images\"><i class=\"glyphicon glyphicon-trash\"></i>&nbsp;";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.delete_image"), "html", null, true);
            echo "</a>
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product/Form:_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 11,  117 => 7,  110 => 2,  101 => 1,  89 => 35,  61 => 26,  50 => 22,  44 => 19,  60 => 11,  56 => 9,  45 => 7,  24 => 3,  72 => 16,  64 => 14,  59 => 12,  55 => 23,  51 => 10,  47 => 9,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  48 => 21,  40 => 6,  37 => 8,  34 => 5,  31 => 4,  29 => 5,  25 => 3,  23 => 17,  19 => 15,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 38,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 31,  68 => 15,  65 => 28,  43 => 8,  39 => 7,  35 => 5,  32 => 5,  27 => 18,);
    }
}
