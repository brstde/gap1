<?php

/**
 * @file
 * Contains \Drupal\page_example\Controller\PageExampleController.
 */

namespace Drupal\custom_api\Controller;

use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller routines for page example routes.
 */
class custom_apiController {

  /**
   * Constructs a page with descriptive content.
   *
   * Our router maps this method to the path 'examples/page_example'.
   */
  public function description() {
      global $base_url;
            $Equation='';
            $Taxonomy = trim($_POST['state']);
            if($Taxonomy!='')
            {
                if(strpos($Taxonomy,',') !== false) 
                {
                    $ExplodeTags=explode(',',$Taxonomy);
                    $TotalCounted=count($ExplodeTags);
                    $k=0;
                    foreach($ExplodeTags as $Tags)
                    {
                        $k++;
                        $Equation .=" taxo.name='".$Tags."' ";                        
                        if($TotalCounted > $k)
                        {
                           $Equation .="OR";  
                        }
                    }
                }
                else
                {
                  $Equation =" taxo.name='".$Taxonomy."' ";  
                }
            }
            $CurrentNid = trim($_POST['nid']);
            $SelectedLanguage = trim($_POST['SelectedLanguage']);
            
            $StateResult = db_query("SELECT relate.entity_id FROM node__field_related_state as relate JOIN taxonomy_term_field_data as taxo ON relate.field_related_state_target_id=taxo.tid where taxo.langcode='$SelectedLanguage' AND relate.entity_id!=$CurrentNid AND $Equation");
           

            $NodeItems = array();
            foreach ($StateResult as $items) 
               {
                $NodeItems[$items->entity_id]++;
               }    
            arsort($NodeItems);
            $NodeHtml='';
            $array=array();
            if(!empty($NodeItems))
            {
                foreach($NodeItems as $key => $EachItem)
                {
                    $LoadNode = node_load($key);
                    $Title = $LoadNode->title->value;
                    $SubTitle = $LoadNode->field_factpod_number->value;
                    $Image=isset($LoadNode->field_factpod_image->entity->uri->value)?file_create_url($LoadNode->field_factpod_image->entity->uri->value):'';  
                    if($Image=='')
                    {
                        $Image=$base_url.'/themes/custom/gapminder/images/Flag_-_Unknown.png';
                    }
                    $link = $base_url.'/node/'.$key;                                   
//                    $NodeHtml.='<div class="viewdata views-row">
//                                <div class="views-field views-field-nothing">
//                                <span class="field-content">
//                                <div class="fc_rows related">
//                                <div class="fc_image related">
//                                <a href="'.$link.'">
//                                <img width="130" height="78" src="'.$Image.'">
//                                </a>
//                                </div>
//                                <div class="fc_title_sub related">
//                                <div class="fc_title related">
//                                <a href="'.$link.'">'.$Title.'</a>
//                                </div>
//                                <div class="fc_sub related">
//                                <a href="'.$link.'">'.$SubTitle.'</a>
//                                </div>
//                                </div>
//                                </div>
//                                </span>
//                                </div>
//                                </div>';  
                    $array[]=array('title'=>$Title,'href'=>$link,'image_url'=>$Image,'subtitle'=>$SubTitle);
                }
            }
            else
            {
                 $array[]=array('result'=>'failure');
//               $NodeHtml .='No Results'; 
            }
            $Json_encode=json_encode($array);
            echo $Json_encode;
            exit();
  }
  public function search() {
        global $base_url;
        $TopLine='';
       if(isset($_REQUEST['q']))
       {
           $TopLine="<div class='google_custom_results'><gcse:searchbox-only resultsUrl='".$base_url."/gsearch' queryParameterName='q' gname='gsearch'></gcse:searchbox-only></div><div class='search-results-title'>Results for ".$_REQUEST['q']."</div>";
       }
      $SearchResult=$TopLine."<script>
                  (function() {
                    var cx = '015573355838489954495:y2zdqy3t_mw';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                  })();
                </script>
             <div class='google-search-results'><gcse:searchresults-only></gcse:searchresults-only></div>"; 
      return array(
        '#markup' => $SearchResult,
      );
  }  
  
  public function translate() 
    {  
      global $base_url;
      $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();
      $result = db_select('menu_link_content_data', 'menu')
                ->fields('menu',array('id','title'))
                ->condition('langcode',$langcode,'=')                       
                ->execute()
                ->fetchAll();     
        if(!empty($result))
        {
            $NodeHtml .="<h1>All menu links</h1>";
            $NodeHtml .="<div class='menu-links'>";
            foreach ($result as $MenuItem) 
               {
                        $Title = $MenuItem->title;
                        $Id = $MenuItem->id;
                        $link = $base_url.'/admin/structure/menu/item/'.$Id.'/edit/translations';
                        $NodeHtml .= "<div class='per-row'>";
                        $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                        $NodeHtml .= "</div>";
               }    
            $NodeHtml .="</div>";   
        }        
      
        return array(
          '#markup' => $NodeHtml,
        );
    }    
  
public function translatetaxonomy() 
    {  
      global $base_url;
      $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();
      $result = db_select('taxonomy_term_field_data', 'taxo')
                ->fields('taxo',array('tid','name'))
                ->condition('langcode',$langcode,'=')                       
                ->execute()
                ->fetchAll();     
        if(!empty($result))
        {
            $NodeHtml .="<h1>Taxonomy Terms</h1>";
            $NodeHtml .="<div class='menu-links'>";
            foreach ($result as $MenuItem) 
               {
                        $Title = $MenuItem->name;
                        $Id = $MenuItem->tid;
                        $link = $base_url.'/taxonomy/term/'.$Id.'/translations';
                        $NodeHtml .= "<div class='per-row'>";
                        $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                        $NodeHtml .= "</div>";
               }    
            $NodeHtml .="</div>";   
        }        
      
        return array(
          '#markup' => $NodeHtml,
        );
    }        
    
public function translateblock() 
    {  
      global $base_url;
      $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();
      $result = db_select('block_content__body', 'block')
                ->fields('block',array('entity_id','body_value'))
                ->condition('langcode',$langcode,'=')                       
                ->execute()
                ->fetchAll();     
        if(!empty($result))
        {
            $NodeHtml .="<h1>Blocks</h1>";
            $NodeHtml .="<div class='menu-links'>";
            foreach ($result as $MenuItem) 
               {
                        $Title = $MenuItem->body_value;
                        $Id = $MenuItem->entity_id;
                        $link = $base_url.'/block/'.$Id.'/translations';
                        $NodeHtml .= "<div class='per-row blocks'>";
                        $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                        $NodeHtml .= "</div>";
               }    
            $NodeHtml .="</div>";   
        }        
      
        return array(
          '#markup' => $NodeHtml,
        );
    }     
    
}
 