<?php

/* themes/custom/mul001/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_fa4d7511c6e282459cdb7c20a4c99154223f596629ec716f087f44ebdd86e0d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 18);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        if (($context["primary"] ?? null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"tabs--primary nav nav-tabs\">";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
        // line 22
        if (($context["secondary"] ?? null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"tabs--secondary pagination pagination-sm\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mul001/templates/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  57 => 23,  55 => 22,  50 => 20,  45 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display primary and secondary local tasks.
 *
 * Available variables:
 * - primary: HTML list items representing primary tasks.
 * - secondary: HTML list items representing primary tasks.
 *
 * Each item in these variables (primary and secondary) can be individually
 * themed in menu-local-task.html.twig.
 *
 * @ingroup templates
 *
 * @see template_preprocess_menu_local_tasks()
 */
#}
{% if primary %}
  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
  <ul class=\"tabs--primary nav nav-tabs\">{{ primary }}</ul>
{% endif %}
{% if secondary %}
  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
  <ul class=\"tabs--secondary pagination pagination-sm\">{{ secondary }}</ul>
{% endif %}
", "themes/custom/mul001/templates/menu/menu-local-tasks.html.twig", "/home/multty/www/drupal-8.5.3/mul001/themes/custom/mul001/templates/menu/menu-local-tasks.html.twig");
    }
}
