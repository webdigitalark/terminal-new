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

/* themes/custom/terminal_transportes/templates/page.html.twig */
class __TwigTemplate_9d63a1077656e5211e9753e18d5feeed1ff63461e744f99dd15793c65e47a636 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 73, "spaceless" => 163];
        $filters = ["escape" => 61, "t" => 87];
        $functions = ["path" => 114];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape', 't'],
                ['path']
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
        // line 57
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_off_canvas", [])), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_off_canvas", [])), "html", null, true);
        echo "
    </aside>
    <div class=\"title-bar\" data-responsive-toggle=\"container-menus\" data-hide-for=\"medium\">
      <button class=\"menu-icon\" type=\"button\" data-toggle></button>
      <div class=\"title-bar-title\">Menu</div>
    </div>
    <div class=\"off-canvas-content\" data-off-canvas-content>
      <div class=\"container-menus\" id=\"container-menus\">
        ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "meta_header", [])) {
            // line 74
            echo "          ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 75
                echo "            <div class=\"row\">
              <div class=\"large-12 columns\">
          ";
            }
            // line 78
            echo "          <div class=\"meta-header\">
            ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "meta_header", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 81
            if (($context["meta_header_grid"] ?? null)) {
                // line 82
                echo "              </div>
            </div>
          ";
            }
            // line 85
            echo "        ";
        }
        // line 86
        echo "        
        <header class=\"row site-header\" role=\"banner\" id=\"site-header\" data-animate=\"hinge-in-from-top spin-out\" aria-label=\"";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
          ";
        // line 88
        if ((($context["linked_site_name"] ?? null) || ($context["linked_logo"] ?? null))) {
            // line 89
            echo "            <div class=\"large-2 columns\">
              ";
            // line 90
            if (($context["linked_logo"] ?? null)) {
                // line 91
                echo "                ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_logo"] ?? null)), "html", null, true);
                echo "
              ";
            }
            // line 93
            echo "            </div>
            <div class=\"left large-4 columns\">
              ";
            // line 95
            if (($context["is_front"] ?? null)) {
                // line 96
                echo "                <h1 id=\"site-name\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_site_name"] ?? null)), "html", null, true);
                echo "</h1>
              ";
            } else {
                // line 98
                echo "                <div id=\"site-name\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_site_name"] ?? null)), "html", null, true);
                echo "</div>
              ";
            }
            // line 100
            echo "            </div>
          ";
        }
        // line 102
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 103
            echo "            <div class=\"large-12 columns\">
              ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 107
        echo "        </header>
      </div>
      <div class=\"row\">
        ";
        // line 110
        if (($context["show_account_info"] ?? null)) {
            // line 111
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8")));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 113
            if (($context["logged_in"] ?? null)) {
                // line 114
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("My Account"));
                echo "</a>
                <a href=\"";
                // line 115
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
                echo "</a>
              ";
            } else {
                // line 117
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
                echo "</a>
                <a href=\"";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
                echo "</a>
              ";
            }
            // line 120
            echo "            </p>
          </div>
        ";
        }
        // line 123
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 124
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 128
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 129
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 142
        echo "      </div>

      ";
        // line 144
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 145
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 151
        echo "
      ";
        // line 152
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 153
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 159
        echo "
      <div class=\"main-navigation\">
        <main id=\"main\" class=\"";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null)), "html", null, true);
        echo "\" role=\"main\">
          ";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 163
            echo "            ";
            ob_start();
            // line 164
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 166
            echo "          ";
        }
        // line 167
        echo "          <a id=\"main-content\"></a>
          ";
        // line 168
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo " ";
        }
        // line 169
        echo "          <section>
            ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 174
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null)), "html", null, true);
            echo " columns sidebar \">
            ";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 178
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 179
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null)), "html", null, true);
            echo " columns sidebar\">
            ";
            // line 180
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 183
        echo "      </div>
      ";
        // line 184
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_middle", [])) || $this->getAttribute(($context["page"] ?? null), "footer_last", [])) || $this->getAttribute(($context["page"] ?? null), "footer_bottom", []))) {
            // line 185
            echo "        <footer>
          <div class=\"row\">         
            ";
            // line 187
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 188
                echo "              <div id=\"footer-first\" class=\"medium-6 large-4 columns\">
                ";
                // line 189
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 192
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_middle", [])) {
                // line 193
                echo "              <div id=\"footer-middle\" class=\"medium-6 large-4 columns\">
                ";
                // line 194
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_middle", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 197
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_last", [])) {
                // line 198
                echo "              <div id=\"footer-last\" class=\"medium-12 large-4 columns\">
                ";
                // line 199
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_last", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 201
            echo "            
          </div>       
          ";
            // line 203
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
                // line 204
                echo "            <div id=\"footer-bottom\" class=\"large-12 columns\">
              ";
                // line 205
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 207
            echo "             
        </footer>
      ";
        }
        // line 209
        echo "      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/terminal_transportes/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 209,  408 => 207,  402 => 205,  399 => 204,  397 => 203,  393 => 201,  387 => 199,  384 => 198,  381 => 197,  375 => 194,  372 => 193,  369 => 192,  363 => 189,  360 => 188,  358 => 187,  354 => 185,  352 => 184,  349 => 183,  343 => 180,  338 => 179,  335 => 178,  329 => 175,  324 => 174,  322 => 173,  316 => 170,  313 => 169,  307 => 168,  304 => 167,  301 => 166,  295 => 164,  292 => 163,  290 => 162,  286 => 161,  282 => 159,  275 => 155,  271 => 153,  269 => 152,  266 => 151,  259 => 147,  255 => 145,  253 => 144,  249 => 142,  239 => 137,  229 => 132,  224 => 129,  221 => 128,  215 => 125,  212 => 124,  209 => 123,  204 => 120,  197 => 118,  190 => 117,  183 => 115,  176 => 114,  174 => 113,  168 => 111,  166 => 110,  161 => 107,  155 => 104,  152 => 103,  149 => 102,  145 => 100,  139 => 98,  133 => 96,  131 => 95,  127 => 93,  121 => 91,  119 => 90,  116 => 89,  114 => 88,  110 => 87,  107 => 86,  104 => 85,  99 => 82,  97 => 81,  92 => 79,  89 => 78,  84 => 75,  81 => 74,  79 => 73,  68 => 65,  61 => 61,  55 => 57,);
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
 * Zurb Foundations's theme implementation to display a single page.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - linked_logo: The logo image, linked to <front>.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - linked_site_name: The name of the site that also links to <front>.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 * - hide_site_name: A flag indicating if the site name has been toggled off on
 *   the theme settings page. If hidden, the \"visually-hidden\" class is added
 *   to make the site name visually hidden, but still accessible.
 * - hide_site_slogan: A flag indicating if the site slogan has been toggled off
 *   on the theme settings page. If hidden, the \"visually-hidden\" class is
 *   added to make the site slogan visually hidden, but still accessible.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.meta_header
 * - page.header
 * - page.help
 * - page.highlighted
 * - page.content
 * - page.sidebar_first
 * - page.sidebar_second
 * - page.footer_first
 * - page.footer_middle
 * - page.footer_last
 *
 * @see template_preprocess_page()
 * @see bartik_preprocess_page()
 * @see html.html.twig
 */
#}

<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      {{ page.left_off_canvas }}
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      {{ page.right_off_canvas }}
    </aside>
    <div class=\"title-bar\" data-responsive-toggle=\"container-menus\" data-hide-for=\"medium\">
      <button class=\"menu-icon\" type=\"button\" data-toggle></button>
      <div class=\"title-bar-title\">Menu</div>
    </div>
    <div class=\"off-canvas-content\" data-off-canvas-content>
      <div class=\"container-menus\" id=\"container-menus\">
        {% if page.meta_header %}
          {% if meta_header_grid %}
            <div class=\"row\">
              <div class=\"large-12 columns\">
          {% endif %}
          <div class=\"meta-header\">
            {{ page.meta_header }}
          </div>
          {% if meta_header_grid %}
              </div>
            </div>
          {% endif %}
        {% endif %}
        
        <header class=\"row site-header\" role=\"banner\" id=\"site-header\" data-animate=\"hinge-in-from-top spin-out\" aria-label=\"{{ 'Site header'|t }}\">
          {% if linked_site_name or linked_logo %}
            <div class=\"large-2 columns\">
              {% if linked_logo %}
                {{ linked_logo }}
              {% endif %}
            </div>
            <div class=\"left large-4 columns\">
              {% if is_front %}
                <h1 id=\"site-name\">{{ linked_site_name }}</h1>
              {% else %}
                <div id=\"site-name\">{{ linked_site_name }}</div>
              {% endif %}
            </div>
          {% endif %}
          {% if page.header %}
            <div class=\"large-12 columns\">
              {{ page.header }}
            </div>
          {% endif %}
        </header>
      </div>
      <div class=\"row\">
        {% if show_account_info %}
          <div class=\"{{ site_slogan ? 'large-6' : 'large-4 columns large-offset-8' }} columns hide-for-small\">
            <p>
              {% if logged_in %}
                <a href=\"{{ path('user.page') }}\">{{ 'My Account'|t }}</a>
                <a href=\"{{ path('user.logout') }}\">{{ 'Logout'|t }}</a>
              {% else %}
                <a href=\"{{ path('user.login') }}\">{{ 'Login'|t }}</a>
                <a href=\"{{ path('user.register') }}\">{{ 'Sign Up'|t }}</a>
              {% endif %}
            </p>
          </div>
        {% endif %}
        {% if site_slogan %}
          <div class=\"large-6 columns hide-for-small\">
            {{ site_slogan }}
          </div>
        {% endif %}
        {% if show_account_info %}
          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"{{ path('user.login') }}\" class=\"radius button\">{{ 'Login'|t }}</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"{{ path('user.register') }}\" class=\"radius success button\">{{ 'Sign Up'|t }}</a>
              </p>
            </div>
          </div>
        {% endif %}
      </div>

      {% if messages and not zurb_foundation_messages_modal %}
      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          {{ messages }}
        </div>
      </div>
      {% endif %}

      {% if page.help %}
      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          {{ page.help }}
        </div>
      </div>
      {% endif %}

      <div class=\"main-navigation\">
        <main id=\"main\" class=\"{{ main_grid }}\" role=\"main\">
          {% if page.highlighted %}
            {% spaceless %}
              {{ page.highlighted }}
            {% endspaceless %}
          {% endif %}
          <a id=\"main-content\"></a>
          {% if breadcrumb %} {{ breadcrumb }} {% endif %}
          <section>
            {{ page.content }}
          </section>
        </main>
        {% if page.sidebar_first %}
          <div id=\"sidebar-first\" class=\"{{ sidebar_first_grid }} columns sidebar \">
            {{ page.sidebar_first }}
          </div>
        {% endif %}
        {% if page.sidebar_second %}
          <div id=\"sidebar-second\" class=\"{{ sidebar_sec_grid }} columns sidebar\">
            {{ page.sidebar_second }}
          </div>
        {% endif %}
      </div>
      {% if page.footer_first or page.footer_middle or page.footer_last or page.footer_bottom %}
        <footer>
          <div class=\"row\">         
            {% if page.footer_first %}
              <div id=\"footer-first\" class=\"medium-6 large-4 columns\">
                {{ page.footer_first }}
              </div>
            {% endif %}
            {% if page.footer_middle %}
              <div id=\"footer-middle\" class=\"medium-6 large-4 columns\">
                {{ page.footer_middle }}
              </div>
            {% endif %}
            {% if page.footer_last %}
              <div id=\"footer-last\" class=\"medium-12 large-4 columns\">
                {{ page.footer_last }}
              </div>
            {% endif %}            
          </div>       
          {% if page.footer_bottom %}
            <div id=\"footer-bottom\" class=\"large-12 columns\">
              {{ page.footer_bottom }}
            </div>
          {% endif %}             
        </footer>
      {% endif %}      
    </div>
  </div>
</div>
", "themes/custom/terminal_transportes/templates/page.html.twig", "/Library/WebServer/Documents/dayscript/terminal-new/themes/custom/terminal_transportes/templates/page.html.twig");
    }
}
