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

/* themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-one.html.twig */
class __TwigTemplate_4525717118602184c9e619275ac0f15fd2baf31a95334a8d7c3d6756fe7e0186 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "set" => 37, "for" => 38];
        $filters = ["escape" => 3, "t" => 11, "raw" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'raw'],
                []
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
        echo " 
";
        // line 2
        if (($context["attributes"] ?? null)) {
            // line 3
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 5
        echo "   
  ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "    <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 9
        echo "  <div class=\"map-layout map-layout-wrapper clearfix\">
    <div class=\"map-action-mobile clearfix\">
      <div class=\"control-search\"><a class=\"btn-theme-small\" href=\"#\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search Filters"));
        echo "</a></div>
      <div class=\"control-map\">
        <div class=\"control-current-map\"><a href=\"#\" class=\"gva-current-map\"></a></div>        
        <div class=\"control-reset-map\"><a href=\"#\" class=\"btn-theme-small gva-reset-map\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
        echo "</a></div>
        <div class=\"control-open-map-listtings\">
          <a href=\"#\" class=\"btn-theme-small gva-open-map\">";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Open Map");
        echo "</a>
          <a href=\"#\" class=\"btn-theme-small gva-open-listings d-none\">";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Open Listings");
        echo "</a>
        </div>
      </div>
    </div>
    <div class=\"main-listing-wrapper d-lg-block\">
      <div class=\"map-action clearfix d-none d-md-none d-sm-none d-xs-none d-lg-block\">
        <div class=\"control-search\"><a class=\"btn-theme-small\" href=\"#\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search Filters"));
        echo "</a></div>
        <div class=\"control-map\">
          <div class=\"control-hover-show-map pretty p-switch p-fill\">
            <input type=\"checkbox\" id=\"hover-show-map\"/>
            <div class=\"state\">
                <label>";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Hover Show Map"));
        echo "</label>
            </div>
          </div>
          <div class=\"control-reset-map\"><a href=\"#\" class=\"gva-reset-map btn-theme-small\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
        echo "</a></div>
          <div class=\"control-current-map\"><a href=\"#\" class=\"gva-current-map\"></a></div>
        </div>  
      </div>  

      <div class=\"listing-items gva-view-grid-inner lg-block-grid-";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_lg", [])), "html", null, true);
        echo " md-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_md", [])), "html", null, true);
        echo " sm-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_sm", [])), "html", null, true);
        echo " xs-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_xs", [])), "html", null, true);
        echo "\" data-drupal-views-infinite-scroll-content-wrapper-gvaloadmorelistings>
        ";
        // line 37
        $context["i"] = 0;
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 39
            echo "            <div class=\"item-columns\">
              <div class=\"listing-item-wrapper\" data-marker=\"";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
            echo "</div>
            </div>
        ";
            // line 42
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </div>
    </div>  
    <div class=\"main-map-wrapper d-none d-md-none d-sm-none d-xs-none d-lg-block\">
      <div id=\"listing-main-map\" class=\"listing-main-map\"></div>
    </div>
  </div>  
  
";
        // line 51
        if (($context["attributes"] ?? null)) {
            // line 52
            echo "</div>
";
        }
        // line 54
        echo "

<script type=\"text/javascript\">
  jQuery(document).ready(function(){
    map_init();
  });
</script>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  173 => 52,  171 => 51,  162 => 44,  156 => 43,  154 => 42,  147 => 40,  144 => 39,  139 => 38,  137 => 37,  127 => 36,  119 => 31,  113 => 28,  105 => 23,  96 => 17,  92 => 16,  87 => 14,  81 => 11,  77 => 9,  71 => 7,  69 => 6,  66 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-one.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-one.html.twig");
    }
}
