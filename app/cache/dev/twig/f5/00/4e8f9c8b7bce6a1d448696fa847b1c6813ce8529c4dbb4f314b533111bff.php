<?php

/* SyliusWebBundle:Backend/Address:_show.html.twig */
class __TwigTemplate_f5004e8f9c8b7bce6a1d448696fa847b1c6813ce8529c4dbb4f314b533111bff extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            <th colspan=\"2\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.firstname"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.lastname"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "lastname"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 16
        if ((!twig_test_empty($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "company")))) {
            // line 17
            echo "        <tr>
            <td><strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.company"), "html", null, true);
            echo "</strong></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "company"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 22
        echo "        <tr>
            <td><strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.country"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "country"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 26
        if ((!twig_test_empty($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "province")))) {
            // line 27
            echo "        <tr>
            <td><strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.province"), "html", null, true);
            echo "</strong></td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "province"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 32
        echo "        <tr>
            <td><strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.street"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "street"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.city"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "city"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.address.postcode"), "html", null, true);
        echo "</strong></td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "postcode"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Address:_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  100 => 34,  93 => 32,  87 => 29,  83 => 28,  80 => 27,  78 => 26,  73 => 24,  66 => 22,  60 => 19,  56 => 18,  53 => 17,  51 => 16,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,  222 => 87,  220 => 86,  215 => 83,  211 => 81,  209 => 80,  206 => 79,  203 => 78,  199 => 76,  197 => 75,  194 => 74,  192 => 73,  186 => 69,  180 => 66,  176 => 65,  173 => 64,  171 => 63,  164 => 59,  160 => 58,  155 => 56,  149 => 53,  145 => 52,  139 => 49,  135 => 48,  132 => 47,  126 => 44,  122 => 43,  119 => 42,  116 => 41,  110 => 38,  106 => 37,  103 => 36,  101 => 35,  96 => 33,  92 => 32,  84 => 27,  74 => 20,  69 => 23,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 3,);
    }
}
