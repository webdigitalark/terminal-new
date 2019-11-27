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

/* core/modules/media_library/templates/media--media-library.html.twig */
class __TwigTemplate_fdadf9ecb5a5d30b8c2c1a5df0dc81bf3a764ee74cbedf05e749a058b8f455a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37];
        $filters = ["escape" => 36, "without" => 39, "t" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
        // line 36
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 37
        if (($context["content"] ?? null)) {
            // line 38
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preview_attributes"] ?? null)), "html", null, true);
            echo ">
      ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "name"), "html", null, true);
            echo "
    </div>
    ";
            // line 41
            if ( !($context["status"] ?? null)) {
                // line 42
                echo "      <div class=\"media-library-item__status\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("unpublished"));
                echo "</div>
    ";
            }
            // line 44
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata_attributes"] ?? null)), "html", null, true);
            echo ">
      <div class=\"media-library-item__name\">
        <a href=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</a>
      </div>
    </div>
  ";
        }
        // line 50
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/media_library/templates/media--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  86 => 46,  80 => 44,  74 => 42,  72 => 41,  67 => 39,  62 => 38,  60 => 37,  55 => 36,);
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
 * Default theme implementation to present a media entity in the media library.
 *
 * Available variables:
 * - media: The entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - url: Direct URL of the media.
 * - preview_attributes: HTML attributes for the preview wrapper.
 * - metadata_attributes: HTML attributes for the expandable metadata area.
 * - status: Whether or not the Media is published.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content %}
    <div{{ preview_attributes }}>
      {{ content|without('name') }}
    </div>
    {% if not status %}
      <div class=\"media-library-item__status\">{{ \"unpublished\" | t }}</div>
    {% endif %}
    <div{{ metadata_attributes }}>
      <div class=\"media-library-item__name\">
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ name }}</a>
      </div>
    </div>
  {% endif %}
</article>
", "core/modules/media_library/templates/media--media-library.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/core/modules/media_library/templates/media--media-library.html.twig");
    }
}
