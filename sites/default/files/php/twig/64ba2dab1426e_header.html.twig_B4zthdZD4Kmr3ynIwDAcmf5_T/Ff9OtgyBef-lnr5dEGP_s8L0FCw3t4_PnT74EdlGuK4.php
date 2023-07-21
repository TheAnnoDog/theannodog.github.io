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

/* @droopler_theme/includes/header.html.twig */
class __TwigTemplate_8b2ef0b3a3e36acf6f693f6a01dc5f0c extends \Twig\Template
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
        $context["header_classes"] = [0 => "container", 1 => "no-padding-md", 2 => ((        // line 45
($context["is_cta_header"] ?? null)) ? ("hanging-header") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 46
($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 46)) ? ("alert-ladning-header") : (""))];
        // line 48
        echo "
<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
  <nav";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
    <div class=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 51, $this->source), " "), "html", null, true);
        echo "\">
      <div class=\"navbar-brand d-flex align-items-center\">
        ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 55
        if (($context["is_cta_header"] ?? null)) {
            // line 56
            echo "        ";
            if ( !twig_test_empty(($context["cta_button"] ?? null))) {
                // line 57
                echo "          <div class=\"d-content-cta-wrapper\">
            ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["cta_button"] ?? null), 58, $this->source)), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 61
            echo "      ";
        } else {
            // line 62
            echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-nav\" aria-controls=\"navbar-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <nav class=\"navbar navbar-expand-lg main-navbar px-0 collapse ml-auto flex-column d-lg-flex\" id=\"navbar-nav\">
          <div class=\"navbar-inner d-flex\">
            ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 67)) {
                // line 68
                echo "              <div class=\"secondary-menu-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 70
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 70)) {
                // line 71
                echo "              <div class=\"menu-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 73
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "lang_menu", [], "any", false, false, true, 73)) {
                // line 74
                echo "              <div class=\"lang-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "lang_menu", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 76
            echo "          </div>
        </nav>
      ";
        }
        // line 79
        echo "    </div>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "@droopler_theme/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 79,  114 => 76,  108 => 74,  105 => 73,  99 => 71,  96 => 70,  90 => 68,  88 => 67,  81 => 62,  78 => 61,  72 => 58,  69 => 57,  66 => 56,  64 => 55,  59 => 53,  54 => 51,  50 => 50,  46 => 49,  43 => 48,  41 => 46,  40 => 45,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "@droopler_theme/includes/header.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 55);
        static $filters = array("t" => 49, "escape" => 50, "join" => 51, "render" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'join', 'render'],
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
