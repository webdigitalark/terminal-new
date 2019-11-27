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

/* modules/contrib/slick/templates/slick.html.twig */
class __TwigTemplate_43e13cec92981a745409524b528c0b6994d47851f5b290f60c2e437432b3bff9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 31, "if" => 58, "block" => 62, "for" => 63];
        $filters = ["join" => 36, "clean_class" => 37, "escape" => 57, "raw" => 72, "striptags" => 72];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['join', 'clean_class', 'escape', 'raw', 'striptags'],
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
        // line 31
        $context["classes"] = [0 => "slick", 1 => (($this->getAttribute(        // line 33
($context["settings"] ?? null), "unslick", [])) ? ("unslick") : ("")), 2 => ((((        // line 34
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "blazy", []))) ? ("blazy") : ("")), 3 => (($this->getAttribute(        // line 35
($context["settings"] ?? null), "vertical", [])) ? ("slick--vertical") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 36
($context["settings"] ?? null), "attributes", []), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "attributes", []), "class", [])), " ")) : ("")), 5 => (($this->getAttribute(        // line 37
($context["settings"] ?? null), "skin", [])) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 6 => ((twig_in_filter("boxed", $this->getAttribute(        // line 38
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--boxed") : ("")), 7 => ((twig_in_filter("split", $this->getAttribute(        // line 39
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--split") : ("")), 8 => (($this->getAttribute(        // line 40
($context["settings"] ?? null), "optionset", [])) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "optionset", []))))) : ("")), 9 => ((        // line 41
(isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) ? ("slick--has-arrow-down") : ("")), 10 => (($this->getAttribute(        // line 42
($context["settings"] ?? null), "asNavFor", [])) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null))))) : ("")), 11 => ((($this->getAttribute(        // line 43
($context["settings"] ?? null), "slidesToShow", []) > 1)) ? ("slick--multiple-view") : ("")), 12 => ((($this->getAttribute(        // line 44
($context["settings"] ?? null), "count", []) <= $this->getAttribute(($context["settings"] ?? null), "slidesToShow", []))) ? ("slick--less") : ("")), 13 => ((((        // line 45
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "media_switch", []))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 14 => ((((        // line 46
($context["display"] ?? null) == "thumbnail") && $this->getAttribute(($context["settings"] ?? null), "thumbnail_caption", []))) ? ("slick--has-caption") : (""))];
        // line 50
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => (($this->getAttribute(        // line 52
($context["settings"] ?? null), "vertical", [])) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 53
($context["settings"] ?? null), "skin_arrows", [])) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_arrows", []))))) : (""))];
        // line 56
        echo "
<div";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 58
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 59
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('slick_content', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 69
            echo "    </div>
    ";
            // line 70
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 82
            echo "  ";
        }
        // line 83
        echo "</div>
";
    }

    // line 62
    public function block_slick_content($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  ";
    }

    // line 70
    public function block_slick_arrow($context, array $blocks = [])
    {
        // line 71
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
        ";
        // line 73
        if ((isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) {
            // line 74
            echo "          <button";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method"), "setAttribute", [0 => "type", 1 => "button"], "method"), "setAttribute", [0 => "data-target", 1 => $this->getAttribute(            // line 76
($context["settings"] ?? null), "downArrowTarget", [])], "method"), "setAttribute", [0 => "data-offset", 1 => $this->getAttribute(            // line 77
($context["settings"] ?? null), "downArrowOffset", [])], "method")), "html", null, true);
            echo "></button>
        ";
        }
        // line 79
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", [])), "<a><em><span><strong><button><div>"));
        echo "
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 79,  153 => 77,  152 => 76,  150 => 74,  148 => 73,  144 => 72,  139 => 71,  136 => 70,  132 => 66,  123 => 64,  118 => 63,  115 => 62,  110 => 83,  107 => 82,  105 => 70,  102 => 69,  100 => 68,  97 => 67,  95 => 62,  92 => 61,  86 => 59,  84 => 58,  80 => 57,  77 => 56,  75 => 53,  74 => 52,  73 => 50,  71 => 46,  70 => 45,  69 => 44,  68 => 43,  67 => 42,  66 => 41,  65 => 40,  64 => 39,  63 => 38,  62 => 37,  61 => 36,  60 => 35,  59 => 34,  58 => 33,  57 => 31,);
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
 * Default theme implementation for the Slick carousel template.
 *
 * This template holds 3 displays: main, thumbnail and overlay slicks in one.
 * Arrows are enforced, but toggled by JS accordingly. This allows responsive
 * object to enable and disable it as needed without losing context.
 *
 * Available variables:
 * - items: The array of items containing main image/video/audio, optional
 *     image/video/audio overlay and captions, and optional thumbnail
 *     texts/images.
 * - settings: A cherry-picked settings that mostly defines the slide HTML or
 *     layout, and none of JS settings/options which are defined at data-slick.
 * - attributes: The array of attributes to hold the main container classes, id.
 * - content_attributes: The array of attributes to hold optional RTL, id and
 *     data-slick containing JSON object aka JS settings the Slick expects to
 *     override default options. We don't store these JS settings in the normal
 *     <head>, but inline within data-slick attribute instead.
 *
 * Debug:
 * @see https://www.drupal.org/node/1906780
 * @see https://www.drupal.org/node/1903374
 * Use Kint: {{ kint(variable) }}
 * Dump all available variables and their contents: {{ dump() }}
 * Dump only the available variable keys: {{ dump(_context|keys) }}
 */
#}
{%
  set classes = [
    'slick',
    settings.unslick ? 'unslick',
    display == 'main' and settings.blazy ? 'blazy',
    settings.vertical ? 'slick--vertical',
    settings.attributes.class ? settings.attributes.class|join(' '),
    settings.skin ? 'slick--skin--' ~ settings.skin|clean_class,
    'boxed' in settings.skin ? 'slick--skin--boxed',
    'split' in settings.skin ? 'slick--skin--split',
    settings.optionset ? 'slick--optionset--' ~ settings.optionset|clean_class,
    arrow_down_attributes is defined ? 'slick--has-arrow-down',
    settings.asNavFor ? 'slick--' ~ display|clean_class,
    settings.slidesToShow > 1 ? 'slick--multiple-view',
    settings.count <= settings.slidesToShow ? 'slick--less',
    display == 'main' and settings.media_switch ? 'slick--' ~ settings.media_switch|clean_class,
    display == 'thumbnail' and settings.thumbnail_caption ? 'slick--has-caption'
  ]
%}
{%
  set arrow_classes = [
    'slick__arrow',
    settings.vertical ? 'slick__arrow--v',
    settings.skin_arrows ? 'slick__arrow--' ~ settings.skin_arrows|clean_class
  ]
%}

<div{{ attributes.addClass(classes) }}>
  {% if not settings.unslick %}
    <div{{ content_attributes.addClass('slick__slider') }}>
  {% endif %}

  {% block slick_content %}
    {% for item in items %}
      {{ item }}
    {% endfor %}
  {% endblock %}

  {% if not settings.unslick %}
    </div>
    {% block slick_arrow %}
      <nav{{ arrow_attributes.addClass(arrow_classes) }}>
        {{ settings.prevArrow|striptags('<a><em><span><strong><button><div>')|raw }}
        {% if arrow_down_attributes is defined %}
          <button{{ arrow_down_attributes.addClass('slick-down')
            .setAttribute('type', 'button')
            .setAttribute('data-target', settings.downArrowTarget)
            .setAttribute('data-offset', settings.downArrowOffset) }}></button>
        {% endif %}
        {{ settings.nextArrow|striptags('<a><em><span><strong><button><div>')|raw }}
      </nav>
    {% endblock %}
  {% endif %}
</div>
", "modules/contrib/slick/templates/slick.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/modules/contrib/slick/templates/slick.html.twig");
    }
}
