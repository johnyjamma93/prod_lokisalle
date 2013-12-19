<?php

/* SyliusWebBundle::confirm-modal.html.twig */
class __TwigTemplate_9589dd9bc80d9055c8e7854a10a704daf8b89841298e3c191db6c1d7ee0c499e extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"confirmation-modal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.title"), "html", null, true);
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.message"), "html", null, true);
        echo "
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\"><i class=\"icon-remove\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-danger\">
                    <i class=\"icon-trash\"></i><span>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) : ($this->env->getExtension('translator')->trans("sylius.delete"))), "html", null, true);
        echo "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::confirm-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  112 => 18,  108 => 17,  105 => 16,  94 => 15,  80 => 11,  73 => 9,  25 => 21,  22 => 14,  179 => 32,  154 => 27,  149 => 24,  147 => 23,  144 => 25,  142 => 21,  137 => 23,  119 => 19,  115 => 17,  78 => 9,  63 => 7,  61 => 6,  24 => 1,  21 => 2,  53 => 12,  43 => 5,  33 => 10,  26 => 6,  19 => 1,  276 => 3,  272 => 2,  261 => 1,  251 => 85,  240 => 83,  227 => 81,  216 => 75,  214 => 74,  212 => 73,  208 => 70,  204 => 68,  198 => 66,  195 => 65,  192 => 62,  190 => 61,  188 => 60,  183 => 57,  180 => 55,  178 => 54,  175 => 52,  170 => 29,  168 => 48,  166 => 46,  163 => 45,  159 => 42,  157 => 41,  140 => 24,  118 => 34,  116 => 32,  114 => 31,  111 => 29,  103 => 24,  98 => 14,  93 => 21,  90 => 20,  72 => 10,  65 => 85,  62 => 8,  60 => 83,  57 => 82,  55 => 81,  52 => 80,  50 => 45,  47 => 44,  42 => 28,  40 => 14,  37 => 7,  35 => 2,  30 => 1,  27 => 8,  51 => 8,  48 => 4,  338 => 103,  312 => 101,  308 => 96,  304 => 94,  301 => 93,  294 => 87,  289 => 85,  285 => 83,  282 => 82,  278 => 4,  275 => 76,  273 => 75,  270 => 74,  266 => 68,  263 => 67,  257 => 63,  253 => 62,  248 => 61,  245 => 60,  238 => 69,  236 => 67,  232 => 65,  230 => 60,  225 => 57,  222 => 56,  218 => 76,  211 => 53,  202 => 67,  196 => 48,  191 => 47,  185 => 58,  182 => 45,  172 => 50,  167 => 28,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 37,  120 => 35,  113 => 16,  110 => 15,  104 => 104,  101 => 93,  97 => 90,  95 => 22,  92 => 81,  89 => 80,  86 => 11,  84 => 16,  81 => 15,  79 => 56,  76 => 10,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 16,  41 => 2,  39 => 6,  32 => 14,  29 => 1,  44 => 3,  38 => 3,  34 => 3,  31 => 4,  28 => 3,);
    }
}
