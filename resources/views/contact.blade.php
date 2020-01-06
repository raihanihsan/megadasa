@extends('welcome')

@section('content')
  <section  class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <div class="col-md-9">
            <div id="map" style="height:500px;width:100%;"></div>
          </div>
          <div class="col-md-3">
              <p style="text-align:left">
                PT. Mega Dasa Semesta
                <br/>
                Ruko Citra City Residence Blok L/15, JL. Raya Sarirogo, Sari Rogo
                <br/>
                Kabupaten Sidoarjo, Jawa Timur 61234
                <br/>
                (031) 8947329
              </p>
          </div>
      </div>
    </div>
  </section>

@stop

@section('js')
  <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AjV1BL-N5L82xKuVMKVFWwKXL52xfOacZAfObZtZ5CxkChtfqkwf8ppVuXH_uCP9'></script>
  <script>
       
       var map;
       function getLocation() {
          if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
          } else {
          //x.innerHTML = "Geolocation is not supported by this browser.";
          }
       }

       function showPosition(latitude,longitude) {
         
         map.setView({
          center: new Microsoft.Maps.Location(latitude,longitude),
          zoom: 15
         });
         var pin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(latitude,longitude), {
          title: 'PT. Mega Dasa Semesta'
        });   
        
        map.entities.push(pin);
        
        //x.innerHTML = "Latitude: " + position.coords.latitude + 
        //"<br>Longitude: " + position.coords.longitude; 
       }

       function loadMapScenario() {
             map = new Microsoft.Maps.Map(document.getElementById('map'), {});
             showPosition(-7.422964,112.680631);
             //getLocation();
       }
       function myFunction() {
             loadMapScenario();
        }
       $(document).ready(function()
       {
         
          setTimeout(function() {myFunction();}, 2000)


       });
       
  </script>
@stop