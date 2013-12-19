<?php

/* SyliusWebBundle:Frontend/Account:_profile.html.twig */
class __TwigTemplate_03cc62ef944cdb725e20bdc16e747f04bf0c6c3615ec86b28ab59b2b23e3e187 extends Twig_Template
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
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.account.home.welcome"), "html", null, true);
        echo "</h4>
<br>

<div class=\"row\">
    <div class=\"col-md-7\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.account.home.outline"), "html", null, true);
        echo " </div>
    <div class=\"col-md-5\">
        <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastName")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstName"), "html", null, true);
        echo "</strong><br><br>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.account.home.id"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
        echo " <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.account.home.email"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
        echo "<br>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.account.home.since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "createdAt")), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Account:_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 9,  27 => 5,  19 => 1,  70 => 15,  67 => 14,  58 => 11,  49 => 8,  43 => 6,  38 => 8,  32 => 7,  29 => 3,  31 => 4,  28 => 3,);
    }
}
