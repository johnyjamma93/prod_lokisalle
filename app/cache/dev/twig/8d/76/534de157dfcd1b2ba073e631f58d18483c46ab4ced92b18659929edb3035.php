<?php

/* SyliusWebBundle:Backend/Promotion:_forms.html.twig */
class __TwigTemplate_8d76534de157dfcd1b2ba073e631f58d18483c46ab4ced92b18659929edb3035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle::forms.html.twig");

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_row' => array($this, 'block_form_row'),
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
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    <div class=\"configuration\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_form_row($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    <div>
        ";
        // line 13
        $this->displayParentBlock("form_row", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Promotion:_forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  48 => 12,  29 => 3,  125 => 38,  121 => 37,  112 => 31,  101 => 28,  96 => 27,  92 => 26,  78 => 20,  70 => 18,  61 => 16,  57 => 15,  50 => 11,  46 => 11,  42 => 9,  38 => 8,  34 => 5,  30 => 6,  26 => 5,  21 => 2,  19 => 1,  111 => 32,  109 => 30,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 25,  81 => 21,  75 => 18,  71 => 17,  68 => 16,  65 => 17,  43 => 10,  39 => 7,  35 => 6,  32 => 4,  27 => 3,);
    }
}
