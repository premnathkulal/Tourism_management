//<![CDATA[
            
    var map;
    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();

// Ban Jelačić Square - City Center
    var center = new google.maps.LatLng(13.044414,74.8608926);
    
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    
    function init() {
     
     var mapOptions = {
       zoom: 13,
       center: center,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     }
      
     map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      
     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('directions_panel'));
      
     // Detect user location
     if(navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
              
             var userLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
              
             geocoder.geocode( { 'latLng': userLocation }, function(results, status) {
                 if (status == google.maps.GeocoderStatus.OK) {
                     document.getElementById('start').value = results[0].formatted_address
                 }
             });
              
         }, function() {
             alert('Geolocation is supported, but it failed');
         });
     }
      
     makeRequest('get_locations.php', function(data) {
          
         var data = JSON.parse(data.responseText);
         var selectBox = document.getElementById('destination');
          
         for (var i = 0; i < data.length; i++) {
             displayLocation(data[i]);
             addOption(selectBox, data[i]['name'], data[i]['address']);
         }
     });
 }
  
 function addOption(selectBox, text, value) {
     var option = document.createElement("OPTION");
     option.text = text;
     option.value = value;
     selectBox.options.add(option);
 }//<![CDATA[
            
    var map;

            

    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();

// Ban Jelačić Square - City Center
    var center = new google.maps.LatLng(13.044414,74.8608926);
    
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    
    function init() {
     
     var mapOptions = {
       zoom: 13,
       center: center,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     }
      
     map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      
     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('directions_panel'));
      
     // Detect user location
     if(navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
              
             var userLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
              
             geocoder.geocode( { 'latLng': userLocation }, function(results, status) {
                 if (status == google.maps.GeocoderStatus.OK) {
                     document.getElementById('start').value = results[0].formatted_address
                 }
             });
              
         }, function() {
             alert('Geolocation is supported, but it failed');
         });
     }
      
     makeRequest('get_locations.php', function(data) {
          
         var data = JSON.parse(data.responseText);
         var selectBox = document.getElementById('destination');
          
         for (var i = 0; i < data.length; i++) {
             displayLocation(data[i]);
             addOption(selectBox, data[i]['name'], data[i]['address']);
         }
     });
 }
  
 function addOption(selectBox, text, value) {
     var option = document.createElement("OPTION");
     option.text = text;
     option.value = value;
     selectBox.options.add(option);
 }
//]]>

function makeRequest(url, callback) {
    var request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
    } else {
        request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
    }
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            callback(request);
        }
    }
    request.open("GET", url, true);
    request.send();
}

function displayLocation(location) {
 
 var content =   '<div class="infoWindow"><strong>'  + location.name + '</strong>'
                 + '<br/>'     + location.address
                 + '<br/>'     + location.description + '</div>';
  
 if (parseInt(location.lat) == 0) {
     geocoder.geocode( { 'address': location.address }, function(results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
              
             var marker = new google.maps.Marker({
                 map: map, 
                 position: results[0].geometry.location,
                 title: location.name
             });
              
             google.maps.event.addListener(marker, 'click', function() {
                 infowindow.setContent(content);
                 infowindow.open(map,marker);
             });
         }
     });
 } else {
     var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));
     var marker = new google.maps.Marker({
         map: map, 
         position: position,
         title: location.name
     });
      
     google.maps.event.addListener(marker, 'click', function() {
         infowindow.setContent(content);
         infowindow.open(map,marker);
         document.getElementById("ooi").innerHTML = "Hello";
     });
 }
}


//]]>

function makeRequest(url, callback) {
    var request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
    } else {
        request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
    }
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            callback(request);
        }
    }
    request.open("GET", url, true);
    request.send();
}

function displayLocation(location) {
 
 var content =   '<div class="infoWindow"><strong>'  + location.name + '</strong>'
                 + '<br/>'     + location.address
                 + '<br/>'     + location.description + '</div>';
  
 if (parseInt(location.lat) == 0) {
     geocoder.geocode( { 'address': location.address }, function(results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
              
             var marker = new google.maps.Marker({
                 map: map, 
                 position: results[0].geometry.location,
                 title: location.name
             });
              
             google.maps.event.addListener(marker, 'click', function() {
                 infowindow.setContent(content);
                 infowindow.open(map,marker);
             });
         }
     });
 } else {
     var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));
     var marker = new google.maps.Marker({
         map: map, 
         position: position,
         title: location.name
     });
      
     google.maps.event.addListener(marker, 'click', function() {
         infowindow.setContent(content);
         infowindow.open(map,marker);
         document.getElementById("ooi").innerHTML = "Hello";
     });
 }
}
