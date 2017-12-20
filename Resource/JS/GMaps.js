  function initMap() {
  var map1 = new google.maps.Map(document.getElementById('map1'), {
    center: {lat: -8.1461642, lng: 110.6032924},
    zoom: 10
  })
  var map2 = new google.maps.Map(document.getElementById('map2'), {
    center: {lat: -7.8492406, lng: 110.6402958},
    zoom: 10
  })
  var map3 = new google.maps.Map(document.getElementById('map3'), {
    center: {lat: -7.9498437, lng: 110.5073424},
    zoom: 10
  })
  var map4 = new google.maps.Map(document.getElementById('map4'), {
    center: {lat: -7.881656, lng: 110.6385192},
    zoom: 10
  })
  ;

  var infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map1);
  var service = new google.maps.places.PlacesService(map2);
  var service = new google.maps.places.PlacesService(map3);
  var service = new google.maps.places.PlacesService(map4);

  service.getDetails({
    placeId: 'ChIJ2dr9gDm6ey4RSfI5O_5eRkA'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map1,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          'Place ID: ' + place.place_id + '<br>' +
          place.formatted_address + '</div>');
        infowindow.open(map1, this);
      });
    }
  })
  service.getDetails({
    placeId: 'ChIJl26OfjxLei4RMkC_TsNry6c'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map2,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          'Place ID: ' + place.place_id + '<br>' +
          place.formatted_address + '</div>');
        infowindow.open(map2, this);
      });
    }
  })
  service.getDetails({
    placeId: 'ChIJ7b3_osVSei4R8Xsm6jYVsgE'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map3,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          'Place ID: ' + place.place_id + '<br>' +
          place.formatted_address + '</div>');
        infowindow.open(map3, this);
      });
    }
  })
  service.getDetails({
    placeId: 'ChIJVVVVVeVLei4Rqho-8mP4TEA'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map4,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
          'Place ID: ' + place.place_id + '<br>' +
          place.formatted_address + '</div>');
        infowindow.open(map4, this);
      });
    }
  })
  ;
}