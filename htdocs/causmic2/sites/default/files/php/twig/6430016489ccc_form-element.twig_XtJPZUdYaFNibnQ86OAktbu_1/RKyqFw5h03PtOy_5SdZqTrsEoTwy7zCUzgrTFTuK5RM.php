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

/* @radix/form/form-element.twig */
class __TwigTemplate_a79699af0394b7088f37bdec294e631b extends Template
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
        // line 50
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), 5 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled disabled") : ("")), 7 => "form-group"];
        // line 62
        $context["description_classes"] = [0 => "description", 1 => "form-text", 2 => "text-muted", 3 => (((        // line 66
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 69
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true));
        echo ">
  ";
        // line 70
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 71
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 71, $this->source), "html", null, true));
            echo "
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 75
            echo "    <div class=\"input-group\">
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 79
            echo "    <span class=\"field-prefix input-group-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 79, $this->source), "html", null, true));
            echo "</span>
  ";
        }
        // line 81
        echo "
  ";
        // line 82
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 82))) {
            // line 83
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 83), 83, $this->source), "html", null, true));
            echo ">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 87
        echo "
  ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 88, $this->source), "html", null, true));
        echo "

  ";
        // line 90
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 91
            echo "    <span class=\"field-suffix input-group-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 91, $this->source), "html", null, true));
            echo "</span>
  ";
        }
        // line 93
        echo "
  ";
        // line 94
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 95
            echo "    </div>
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if ((($context["label_display"] ?? null) == "after")) {
            // line 99
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 99, $this->source), "html", null, true));
            echo "
  ";
        }
        // line 101
        echo "
  ";
        // line 102
        if (($context["errors"] ?? null)) {
            // line 103
            echo "    <div class=\"invalid-feedback\">
      ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 104, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 108))) {
            // line 109
            echo "    <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 109), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 109), 109, $this->source), "html", null, true));
            echo ">
      ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 110), 110, $this->source), "html", null, true));
            echo "
    </small>
  ";
        }
        // line 113
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@radix/form/form-element.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 113,  158 => 110,  153 => 109,  151 => 108,  148 => 107,  142 => 104,  139 => 103,  137 => 102,  134 => 101,  128 => 99,  126 => 98,  123 => 97,  119 => 95,  117 => 94,  114 => 93,  108 => 91,  106 => 90,  101 => 88,  98 => 87,  92 => 84,  87 => 83,  85 => 82,  82 => 81,  76 => 79,  74 => 78,  71 => 77,  67 => 75,  65 => 74,  62 => 73,  56 => 71,  54 => 70,  49 => 69,  47 => 66,  46 => 62,  44 => 57,  43 => 56,  42 => 55,  41 => 54,  40 => 53,  39 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/form/form-element.twig", "themes/radix/src/components/form/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 70);
        static $filters = array("clean_class" => 53, "escape" => 69);
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
