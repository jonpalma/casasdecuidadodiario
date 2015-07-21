$(document).ready(function () {

/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/* google */
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

function initialize() {
    var map_canvas2 = document.getElementById('googleMap_house');

    
    var map_options2 = {
        center: new google.maps.LatLng(28.6411201,-106.1260461),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map2 = new google.maps.Map(map_canvas2, map_options2);
    
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(28.6411201,-106.1260461),
        map: map2,
        title: 'Casa del Sorteo'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);


});