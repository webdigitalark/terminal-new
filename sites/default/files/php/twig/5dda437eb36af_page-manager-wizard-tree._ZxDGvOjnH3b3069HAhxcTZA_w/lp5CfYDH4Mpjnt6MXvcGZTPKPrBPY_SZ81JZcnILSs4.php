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

/* modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig */
class __TwigTemplate_d82046b9335152a04ff1de3a52662641c1555b1b5950f0080cd37fd48152d0d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 20, "macro" => 28, "if" => 30, "for" => 33, "set" => 35];
        $filters = ["escape" => 18];
        $functions = ["attach_library" => 18, "link" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['attach_library', 'link']
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
        // line 17
        echo "
";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("page_manager_ui/page_variants"), "html", null, true);
        echo "

";
        // line 20
        $context["page_manager"] = $this;
        // line 21
        echo "
";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["page_manager"]->getwizard_tree(($context["tree"] ?? null), ($context["step"] ?? null), 0));
        echo "

";
    }

    // line 28
    public function getwizard_tree($__items__ = null, $__step__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "step" => $__step__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "  ";
            $context["page_manager"] = $this;
            // line 30
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 31
                echo "    <ul class=\"page__section__";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)), "html", null, true);
                echo "\">

    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "      ";
                    if ((($context["step"] ?? null) === $this->getAttribute($context["item"], "step", []))) {
                        // line 35
                        echo "        ";
                        $context["active_class"] = " current_variant";
                        // line 36
                        echo "      ";
                    } else {
                        // line 37
                        echo "        ";
                        $context["active_class"] = "";
                        // line 38
                        echo "      ";
                    }
                    // line 39
                    echo "      <li class=\"page__section_item__";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                    echo "\">
        <label class=\"page__section__label\">
          ";
                    // line 41
                    if ($this->getAttribute($context["item"], "url", [])) {
                        // line 42
                        echo "            ";
                        if ((($context["step"] ?? null) === $this->getAttribute($context["item"], "step", []))) {
                            // line 43
                            echo "              <strong>";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                            echo "</strong>
            ";
                        } else {
                            // line 45
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                            echo "
            ";
                        }
                        // line 47
                        echo "          ";
                    } else {
                        // line 48
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "
          ";
                    }
                    // line 50
                    echo "        </label>
        ";
                    // line 51
                    if ($this->getAttribute($context["item"], "children", [])) {
                        // line 52
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["page_manager"]->getwizard_tree($this->getAttribute($context["item"], "children", []), ($context["step"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 54
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  164 => 54,  158 => 52,  156 => 51,  153 => 50,  147 => 48,  144 => 47,  138 => 45,  132 => 43,  129 => 42,  127 => 41,  120 => 39,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  101 => 33,  95 => 31,  92 => 30,  89 => 29,  75 => 28,  68 => 26,  65 => 21,  63 => 20,  58 => 18,  55 => 17,);
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
 * Default theme implementation to display wizard tree.
 *
 * Available variables:
 * - step: The current step name.
 * - tree: A nested list of menu items. Each menu item contains:
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - children: The menu item child items.
 *   - step: The name of the step.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('page_manager_ui/page_variants') }}

{% import _self as page_manager %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ page_manager.wizard_tree(tree, step, 0) }}

{% macro wizard_tree(items, step, menu_level) %}
  {% import _self as page_manager %}
  {% if items %}
    <ul class=\"page__section__{{ menu_level }}\">

    {% for item in items %}
      {% if step is same as(item.step) %}
        {% set active_class = \" current_variant\" %}
      {% else %}
        {% set active_class = \"\" %}
      {% endif %}
      <li class=\"page__section_item__{{ menu_level }}{{ active_class }}\">
        <label class=\"page__section__label\">
          {% if item.url %}
            {% if step is same as(item.step) %}
              <strong>{{ link(item.title, item.url) }}</strong>
            {% else %}
              {{ link(item.title, item.url) }}
            {% endif %}
          {% else %}
            {{ item.title }}
          {% endif %}
        </label>
        {% if item.children %}
          {{ page_manager.wizard_tree(item.children, step, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-tree.html.twig");
    }
}
