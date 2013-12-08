<?php

/* ::layout.html.twig */
class __TwigTemplate_29e543662dd33548760b37bde12e406b248de09ebf35eea3d84b92be57a06ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "  </head>
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Lokisalle</h1>
        <p>Cette application est un atelier de formation PHP dispensé à l'IFOCOP</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.ifocop.fr\">Aller sur le site
        </a></p>
      </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>
                    
          ";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 7)));
        echo "
        </div>
        <div id=\"content\" class=\"span7\">
          ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        </div>
      </div>
      <hr>
      <footer>
          <div id=\"footer\" class=\"hero-unit\"><p>Responsable du site : pierrot.</p></div>
      </footer>
    </div>
  ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Lokisalle ## Application de réservation de salles de réunions sur Internet";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "          ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        // line 41
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  112 => 41,  110 => 40,  107 => 39,  103 => 31,  100 => 30,  93 => 8,  90 => 7,  84 => 6,  79 => 44,  77 => 39,  68 => 32,  66 => 30,  60 => 27,  54 => 24,  50 => 23,  35 => 10,  33 => 7,  29 => 6,  23 => 2,);
    }
}
