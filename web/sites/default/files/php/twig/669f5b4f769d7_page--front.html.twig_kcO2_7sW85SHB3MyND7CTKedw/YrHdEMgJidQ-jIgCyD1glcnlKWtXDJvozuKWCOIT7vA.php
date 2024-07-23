<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/gazette/templates/pages/page--front.html.twig */
class __TwigTemplate_c7b54da0a0734e2fa01d29a2fd3a32ba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
<header class=\"header-area\">
\t";
        // line 47
        echo "\t<!-- Breaking News Area -->
\t";
        // line 162
        echo "
\t<!-- Middle Header Area -->
\t\t<div class=\"middle-header\"> <div class=\"container h-100\">
\t\t\t<div
\t\t\t\tclass=\"row h-100 align-items-center\">
\t\t\t\t<!-- Logo Area -->
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 171, $this->source) . "/themes/custom/gazette/img/core-img/logo.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Header Advert Area -->
\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t<div class=\"header-advert-area\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t";
        // line 182
        echo "\t\t\t\t\t\t\t<img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 182, $this->source) . "/themes/custom/gazette/img/bg-img/top-advert.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Bottom Header Area -->
\t<div class=\"bottom-header\">
\t\t<div class=\"container h-100\">
\t\t\t<div class=\"row h-100 align-items-center\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mainy\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mainy mr-auto\">
\t\t\t\t\t\t\t\t <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
        echo "</a>
                                        </li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<section class=\"main-content-wrapper section_padding_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-12 col-lg-9\">
\t\t\t\t<!-- Gazette Welcome Post -->
\t\t\t\t<div class=\"gazette-welcome-post\">
\t\t\t\t\t";
        // line 224
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
        echo "
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"gazette-todays-post section_padding_100_50\">
\t\t\t\t\t<div class=\"gazette-heading\">
\t\t\t\t\t\t<h4>today’s most popular</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t<div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t   ";
        // line 234
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "most_popular", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 251
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t";
        // line 272
        echo "\t\t\t\t</div>
\t\t\t</div>

           ";
        // line 276
        echo "\t\t\t<div class=\"col-12 col-lg-3 col-md-6\">
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar-area\">
\t\t\t\t\t<!-- Breaking News Widget -->
\t\t\t\t\t<div class=\"breaking-news-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>breaking news</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Single Breaking News Widget -->
\t\t\t\t\t\t";
        // line 285
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 305
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<!-- Don't Miss Widget -->
\t\t\t\t\t<div class=\"donnot-miss-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>Don't miss</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Single Don't Miss Post -->
\t\t\t\t\t\t<div class=\"single-dont-miss-post d-flex mb-30\">
\t\t\t\t\t\t\t";
        // line 314
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dont_miss", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Subscribe Widget -->
\t\t\t\t\t<div class=\"subscribe-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>subscribe</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"subscribe-form\">
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"subs_email\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t<button type=\"submit\">subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>





<footer class=\"footer-area bg-img background-overlay\" style=\"background-image: url(img/bg-img/4.jpg);\">
        <!-- Top Footer Area -->
        <div class=\"top-footer-area section_padding_100_70\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Regions</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">U.S.</a></li>
                                <li><a href=\"#\">Africa</a></li>
                                <li><a href=\"#\">Americas</a></li>
                                <li><a href=\"#\">Asia</a></li>
                                <li><a href=\"#\">China</a></li>
                                <li><a href=\"#\">Europe</a></li>
                                <li><a href=\"#\">Middle</a></li>
                                <li><a href=\"#\">East</a></li>
                                <li><a href=\"#\">Opinion</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Fashion</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Election 2016</a></li>
                                <li><a href=\"#\">Nation</a></li>
                                <li><a href=\"#\">World</a></li>
                                <li><a href=\"#\">Our Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Politics</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Markets</a></li>
                                <li><a href=\"#\">Tech</a></li>
                                <li><a href=\"#\">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Featured</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Football</a></li>
                                <li><a href=\"#\">Golf</a></li>
                                <li><a href=\"#\">Tennis</a></li>
                                <li><a href=\"#\">Motorsport</a></li>
                                <li><a href=\"#\">Horseracing</a></li>
                                <li><a href=\"#\">Equestrian</a></li>
                                <li><a href=\"#\">Sailing</a></li>
                                <li><a href=\"#\">Skiing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">FAQ</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Aviation</a></li>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Traveller</a></li>
                                <li><a href=\"#\">Destinations</a></li>
                                <li><a href=\"#\">Features</a></li>
                                <li><a href=\"#\">Food/Drink</a></li>
                                <li><a href=\"#\">Hotels</a></li>
                                <li><a href=\"#\">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">+More</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Fashion</a></li>
                                <li><a href=\"#\">Design</a></li>
                                <li><a href=\"#\">Architecture</a></li>
                                <li><a href=\"#\">Arts</a></li>
                                <li><a href=\"#\">Autos</a></li>
                                <li><a href=\"#\">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    </footer>


\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/gazette/templates/pages/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 314,  160 => 305,  156 => 285,  145 => 276,  140 => 272,  136 => 251,  132 => 234,  119 => 224,  92 => 200,  70 => 182,  57 => 171,  46 => 162,  43 => 47,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.pre_content: Items for the pre-content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<header class=\"header-area\">
\t{# <div class=\"top-header\">
\t\t            <div class=\"container h-100\">
\t\t                <div class=\"row h-100 align-items-center\"> #}
\t<!-- Breaking News Area -->
\t{# <div class=\"col-12 col-md-6\">
\t\t                        <div class=\"breaking-news-area\">
\t\t                            <h5 class=\"breaking-news-title\">Breaking news</h5>
\t\t                            <div id=\"breakingNewsTicker\" class=\"ticker\">
\t\t                                <ul>
\t\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels comes after week of drama</a></li>
\t\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels</a></li>
\t\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels comes after week of drama</a></li>
\t\t                                    <li><a href=\"#\">Brex comes after week of drama</a></li>
\t\t                                    <li><a href=\"#\">Brexit breakthrough in Bweek of drama</a></li>
\t\t                                    <li><a href=\"#\">Brexit bssels comes after week of drama</a></li>
\t\t                                </ul>
\t\t                            </div>
\t\t                        </div>
\t\t                    </div>
\t\t                    <!-- Stock News Area -->
\t\t                    <div class=\"col-12 col-md-6\">
\t\t                        <div class=\"stock-news-area\">
\t\t                            <div id=\"stockNewsTicker\" class=\"ticker\">
\t\t                                <ul>
\t\t                                    <li>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>eur/usd</span>
\t\t                                                <span>1.1862</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>0.18</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>BTC/usd</span>
\t\t                                                <span>15.674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index plus-index\">
\t\t                                                <h4>8.60</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>ETH/usd</span>
\t\t                                                <span>674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>13.60</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                    </li>
\t\t                                    <li>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>eur/usd</span>
\t\t                                                <span>1.1862</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>0.18</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>BTC/usd</span>
\t\t                                                <span>15.674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index plus-index\">
\t\t                                                <h4>8.60</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>ETH/usd</span>
\t\t                                                <span>674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>13.60</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                    </li>
\t\t                                    <li>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>eur/usd</span>
\t\t                                                <span>1.1862</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>3.95</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>BTC/usd</span>
\t\t                                                <span>15.674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index plus-index\">
\t\t                                                <h4>4.78</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                        <div class=\"single-stock-report\">
\t\t                                            <div class=\"stock-values\">
\t\t                                                <span>ETH/usd</span>
\t\t                                                <span>674.99</span>
\t\t                                            </div>
\t\t                                            <div class=\"stock-index minus-index\">
\t\t                                                <h4>11.37</h4>
\t\t                                            </div>
\t\t                                        </div>
\t\t                                    </li>
\t\t                                </ul>
\t\t                            </div>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t            </div>
\t\t        </div> #}

\t<!-- Middle Header Area -->
\t\t<div class=\"middle-header\"> <div class=\"container h-100\">
\t\t\t<div
\t\t\t\tclass=\"row h-100 align-items-center\">
\t\t\t\t<!-- Logo Area -->
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/core-img/logo.png' }}\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Header Advert Area -->
\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t<div class=\"header-advert-area\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t{# <img src=\"img/bg-img/top-advert.png\" alt=\"header-add\"> #}
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/top-advert.png' }}\" class=\"d-block w-100\" alt=\"slider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Bottom Header Area -->
\t<div class=\"bottom-header\">
\t\t<div class=\"container h-100\">
\t\t\t<div class=\"row h-100 align-items-center\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mainy\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mainy mr-auto\">
\t\t\t\t\t\t\t\t <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">{{ page.header_bottom }}</a>
                                        </li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<section class=\"main-content-wrapper section_padding_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-12 col-lg-9\">
\t\t\t\t<!-- Gazette Welcome Post -->
\t\t\t\t<div class=\"gazette-welcome-post\">
\t\t\t\t\t{{ page.main_content }}
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"gazette-todays-post section_padding_100_50\">
\t\t\t\t\t<div class=\"gazette-heading\">
\t\t\t\t\t\t<h4>today’s most popular</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t<div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t   {{ page.most_popular }}
\t\t\t\t\t\t{# <div class=\"todays-post-thumb\">
\t\t\t\t\t\t\t<img src=\"img/blog-img/2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"todays-post-content\">
\t\t\t\t\t\t\t<!-- Post Tag -->
\t\t\t\t\t\t\t<div class=\"gazette-post-tag\">
\t\t\t\t\t\t\t\t<a href=\"#\">News</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-pt mb-2\">\$250-million mansion is most expensive</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<span class=\"gazette-post-date mb-2\">March 29, 2016</span>
\t\t\t\t\t\t\t<a href=\"#\" class=\"post-total-comments\">3 Comments</a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere.</p>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t{# <div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t\t<div class=\"todays-post-thumb\">
\t\t\t\t\t\t\t<img src=\"img/blog-img/3.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"todays-post-content\">
\t\t\t\t\t\t\t<!-- Post Tag -->
\t\t\t\t\t\t\t<div class=\"gazette-post-tag\">
\t\t\t\t\t\t\t\t<a href=\"#\">Life</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-pt mb-2\">Homeless man steals \$350,000
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"gazette-post-date mb-2\">March 29, 2016</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"post-total-comments\">3 Comments</a>
\t\t\t\t\t\t\t<p>Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>  #}
\t\t\t\t</div>
\t\t\t</div>

           {# breaking news #}
\t\t\t<div class=\"col-12 col-lg-3 col-md-6\">
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar-area\">
\t\t\t\t\t<!-- Breaking News Widget -->
\t\t\t\t\t<div class=\"breaking-news-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>breaking news</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Single Breaking News Widget -->
\t\t\t\t\t\t{{ page.sidebar}}
\t\t\t\t\t\t{# <div class=\"single-breaking-news-widget\">
\t\t\t\t\t\t                                <img src=\"img/blog-img/bn-1.jpg\" alt=\"\">
\t\t\t\t\t\t                                <div class=\"breakingnews-title\">
\t\t\t\t\t\t                                    <p>breaking news</p>
\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t                                <div class=\"breaking-news-heading gradient-background-overlay\">
\t\t\t\t\t\t                                    <h5 class=\"font-pt\">China leads new global skyscraper record</h5>
\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <!-- Single Breaking News Widget -->
\t\t\t\t\t\t                            <div class=\"single-breaking-news-widget\">
\t\t\t\t\t\t                                <img src=\"img/blog-img/bn-2.jpg\" alt=\"\">
\t\t\t\t\t\t                                <div class=\"breakingnews-title\">
\t\t\t\t\t\t                                    <p>breaking news</p>
\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t                                <div class=\"breaking-news-heading gradient-background-overlay\">
\t\t\t\t\t\t                                    <h5 class=\"font-pt\">Can a zebra crossing change its stripes?</h5>
\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t                            </div> #}
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Don't Miss Widget -->
\t\t\t\t\t<div class=\"donnot-miss-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>Don't miss</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Single Don't Miss Post -->
\t\t\t\t\t\t<div class=\"single-dont-miss-post d-flex mb-30\">
\t\t\t\t\t\t\t{{ page.dont_miss }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Subscribe Widget -->
\t\t\t\t\t<div class=\"subscribe-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>subscribe</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"subscribe-form\">
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"subs_email\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t<button type=\"submit\">subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>





<footer class=\"footer-area bg-img background-overlay\" style=\"background-image: url(img/bg-img/4.jpg);\">
        <!-- Top Footer Area -->
        <div class=\"top-footer-area section_padding_100_70\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Regions</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">U.S.</a></li>
                                <li><a href=\"#\">Africa</a></li>
                                <li><a href=\"#\">Americas</a></li>
                                <li><a href=\"#\">Asia</a></li>
                                <li><a href=\"#\">China</a></li>
                                <li><a href=\"#\">Europe</a></li>
                                <li><a href=\"#\">Middle</a></li>
                                <li><a href=\"#\">East</a></li>
                                <li><a href=\"#\">Opinion</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Fashion</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Election 2016</a></li>
                                <li><a href=\"#\">Nation</a></li>
                                <li><a href=\"#\">World</a></li>
                                <li><a href=\"#\">Our Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Politics</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Markets</a></li>
                                <li><a href=\"#\">Tech</a></li>
                                <li><a href=\"#\">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">Featured</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Football</a></li>
                                <li><a href=\"#\">Golf</a></li>
                                <li><a href=\"#\">Tennis</a></li>
                                <li><a href=\"#\">Motorsport</a></li>
                                <li><a href=\"#\">Horseracing</a></li>
                                <li><a href=\"#\">Equestrian</a></li>
                                <li><a href=\"#\">Sailing</a></li>
                                <li><a href=\"#\">Skiing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">FAQ</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Aviation</a></li>
                                <li><a href=\"#\">Business</a></li>
                                <li><a href=\"#\">Traveller</a></li>
                                <li><a href=\"#\">Destinations</a></li>
                                <li><a href=\"#\">Features</a></li>
                                <li><a href=\"#\">Food/Drink</a></li>
                                <li><a href=\"#\">Hotels</a></li>
                                <li><a href=\"#\">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
                        <div class=\"single-footer-widget\">
                            <div class=\"footer-widget-title\">
                                <h4 class=\"font-pt\">+More</h4>
                            </div>
                            <ul class=\"footer-widget-menu\">
                                <li><a href=\"#\">Fashion</a></li>
                                <li><a href=\"#\">Design</a></li>
                                <li><a href=\"#\">Architecture</a></li>
                                <li><a href=\"#\">Arts</a></li>
                                <li><a href=\"#\">Autos</a></li>
                                <li><a href=\"#\">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    </footer>


\t", "themes/custom/gazette/templates/pages/page--front.html.twig", "C:\\xampp\\htdocs\\Task1\\web\\themes\\custom\\gazette\\templates\\pages\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 171);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}