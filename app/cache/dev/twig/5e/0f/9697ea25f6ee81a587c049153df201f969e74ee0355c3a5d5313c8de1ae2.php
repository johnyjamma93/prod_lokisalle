<?php

/* SyliusWebBundle:Backend/Property:_form.html.twig */
class __TwigTemplate_5e0f9697ea25f6ee81a587c049153df201f969e74ee0355c3a5d5313c8de1ae2 extends Twig_Template
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
        echo "<fieldset>
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
    ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "choices", array(), "any", true, true)) {
            // line 6
            echo "    ";
            ob_start();
            // line 7
            echo "        <div class=\"property-choices-container hidden\">
            <hr />
            <div id=\"sylius-assortment-property-choices\" class=\"collection-container\" data-prototype=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choices"), "vars"), "prototype"), 'row', array("label" => "Choice __name__")));
            echo "\">
                ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choices"));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 11
                echo "                    <div class=\"control-group\">
                        ";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), 'label', (twig_test_empty($_label_ = ("Choice " . (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) ? array() : array("label" => $_label_)));
                echo "
                        <div class=\"controls\">
                            ";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), 'widget');
                echo "
                            <a class=\"btn btn-danger delete-link sylius_property_choices_";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "_delete\" href=\"#\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <a href=\"#\" class=\"btn btn-success\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-property-choices\" data-collection=\"sylius-assortment-property-choices\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.property.add_choice"), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 29
            echo "    ";
        }
        // line 30
        echo "</fieldset>

";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Property:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  91 => 30,  79 => 23,  73 => 19,  63 => 15,  54 => 12,  51 => 11,  47 => 10,  36 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,  105 => 31,  103 => 30,  99 => 29,  94 => 27,  88 => 29,  85 => 23,  82 => 22,  75 => 18,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  43 => 9,  39 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
