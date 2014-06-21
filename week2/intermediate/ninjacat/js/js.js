 //run the function when doc is loaded
 // <script type="text/javascript">
		$(document).ready(function(){														
			$( ".margin" ).draggable({axis: "y"});				
					
				$('#one').click(function(){
					var src = $("#ninja1").attr('src')
					if(src == 'ninja1.png'){
						$('#ninja1').attr("src", "cat1.png");
					}
				});

				$('#two').click(function(){
					var src = $("#ninja2").attr('src')
					if(src == 'ninja2.png'){
						$('#ninja2').attr("src", "cat2.png");
					}
				});

					$('#three').click(function(){
					var src = $("#ninja3").attr('src')
					if(src == 'ninja3.png'){
						$('#ninja3').attr("src", "cat3.png");
					}
				});

					$('#four').click(function(){
					var src = $("#ninja4").attr('src')
					if(src == 'ninja4.png'){
						$('#ninja4').attr("src", "cat4.png");
					}
				});

					$('#five').click(function(){
					var src = $("#ninja5").attr('src')
					if(src == 'ninja5.png'){
						$('#ninja5').attr("src", "cat4.png");
					}
				});

 		});	
 		
	// </script>
