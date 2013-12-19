<?php

/* SyliusWebBundle:Frontend/Account:layout.html.twig */
class __TwigTemplate_beaff248336d482dc04b1c7c8ac46ba223c31e16502726cfdb5ee74e928a547c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusWebBundle:Frontend:layout.html.twig");

        $this->blocks = array(
            'flashes' => array($this, 'block_flashes'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_flashes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["name"] => $context["flashes"]) {
            if (twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(0 => "success", 1 => "error", 2 => "fos_user_success"))) {
                // line 5
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 6
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "fos_user_success")) ? ("success") : (((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "error")) ? ("danger") : ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))))), "html", null, true);
                    echo "\">
                <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
                ";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), array(), "FOSUserBundle"), "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.account", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Account:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  67 => 14,  58 => 11,  49 => 8,  43 => 6,  38 => 5,  32 => 4,  29 => 3,  31 => 4,  28 => 3,);
    }
}
