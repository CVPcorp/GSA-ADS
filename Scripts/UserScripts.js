function submitUser() {
	var model = {
			UserName: $("#UserName").val(),
			Password: $("#Password").val(),
			Email: $("#Email").val()
	}
    $.post("SubmitUser.php", model, function(data){
        $("#results").html(data);
    });
}

function loginUser() {
	var model = {
			UserName: $("#UserName").val(),
			Password: $("#Password").val()
	}
    $.post("LoginUser.php", model, function(data){
        $("#results").html(data);
    });
}