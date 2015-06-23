function searchAlerts() {
	var model = {
			SearchTerm: $("#searchTerm").val(),
            RecalSTDate: $("#recalSTDate").val(),
            RecalENDate: $("#recalENDate").val()
	}
    $.post("SearchResult.php", model, function(data){
        $("#results").html(data);
    });

    $.post("searchResultMap.php", model, function(data1){
        locations = JSON.parse(data1);
        //alert(locations);
        /*var locations = [
         ['Bondi Beach', -33.890542, 151.274856, 4],
         ['Coogee Beach', -33.923036, 151.259052, 5],
         ['Cronulla Beach', -34.028249, 151.157507, 3],
         ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
         ['Maroubra Beach', -33.950198, 151.259302, 1]
         ];*/
        //var locations = [["Novartis Pharmaceuticals Corp.",41.1148179,-74.1495889,1],["Novartis Pharmaceuticals Corp.",41.1148179,-74.1495889,2],["Healthy Life Chemistry Inc dba Purity First",null,null,3],["Noven Pharmaceuticals, Inc.",25.7616798,-80.1917902,4]];
        //$("#results").html(data);
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom:4,
            //center: new google.maps.LatLng(-33.950198, 151.259302),
            center: new google.maps.LatLng(41.850033, -87.6500523),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;
        //alert(locations.length);
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