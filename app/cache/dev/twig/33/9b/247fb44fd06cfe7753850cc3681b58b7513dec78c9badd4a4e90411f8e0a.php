<?php

/* SyliusWebBundle:Frontend/Macros:buttons.html.twig */
class __TwigTemplate_339b247fb44fd06cfe7753850cc3681b58b7513dec78c9badd4a4e90411f8e0a extends Twig_Template
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
        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
    }

    // line 1
    public function getbtn($_url = null, $_message = null, $_id = null, $_icon = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "id" => $_id,
            "icon" => $_icon,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a class=\"btn ";
            if ((!twig_test_empty((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo " ";
            } else {
                echo "btn-default";
            }
            echo "\"
    ";
            // line 3
            if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\"";
            }
            // line 4
            echo "    href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">
    ";
            // line 5
            if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))))) {
                // line 6
                echo "        <i class=\"icon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getshow($_url = null, $_message = null, $_id = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "id" => $_id,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    ";
            $context["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if (twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
                // line 16
                echo "        ";
                $context["message"] = $this->env->getExtension('translator')->trans("sylius.show");
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo $context["buttons"]->getbtn((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "book", "btn-default");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getcreate($_url = null, $_message = null, $_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            $context["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if (twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
                // line 26
                echo "        ";
                $context["message"] = $this->env->getExtension('translator')->trans("sylius.create");
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo $context["buttons"]->getbtn((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "plus-sign", "btn-primary");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getedit($_url = null, $_message = null, $_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if (twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
                // line 36
                echo "        ";
                $context["message"] = $this->env->getExtension('translator')->trans("sylius.edit");
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo $context["buttons"]->getbtn((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "pencil", "btn-primary");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getdelete($_url = null, $_message = null, $_disabled = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
            "disabled" => $_disabled,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                // line 44
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"icon-trash\"></i><span>";
                // line 45
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 48
                echo "<form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\" method=\"post\" style=\"display: inline;\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger btn-confirm\" type=\"submit\">
        <i class=\"icon-trash\"></i> <span>";
                // line 51
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

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend/Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 51,  247 => 48,  241 => 45,  238 => 44,  236 => 43,  223 => 42,  210 => 39,  207 => 38,  204 => 37,  201 => 36,  199 => 35,  196 => 34,  193 => 33,  180 => 32,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  156 => 25,  153 => 24,  150 => 23,  137 => 22,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  113 => 15,  110 => 14,  107 => 13,  93 => 12,  78 => 8,  72 => 6,  70 => 5,  65 => 4,  59 => 3,  48 => 2,  33 => 1,  28 => 41,  22 => 21,  19 => 11,  54 => 14,  50 => 13,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  29 => 5,  27 => 4,  25 => 31,);
    }
}
