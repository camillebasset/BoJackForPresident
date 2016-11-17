jQuery(document).ready(function($){
  var rechercheEnCours=false;
  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
    $("#searchAjaxInput").on("keyup",function(e){
    if(rechercheEnCours==false)
    {
        rechercheEnCours=true;
        var search_input= $("#searchAjaxInput").val();
        var content_result= $('#searchResult');
        console.log(search_input);
        jQuery.post(
            ajaxurl,
            {
              'action' : 'autocompletion',
              'search_input' : search_input
            },
            function(response)
            {
             content_result.show();
             content_result.html(response);
             rechercheEnCours=false;
            }
        );
    }
    return false;
  });

  $("body").on('click', "#ancre_article", function() {
    console.log('coucou');
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top
      }, 500);
  });

  $("#searchAjaxInput").on("blur",function(e){
  setTimeout(
   function(){
    $('#searchResult').hide();
     },
    200
  );
});

});
