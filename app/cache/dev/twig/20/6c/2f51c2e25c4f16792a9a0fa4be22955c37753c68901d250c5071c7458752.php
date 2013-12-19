<?php

/* SyliusWebBundle:Backend/Variant:_form.html.twig */
class __TwigTemplate_206c2f51c2e25c4f16792a9a0fa4be22955c37753c68901d250c5071c7458752 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-8 row-split\">
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 4
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "options", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options")) > 0))) {
            // line 5
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options"));
            foreach ($context['_seq'] as $context["_key"] => $context["optionForm"]) {
                // line 6
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        ";
        }
        // line 9
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sku"), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "availableOn"), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "availableOn"), "date"), 'row', array("label" => false));
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "availableOn"), "time"), 'row', array("label" => false));
        echo "
            </div>
        </div>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "availableOnDemand"), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "onHand"), 'row');
        echo "
    </div>

    <div class=\"col-md-4\">
        <div id=\"sylius-assortment-variant-images\" class=\"col-md-12\" data-prototype=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), "vars"), "prototype"), 'widget'));
        echo "\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["imageForm"]) {
            // line 26
            echo "            <div class=\"sylius-assortment-variant-images-image\">
                <div class=\"control-group\">
                    <div class=\"controls\">
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["imageForm"]) ? $context["imageForm"] : $this->getContext($context, "imageForm")), "vars"), "value"), "path"), "sylius_90x60"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"img-polaroid\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["imageForm"]) ? $context["imageForm"] : $this->getContext($context, "imageForm")), "vars"), "value"), "path"), "sylius_90x60"), "html", null, true);
            echo "\" alt=\"\" /></a>
                        &nbsp;
                        ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["imageForm"]) ? $context["imageForm"] : $this->getContext($context, "imageForm")), "file"), 'widget');
            echo "
                        &nbsp;
                        <a href=\"#\" class=\"btn btn-danger\" data-collection-button=\"delete\" data-prototype=\"sylius-assortment-variant-images\" data-collection=\"sylius-assortment-variant-images\"><i class=\"glyphicon glyphicon-trash\"></i>&nbsp;";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.delete_image"), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>

        <hr>

        <div class=\"col-md-12\">
            <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-variant-images\" data-collection=\"sylius-assortment-variant-images\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.add_image"), "html", null, true);
        echo "</a>
        </div>
    </div>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Variant:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  129 => 43,  122 => 38,  111 => 33,  106 => 31,  99 => 29,  94 => 26,  90 => 25,  79 => 20,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  56 => 12,  51 => 10,  46 => 9,  43 => 8,  29 => 5,  27 => 4,  23 => 3,  19 => 1,  86 => 24,  84 => 23,  77 => 21,  72 => 19,  66 => 16,  63 => 15,  60 => 14,  53 => 10,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
