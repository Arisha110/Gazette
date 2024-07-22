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






";
        // line 265
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
        echo "

<div>
";
        // line 268
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
        echo "
";
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
        echo "

</div>




<section class=\"main-content-wrapper section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-9\">
                    <!-- Gazette Welcome Post -->
                    <div class=\"gazette-welcome-post\">
                        ";
        // line 282
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
        echo "
                        <!-- Post Tag -->
                        ";
        // line 345
        echo "                    </div>
                </div>

                <div class=\"col-12 col-lg-3 col-md-6\">
                    <div class=\"sidebar-area\">
                        <!-- Breaking News Widget -->
                        <div class=\"breaking-news-widget\">
                            <div class=\"widget-title\">
                                <h5>breaking news</h5>
                            </div>
                            <!-- Single Breaking News Widget -->
                            ";
        // line 356
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
        echo "
                            ";
        // line 376
        echo "                        </div>

                        <!-- Don't Miss Widget -->
                        <div class=\"donnot-miss-widget\">
                            <div class=\"widget-title\">
                                <h5>Don't miss</h5>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-1.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">EU council reunites</a>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">A new way to travel the world</a>
                                    <span>March 29, 2016</span>
                                </div>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">Why choose a bank?</a>
                                    <span>March 29, 2016</span>
                                </div>
                            </div>
                        </div>
                        <!-- Advert Widget -->
                        <div class=\"advert-widget\">
                            <div class=\"widget-title\">
                                <h5>Advert</h5>
                            </div>
                            <div class=\"advert-thumb mb-30\">
                                <a href=\"#\"><img src=\"img/bg-img/add.png\" alt=\"\"></a>
                            </div>
                        </div>
                        <!-- Subscribe Widget -->
                        <div class=\"subscribe-widget\">
                            <div class=\"widget-title\">
                                <h5>subscribe</h5>
                            </div>
                            <div class=\"subscribe-form\">
                                <form action=\"#\">
                                    <input type=\"email\" name=\"email\" id=\"subs_email\" placeholder=\"Your Email\">
                                    <button type=\"submit\">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return array (  169 => 376,  165 => 356,  152 => 345,  147 => 282,  131 => 269,  127 => 268,  121 => 265,  105 => 251,  101 => 239,  95 => 203,  70 => 182,  57 => 171,  46 => 162,  43 => 47,  39 => 42,);
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






{{ page.content }}

<div>
{{ page.footer }}
{{ page.sidebar }}

</div>




<section class=\"main-content-wrapper section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-9\">
                    <!-- Gazette Welcome Post -->
                    <div class=\"gazette-welcome-post\">
                        {{ page.main_content }}
                        <!-- Post Tag -->
                        {# <div class=\"gazette-post-tag\">
                            <a href=\"#\">{{page.field_tags}}</a>
                        </div>
                        <h2 class=\"font-pt\">What's behind the world obsession with gems?</h2>
                        <p class=\"gazette-post-date\">March 29, 2016</p>
                        <!-- Post Thumbnail -->
                        <div class=\"blog-post-thumbnail my-5\">
                            <img src=\"img/blog-img/1.jpg\" alt=\"post-thumb\">
                        </div>
                        <!-- Post Excerpt -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend.</p>
                        <!-- Reading More -->
                        <div class=\"post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30\">
                            <div class=\"post-continue-btn\">
                                <a href=\"#\" class=\"font-pt\">Continue Reading <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
                            </div>
                            <div class=\"post-share-btn-group\">
                                <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class=\"gazette-todays-post section_padding_100_50\">
                        <div class=\"gazette-heading\">
                            <h4>today’s most popular</h4>
                        </div>
                        <!-- Single Today Post -->
                        <div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
                            <div class=\"todays-post-thumb\">
                                <img src=\"img/blog-img/2.jpg\" alt=\"\">
                            </div>
                            <div class=\"todays-post-content\">
                                <!-- Post Tag -->
                                <div class=\"gazette-post-tag\">
                                    <a href=\"#\">News</a>
                                </div>
                                <h3><a href=\"#\" class=\"font-pt mb-2\">\$250-million mansion is most expensive</a></h3>
                                <span class=\"gazette-post-date mb-2\">March 29, 2016</span>
                                <a href=\"#\" class=\"post-total-comments\">3 Comments</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere.</p>
                            </div>
                        </div>
                        <!-- Single Today Post -->
                        <div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
                            <div class=\"todays-post-thumb\">
                                <img src=\"img/blog-img/3.jpg\" alt=\"\">
                            </div>
                            <div class=\"todays-post-content\">
                                <!-- Post Tag -->
                                <div class=\"gazette-post-tag\">
                                    <a href=\"#\">Life</a>
                                </div>
                                <h3><a href=\"#\" class=\"font-pt mb-2\">Homeless man steals \$350,000 </a></h3>
                                <p class=\"gazette-post-date mb-2\">March 29, 2016</p>
                                <a href=\"#\" class=\"post-total-comments\">3 Comments</a>
                                <p>Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.</p>
                            </div>
                        </div> #}
                    </div>
                </div>

                <div class=\"col-12 col-lg-3 col-md-6\">
                    <div class=\"sidebar-area\">
                        <!-- Breaking News Widget -->
                        <div class=\"breaking-news-widget\">
                            <div class=\"widget-title\">
                                <h5>breaking news</h5>
                            </div>
                            <!-- Single Breaking News Widget -->
                            {{ page.sidebar}}
                            {# <div class=\"single-breaking-news-widget\">
                                <img src=\"img/blog-img/bn-1.jpg\" alt=\"\">
                                <div class=\"breakingnews-title\">
                                    <p>breaking news</p>
                                </div>
                                <div class=\"breaking-news-heading gradient-background-overlay\">
                                    <h5 class=\"font-pt\">China leads new global skyscraper record</h5>
                                </div>
                            </div>
                            <!-- Single Breaking News Widget -->
                            <div class=\"single-breaking-news-widget\">
                                <img src=\"img/blog-img/bn-2.jpg\" alt=\"\">
                                <div class=\"breakingnews-title\">
                                    <p>breaking news</p>
                                </div>
                                <div class=\"breaking-news-heading gradient-background-overlay\">
                                    <h5 class=\"font-pt\">Can a zebra crossing change its stripes?</h5>
                                </div>
                            </div> #}
                        </div>

                        <!-- Don't Miss Widget -->
                        <div class=\"donnot-miss-widget\">
                            <div class=\"widget-title\">
                                <h5>Don't miss</h5>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-1.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">EU council reunites</a>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">A new way to travel the world</a>
                                    <span>March 29, 2016</span>
                                </div>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <div class=\"single-dont-miss-post d-flex mb-30\">
                                <div class=\"dont-miss-post-thumb\">
                                    <img src=\"img/blog-img/dm-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"dont-miss-post-content\">
                                    <a href=\"#\" class=\"font-pt\">Why choose a bank?</a>
                                    <span>March 29, 2016</span>
                                </div>
                            </div>
                        </div>
                        <!-- Advert Widget -->
                        <div class=\"advert-widget\">
                            <div class=\"widget-title\">
                                <h5>Advert</h5>
                            </div>
                            <div class=\"advert-thumb mb-30\">
                                <a href=\"#\"><img src=\"img/bg-img/add.png\" alt=\"\"></a>
                            </div>
                        </div>
                        <!-- Subscribe Widget -->
                        <div class=\"subscribe-widget\">
                            <div class=\"widget-title\">
                                <h5>subscribe</h5>
                            </div>
                            <div class=\"subscribe-form\">
                                <form action=\"#\">
                                    <input type=\"email\" name=\"email\" id=\"subs_email\" placeholder=\"Your Email\">
                                    <button type=\"submit\">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
