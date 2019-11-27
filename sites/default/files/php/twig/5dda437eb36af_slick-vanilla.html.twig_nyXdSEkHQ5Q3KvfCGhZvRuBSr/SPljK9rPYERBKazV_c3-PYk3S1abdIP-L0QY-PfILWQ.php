<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/slick/templates/slick-vanilla.html.twig */
class __TwigTemplate_9a28ef5ef6c302abf3b9c0622bc1319755b39da98c21b27d47209398c1fe9ba4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_vanilla' => [$this, 'block_slick_vanilla'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "block" => 25];
        $filters = ["escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        $context["classes"] = [0 => "slick__slide", 1 => "slide", 2 => ("slide--" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["delta"] ?? null)))];
        // line 25
        $this->displayBlock('slick_vanilla', $context, $blocks);
    }

    public function block_slick_vanilla($context, array $blocks = [])
    {
        // line 26
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-vanilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  65 => 26,  59 => 25,  57 => 22,  56 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the slick-vanilla item template.
 *
 * This is a vanilla alternative for slick-slide.html.twig where everything is
 * dumped as is into 'item'. Think of it as a raw individual item output.
 * Choosing vanilla means you are on your own, and want a more controlled item.
 *
 * Available variables:
 * - attributes: An array of attributes to apply to the element.
 * - item: A renderable array of the slide content.
 * - settings: An array containing the given settings.
 *
 * @see template_preprocess_slick_vanilla()
 */
#}
{%
  set classes = [
    'slick__slide',
    'slide',
    'slide--' ~ delta
  ]
%}
{% block slick_vanilla %}
  <div{{ attributes.addClass(classes) }}>
    {{ item }}
  </div>
{% endblock %}
", "modules/contrib/slick/templates/slick-vanilla.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/modules/contrib/slick/templates/slick-vanilla.html.twig");
    }
}
