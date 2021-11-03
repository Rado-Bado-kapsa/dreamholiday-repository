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

/* themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-full-two.html.twig */
class __TwigTemplate_19b0b7ac3e653c869a34d78f229ef3340cfbe4f964af586dbdecb6cb58bffa0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "set" => 25, "for" => 26];
        $filters = ["escape" => 5, "t" => 16, "raw" => 28];
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
        echo "  <div class=\"main-map-wrapper\">
    <div id=\"listing-main-map\" class=\"listing-main-map listing-main-map-4\" style=\"height: 600px;\"></div>
  </div>
  ";
        // line 4
        if (($context["attributes"] ?? null)) {
            // line 5
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
  ";
        }
        // line 7
        echo "
  <div class=\"map-layout map-layout-wrapper clearfix\">

    <div class=\"main-listing-wrapper d-lg-block\">
      <div class=\"map-action clearfix d-none d-md-none d-sm-none d-xs-none d-lg-block\">
        <div class=\"control-map\">
          <div class=\"control-hover-show-map pretty p-switch p-fill\">
            <input type=\"checkbox\" id=\"hover-show-map\"/>
            <div class=\"state\">
                <label>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Hover Show Map"));
        echo "</label>
            </div>
          </div>
          <div class=\"control-reset-map\"><a href=\"#\" class=\"gva-reset-map btn-theme-small\">";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
        echo "</a></div>
          <div class=\"control-current-map\"><a href=\"#\" class=\"gva-current-map\"></a></div>
        </div>  
      </div>  

      <div class=\"listing-items gva-view-grid-inner lg-block-grid-";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_lg", [])), "html", null, true);
        echo " md-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_md", [])), "html", null, true);
        echo " sm-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_sm", [])), "html", null, true);
        echo " xs-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_xs", [])), "html", null, true);
        echo "\" data-drupal-views-infinite-scroll-content-wrapper-gvaloadmorelistings>
        ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "            <div class=\"item-columns\">
              <div class=\"listing-item-wrapper\" data-marker=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
            echo "</div>
            </div>
        ";
            // line 30
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </div>
    </div>  

  </div>  
  
";
        // line 37
        if (($context["attributes"] ?? null)) {
            // line 38
            echo "</div>
";
        }
        // line 40
        echo "
<script type=\"text/javascript\">
  jQuery(document).ready(function(){
    map_init();
  });
</script>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-full-two.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  137 => 38,  135 => 37,  128 => 32,  122 => 31,  120 => 30,  113 => 28,  110 => 27,  105 => 26,  103 => 25,  93 => 24,  85 => 19,  79 => 16,  68 => 7,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-full-two.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-full-two.html.twig");
    }
}
