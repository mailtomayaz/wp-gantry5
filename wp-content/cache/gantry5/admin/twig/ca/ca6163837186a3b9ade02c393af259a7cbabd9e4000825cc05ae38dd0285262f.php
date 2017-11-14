<?php

/* forms/fields/container/set.html.twig */
class __TwigTemplate_8787e156f5ba0dca3875cdeaf11f7bcf3b1a29de6b1dd2c2742bcff27d848a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/set.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "label", array())) {
            // line 9
            echo "    <";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter($this->getAttribute(($context["field"] ?? null), "label", array()), "GANTRY5_FORM_FIELD", ($context["scope"] ?? null), ($context["name"] ?? null), "LABEL"), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">
    ";
        }
        // line 11
        echo "    <div";
        echo (($this->getAttribute(($context["field"] ?? null), "id", array())) ? (((" id=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()))) . "\"")) : (""));
        echo ">
    ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 14
                echo "            ";
                if ((is_string($__internal_d20ae5d62a0723f48826b912acb80a2b7e0ea3a7e1157047729b17ead398e8dd = $context["childName"]) && is_string($__internal_35d1ad6208f321c2338b69a3d86a0a850ead41cc6b9bf20199c74461deddacab = ".") && ('' === $__internal_35d1ad6208f321c2338b69a3d86a0a850ead41cc6b9bf20199c74461deddacab || 0 === strpos($__internal_d20ae5d62a0723f48826b912acb80a2b7e0ea3a7e1157047729b17ead398e8dd, $__internal_35d1ad6208f321c2338b69a3d86a0a850ead41cc6b9bf20199c74461deddacab)))) {
                    // line 15
                    echo "                ";
                    $context["childValue"] = $this->getAttribute(($context["current_value"] ?? null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 16
                    echo "                ";
                    $context["childDefault"] = $this->getAttribute(($context["default_value"] ?? null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 17
                    echo "                ";
                    $context["childName"] = (($context["name"] ?? null) . $context["childName"]);
                    // line 18
                    echo "            ";
                } else {
                    // line 19
                    echo "                ";
                    $context["container"] = ($this->getAttribute($context["child"], "type", array()) == "container.tabs");
                    // line 20
                    echo "                ";
                    $context["childValue"] = ((($context["container"] ?? null)) ? (($context["current_value"] ?? null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $context["childName"]))));
                    // line 21
                    echo "                ";
                    $context["childDefault"] = ((($context["container"] ?? null)) ? (($context["default_value"] ?? null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["defaults"] ?? null), (($context["scope"] ?? null) . $context["childName"]))));
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            ";
                $context["child_overrideable"] = (($this->getAttribute($context["child"], "overridable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overridable", array())) : ((($this->getAttribute($context["child"], "overrideable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overrideable", array())) : (true))));
                // line 24
                echo "
            ";
                // line 25
                if (((($this->getAttribute($context["child"], "type", array()) &&  !$this->getAttribute($context["child"], "skip", array())) &&  !((($context["ignore_not_overrideable"] ?? null) &&  !($context["child_overrideable"] ?? null)) && (null === ($context["childValue"] ?? null)))) &&  !((null === ($context["childValue"] ?? null)) && ($context["not_global_overrideable"] ?? null)))) {
                    // line 26
                    echo "                ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/set.html.twig", 26)->display(array_merge($context, array("name" =>                     // line 27
$context["childName"], "field" => $context["child"], "current_value" => ($context["childValue"] ?? null), "value" => null, "default_value" => ($context["childDefault"] ?? null), "overrideable" => (($context["overrideable"] ?? null) && ($context["child_overrideable"] ?? null)))));
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        // line 31
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  130 => 30,  116 => 29,  113 => 28,  111 => 27,  109 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  56 => 13,  54 => 12,  49 => 11,  39 => 9,  36 => 8,  33 => 7,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}

{# Not overridable #}
{% block overridable %}
{% endblock %}

{% block contents %}
    {% if field.label %}
    <{{ field.tag|default('h5') }}>{{ field.label|trans_key('GANTRY5_FORM_FIELD', scope, name, 'LABEL') }}</{{ field.tag|default('h5') }}>
    {% endif %}
    <div{{ field.id ? (' id=\"' ~ field.id|e ~ '\"')|raw }}>
    {% if field.fields %}
        {% for childName, child in field.fields %}
            {% if childName starts with '.' %}
                {% set childValue = current_value[childName[1:]] %}
                {% set childDefault = default_value[childName[1:]] %}
                {% set childName = name ~ childName %}
            {% else %}
                {% set container = child.type == 'container.tabs' %}
                {% set childValue = container ? current_value : nested(data, scope ~ childName) %}
                {% set childDefault = container ? default_value : nested(defaults, scope ~ childName) %}
            {% endif %}
            {% set child_overrideable = child.overridable is defined ? child.overridable : (child.overrideable is defined ? child.overrideable : true) %}

            {% if child.type and not child.skip and not(ignore_not_overrideable and not child_overrideable and childValue is null) and not(childValue is null and not_global_overrideable) %}
                {% include [\"forms/fields/\" ~ child.type|replace('.', '/') ~ \".html.twig\", 'forms/fields/unknown/unknown.html.twig']
                with {name: childName, field: child, current_value: childValue, value: null, default_value: childDefault, overrideable: overrideable and child_overrideable } %}
            {% endif %}
        {% endfor %}
    {% endif %}
    </div>
{% endblock %}
", "forms/fields/container/set.html.twig", "/var/www/html/wp/wp-content/plugins/gantry5/admin/templates/forms/fields/container/set.html.twig");
    }
}
