<?php

/* SyliusWebBundle:Backend/Taxon:macros.html.twig */
class __TwigTemplate_ea648ef3bef5e7ab0c7c36b45f532b9ef837c2e6a3564fa38facf86e372dfd45 extends Twig_Template
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
        // line 22
        echo "
";
    }

    // line 1
    public function getlist($_taxonomy = null, $_taxons = null)
    {
        $context = $this->env->mergeGlobals(array(
            "taxonomy" => $_taxonomy,
            "taxons" => $_taxons,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["alerts"] = $this->env->loadTemplate("SyliusWebBundle:Backend/Macros:alerts.html.twig");
            // line 4
            echo "
";
            // line 5
            if ((twig_length_filter($this->env, (isset($context["taxons"]) ? $context["taxons"] : $this->getContext($context, "taxons"))) > 0)) {
                // line 6
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.taxon.name"), "html", null, true);
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 14
                echo $this->getAttribute($this, "tree", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), 1 => (isset($context["taxons"]) ? $context["taxons"] : $this->getContext($context, "taxons"))), "method");
                echo "
    </tbody>
</table>
";
            } else {
                // line 18
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.taxon.no_results"));
                echo "
";
            }
            // line 20
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function gettree($_taxonomy = null, $_taxons = null)
    {
        $context = $this->env->mergeGlobals(array(
            "taxonomy" => $_taxonomy,
            "taxons" => $_taxons,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "
";
            // line 25
            $context["buttons"] = $this->env->loadTemplate("SyliusResourceBundle:Macros:buttons.html.twig");
            // line 26
            echo "
";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) ? $context["taxons"] : $this->getContext($context, "taxons")));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 28
                echo "<tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "id"), "html", null, true);
                echo "\">
    <td>
        <span style=\"border-left: ";
                // line 30
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "level") - 1) * 20), "html", null, true);
                echo "px solid #f1f1f1; padding-left: 10px;\">
            ";
                // line 31
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "path")) > 0)) {
                    // line 32
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "path"), "sylius_gallery"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name"), "html", null, true);
                    echo "\">
                    <img src=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "path"), "sylius_50x40"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-rounded\" />
                </a>
            ";
                }
                // line 36
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name"), "html", null, true);
                echo "
        </span>
    </td>
    <td>
        <div class=\"pull-right\">
        ";
                // line 41
                echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_taxon_update", array("taxonomyId" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"), "id" => $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "id"))));
                echo "
        ";
                // line 42
                echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_taxon_delete", array("taxonomyId" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"), "id" => $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "id"))));
                echo "
        </div>
    </td>
</tr>
";
                // line 46
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "children")) > 0)) {
                    // line 47
                    echo "    ";
                    echo $this->getAttribute($this, "tree", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), 1 => $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "children")), "method");
                    echo "
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend/Taxon:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  152 => 46,  145 => 42,  141 => 41,  132 => 36,  126 => 33,  119 => 32,  117 => 31,  113 => 30,  107 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  83 => 23,  71 => 20,  66 => 18,  51 => 9,  46 => 6,  44 => 5,  41 => 4,  24 => 1,  19 => 22,  78 => 23,  72 => 20,  67 => 18,  63 => 17,  59 => 14,  56 => 14,  49 => 10,  43 => 9,  39 => 3,  36 => 2,  33 => 6,  28 => 4,  26 => 3,);
    }
}
