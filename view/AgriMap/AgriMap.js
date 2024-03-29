
function map_create()
{
    var startLatLng = new google.maps.LatLng(13.736717, 100.523186);
    
   

    var map = new google.maps.Map(document.getElementById('map_area'), {
        // center: { lat: 13.7244416, lng: 100.3529157 },
        center:  startLatLng ,
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    map.markers = [];
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(13.736717, 100.523186),
        map: map,
        title:"test"
    });
    map.markers.push(marker);
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(13.814029, 100.037292),
        map: map,
        title:"test"
    });
    map.markers.push(marker);
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(13.361143, 100.984673),
        map: map,
        title:"test"
    });
    map.markers.push(marker);

    var citymap = {
        chicago: {
          center: {lat: 13.736717, lng: 100.523186},
          population: 90000,
          color: '#e74a3b'
        },
        newyork: {
          center: {lat: 13.814029, lng: 100.037292},
          population: 90000,
          color: '#f6c23e'
        },
        losangeles: {
          center: {lat: 13.361143, lng: 100.984673},
          population: 90000,
          color: '#1cc88a'
        },
      };

    for (var city in citymap) {
        // Add the circle for this city to the map.
        var cityCircle = new google.maps.Circle({
          strokeColor: citymap[city].color,
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: citymap[city].color,
          map: map,
          center: citymap[city].center,
          radius: Math.sqrt(citymap[city].population) * 100
        });
      }

    //   var map = new google.maps.Map(document.getElementById('map_area'), {
    //     // center: { lat: 13.7244416, lng: 100.3529157 },
    //     center:  startLatLng ,
    //     zoom: 6,
    //     mapTypeId: google.maps.MapTypeId.ROADMAP
    // });

    map.markers = [];
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(14.736717, 100.523186),
        map: map,
        title:"test"
    });
    map.markers.push(marker);
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(14.814029, 100.037292),
        map: map,
        title:"test"
    });
    map.markers.push(marker);
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(14.361143, 100.984673),
        map: map,
        title:"test"
    });
    map.markers.push(marker);
}


$('#fertilizer_check').change(function(){
    if($('#fertilizer_check').is(':checked'))
    {
        $("#fertilizer").prop('disabled', false);

    }
    else
    {
        $("#fertilizer").prop('disabled', true);

    }
    

})

$('#product_check').change(function(){
    if($('#product_check').is(':checked'))
    {
        $("#product").prop('disabled', false);

    }
    else
    {
        $("#product").prop('disabled', true);

    }
    

})
