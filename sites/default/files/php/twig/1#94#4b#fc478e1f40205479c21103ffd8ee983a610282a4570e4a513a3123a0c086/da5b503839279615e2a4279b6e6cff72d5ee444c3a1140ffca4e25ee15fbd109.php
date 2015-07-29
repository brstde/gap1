<?php

/* themes/custom/gapminder/templates/page.html.twig */
class __TwigTemplate_944bfc478e1f40205479c21103ffd8ee983a610282a4570e4a513a3123a0c086 extends Twig_Template
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
        // line 75
        echo "<div id=\"page-wrapper\" class=\"inner-page-wrapper\">
  <div id=\"page\" class=\"innerpages\">
      <span class=\"openleftbar\"><img src=\"";
        // line 77
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
      <span class=\"closeleftbar\"><img src=\"";
        // line 78
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
        <div class=\"mobile_logo\">
            ";
        // line 80
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mobile_header_logo"]) ? $context["mobile_header_logo"] : null), "html", null, true);
        echo "
          <div class=\"responsivemenu\">
              ";
        // line 83
        echo "              <div class=\"mobile_searchbox\">
                  <gcse:searchbox-only resultsUrl=\"";
        // line 84
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/gsearch\" queryParameterName=\"q\" gname=\"mobilesearch\"></gcse:searchbox-only>
              </div>
              <div class=\"lang_dropdown\">
                  ";
        // line 87
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["LangDropdown"]) ? $context["LangDropdown"] : null));
        echo "
              </div>
              <div class=\"user_account_menu\">
                ";
        // line 90
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_account", array()), "html", null, true);
        echo " 
              </div>
              <div class=\"mobile_menu inner_menu\">
                  <li class=\"goback\">Home</li>
                  ";
        // line 94
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
              </div>
          </div>   
        </div>  
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 98
        echo $this->env->getExtension('drupal_core')->renderVar(t("Site header"));
        echo "\">     
          <div class=\"section layout-container clearfix headertop\">
                ";
        // line 100
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "  
            <div class=\"header_right_section\">
                <span>
                ";
        // line 103
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["LangDropdown"]) ? $context["LangDropdown"] : null));
        echo "             
                </span>               
                <div class=\"google-search-box\">
                    <span class=\"gapminder-gst\">
                        <gcse:searchbox-only resultsUrl=\"";
        // line 107
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/gsearch\" queryParameterName=\"q\" gname=\"storesearch\"></gcse:searchbox-only>
                    </span>
                </div>     
                ";
        // line 110
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_account", array()), "html", null, true);
        echo "   
            </div>
          </div>
        </header>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
    ";
        // line 115
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true);
        echo "        
      <div id=\"main\" class=\"layout-main clearfix\">
";
        // line 118
        echo "    ";
        if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array())) {
            // line 119
            echo "        ";
            $context["available"] = "page";
            // line 120
            echo "     ";
        }
        echo "    
";
        // line 121
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 122
            echo "    <div class=\"container-left ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
";
        } elseif (        // line 123
(isset($context["related"]) ? $context["related"] : null)) {
            echo "   
    <div class=\"container-left ";
            // line 124
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">            
";
        }
        // line 125
        echo "    
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 129
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 130
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 131
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 134
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
            ";
        // line 135
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 136
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
            ";
        }
        // line 138
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
            ";
        // line 139
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 140
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 141
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 144
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo " 
            
";
        // line 151
        echo "                
            ";
        // line 152
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
          </section>
        </main> 
        ";
        // line 155
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 156
            echo "        </div>
        <div class=\"container-right ";
            // line 157
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 160
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
            </aside>
          </div>
        </div>        
        ";
        } elseif (        // line 164
(isset($context["related"]) ? $context["related"] : null)) {
            // line 165
            echo "        </div>
        <div class=\"container-right ";
            // line 166
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              <h2>";
            // line 169
            echo $this->env->getExtension('drupal_core')->renderVar(t("Related"));
            echo " </h2>  
              ";
            // line 170
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["related"]) ? $context["related"] : null), "html", null, true);
            echo "
            </aside>
          </div>
        </div>                          
        ";
        }
        // line 174
        echo "    
      </div>
    </div>
    <div id=\"site-footer__wrapper\">
      <footer class=\"site-footer section layout-container\">
        ";
        // line 179
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 180
            echo "          <div id=\"footer-columns\" class=\"clearfix\">
            ";
            // line 181
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true);
            echo "
            ";
            // line 182
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true);
            echo "
            ";
            // line 183
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true);
            echo "
            ";
            // line 184
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 187
        echo "      </footer>
    </div>
        <script type=\"text/javascript\" src=\"//static.addtoany.com/menu/page.js\"></script> 
  </div>
</div>
<div class=\"overlay\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 187,  258 => 184,  254 => 183,  250 => 182,  246 => 181,  243 => 180,  241 => 179,  234 => 174,  226 => 170,  222 => 169,  216 => 166,  213 => 165,  211 => 164,  204 => 160,  198 => 157,  195 => 156,  193 => 155,  187 => 152,  184 => 151,  178 => 144,  172 => 141,  169 => 140,  167 => 139,  162 => 138,  156 => 136,  154 => 135,  149 => 134,  143 => 131,  138 => 130,  136 => 129,  130 => 125,  125 => 124,  121 => 123,  116 => 122,  114 => 121,  109 => 120,  106 => 119,  103 => 118,  98 => 115,  90 => 110,  84 => 107,  77 => 103,  71 => 100,  66 => 98,  59 => 94,  52 => 90,  46 => 87,  40 => 84,  37 => 83,  32 => 80,  27 => 78,  23 => 77,  19 => 75,);
    }
}
