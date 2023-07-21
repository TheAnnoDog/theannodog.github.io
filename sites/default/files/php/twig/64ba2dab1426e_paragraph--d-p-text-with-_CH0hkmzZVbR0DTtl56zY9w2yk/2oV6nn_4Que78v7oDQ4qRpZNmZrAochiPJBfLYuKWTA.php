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

/* profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig */
class __TwigTemplate_c1e1c1e6983adb84bda0411d8325220b extends \Twig\Template
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
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 43
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 43), 43, $this->source))), 2 => ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 44, $this->source)))) : (""))];
        // line 46
        $context["paragraph_classes"] = [0 => "d-p-text-with-bckg"];
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 51, $this->source), "html", null, true);
        echo ">
    <div";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
      <div ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo ">
        ";
        // line 54
        $this->displayBlock('background', $context, $blocks);
        // line 59
        echo "        <div class=\"content-wrapper\">
          <div class=\"content container\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 54
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "          ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig", 55)->display(twig_to_array(["content" => twig_get_attribute($this->env, $this->source,         // line 56
($context["content"] ?? null), "group_d_block_background", [], "any", false, false, true, 56)]));
        // line 58
        echo "        ";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
              ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 63)) {
            // line 64
            echo "                <div class=\"mt-4\">
                  ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_cta", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 68
        echo "            ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 68,  114 => 65,  111 => 64,  109 => 63,  104 => 62,  100 => 61,  96 => 58,  94 => 56,  92 => 55,  88 => 54,  79 => 69,  77 => 61,  73 => 59,  71 => 54,  67 => 53,  63 => 52,  58 => 51,  51 => 50,  48 => 49,  46 => 46,  44 => 44,  43 => 43,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/modules/custom/d_p_text_with_bckg/templates/paragraph--d-p-text-with-bckg.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "block" => 50, "include" => 55, "if" => 63);
        static $filters = array("clean_class" => 43, "escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include', 'if'],
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
