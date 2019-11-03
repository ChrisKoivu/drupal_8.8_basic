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

/* themes/zurb_foundation/layouts/foundation_2col/foundation-2col.html.twig */
class __TwigTemplate_99652974c93ebabd1fb23a7191e730b484abdd80193dbe1db017974b8ef52cc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 17
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => $this->getAttribute(($context["settings"] ?? null), "css_id", [])], "method"), "addClass", [0 => "row", 1 => "foundation-2col", 2 => $this->getAttribute(($context["settings"] ?? null), "css_classes", [])], "method")), "html", null, true);
        echo ">
  <div class=\"medium-6 small-12 columns\">
    ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])), "html", null, true);
        echo "
  </div>
  <div class=\"medium-6 small-12 columns\">
    ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])), "html", null, true);
        echo "
  </div>
</div> <!-- /.foundation-2col -->
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/layouts/foundation_2col/foundation-2col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  61 => 19,  55 => 17,);
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
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - css_id: An optional CSS id to use for the layout.
 * - content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - content.left: Content in the left column.
 *   - content.right: Content in the right column.
 */
#}
<div {{ attributes.setAttribute('id', settings.css_id).addClass('row', 'foundation-2col', settings.css_classes) }}>
  <div class=\"medium-6 small-12 columns\">
    {{ content.left }}
  </div>
  <div class=\"medium-6 small-12 columns\">
    {{ content.right }}
  </div>
</div> <!-- /.foundation-2col -->
", "themes/zurb_foundation/layouts/foundation_2col/foundation-2col.html.twig", "/var/www/html/drupal/themes/zurb_foundation/layouts/foundation_2col/foundation-2col.html.twig");
    }
}
