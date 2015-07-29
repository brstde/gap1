<?php

/* themes/custom/gapminder/templates/taxonomy-term--headers.html.twig */
class __TwigTemplate_4902a6f32c3f09e5fdde59fc989f0fcb1dda44786bb63b29c789a830a32167f1 extends Twig_Template
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
        // line 24
        echo "<div class=\"page-conatiner taxo\">
    ";
        // line 25
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "taxotranslate", array())) {
            // line 26
            echo "        <span class=\"translate-link\"><a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "taxotranslate", array()), "html", null, true);
            echo "\">Translate</a></span>
     ";
        }
        // line 27
        echo "       
    <div class=\"image-title-container\">
        <div class=\"top-image\">
        ";
        // line 30
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_term_image", array()), "html", null, true);
        echo "
        </div>
        <div class=\"heading-1\">
        ";
        // line 33
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "
        </div>
    </div>
<div class=\"content-part\">
";
        // line 37
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), "html", null, true);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/taxonomy-term--headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 37,  41 => 33,  35 => 30,  30 => 27,  24 => 26,  22 => 25,  19 => 24,);
    }
}
