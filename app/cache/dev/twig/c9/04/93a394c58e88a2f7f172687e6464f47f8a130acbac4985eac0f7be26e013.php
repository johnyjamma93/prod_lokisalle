<?php

/* SyliusWebBundle:Backend/User:show.html.twig */
class __TwigTemplate_c90493a394c58e88a2f7f172687e6464f47f8a130acbac4985eac0f7be26e013 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.customers"), "html", null, true);
        echo "</li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.user.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName"), "html", null, true);
        echo "</li>
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
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_user_index"), $this->env->getExtension('translator')->trans("sylius.user.manage"));
        echo "
        ";
        // line 17
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), null, false, false);
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.user.show_header");
        echo "</h1>
</div>


<table class=\"table table-bordered\">
    <thead>
        <tr>
            <th colspan=\"2\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.general_info", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.id"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 35
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName")) {
            // line 36
            echo "            <tr>
                <td><strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.first_name"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 41
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName")) {
            // line 42
            echo "            <tr>
                <td><strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.last_name"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 47
        echo "        <tr>
            <td><strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.username"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.email"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.enabled"), "html", null, true);
        echo "</strong></td>
            <td>
                <span class=\"label label-";
        // line 58
        echo (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled")) ? ("success") : ("important"));
        echo "\">
                    ";
        // line 59
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
        echo "
                </span>
            </td>
        </tr>
        ";
        // line 63
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin")) {
            // line 64
            echo "        <tr>
            <td><strong>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.last_login"), "html", null, true);
            echo "</strong></td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin")), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 69
        echo "    </tbody>
</table>

<div class=\"row\">
    ";
        // line 73
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "shippingAddress")) {
            // line 74
            echo "        <div class=\"col-md-6\">
            ";
            // line 75
            $this->env->loadTemplate("SyliusWebBundle:Backend/Address:_show.html.twig")->display(array_merge($context, array("address" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "shippingAddress"), "title" => $this->env->getExtension('translator')->trans("sylius.user.shipping_address"))));
            // line 76
            echo "        </div>
    ";
        }
        // line 78
        echo "    ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "billingAddress")) {
            // line 79
            echo "        <div class=\"col-md-6\">
            ";
            // line 80
            $this->env->loadTemplate("SyliusWebBundle:Backend/Address:_show.html.twig")->display(array_merge($context, array("address" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "billingAddress"), "title" => $this->env->getExtension('translator')->trans("sylius.user.billing_address"))));
            // line 81
            echo "        </div>
    ";
        }
        // line 83
        echo "</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 86
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sylius_backend_order_by_user", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all"), array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))), array());
        // line 87
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 87,  220 => 86,  215 => 83,  211 => 81,  209 => 80,  206 => 79,  203 => 78,  199 => 76,  197 => 75,  194 => 74,  192 => 73,  186 => 69,  180 => 66,  176 => 65,  173 => 64,  171 => 63,  164 => 59,  160 => 58,  155 => 56,  149 => 53,  145 => 52,  139 => 49,  135 => 48,  132 => 47,  126 => 44,  122 => 43,  119 => 42,  116 => 41,  110 => 38,  106 => 37,  103 => 36,  101 => 35,  96 => 33,  92 => 32,  84 => 27,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
