<?php

/* themes/codesurfboards/templates/field/form-element.html.twig */
class __TwigTemplate_24e608862fb2947364e97734a5470449454cece27b8e56a4636a214cf32e558b extends Twig_Template
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
        $tags = ["set" => 50];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set'],
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

        // line 50
        $context["classes"] = [0 => "form__group"];
        // line 54
        echo "
<div ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
  
  ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  
  ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/codesurfboards/templates/field/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 59,  53 => 57,  48 => 55,  45 => 54,  43 => 50,);
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
 * Default theme implementation for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'form__group'
  ]
%}

<div {{ attributes.addClass(classes) }}>
  
  {{ children }}
  
  {{ label }}
  
</div>
", "themes/codesurfboards/templates/field/form-element.html.twig", "/Users/gilmarfdelima/Projects/Personal/surfcode/web/themes/codesurfboards/templates/field/form-element.html.twig");
    }
}
