<?php

/* SyliusResourceBundle:Macros:buttons.html.twig */
class __TwigTemplate_ff8787347b285ea2506e3f66c7f661f53dd2381897f900cba5ce4e2631c83e45 extends Twig_Template
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
        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 33
        echo "
";
    }

    // line 1
    public function getshow($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.show")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getcreate($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 9
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.create")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getedit($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.edit")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getdelete($_url = null, $_message = null, $_disabled = false, $_modal = true)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "disabled" => $_disabled,
            "modal" => $_modal,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                // line 21
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 22
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 25
                echo "<form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 27
                if ((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal"))) {
                    echo " btn-confirm";
                }
                echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
    </button>
</form>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getmanage($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 36
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.manage")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 35,  179 => 34,  163 => 28,  151 => 25,  142 => 21,  112 => 15,  76 => 8,  34 => 5,  26 => 3,  22 => 12,  52 => 4,  37 => 12,  28 => 33,  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 20,  125 => 34,  121 => 33,  114 => 29,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 16,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 47,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 25,  89 => 24,  81 => 9,  73 => 17,  69 => 16,  65 => 15,  61 => 25,  50 => 3,  48 => 7,  45 => 2,  43 => 5,  41 => 3,  39 => 3,  36 => 2,  24 => 1,  19 => 6,  244 => 79,  200 => 79,  196 => 36,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 27,  153 => 21,  126 => 19,  123 => 13,  116 => 6,  104 => 68,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 6,  57 => 5,  53 => 11,  51 => 29,  42 => 5,  40 => 7,  33 => 1,  31 => 4,  145 => 22,  141 => 55,  133 => 35,  129 => 35,  117 => 42,  113 => 5,  107 => 14,  103 => 26,  95 => 13,  91 => 23,  83 => 28,  70 => 15,  64 => 7,  55 => 24,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 18,);
    }
}
