var map;
var pinLocation;
var startPosition;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 52.233763,
            lng: 21.039275
        },
        zoom: 15,
        zoomControl: false,
        mapTypeControl: false,
        streetViewControl: false,
        styles: [{
            stylers: [{
                saturation: -100
            }]
        }]
    });
    pinLocation = new google.maps.LatLng(52.233763, 21.039275);

    startPosition = new google.maps.Marker({
        position: pinLocation,
        map: map,
        icon: "img/Marker.png"
    });
}