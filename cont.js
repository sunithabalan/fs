<script>
// Initialize google maps
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYwNPhiEbqsMbrXxW2F9m0H3rN3gx6j8I"></script>
