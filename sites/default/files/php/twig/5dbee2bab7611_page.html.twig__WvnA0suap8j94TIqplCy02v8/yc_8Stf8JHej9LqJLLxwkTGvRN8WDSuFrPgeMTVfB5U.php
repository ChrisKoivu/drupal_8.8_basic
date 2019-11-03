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

/* themes/chris_koivu/templates/page.html.twig */
class __TwigTemplate_a95eff7a09281a5ce18cd15e4743e83d4bceeb3fd126f229aa01153bbe9f406a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 69, "spaceless" => 157];
        $filters = ["escape" => 61, "t" => 81, "date" => 200];
        $functions = ["path" => 108];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape', 't', 'date'],
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

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "meta_header", [])) {
            // line 70
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 71
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 74
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "meta_header", [])), "html", null, true);
            echo "
        ";
            // line 75
            if (($context["meta_header_grid"] ?? null)) {
                // line 76
                echo "            </div>
          </div>
        ";
            }
            // line 79
            echo "      ";
        }
        // line 80
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
        ";
        // line 82
        if ((($context["linked_site_name"] ?? null) || ($context["linked_logo"] ?? null))) {
            // line 83
            echo "          <div class=\"large-2 columns\">
            ";
            // line 84
            if (($context["linked_logo"] ?? null)) {
                // line 85
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_logo"] ?? null)), "html", null, true);
                echo "
            ";
            }
            // line 87
            echo "          </div>
          <div class=\"left large-4 columns\">
            ";
            // line 89
            if (($context["is_front"] ?? null)) {
                // line 90
                echo "              <h1 id=\"site-name\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_site_name"] ?? null)), "html", null, true);
                echo "</h1>
            ";
            } else {
                // line 92
                echo "              <div id=\"site-name\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_site_name"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 94
            echo "          </div>
        ";
        }
        // line 96
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 97
            echo "          <div class=\"large-12 columns header\">
            ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 101
        echo "      </header>

      <div class=\"row\">
        ";
        // line 104
        if (($context["show_account_info"] ?? null)) {
            // line 105
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8")));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 107
            if (($context["logged_in"] ?? null)) {
                // line 108
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("My Account"));
                echo "</a>
                <a href=\"";
                // line 109
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
                echo "</a>
              ";
            } else {
                // line 111
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
                echo "</a>
                <a href=\"";
                // line 112
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
                echo "</a>
              ";
            }
            // line 114
            echo "            </p>
          </div>
        ";
        }
        // line 117
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 118
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 122
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 123
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 126
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sign Up"));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 136
        echo "      </div>

      ";
        // line 138
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 139
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 145
        echo "
      ";
        // line 146
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 147
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 153
        echo "
      <div class=\"row\">
        <main id=\"main\" class=\"";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null)), "html", null, true);
        echo " columns\" role=\"main\">
          ";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 157
            echo "            ";
            ob_start();
            // line 158
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 160
            echo "          ";
        }
        // line 161
        echo "          <a id=\"main-content\"></a>
          ";
        // line 162
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo " ";
        }
        // line 163
        echo "          <section>
            ";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 168
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null)), "html", null, true);
            echo " columns sidebar \">
            ";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 172
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 173
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null)), "html", null, true);
            echo " columns sidebar\">
            ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 177
        echo "      </div>
      ";
        // line 178
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_middle", [])) || $this->getAttribute(($context["page"] ?? null), "footer_last", []))) {
            // line 179
            echo "        <footer class=\"row\">
          ";
            // line 180
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 181
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 182
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 185
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_middle", [])) {
                // line 186
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 187
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_middle", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 190
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_last", [])) {
                // line 191
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 192
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_last", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 195
            echo "        </footer>
      ";
        }
        // line 197
        echo "      <div class=\"bottom-bar callout secondary\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 200
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All rights reserved."));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/chris_koivu/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 200,  389 => 197,  385 => 195,  379 => 192,  376 => 191,  373 => 190,  367 => 187,  364 => 186,  361 => 185,  355 => 182,  352 => 181,  350 => 180,  347 => 179,  345 => 178,  342 => 177,  336 => 174,  331 => 173,  328 => 172,  322 => 169,  317 => 168,  315 => 167,  309 => 164,  306 => 163,  300 => 162,  297 => 161,  294 => 160,  288 => 158,  285 => 157,  283 => 156,  279 => 155,  275 => 153,  268 => 149,  264 => 147,  262 => 146,  259 => 145,  252 => 141,  248 => 139,  246 => 138,  242 => 136,  232 => 131,  222 => 126,  217 => 123,  214 => 122,  208 => 119,  205 => 118,  202 => 117,  197 => 114,  190 => 112,  183 => 111,  176 => 109,  169 => 108,  167 => 107,  161 => 105,  159 => 104,  154 => 101,  148 => 98,  145 => 97,  142 => 96,  138 => 94,  132 => 92,  126 => 90,  124 => 89,  120 => 87,  114 => 85,  112 => 84,  109 => 83,  107 => 82,  103 => 81,  100 => 80,  97 => 79,  92 => 76,  90 => 75,  85 => 74,  80 => 71,  77 => 70,  75 => 69,  68 => 65,  61 => 61,  55 => 57,);
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

    <div class=\"off-canvas-content\" data-off-canvas-content>
      {% if page.meta_header %}
        {% if meta_header_grid %}
          <div class=\"row\">
            <div class=\"large-12 columns\">
        {% endif %}
        {{ page.meta_header }}
        {% if meta_header_grid %}
            </div>
          </div>
        {% endif %}
      {% endif %}

      <header class=\"row\" role=\"banner\" aria-label=\"{{ 'Site header'|t }}\">
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
          <div class=\"large-12 columns header\">
            {{ page.header }}
          </div>
        {% endif %}
      </header>

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

      <div class=\"row\">
        <main id=\"main\" class=\"{{ main_grid }} columns\" role=\"main\">
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
      {% if page.footer_first or page.footer_middle or page.footer_last %}
        <footer class=\"row\">
          {% if page.footer_first %}
            <div id=\"footer-first\" class=\"large-4 columns\">
              {{ page.footer_first }}
            </div>
          {% endif %}
          {% if page.footer_middle %}
            <div id=\"footer-middle\" class=\"large-4 columns\">
              {{ page.footer_middle }}
            </div>
          {% endif %}
          {% if page.footer_last %}
            <div id=\"footer-last\" class=\"large-4 columns\">
              {{ page.footer_last }}
            </div>
          {% endif %}
        </footer>
      {% endif %}
      <div class=\"bottom-bar callout secondary\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; {{ \"now\"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "themes/chris_koivu/templates/page.html.twig", "/var/www/html/drupal/themes/chris_koivu/templates/page.html.twig");
    }
}
