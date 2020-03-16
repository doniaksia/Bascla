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
class __TwigTemplate_04e70dca4c75f4cca5c849efeea168c4a1fadb7ab7bf4f3921c80cd5f6c10ce0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 101
        $this->displayBlock('footer', $context, $blocks);
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "marhba!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

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
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/scripts.html"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--js-->
    <!---- start-smoth-scrolling---->
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>

    <div class=\"banner-bg banner-sec\">
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">
                <div class=\"logo\">
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/logo-bascla.png"), "html", null, true);
        echo "\" style=\"margin-left: 100px;\" alt=\"\"/></a>
                </div>
                <div class=\"top-nav\">
                    <label class=\"mobile_menu\" for=\"mobile_menu\">
                        <span>Menu</span>
                    </label>
                    <input id=\"mobile_menu\" type=\"checkbox\">
                    <ul class=\"nav\">
                        <li class=\"dropdown1\" style=\"color: #1B242F;\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products");
        echo "\" >Products</a>
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
                        <li class=\"dropdown1\"><a href=\"parts.html\">Partenariat</a>

                        </li>
                        <li class=\"dropdown1\"><a href=\"parts.html\">Charity</a>

                        </li>
                        <li class=\"dropdown1\"><a href=\"accessories.html\">Formations</a>

                        </li>

                        <a class=\"shop\" href=\"cart.html\"><img style=\"width: 150%;\" src=\"";
        // line 89
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "    bjnk,
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 102
        echo "    <div class=\"footer\">
        <div class=\"container wrap\">
            <div class=\"logo2\">
                <a href=\"index.html\"><img src=\"images/logo2.png\" alt=\"\"/></a>
            </div>
            <div class=\"ftr-menu\">

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 122,  314 => 121,  286 => 102,  277 => 101,  266 => 99,  257 => 98,  238 => 89,  204 => 58,  191 => 50,  181 => 43,  169 => 34,  165 => 33,  159 => 30,  154 => 28,  150 => 27,  146 => 26,  133 => 16,  126 => 13,  117 => 12,  105 => 7,  96 => 6,  78 => 5,  66 => 125,  64 => 121,  62 => 101,  60 => 98,  58 => 12,  54 => 10,  52 => 6,  48 => 5,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}marhba!{% endblock %}</title>
    {% block stylesheets %}


    {% endblock %}
</head>
<body>
{% block header %}
    <link href=\"{{  asset ('Front/css/bootstrap.css') }}\" rel='stylesheet' >
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href=\"{{  asset ('Front/css/style.css') }}\" rel=\"stylesheet\"   >
    <!-- Custom Theme files -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <!--webfont-->
    <!-- dropdown -->
    <link href=\"{{  asset ('Front/css/nav.css') }}\" rel=\"stylesheet\"  >
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script src=\"{{  asset('Front/js/jquery.min.js')}}\"></script>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"{{  asset('Front/js/scripts.html') }}\" type=\"text/javascript\"></script>
    <!--js-->
    <!---- start-smoth-scrolling---->
    <script type=\"text/javascript\" src=\"{{  asset('Front/js/move-top.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset('Front/js/easing.js') }}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},900);
            });
        });
    </script>
    <script src=\"{{  asset('Front/js/jquery.easydropdown.js') }}\"></script>

    <div class=\"banner-bg banner-sec\">
        <div class=\"container\">
            <div class=\"header\">
                <div class=\"logo\">
                <div class=\"logo\">
                    <a href=\"{{ path('home') }}\"><img src=\"{{  asset('Front/images/logo-bascla.png')}}\" style=\"margin-left: 100px;\" alt=\"\"/></a>
                </div>
                <div class=\"top-nav\">
                    <label class=\"mobile_menu\" for=\"mobile_menu\">
                        <span>Menu</span>
                    </label>
                    <input id=\"mobile_menu\" type=\"checkbox\">
                    <ul class=\"nav\">
                        <li class=\"dropdown1\" style=\"color: #1B242F;\"><a href=\"{{ path('products') }}\" >Products</a>
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
                        <li class=\"dropdown1\"><a href=\"parts.html\">Partenariat</a>

                        </li>
                        <li class=\"dropdown1\"><a href=\"parts.html\">Charity</a>

                        </li>
                        <li class=\"dropdown1\"><a href=\"accessories.html\">Formations</a>

                        </li>

                        <a class=\"shop\" href=\"cart.html\"><img style=\"width: 150%;\" src=\"{{asset('Front/images/cart.png')  }}\" alt=\"\"/></a>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    </div>
{% endblock %}
{% block content %}
    bjnk,
{% endblock %}
{% block footer %}
    <div class=\"footer\">
        <div class=\"container wrap\">
            <div class=\"logo2\">
                <a href=\"index.html\"><img src=\"images/logo2.png\" alt=\"\"/></a>
            </div>
            <div class=\"ftr-menu\">

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
{% endblock %}
{% block javascripts %}


{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\bascla\\app\\Resources\\views\\base.html.twig");
    }
}
