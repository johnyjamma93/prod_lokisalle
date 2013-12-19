<?php

/* SyliusWebBundle:Backend/User:_form.html.twig */
class __TwigTemplate_4d0361a2f79f34dc3ed02e9a67d7211d641ec934debf73d853c3c529850d378e extends Twig_Template
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
    <div class=\"col-md-12\">
        <fieldset>
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'row');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), 'row');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled"), 'row');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups"), 'row');
        echo "
        </fieldset>
    </div>

    <hr>

    <div class=\"col-md-12\">
        <div class=\"col-md-6\">
            <fieldset>
                <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shippingAddress"), "vars"), "label"), array(), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shippingAddress"), "vars"), "translation_domain")), "html", null, true);
        echo "</h4>
                ";
        // line 19
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Form:_address.html.twig")->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shippingAddress"))));
        // line 20
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "differentBillingAddress"), 'row');
        echo "
            </fieldset>
        </div>

        <div id=\"sylius-billing-address-container\" class=\"col-md-6\">
            <fieldset>
                <h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingAddress"), "vars"), "label"), array(), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingAddress"), "vars"), "translation_domain")), "html", null, true);
        echo "</h4>
                ";
        // line 27
        $this->env->loadTemplate("SyliusWebBundle:Frontend/Form:_address.html.twig")->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingAddress"))));
        // line 28
        echo "            </fieldset>
        </div>
    </div>
</div>
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  78 => 28,  76 => 27,  72 => 26,  60 => 19,  56 => 18,  44 => 9,  40 => 8,  36 => 7,  28 => 5,  24 => 4,  19 => 1,  107 => 30,  105 => 29,  100 => 27,  94 => 24,  91 => 23,  88 => 22,  81 => 18,  75 => 17,  69 => 16,  65 => 15,  62 => 20,  59 => 13,  43 => 9,  39 => 7,  35 => 6,  32 => 6,  27 => 3,);
    }
}
