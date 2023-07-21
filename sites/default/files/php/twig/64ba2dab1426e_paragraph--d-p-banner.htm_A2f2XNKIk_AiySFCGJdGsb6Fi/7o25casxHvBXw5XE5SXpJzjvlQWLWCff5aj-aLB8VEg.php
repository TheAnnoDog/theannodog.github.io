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

/* profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig */
class __TwigTemplate_f1b385f6ea82990f40dc80252eb48c94 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'background' => [$this, 'block_background'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => "d-p-banner", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : (""))];
        // line 47
        echo "
";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "hasClass", [0 => "half-transparent"], "method", false, false, true, 48)) {
            // line 49
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 49, $this->source), [0 => "content-moved-inside"]);
        }
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "  <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 53, $this->source), "html", null, true);
        echo ">
    <div";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo ">
      ";
        // line 55
        $this->displayBlock('background', $context, $blocks);
        // line 60
        echo "      <div class=\"content-wrapper\">
        <div class=\"content content-inside-wrapper container\">
          ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "        </div>
      </div>
    </div>
  </section>
";
    }

    // line 55
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig", 56)->display(twig_to_array(["content" => twig_get_attribute($this->env, $this->source,         // line 57
($context["content"] ?? null), "group_d_banner_background", [], "any", false, false, true, 57)]));
        // line 59
        echo "      ";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_banner_content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 63,  102 => 62,  98 => 59,  96 => 57,  94 => 56,  90 => 55,  82 => 65,  80 => 62,  76 => 60,  74 => 55,  70 => 54,  65 => 53,  58 => 52,  55 => 51,  51 => 49,  49 => 48,  46 => 47,  44 => 45,  43 => 44,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/modules/custom/d_p_banner/templates/paragraph--d-p-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 48, "block" => 52, "include" => 56);
        static $filters = array("clean_class" => 44, "merge" => 49, "escape" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'merge', 'escape'],
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
