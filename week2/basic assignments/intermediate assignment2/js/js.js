 //run the function when doc is loaded
 // <script type="text/javascript">
		$(document).ready(function(){

			$('img').click(function(){
				$(this).css("visibility" ,"hidden");
				
			});
		

			$('#press').click(function(){
				event.preventDefault();
				$('*').css("visibility" ,"visible");
				
			});

 		});	
 		
	// </script>
