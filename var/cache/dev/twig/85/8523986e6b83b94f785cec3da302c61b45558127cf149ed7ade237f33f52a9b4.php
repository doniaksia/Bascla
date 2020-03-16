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

/* @bascla\Default\index.html.twig */
class __TwigTemplate_b3589b5d317172eedccb56d3e763e072936be8a9304add5707b1b4ceb71203ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bascla\\Default\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bascla\\Default\\index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@bascla\\Default\\index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 2000,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <div  class=\"categories\">
        <div class=\"dwn\" style=\"margin-bottom: 80px;\" >
            <a class=\"scroll\" href=\"#cate\"><img  src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/scroll.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
        </div>
<div class=\"caption\" style=\"margin-top: 100px ;margin-bottom: 150px;\">
        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li><h1>HANDMADE BICYCLE</h1></li>
                    <li><h1>SPEED BICYCLE</h1></li>
                    <li><h1>MOUINTAIN BICYCLE</h1></li>
                </ul>
                <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
                <a class=\"morebtn\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products");
        echo "\">SHOP BIKES</a>
            </div>
        </div>

</div>

        <div class=\"container\">
            <h3>CATEGORIES</h3>
            <div class=\"categorie-grids\">
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid1\">
                        <h4>FIXED / SINGLE SPEED</h4>
                        <p>Are you ready for the 27.5 Revloution ?</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid2\">
                        <h4>PREMIMUM SERIES</h4>
                        <p>Exclusive Bike Components</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid3\">
                        <h4>CITY BIKES</h4>
                        <p>Street Playground</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <div class=\"clearfix\"></div>
            </div>
        </div>

    </div>
    <!--bikes-->
    <!---728x90--->

    <div id=\"cate\" class=\"bikes\">
        <h3>POPULAR BIKES</h3>
        <div class=\"bikes-grids\">
            <ul id=\"flexiselDemo1\">
                <li>
                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>FIXED GEAR<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>BIG BOY ULTRA<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>ROCK HOVER<span>\$300.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>SANSACHG<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik5.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>JETT MAC<span>\$340.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bik6.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>SANSACHG<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
            </ul>
            <script type=\"text/javascript\">
                \$(window).load(function() {
                    \$(\"#flexiselDemo1\").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover:true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
        </div>
    </div>
    <!---->
    <!---728x90--->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@bascla\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 222,  278 => 175,  254 => 154,  230 => 133,  206 => 112,  182 => 91,  158 => 70,  118 => 33,  104 => 22,  87 => 8,  84 => 7,  75 => 6,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}
{% block header %}
    {{ parent() }}

{% endblock %}
{% block content %}

    <script type=\"text/javascript\" src=\"{{  asset('Front/js/responsiveslides.min.js') }}\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 2000,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <div  class=\"categories\">
        <div class=\"dwn\" style=\"margin-bottom: 80px;\" >
            <a class=\"scroll\" href=\"#cate\"><img  src=\"{{ asset('Front/images/scroll.png') }}\" alt=\"\"/></a>
        </div>
<div class=\"caption\" style=\"margin-top: 100px ;margin-bottom: 150px;\">
        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li><h1>HANDMADE BICYCLE</h1></li>
                    <li><h1>SPEED BICYCLE</h1></li>
                    <li><h1>MOUINTAIN BICYCLE</h1></li>
                </ul>
                <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
                <a class=\"morebtn\" href=\"{{ path('products') }}\">SHOP BIKES</a>
            </div>
        </div>

</div>

        <div class=\"container\">
            <h3>CATEGORIES</h3>
            <div class=\"categorie-grids\">
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid1\">
                        <h4>FIXED / SINGLE SPEED</h4>
                        <p>Are you ready for the 27.5 Revloution ?</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid2\">
                        <h4>PREMIMUM SERIES</h4>
                        <p>Exclusive Bike Components</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <a href=\"bicycles.html\"><div class=\"col-md-4 cate-grid grid3\">
                        <h4>CITY BIKES</h4>
                        <p>Street Playground</p>
                        <a class=\"store\" href=\"bicycles.html\">GO TO STORE</a>
                    </div></a>
                <div class=\"clearfix\"></div>
            </div>
        </div>

    </div>
    <!--bikes-->
    <!---728x90--->

    <div id=\"cate\" class=\"bikes\">
        <h3>POPULAR BIKES</h3>
        <div class=\"bikes-grids\">
            <ul id=\"flexiselDemo1\">
                <li>
                    <img src=\"{{ asset('Front/images/bik1.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>FIXED GEAR<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('Front/images/bik2.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>BIG BOY ULTRA<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('Front/images/bik3.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>ROCK HOVER<span>\$300.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('Front/images/bik4.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>SANSACHG<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('Front/images/bik5.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>JETT MAC<span>\$340.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
                <li>
                    <img src=\"{{ asset('Front/images/bik6.jpg') }}\" alt=\"\"/>
                    <div class=\"bike-info\">
                        <div class=\"model\">
                            <h4>SANSACHG<span>\$249.00</span></h4>
                        </div>
                        <div class=\"model-info\">
                            <select>
                                <option value=\"volvo\">OPTION</option>
                                <option value=\"saab\">Option</option>
                                <option value=\"opel\">Option</option>
                                <option value=\"audi\">Option</option>
                            </select>
                            <a href=\"bicycles.html\">BUY</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"viw\">
                        <a href=\"bicycles.html\">Quick View</a>
                    </div>
                </li>
            </ul>
            <script type=\"text/javascript\">
                \$(window).load(function() {
                    \$(\"#flexiselDemo1\").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover:true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type=\"text/javascript\" src=\"{{ asset('Front/js/jquery.flexisel.js') }}\"></script>
        </div>
    </div>
    <!---->
    <!---728x90--->

{% endblock %}", "@bascla\\Default\\index.html.twig", "C:\\wamp64\\www\\bascla\\src\\basclaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
