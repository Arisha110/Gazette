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
<header
\tclass=\"header-area\">


\t<!-- Middle Header Area -->
\t<div class=\"middle-header\">
\t\t<div class=\"container h-100\">
\t\t\t<div
\t\t\t\tclass=\"row h-100 align-items-center\">
\t\t\t\t<!-- Logo Area -->
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source) . "/themes/custom/gazette/img/core-img/logo.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Header Advert Area -->
\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t<div class=\"header-advert-area\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 67, $this->source) . "/themes/custom/gazette/img/bg-img/top-advert.png"), "html", null, true);
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

\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mainy\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mainy mr-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<!-- Welcome Blog Slide Area Start -->
";
        // line 144
        echo "

<div id=\"carouselExampleIndicators\" class=\"carousel slide\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 154, $this->source) . "/themes/custom/gazette/img/bg-img/1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 158, $this->source) . "/themes/custom/gazette/img/bg-img/2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 162, $this->source) . "/themes/custom/gazette/img/bg-img/3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>


";
        // line 178
        echo "
";
        // line 199
        echo "

<section class=\"main-content-wrapper section_padding_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-12 col-lg-9\">
\t\t\t\t<!-- Gazette Welcome Post -->
\t\t\t\t<div class=\"gazette-welcome-post\">
\t\t\t\t\t";
        // line 208
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
        echo "

\t\t\t\t</div>

\t\t\t\t<div class=\"gazette-todays-post section_padding_100_50\">
\t\t\t\t\t<div class=\"gazette-heading\">
\t\t\t\t\t\t<h4>today’s most popular</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t<div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t\t";
        // line 218
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "most_popular", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 235
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t";
        // line 256
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 260
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
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 289
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<!-- Don't Miss Widget -->
\t\t\t\t\t<div class=\"donnot-miss-widget\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>Don't miss</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Single Don't Miss Post -->
\t\t\t\t\t\t<div class=\"single-dont-miss-post d-flex mb-30\">
\t\t\t\t\t\t\t";
        // line 298
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dont_miss", [], "any", false, false, true, 298), 298, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>


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


<footer
\tclass=\"footer-area bg-img background-overlay\" style=\"background-image: url(img/bg-img/4.jpg);\">
\t<!-- Top Footer Area -->
\t<div class=\"top-footer-area section_padding_100_70\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Regions</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">U.S.</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Africa</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Americas</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Asia</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">China</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Europe</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Middle</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">East</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Opinion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Fashion</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Election 2016</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Nation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">World</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Our Team</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Politics</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Markets</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Tech</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Luxury</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Featured</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Football</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Golf</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Tennis</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Motorsport</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Horseracing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Equestrian</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Sailing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Skiing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">FAQ</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Aviation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Traveller</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Destinations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Features</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Food/Drink</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Hotels</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Partner Hotels</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">+More</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Fashion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Architecture</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Arts</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Autos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Luxury</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


</footer>
";
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
        return array (  221 => 298,  210 => 289,  206 => 269,  195 => 260,  190 => 256,  186 => 235,  182 => 218,  169 => 208,  158 => 199,  155 => 178,  137 => 162,  130 => 158,  123 => 154,  111 => 144,  90 => 85,  69 => 67,  55 => 56,  39 => 42,);
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

<header
\tclass=\"header-area\">


\t<!-- Middle Header Area -->
\t<div class=\"middle-header\">
\t\t<div class=\"container h-100\">
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
\t\t\t\t\t\t\t
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

\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mainy\" id=\"gazetteMenu\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav mainy mr-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t{{ page.header_bottom }}
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>


<!-- Welcome Blog Slide Area Start -->
{# <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t<div class=\"carousel-indicators\">
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t</div>
\t<div class=\"carousel-inner\">
\t\t<div class=\"carousel-item active\">
\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/1.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>First slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/2.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"carousel-item\">
\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/3.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">

\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>
</div> #}


<div id=\"carouselExampleIndicators\" class=\"carousel slide\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/1.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/2.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/3.jpg' }}\" class=\"d-block w-100\" alt=\"slider\">
      
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>


{# latest news sliding area #}

{# <div class=\"latest-news-marquee-area\">
        <div class=\"simple-marquee-container\">
            <div class=\"marquee\">
                <ul class=\"marquee-content-items\">
                    <li>
                        <a href=\"#\"><span class=\"latest-news-time\">10:40</span> The Facebook Live stream that could presage TV</a>
                    </li>
                    <li>
                        <a href=\"#\"><span class=\"latest-news-time\">11:02</span> Opinion: It's time to start talking about impeachment</a>
                    </li>
                    <li>
                        <a href=\"#\"><span class=\"latest-news-time\">12:37</span> Clinton aims to shore up Wisconsin with new TV ads</a>
                    </li>
                    <li>
                        <a href=\"#\"><span class=\"latest-news-time\">13:59</span> Trump signs tax bill before leaving for Mar-a-Lago</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> #}


<section class=\"main-content-wrapper section_padding_100\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-12 col-lg-9\">
\t\t\t\t<!-- Gazette Welcome Post -->
\t\t\t\t<div class=\"gazette-welcome-post\">
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>

\t\t\t\t<div class=\"gazette-todays-post section_padding_100_50\">
\t\t\t\t\t<div class=\"gazette-heading\">
\t\t\t\t\t\t<h4>today’s most popular</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t<div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t\t{{ page.most_popular }}
\t\t\t\t\t\t{# <div class=\"todays-post-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog-img/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"todays-post-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Post Tag -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gazette-post-tag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">News</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-pt mb-2\">\$250-million mansion is most expensive</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"gazette-post-date mb-2\">March 29, 2016</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-total-comments\">3 Comments</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Single Today Post -->
\t\t\t\t\t{# <div class=\"gazette-single-todays-post d-md-flex align-items-start mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"todays-post-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/blog-img/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"todays-post-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Post Tag -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"gazette-post-tag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Life</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-pt mb-2\">Homeless man steals \$350,000
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"gazette-post-date mb-2\">March 29, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"post-total-comments\">3 Comments</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  #}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# breaking news #}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <img src=\"img/blog-img/bn-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <div class=\"breakingnews-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <p>breaking news</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <div class=\"breaking-news-heading gradient-background-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <h5 class=\"font-pt\">China leads new global skyscraper record</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <!-- Single Breaking News Widget -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"single-breaking-news-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <img src=\"img/blog-img/bn-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <div class=\"breakingnews-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <p>breaking news</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <div class=\"breaking-news-heading gradient-background-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <h5 class=\"font-pt\">Can a zebra crossing change its stripes?</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div> #}
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

\t\t\t\t\t</div>


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


<footer
\tclass=\"footer-area bg-img background-overlay\" style=\"background-image: url(img/bg-img/4.jpg);\">
\t<!-- Top Footer Area -->
\t<div class=\"top-footer-area section_padding_100_70\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Regions</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">U.S.</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Africa</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Americas</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Asia</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">China</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Europe</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Middle</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">East</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Opinion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Fashion</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Election 2016</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Nation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">World</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Our Team</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Politics</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Markets</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Tech</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Luxury</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">Featured</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Football</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Golf</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Tennis</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Motorsport</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Horseracing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Equestrian</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Sailing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Skiing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">FAQ</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Aviation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Traveller</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Destinations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Features</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Food/Drink</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Hotels</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Partner Hotels</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single Footer Widget -->
\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-2\">
\t\t\t\t\t<div class=\"single-footer-widget\">
\t\t\t\t\t\t<div class=\"footer-widget-title\">
\t\t\t\t\t\t\t<h4 class=\"font-pt\">+More</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"footer-widget-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Fashion</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Architecture</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Arts</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Autos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Luxury</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


</footer>
", "themes/custom/gazette/templates/pages/page--front.html.twig", "C:\\xampp\\htdocs\\Task1\\web\\themes\\custom\\gazette\\templates\\pages\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 56);
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
