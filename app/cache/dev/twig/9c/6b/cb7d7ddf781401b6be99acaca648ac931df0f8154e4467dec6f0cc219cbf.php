<?php

/* SyliusWebBundle::gallery.html.twig */
class __TwigTemplate_9c6bcb7d7ddf781401b6be99acaca648ac931df0f8154e4467dec6f0cc219cbf extends Twig_Template
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
        echo "<script>
var gallery = document.getElementById('gallery');
if (gallery) {
    gallery.onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
}
</script>

<div id=\"blueimp-gallery\" class=\"blueimp-gallery\">
    <div class=\"slides\"></div>
    <h3 class=\"title\"></h3>
    <a class=\"prev\">‹</a>
    <a class=\"next\">›</a>
    <a class=\"close\">×</a>
    <a class=\"play-pause\"></a>
    <ol class=\"indicator\"></ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusWebBundle::gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  112 => 18,  108 => 17,  105 => 16,  94 => 15,  80 => 11,  73 => 9,  25 => 21,  22 => 14,  179 => 32,  154 => 27,  149 => 24,  147 => 23,  144 => 25,  142 => 21,  137 => 23,  119 => 19,  115 => 17,  78 => 9,  63 => 7,  61 => 6,  24 => 1,  21 => 2,  53 => 12,  43 => 5,  33 => 6,  26 => 4,  19 => 1,  276 => 3,  272 => 2,  261 => 1,  251 => 85,  240 => 83,  227 => 81,  216 => 75,  214 => 74,  212 => 73,  208 => 70,  204 => 68,  198 => 66,  195 => 65,  192 => 62,  190 => 61,  188 => 60,  183 => 57,  180 => 55,  178 => 54,  175 => 52,  170 => 29,  168 => 48,  166 => 46,  163 => 45,  159 => 42,  157 => 41,  140 => 24,  118 => 34,  116 => 32,  114 => 31,  111 => 29,  103 => 24,  98 => 14,  93 => 21,  90 => 20,  72 => 10,  65 => 85,  62 => 8,  60 => 83,  57 => 82,  55 => 81,  52 => 80,  50 => 45,  47 => 44,  42 => 28,  40 => 4,  37 => 7,  35 => 2,  30 => 1,  27 => 8,  51 => 8,  48 => 4,  338 => 103,  312 => 101,  308 => 96,  304 => 94,  301 => 93,  294 => 87,  289 => 85,  285 => 83,  282 => 82,  278 => 4,  275 => 76,  273 => 75,  270 => 74,  266 => 68,  263 => 67,  257 => 63,  253 => 62,  248 => 61,  245 => 60,  238 => 69,  236 => 67,  232 => 65,  230 => 60,  225 => 57,  222 => 56,  218 => 76,  211 => 53,  202 => 67,  196 => 48,  191 => 47,  185 => 58,  182 => 45,  172 => 50,  167 => 28,  161 => 37,  158 => 36,  155 => 35,  151 => 26,  131 => 24,  127 => 20,  123 => 37,  120 => 35,  113 => 16,  110 => 15,  104 => 104,  101 => 93,  97 => 90,  95 => 22,  92 => 81,  89 => 80,  86 => 11,  84 => 16,  81 => 15,  79 => 56,  76 => 10,  74 => 11,  71 => 44,  69 => 9,  59 => 27,  56 => 17,  49 => 12,  45 => 29,  41 => 2,  39 => 6,  32 => 14,  29 => 1,  44 => 3,  38 => 3,  34 => 3,  31 => 4,  28 => 3,);
    }
}
