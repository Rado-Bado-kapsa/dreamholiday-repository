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

/* themes/gavias_lozin/templates/user/page--user--register.html.twig */
class __TwigTemplate_30b86661c1c32f0d3a0ef5c5ded0ce5bbdd207718ac60bfba649c217026fa1a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 7
        echo "
<div class=\"page-user-login gva-body-page body-page\">
   <div class=\"bg\"></div>
   <div role=\"main\" class=\"main main-page\">
      <div class=\"branding text-center\">
         ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 13
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
         ";
        }
        // line 15
        echo "      </div>
      <div class=\"page-use-main-content\">
         ";
        // line 17
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 18
            echo "            <div class=\"help show\">
               <div class=\"container\">
                  <div class=\"content-inner\">
                     ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
                  </div>
               </div>
            </div>
         ";
        }
        // line 26
        echo "         <div class=\"clearfix\"></div>
         <div id=\"content\" class=\"content content-full\">
            ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 29
            echo "               <div class=\"content-main\">
                  ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 33
        echo "         </div>
      </div>   
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/user/page--user--register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  98 => 30,  95 => 29,  93 => 28,  89 => 26,  81 => 21,  76 => 18,  74 => 17,  70 => 15,  64 => 13,  62 => 12,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/user/page--user--register.html.twig", "/home/dreamhol/public_html/themes/gavias_lozin/templates/user/page--user--register.html.twig");
    }
}
