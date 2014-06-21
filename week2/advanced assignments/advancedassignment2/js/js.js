 //run the function when doc is loaded
 // <script type="text/javascript">
		$(document).ready(function(){

			$( "#datepicker" ).datepicker();
			$( "#datepicker2" ).datepicker();
			

		

			$('#submit').click(function(){
				event.preventDefault();
				first = $("#firstname").val(); 
				last = $("#lastname").val(); 
				email = $("#email").val(); 
				contacts = $("#contacts").val();
				 
				 $('#row ').append("<tr><td>" + first + "</td><td>" + last + "</td><td>" + email +  "</td><td>" + contacts + "</td></tr>");
				

			});

 		});	
 		
	// </script>
