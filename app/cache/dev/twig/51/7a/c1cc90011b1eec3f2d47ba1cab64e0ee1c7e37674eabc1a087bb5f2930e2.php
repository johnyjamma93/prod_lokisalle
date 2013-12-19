<?php

/* SyliusWebBundle:Backend/TaxRate:show.html.twig */
class __TwigTemplate_517ac1cc90011b1eec3f2d47ba1cab64e0ee1c7e37674eabc1a087bb5f2930e2 extends Twig_Template
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
        // line 2
        $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topbar($context, array $blocks = array())
    {
        // line 5
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.tax_rate.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "name"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-header\">
<h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("sylius.tax_rate.show_header");
        echo "</h1>
</div>

<div class=\"well\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_index");
        echo "\" class=\"btn btn-primary\">
        <i class=\"glyphicon glyphicon-list-alt\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_rate.manage"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_update", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"glyphicon glyphicon-pencil\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.edit"), "html", null, true);
        echo "
    </a>
    ";
        // line 24
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_tax_rate_delete", array("id" => $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "id"))));
        echo "
</div>

<table class=\"table table-bordered table-condensed\">
    <thead>
        <tr>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_rate.category"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_rate.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_rate.zone"), "html", null, true);
        echo "</th>
            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.tax_rate.amount"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "category"), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "name"), "html", null, true);
        echo "</td>
            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "zone"), "html", null, true);
        echo "</td>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax_rate"]) ? $context["tax_rate"] : $this->getContext($context, "tax_rate")), "amountAsPercentage"), "html", null, true);
        echo "%</td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/TaxRate:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  122 => 40,  118 => 39,  114 => 38,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  85 => 24,  80 => 22,  76 => 21,  71 => 19,  67 => 18,  60 => 14,  57 => 13,  54 => 12,  47 => 8,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  26 => 2,);
    }
}
