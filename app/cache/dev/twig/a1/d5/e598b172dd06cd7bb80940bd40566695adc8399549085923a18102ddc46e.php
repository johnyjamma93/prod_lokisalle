<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_a1d5e598b172dd06cd7bb80940bd40566695adc8399549085923a18102ddc46e extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
<ul>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
</ul>   ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  22 => 4,  19 => 2,  115 => 42,  112 => 41,  110 => 40,  107 => 39,  103 => 31,  100 => 30,  93 => 8,  90 => 7,  84 => 6,  79 => 44,  77 => 39,  68 => 32,  66 => 30,  50 => 23,  35 => 10,  23 => 2,  56 => 12,  49 => 11,  45 => 8,  43 => 7,  40 => 6,  33 => 7,  30 => 3,  81 => 18,  72 => 16,  64 => 13,  60 => 27,  54 => 24,  51 => 10,  46 => 9,  42 => 10,  39 => 6,  32 => 4,  29 => 6,);
    }
}
