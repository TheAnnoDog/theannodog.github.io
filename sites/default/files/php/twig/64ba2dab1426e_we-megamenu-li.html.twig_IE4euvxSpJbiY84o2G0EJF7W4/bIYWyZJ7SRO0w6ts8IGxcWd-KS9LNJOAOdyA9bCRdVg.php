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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig */
class __TwigTemplate_036a0ef94da10cbd13b7042bc264511e extends \Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "dropdown-menu"], "method", false, false, true, 9)) {
            // line 10
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "dropdown-menu"], "method", false, false, true, 10), "addClass", [0 => "with-submenu"], "method", false, false, true, 10);
        }
        // line 12
        echo "
";
        // line 13
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "description", [], "any", false, false, true, 13))) {
            // line 14
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", [0 => "description"], "method", false, false, true, 14);
        }
        // line 16
        echo "
";
        // line 17
        if ((((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hide", [], "any", false, false, true, 17) - ($context["sub"] ?? null)) - ($context["when"] ?? null)) - twig_test_empty(($context["collapse"] ?? null)))) {
            // line 18
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeAttribute", [0 => "hide-sub-when-collapse"], "method", false, false, true, 18);
        }
        // line 20
        echo "
<li ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  ";
        // line 22
        if (twig_test_empty(($context["href"] ?? null))) {
            // line 23
            echo "    <span data-drupal-link-system-path=\"<front>\" class=\"we-megamenu-nolink\">
      ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
            echo "

      ";
            // line 26
            if (($context["content"] ?? null)) {
                // line 27
                echo "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 29
            echo "    </span>
  ";
        } else {
            // line 31
            echo "    <a class=\"we-mega-menu-li\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "description", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 31, $this->source), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-target", [], "any", false, false, true, 31))) {
                echo " target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-target", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">
      ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", true, true, true, 32) && twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 32)))) {
                // line 33
                echo "        <i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 35
            echo "
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            echo "

      ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", true, true, true, 38) && twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 38)))) {
                // line 39
                echo "        <span class=\"we-mega-menu-caption\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if (($context["content"] ?? null)) {
                // line 43
                echo "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 45
            echo "    </a>
  ";
        }
        // line 47
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  139 => 45,  135 => 43,  133 => 42,  130 => 41,  124 => 39,  122 => 38,  117 => 36,  114 => 35,  108 => 33,  106 => 32,  93 => 31,  89 => 29,  85 => 27,  83 => 26,  78 => 24,  75 => 23,  73 => 22,  69 => 21,  66 => 20,  62 => 18,  60 => 17,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  44 => 10,  42 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "set" => 10);
        static $filters = array("escape" => 21, "trim" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trim'],
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
