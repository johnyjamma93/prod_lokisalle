<?php

/* SyliusWebBundle:Backend:filterForms.html.twig */
class __TwigTemplate_17d94648a7d30b55279ae90a27fb4fdb09ad381c9379f2b499dc0687f1e77f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle::forms.html.twig");

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'money_widget' => array($this, 'block_money_widget'),
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
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "sr-only")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', ((array_key_exists("criteria", $context)) ? (_twig_default_filter((isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), array())) : (array())));
        echo "
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 9
            echo "            <span class=\"help-block\">
                ";
            // line 10
            echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
            // line 14
            echo "
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_money_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    <div class=\"input-group\">
        <span class=\"input-group-addon\">";
        // line 24
        echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
        echo "</span>
        ";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:filterForms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 24,  66 => 17,  58 => 14,  56 => 10,  53 => 9,  49 => 8,  34 => 5,  29 => 3,  32 => 4,  24 => 3,  21 => 2,  19 => 1,  107 => 36,  103 => 35,  91 => 30,  83 => 29,  77 => 23,  75 => 22,  72 => 21,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  52 => 14,  45 => 7,  41 => 6,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
