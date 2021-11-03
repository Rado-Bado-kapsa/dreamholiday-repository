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

/* themes/gavias_lozin/templates/listings/page/page--view--listing-map-one.html.twig */
class __TwigTemplate_e9cee9799d0bdd6f1ce42f151ea60aa8eeba22df2c9a0a54286016b7282a1540 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "include" => 8];
        $filters = ["escape" => 2];
        $functions = ["gva_theme_setting" => 1, "attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['gva_theme_setting', 'attach_library']
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
        // line 1
        if ((($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("map_source") == "google") || ($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("map_source") == ""))) {
            // line 2
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gavias_lozin/listing_init.gmap"), "html", null, true);
            echo "
";
        }
        // line 3
        echo " 
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gavias_lozin/listing_init"), "html", null, true);
        echo "

<div class=\"gva-body-wrapper gva-listings-map-page mode-filter-fixed listings-map-1 clearfix\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 8
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_lozin/templates/listings/page/page--view--listing-map-one.html.twig", 8)->display($context);
        // line 9
        echo "\t\t
\t\t<div role=\"main\" class=\"main main-page\">

\t\t\t";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 13
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"content-inner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container-full\">
\t\t\t\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/page/page--view--listing-map-one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 30,  106 => 29,  104 => 28,  97 => 23,  88 => 17,  82 => 13,  80 => 12,  75 => 9,  73 => 8,  66 => 4,  63 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/page/page--view--listing-map-one.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/listings/page/page--view--listing-map-one.html.twig");
    }
}
