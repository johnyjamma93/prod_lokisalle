<?php

/* SyliusWebBundle:Frontend/Form:_address.html.twig */
class __TwigTemplate_022d16f416485616f3a07a81895949ee34d7f9cb061eeb884aa7c2a131d1df34 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'row');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'row');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'row', array("attr" => array("class" => "select2 country-select")));
        echo "

<div class=\"province-container\" data-url=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sylius_province_choice_form");
        echo "\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "province", array(), "any", true, true)) {
            // line 7
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province"), 'row', array("attr" => array("class" => "select2")));
            echo "
    ";
        }
        // line 9
        echo "</div>

";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'row');
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'row');
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postcode"), 'row');
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Form:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  52 => 12,  48 => 11,  44 => 9,  38 => 7,  27 => 3,  23 => 2,  24 => 2,  19 => 1,  127 => 45,  121 => 44,  115 => 41,  108 => 36,  106 => 35,  102 => 34,  93 => 29,  91 => 28,  87 => 27,  78 => 21,  73 => 19,  70 => 18,  68 => 17,  62 => 14,  59 => 13,  56 => 13,  40 => 8,  36 => 6,  32 => 5,  29 => 3,);
    }
}
