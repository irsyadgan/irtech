$(document).ready(function(){

	$("#but_submit").click(function(){
		var username = $("#username").val().trim();
		var password = $("#password").val().trim();

		if( username != "" && password != "" ){
			$.ajax({
				url:'backend/api/user/userSignIn.php',
				type:'post',
				data:{username:username,password:password}, success:function(response){
					var msg = "";
					if(response == 1){
						window.location = "course.php";
						msg = "response 1";
					}else if(response == 0) {
						msg = "Invalid username and password!";
					}
					else {
						msg = "something not right";
					}
					$("#message").html(msg);
				}
			});
		}
							
		else {
			$("#message").html("Please fill the username and password")
				.css("font-style", "italic")
				.css("color", "red");
		}
	});
});