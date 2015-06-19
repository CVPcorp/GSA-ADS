function searchAlerts() {
	var model = {
			SearchTerm: $("#searchTerm").val()
	}
    $.post("SearchResult.php", model, function(data){
        $("#results").html(data);
    });
}