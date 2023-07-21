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

/* @droopler_theme/includes/footer.html.twig */
class __TwigTemplate_2e89ad6821d4bd88b234c97688497533 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<footer class=\"site-footer\">
  ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "  <div class=\"bottom-footer\">
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_main", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
  </div>
</footer>
";
    }

    // line 38
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <div class=\"container\">
      ";
        // line 40
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 40) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 40)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 40)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 40))) {
            // line 41
            echo "        <div class=\"site-footer-blocks row\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filled_regions"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["region"]) {
                // line 43
                echo "            ";
                if ((twig_length_filter($this->env, ($context["filled_regions"] ?? null)) == ($context["i"] + 1))) {
                    // line 44
                    echo "              ";
                    $context["classes"] = (((($context["i"] == 0) || ($context["i"] % 2 != 0))) ? ("col") : ([0 => "col-6", 1 => "col-xl"]));
                    // line 45
                    echo "            ";
                } else {
                    // line 46
                    echo "              ";
                    $context["classes"] = [0 => "col-6", 1 => "col-xl-2"];
                    // line 47
                    echo "            ";
                }
                // line 48
                echo "
            ";
                // line 49
                $context["footer_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 50
                echo "            <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">
              ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["region"]] ?? null) : null), 51, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </div>
      ";
        }
        // line 56
        echo "    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@droopler_theme/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  106 => 54,  97 => 51,  92 => 50,  90 => 49,  87 => 48,  84 => 47,  81 => 46,  78 => 45,  75 => 44,  72 => 43,  68 => 42,  65 => 41,  63 => 40,  60 => 39,  56 => 38,  48 => 59,  45 => 58,  43 => 38,  40 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "@droopler_theme/includes/footer.html.twig", "/var/www/html/site/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/includes/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 38, "if" => 40, "for" => 42, "set" => 44);
        static $filters = array("escape" => 59, "length" => 43);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'length'],
                ['create_attribute']
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
