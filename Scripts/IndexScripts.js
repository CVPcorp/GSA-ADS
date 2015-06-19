function searchAlerts() {
	var model = {
			SearchTerm: $("#searchTerm").val(),
            SearchDate: $("#searchDate").val()
	}
    $.post("SearchResult.php", model, function(data){
        $("#results").html(data);
    });
}