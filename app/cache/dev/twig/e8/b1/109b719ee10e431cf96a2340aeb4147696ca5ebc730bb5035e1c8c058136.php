<?php

/* SyliusWebBundle:Backend/ShippingMethod:_forms.html.twig */
class __TwigTemplate_e8b1109b719ee10e431cf96a2340aeb4147696ca5ebc730bb5035e1c8c058136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle::forms.html.twig");

        $this->blocks = array(
            '_sylius_shipping_method_categoryRequirement_row' => array($this, 'block__sylius_shipping_method_categoryRequirement_row'),
            '_sylius_shipping_method_categoryRequirement_widget' => array($this, 'block__sylius_shipping_method_categoryRequirement_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle::forms.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__sylius_shipping_method_categoryRequirement_row($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__sylius_shipping_method_categoryRequirement_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"col-lg-10\">
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "            <div class=\"radio\">
                <label>
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), "html", null, true);
            echo "
                    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingMethod:_forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  56 => 13,  52 => 12,  46 => 10,  29 => 3,  102 => 30,  95 => 25,  92 => 24,  83 => 22,  79 => 21,  76 => 20,  74 => 20,  57 => 15,  53 => 14,  49 => 11,  31 => 7,  21 => 2,  19 => 1,  111 => 32,  109 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 18,  68 => 16,  65 => 15,  43 => 10,  39 => 6,  35 => 5,  32 => 4,  27 => 6,);
    }
}
