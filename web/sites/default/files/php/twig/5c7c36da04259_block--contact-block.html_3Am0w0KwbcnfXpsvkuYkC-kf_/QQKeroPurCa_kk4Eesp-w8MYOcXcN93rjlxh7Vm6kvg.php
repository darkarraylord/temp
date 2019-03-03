<?php

/* themes/codesurfboards/templates/block/block--contact-block.html.twig */
class __TwigTemplate_2e9432e2c3ca0dba32de5f6859161d14c1cedcf934210473b6500848c879ccaa extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                [],
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

        // line 30
        echo "<section id=\"contact-form\" class=\"section-book\">
    <div class=\"row\">
        <div class=\"book\">
            <div class=\"book__form\">
                <div action=\"#\" class=\"form\">
                    <div class=\"u-margin-bottom-medium\">
                        <h2 class=\"heading-secondary\">
                            Contact us.
                        </h2>
                    </div>
                ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
              </div>
          </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/codesurfboards/templates/block/block--contact-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 40,  43 => 30,);
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
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
<section id=\"contact-form\" class=\"section-book\">
    <div class=\"row\">
        <div class=\"book\">
            <div class=\"book__form\">
                <div action=\"#\" class=\"form\">
                    <div class=\"u-margin-bottom-medium\">
                        <h2 class=\"heading-secondary\">
                            Contact us.
                        </h2>
                    </div>
                {{ content }}
              </div>
          </div>
        </div>
    </div>
</section>
", "themes/codesurfboards/templates/block/block--contact-block.html.twig", "/Users/gilmarfdelima/Projects/Personal/surfcode/web/themes/codesurfboards/templates/block/block--contact-block.html.twig");
    }
}
