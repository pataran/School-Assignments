 //run the function when doc is loaded
 // <script type="text/javascript">
		$(document).ready(function(){

			$( "#datepicker" ).datepicker();
			$( "#datepicker2" ).datepicker();
			$('#box').hide();

		

			$('#submit').click(function(){
				event.preventDefault();
				$('#box').show();
				value = $("#datepicker").val(); 
				value2 = $("#datepicker2").val(); 
				$('#box').append("Your form information" + "<br />")
				 $('#box').append(value + "<br />");
				 $('#box').append(value2 + "<br />");
				
			});

 		});	
 		
	// </script>
