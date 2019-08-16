jQuery(function(){


	jQuery('span.abrir-nav-interna, span.abrir-nav').click(function (){

		jQuery(this).next().stop(true, true).slideToggle(500, function(){

           var modo = jQuery(this).attr('style');

           if(modo == 'display: none;'){ jQuery(this).attr('style',''); }

		   

		     });

	

	});




});




