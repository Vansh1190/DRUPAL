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

/* themes/ui_suite_bootstrap/templates/overrides/input/input.html.twig */
class __TwigTemplate_dd019b64fa21464d88992ae0e786856c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        ob_start(function () { return ''; });
        // line 23
        echo "  ";
        $this->displayBlock('input', $context, $blocks);
        // line 26
        echo "
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 27, $this->source), "html", null, true);
        echo "
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
    }

    // line 23
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 24, $this->source), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "themes/ui_suite_bootstrap/templates/overrides/input/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  57 => 23,  53 => 22,  48 => 27,  45 => 26,  42 => 23,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ui_suite_bootstrap/templates/overrides/input/input.html.twig", "C:\\xampp\\htdocs\\causmic2\\themes\\ui_suite_bootstrap\\templates\\overrides\\input\\input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 22, "block" => 23);
        static $filters = array("escape" => 27, "spaceless" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'block'],
                ['escape', 'spaceless'],
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
