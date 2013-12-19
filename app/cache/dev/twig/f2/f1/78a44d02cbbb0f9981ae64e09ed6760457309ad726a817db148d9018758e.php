<?php

/* SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig */
class __TwigTemplate_f2f178a44d02cbbb0f9981ae64e09ed6760457309ad726a817db148d9018758e extends Twig_Template
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
        echo "<div class=\"progress progress-striped active ";
        echo (((100 == $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "progress"))) ? ("progress-success") : (""));
        echo "\">
   <div class=\"progress-bar\" style=\"width: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "progress"), "html", null, true);
        echo "%;\"></div>
</div>
<hr>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Checkout:_progressBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  127 => 45,  121 => 44,  115 => 41,  108 => 36,  106 => 35,  102 => 34,  93 => 29,  91 => 28,  87 => 27,  78 => 21,  73 => 19,  70 => 18,  68 => 17,  62 => 14,  59 => 13,  56 => 12,  40 => 8,  36 => 5,  32 => 4,  29 => 3,);
    }
}
