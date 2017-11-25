@extends('layouts.App')

@section('css')
	<style type="text/css">
		#map {
        height: 100%;
        width: 100%;
       }

	</style>
@endsection

@section('content')
	     <div id="map"></div>
         <script>
        function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiowIXlJ8xQr04iVGRB6lbqh_WcX7dYVQ&callback=initMap">
    </script>
@endsection
