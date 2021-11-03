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

/* themes/gavias_lozin/templates/user/user.html.twig */
class __TwigTemplate_86392f4db8ebc3c9d7762462d8c511543d84210a970026e4641abae2b215186f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21];
        $filters = ["escape" => 19, "without" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
        // line 19
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "profile user-profile"], "method")), "html", null, true);
        echo ">
   <div class=\"row\">
      ";
        // line 21
        if (($context["listings_user"] ?? null)) {
            // line 22
            echo "         <div class=\"col-xl-9 col-lg-9 col-md-8 col-sm-12 col-xs-12\">
            ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["listings_user"] ?? null)), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (($context["listings_user"] ?? null)) {
            // line 28
            echo "         <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12\">
      ";
        } else {
            // line 29
            echo "   
         <div class=\"col-md-12 col-xs-12\">
      ";
        }
        // line 31
        echo "   
         <div class=\"user-information\">
            ";
        // line 33
        if ($this->getAttribute(($context["content"] ?? null), "user_picture", [])) {
            // line 34
            echo "               <div class=\"user-picture\">
                  ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "user_picture", [])), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 37
        echo "    
            ";
        // line 38
        if ($this->getAttribute(($context["content"] ?? null), "field_full_name", [])) {
            // line 39
            echo "               <div class=\"user-fullname\">
                  ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_full_name", [])), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 42
        echo "      
            ";
        // line 43
        if (($context["content"] ?? null)) {
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "user_picture", "field_full_name"), "html", null, true);
        }
        // line 46
        echo "         </div>   
      </div>
   </div>  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  120 => 44,  118 => 43,  115 => 42,  109 => 40,  106 => 39,  104 => 38,  101 => 37,  95 => 35,  92 => 34,  90 => 33,  86 => 31,  81 => 29,  77 => 28,  75 => 27,  72 => 26,  66 => 23,  63 => 22,  61 => 21,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/user/user.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/user/user.html.twig");
    }
}
