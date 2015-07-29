<?php

/* {# inline_template_start #}<a href="{{ path }} " target="_blank">{{ title }}</a> */
class __TwigTemplate_962a2ffe277820926c6b21b78e7c32ad492318188c7dee64fa98943126ea994e extends Twig_Template
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
        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo " \" target=\"_blank\">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"{{ path }} \" target=\"_blank\">{{ title }}</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
