$( document ).ready(function() {
    
    hide_first();
    show_button();
    
   	$( ".phone-button" ).click(function(e) {
		$(".phone-button").hide();
		$(this).parent().find(".phone-info").show("slow");

		var eventLabel = $(this).attr('eventLabel');

		ga('send', {
                'hitType': 'event',
                'eventCategory': 'Telefonos',
                'eventAction': 'Mostrar Telefonos ',
                'eventLabel': eventLabel
            });

	});
    
    $(".phonecell").click(function(e) {
		
		var phoneNumber = $(this).attr('tel');


		ga(['send', 'event', 'Telefonos', 'click']);
		ga('send', {
                'hitType': 'event',
                'eventCategory': 'Telefonos',
                'eventAction': 'Marcar Telefono',
                'eventLabel': phoneNumber
            });

        window.location.href="tel://"+phoneNumber;

	});

	$('#myCarousel').carousel({
		interval: false
		})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
		});

    

	$( ".uno")
	  .mouseover(function() {
	    $(".uno").css("background", "#D23C3C");
	    $(".dos").css("background", "#D23C3C");
	    $(".uno").css("color", "#fff");
	  })
	  .mouseout(function() {
	    $(".uno").css("background", "#F8313F");
	    $(".dos").css("background", "#F8313F");
	  });

	  $( ".dos")
	  .mouseover(function() {
	    $(".uno").css("background", "#D23C3C");
	    $(".dos").css("background", "#D23C3C");
	    $(".uno").css("color", "#fff");
	  })
	  .mouseout(function() {
	    $(".uno").css("background", "#F8313F");
	    $(".dos").css("background", "#F8313F");
	  });


	  $( ".tres")
	  .mouseover(function() {
	    $(".tres").css("background", "#D23C3C");
	    $(".cuatro").css("background", "#D23C3C");
	    $(".tres").css("color", "#fff");
	  })
	  .mouseout(function() {
	    $(".tres").css("background", "#F8313F");
	    $(".cuatro").css("background", "#F8313F");
	  });

	  $( ".cuatro")
	  .mouseover(function() {
	    $(".tres").css("background", "#D23C3C");
	    $(".cuatro").css("background", "#D23C3C");
	    $(".tres").css("color", "#fff");
	  })
	  .mouseout(function() {
	    $(".tres").css("background", "#F8313F");
	    $(".cuatro").css("background", "#F8313F");
	  });

	

});

function hide_first()
{
	$(".phone-info").hide();
}
function show_button()
{
	$(".phone-button").show();
}
