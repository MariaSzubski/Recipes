<?php

/* partials/footer.html.twig */
class __TwigTemplate_f4134af414e0e4154fa82c001ff0882dfcd4b63723d77853f7ca58390314a7a9 extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           ";
        // line 5
        if ($this->getAttribute(($context["site"] ?? null), "copyright", array())) {
            // line 6
            echo "           ";
            echo $this->getAttribute(($context["site"] ?? null), "copyright", array());
            echo "
           ";
        }
        // line 8
        echo "         </div>
      </div>
   </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           {% if site.copyright %}
           {{ site.copyright }}
           {% endif %}
         </div>
      </div>
   </div>
</footer>
", "partials/footer.html.twig", "/Users/mariaszubski/Design/GitHub/recipes/grav/user/themes/receptar/templates/partials/footer.html.twig");
    }
}
