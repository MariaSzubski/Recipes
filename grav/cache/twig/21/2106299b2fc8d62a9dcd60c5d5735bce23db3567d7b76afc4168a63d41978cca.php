<?php

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_a86fa7a02b3e6366d28da952728de8ea7d97464ae68f037192bf03cdab079344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 5
            echo "        ";
            $context["value"] = $this->getAttribute(($context["admin"] ?? null), "getLastPageRoute", array());
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["defaults"] = array("show_root" => true, "show_all" => true, "show_slug" => true);
        // line 8
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 9
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/pages/pages.html.twig\" %}

{% block input %}
    {% if value is empty %}
        {% set value = admin.getLastPageRoute %}
    {% endif %}
    {% set defaults = {show_root:true, show_all:true, show_slug:true} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "/Users/mariaszubski/Design/GitHub/recipes/grav/user/plugins/admin/themes/grav/templates/forms/fields/parents/parents.html.twig");
    }
}
