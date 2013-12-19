<?php

/* SyliusWebBundle:Backend:_navbar.html.twig */
class __TwigTemplate_938ddcb012f212cc6881c6bc64ec952e4fc51b6e8d5b81dea5053644d4856e1c extends Twig_Template
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
        echo "<div id=\"navbar\" class=\"navbar navbar-inverse\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("sylius_backend_dashboard");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/syliusweb/img/logo.png"), "html", null, true);
        echo "\" class=\"pull-left\" /> <span class=\"hidden-xs hidden-sm pull-left\">go to dashboard</span></a>
    </div>
    <div class=\"visible-xs visible-sm\">
        <div class=\"collapse navbar-collapse\">
            ";
        // line 12
        echo $this->env->getExtension('knp_menu')->render("sylius.backend.main", array("template" => "SyliusWebBundle:Backend:menu.html.twig", "currentClass" => "active", "ancestorClass" => "active"));
        echo "
        </div>
    </div>
    <div class=\"hidden-xs hidden-sm pull-right\">
        <p class=\"navbar-text\">";
        // line 16
        echo $this->env->getExtension('translator')->trans("sylius.backend_welcome", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fullname")));
        echo "</p>

        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle navbar-widget\" data-toggle=\"dropdown\">
                    <i class=\"glyphicon glyphicon-chevron-down\"></i>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sylius_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.menu.main.homepage", array(), "menu"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.logout"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 8,  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 40,  125 => 34,  121 => 33,  114 => 29,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 47,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 25,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 1,  244 => 79,  200 => 79,  196 => 59,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  126 => 14,  123 => 13,  116 => 6,  104 => 68,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 39,  57 => 32,  53 => 9,  51 => 29,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 43,  141 => 55,  133 => 35,  129 => 35,  117 => 42,  113 => 5,  107 => 82,  103 => 26,  95 => 24,  91 => 23,  83 => 28,  70 => 15,  64 => 42,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
