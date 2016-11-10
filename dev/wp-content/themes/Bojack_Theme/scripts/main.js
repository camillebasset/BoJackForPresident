jQuery(document).ready(function($){
  
  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

$("#button_scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#listeAnnonces").offset().top
    }, 1000);
});
  $(".list-category-annonces a").on("click",function(e){
  	e.preventDefault();
  	var term_id = $(this).attr("data-id");
  	$('.list-category-annonces a').removeClass('current_cat');
  	$(this).addClass('current_cat');
  	var content = $(".annonces");
  	content.fadeOut().fadeIn("<div class='centered-loading'><p><i class='fa fa-spinner fa-spin'></i> Recherche en cours...</p></div>");
  	jQuery.post(
  		ajaxurl,
  		{
  			'action' : 'filtre-category',
  			'term_id' : term_id,
  			'paged' : 1

  		},
  		function(response)
  		{
  			content.html(response);
  		}
  	);
  });

  $("#searchAjaxInput").on("keyup",function(e){
  		var search_input = $(this).val();
  		jQuery.post(
  			ajaxurl,
  			{
  				'action' : 'ajax-autocompletion',
  				'search_input' : search_input
  			},
  			function (response) 
  			{
  				console.log("ajax retour ok");
  			}
  		);
  });

});
