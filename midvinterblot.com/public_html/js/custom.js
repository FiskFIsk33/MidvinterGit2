function validateEmail(email) { 
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return reg.test(email);
}

$(document).ready(function() {
	$(".modalbox").fancybox();
	$("#contact").submit(function() {
		return false;
	});
	
	$("#send").on("click", function(){
		var emailval = $("#email").val();
		var subval = $("#subject").val();
		var msgval = $("#msg").val();
		var sublen = subval.length;
		var msglen = msgval.length;
		var mailvalid = validateEmail(emailval);
		
		if (mailvalid == false) {
			$("#email").addClass("error");
		}
        $("#email").change(function() {
            $("#email").removeClass("error");
        });
		
		if (sublen < 2) {
			$("#subject").addClass("error");
		}
        $("#subject").change(function() {
            $("#subject").removeClass("error");
        });
		
		if (msglen < 4) {
			$("#msg").addClass("error");
		}
        $("#msg").change(function() {
            $("#msg").removeClass("error");
        });
		
		if (mailvalid == true && sublen >= 2 && msglen >= 4) {
			$("#send").replaceWith("<em>sending...</em>");
			
			$.ajax({
				type: 'POST',
				url: 'https://midvinterblot.com/sendmessage.php',
				data: $("#contact").serialize(),
				success: function(data) {
					if(data == "true") {
						$("#contact").fadeOut("fast", function(){
							$(this).before("<p><strong>Thank you!</strong></p>");
							setTimeout("$.fancybox.close()", 2000);
						});
					}
				}
			});
			
		}
	});
});