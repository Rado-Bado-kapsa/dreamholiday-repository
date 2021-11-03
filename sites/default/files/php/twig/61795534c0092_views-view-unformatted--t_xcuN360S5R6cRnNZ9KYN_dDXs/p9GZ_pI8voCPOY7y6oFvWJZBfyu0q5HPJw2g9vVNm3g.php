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

/* themes/gavias_lozin/templates/views/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_bd1652f6eab029440494f720ae5d95136348bad9cb514f8095d75a0bc2d3e884 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "set" => 61, "for" => 62];
        $filters = ["escape" => 21, "t" => 36, "raw" => 64, "length" => 101];
        $functions = ["gva_theme_setting" => 36, "path" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'raw', 'length'],
                ['gva_theme_setting', 'path']
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        if ((((($context["taxonomy_id"] ?? null) == "listing_category") || (($context["taxonomy_id"] ?? null) == "listing_locations")) || (($context["taxonomy_id"] ?? null) == "amenities"))) {
            echo " ";
            // line 24
            echo "   
  ";
            // line 25
            if (($context["attributes"] ?? null)) {
                // line 26
                echo "<div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo ">
  ";
            }
            // line 28
            echo "     
    ";
            // line 29
            if (($context["title"] ?? null)) {
                // line 30
                echo "      <h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h3>
    ";
            }
            // line 32
            echo "    <div class=\"gva-listings-map-page\">
      <div class=\"listings-map-3 map-layout-wrapper\">
        <div class=\"half-map-layout-1 clearfix\">
          <div class=\"map-action-mobile clearfix\">
            <div class=\"control-search-link\"><a class=\"btn-theme-small\" href=\"";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("listing_search_action"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search Page"));
            echo "</a></div>
            <div class=\"control-map\">
              <div class=\"control-reset-map\"><a href=\"#\" class=\"btn-theme-small gva-reset-map\">";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
            echo "</a></div>
              <div class=\"control-open-map-listtings\">
                <a href=\"#\" class=\"btn-theme-small gva-open-map\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Open Map");
            echo "</a>
                <a href=\"#\" class=\"btn-theme-small gva-open-listings d-none\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Open Listings");
            echo "</a>
              </div>
            </div>
          </div>
          
          <div class=\"main-listing-wrapper d-lg-block\">
            <div class=\"map-action clearfix d-none d-md-none d-sm-none d-lg-block\">
              <div class=\"control-search-2\" style=\"float:left;\"><a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("listing_search_action"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search Filters Page"));
            echo "</a></div>
              <div class=\"control-map\">
                <div class=\"control-hover-show-map pretty p-switch p-fill\">
                  <input type=\"checkbox\" id=\"hover-show-map\"/>
                  <div class=\"state\">
                      <label>";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Hover Show Map"));
            echo "</label>
                  </div>
                </div>
                <div class=\"control-reset-map\"><a href=\"#\" class=\"gva-reset-map\"><i class=\"la la-map-marker\"></i>";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
            echo "</a></div>
              </div>  
            </div>  

            <div class=\"listing-items gva-view-grid-inner lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2\" data-drupal-views-infinite-scroll-content-wrapper-gvaloadmorelistings>
              ";
            // line 61
            $context["i"] = 0;
            // line 62
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 63
                echo "                  <div class=\"item-columns\">
                    <div class=\"listing-item-wrapper\" data-marker=\"";
                // line 64
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
                echo "</div>
                  </div>
              ";
                // line 66
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 67
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </div>
          </div> 

          <div class=\"main-map-wrapper d-none d-md-none d-sm-none d-xs-none d-lg-block\">
            <div id=\"listing-main-map\" class=\"listing-main-map\"></div>
          </div>
        </div>  
      </div>  
    </div>
  ";
            // line 77
            if (($context["attributes"] ?? null)) {
                // line 78
                echo "</div>
  ";
            }
            // line 80
            echo "

  <script type=\"text/javascript\">
    jQuery(document).ready(function(){
      map_init();
    });
  </script>


";
        } else {
            // line 89
            echo " ";
            // line 90
            echo "
  ";
            // line 91
            $context["i"] = 0;
            // line 92
            echo "  <div class=\"categories-view-content view-content-wrap post-style-grid box\">
    ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 94
                echo "      ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 95
                echo "      ";
                if (((($context["i"] ?? null) % 2) == 1)) {
                    echo " 
        <div class=\"row\">
      ";
                }
                // line 97
                echo " 
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          ";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                echo "
        </div>
      ";
                // line 101
                if ((((($context["i"] ?? null) % 2) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " 
        </div>
      ";
                }
                // line 103
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/views/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 105,  239 => 103,  233 => 101,  228 => 99,  224 => 97,  217 => 95,  214 => 94,  210 => 93,  207 => 92,  205 => 91,  202 => 90,  200 => 89,  188 => 80,  184 => 78,  182 => 77,  171 => 68,  165 => 67,  163 => 66,  156 => 64,  153 => 63,  148 => 62,  146 => 61,  138 => 56,  132 => 53,  121 => 48,  111 => 41,  107 => 40,  102 => 38,  94 => 36,  88 => 32,  82 => 30,  80 => 29,  77 => 28,  71 => 26,  69 => 25,  66 => 24,  63 => 23,  57 => 21,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/views/views-view-unformatted--taxonomy-term.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/views/views-view-unformatted--taxonomy-term.html.twig");
    }
}
