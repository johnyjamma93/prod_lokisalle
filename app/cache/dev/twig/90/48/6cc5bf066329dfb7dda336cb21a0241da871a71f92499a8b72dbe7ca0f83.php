<?php

/* SyliusWebBundle:Backend/Country:_form.html.twig */
class __TwigTemplate_90486cc5bf066329dfb7dda336cb21a0241da871a71f92499a8b72dbe7ca0f83 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<fieldset>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isoName"), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provinces"), 'widget');
        echo "
            <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"sylius_country_provinces\" data-collection=\"sylius_country_provinces\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.country.add_province"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</fieldset>
<hr>
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Country:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  36 => 9,  30 => 6,  19 => 1,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 11,  37 => 7,  34 => 6,  31 => 5,  26 => 5,);
    }
}
