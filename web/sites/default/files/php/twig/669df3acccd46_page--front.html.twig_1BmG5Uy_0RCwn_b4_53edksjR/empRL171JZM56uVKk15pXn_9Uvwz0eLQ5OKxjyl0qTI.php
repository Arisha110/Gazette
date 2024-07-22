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

/* themes/custom/gazette/templates/page--front.html.twig */
class __TwigTemplate_d3f8755bf2a903c2dceaa0d989994928 extends \Twig\Template
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
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#gazetteMenu\" aria-controls=\"gazetteMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\tMenu</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\" >
                                <a class=\"nav-link\">
                                   ";
        // line 203
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
        echo "
                                </a>
                                </li>
\t\t\t\t\t\t\t\t\t";
        // line 239
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- Search Form -->
\t\t\t\t\t\t\t\t";
        // line 251
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<section
\tclass=\"welcome-blog-post-slide owl-carousel\">
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/1.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">crypto</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">Crypto world goes mad</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/2.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">live</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">The latest news live</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/3.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">politics</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">Financial advices
\t\t\t\t</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/2.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">live</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">The latest news live</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gazette/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 251,  101 => 239,  95 => 203,  70 => 182,  57 => 171,  46 => 162,  43 => 47,  39 => 42,);
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
\t            <div class=\"container h-100\">
\t                <div class=\"row h-100 align-items-center\"> #}
\t<!-- Breaking News Area -->
\t{# <div class=\"col-12 col-md-6\">
\t                        <div class=\"breaking-news-area\">
\t                            <h5 class=\"breaking-news-title\">Breaking news</h5>
\t                            <div id=\"breakingNewsTicker\" class=\"ticker\">
\t                                <ul>
\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels comes after week of drama</a></li>
\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels</a></li>
\t                                    <li><a href=\"#\">Brexit breakthrough in Brussels comes after week of drama</a></li>
\t                                    <li><a href=\"#\">Brex comes after week of drama</a></li>
\t                                    <li><a href=\"#\">Brexit breakthrough in Bweek of drama</a></li>
\t                                    <li><a href=\"#\">Brexit bssels comes after week of drama</a></li>
\t                                </ul>
\t                            </div>
\t                        </div>
\t                    </div>
\t                    <!-- Stock News Area -->
\t                    <div class=\"col-12 col-md-6\">
\t                        <div class=\"stock-news-area\">
\t                            <div id=\"stockNewsTicker\" class=\"ticker\">
\t                                <ul>
\t                                    <li>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>eur/usd</span>
\t                                                <span>1.1862</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>0.18</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>BTC/usd</span>
\t                                                <span>15.674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index plus-index\">
\t                                                <h4>8.60</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>ETH/usd</span>
\t                                                <span>674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>13.60</h4>
\t                                            </div>
\t                                        </div>
\t                                    </li>
\t                                    <li>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>eur/usd</span>
\t                                                <span>1.1862</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>0.18</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>BTC/usd</span>
\t                                                <span>15.674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index plus-index\">
\t                                                <h4>8.60</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>ETH/usd</span>
\t                                                <span>674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>13.60</h4>
\t                                            </div>
\t                                        </div>
\t                                    </li>
\t                                    <li>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>eur/usd</span>
\t                                                <span>1.1862</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>3.95</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>BTC/usd</span>
\t                                                <span>15.674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index plus-index\">
\t                                                <h4>4.78</h4>
\t                                            </div>
\t                                        </div>
\t                                        <div class=\"single-stock-report\">
\t                                            <div class=\"stock-values\">
\t                                                <span>ETH/usd</span>
\t                                                <span>674.99</span>
\t                                            </div>
\t                                            <div class=\"stock-index minus-index\">
\t                                                <h4>11.37</h4>
\t                                            </div>
\t                                        </div>
\t                                    </li>
\t                                </ul>
\t                            </div>
\t                        </div>
\t                    </div>
\t                </div>
\t            </div>
\t        </div> #}

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
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#gazetteMenu\" aria-controls=\"gazetteMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\tMenu</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\" >
                                <a class=\"nav-link\">
                                   {{ page.header_bottom }}
                                </a>
                                </li>
\t\t\t\t\t\t\t\t\t{# <li class=\"nav-item active\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Today
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.html\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"catagory.html\">Catagory</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"single-post.html\">Single Post</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"about-us.html\">About Us</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Politics</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Lifestyle</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Travel</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Health</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Entertainment</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">sport</a>
\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- Search Form -->
\t\t\t\t\t\t\t\t{# <div class=\"header-search-form mr-auto\">
\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t<input type=\"search\" placeholder=\"Input your keyword then press enter...\" id=\"search\" name=\"search\">
\t\t\t\t\t\t\t\t\t\t<input class=\"d-none\" type=\"submit\" value=\"submit\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Search btn -->
\t\t\t\t\t\t\t\t<div id=\"searchbtn\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<section
\tclass=\"welcome-blog-post-slide owl-carousel\">
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/1.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">crypto</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">Crypto world goes mad</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/2.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">live</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">The latest news live</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/3.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">politics</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">Financial advices
\t\t\t\t</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Single Blog Post -->
\t<div
\t\tclass=\"single-blog-post-slide bg-img background-overlay-5\" style=\"background-image: url(img/bg-img/2.jpg);\">
\t\t<!-- Single Blog Post Content -->
\t\t<div class=\"single-blog-post-content\">
\t\t\t<div class=\"tags\">
\t\t\t\t<a href=\"#\">live</a>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<a href=\"#\" class=\"font-pt\">The latest news live</a>
\t\t\t</h3>
\t\t\t<div class=\"date\">
\t\t\t\t<a href=\"#\">March 29, 2018</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/gazette/templates/page--front.html.twig", "C:\\xampp\\htdocs\\Task1\\web\\themes\\custom\\gazette\\templates\\page--front.html.twig");
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
