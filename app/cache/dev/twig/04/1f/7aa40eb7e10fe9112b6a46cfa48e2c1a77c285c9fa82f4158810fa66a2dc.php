<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_041f7aa40eb7e10fe9112b6a46cfa48e2c1a77c285c9fa82f4158810fa66a2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        // line 8
        echo "  <h1>Avis</h1>
    <hr>
  ";
        // line 11
        echo "  ";
        $this->displayBlock('sdzblog_body', $context, $blocks);
    }

    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 11,  45 => 8,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  81 => 18,  72 => 16,  64 => 13,  60 => 12,  54 => 11,  51 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
