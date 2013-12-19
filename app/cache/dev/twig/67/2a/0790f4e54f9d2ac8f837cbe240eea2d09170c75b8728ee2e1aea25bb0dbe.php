<?php

/* SyliusWebBundle:Backend/Promotion:_form.html.twig */
class __TwigTemplate_672a0790f4e54f9d2ac8f837cbe240eea2d09170c75b8728ee2e1aea25bb0dbe extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SyliusWebBundle:Backend/Promotion:_forms.html.twig"));
        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-8 row-split\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usageLimit"), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startsAt"), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endsAt"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couponBased"), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
    </div>

    <div class=\"col-md-4\">
            <div id=\"sylius_promotion_rules\" data-prototype=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rules"), "vars"), "prototype"), 'widget'));
        echo "\">
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rules"));
        foreach ($context['_seq'] as $context["_key"] => $context["ruleForm"]) {
            // line 17
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ruleForm"]) ? $context["ruleForm"] : $this->getContext($context, "ruleForm")), "type"), 'row');
            echo "
                    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ruleForm"]) ? $context["ruleForm"] : $this->getContext($context, "ruleForm")), "configuration"), 'row', array("label" => false));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ruleForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"sylius_promotion_rules\" data-collection=\"sylius_promotion_rules\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.add_rule"), "html", null, true);
        echo "</a>

        <hr>

            <div id=\"sylius_promotion_actions\" data-prototype=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actions"), "vars"), "prototype"), 'widget'));
        echo "\">
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actions"));
        foreach ($context['_seq'] as $context["_key"] => $context["actionForm"]) {
            // line 27
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["actionForm"]) ? $context["actionForm"] : $this->getContext($context, "actionForm")), "type"), 'row');
            echo "
                    ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["actionForm"]) ? $context["actionForm"] : $this->getContext($context, "actionForm")), "configuration"), 'row', array("label" => false));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
            <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"sylius_promotion_actions\" data-collection=\"sylius_promotion_actions\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.promotion.add_action"), "html", null, true);
        echo "</a>
    </div>
</div>

<hr>

";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototypes"));
        foreach ($context['_seq'] as $context["type"] => $context["prototype"]) {
            // line 38
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'widget'));
            echo "\">
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['prototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Promotion:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  121 => 37,  112 => 31,  101 => 28,  96 => 27,  92 => 26,  78 => 20,  70 => 18,  61 => 16,  57 => 15,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,  111 => 32,  109 => 30,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 25,  81 => 21,  75 => 18,  71 => 17,  68 => 16,  65 => 17,  43 => 11,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
