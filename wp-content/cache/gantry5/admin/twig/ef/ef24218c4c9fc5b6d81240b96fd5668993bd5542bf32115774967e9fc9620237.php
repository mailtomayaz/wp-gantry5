<?php

/* forms/override.html.twig */
class __TwigTemplate_378bce7573ca63d93626af1c4aa08b11d1665acb438e4e8e8b9fbbcb8f0d07ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<input type=\"checkbox\"
       class=\"settings-param-toggle\"
       id=\"of-";
        // line 3
        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . ($context["name"] ?? null)), "html", null, true);
        echo "\"";
        echo ((($context["has_value"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo "
       role=\"checkbox\"
       aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", twig_trim_filter(twig_title_string_filter($this->env, twig_replace_filter((($context["scope"] ?? null) . ($context["name"] ?? null)), array("." => " "))))), "html", null, true);
        echo "\"
       title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", $this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
        echo "\" />
<label class=\"settings-param-override\" for=\"of-";
        // line 7
        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . ($context["name"] ?? null)), "html", null, true);
        echo "\"></label>
";
    }

    public function getTemplateName()
    {
        return "forms/override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
       class=\"settings-param-toggle\"
       id=\"of-{{ scope ~ name }}\"{{ has_value ? ' checked=\"checked\"' }}
       role=\"checkbox\"
       aria-label=\"{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans((scope ~ name)|replace({'.': ' '})|title|trim) }}\"
       title=\"{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans(field.label) }}\" />
<label class=\"settings-param-override\" for=\"of-{{ scope ~ name }}\"></label>
", "forms/override.html.twig", "/var/www/html/wp/wp-content/plugins/gantry5/admin/templates/forms/override.html.twig");
    }
}
