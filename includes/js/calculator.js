$(document).ready(function(){
    
    // Stilizacija polja u tabeli
    
    $("td").hover(function(){
       $(this).css("background-color", "purple");
     }, function(){
     $(this).css("background-color", "white");
    });
    
    

//Anonimus funkcija za za dobijanje rezultata mnozenja

    $("td").click(function(){
        
        //Preuzimanje podataka iz celija tabele i pravljenje niza 

      var a = $(this).text().split(" ");
      
        
        //Selektovanje potrebnih elemenata iz niza brojeva
        
        
      var a0 = a[0];
      var a2 = a[2];

        //Promjena tipa podataka tekst-broj
      var a0int = parseInt(a0,10);
      var a2int = parseInt(a2,10);

      var res = a0int*a2int;
        
        //Ispis rezultata mnozenja
      var result = "REZULTAT: "  + a0 + " x " +a2 + " = " + res;
      alert(result);

        
        //Pokretanje AJAX-a i prosljedjivanje podataka u php fajl za upis u bazu
      if(a0int!="" && a2int!=""){
    			$.ajax({
    				url: "class/calculator.class.php",
    				type: "POST",
    				data: {
    					first_number: a0int,
    					second_number: a2int,
    					result: res
    				},

            success:function(){
             alert('Vaša pretraga je upisana u bazu! Hvala!');
            }

    			});
    		}







    });

});
