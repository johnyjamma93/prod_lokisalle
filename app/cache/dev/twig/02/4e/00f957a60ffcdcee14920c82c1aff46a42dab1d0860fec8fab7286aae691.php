<?php

/* SyliusWebBundle:Backend/Dashboard:main.html.twig */
class __TwigTemplate_024e00f957a60ffcdcee14920c82c1aff46a42dab1d0860fec8fab7286aae691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Backend:layout.html.twig");

        $this->blocks = array(
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
        $context["__internal_a7afe840060477f32a1190e9bf0466279e524ec2efa52de0764bde3d8650aaf5"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Order:macros.html.twig");
        // line 4
        $context["__internal_3e09108c199f4431d6a28f0e07e5c9da922156485d39ff256518094d59991017"] = $this->env->loadTemplate("SyliusWebBundle:Backend/User:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"page-header\">
    <h1><i class=\"glyphicon glyphicon-dashboard\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.dashboard.header"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.dashboard.subheader"), "html", null, true);
        echo "</small></h1>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <ul class=\"nav nav-pills nav-justified\">
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sylius_backend_order_index");
        echo "\"><i class=\"glyphicon glyphicon-shopping-cart\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.quick_links.orders"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.quick_links.users"), "html", null, true);
        echo "</a></li>
        </ul>
        <hr>
        <ul class=\"nav nav-pills nav-justified\">
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_index");
        echo "\"><i class=\"glyphicon glyphicon-folder-open\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.quick_links.products"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sylius_backend_product_create");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.quick_links.add_product"), "html", null, true);
        echo "</a></li>
        </ul>
        <br>
    </div>
    <div class=\"col-md-6\">
        <table class=\"table table-condensed\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.statistics"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.statistics.sales_this_month"), "html", null, true);
        echo "</td>
                    <td>";
        // line 34
        echo $this->env->getExtension('sylius_money')->formatPrice((isset($context["sales"]) ? $context["sales"] : $this->getContext($context, "sales")));
        echo " (";
        echo $this->env->getExtension('sylius_money')->formatPrice((isset($context["sales_confirmed"]) ? $context["sales_confirmed"] : $this->getContext($context, "sales_confirmed")));
        echo ")</td>
                </tr>
                <tr>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.statistics.orders_this_month"), "html", null, true);
        echo "</td>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["orders_count"]) ? $context["orders_count"] : $this->getContext($context, "orders_count")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.statistics.registrations_this_month"), "html", null, true);
        echo "</td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["registrations_count"]) ? $context["registrations_count"] : $this->getContext($context, "registrations_count")), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 51
        echo $context["__internal_a7afe840060477f32a1190e9bf0466279e524ec2efa52de0764bde3d8650aaf5"]->getsimple_list((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        echo "
        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("sylius_backend_order_index");
        echo "\" class=\"btn btn-primary btn-block\"><i class=\"glyphicon glyphicon-shopping-cart\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.show_all"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"col-md-6\">
        ";
        // line 55
        echo $context["__internal_3e09108c199f4431d6a28f0e07e5c9da922156485d39ff256518094d59991017"]->getsimple_list((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\" class=\"btn btn-primary btn-block\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.show_all"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Dashboard:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  141 => 55,  133 => 52,  129 => 51,  117 => 42,  113 => 41,  107 => 38,  103 => 37,  95 => 34,  91 => 33,  83 => 28,  70 => 20,  64 => 19,  55 => 15,  49 => 14,  38 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 3,);
    }
}
