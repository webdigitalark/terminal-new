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

/* __string_template__a9d1d2addc73c5109551ae1c0873aa6c5e80779a095ad2aab416736b01e1a9c7 */
class __TwigTemplate_20b7a490fa01682795339f5b95f183fb44bf088f84a213e3d6961aa207576002 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["t" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
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
        // line 1
        echo "<span class=\"status\">";
        if (($context["status"] ?? null)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Published"));
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not published"));
        }
        echo "</span>";
        if (($context["outdated"] ?? null)) {
            echo " <span class=\"marker\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("outdated"));
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a9d1d2addc73c5109551ae1c0873aa6c5e80779a095ad2aab416736b01e1a9c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<span class=\"status\">{% if status %}{{ \"Published\"|t }}{% else %}{{ \"Not published\"|t }}{% endif %}</span>{% if outdated %} <span class=\"marker\">{{ \"outdated\"|t }}</span>{% endif %}", "__string_template__a9d1d2addc73c5109551ae1c0873aa6c5e80779a095ad2aab416736b01e1a9c7", "");
    }
}
