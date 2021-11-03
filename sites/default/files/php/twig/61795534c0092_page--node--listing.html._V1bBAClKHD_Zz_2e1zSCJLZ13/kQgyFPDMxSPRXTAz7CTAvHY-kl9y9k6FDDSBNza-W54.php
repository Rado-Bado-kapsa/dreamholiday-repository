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

/* themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig */
class __TwigTemplate_37276226bf6be37107c0fc1cce5ac58f1b179805bf24e25768e259169b74139e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 6, "include" => 9];
        $filters = ["escape" => 2];
        $functions = ["gva_theme_setting" => 1, "attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
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

";
        // line 6
        $context["has_breadcrumb"] = "";
        // line 7
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 9
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig", 9)->display($context);
        // line 10
        echo "\t\t
\t\t";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 12
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 13
            echo "\t\t\t<div class=\"breadcrumbs hidden\">
\t\t\t\t";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 17
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null)), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 22
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t

\t\t\t";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 28
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"content-inner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
\t\t\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 41
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container-full container-bg\">
\t\t\t\t\t";
        // line 56
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 61
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 67
        echo "
\t\t\t";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 69
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 77
        echo "\t\t\t
\t\t</div>

\t</div>

\t";
        // line 82
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig", 82)->display($context);
        // line 83
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 83,  210 => 82,  203 => 77,  195 => 72,  190 => 69,  188 => 68,  185 => 67,  178 => 63,  174 => 61,  172 => 60,  167 => 57,  165 => 56,  158 => 51,  149 => 45,  143 => 41,  141 => 40,  137 => 38,  128 => 32,  122 => 28,  120 => 27,  116 => 25,  110 => 23,  107 => 22,  105 => 21,  99 => 18,  96 => 17,  90 => 14,  87 => 13,  84 => 12,  82 => 11,  79 => 10,  77 => 9,  73 => 7,  71 => 6,  66 => 4,  63 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/listings/page/page--node--listing.html.twig");
    }
}
