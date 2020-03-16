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

/* @bascla\detail.html.twig */
class __TwigTemplate_dd9dea45954e1c3179f7aee062e8666aa1ce2733b4802140b1753816e2fe1ec6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bascla\\detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@bascla\\detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@bascla\\detail.html.twig", 1);
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
        echo "    <div class=\"product\">
        <div class=\"container\">
            <div class=\"ctnt-bar cntnt\">
                <div class=\"content-bar\">
                    <div class=\"single-page\">
                        <div class=\"product-head\">
                            <a href=\"index.html\">Home</a> <span>::</span>
                        </div>

                        <!--//details-product-slider-->
                        <div class=\"details-left-slider\">
                            <div class=\"grid images_3_of_2\">
                                <div class=\"flexslider\">
                                    <!-- FlexSlider -->
                                    <script src=\"js/imagezoom.js\"></script>
                                    <script defer src=\"js/jquery.flexslider.js\"></script>
                                    <link rel=\"stylesheet\" href=\"css/flexslider.css\" type=\"text/css\" media=\"screen\" />

                                    <script>
                                        // Can also be used with \$(document).ready()
                                        \$(window).load(function() {
                                            \$('.flexslider').flexslider({
                                                animation: \"slide\",
                                                controlNav: \"thumbnails\"
                                            });
                                        });
                                    </script>
                                    <!-- //FlexSlider-->
                                    <ul class=\"slides\">
                                        <li data-thumb=\"images/m1.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m1.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m2.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m2.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m3.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m3.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m4.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m4.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>

                            </div>
                        </div>
                        <div class=\"details-left-info\">
                            <h3>SCOTT SPARK</h3>
                            <h4>Model No: 3498</h4>
                            <h4></h4>
                            <p><label>\$</label> 300 <a href=\"#\">Click for offer</a></p>
                            <p class=\"size\">SIZE ::</p>
                            <a class=\"length\" href=\"#\">XS</a>
                            <a class=\"length\" href=\"#\">M</a>
                            <a class=\"length\" href=\"#\">S</a>
                            <div class=\"btn_form\">
                                <a href=\"cart.html\">buy now</a>
                                <a href=\"cart.html\">ADD TO CART</a>
                            </div>
                            <div class=\"bike-type\">
                                <p>TYPE  ::<a href=\"#\">MOUNTAIN BIKE</a></p>
                                <p>BRAND  ::<a href=\"#\">SPORTS SCOTTY</a></p>
                            </div>
                            <h5>Description  ::</h5>
                            <p class=\"desc\">The first mechanically-propelled, two-wheeled vehicle may have been built by Kirkpatrick MacMillan, a Scottish blacksmith, in 1839, although the claim is often disputed. He is also associated with the first recorded instance of a cycling traffic offense, when a Glasgow newspaper in 1842 reported an accident in which an anonymous \"gentleman from Dumfries-shire... bestride a velocipede... of ingenious design\" knocked over a little girl in Glasgow and was fined five
                                The word bicycle first appeared in English print in The Daily News in 1868, to describe \"Bysicles and trysicles\" on the \"Champs Elysées and Bois de Boulogne.</p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <!---728x90--->

            <div class=\"single-bottom2\">
                <h6>Related Products</h6>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s1.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Road Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$300.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s2.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Mountain Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$1500.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s3.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Single Speed Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$800.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
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

    public function getTemplateName()
    {
        return "@bascla\\detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 7,  75 => 6,  61 => 3,  52 => 2,  30 => 1,);
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
    <div class=\"product\">
        <div class=\"container\">
            <div class=\"ctnt-bar cntnt\">
                <div class=\"content-bar\">
                    <div class=\"single-page\">
                        <div class=\"product-head\">
                            <a href=\"index.html\">Home</a> <span>::</span>
                        </div>

                        <!--//details-product-slider-->
                        <div class=\"details-left-slider\">
                            <div class=\"grid images_3_of_2\">
                                <div class=\"flexslider\">
                                    <!-- FlexSlider -->
                                    <script src=\"js/imagezoom.js\"></script>
                                    <script defer src=\"js/jquery.flexslider.js\"></script>
                                    <link rel=\"stylesheet\" href=\"css/flexslider.css\" type=\"text/css\" media=\"screen\" />

                                    <script>
                                        // Can also be used with \$(document).ready()
                                        \$(window).load(function() {
                                            \$('.flexslider').flexslider({
                                                animation: \"slide\",
                                                controlNav: \"thumbnails\"
                                            });
                                        });
                                    </script>
                                    <!-- //FlexSlider-->
                                    <ul class=\"slides\">
                                        <li data-thumb=\"images/m1.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m1.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m2.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m2.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m3.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m3.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                        <li data-thumb=\"images/m4.jpg\">
                                            <div class=\"thumb-image\"> <img src=\"images/m4.jpg\" data-imagezoom=\"true\" class=\"img-responsive\"> </div>
                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>

                            </div>
                        </div>
                        <div class=\"details-left-info\">
                            <h3>SCOTT SPARK</h3>
                            <h4>Model No: 3498</h4>
                            <h4></h4>
                            <p><label>\$</label> 300 <a href=\"#\">Click for offer</a></p>
                            <p class=\"size\">SIZE ::</p>
                            <a class=\"length\" href=\"#\">XS</a>
                            <a class=\"length\" href=\"#\">M</a>
                            <a class=\"length\" href=\"#\">S</a>
                            <div class=\"btn_form\">
                                <a href=\"cart.html\">buy now</a>
                                <a href=\"cart.html\">ADD TO CART</a>
                            </div>
                            <div class=\"bike-type\">
                                <p>TYPE  ::<a href=\"#\">MOUNTAIN BIKE</a></p>
                                <p>BRAND  ::<a href=\"#\">SPORTS SCOTTY</a></p>
                            </div>
                            <h5>Description  ::</h5>
                            <p class=\"desc\">The first mechanically-propelled, two-wheeled vehicle may have been built by Kirkpatrick MacMillan, a Scottish blacksmith, in 1839, although the claim is often disputed. He is also associated with the first recorded instance of a cycling traffic offense, when a Glasgow newspaper in 1842 reported an accident in which an anonymous \"gentleman from Dumfries-shire... bestride a velocipede... of ingenious design\" knocked over a little girl in Glasgow and was fined five
                                The word bicycle first appeared in English print in The Daily News in 1868, to describe \"Bysicles and trysicles\" on the \"Champs Elysées and Bois de Boulogne.</p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <!---728x90--->

            <div class=\"single-bottom2\">
                <h6>Related Products</h6>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s1.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Road Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$300.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s2.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Mountain Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$1500.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"product\">
                    <div class=\"product-desc\">
                        <div class=\"product-img product-img2\">
                            <img src=\"images/s3.jpg\" class=\"img-responsive \" alt=\"\"/>
                        </div>
                        <div class=\"prod1-desc\">
                            <h5><a class=\"product_link\" href=\"bicycles.html\">Single Speed Bike</a></h5>
                            <p class=\"product_descr\"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"product_price\">
                        <span class=\"price-access\">\$800.51</span>
                        <a class=\"button1\" href=\"cart.html\"><span>Add to cart</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "@bascla\\detail.html.twig", "C:\\wamp64\\www\\bascla\\src\\basclaBundle\\Resources\\views\\detail.html.twig");
    }
}
