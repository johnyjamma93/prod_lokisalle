<?php

/* SyliusWebBundle:Frontend:layout.html.twig */
class __TwigTemplate_f1a079e6a062cb18211aff106e97f3b288d02b5a54096ad35b4cc2c529e414ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'flashes' => array($this, 'block_flashes'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'gallery' => array($this, 'block_gallery'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["settings"] = $this->env->getExtension('sylius_settings')->getSettings("general");
        // line 3
        echo "<html>
    <head>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_description"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_description"))), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_keywords"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_keywords"))), "html", null, true);
        echo "\">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"container\">
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('flashes', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('gallery', $context, $blocks);
        // line 78
        echo "
        ";
        // line 80
        echo "        ";
        $this->env->loadTemplate("SyliusWebBundle::confirm-modal.html.twig")->display($context);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "        </div>

        ";
        // line 92
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title"), $this->env->getExtension('translator')->trans("sylius.meta.frontend_title"))) : ($this->env->getExtension('translator')->trans("sylius.meta.frontend_title"))), "html", null, true);
        echo "
            ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" type=\"text/css\" />
            ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "678050c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_678050c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_frontend_1.css");
            // line 24
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "678050c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_678050c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_blueimp-gallery_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "678050c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_678050c") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "        ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "            <div class=\"masthead pull-right\">
                ";
        // line 37
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.main", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
            </div>
            <div class=\"currency-menu masthead pull-right\">
                ";
        // line 40
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.currency", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
            </div>
            <h1 class=\"logo\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("sylius_homepage");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.logo"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.logo"), "html", null, true);
        echo "</span></a></h1>
        ";
    }

    // line 45
    public function block_flashes($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["name"] => $context["flashes"]) {
            if (twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(0 => "success", 1 => "error", 2 => "fos_user_success"))) {
                // line 47
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 48
                    echo "                    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "fos_user_success")) ? ("success") : (((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "error")) ? ("danger") : ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))))), "html", null, true);
                    echo "\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
                        ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        ";
    }

    // line 56
    public function block_main($context, array $blocks = array())
    {
        // line 57
        echo "        <hr>
        <div class=\"row\">
            <div class=\"col-md-3\" id=\"sidebar\">
                ";
        // line 60
        $this->displayBlock('sidebar', $context, $blocks);
        // line 65
        echo "            </div>
            <div class=\"col-md-9\">
                ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "            </div>
        </div>
        <hr>
        ";
    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        // line 61
        echo "                <h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.shop_by"), "html", null, true);
        echo "</h4><br>
                ";
        // line 62
        echo $this->env->getExtension('knp_menu')->render("sylius.frontend.taxonomies", array("template" => "SyliusWebBundle:Frontend:menu.html.twig"));
        echo "
                ";
        // line 63
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("sylius_partial_product_latest", array("limit" => 4, "template" => "SyliusWebBundle:Frontend/Product:latestSidebar.html.twig")));
        echo "
                ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "                ";
    }

    // line 74
    public function block_gallery($context, array $blocks = array())
    {
        // line 75
        echo "            ";
        // line 76
        echo "            ";
        $this->env->loadTemplate("SyliusWebBundle::gallery.html.twig")->display($context);
        // line 77
        echo "        ";
    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        // line 83
        echo "            <div class=\"footer\">
                <p class=\"text-muted\">
                    &copy; Lokisalle - ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
                </p>
            </div>
        ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "            <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
        ";
        // line 95
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "adf5900_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_adf5900_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_jquery.blueimp-gallery.min_1.js");
            // line 100
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "adf5900_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_adf5900_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_confirm-modal_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "adf5900_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_adf5900_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend_frontend_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "adf5900"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_adf5900") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/compiled/frontend.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 102
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle:Frontend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 102,  308 => 100,  304 => 95,  300 => 93,  297 => 92,  289 => 85,  285 => 83,  282 => 82,  278 => 77,  275 => 76,  273 => 75,  270 => 74,  266 => 68,  263 => 67,  257 => 63,  253 => 62,  248 => 61,  245 => 60,  238 => 69,  236 => 67,  232 => 65,  230 => 60,  225 => 57,  222 => 56,  218 => 54,  211 => 53,  202 => 50,  196 => 48,  191 => 47,  185 => 46,  182 => 45,  172 => 42,  167 => 40,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 18,  120 => 17,  113 => 7,  110 => 6,  104 => 103,  101 => 92,  97 => 89,  95 => 82,  92 => 81,  89 => 80,  86 => 78,  84 => 74,  81 => 73,  79 => 56,  76 => 55,  74 => 45,  71 => 44,  69 => 35,  59 => 27,  56 => 17,  49 => 12,  45 => 11,  41 => 9,  39 => 6,  34 => 3,  32 => 2,  29 => 1,);
    }
}
