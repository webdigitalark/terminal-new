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

/* block.html.twig */
class __TwigTemplate_da45d80615862b2e5c1c467b0d933c9edccd017926a8e341a135307686826fff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 45, "set" => 47, "block" => 66];
        $filters = ["clean_class" => 49, "escape" => 53, "length" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['clean_class', 'escape', 'length'],
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
        // line 45
        if (($this->getAttribute(($context["block"] ?? null), "delta", []) != "main")) {
            // line 47
            $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 49
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 50
($context["plugin_id"] ?? null))))];
            // line 53
            echo "<section";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 57
        if (($context["label"] ?? null)) {
            // line 58
            echo "    <h2 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
  ";
        }
        // line 60
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 62
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 63
            echo "  <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
            echo ">
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 71
            echo "  </div>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if (($this->getAttribute(($context["block"] ?? null), "delta", []) != "main")) {
            // line 75
            echo "</section>
";
        }
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        // line 67
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 67,  124 => 66,  118 => 75,  116 => 74,  113 => 73,  109 => 71,  107 => 70,  104 => 69,  102 => 66,  99 => 65,  93 => 63,  91 => 62,  85 => 60,  77 => 58,  75 => 57,  71 => 56,  68 => 55,  62 => 53,  60 => 50,  59 => 49,  58 => 47,  56 => 45,);
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
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - block.subject: Block title.
 * - content: Block content.
 * - block.module: Module that generated the block.
 * - block.delta: An ID for the block, unique within each module.
 * - block.region: The block region embedding the current block.
 * - classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., \"theming hook\".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be \"block-user\".
 * - title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable classes.
 * - block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - zebra: Same output as block_zebra but independent of any block region.
 * - block_id: Counter dependent on each block region.
 * - id: Same output as block_id but independent of any block region.
 * - is_front: Flags true when presented in the front page.
 * - logged_in: Flags true when the current user is a logged-in member.
 * - is_admin: Flags true when the current user is an administrator.
 * - block_html_id: A valid HTML ID and guaranteed unique.
 * - content_attributes: Raw HTML attributes for block content.
 * - title_attributes: Raw HTML attributes for the block title tag.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
#}
{% if block.delta != 'main' %}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<section{{ attributes.addClass(classes) }}>
  {% endif %}

  {{ title_prefix }}
  {% if label %}
    <h2 {{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}

  {% if content_attributes|length %}
  <div {{ content_attributes }}>
    {% endif %}

    {% block content %}
      {{ content }}
    {% endblock %}

    {% if content_attributes|length %}
  </div>
  {% endif %}

  {% if block.delta != 'main' %}
</section>
{% endif %}
", "block.html.twig", "themes/contrib/zurb_foundation/templates/block.html.twig");
    }
}
