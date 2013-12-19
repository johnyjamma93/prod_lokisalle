<?php

/* SyliusWebBundle:Backend/Product:_form.html.twig */
class __TwigTemplate_2fd0b006c432f73c7cf0c659987b0b2fe86ad88334a4ebbc219025078c3a4e7a extends Twig_Template
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
";
        // line 2
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_tabs.html.twig")->display($context);
        // line 3
        echo "<br>
<div class=\"tab-content\">
    ";
        // line 5
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_main.html.twig")->display($context);
        // line 6
        echo "    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_options.html.twig")->display($context);
        // line 7
        echo "    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_properties.html.twig")->display($context);
        // line 8
        echo "    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_categorization.html.twig")->display($context);
        // line 9
        echo "    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend/Product/Form:_images.html.twig")->display($context);
        // line 10
        echo "</div>
<hr>

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  43 => 10,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
