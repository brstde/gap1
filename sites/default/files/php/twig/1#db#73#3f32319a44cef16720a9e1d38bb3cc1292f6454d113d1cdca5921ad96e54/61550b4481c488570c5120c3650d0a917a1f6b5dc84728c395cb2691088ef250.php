<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_db733f32319a44cef16720a9e1d38bb3cc1292f6454d113d1cdca5921ad96e54 extends Twig_Template
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
        // line 25
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "toolbar"), "method"), "html", null, true);
        echo ">
  <nav";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null), "addClass", array(0 => "toolbar-bar"), "method"), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["tab"], "attributes", array()), "addClass", array(0 => "toolbar-tab"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tab"], "link", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </nav>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tray"], "attributes", array()), "html", null, true);
            echo ">
    ";
            // line 35
            if ($this->getAttribute($context["tray"], "label", array())) {
                // line 36
                echo "      <nav class=\"toolbar-lining\" role=\"navigation\" aria-label=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tray"], "label", array()), "html", null, true);
                echo "\">
          <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 37
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tray"], "label", array()), "html", null, true);
                echo "</h3>
    ";
            } else {
                // line 39
                echo "      <nav class=\"toolbar-lining\" role=\"navigation\">
    ";
            }
            // line 41
            echo "        ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tray"], "links", array()), "html", null, true);
            echo "
      </nav>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 45
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remainder"]) ? $context["remainder"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  62 => 35,  57 => 34,  54 => 33,  50 => 32,  47 => 31,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  19 => 25,);
    }
}
