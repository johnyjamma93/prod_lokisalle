<?php

/* SyliusWebBundle:Backend/Country:show.html.twig */
class __TwigTemplate_751658e9c4e0666c8628179b1af9823b41d5abef2d502d09ce8d09ca2c144f70 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("sylius_backend_country_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.country.index"), "html", null, true);
        echo "</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "name"), "html", null, true);
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
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_country_index"), $this->env->getExtension('translator')->trans("sylius.country.manage"));
        echo "
        ";
        // line 17
        echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_country_update", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_country_delete", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))), null, false, false);
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.country.show_header");
        echo "</h1>
</div>

<table class=\"table table-bordered table-condensed\">
    <thead>
        <tr>
            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.country.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.country.iso_name"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "name"), "html", null, true);
        echo "</td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "isoName"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
        // line 37
        if ($this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "hasProvinces")) {
            // line 38
            echo "    <table id=\"provinces\" class=\"table table-bordered table-condensed\">
        <thead>
            <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.province.provinces"), "html", null, true);
            echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "provinces"));
            foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
                // line 47
                echo "                <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["province"]) ? $context["province"] : $this->getContext($context, "province")), "id"), "html", null, true);
                echo "\">
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["province"]) ? $context["province"] : $this->getContext($context, "province")), "name"), "html", null, true);
                echo "</td>
                    <td>
                        <div class=\"pull-right\">
                            ";
                // line 51
                echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_province_delete", array("id" => $this->getAttribute((isset($context["province"]) ? $context["province"] : $this->getContext($context, "province")), "id"), "countryId" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id"))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Country:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  136 => 51,  130 => 48,  125 => 47,  121 => 46,  113 => 41,  108 => 38,  106 => 37,  99 => 33,  95 => 32,  87 => 27,  83 => 26,  74 => 20,  69 => 18,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
