<?php

/* partials/simplesearch_searchbox_top.html.twig */
class __TwigTemplate_fb6b72910cf5b7783e80a73c0c14c438983045f8d60cc415a6c87691617ef039 extends Twig_Template
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
        echo "<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SEARCH_FIELD");
        echo "\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-search-input2=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"{{ 'SEARCH_FIELD'|t }}\" value=\"{{ query }}\" data-search-input2=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox_top.html.twig", "/Users/mariaszubski/Design/GitHub/recipes/grav/user/themes/receptar/templates/partials/simplesearch_searchbox_top.html.twig");
    }
}
