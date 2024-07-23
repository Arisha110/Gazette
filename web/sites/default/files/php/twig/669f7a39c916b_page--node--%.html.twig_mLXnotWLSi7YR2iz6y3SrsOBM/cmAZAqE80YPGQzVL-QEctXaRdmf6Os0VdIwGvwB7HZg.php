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

        <!-- Middle Header Area -->
        <div class=\"middle-header\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <!-- Logo Area -->
                    <div class=\"col-12 col-md-4\">
                        <div class=\"logo-area\">
                            <a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 54, $this->source) . "/themes/custom/gazette/img/core-img/logo.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
                            
                            </a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
                    <div class=\"col-12 col-md-8\">
                        <div class=\"header-advert-area\">
                            <a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source) . "/themes/custom/gazette/img/bg-img/top-advert.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"slider\">
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area -->
        <div class=\"bottom-header\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12\">
                        <div class=\"main-menu\">
                            <nav class=\"navbar navbar-expand-lg\">
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#gazetteMenu\" aria-controls=\"gazetteMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i> Menu</button>
                                <div class=\"collapse navbar-collapse\" id=\"gazetteMenu\">
                                    <ul class=\"navbar-nav mr-auto\">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"#\">Today <span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                                <a class=\"dropdown-item\" href=\"index.html\">Home</a>
                                                <a class=\"dropdown-item\" href=\"catagory.html\">Catagory</a>
                                                <a class=\"dropdown-item\" href=\"single-post.html\">Single Post</a>
                                                <a class=\"dropdown-item\" href=\"about-us.html\">About Us</a>
                                                <a class=\"dropdown-item\" href=\"contact.html\">Contact</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Politics</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Lifestyle</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Travel</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Health</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Entertainment</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">sport</a>
                                        </li>
                                    </ul>
                                    <!-- Search Form -->
                                    <div class=\"header-search-form mr-auto\">
                                        <form action=\"#\">
                                            <input type=\"search\" placeholder=\"Input your keyword then press enter...\" id=\"search\" name=\"search\">
                                            <input class=\"d-none\" type=\"submit\" value=\"submit\">
                                        </form>
                                    </div>
                                    <!-- Search btn -->
                                    <div id=\"searchbtn\">
                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <div class=\"layout-container\">
    
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
      ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 138)) {
            // line 139
            echo "        <div class=\"help\">
          ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 143
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
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
        return array (  157 => 143,  151 => 140,  148 => 139,  146 => 138,  142 => 137,  65 => 63,  53 => 54,  39 => 42,);
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

        <!-- Middle Header Area -->
        <div class=\"middle-header\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <!-- Logo Area -->
                    <div class=\"col-12 col-md-4\">
                        <div class=\"logo-area\">
                            <a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/core-img/logo.png' }}\" class=\"d-block w-100\" alt=\"slider\">
                            
                            </a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
                    <div class=\"col-12 col-md-8\">
                        <div class=\"header-advert-area\">
                            <a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{ base_path ~ '/themes/custom/gazette/img/bg-img/top-advert.png' }}\" class=\"d-block w-100\" alt=\"slider\">
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area -->
        <div class=\"bottom-header\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12\">
                        <div class=\"main-menu\">
                            <nav class=\"navbar navbar-expand-lg\">
                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#gazetteMenu\" aria-controls=\"gazetteMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"fa fa-bars\"></i> Menu</button>
                                <div class=\"collapse navbar-collapse\" id=\"gazetteMenu\">
                                    <ul class=\"navbar-nav mr-auto\">
                                        <li class=\"nav-item active\">
                                            <a class=\"nav-link\" href=\"#\">Today <span class=\"sr-only\">(current)</span></a>
                                        </li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                                <a class=\"dropdown-item\" href=\"index.html\">Home</a>
                                                <a class=\"dropdown-item\" href=\"catagory.html\">Catagory</a>
                                                <a class=\"dropdown-item\" href=\"single-post.html\">Single Post</a>
                                                <a class=\"dropdown-item\" href=\"about-us.html\">About Us</a>
                                                <a class=\"dropdown-item\" href=\"contact.html\">Contact</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Politics</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Lifestyle</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Travel</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Health</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Entertainment</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">sport</a>
                                        </li>
                                    </ul>
                                    <!-- Search Form -->
                                    <div class=\"header-search-form mr-auto\">
                                        <form action=\"#\">
                                            <input type=\"search\" placeholder=\"Input your keyword then press enter...\" id=\"search\" name=\"search\">
                                            <input class=\"d-none\" type=\"submit\" value=\"submit\">
                                        </form>
                                    </div>
                                    <!-- Search btn -->
                                    <div id=\"searchbtn\">
                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        static $tags = array("if" => 138);
        static $filters = array("escape" => 54);
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
