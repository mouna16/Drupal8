<?php

/* themes/legumes/templates/page.html.twig */
class __TwigTemplate_8cb2523bb94d120540415f8cabbcca9afc531b7f11bf84049f59ef0b8f887098 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page\">
    <section id=\"headline\">
    </section>
    <header id =\"header\">
        <div class =\"containerheader\">
            ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        </div>
    </header>
    <section id=\"main\">
        <div class =\"containercontent\">
            ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
    </section>
    ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 15
            echo "    <footer id =\"footer\">
        <div class =\"containerfooter\">
            ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
        </div>
    </footer>
    ";
        }
        // line 21
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/legumes/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  70 => 17,  66 => 15,  64 => 14,  58 => 11,  50 => 6,  43 => 1,);
    }
}
/* <div id="page">*/
/*     <section id="headline">*/
/*     </section>*/
/*     <header id ="header">*/
/*         <div class ="containerheader">*/
/*             {{ page.header }}*/
/*         </div>*/
/*     </header>*/
/*     <section id="main">*/
/*         <div class ="containercontent">*/
/*             {{ page.content }}*/
/*         </div>*/
/*     </section>*/
/*     {% if page.footer %}*/
/*     <footer id ="footer">*/
/*         <div class ="containerfooter">*/
/*             {{ page.footer }}*/
/*         </div>*/
/*     </footer>*/
/*     {% endif %}*/
/* </div>*/
