<?php

/* SyliusWebBundle:Backend/ShippingMethod:show.html.twig */
class __TwigTemplate_0627220d51c322e3b3338f3e1393384b88f69577ac9e309ec6059ea8965ee554 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topbar($context, array $blocks = array())
    {
        // line 6
        echo "<ol class=\"breadcrumb\">
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.configuration"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.shipping_method.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "name"), "html", null, true);
        echo "</a></li>
</ol>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"page-header\">
    <div class=\"actions-menu\">
        ";
        // line 16
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_index"), $this->env->getExtension('translator')->trans("sylius.shipping_method.manage"));
        echo "
        ";
        // line 17
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_update", array("id" => $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"))));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_shipping_method_delete", array("id" => $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "id"))), null, false, false);
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-cog\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.shipping_method.show_header");
        echo "</h1>
</div>


<table class=\"table table-bordered table-condensed\">
    <thead>
        <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.zone"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.category"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.enabled"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.calculator"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shipping_method.updated_at"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "name"), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "zone"), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo (($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : null), "category", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : null), "category"), "<i>undefined</i>")) : ("<i>undefined</i>"));
        echo "</td>
            <td>
                <span class=\"label label-";
        // line 41
        echo (($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "enabled")) ? ("success") : ("important"));
        echo "\">
                    ";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "enabled")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
        echo "
                </span>
            </td>
            <td><span class=\"label label-info\">";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "calculator"))), "html", null, true);
        echo "</span></td>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["shipping_method"]) ? $context["shipping_method"] : $this->getContext($context, "shipping_method")), "updatedAt")), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/ShippingMethod:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  135 => 45,  129 => 42,  125 => 41,  120 => 39,  116 => 38,  112 => 37,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
