 //run the function when doc is loaded
 // <script type="text/javascript">
		$(document).ready(function(){
		
 		    $('img').hide();
 	$('#select').hide();	    
    $('#player1').change(function() {
        $('#pos-left img').hide();
        $("#" + $(this).val()).show();
    });

    $('#player2').change(function() {
        $('#pos-right img').hide();
        $("#" + $(this).val()).show();
    });



 		

	    $('.margin').on("click",'#one',function(){
	 					
		$('#backgroundcontainer').fadeOut('slow', function(){
		$('#select').fadeIn();

				});

		});

	 	$('.margin').on("click",'#two',function(){		
				
		$('#backgroundcontainer').fadeOut('slow', function(){
		$('#select').fadeIn();

				});

		});

	 	    $('.margin').on("click",'#three',function(){
				
			$('#backgroundcontainer').fadeOut('slow', function(){
			$('#select').fadeIn();

				});

		});

	 	    $('.margin').on("click",'#four',function(){	 			
				
			$('#backgroundcontainer').fadeOut('slow', function(){
			$('#select').fadeIn();

				});

		});

	 	        $('.margin').on("click",'#five',function(){	 			
				
				$('#backgroundcontainer').fadeOut('slow', function(){
				$('#select').fadeIn();

				});

		});

 		  	    $('.margin').on("click",'#six',function(){ 		
				
				$('#backgroundcontainer').fadeOut('slow', function(){
					$('#select').fadeIn();

				});

		});
										
	
		$('#one').hover(function(){		

			$('#wrapper').css('background-image', "url(beach.jpg)");	

		});

			$('#two').hover(function(){	

			$('#wrapper').css('background-image', "url(forest.jpg)");	

		});

				$('#three').hover(function(){
				
				$('#wrapper').css('background-image', "url(dojo.jpg)");
				

		});

				$('#four').hover(function(){
				
				$('#wrapper').css('background-image', "url(calvinandhobbes.jpg)");
				
				

		});	
				$('#five').hover(function(){	
				
				$('#wrapper').css('background-image', "url(matrix.jpg)");
				
				
		});
				$('#six').hover(function(){	
				
				$('#wrapper').css('background-image', "url(snow.jpg)");
				

		});


		$('#players img').draggable();
				

 		});	

 		
	// </script>
