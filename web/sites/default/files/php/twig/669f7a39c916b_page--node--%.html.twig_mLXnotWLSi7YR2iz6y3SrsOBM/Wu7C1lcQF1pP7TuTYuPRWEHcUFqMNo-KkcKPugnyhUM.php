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

/* themes/custom/gazette/templates/pages/page--node--%.html.twig */
class __TwigTemplate_231efc122af8c1d308d6f021b30a6b2c extends \Twig\Template
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
        // line 48
        echo "\t<!-- Breaking News Area -->
\t";
        // line 163
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
        // line 172
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 172, $this->source) . "/themes/custom/gazette/img/core-img/logo.png"), "html", null, true);
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
        // line 183
        echo "\t\t\t\t\t\t\t<img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 183, $this->source) . "/themes/custom/gazette/img/bg-img/top-advert.png"), "html", null, true);
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
        // line 201
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
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

  <div class=\"layout-container\">
    
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 221
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
        echo "
      ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 222)) {
            // line 223
            echo "        <div class=\"help\">
          ";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 227
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
        echo "
    </main>

  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gazette/templates/pages/page--node--%.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 227,  125 => 224,  122 => 223,  120 => 222,  116 => 221,  93 => 201,  71 => 183,  58 => 172,  47 => 163,  44 => 48,  39 => 42,);
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

  <div class=\"layout-container\">
    
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      {{ page.highlighted }}
      {% if page.help %}
        <div class=\"help\">
          {{ page.help }}
        </div>
      {% endif %}
      {{ page.content }}
    </main>

  </div>
", "themes/custom/gazette/templates/pages/page--node--%.html.twig", "C:\\xampp\\htdocs\\Task1\\web\\themes\\custom\\gazette\\templates\\pages\\page--node--%.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 222);
        static $filters = array("escape" => 172);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
