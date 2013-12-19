<?php

/* SyliusWebBundle:Backend/Order:indexByUser.html.twig */
class __TwigTemplate_92b27604f9f29238fb217c67e0416421f37d6a6e921e3c0b89fdf0a2a0ea2db5 extends Twig_Template
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
        $context["__internal_1e44faf980129bb7f0938ec003e26f8f1a500e3c60aca100c901387ee4bdf116"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 2
        $context["__internal_65f8b9a7408fadef02ed8f38b7990aad6b2066e5c25f4c19e54ce2b36713c4f8"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Order:macros.html.twig");
        // line 3
        echo "
";
        // line 4
        echo $context["__internal_65f8b9a7408fadef02ed8f38b7990aad6b2066e5c25f4c19e54ce2b36713c4f8"]->getlist((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
";
        // line 5
        echo $context["__internal_1e44faf980129bb7f0938ec003e26f8f1a500e3c60aca100c901387ee4bdf116"]->getpagination((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")), array("routeName" => "sylius_backend_user_show", "routeParams" => array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Order:indexByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  23 => 3,  21 => 2,  120 => 42,  100 => 34,  93 => 32,  87 => 29,  83 => 28,  80 => 27,  78 => 26,  73 => 24,  66 => 22,  60 => 19,  56 => 18,  53 => 17,  51 => 16,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,  222 => 87,  220 => 86,  215 => 83,  211 => 81,  209 => 80,  206 => 79,  203 => 78,  199 => 76,  197 => 75,  194 => 74,  192 => 73,  186 => 69,  180 => 66,  176 => 65,  173 => 64,  171 => 63,  164 => 59,  160 => 58,  155 => 56,  149 => 53,  145 => 52,  139 => 49,  135 => 48,  132 => 47,  126 => 44,  122 => 43,  119 => 42,  116 => 41,  110 => 38,  106 => 37,  103 => 36,  101 => 35,  96 => 33,  92 => 32,  84 => 27,  74 => 20,  69 => 23,  65 => 17,  61 => 16,  57 => 14,  54 => 13,  47 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 4,);
    }
}
