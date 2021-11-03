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

/* themes/gavias_lozin/templates/page/header-1.html.twig */
class __TwigTemplate_284ed651dd3a4408b7f155cb6c19bf64562339fd2899f31ae2608aef5fb5bafc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 3, "if" => 4];
        $filters = ["escape" => 7, "t" => 45, "raw" => 62];
        $functions = ["gva_theme_setting" => 8, "path" => 47, "file_url" => 55];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't', 'raw'],
                ['gva_theme_setting', 'path', 'file_url']
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
        echo "<header id=\"header\" class=\"header-default\">

  ";
        // line 3
        $context["class_sticky"] = "";
        // line 4
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 5
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 6
            echo "  ";
        }
        echo "  
  <div class=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
   <div class=\"header-main button-header-";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("hide_header_button_link"), "html", null, true);
        echo "\">
      <div class=\"header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 15
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                  ";
        }
        // line 16
        echo "  
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 25
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 26
            echo "                                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                              ";
        }
        // line 28
        echo "                            </div>

                            ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 31
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 35
        echo "                          </div> 
                          <div id=\"menu-bar\" class=\"menu-bar d-lg-none d-xl-none\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                          ";
        // line 42
        if (($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("hide_header_button_link") != "hide")) {
            // line 43
            echo "                            <div class=\"header-button\">
                              ";
            // line 44
            if (($context["custom_account"] ?? null)) {
                // line 45
                echo "                                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("header_button_link"), "html", null, true);
                echo " \">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Add Listing"));
                echo "</a>
                              ";
            } else {
                // line 47
                echo "                                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Add Listing"));
                echo "</a>
                              ";
            }
            // line 49
            echo "                            </div>
                          ";
        }
        // line 50
        echo " 

                          <div class=\"gva-user-region user-region\">
                            <span class=\"icon\">
                              ";
        // line 54
        if (($context["user_picture"] ?? null)) {
            // line 55
            echo "                                <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null))]), "html", null, true);
            echo "\" alt=\"\"/>
                              ";
        } else {
            // line 56
            echo "  
                                <i class=\"fa fa-user\"></i>
                              ";
        }
        // line 59
        echo "                            </span>
                            <div class=\"user-content\">  
                              ";
        // line 61
        if (($context["custom_account"] ?? null)) {
            // line 62
            echo "                                <div class=\"account-message\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["custom_account"] ?? null)));
            echo "</div>
                              ";
        }
        // line 63
        echo "  
                              <ul class=\"user-links\">
                                ";
        // line 65
        if (($context["custom_account"] ?? null)) {
            // line 66
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("header_button_link"), "html", null, true);
            echo " \">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Add Listing"));
            echo "</a></li>
                                  <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.page"));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ My Account"));
            echo "</a></li>
                                  <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout"));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Logout"));
            echo "</a></li>
                                ";
        } else {
            // line 70
            echo "                                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Login"));
            echo "</a></li>
                                  <li><a href=\"";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("+ Register"));
            echo "</a></li>
                                ";
        }
        // line 72
        echo "  
                              </ul>
                            </div>  
                          </div>


                          ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 79
            echo "                            <div class=\"gva-search-region search-region d-none\">
                              <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                              <div class=\"search-content\">  
                                ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                              </div>  
                            </div>
                          ";
        }
        // line 86
        echo "
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/page/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 86,  251 => 82,  246 => 79,  244 => 78,  236 => 72,  229 => 71,  222 => 70,  215 => 68,  209 => 67,  201 => 66,  199 => 65,  195 => 63,  189 => 62,  187 => 61,  183 => 59,  178 => 56,  172 => 55,  170 => 54,  164 => 50,  160 => 49,  152 => 47,  143 => 45,  141 => 44,  138 => 43,  136 => 42,  127 => 35,  121 => 32,  118 => 31,  116 => 30,  112 => 28,  106 => 26,  104 => 25,  93 => 16,  87 => 15,  85 => 14,  76 => 8,  72 => 7,  67 => 6,  64 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/page/header-1.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/page/header-1.html.twig");
    }
}
