<?php

/* themes/legumes/templates/node--produit.html.twig */
class __TwigTemplate_2a2167b645cd6b08a2bf69ec413070ada684799673475f2838cd167c0356628a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("dump" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('dump')
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_var_dump($this->env, $context, (isset($context["Taxonomie"]) ? $context["Taxonomie"] : null)), "html", null, true));
        echo "
<div>
    <div class =\"mouna\">
        LOULOU
        <h1> ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true));
        echo "</h1>
        HIHI
        <p><h2>";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prix"]) ? $context["prix"] : null), "html", null, true));
        echo "</h2></p>
        <p> ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["no_content_text"]) ? $context["no_content_text"] : null), "html", null, true));
        echo "</p>
    </div>
    <div class=\"ll\">
        liste des termes:
     ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["Taxonomie"]) ? $context["Taxonomie"] : null), "html", null, true));
        echo "
    </div>
    <div class=\"mouna\">
        <img src = \"/";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/tomates-nancybuzz.jpeg\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/legumes/templates/node--produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  66 => 12,  59 => 8,  55 => 7,  50 => 5,  43 => 1,);
    }
}
/* {{ dump(Taxonomie) }}*/
/* <div>*/
/*     <div class ="mouna">*/
/*         LOULOU*/
/*         <h1> {{titre}}</h1>*/
/*         HIHI*/
/*         <p><h2>{{ prix }}</h2></p>*/
/*         <p> {{ no_content_text }}</p>*/
/*     </div>*/
/*     <div class="ll">*/
/*         liste des termes:*/
/*      {{ Taxonomie}}*/
/*     </div>*/
/*     <div class="mouna">*/
/*         <img src = "/{{ base_path ~ directory }}/images/tomates-nancybuzz.jpeg">*/
/*     </div>*/
/* </div>*/
