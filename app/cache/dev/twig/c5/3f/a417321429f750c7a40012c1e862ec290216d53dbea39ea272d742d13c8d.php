<?php

/* SyliusWebBundle:Backend/Zone:index.html.twig */
class __TwigTemplate_c53fa417321429f750c7a40012c1e862ec290216d53dbea39ea272d742d13c8d extends Twig_Template
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
        $context["__internal_920e4f6c4d340546a72c083de7c67067df72bd2e5e340a98bd7ed7b1ebfac91a"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
        // line 5
        $context["__internal_9f89e6cafd8ceb1e19450e7b56608e50b88dae8053900f2fbfe160c1f76afcd3"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Zone:macros.html.twig");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.breadcrumb.zone.index"), "html", null, true);
        echo "</li>
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
        echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_zone_create"), $this->env->getExtension('translator')->trans("sylius.zone.create"));
        echo "
        ";
        // line 18
        echo $context["buttons"]->getmanage($this->env->getExtension('routing')->getPath("sylius_backend_country_index"), $this->env->getExtension('translator')->trans("sylius.country.manage"));
        echo "
    </div>
    <h1><i class=\"glyphicon glyphicon-globe\"></i> ";
        // line 20
        echo $this->env->getExtension('translator')->trans("sylius.zone.index_header");
        echo "</h1>
</div>

";
        // line 23
        echo $context["__internal_920e4f6c4d340546a72c083de7c67067df72bd2e5e340a98bd7ed7b1ebfac91a"]->getpagination((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        echo "
";
        // line 24
        echo $context["__internal_9f89e6cafd8ceb1e19450e7b56608e50b88dae8053900f2fbfe160c1f76afcd3"]->getlist((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        echo "
";
        // line 25
        echo $context["__internal_920e4f6c4d340546a72c083de7c67067df72bd2e5e340a98bd7ed7b1ebfac91a"]->getpagination((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Zone:index.html.twig";
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
