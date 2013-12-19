<?php

/* SyliusWebBundle:Backend/Zone:show.html.twig */
class __TwigTemplate_9d62833d0d8fc0d05b498bfd27d5ea8b1fc2eca47beface16af7a3238791a126 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_zone_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.zone.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "name"), "html", null, true);
        echo "</li>
</ol>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"page-header\">
    <h1>";
        // line 15
        echo $this->env->getExtension('translator')->trans("sylius.zone.show_header");
        echo "</h1>
</div>

<div class=\"well\">
    ";
        // line 19
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_zone_index"), $this->env->getExtension('translator')->trans("sylius.zone.manage"));
        echo "
    ";
        // line 20
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_zone_update", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))));
        echo "
    ";
        // line 21
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_zone_delete", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), null, false, false);
        echo "
</div>

<table class=\"table table-bordered table-condensed\">
    <thead>
        <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.zone.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.zone.type"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "name"), "html", null, true);
        echo "</td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "type"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
        // line 38
        if ($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "hasMembers")) {
            // line 39
            echo "    <table id=\"members\" class=\"table table-bordered table-condensed\">
        <thead>
            <tr>
                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.zone_member.members"), "html", null, true);
            echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "members"));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 48
                echo "                <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\">
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "name"), "html", null, true);
                echo "</td>
                    <td>
                        <div class=\"pull-right\">
                            ";
                // line 52
                echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_zone_member_delete", array("zoneId" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"), "id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Zone:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  137 => 52,  131 => 49,  126 => 48,  122 => 47,  114 => 42,  109 => 39,  107 => 38,  100 => 34,  96 => 33,  88 => 28,  84 => 27,  75 => 21,  71 => 20,  67 => 19,  60 => 15,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
