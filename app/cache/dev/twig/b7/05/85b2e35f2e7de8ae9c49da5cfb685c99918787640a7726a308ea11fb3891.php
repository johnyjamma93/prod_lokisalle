<?php

/* SyliusAddressingBundle:Province:_provinceChoiceForm.html.twig */
class __TwigTemplate_b70585b2e35f2e7de8ae9c49da5cfb685c99918787640a7726a308ea11fb3891 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("attr" => array("class" => "select2")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAddressingBundle:Province:_provinceChoiceForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
