/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0, lng: 0},
        zoom: 2
    });
    
    // these are the map styles
    var styles = [
        {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#242f3e"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#000000"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
        {
          featureType: "landscape",
          stylers: [
            { color: "#ffffff"}
          ]
        },{
          featureType: "road",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "administrative.land_parcel",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "administrative.locality",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "administrative.neighborhood",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "administrative.province",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "landscape.man_made",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "landscape.natural",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "poi",
          stylers: [
            { visibility: "off" }
          ]
        },{
          featureType: "transit",
          stylers: [
            { visibility: "off" }
          ]
        }
      ];

    map.setOptions({styles: styles});
    
    // Initialize JSONP request
    var script = document.createElement('script');
    var url = ['https://www.googleapis.com/fusiontables/v1/query?'];
    url.push('sql=');
    var query = 'SELECT name, kml_4326 FROM ' +
        '1foc3xO9DyfSIF6ofvN0kp2bxSfSeKog5FbdWdQ';
    var encodedQuery = encodeURIComponent(query);
    url.push(encodedQuery);
    url.push('&callback=drawMap');
    url.push('&key=AIzaSyAm9yWCV7JPCTHCJut8whOjARd7pwROFDQ');
    script.src = url.join('');
    var body = document.getElementsByTagName('body')[0];
    body.appendChild(script);
}

function drawMap(data) {
    var rows = data['rows'];
    for (var i in rows) {
      if (rows[i][0] != 'Antarctica') {
        var newCoordinates = [];
        var geometries = rows[i][1]['geometries'];
        if (geometries) {
          for (var j in geometries) {
            newCoordinates.push(constructNewCoordinates(geometries[j]));
          }
        } else {
          newCoordinates = constructNewCoordinates(rows[i][1]['geometry']);
        }
        var country = new google.maps.Polygon({
          paths: newCoordinates,
          strokeColor: '#ffffff',
          strokeOpacity: 1,
          strokeWeight: 0.3,
          fillColor: '#000000',
          fillOpacity: 0,
          name: rows[i][0]
        });
        google.maps.event.addListener(country, 'mouseover', function() {
          this.setOptions({fillOpacity: 0.4});
        });
        google.maps.event.addListener(country, 'mouseout', function() {
          this.setOptions({fillOpacity: 0});
        });
        google.maps.event.addListener(country, 'click', function() {
          //alert(this.name);
          getCountryInfo(this.name);
        });

        country.setMap(map);
      }
    }
  }

function constructNewCoordinates(polygon) {
    var newCoordinates = [];
    var coordinates = polygon['coordinates'][0];
    for (var i in coordinates) {
      newCoordinates.push(
          new google.maps.LatLng(coordinates[i][1], coordinates[i][0]));
    }
    return newCoordinates;
  }
  
function getCountryInfo(countryName)
  { 
    console.log(countryName);
    var params = "getCountryInfo=1&country=" + countryName;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) { 
            console.log(this.responseText);
            
            var responseJSON = JSON.parse(this.responseText);
            var outPutStr = "Country: " + countryName + "\nPlug: " + responseJSON.plug + "\nVoltage: " + responseJSON.voltage + "\nFrequency: " + responseJSON.frequency;
            alert(outPutStr);
             
        }
    };
    xhttp.open("POST", "database/request_handler.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);      
  }

  