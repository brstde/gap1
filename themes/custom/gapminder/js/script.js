(function() {
  var cx = '015573355838489954495:y2zdqy3t_mw';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
   
  jQuery('.langselect').change(function()
  {           
      location.href=jQuery(this).val();
  })
  /***** Responsive Menus for Mobile screen *****/
    jQuery('.openleftbar').click(function()
    {
        jQuery( ".responsivemenu" ).slideToggle( "slow" );
//        jQuery("#page-wrapper").css("transform", "translate3d(275px, 0px, 0px)");
        var locationval= window.location.href;
        var urlvalue=locationval.split('#')[0];
        window.location.href= urlvalue + '#show-block-gapminder-main-menu';   
        jQuery('.openleftbar').hide();
        jQuery('.closeleftbar').show();
    })
    jQuery('.closeleftbar').click(function()
    {
        jQuery( ".responsivemenu" ).slideToggle( "slow" );
//        jQuery("#page-wrapper").css("transform", "translate3d(0px, 0px, 0px)");
        var locationval= window.location.href;
        var urlvalue=locationval.split('#')[0];
        window.location.href= urlvalue + '#hide-block-gapminder-main-menu';   
        jQuery('.closeleftbar').hide();
        jQuery('.openleftbar').show();        
    })    
    jQuery('#header #block-mainnavigation ul.menu > li > a').click(function(e)
    {
        e.preventDefault();
    })    
    jQuery('.mobile_menu.inner_menu ul.menu > li > a ').click(function(e)
    {
        e.preventDefault();
//        jQuery('li.goback').show();
//        jQuery(this).next('.menu').show();
//        jQuery('.mobile_menu ul.menu > li > a ').hide();
    })
    jQuery('li.goback').click(function(e)
    {
//        jQuery('li.goback').hide();
//        jQuery('.mobile_menu ul.menu li ul.menu').hide();
//        jQuery('.mobile_menu ul.menu > li > a ').show();
    })    
  /***** End Of Responsive Menus for Mobile screen *****/     
})();