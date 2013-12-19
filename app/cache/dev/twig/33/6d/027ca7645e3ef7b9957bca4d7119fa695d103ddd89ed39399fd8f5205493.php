<?php

/* SyliusWebBundle:Backend:layout.html.twig */
class __TwigTemplate_336d027ca7645e3ef7b9957bca4d7119fa695d103ddd89ed39399fd8f5205493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta charset=\"UTF-8\">

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 29
        $this->env->loadTemplate("SyliusWebBundle:Backend:_navbar.html.twig")->display($context);
        // line 30
        echo "        <div class=\"row main-container\">
            <div class=\"col-md-2 hidden-sm hidden-xs\">
                ";
        // line 32
        $this->displayBlock('sidebar', $context, $blocks);
        // line 39
        echo "            </div>
            <div class=\"col-md-10\">
                <div id=\"topbar\">
                    ";
        // line 42
        $this->displayBlock('topbar', $context, $blocks);
        // line 45
        echo "                </div>
                <div id=\"content\">
                ";
        // line 47
        $this->env->loadTemplate("SyliusWebBundle:Backend:_flashes.html.twig")->display($context);
        // line 48
        echo "
                ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "
                <hr>

                ";
        // line 55
        echo "                ";
        $this->env->loadTemplate("SyliusWebBundle::gallery.html.twig")->display($context);
        // line 56
        echo "
                ";
        // line 58
        echo "                ";
        $this->env->loadTemplate("SyliusWebBundle::confirm-modal.html.twig")->display($context);
        // line 59
        echo "
                <footer>
                    <p>&copy; <a href=\"http://lokisalle.extrabase.org\">Lokisalle</a> - ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
                </footer>
                </div>
            </div>
        </div>

        ";
        // line 68
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.meta.backend_title"), "html", null, true);
        echo "
            ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.css\" type=\"text/css\" />
            ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44c2415_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44c2415_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_backend_1.css");
            // line 19
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "44c2415_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44c2415_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_blueimp-gallery_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "44c2415"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44c2415") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        ";
    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        // line 33
        echo "                <div id=\"sidebar\">
                    <div class=\"sidebar-nav\">
                        ";
        // line 35
        echo $this->env->getExtension('knp_menu')->render("sylius.backend.sidebar", array("template" => "SyliusWebBundle::menu.html.twig", "currentClass" => "active"));
        echo "
                    </div>
                </div>
                ";
    }

    // line 42
    public function block_topbar($context, array $blocks = array())
    {
        // line 43
        echo "                    ";
        $this->env->loadTemplate("SyliusWebBundle:Backend:_breadcrumb.html.twig")->display($context);
        // line 44
        echo "                    ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "                ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "            <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
            ";
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "86cf50d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_jquery.blueimp-gallery.min_1.js");
            // line 79
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "86cf50d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_confirm-modal_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "86cf50d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_form-collection_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "86cf50d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_form-spinner_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "86cf50d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_select2_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "86cf50d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend_backend_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "86cf50d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_86cf50d") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/backend.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 81
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Backend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 81,  200 => 79,  196 => 71,  192 => 69,  189 => 68,  185 => 50,  182 => 49,  178 => 44,  175 => 43,  172 => 42,  164 => 35,  160 => 33,  157 => 32,  153 => 21,  133 => 19,  129 => 15,  126 => 14,  123 => 13,  116 => 6,  113 => 5,  107 => 82,  104 => 68,  95 => 61,  91 => 59,  88 => 58,  85 => 56,  77 => 51,  75 => 49,  72 => 48,  70 => 47,  66 => 45,  64 => 42,  57 => 32,  53 => 30,  51 => 29,  42 => 22,  40 => 13,  33 => 8,  31 => 5,  25 => 1,  82 => 55,  78 => 24,  74 => 23,  68 => 20,  63 => 18,  59 => 39,  55 => 15,  52 => 14,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
