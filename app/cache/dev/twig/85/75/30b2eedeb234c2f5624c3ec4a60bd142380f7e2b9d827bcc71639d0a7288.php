<?php

/* SyliusWebBundle:Backend/Zone:_form.html.twig */
class __TwigTemplate_857530b2eedeb234c2f5624c3ec4a60bd142380f7e2b9d827bcc71639d0a7288 extends Twig_Template
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
<fieldset>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("class" => "input-lg")));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            <div class=\"control-group\">
                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "country", 1 => "province", 2 => "zone"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 11
            echo "                    <div id=\"sylius-zone-members-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "members"), "vars"), "prototypes"), ("sylius_zone_member_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), array(), "array"), 'widget', array("attr" => array("class" => "select2 input-large"))));
            echo "\">
                        ";
            // line 12
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), "vars"), "value") == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                // line 13
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "members"));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 14
                    echo "                                ";
                    if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "offsetExists", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), "vars"), "value")), "method")) {
                        // line 15
                        echo "                                    <div class=\"row\" style=\"margin-bottom: 10px;\">
                                        <div class=\"col-md-11\">
                                            ";
                        // line 17
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), "vars"), "value"), array(), "array"), 'widget', array("attr" => array("class" => "select2 float-right input-large")));
                        echo "
                                        </div>
                                        <div class=\"col-md-1\">
                                            <a href=\"#\" class=\"btn btn-danger collection-remove-btn float-left\"><i class=\"glyphicon glyphicon-trash icon-white\"></i></a>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 24
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                        ";
            }
            // line 26
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context["prototypeId"] = ("sylius-zone-members-" . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array(), "any", false, true), "vars", array(), "any", false, true), "value"), twig_constant("Sylius\\Bundle\\AddressingBundle\\Model\\ZoneInterface::TYPE_COUNTRY"))) : (twig_constant("Sylius\\Bundle\\AddressingBundle\\Model\\ZoneInterface::TYPE_COUNTRY"))));
        // line 29
        echo "                <a href=\"#\" class=\"btn btn-success btn-block\" data-collection-button=\"add\" data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["prototypeId"]) ? $context["prototypeId"] : $this->getContext($context, "prototypeId")), "html", null, true);
        echo "\" data-collection=\"";
        echo twig_escape_filter($this->env, (isset($context["prototypeId"]) ? $context["prototypeId"] : $this->getContext($context, "prototypeId")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.zone.add_member"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</fieldset>
<hr>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Zone:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  72 => 24,  62 => 17,  58 => 15,  55 => 14,  50 => 13,  48 => 12,  41 => 11,  37 => 10,  30 => 6,  26 => 5,  19 => 1,  111 => 31,  109 => 30,  105 => 35,  100 => 27,  94 => 24,  91 => 29,  88 => 28,  81 => 26,  75 => 17,  71 => 16,  68 => 15,  65 => 14,  57 => 10,  52 => 9,  45 => 10,  40 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
