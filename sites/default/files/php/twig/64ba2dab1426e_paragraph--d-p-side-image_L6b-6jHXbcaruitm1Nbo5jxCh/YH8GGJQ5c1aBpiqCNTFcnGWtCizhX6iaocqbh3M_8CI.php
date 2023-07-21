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

/* profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig */
class __TwigTemplate_448b98c37e22bcf047e91988abd4aa1c extends \Twig\Template
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
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => "d-p-side-image-banner", 2 => "content-moved-inside", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45), 45, $this->source))), 4 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 46, $this->source)))) : (""))];
        // line 48
        $context["paragraph_classes"] = [0 => "d-image", 1 => "h-100"];
        // line 52
        $context["side_image_banner_wrapper_classes"] = [0 => "d-p-side-image-banner-wrapper", 1 => "clearfix", 2 => "position-relative"];
        // line 57
        $context["content_side_classes"] = [0 => "content-inside-wrapper"];
        // line 60
        $context["content_side_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["content_side_classes"] ?? null), 60, $this->source), [0 => ($context["text_class"] ?? null)]);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "<section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 63, $this->source), "html", null, true);
        echo ">
  <div";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo ">
    <div ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["d_p_side_image_attributes"] ?? null), "addClass", [0 => ($context["side_image_banner_wrapper_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">
      <div ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null), 1 => ($context["image_class"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo ">
        ";
        // line 67
        $this->displayBlock('background', $context, $blocks);
        // line 72
        echo "      </div>
      <div class=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["content_side_classes"] ?? null), 73, $this->source), " "), "html", null, true);
        echo "\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"container-half\">
              ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
              ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_cta", [], "any", false, false, true, 78)) {
            // line 79
            echo "                <div class=\"mt-4\">
                  ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_side_image_cta", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 83
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    // line 67
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "          ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", 68)->display(twig_to_array(["content" => twig_get_attribute($this->env, $this->source,         // line 69
($context["content"] ?? null), "group_d_side_image_background", [], "any", false, false, true, 69)]));
        // line 71
        echo "        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 71,  124 => 69,  122 => 68,  118 => 67,  107 => 83,  101 => 80,  98 => 79,  96 => 78,  92 => 77,  85 => 73,  82 => 72,  80 => 67,  76 => 66,  72 => 65,  68 => 64,  63 => 63,  56 => 62,  53 => 61,  51 => 60,  49 => 57,  47 => 52,  45 => 48,  43 => 46,  42 => 45,  41 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "block" => 62, "if" => 78, "include" => 68);
        static $filters = array("clean_class" => 45, "merge" => 60, "escape" => 63, "join" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['clean_class', 'merge', 'escape', 'join'],
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
