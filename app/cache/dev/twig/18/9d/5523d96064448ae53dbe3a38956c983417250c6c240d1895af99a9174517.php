<?php

/* SyliusWebBundle:Backend/PaymentMethod:index.html.twig */
class __TwigTemplate_189d5523d96064448ae53dbe3a38956c983417250c6c240d1895af99a9174517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        // line 4
        $context["__internal_b69cf2676e0a0a1149370a76d3890f1a8aea392f2d97a2f23cde53e408e6c0c4"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_6d3d825cc2b0641e4d5407a434db8908abb0cd39d5159b4cc2c83e977627112b"] = $this->env->loadTemplate("SyliusWebBundle:Backend/PaymentMethod:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.payment_method.index"), "html", null, true);
        echo "</a></li>
</ol>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 17
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_payment_method_create"), $this->env->getExtension('translator')->trans("sylius.payment_method.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_payment_index"), $this->env->getExtension('translator')->trans("sylius.payment.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-credit-card\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.payment_method.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_b69cf2676e0a0a1149370a76d3890f1a8aea392f2d97a2f23cde53e408e6c0c4"]->getpagination((isset($context["payment_methods"]) ? $context["payment_methods"] : $this->getContext($context, "payment_methods")));
        echo "
";
        // line 24
        echo $context["__internal_6d3d825cc2b0641e4d5407a434db8908abb0cd39d5159b4cc2c83e977627112b"]->getlist((isset($context["payment_methods"]) ? $context["payment_methods"] : $this->getContext($context, "payment_methods")));
        echo "
";
        // line 25
        echo $context["__internal_b69cf2676e0a0a1149370a76d3890f1a8aea392f2d97a2f23cde53e408e6c0c4"]->getpagination((isset($context["payment_methods"]) ? $context["payment_methods"] : $this->getContext($context, "payment_methods")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/PaymentMethod:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
