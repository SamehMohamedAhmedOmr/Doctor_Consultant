// trigger google Map with JavaScript

function myMap() {
    var myCenter = new google.maps.LatLng(29.866902,31.315249);
    var mapElement = document.getElementById('map');
    var mapOptions = {center: myCenter, zoom: 13};
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE,
        draggable:true,
    	title:"Drag me!"
    });
    marker.setMap(map);
}