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

/* modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig */
class __TwigTemplate_6d0d8b686843eb17522008726801ab1097b95efa1cbbed1dc9de02c9160234b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21, "set" => 23, "for" => 25];
        $filters = ["escape" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
        // line 21
        if (($context["use_wrapper"] ?? null)) {
            // line 22
            echo "  <div class=\"views-rows-wrapper\">
  ";
            // line 23
            $context["k"] = 0;
            // line 24
            echo "  ";
            $context["is_wrapped_once"] = 0;
            // line 25
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 26
                echo "    ";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 27
                echo "    ";
                if (((($context["k"] ?? null) == 1) && (($context["is_wrapped_once"] ?? null) == 0))) {
                    // line 28
                    echo "      ";
                    if (($context["attribute_name"] ?? null)) {
                        // line 29
                        echo "        <";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null)), "html", null, true);
                        echo " ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute_type"] ?? null)), "html", null, true);
                        echo " =\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute_name"] ?? null)), "html", null, true);
                        echo "\">
      ";
                    } else {
                        // line 31
                        echo "        <";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null)), "html", null, true);
                        echo ">
      ";
                    }
                    // line 33
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                    echo ">
        ";
                    // line 34
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
      </div>
    ";
                } else {
                    // line 37
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                    echo ">
        ";
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
      </div>
    ";
                }
                // line 41
                echo "    ";
                if (((0 == $this->getAttribute($context["loop"], "index", []) % ($context["rows_number"] ?? null)) || (($this->getAttribute($context["loop"], "index", []) == $this->getAttribute($context["loop"], "last", [])) && (($context["k"] ?? null) < ($context["rows_number"] ?? null))))) {
                    // line 42
                    echo "      ";
                    if ((($context["is_wrapped_once"] ?? null) == 0)) {
                        // line 43
                        echo "        </";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null)), "html", null, true);
                        echo ">
      ";
                    }
                    // line 45
                    echo "    ";
                }
                // line 46
                echo "    ";
                if ((($context["k"] ?? null) == ($context["rows_number"] ?? null))) {
                    // line 47
                    echo "      ";
                    $context["k"] = 0;
                    // line 48
                    echo "      ";
                    if ((($context["wrap_method"] ?? null) == 1)) {
                        // line 49
                        echo "        ";
                        $context["is_wrapped_once"] = 1;
                        // line 50
                        echo "      ";
                    }
                    // line 51
                    echo "    ";
                }
                // line 52
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  </div>
";
        } else {
            // line 55
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 56
                echo "    <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
                echo ">
      ";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                echo "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 57,  186 => 56,  181 => 55,  177 => 53,  163 => 52,  160 => 51,  157 => 50,  154 => 49,  151 => 48,  148 => 47,  145 => 46,  142 => 45,  136 => 43,  133 => 42,  130 => 41,  124 => 38,  119 => 37,  113 => 34,  108 => 33,  102 => 31,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  65 => 25,  62 => 24,  60 => 23,  57 => 22,  55 => 21,);
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
 * Default theme implementation to output a views rows wrapper display style plugin.
 *
 * Available variables:
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - element_type: Wrapper element type
 * - attribute_type: Attribute type of the selected wrapper element
 * - attribute_name: Name of the selected attribute.
 * - rows_number: A number of rows to wrap
 * - wrap_method: 0 - Apply to all items, 1 - Wrap once.
 * - use_wrapper: A flag for wrapper usage
 *
 * @ingroup themeable
 */
#}
{% if use_wrapper %}
  <div class=\"views-rows-wrapper\">
  {% set k = 0 %}
  {% set is_wrapped_once = 0 %}
  {% for row in rows %}
    {% set k = k + 1 %}
    {% if (k == 1) and (is_wrapped_once == 0) %}
      {% if attribute_name %}
        <{{ element_type }} {{ attribute_type }} =\"{{ attribute_name }}\">
      {% else %}
        <{{ element_type }}>
      {% endif %}
      <div{{ row.attributes }}>
        {{ row.content }}
      </div>
    {% else %}
      <div{{ row.attributes }}>
        {{ row.content }}
      </div>
    {% endif %}
    {% if (loop.index is divisible by(rows_number)) or ((loop.index == loop.last) and (k < rows_number)) %}
      {% if is_wrapped_once == 0 %}
        </{{ element_type }}>
      {% endif %}
    {% endif %}
    {% if (k == rows_number) %}
      {% set k = 0 %}
      {% if (wrap_method == 1) %}
        {% set is_wrapped_once = 1 %}
      {% endif %}
    {% endif %}
  {% endfor %}
  </div>
{% else %}
  {% for row in rows %}
    <div{{ row.attributes }}>
      {{ row.content }}
    </div>
  {% endfor %}
{% endif %}", "modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig");
    }
}
