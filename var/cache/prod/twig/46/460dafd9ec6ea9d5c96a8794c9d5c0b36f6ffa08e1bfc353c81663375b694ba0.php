<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_30383d482541c2fcf8b31bfe0dc4bfffde613dcf451bc8402e19a610097982bc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "marhba!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "

    ";
    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' >
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"   >
    <!-- Custom Theme files -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <!--webfont-->
    <!-- dropdown -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  >
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <div class=\"banner-bg banner-sec\">
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">
                <div class=\"logo\">
                    <a href=\"index.html\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/logo-bascla.png"), "html", null, true);
        echo "\" style=\"size: 5px 5px;\" alt=\"\"/></a>
                </div>
                <div class=\"top-nav\">
                    <label class=\"mobile_menu\" for=\"mobile_menu\">
                        <span>Menu</span>
                    </label>
                    <input id=\"mobile_menu\" type=\"checkbox\">
                    <ul class=\"nav\">
                        <li class=\"dropdown1\" style=\"color: #1B242F;\"><a href=\"bicycles.html\" >Products</a>
                            <ul class=\"dropdown2\">
                                <li><a href=\"bicycles.html\">Buy a bike</a></li>
                                <li><a href=\"bicycles.html\">Rent a bike</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown1\"><a href=\"404.html\">Events</a>
                            <ul class=\"dropdown2\">
                                <li><a href=\"404.html\">Competitions</a></li>
                                <li><a href=\"404.html\">Touristic Tours</a></li>
                                <li><a href=\"404.html\">Weekly Challenge</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown1\"><a href=\"parts.html\">After-Sales</a>
                            <ul class=\"dropdown2\">
                                <li><a href=\"parts.html\">Repare your bikes</a></li>
                                <li><a href=\"parts.html\"></a></li>
                                <li><a href=\"parts.html\">TIRES</a></li>
                                <li><a href=\"parts.html\">DISC BREAKS</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown1\"><a href=\"accessories.html\">Formations</a>

                        </li>

                        <a class=\"shop\" href=\"cart.html\"><img style=\"right: 800px;\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cart.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    </div>
";
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        // line 77
        echo "    bjnk,
";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        // line 80
        echo "    <div class=\"footer\">
        <div class=\"container wrap\">
            <div class=\"logo2\">
                <a href=\"index.html\"><img src=\"images/logo2.png\" alt=\"\"/></a>
            </div>
            <div class=\"ftr-menu\">
                <ul>
                    <li><a href=\"bicycles.html\">BICYCLES</a></li>
                    <li><a href=\"parts.html\">PARTS</a></li>
                    <li><a href=\"accessories.html\">ACCESSORIES</a></li>
                    <li><a href=\"404.html\">EXTRAS</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!---->
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <p> &copy; 2020 Bascla. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\"> IT Vision</a></p>

        </div>
    </div>
";
    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        // line 105
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/scripts.html"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--js-->
    <!---- start-smoth-scrolling---->
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},900);
            });
        });
    </script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 120,  224 => 111,  220 => 110,  214 => 107,  208 => 105,  205 => 104,  178 => 80,  175 => 79,  170 => 77,  167 => 76,  154 => 67,  118 => 34,  108 => 27,  104 => 26,  91 => 16,  84 => 13,  81 => 12,  75 => 7,  72 => 6,  66 => 5,  60 => 123,  58 => 104,  56 => 79,  54 => 76,  52 => 12,  48 => 10,  46 => 6,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\bascla\\app\\Resources\\views\\base.html.twig");
    }
}
