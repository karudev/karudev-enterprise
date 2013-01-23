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

 
})( jQuery );