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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig */
class __TwigTemplate_217061063c3f7833b112d15d4ca2c3db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        $context["classes"] = [0 => "navbar-wrapper"];
        // line 72
        echo "
<div";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_attributes"] ?? null), 73, $this->source), "html", null, true);
        echo ">

  ";
        // line 75
        if (( !($context["is_disabled_header"] ?? null) &&  !($context["is_cta_header"] ?? null))) {
            // line 76
            echo "    ";
            $this->loadTemplate("@droopler_theme/includes/header.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 76)->display($context);
            // line 77
            echo "  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 79)) {
            // line 80
            echo "    <div class=\"highlighted\">
      <aside class=\"container section clearfix\" role=\"complementary\">
        ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 86
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 86)) {
            // line 87
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 95
            echo "  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 97)) {
            // line 98
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "admin_tabs", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 100
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "  </div>
  ";
        // line 125
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 125) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 125)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 125))) {
            // line 126
            echo "    <div class=\"featured-bottom\">
      <aside class=\"container clearfix\" role=\"complementary\">
        ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
        ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
        ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 134
        echo "
  ";
        // line 135
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "</div>
";
    }

    // line 87
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\"
               role=\"complementary\">
          ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
        </aside>
      </div>
    ";
    }

    // line 101
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_top_content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
      <div";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_attributes"] ?? null), 103, $this->source), "html", null, true);
        echo ">
        <div class=\"row clearfix\">
          ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
          <main";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_attributes"] ?? null), 106, $this->source), "html", null, true);
        echo ">
            <section";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_attributes"] ?? null), 107, $this->source), "html", null, true);
        echo ">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 109
        if (($context["is_cta_header"] ?? null)) {
            // line 110
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 110), "messages", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
                <div class=\"position-relative\">
                  ";
            // line 112
            $this->loadTemplate("@droopler_theme/includes/header.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 112)->display($context);
            // line 113
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "messages"), "html", null, true);
            echo "
                </div>
              ";
        } else {
            // line 116
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 118
        echo "            </section>
          </main>
        </div>
      </div>
      ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom_content", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 135
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "    ";
        $this->loadTemplate("@droopler_theme/includes/footer.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 136)->display($context);
        // line 137
        echo "  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 137,  218 => 136,  214 => 135,  208 => 122,  202 => 118,  196 => 116,  189 => 113,  187 => 112,  181 => 110,  179 => 109,  174 => 107,  170 => 106,  166 => 105,  161 => 103,  156 => 102,  152 => 101,  144 => 91,  139 => 88,  135 => 87,  130 => 138,  128 => 135,  125 => 134,  118 => 130,  114 => 129,  110 => 128,  106 => 126,  104 => 125,  101 => 124,  99 => 101,  96 => 100,  90 => 98,  88 => 97,  85 => 96,  82 => 95,  79 => 87,  76 => 86,  69 => 82,  65 => 80,  63 => 79,  60 => 78,  57 => 77,  54 => 76,  52 => 75,  47 => 73,  44 => 72,  42 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "if" => 75, "include" => 76, "block" => 87);
        static $filters = array("escape" => 73, "without" => 113);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['escape', 'without'],
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
