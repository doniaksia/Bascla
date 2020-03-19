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

/* base2.html.twig */
class __TwigTemplate_5e04788123aecbc44f4402556b494786a70f9c1069194272cb26b42b4aa509be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
<body>
";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 287
        $this->displayBlock('content', $context, $blocks);
        // line 289
        echo "
";
        // line 290
        $this->displayBlock('javascript', $context, $blocks);
        // line 295
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

        echo "AdminBascla!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/favicon.png"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/pg-calendar/css/pignose.calendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/chartist/css/chartist.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            <img class=\"logo-compact\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
            <img class=\"brand-title\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-css\"></div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-user\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-image\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                </ul>
                                <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--SIDE BAR MENU ADD YOUR PATH WITH PATH";
        // line 156
        echo "name of the route in bascla bundle /routing.yml";
        echo " --->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Main Menu</li>
                <!-- <li><a href=\"index.html\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                </li> -->
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"index.html\">Dashboard 1</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Gestion Employés</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Employés</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">afficher</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Gestion Evenement</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Events</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Weekly Challenge</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>



              <!--G PRODUITS TOUS LES PRODUITS -->
                <li class=\"nav-label\">Gestion Produits</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">products</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Charité</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>

                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Recyclage</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>

                    </ul>
                </li>


                <li class=\"nav-label\">Gestion Formation</li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Formations</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer participations</a></li>

                    </ul>
                </li>

                <li class=\"nav-label\">Gestion AV</li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Reparation</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Gestion Marketing</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Forum</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Posts</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 287
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 290
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 291
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  446 => 293,  442 => 292,  437 => 291,  428 => 290,  411 => 287,  270 => 156,  149 => 38,  145 => 37,  141 => 36,  121 => 19,  117 => 18,  113 => 17,  108 => 15,  101 => 10,  92 => 9,  74 => 5,  62 => 295,  60 => 290,  57 => 289,  55 => 287,  53 => 9,  46 => 5,  40 => 1,);
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
    <title>{% block title %}AdminBascla!{% endblock %}</title>

</head>
<body>
{% block header %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('Back/images/favicon.png') }}\">

    <link href=\"{{ asset('Back/vendor/pg-calendar/css/pignose.calendar.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Back/vendor/chartist/css/chartist.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Back/css/style.css') }}\" rel=\"stylesheet\">


    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"{{ asset('Back/images/logo.png') }}\" alt=\"\">
            <img class=\"logo-compact\" src=\"{{ asset('Back/images/logo-text.png') }}\" alt=\"\">
            <img class=\"brand-title\" src=\"{{ asset('Back/images/logo-text.png') }}\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-css\"></div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-user\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-image\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                </ul>
                                <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--SIDE BAR MENU ADD YOUR PATH WITH PATH{{ 'name of the route in bascla bundle /routing.yml' }} --->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Main Menu</li>
                <!-- <li><a href=\"index.html\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                </li> -->
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"index.html\">Dashboard 1</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Gestion Employés</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Employés</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">afficher</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Gestion Evenement</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Events</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Weekly Challenge</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>



              <!--G PRODUITS TOUS LES PRODUITS -->
                <li class=\"nav-label\">Gestion Produits</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">products</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Charité</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>

                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Recyclage</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>

                    </ul>
                </li>


                <li class=\"nav-label\">Gestion Formation</li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Formations</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer participations</a></li>

                    </ul>
                </li>

                <li class=\"nav-label\">Gestion AV</li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Reparation</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                        <li><a href=\"app-calender.html\">confirmer demandes</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Gestion Marketing</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Forum</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Posts</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"app-profile.html\">ajouter</a></li>
                        <li><a href=\"app-profile.html\">modifier</a></li>
                        <li><a href=\"app-profile.html\">supprimer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



{% endblock %}
{% block content %}
{% endblock %}

{% block javascript %}
<script src=\"{{ asset('Back/vendor/global/global.min.js') }}\"></script>
    <script src=\"{{ asset('Back/js/quixnav-init.js') }}\"></script>
    <script src=\"{{ asset('Back/js/custom.min.js') }}\"></script>
{% endblock %}
</body>
</html>
", "base2.html.twig", "C:\\wamp64\\www\\bascla\\app\\Resources\\views\\base2.html.twig");
    }
}
