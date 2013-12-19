<?php

/* SyliusWebBundle:Frontend/Macros:alerts.html.twig */
class __TwigTemplate_80b362190308a88acf94bea9e30af9a65112dfeae8b1d39b5db53e7355ca0d2d extends Twig_Template
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
        // line 7
        echo "
";
        // line 14
        echo "
";
        // line 21
        echo "
";
    }

    // line 1
    public function getsuccess($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.success"), "html", null, true);
            echo "</h4>
    ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getinfo($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<div class=\"alert alert-info\">
    <h4 class=\"alert-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.info"), "html", null, true);
            echo "</h4>
    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function geterror($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<div class=\"alert alert-danger\">
    <h4 class=\"alert-heading\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.error"), "html", null, true);
            echo "</h4>
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getwarning($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div class=\"alert alert-warning\">
    <h4 class=\"alert-heading\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.warning"), "html", null, true);
            echo "</h4>
    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Macros:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 25,  140 => 24,  137 => 23,  126 => 22,  112 => 18,  108 => 17,  105 => 16,  94 => 15,  80 => 11,  76 => 10,  73 => 9,  62 => 8,  44 => 3,  41 => 2,  30 => 1,  25 => 21,  22 => 14,  19 => 7,  258 => 90,  254 => 89,  251 => 88,  246 => 85,  240 => 83,  230 => 78,  224 => 77,  219 => 75,  214 => 73,  208 => 70,  204 => 69,  192 => 62,  182 => 57,  177 => 54,  168 => 52,  158 => 50,  153 => 49,  148 => 47,  138 => 42,  134 => 40,  125 => 36,  121 => 34,  119 => 33,  115 => 31,  101 => 30,  98 => 29,  81 => 28,  74 => 24,  70 => 23,  65 => 21,  61 => 20,  53 => 15,  48 => 4,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  29 => 5,  27 => 3,);
    }
}
