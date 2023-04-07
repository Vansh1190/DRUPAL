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

/* themes/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig */
class __TwigTemplate_4a659a1018b5c6ebe52de06df09aa8bf extends Template
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
        // line 51
        $context["classes"] = [0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["type"] ?? null), 54, $this->source))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), 6 => ((!twig_in_filter(        // line 58
($context["title_display"] ?? null), [0 => "after", 1 => "before", 2 => "inline"])) ? ("form-no-label") : ("")), 7 => (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 60
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 64
        $context["description_classes"] = [0 => "description", 1 => "form-text", 2 => (((        // line 67
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 70
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo ">
  ";
        // line 71
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible", 2 => "inline"])) {
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 72, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (($context["inner_wrapper"] ?? null)) {
            // line 76
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["inner_wrapper_attributes"] ?? null), 76, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (($context["prefix"] ?? null)) {
            // line 80
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 80, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 83))) {
            // line 84
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 84), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if (($context["input_group"] ?? null)) {
            // line 90
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_attributes"] ?? null), 90, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if (($context["input_group_before"] ?? null)) {
            // line 94
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_before"] ?? null), 94, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if ((($context["label_display"] ?? null) == "floating")) {
            // line 98
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["floating_label_attributes"] ?? null), 98, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 100
        echo "
  ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 101, $this->source), "html", null, true);
        echo "

  ";
        // line 103
        if ((($context["label_display"] ?? null) == "floating")) {
            // line 104
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 104, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        if (($context["input_group_after"] ?? null)) {
            // line 109
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["input_group_after"] ?? null), 109, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 111
        echo "
  ";
        // line 112
        if (($context["input_group"] ?? null)) {
            // line 113
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 114
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors_attributes"] ?? null), 114, $this->source), "html", null, true);
                echo ">
        ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 115, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 118
            echo "    </div>
  ";
        }
        // line 120
        echo "
  ";
        // line 121
        if (($context["suffix"] ?? null)) {
            // line 122
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 122, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 124
        echo "
  ";
        // line 125
        if ((($context["label_display"] ?? null) == "after")) {
            // line 126
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 126, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 128
        echo "
  ";
        // line 129
        if (( !($context["input_group"] ?? null) && ($context["errors"] ?? null))) {
            // line 130
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors_attributes"] ?? null), 130, $this->source), "html", null, true);
            echo ">
      ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 131, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 134
        echo "
  ";
        // line 135
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 135))) {
            // line 136
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 136), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 136), 136, $this->source), "html", null, true);
            echo ">
      ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 140
        echo "
  ";
        // line 141
        if (($context["inner_wrapper"] ?? null)) {
            // line 142
            echo "    </div>
  ";
        }
        // line 144
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 144,  245 => 142,  243 => 141,  240 => 140,  234 => 137,  229 => 136,  227 => 135,  224 => 134,  218 => 131,  213 => 130,  211 => 129,  208 => 128,  202 => 126,  200 => 125,  197 => 124,  191 => 122,  189 => 121,  186 => 120,  182 => 118,  176 => 115,  171 => 114,  168 => 113,  166 => 112,  163 => 111,  157 => 109,  155 => 108,  152 => 107,  145 => 104,  143 => 103,  138 => 101,  135 => 100,  129 => 98,  127 => 97,  124 => 96,  118 => 94,  116 => 93,  113 => 92,  107 => 90,  105 => 89,  102 => 88,  96 => 85,  91 => 84,  89 => 83,  86 => 82,  80 => 80,  78 => 79,  75 => 78,  69 => 76,  67 => 75,  64 => 74,  58 => 72,  56 => 71,  51 => 70,  49 => 67,  48 => 64,  46 => 60,  45 => 59,  44 => 58,  43 => 57,  42 => 56,  41 => 55,  40 => 54,  39 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ui_suite_bootstrap/templates/overrides/input/form-element.html.twig", "C:\\xampp\\htdocs\\causmic2\\themes\\ui_suite_bootstrap\\templates\\overrides\\input\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "if" => 71);
        static $filters = array("clean_class" => 54, "escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
