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

/* themes/ui_suite_bootstrap/templates/overrides/system/pager.html.twig */
class __TwigTemplate_2da5aa601f1f6dd94ffdd5771fecb592 extends Template
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
        // line 35
        if (($context["items"] ?? null)) {
            // line 36
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\ui_patterns\Template\TwigExtension']->renderPattern("pagination", ["items" =>             // line 37
($context["items"] ?? null), "current" =>             // line 38
($context["current"] ?? null)]), "html", null, true));
            // line 39
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/ui_suite_bootstrap/templates/overrides/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 39,  44 => 38,  43 => 37,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ui_suite_bootstrap/templates/overrides/system/pager.html.twig", "C:\\xampp\\htdocs\\causmic2\\themes\\ui_suite_bootstrap\\templates\\overrides\\system\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 36);
        static $functions = array("pattern" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['pattern']
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
