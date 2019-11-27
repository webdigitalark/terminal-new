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

/* modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-form.html.twig */
class __TwigTemplate_4d020c436d1a841edf0919226363c2f315cb936919493b600df50f77cc761f45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 17, "without" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
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
        // line 15
        echo "<div class=\"page-manager-wizard\">
  <div class=\"page-manager-wizard-actions\">
    ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "wizard_actions", [])), "html", null, true);
        echo "
  </div>
  <div class=\"page-manager-wizard-main\">
    <div class=\"page-manager-wizard-tree\">
      ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "wizard_tree", [])), "html", null, true);
        echo "
    </div>
    <div class=\"page-manager-wizard-form\">
      ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "wizard_actions", "wizard_tree", "actions"), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"page-manager-wizard-form-actions\">
    ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  72 => 24,  66 => 21,  59 => 17,  55 => 15,);
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
 * Default theme implementation for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}
<div class=\"page-manager-wizard\">
  <div class=\"page-manager-wizard-actions\">
    {{ form.wizard_actions }}
  </div>
  <div class=\"page-manager-wizard-main\">
    <div class=\"page-manager-wizard-tree\">
      {{ form.wizard_tree }}
    </div>
    <div class=\"page-manager-wizard-form\">
      {{ form|without('wizard_actions', 'wizard_tree', 'actions') }}
    </div>
  </div>

  <div class=\"page-manager-wizard-form-actions\">
    {{ form.actions }}
  </div>
</div>
", "modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-form.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/modules/contrib/page_manager/page_manager_ui/templates/page-manager-wizard-form.html.twig");
    }
}
