<?php

/* core/modules/system/templates/pager.html.twig */
class __TwigTemplate_0f9b1b157f228ce10b5c3c4e022a728e2cfc5af667d6bcd6f8101efbd93322cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 34, "for" => 61, "set" => 64];
        $filters = ["t" => 36, "without" => 41, "default" => 43];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'without', 'default'],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 39
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 40
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", []), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", []), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", []), t("« First"))) : (t("« First"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 49
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 50
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", []), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", []), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 51
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", []), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 56
            echo "      ";
            // line 57
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 58
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            echo "      ";
            // line 61
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))));
                echo "\">
          ";
                // line 63
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 64
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 65
                    echo "          ";
                } else {
                    // line 66
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 67
                    echo "          ";
                }
                // line 68
                echo "          <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", []), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", []), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 70
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "
            </span>";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                // line 73
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      ";
            // line 77
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 78
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 80
            echo "      ";
            // line 81
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 82
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 83
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", []), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", []), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 84
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", []), t("Next ›"))) : (t("Next ›"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 89
            echo "      ";
            // line 90
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 91
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", []), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", []), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 93
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", []), t("Last »"))) : (t("Last »"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 98
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 98,  220 => 94,  216 => 93,  208 => 92,  205 => 91,  202 => 90,  200 => 89,  193 => 85,  189 => 84,  181 => 83,  178 => 82,  175 => 81,  173 => 80,  169 => 78,  166 => 77,  164 => 76,  156 => 73,  154 => 72,  150 => 70,  140 => 68,  137 => 67,  134 => 66,  131 => 65,  128 => 64,  126 => 63,  121 => 62,  116 => 61,  114 => 60,  110 => 58,  107 => 57,  105 => 56,  98 => 52,  94 => 51,  86 => 50,  83 => 49,  80 => 48,  78 => 47,  71 => 43,  67 => 42,  59 => 41,  56 => 40,  53 => 39,  48 => 36,  45 => 35,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 * @ingroup themeable
 */
#}
{% if items %}
  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pager__items js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        <li class=\"pager__item pager__item--first\">
          <a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.first.text|default('« First'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        <li class=\"pager__item pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.previous.text|default('‹ Previous'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        <li class=\"pager__item{{ current == key ? ' is-active' : '' }}\">
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
            {{- key -}}
          </a>
        </li>
      {% endfor %}
      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        <li class=\"pager__item pager__item--next\">
          <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.next.text|default('Next ›'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        <li class=\"pager__item pager__item--last\">
          <a href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.last.text|default('Last »'|t) }}</span>
          </a>
        </li>
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/modules/system/templates/pager.html.twig", "/Users/gilmarfdelima/Projects/Personal/surfcode/web/core/modules/system/templates/pager.html.twig");
    }
}
