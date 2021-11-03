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

/* themes/gavias_lozin/templates/node/node--team.html.twig */
class __TwigTemplate_4cb9ddab6cb54b913a24cee93d2038cbf69732950763199290715020d7c7726d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 14, "for" => 40];
        $filters = ["clean_class" => 4, "escape" => 16, "e" => 36, "split" => 41, "t" => 120, "without" => 139];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'split', 't', 'without'],
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
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 

<div";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
      <div class=\"socials-team\">
        ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 22
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 23
            echo " 
        ";
            // line 24
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])) {
                // line 25
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 28
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 29
            echo " 
        ";
            // line 30
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 31
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 32
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_skills", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "--");
                // line 42
                echo "            ";
                if (($this->getAttribute(($context["skill"] ?? null), "0", [], "array") && $this->getAttribute(($context["skill"] ?? null), "1", [], "array"))) {
                    // line 43
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 44
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "0", [], "array")), "html", null, true);
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 46
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 47
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 50
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo " 
    </div>
  </div>
</div>  

";
        } elseif ((        // line 57
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 58
            echo "
<div";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
    </div>
    <div class=\"team-content\">
      <div class=\"socials-team\">
        ";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 67
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 68
            echo " 
        ";
            // line 69
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])) {
                // line 70
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 71
            echo " 
        ";
            // line 72
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 73
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 74
            echo " 
        ";
            // line 75
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 76
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 77
            echo " 
      </div>
      <div class=\"team-name\"><a href=\"";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_skills", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "--");
                // line 85
                echo "            ";
                if (($this->getAttribute(($context["skill"] ?? null), "0", [], "array") && $this->getAttribute(($context["skill"] ?? null), "1", [], "array"))) {
                    // line 86
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 87
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "0", [], "array")), "html", null, true);
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 89
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 90
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 93
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo " 
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 102
            echo "<!-- Start Display article for detail page -->

<article";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "addClass", [0 => "node-detail"], "method")), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</div>
      <div class=\"job\">";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_description", [])), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_contact", [])), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 124
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_link", []), "value", [])));
                echo "\">
                  <i class=\"";
                // line 125
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", [], "method"), "field_team_social_icon", []), "value", [])));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_education", [])), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
      ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", [])), "html", null, true);
            echo " </div>

    ";
            // line 144
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 145
                echo "      <div id=\"node-single-comment\">
        ";
                // line 146
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 148
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 155
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 155,  413 => 148,  407 => 146,  404 => 145,  402 => 144,  397 => 142,  391 => 139,  387 => 138,  378 => 132,  374 => 131,  368 => 127,  359 => 125,  354 => 124,  350 => 123,  345 => 121,  341 => 120,  334 => 116,  327 => 112,  321 => 109,  317 => 108,  310 => 104,  306 => 102,  297 => 95,  289 => 93,  282 => 90,  278 => 89,  273 => 87,  270 => 86,  267 => 85,  264 => 84,  260 => 83,  254 => 80,  248 => 79,  244 => 77,  238 => 76,  236 => 75,  233 => 74,  227 => 73,  225 => 72,  222 => 71,  216 => 70,  214 => 69,  211 => 68,  205 => 67,  203 => 66,  196 => 62,  190 => 59,  187 => 58,  185 => 57,  178 => 52,  170 => 50,  163 => 47,  159 => 46,  154 => 44,  151 => 43,  148 => 42,  145 => 41,  141 => 40,  135 => 37,  129 => 36,  123 => 32,  117 => 31,  115 => 30,  112 => 29,  106 => 28,  104 => 27,  101 => 26,  95 => 25,  93 => 24,  90 => 23,  84 => 22,  82 => 21,  77 => 19,  71 => 16,  66 => 14,  62 => 12,  60 => 8,  59 => 7,  58 => 6,  57 => 5,  56 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/node/node--team.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/node/node--team.html.twig");
    }
}
