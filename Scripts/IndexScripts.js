
function searchAlerts() {
	var model = {
			SearchTerm: $("#searchTerm").val(),
            RecalSTDate: $("#recalSTDate").val(),
            RecalENDate: $("#recalENDate").val()
	}
    $.post("SearchResult.php", model, function(data){
        $("#results").html(data);
    });

    /*$.post("SearchResultMap.php", model, function(mapdata){
        alert(mapdata);
    });*/
}

function searchMapResults(){
    var model = {
        SearchTerm: $("#searchTerm").val(),
        RecalSTDate: $("#recalSTDate").val(),
        RecalENDate: $("#recalENDate").val()
    }
    $.post("searchResultMap.php", model, function(data1){
        locations = data1;
        alert(locations);
        /*var locations = [
         ['Bondi Beach', -33.890542, 151.274856, 4],
         ['Coogee Beach', -33.923036, 151.259052, 5],
         ['Cronulla Beach', -34.028249, 151.157507, 3],
         ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
         ['Maroubra Beach', -33.950198, 151.259302, 1]
         ];*/
        //$("#results").html(data);
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(41.1148179,-74.1495889),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    });
    //style="width: 500px; height: 400px;float: left;display: none"s



}