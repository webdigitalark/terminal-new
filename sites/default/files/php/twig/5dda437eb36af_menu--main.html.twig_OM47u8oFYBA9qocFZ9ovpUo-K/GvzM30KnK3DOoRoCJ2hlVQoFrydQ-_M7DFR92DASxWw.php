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

/* themes/contrib/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_866ad4311bafdcf2630f7aed27ae989460fcca63d8076194f225c650ddedc59e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 16, "if" => 23, "macro" => 56, "for" => 72, "set" => 75];
        $filters = ["escape" => 27];
        $functions = ["link" => 84];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
                ['escape'],
                ['link']
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
        // line 16
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        if (($context["top_bar"] ?? null)) {
            // line 24
            echo "  ";
            if (($context["top_bar_sticky"] ?? null)) {
                // line 25
                echo "  <div id=\"top-bar-sticky-container\" data-sticky-container>
  ";
            }
            // line 27
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_attributes"] ?? null)), "html", null, true);
            echo ">
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_menu_text"] ?? null)), "html", null, true);
            echo "</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, 1));
            echo "
          ";
            // line 40
            if (($context["top_bar_search"] ?? null)) {
                // line 41
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_search"] ?? null)), "html", null, true);
                echo "
          ";
            }
            // line 43
            echo "          ";
            if (($context["top_bar_languageswitcher"] ?? null)) {
                // line 44
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_bar_languageswitcher"] ?? null)), "html", null, true);
                echo "
          ";
            }
            // line 46
            echo "        </div>
      </nav>
    </div>
  ";
            // line 49
            if (($context["top_bar_sticky"] ?? null)) {
                // line 50
                echo "  </div>
  ";
            }
        } else {
            // line 53
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, 0));
            echo "
";
        }
        // line 55
        echo "
";
    }

    // line 56
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 57
            echo "  ";
            $context["menus"] = $this;
            // line 58
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 59
                echo "    ";
                if (($context["top_bar"] ?? null)) {
                    // line 60
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 61
                        echo "        <ul";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "vertical", 2 => "medium-horizontal"], "method"), "setAttribute", [0 => "data-responsive-menu", 1 => "drilldown medium-dropdown"], "method")), "html", null, true);
                        echo ">
      ";
                    } else {
                        // line 63
                        echo "        <ul class=\"submenu menu vertical\" data-submenu>
      ";
                    }
                    // line 65
                    echo "    ";
                } else {
                    // line 66
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 67
                        echo "        <ul";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown", 1 => "menu"], "method")), "html", null, true);
                        echo " data-dropdown-menu>
      ";
                    } else {
                        // line 69
                        echo "        <ul class=\"menu\">
      ";
                    }
                    // line 71
                    echo "    ";
                }
                // line 72
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 73
                    echo "      ";
                    if (($context["top_bar"] ?? null)) {
                        // line 74
                        echo "        ";
                        // line 75
                        $context["item_classes"] = [0 => (( !twig_test_empty($this->getAttribute(                        // line 76
$context["item"], "below", []))) ? ("has-submenu") : ("")), 1 => (($this->getAttribute(                        // line 77
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                        // line 78
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                        // line 79
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail is-active") : (""))];
                        // line 82
                        echo "      ";
                    }
                    // line 83
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    echo "
        ";
                    // line 85
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 86
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["top_bar"] ?? null)));
                        echo "
        ";
                    }
                    // line 88
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
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
        return "themes/contrib/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 90,  230 => 88,  224 => 86,  222 => 85,  218 => 84,  213 => 83,  210 => 82,  208 => 79,  207 => 78,  206 => 77,  205 => 76,  204 => 75,  202 => 74,  199 => 73,  194 => 72,  191 => 71,  187 => 69,  181 => 67,  178 => 66,  175 => 65,  171 => 63,  165 => 61,  162 => 60,  159 => 59,  156 => 58,  153 => 57,  138 => 56,  133 => 55,  127 => 53,  122 => 50,  120 => 49,  115 => 46,  109 => 44,  106 => 43,  100 => 41,  98 => 40,  94 => 39,  87 => 35,  79 => 30,  72 => 27,  68 => 25,  65 => 24,  63 => 23,  60 => 22,  57 => 17,  55 => 16,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}

{% if top_bar %}
  {% if top_bar_sticky %}
  <div id=\"top-bar-sticky-container\" data-sticky-container>
  {% endif %}
    <div {{ top_bar_attributes }}>
      <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
        <button class=\"menu-icon\" type=\"button\" data-toggle></button>
        <div class=\"title-bar-title\">{{ top_bar_menu_text }}</div>
      </div>
      <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li class=\"menu-text\">{{ site_name }}</li>
          </ul>
        </div>
        <div class=\"top-bar-right\">
          {{ menus.menu_links(items, attributes, 0, 1) }}
          {% if top_bar_search %}
            {{ top_bar_search }}
          {% endif %}
          {% if top_bar_languageswitcher %}
            {{ top_bar_languageswitcher }}
          {% endif %}
        </div>
      </nav>
    </div>
  {% if top_bar_sticky %}
  </div>
  {% endif %}
{% else %}
  {{ menus.menu_links(items, attributes, 0, 0) }}
{% endif %}

{% macro menu_links(items, attributes, menu_level, top_bar) %}
  {% import _self as menus %}
  {% if items %}
    {% if top_bar %}
      {% if menu_level == 0 %}
        <ul{{ attributes.addClass('menu', 'vertical', 'medium-horizontal').setAttribute('data-responsive-menu', 'drilldown medium-dropdown') }}>
      {% else %}
        <ul class=\"submenu menu vertical\" data-submenu>
      {% endif %}
    {% else %}
      {% if menu_level == 0 %}
        <ul{{ attributes.addClass('dropdown', 'menu') }} data-dropdown-menu>
      {% else %}
        <ul class=\"menu\">
      {% endif %}
    {% endif %}
    {% for item in items %}
      {% if top_bar %}
        {%
          set item_classes = [
            item.below is not empty ? 'has-submenu' ,
            item.is_expanded ? 'menu-item--expanded',
            item.is_collapsed ? 'menu-item--collapsed',
            item.in_active_trail ? 'menu-item--active-trail is-active',
          ]
        %}
      {% endif %}
      <li{{ item.attributes.addClass(item_classes) }}>
        {{ link(item.title, item.url) }}
        {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/contrib/zurb_foundation/templates/menu--main.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/themes/contrib/zurb_foundation/templates/menu--main.html.twig");
    }
}
