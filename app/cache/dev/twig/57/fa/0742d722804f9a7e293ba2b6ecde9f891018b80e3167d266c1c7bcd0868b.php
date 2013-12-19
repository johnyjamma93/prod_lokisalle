<?php

/* SyliusWebBundle:Backend/Product/Form:_options.html.twig */
class __TwigTemplate_57fa0742d722804f9a7e293ba2b6ecde9f891018b80e3167d266c1c7bcd0868b extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"options\">
";
        // line 2
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "options", array(), "any", true, true)) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options"), 'row');
            echo "
";
        }
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Product/Form:_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  72 => 16,  64 => 14,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  30 => 5,  28 => 4,  26 => 3,  22 => 2,  48 => 13,  40 => 9,  37 => 8,  34 => 5,  31 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  113 => 32,  111 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 17,  68 => 15,  65 => 15,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
