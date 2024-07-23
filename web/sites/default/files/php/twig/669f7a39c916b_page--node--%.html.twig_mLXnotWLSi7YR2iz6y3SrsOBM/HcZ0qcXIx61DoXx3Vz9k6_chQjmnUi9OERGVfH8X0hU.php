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
   

  <header class=\"content-header clearfix\">
  <div class=\"bottom-header\">
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
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
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
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
      ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 77)) {
            // line 78
            echo "        <div class=\"help\">
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 82
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
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
        return array (  93 => 82,  87 => 79,  84 => 78,  82 => 77,  78 => 76,  55 => 56,  39 => 42,);
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

   

  <header class=\"content-header clearfix\">
  <div class=\"bottom-header\">
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
        static $tags = array("if" => 77);
        static $filters = array("escape" => 56);
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
