jQuery(window).load(function () {
   $('.sb-icon-search').click(function() {
     if ($('.inner-wrap.masonic-search-toggle').is(":visible") == true){
       $( ".inner-wrap.masonic-search-toggle").hide();
     }else{
       $( ".inner-wrap.masonic-search-toggle").show();
     }
   });
});



