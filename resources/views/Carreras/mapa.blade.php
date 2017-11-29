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
       
    
@endsection

@section('js')
 <script src="{{asset('js/socket.js')}}"></script>
<script src="{{asset('js/marker.min.js')}}"></script>
<script src="{{asset('js/monitoreo.min.js')}}"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiowIXlJ8xQr04iVGRB6lbqh_WcX7dYVQ&callback=initMap">
    </script>
@endsection
