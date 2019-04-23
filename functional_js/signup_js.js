$(document).ready(function(){

	$("#but_submit").click(function(){
		var username = $("#username").val().trim();
		var password = $("#password").val().trim();
		var reTypePassword = $("#reTypePassword").val().trim();
		var email = $("#email").val().trim();
				
		$("#message").html("");
				
		if(password != reTypePassword){
			msg = "please retype the password blablab";
			$("#message").html(msg);
		}
				
		else if( username != "" && password != "" && email != ""){
			$.ajax({
				url:'backend/api/user/userSignUp.php',
				type:'post',
				data:{username:username,password:password,email:email}, success:function(response){
					var msg = "";
					if(response == 1) {
						window.location = "home.php";
						msg = "response 1";
					}
					else if(response == 0) {
						msg = "Invalid username and password!";
					}
					else if (response == 2) {
						msg = "Not submitted";
					}
					else {
						msg = "something not right";
					}
					$("#message").html(msg);
				}
			});
		}
							
		else {
			$("#message").html("Please fill the username, password, and email")
				.css("font-style", "italic")
				.css("color", "red");
		}
	});
});