<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_9a3fe947678449522cb862ce99eecfd0868b0f9043c8e428c31740e6e29fd49d extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_2138d9c9ffc237b3b84a44ec9063c4eec7e9fe367db6575c7d7285a99524d38e = ($context["php_version"] ?? null)) && is_string($__internal_202b5ed2617e000512189f616879a352b4b40b80c6cd9cc05d0017185f06b072 = "5.4") && ('' === $__internal_202b5ed2617e000512189f616879a352b4b40b80c6cd9cc05d0017185f06b072 || 0 === strpos($__internal_2138d9c9ffc237b3b84a44ec9063c4eec7e9fe367db6575c7d7285a99524d38e, $__internal_202b5ed2617e000512189f616879a352b4b40b80c6cd9cc05d0017185f06b072)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set php_version = constant('PHP_VERSION') %}

{% if php_version starts with '5.4' %}
<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        {{ 'GANTRY5_PLATFORM_PHP54_WARNING'|trans(php_version)|raw }}
    </div>
</div>
{% endif %}", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/html/wp/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
