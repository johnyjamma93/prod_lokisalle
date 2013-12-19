<?php

/* SyliusWebBundle:Backend/ShippingMethod:_form.html.twig */
class __TwigTemplate_b87bd0fb4b949eda54bbc514261f2154d68e04db7fec707940114215d7451d4c extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SyliusWebBundle:Backend/ShippingMethod:_forms.html.twig"));
        // line 2
        echo "
<fieldset>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone"), 'row');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'row', array("attr" => array("class" => "select2")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryRequirement"), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled"), 'row', array("label" => ""));
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculator"), 'row');
        echo "
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototypes"));
        foreach ($context['_seq'] as $context["name"] => $context["calculatorConfigurationPrototype"]) {
            // line 15
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculator"), "vars"), "id"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-container=\".configuration\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["calculatorConfigurationPrototype"]) ? $context["calculatorConfigurationPrototype"] : $this->getContext($context, "calculatorConfigurationPrototype")), 'widget'));
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['calculatorConfigurationPrototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            <div class=\"configuration\">
            ";
        // line 19
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "configuration", array(), "any", true, true)) {
            // line 20
            echo "                <hr>
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configuration"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 22
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
</fieldset>

";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingMethod:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  95 => 25,  92 => 24,  83 => 22,  79 => 21,  76 => 20,  74 => 19,  57 => 15,  53 => 14,  49 => 13,  31 => 7,  21 => 2,  19 => 1,  111 => 32,  109 => 31,  105 => 30,  100 => 28,  94 => 25,  91 => 24,  88 => 23,  81 => 19,  75 => 18,  71 => 18,  68 => 16,  65 => 15,  43 => 10,  39 => 9,  35 => 8,  32 => 5,  27 => 6,);
    }
}
