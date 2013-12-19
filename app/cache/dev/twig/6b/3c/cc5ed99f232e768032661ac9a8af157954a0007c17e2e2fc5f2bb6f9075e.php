<?php

/* SyliusWebBundle:Backend/Taxonomy:macros.html.twig */
class __TwigTemplate_6b3ccc5ed99f232e768032661ac9a8af157954a0007c17e2e2fc5f2bb6f9075e extends Twig_Template
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
    }

    // line 1
    public function getlist($_taxonomies = null)
    {
        $context = $this->env->mergeGlobals(array(
            "taxonomies" => $_taxonomies,
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
            echo "
";
            // line 6
            if ((twig_length_filter($this->env, (isset($context["taxonomies"]) ? $context["taxonomies"] : $this->getContext($context, "taxonomies"))) > 0)) {
                // line 7
                echo "<table class=\"table\">
    <thead>
        <tr>
            <th colspan=\"3\">";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.taxonomy.name"));
                echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["taxonomies"]) ? $context["taxonomies"] : $this->getContext($context, "taxonomies")));
                foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
                    // line 15
                    echo "        <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"), "html", null, true);
                    echo "\">
            <td>
                <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_show", array("id" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                    <strong>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            <td>
                ";
                    // line 22
                    if (((!(null === $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "root"))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "root"), "path")) > 0))) {
                        // line 23
                        echo "                    <div data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\">
                        <a href=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "root"), "path"), "sylius_gallery"), "html", null, true);
                        echo "\"  data-gallery=\"gallery\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name"), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "root"), "path"), "sylius_50x40"), "html", null, true);
                        echo "\" alt=\"\" class=\"img-rounded\" />
                        </a>
                    </div>
                ";
                    } else {
                        // line 29
                        echo "                    <span class=\"label label-default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.taxonomy.no_image"), "html", null, true);
                        echo "</span>
                ";
                    }
                    // line 31
                    echo "            </td>
            <td>
                <div class=\"pull-right\">
                    ";
                    // line 34
                    echo $context["buttons"]->getcreate($this->env->getExtension('routing')->getPath("sylius_backend_taxon_create", array("taxonomyId" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"))), $this->env->getExtension('translator')->trans("sylius.taxon.create"));
                    echo "
                    ";
                    // line 35
                    echo $context["buttons"]->getedit($this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_update", array("id" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"))));
                    echo "
                    ";
                    // line 36
                    echo $context["buttons"]->getdelete($this->env->getExtension('routing')->getPath("sylius_backend_taxonomy_delete", array("id" => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "id"))));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "    </tbody>
</table>
";
            } else {
                // line 44
                echo $context["alerts"]->getinfo($this->env->getExtension('translator')->trans("sylius.taxonomy.no_results"));
                echo "
";
            }
            // line 46
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
        return "SyliusWebBundle:Backend/Taxonomy:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  130 => 44,  125 => 41,  114 => 36,  110 => 35,  106 => 34,  101 => 31,  95 => 29,  88 => 25,  79 => 23,  77 => 22,  70 => 18,  66 => 17,  60 => 15,  56 => 14,  49 => 10,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  32 => 2,  21 => 1,  82 => 24,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 3,  30 => 5,  28 => 4,  26 => 3,);
    }
}
