<?php

/* SyliusWebBundle:Backend/User:macros.html.twig */
class __TwigTemplate_ce14b4b5f22589343dee8bd6ff11399f7398b3a286cf0158c0361f3c2fc5005c extends Twig_Template
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
        // line 47
        echo "
";
    }

    // line 1
    public function getlist($_users = null)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $_users,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 4
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 5
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 6
            echo "
";
            // line 7
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
                // line 8
                echo "<table id=\"users\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.user.id"));
                echo "</th>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("firstName", $this->env->getExtension('translator')->trans("sylius.address.firstname"));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("lastName", $this->env->getExtension('translator')->trans("sylius.address.lastname"));
                echo "</th>
            <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("email", $this->env->getExtension('translator')->trans("sylius.user.email"));
                echo "</th>
            <th>";
                // line 15
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("createdAt", $this->env->getExtension('translator')->trans("sylius.user.registration_date"));
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("enabled", $this->env->getExtension('translator')->trans("sylius.user.enabled"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 22
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "\">
            <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt"), "d-m-Y H:i"), "html", null, true);
                    echo "</td>
            <td>
                ";
                    // line 29
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled"));
                    echo "
            </td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 33
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 34
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 35
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), null, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id")));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "    </tbody>
</table>
";
            } else {
                // line 43
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.no_results"));
                echo "
";
            }
            // line 45
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function getsimple_list($_users = null)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $_users,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "
";
            // line 50
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 51
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 52
            $context["misc"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:misc.html.twig");
            // line 53
            echo "
";
            // line 54
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
                // line 55
                echo "<table id=\"users\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 58
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("email", $this->env->getExtension('translator')->trans("sylius.user.email"));
                echo "</th>
            <th>";
                // line 59
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("enabled", $this->env->getExtension('translator')->trans("sylius.user.enabled"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 65
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "\">
            <td>
                ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullname"), "html", null, true);
                    echo "<br>
                <a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                    echo "\">
                    ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                    echo "
                </a>
                </td>
            <td>
                ";
                    // line 73
                    echo $context["misc"]->getstate_label($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled"));
                    echo "
            </td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 77
                    echo $context["buttons"]->getshow($this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 78
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                    ";
                    // line 79
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "    </tbody>
</table>
";
            } else {
                // line 87
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.user.no_results"));
                echo "
";
            }
            // line 89
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/User:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 89,  255 => 84,  240 => 78,  222 => 69,  214 => 67,  208 => 65,  204 => 64,  187 => 55,  180 => 52,  176 => 50,  173 => 49,  150 => 45,  140 => 40,  125 => 34,  121 => 33,  114 => 29,  109 => 27,  99 => 25,  86 => 22,  74 => 16,  62 => 13,  58 => 12,  54 => 11,  47 => 7,  44 => 6,  357 => 109,  351 => 107,  346 => 104,  329 => 101,  323 => 98,  319 => 97,  315 => 96,  311 => 94,  309 => 93,  305 => 91,  303 => 90,  296 => 86,  292 => 85,  288 => 83,  271 => 82,  264 => 78,  260 => 87,  256 => 76,  252 => 75,  248 => 74,  243 => 71,  241 => 70,  238 => 69,  236 => 77,  234 => 67,  232 => 66,  229 => 73,  218 => 68,  206 => 61,  199 => 58,  193 => 56,  190 => 55,  166 => 47,  162 => 48,  158 => 45,  152 => 42,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  106 => 25,  89 => 24,  81 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 47,  244 => 79,  200 => 79,  196 => 59,  192 => 58,  189 => 68,  185 => 54,  182 => 53,  178 => 51,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  126 => 14,  123 => 13,  116 => 6,  104 => 68,  88 => 58,  85 => 56,  82 => 21,  77 => 18,  75 => 49,  72 => 48,  66 => 14,  59 => 39,  57 => 32,  53 => 9,  51 => 29,  42 => 5,  40 => 4,  33 => 8,  31 => 5,  145 => 43,  141 => 55,  133 => 35,  129 => 35,  117 => 42,  113 => 5,  107 => 82,  103 => 26,  95 => 24,  91 => 23,  83 => 28,  70 => 15,  64 => 42,  55 => 10,  49 => 8,  38 => 3,  35 => 2,  32 => 6,  27 => 4,  25 => 1,);
    }
}
