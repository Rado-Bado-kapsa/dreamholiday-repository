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

/* themes/gavias_lozin/templates/node/node--listing.html.twig */
class __TwigTemplate_aa5317403ab62fe674e31b1a5e8814aa7fc19ca096b08c8f2525cc349cf299b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 17];
        $filters = ["clean_class" => 5, "escape" => 13, "render" => 21, "t" => 24, "trim" => 31, "striptags" => 42, "image_style" => 60, "raw" => 234];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render', 't', 'trim', 'striptags', 'image_style', 'raw'],
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 7 => "clearfix"];
        // line 13
        ob_start(function () { return ''; });
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        $context["conBody"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        ob_start(function () { return ''; });
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])), "html", null, true);
        $context["conAddress"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        ob_start(function () { return ''; });
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_video", []), "value", [])), "html", null, true);
        $context["conVideo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "<!-- Start Display article for teaser page -->
";
        // line 17
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  
  <div class=\"listing-block v2\">
    
    ";
            // line 21
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_image", []))) {
                // line 22
                echo "      <div class=\"listing-image text-center\">
        ";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_image", [])), "html", null, true);
                echo "
        <span class=\"show-in-map\"><a href=\"#\" title=\"";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Show In Map"));
                echo "\"><i class=\"la la-map-marker\"></i></a></span>
        <div class=\"listing-preview\">
          ";
                // line 26
                if ($this->getAttribute(($context["content"] ?? null), "field_listing_gallery", [])) {
                    // line 27
                    echo "            <div class=\"preview-gallery\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_gallery", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 28
                echo "  
          ";
                // line 29
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_video", []))) {
                    // line 30
                    echo "            <div class=\"preview-video\">
              <a class=\"popup-video\" href=\"";
                    // line 31
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["conVideo"] ?? null))), "html", null, true);
                    echo "\"><i class=\"icon la la-camera\"></i>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Video");
                    echo "</a>
            </div>
          ";
                }
                // line 34
                echo "        </div>  
      </div>
    ";
            }
            // line 36
            echo "  

    <div class=\"listing-content clearfix\">  
      <div class=\"listing-info\">
        <h3 class=\"title\"><a href=\"";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
        ";
            // line 41
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])) {
                // line 42
                echo "          <div class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</div>
        ";
            }
            // line 44
            echo "        ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_phone", []))) {
                // line 45
                echo "          <div class=\"phone\"><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 47
            echo "      </div>
      <div class=\"listing-footer\">
        <div class=\"left listing-category\">";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_category", [])), "html", null, true);
            echo "</div>
        <div class=\"right listing-location\"><i class=\"icon la la-map-marker\"></i>";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_location", [])), "html", null, true);
            echo "</div>
      </div>
    </div>  
    <div class=\"listing-data hidden\">
      <span class=\"data-lat\">";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lat", [])), "html", null, true);
            echo "</span>
      <span class=\"data-lon\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lon", [])), "html", null, true);
            echo "</span>
      <span class=\"data-html\">
        <span class=\"gva-map-content-popup\">
          <span class=\"image\">
            <a href=\"";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">
              <img src=\"";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_image", []), "entity", []), "uri", []), "value", [])), "small"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_image", []), "alt", [])), "html", null, true);
            echo "\"/>
            </a>
          </span>
          <span class=\"content-inner\">
            <span class=\"title\"><a href=\"";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "</a></span>
            ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])) {
                // line 66
                echo "              <span class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</span>
            ";
            }
            // line 68
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])) {
                // line 69
                echo "              <span class=\"phone\"><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</span>
            ";
            }
            // line 71
            echo "          </span>  
        </span>
      </span>
    </div>
  </div> 

";
        } elseif ((        // line 77
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 78
            echo "  <div class=\"listing-block\">
    <div class=\"listing-image text-center\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_image", [])), "html", null, true);
            echo "
      <span class=\"show-in-map\"><a href=\"#\" title=\"";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Show In Map"));
            echo "\"><i class=\"la la-map-marker\"></i></a></span>
      <div class=\"listing-preview\">
        ";
            // line 83
            if ($this->getAttribute(($context["content"] ?? null), "field_listing_gallery", [])) {
                // line 84
                echo "          <div class=\"preview-gallery\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_gallery", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 85
            echo "  
        ";
            // line 86
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_video", []))) {
                // line 87
                echo "          <div class=\"preview-video\">
            <a class=\"popup-video\" href=\"";
                // line 88
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["conVideo"] ?? null))), "html", null, true);
                echo "\"><i class=\"icon la la-camera\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Video");
                echo "</a>
          </div>
        ";
            }
            // line 91
            echo "      </div>  
    </div>
    <div class=\"listing-content clearfix\">  
      <div class=\"listing-info\">
        <h3 class=\"title\"><a href=\"";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
        <div class=\"block-content\">";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conBody"] ?? null))), "html", null, true);
            echo "</div>
        ";
            // line 97
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])) {
                // line 98
                echo "          <div class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</div>
        ";
            }
            // line 100
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])) {
                // line 101
                echo "          <div class=\"phone\"><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 103
            echo "      </div>
      <div class=\"listing-footer\">
        <div class=\"left listing-category\">";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_category", [])), "html", null, true);
            echo "</div>
        <div class=\"right listing-location\"><i class=\"icon la la-map-marker\"></i>";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_location", [])), "html", null, true);
            echo "</div>
      </div>
    </div>  
    <div class=\"listing-data hidden\">
      <span class=\"data-lat\">";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lat", [])), "html", null, true);
            echo "</span>
      <span class=\"data-lon\">";
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lon", [])), "html", null, true);
            echo "</span>
      <span class=\"data-html\">
        <span class=\"gva-map-content-popup\">
          <span class=\"image\">
            <a href=\"";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">
              <img src=\"";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_image", []), "entity", []), "uri", []), "value", [])), "small"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_image", []), "alt", [])), "html", null, true);
            echo "\"/>
            </a>
          </span>
          <span class=\"content-inner\">
            <span class=\"title\"><a href=\"";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "</a></span>
            ";
            // line 121
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])) {
                // line 122
                echo "              <span class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</span>
            ";
            }
            // line 124
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])) {
                // line 125
                echo "              <span class=\"phone\"><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</span>
            ";
            }
            // line 127
            echo "          </span>  
        </span>
      </span>
    </div>
  </div>

";
        } else {
            // line 135
            echo "
<article";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "addClass", [0 => "node-listing-single"], "method")), "html", null, true);
            echo ">
  <div class=\"listing-top\">
    <div id=\"listing-home\" class=\"listing-gallery before-help-region\">
      ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_gallery", [])), "html", null, true);
            echo "
    </div>
    
    <div class=\"container listing-top-content\">
      <div class=\"row\">
        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
          <div class=\"listing-categories\">";
            // line 145
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_category", [])), "html", null, true);
            echo "</div>
          <h1";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
          <div class=\"listing-price\"><span class=\"label\">";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Price"));
            echo ": </span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_price", [])), "html", null, true);
            echo "</div>
        </div>
      </div>    
    </div> 

    <div class=\"listing-nav sticky-listing-nav\">
      <div class=\"listing-nav-inner\">
        <div class=\"listing-nav-inner-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <ul>
                  <li><a href=\"#listing-home\">";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "</a></li>
                  <li><a href=\"#listing-description\">";
            // line 160
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
            echo "</a></li>
                  <li><a href=\"#listing-features\">";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Listing Features"));
            echo "</a></li>
                  <li><a href=\"#listing-location\">";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Location"));
            echo "</a></li>
                  <li><a href=\"#listing-video\">";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Video"));
            echo "</a></li>
                  <li><a href=\"#listing-comment\">";
            // line 164
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Comment"));
            echo "</a></li>
                </ul>
              </div>
            </div>  
          </div>
        </div>  
      </div>  
    </div>  

  </div>  

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"listing-content-main\">
          
          ";
            // line 180
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 181
                echo "            <div class=\"listing-info-block listing-description\" id=\"listing-description\">
              <div class=\"title\"><i class=\"la la-file-text\"></i>";
                // line 182
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
                echo "</div>
              <div class=\"block-content\">
                ";
                // line 184
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "
              </div>
            </div>  
          ";
            }
            // line 187
            echo "  

          ";
            // line 189
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_amenities", []))) {
                // line 190
                echo "            <div class=\"listing-info-block listing-amenties\" id=\"listing-features\">
              <div class=\"title\"><i class=\"la la-list-alt\"></i>";
                // line 191
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Amenties"));
                echo "</div>
              <div class=\"block-content\">
                ";
                // line 193
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_amenities", [])), "html", null, true);
                echo "
              </div>  
            </div> 
          ";
            }
            // line 196
            echo "  

          <div class=\"listing-info-block listing-location\" id=\"listing-location\">
            <div class=\"title\"><i class=\"la la-map-marker\"></i>";
            // line 199
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Location"));
            echo "</div>
            <div class=\"block-content\">
              <div class=\"listing-location-taxonomy\">";
            // line 201
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_location", [])), "html", null, true);
            echo "</div>
              <div class=\"listing-main-map\" id=\"listing-main-map\"></div>
              <div class=\"listing-items hidden\">
                <div class=\"listing-block\">
                  <div class=\"listing-data hidden\">
                    ";
            // line 206
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_category", [])), "html", null, true);
            echo "
                    <span class=\"data-lat\">";
            // line 207
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lat", [])), "html", null, true);
            echo "</span>
                    <span class=\"data-lon\">";
            // line 208
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_map", []), "lon", [])), "html", null, true);
            echo "</span>
                    <span class=\"data-html\">
                      <span class=\"gva-map-content-popup\">
                        <span class=\"image\">
                          <img src=\"";
            // line 212
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_image", []), "entity", []), "uri", []), "value", [])), "small"), "html", null, true);
            echo "\" />
                        </span>
                        <span class=\"content-inner\">
                          <span class=\"title\"><a href=\"";
            // line 215
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "</a></span>
                          ";
            // line 216
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_address", []), "value", [])) {
                // line 217
                echo "                            <span class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</span>
                          ";
            }
            // line 219
            echo "                          ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])) {
                // line 220
                echo "                            <span class=\"phone\"><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</span>
                          ";
            }
            // line 222
            echo "                        </span>  
                      </span>
                    </span>
                  </div>
                </div>  
              </div>
            </div>
          </div>

          <div class=\"listing-info-block listing-video\" id=\"listing-video\">
            <div class=\"title\"><i class=\"la la-video-camera\"></i>";
            // line 232
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Video"));
            echo "</div>
            <div class=\"block-content\">
              ";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["listing_video"] ?? null)));
            echo "
            </div>  
          </div>

          ";
            // line 238
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "comment", []))) {
                // line 239
                echo "            <div class=\"listing-info-block listing-comment\" id=\"listing-comment\">
              <div class=\"title\">";
                // line 240
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Comment"));
                echo "</div>
              <div class=\"block-content\">
                <div id=\"node-single-comment\">
                  ";
                // line 243
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
                </div>
              </div>
            </div>
          ";
            }
            // line 247
            echo "  

        </div>  
      </div>
      <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"listing-content-main\">
          <div class=\"listing-info-block business-info\">
            <div class=\"title\"><i class=\"la la-map-signs\"></i>";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Essential Info"));
            echo "</div>
            <div class=\"block-content\">
              <ul class=\"business-info\">

                ";
            // line 258
            if (($context["conAddress"] ?? null)) {
                // line 259
                echo "                  <li><span class=\"address\"><i class=\"icon la la-map\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null))), "html", null, true);
                echo "</span></li>
                ";
            }
            // line 261
            echo "
                ";
            // line 262
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_email", []))) {
                // line 263
                echo "                  <li><a href=\"mailto:";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_email", []), "value", [])), "html", null, true);
                echo "\">
                    <i class=\"icon la la-envelope\"></i>";
                // line 264
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_email", []), "value", [])), "html", null, true);
                echo "
                  </a></li>
                ";
            }
            // line 267
            echo "
                ";
            // line 268
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_phone", []))) {
                // line 269
                echo "                  <li><i class=\"icon la la-paperclip\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_phone", []), "value", [])), "html", null, true);
                echo "</li>
                ";
            }
            // line 270
            echo "  

                ";
            // line 272
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_website", []))) {
                // line 273
                echo "                  <li><span><i class=\"icon la la-globe\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_website", []), "value", [])), "html", null, true);
                echo "</span></li>
                ";
            }
            // line 274
            echo "  

              </ul>

              <ul class=\"listing-socials\">

                ";
            // line 280
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_facebook", []), "value", [])) {
                // line 281
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"icon la la-facebook\"></i></a></li>
                ";
            }
            // line 283
            echo "
                ";
            // line 284
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_google", []), "value", [])) {
                // line 285
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_google", []), "value", [])), "html", null, true);
                echo "\"><i class=\"icon la la-google\"></i></a></li>
                ";
            }
            // line 287
            echo "
                ";
            // line 288
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_linkedin", []), "value", [])) {
                // line 289
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_linkedin", []), "value", [])), "html", null, true);
                echo "\"><i class=\"icon la la-linkedin\"></i></a></li>
                ";
            }
            // line 291
            echo "
                ";
            // line 292
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_twitter", []), "value", [])) {
                // line 293
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_listing_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"icon la la-twitter\"></i></a></li>
                ";
            }
            // line 295
            echo "
              </ul>
            </div>  
          </div>

          ";
            // line 300
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_time", []))) {
                // line 301
                echo "            <div class=\"listing-info-block business-hours\">
              <div class=\"title\"><i class=\"la la-info-circle\"></i>";
                // line 302
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes"));
                echo "</div>
              <div class=\"block-content\">
                ";
                // line 304
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_time", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 308
            echo "
          ";
            // line 309
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_listing_tags", []))) {
                // line 310
                echo "            <div class=\"listing-info-block listing-tags\">
              <div class=\"title\"><i class=\"la la-tags\"></i>";
                // line 311
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags"));
                echo "</div>
              <div class=\"block-content\">
                ";
                // line 313
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_listing_tags", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 317
            echo "
          ";
            // line 318
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["listing_sidebar"] ?? null)), "html", null, true);
            echo "

        </div>  

      </div>
    </div>
  </div>  
</article>
<script>
  map_init('single');
</script>

<!-- End Display article for detail page -->
";
        }
        // line 332
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/node/node--listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 332,  755 => 318,  752 => 317,  745 => 313,  740 => 311,  737 => 310,  735 => 309,  732 => 308,  725 => 304,  720 => 302,  717 => 301,  715 => 300,  708 => 295,  702 => 293,  700 => 292,  697 => 291,  691 => 289,  689 => 288,  686 => 287,  680 => 285,  678 => 284,  675 => 283,  669 => 281,  667 => 280,  659 => 274,  653 => 273,  651 => 272,  647 => 270,  641 => 269,  639 => 268,  636 => 267,  630 => 264,  625 => 263,  623 => 262,  620 => 261,  614 => 259,  612 => 258,  605 => 254,  596 => 247,  588 => 243,  582 => 240,  579 => 239,  577 => 238,  570 => 234,  565 => 232,  553 => 222,  547 => 220,  544 => 219,  538 => 217,  536 => 216,  530 => 215,  524 => 212,  517 => 208,  513 => 207,  509 => 206,  501 => 201,  496 => 199,  491 => 196,  484 => 193,  479 => 191,  476 => 190,  474 => 189,  470 => 187,  463 => 184,  458 => 182,  455 => 181,  453 => 180,  434 => 164,  430 => 163,  426 => 162,  422 => 161,  418 => 160,  414 => 159,  397 => 147,  391 => 146,  387 => 145,  378 => 139,  372 => 136,  369 => 135,  360 => 127,  354 => 125,  351 => 124,  345 => 122,  343 => 121,  337 => 120,  328 => 116,  324 => 115,  317 => 111,  313 => 110,  306 => 106,  302 => 105,  298 => 103,  292 => 101,  289 => 100,  283 => 98,  281 => 97,  277 => 96,  271 => 95,  265 => 91,  257 => 88,  254 => 87,  252 => 86,  249 => 85,  243 => 84,  241 => 83,  236 => 81,  232 => 80,  228 => 78,  226 => 77,  218 => 71,  212 => 69,  209 => 68,  203 => 66,  201 => 65,  195 => 64,  186 => 60,  182 => 59,  175 => 55,  171 => 54,  164 => 50,  160 => 49,  156 => 47,  150 => 45,  147 => 44,  141 => 42,  139 => 41,  133 => 40,  127 => 36,  122 => 34,  114 => 31,  111 => 30,  109 => 29,  106 => 28,  100 => 27,  98 => 26,  93 => 24,  89 => 23,  86 => 22,  84 => 21,  77 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/node/node--listing.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/node/node--listing.html.twig");
    }
}
