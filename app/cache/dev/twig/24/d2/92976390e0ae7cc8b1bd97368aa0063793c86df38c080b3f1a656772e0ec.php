<?php

/* SyliusWebBundle:Frontend/Macros:misc.html.twig */
class __TwigTemplate_24d292976390e0ae7cc8b1bd97368aa0063793c86df38c080b3f1a656772e0ec extends Twig_Template
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
    }

    // line 1
    public function getpagination($_paginator = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "haveToPaginate", array(), "method")) {
                // line 3
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "twitter_bootstrap3_translated");
                echo "
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Macros:misc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  21 => 1,  254 => 51,  247 => 48,  241 => 45,  238 => 44,  236 => 43,  223 => 42,  210 => 39,  207 => 38,  204 => 37,  201 => 36,  199 => 35,  196 => 34,  193 => 33,  180 => 32,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  156 => 25,  153 => 24,  150 => 23,  137 => 22,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  113 => 15,  110 => 14,  107 => 13,  93 => 12,  78 => 8,  72 => 6,  70 => 5,  65 => 4,  59 => 3,  48 => 2,  33 => 1,  28 => 41,  22 => 21,  19 => 11,  54 => 14,  50 => 13,  46 => 12,  40 => 9,  37 => 8,  34 => 3,  29 => 5,  27 => 4,  25 => 31,);
    }
}
