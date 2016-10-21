$(document).ready(function(){

	$('#login_enter').click(function(){
		username = $('#userID').val();
		password = $('#password').val();

		if (username == '' || password == '')
			alert('Kindly complete all fields to proceed.');
		else{
			$.ajax({
				url : ''
			})
		}

	});
});