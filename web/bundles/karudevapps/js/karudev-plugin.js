(function( $ ) {
  

 $.fn.chariot = function(classeChariot) {
	 
        // var thisBis = this;
	 $(this).click(function()
            {
                // Récupération du prochain tr caché
                var domTr = $(this).parents().next();
              
                if(domTr.css('display') == 'none')
                    {
                        // Fermeture des autres chariots
                        $(classeChariot).hide('fade');  
                        domTr.show('fade');
                    }
                else
                domTr.hide('fade');  
                
            });
	  };

$.fn.loadHtml = function(div,method,rel) {
	
        var thisBis = this;
        var href;
        
       
      
	  
	 
	  $(this).click(function(event)
			  {
         if(rel)
         href = $(this).attr('rel');
        else
         href = $(this).attr('href');
		  event.preventDefault();
		 
			 // $(div).html('<div style="margin:90px" ><img src="'+domaine+'/bundles/lea/images/divers/load.gif" /></div>');
			  $.ajax({
			  		url: href,
			  		dataType: "html",
			  		type : method,
			  		success: function( html ) {
			  		$(div).html(html);
			  		}
			  		});

			  });
	//  return false;
  };
  
    $.fn.submitForm = function(div,titre_retour,suffixe,noreload) {
        
		var thisBis = this;
	  $(this).submit(function()
			  {

			  var form = $(thisBis).serializeArray();
			
			 /* if(noreload == undefined)
			  $(div).html('<div style="margin:90px" ><img src="'+domaine+'/bundles/lea/images/divers/load.gif" /></div>');
			  */
			  $.ajax({
			  		url: $(thisBis).attr('action'),
			  		dataType: "json",
			  		type : "POST",
			  		data : form,
			  		success: function( data ) {
				  
				  if(noreload == undefined)
				  $(div).html('');
			  		
                                       
                                        
			  		if(suffixe)
			  			{
			  		$('a#'+suffixe+'_show').trigger('click');
			  		
			  			}
			  		
			  		/*$.pnotify({
			  						title: titre_retour,
			  						text: data,
			  						type: 'success',
			  						styling: 'jqueryui'
			  					});*/
			  		}
			  		});
			  return false;

			  });
  };
  
    $.fn.submitFormAndReturnHtml = function(div) {
        var thisBis = this;
        $(this).click(function()
        {

            var form = $(thisBis).parents('form').serializeArray();
            $(div).html('<div style="margin:90px" ><img src="'+domaine+'/bundles/lea/images/divers/load.gif" /></div>');
			  
            $.ajax({
                url: $(thisBis).attr('class'),
                dataType: "html",
                type : "POST",
                data : form,
                success: function(html) {
				  
                  $(div).html(html);  
                }
            });
            //return false;

        });
    };
 
})( jQuery );
