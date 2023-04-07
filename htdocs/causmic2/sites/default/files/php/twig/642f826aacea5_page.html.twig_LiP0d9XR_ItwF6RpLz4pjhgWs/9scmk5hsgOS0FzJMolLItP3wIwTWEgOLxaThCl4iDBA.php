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

/* themes/ui_suite_bootstrap/templates/overrides/system/page.html.twig */
class __TwigTemplate_5b9b0c480e27f1af1d3cc8b2a775c0fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 48), "fluid_container", [], "any", false, false, true, 48)) ? ("container-fluid") : ("container"));
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 50) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 50))) {
            // line 51
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 68
        echo "
";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 136)) {
            // line 137
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 51
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 52, $this->source), "html", null, true);
        echo "\">
      ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("navbar", ["placement" => "default", "toggler_position" => "end", "toggle_action" => "collapse", "navigation" => twig_get_attribute($this->env, $this->source,         // line 57
($context["page"] ?? null), "navigation", [], "any", false, false, true, 57), "navigation_collapsible" => twig_get_attribute($this->env, $this->source,         // line 58
($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 58), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => [0 => "bg-light"]])], "expand_lg"), "html", null, true);
        // line 64
        echo "
  </div>
  ";
    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "  <div role=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 71, $this->source), "html", null, true);
        echo "\">
    <div class=\"row\">

      ";
        // line 75
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 75)) {
            // line 76
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 81
            echo "      ";
        }
        // line 82
        echo "
      ";
        // line 84
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 84)) {
            // line 85
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 90
            echo "      ";
        }
        // line 91
        echo "
      ";
        // line 93
        echo "      ";
        // line 94
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 95
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 96
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 96)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 97
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 98
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98)))) ? ("col-sm-12") : (""))];
        // line 101
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
        echo ">

        ";
        // line 104
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 104)) {
            // line 105
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 108
            echo "        ";
        }
        // line 109
        echo "
        ";
        // line 111
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 111)) {
            // line 112
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 115
            echo "        ";
        }
        // line 116
        echo "
        ";
        // line 118
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "      </section>

      ";
        // line 125
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125)) {
            // line 126
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 131
            echo "      ";
        }
        // line 132
        echo "    </div>
  </div>
";
    }

    // line 76
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "          <div class=\"col-sm-12 border-bottom mb-4 pb-1\" role=\"heading\">
            ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 85
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "          <aside class=\"col-sm-3 gx-0\" role=\"complementary\">
            ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 105
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 112
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 118
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "          <a id=\"main-content\"></a>
          ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 126
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "          <aside class=\"col-sm-3 gx-0\" role=\"complementary\">
            ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 137
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "    <footer class=\"footer border-top mt-3 pt-3 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 138, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/ui_suite_bootstrap/templates/overrides/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 139,  267 => 138,  263 => 137,  256 => 128,  253 => 127,  249 => 126,  243 => 120,  240 => 119,  236 => 118,  229 => 113,  225 => 112,  218 => 106,  214 => 105,  207 => 87,  204 => 86,  200 => 85,  193 => 78,  190 => 77,  186 => 76,  180 => 132,  177 => 131,  174 => 126,  171 => 125,  167 => 122,  164 => 118,  161 => 116,  158 => 115,  155 => 112,  152 => 111,  149 => 109,  146 => 108,  143 => 105,  140 => 104,  134 => 101,  132 => 98,  131 => 97,  130 => 96,  129 => 95,  128 => 94,  126 => 93,  123 => 91,  120 => 90,  117 => 85,  114 => 84,  111 => 82,  108 => 81,  105 => 76,  102 => 75,  95 => 71,  91 => 70,  85 => 64,  83 => 58,  82 => 57,  81 => 53,  76 => 52,  72 => 51,  66 => 137,  64 => 136,  61 => 135,  59 => 70,  56 => 68,  52 => 51,  50 => 50,  48 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ui_suite_bootstrap/templates/overrides/system/page.html.twig", "C:\\xampp\\htdocs\\causmic2\\themes\\ui_suite_bootstrap\\templates\\overrides\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 50, "block" => 51);
        static $filters = array("escape" => 52);
        static $functions = array("pattern" => 53, "create_attribute" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                ['pattern', 'create_attribute']
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
