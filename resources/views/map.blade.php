@extends('master')
@section('title')
    - Map
@endsection
@section('sidebar-Map')
    w3-blue
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <script src="http://code.jquery.com/jquery-latest.js"></script> 
@section('head')
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    #map {
      height: 100%;
      width: 100%;
    }
  </style>
   
  {{-- <script>
    function getDataFromDb() {
          $.ajax({
                  url: 'datadustdtec',
                  type: "GET",
                  data: '',
                  success:function(result) {
                  var obj = jQuery.parseJSON(JSON.stringify(result));
                  //console.log(obj);
                  if (obj != '') {
                      $.each(obj, function(key, val) {
                           document.getElementById("msg1").innerHTML ="PM10 : " + val["PM10"] + " μg/m<sup>3</sup>"; 
                           if((val["PM10"] >= 0 )&&(val["PM10"] <= 25.99 )){
                              document.getElementById('msg1').className = "w3-text-blue w3-large";
                              document.getElementById('circle_PM10').className = "fa fa-circle w3-text-blue w3-small";
                           }else if((val["PM10"] >= 26 )&&(val["PM10"] <= 50.99 )){
                              document.getElementById('msg1').className = "w3-text-green w3-large";
                              document.getElementById('circle_PM10').className = "fa fa-circle w3-text-green w3-small";
                           }else if((val["PM10"] >= 51 )&&(val["PM10"] <= 100.99 )){
                              document.getElementById('msg1').className = "w3-text-amber w3-large";
                              document.getElementById('circle_PM10').className = "fa fa-circle w3-text-amber w3-small";
                           }else if((val["PM10"] >= 101 )&&(val["PM10"] <= 199.99 )){
                              document.getElementById('msg1').className = "w3-text-orange w3-large";
                              document.getElementById('circle_PM10').className = "fa fa-circle w3-text-orange  w3-small";
                           }else if(val["PM10"] >= 200){
                              document.getElementById('msg1').className = "w3-text-red w3-large";
                              document.getElementById('circle_PM10').className = "fa fa-circle w3-text-red w3-small";
                           }
                      });  
                  }
              }
              });     
      }
      setInterval(getDataFromDb, 1000);
</script>
<script>
    function getDataFromAm() {
$.ajax({
        url: 'dataambient',
        type: 'GET',
        data: '',
        success:function(result) {
        var obj1 = jQuery.parseJSON(JSON.stringify(result));
        if (obj1 != '') {
            $("#myBody").empty();
            $.each(obj1, function(key, val) {
                document.getElementById("msg3").innerHTML = "Temperature : "+val["Tempurature"] + " °C";
                document.getElementById("msg4").innerHTML = "Humidity : "+val["Humidity"] + " %";
                document.getElementById("msg5").innerHTML = "Wind : "+val["Wind"] + " Km/h";
                document.getElementById("msg6").innerHTML = "Wind Direction : " +val["Wind_Direction"];
                document.getElementById("msg7").innerHTML = "Rain : "+val["Rain"] + " mm";
                document.getElementById("msg8").innerHTML = "Pressure : "+val["Pressure"] + " hPa";
                document.getElementById("msg9").innerHTML = "Solar Radiation : "+val["Solar"] + " W/m<sup>2</sup>";
                document.getElementById("msg10").innerHTML = "UV Index : "+val["UV"];

                if (val["Tempurature"] <= 7.99) {
                      document.getElementById('msg3').className = "w3-text-pale-blue w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-pale-blue w3-small";
                  } else if ((val["Tempurature"] >= 8 && val["Tempurature"] <= 15.9)) {
                      document.getElementById('msg3').className = "w3-text-aqua w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-aqua w3-small";
                  } else if ((val["Tempurature"] >= 16 && val["Tempurature"] <= 17.9)) {
                      document.getElementById('msg3').className = "w3-text-cyan w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-cyan w3-small";
                  } else if ((val["Tempurature"] >= 18 && val["Tempurature"] <= 22.9)) {
                      document.getElementById('msg3').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-blue w3-small";
                  } else if ((val["Tempurature"] >= 23 && val["Tempurature"] <= 34.9)) {
                      document.getElementById('msg3').className = "w3-text-green w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-green w3-small";
                  } else if ((val["Tempurature"] >= 35 && val["Tempurature"] <= 39.9)) {
                      document.getElementById('msg3').className = "w3-text-deep-orange w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-deep-orange w3-small";
                  } else if (val["Tempurature"] >= 40) {
                      document.getElementById('msg3').className = "w3-text-red w3-large";
                      document.getElementById('circle_Tem').className = "fa fa-circle w3-text-red  w3-small";
                  }
                  //ความชื้น
                  if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 28.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 27.9)) {
                    document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                    document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 26.9)) {
                    document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 25.9)) {
                    document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 25.9)) {
                    document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 24.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 24.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 23.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 23.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 22.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 22.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                  }
                  //เขียว
                  else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 35.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 34.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 33.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 32.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 32.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 31.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 30.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 25 && val["Tempurature"] <= 30.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 25 && val["Tempurature"] <= 29.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 28.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 28.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 26.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 26.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 25.9)) {
                      document.getElementById('msg4').className = "w3-text-green w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                  }
                  //เหลือง
                  else if ((val["Humidity"] >= 20 && val["Humidity"] <= 24.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 42.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 40.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 39.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 38.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 37.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 36.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 34.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 33.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 33.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 32.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 31.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 31.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 30.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 30.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 29.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 29.9)) {
                      document.getElementById('msg4').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                  }
                  //ส้ม
                  else if ((val["Humidity"] >= 20 && val["Humidity"] <= 24.9) && (val["Tempurature"] >= 43 && val["Tempurature"] <= 43.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 41 && val["Tempurature"] <= 43.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 40 && val["Tempurature"] <= 43.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 43.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 42.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 37 && val["Tempurature"] <= 40.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 39.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 38.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 38.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 37.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 36.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 34.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 33.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 33.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 32.9)) {
                      document.getElementById('msg4').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                  }
                  //แดง
                  else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 43 && val["Tempurature"] <= 43.9)) {
                      document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 41 && val["Tempurature"] <= 42.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 40 && val["Tempurature"] <= 41.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 40.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 39.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 38.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 37 && val["Tempurature"] <= 38.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 37.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 37.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 36.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 36.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 35.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 34.9)) {
                       document.getElementById('msg4').className = "w3-text-red w3-large";
                      document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                  }
                  
                  //Rain
                  if (val["Rain"] >= 0.1 && val["Rain"] <= 10.0) {
                      document.getElementById('msg7').className = " w3-text-light-green w3-large";
                      document.getElementById('circle_Rain').className = "fa fa-circle w3-text-light-green w3-small";
                  } else if (val["Rain"] >= 10.1 && val["Rain"] <= 35.0) {
                      document.getElementById('msg7').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Rain').className = "fa fa-circle w3-text-amber w3-small";
                  } else if (val["Rain"] >= 35.1 && val["Rain"] <= 90.0) {
                      document.getElementById('msg7').className = "w3-text-deep-orange w3-large";
                      document.getElementById('circle_Rain').className = "fa fa-circle w3-text-deep-orange  w3-small";
                  } else if (val["Rain"] > 90.1) {
                      document.getElementById('msg7').className = "w3-text-red w3-large";
                      document.getElementById('circle_Rain').className = "fa fa-circle w3-text-red  w3-small";
                  } else if (val["Rain"] < 0.1) {
                      document.getElementById('msg7').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Rain').className = "fa fa-circle w3-text-blue  w3-small";
                  }
                  
                  //Wind
                  if (val["Wind"] < 1) {
                      document.getElementById('msg5').className = "w3-text-light-blue w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-small";
                  } else if (val["Wind"] >= 1 && val["Wind"] <= 5.9) {
                      document.getElementById('msg5').className = "w3-text-light-blue w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-small";
                  } else if (val["Wind"] >= 6 && val["Wind"] <= 11.9) {
                      document.getElementById('msg5').className = "w3-text-aqua w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-aqua  w3-small";
                  } else if (val["Wind"] >= 12 && val["Wind"] <= 19.9) {
                      document.getElementById('msg5').className = "w3-text-blue w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-blue  w3-small";
                  } else if (val["Wind"] >= 20 && val["Wind"] <= 28.9) {
                      document.getElementById('msg5').className = "w3-text-cyan w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-cyan  w3-small";
                  } else if (val["Wind"] >= 29 && val["Wind"] <= 38.9) {
                      document.getElementById('msg5').className = "w3-text-green w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-green w3-small";
                  } else if (val["Wind"] >= 39 && val["Wind"] <= 49.9) {
                      document.getElementById('msg5').className = "w3-text-amber w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-amber  w3-small";
                  } else if (val["Wind"] >= 50 && val["Wind"] <= 61.9) {
                      document.getElementById('msg5').className = "w3-text-deep-orange w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-deep-orange  w3-small";
                  } else if (val["Wind"] >= 62 && val["Wind"] <= 74.9) {
                      document.getElementById('msg5').className = " w3-text-red w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-small";
                  } else if (val["Wind"] >= 75 && val["Wind"] <= 88.9) {
                      document.getElementById('msg5').className = "w3-text-red w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                  } else if (val["Wind"] >= 89 && val["Wind"] <= 102.9) {
                      document.getElementById('msg5').className = "w3-text-red w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-small";
                  } else if (val["Wind"] >= 103 && val["Wind"] <= 117) {
                      document.getElementById('msg5').className = "w3-text-red w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                  } else if (val["Wind"] > 117) {
                      document.getElementById('msg5').className = "w3-text-red w3-large";
                      document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                  }
                  
                  //uv_index
                  if(val["UV"]=="Low"){
                      document.getElementById('msg10').className = "w3-text-green w3-large";  
                      document.getElementById('circle_UV').className = "fa fa-circle w3-text-green  w3-small";
                  }else if(val["UV"]=="Moderate"){
                      document.getElementById('msg10').className = "w3-text-yellow w3-large";
                      document.getElementById('circle_UV').className = "fa fa-circle w3-text-yellow  w3-small";
                  }else if(val["UV"]=="High"){
                      document.getElementById('msg10').className = "w3-text-deep-orange w3-large";
                      document.getElementById('circle_UV').className = "fa fa-circle w3-text-deep-orange  w3-small";  
                  }else if(val["UV"]=="Very High"){
                      document.getElementById('msg10').className = "w3-text-red w3-large";
                      document.getElementById('circle_UV').className = "fa fa-circle w3-text-red  w3-small";  
                  }else if(val["UV"]=="Extreme"){
                      document.getElementById('msg10').className = "w3-text-purple w3-large";
                      document.getElementById('circle_UV').className = "fa fa-circle w3-text-purple  w3-small";  
                  }

                  //solar
                  if(val["Solar"]==0){
                      document.getElementById('msg9').className = "w3-text-gray w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-gray  w3-small";
                  }else if(val["Solar"]>=0 && val["Solar"]<=299.99 ){
                      document.getElementById('msg9').className = "w3-text-khaki w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-khaki  w3-small";
                  }else if(val["Solar"]>=300 && val["Solar"]<=599.99 ){
                      document.getElementById('msg9').className = "w3-text-yellow w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-yellow w3-small";
                  }else if(val["Solar"]>=600 && val["Solar"]<=799.99 ){
                      document.getElementById('msg9').className = "w3-text-orange w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-orange  w3-small";
                  }else if(val["Solar"]>=800 && val["Solar"]<=1099.99 ){
                      document.getElementById('msg9').className = "w3-text-deep-orange w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-deep-orange  w3-small";
                  }else if(val["Solar"]>=1100){
                      document.getElementById('msg9').className = "w3-text-red w3-large";
                      document.getElementById('circle_Solar').className = "fa fa-circle w3-text-red  w3-small";
                  }

            });
        }
    }
    });
   
}
setInterval(getDataFromAm, 1000);
</script> --}}

@endsection


@section('content')
<div id="map"></div>
    <div align="center">Coming soon...</div>
{{-- <script>
  function initMap() {
var mapOptions = {
  center: {lat: 17.4517878, lng: 102.9339000},
  zoom: 15,
  mapTypeId:google.maps.MapTypeId.HYBRID
}
  
var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

var marker = new google.maps.Marker({
   position: new google.maps.LatLng(17.4517878, 102.9339000),
   map: maps,
   title: 'CCE Weather Station UDRU'
});
var info = new google.maps.InfoWindow({  
  content : '<i class="fa fa-circle w3-text-green w3-small" id="circle_PM10">&nbsp;<span p class="w3-text-green w3-large" id="msg1">--</p></span><br>'+
  '<i class="fa fa-circle w3-text-green w3-small" id="circle_Tem">&nbsp;<span p class="w3-text-green w3-large" id="msg3">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-green w3-small" id="circle_Humidity">&nbsp;<span p class="w3-text-green w3-large" id="msg4">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-green w3-small" id="circle_Wind">&nbsp;<span p class="w3-text-green w3-large" id="msg5">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-dark-gray  w3-small" id="circle_WindDi">&nbsp;<span p class="w3-text-dark-gray w3-large " id="msg6">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-green w3-small" id="circle_Rain">&nbsp;<span p class="w3-text-green w3-large" id="msg7">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-indigo w3-small" id="circle_Pressure">&nbsp;<span p class="w3-text-indigo w3-large" id="msg8">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-green w3-small" id="circle_Solar">&nbsp;<span p class="w3-text-green w3-large" id="msg9">--</p></span><br>'+
   '<i class="fa fa-circle w3-text-green w3-small" id="circle_UV">&nbsp;<span p class="w3-text-green w3-large" id="msg10">--</p></span>'
});

google.maps.event.addListener(marker, 'click', function() {
  info.open(maps, marker);
  //getDataFromDb();
});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlFtmZCzKWIYGevwk4VQbwP9Z45-e3qGo&callback=initMap"
async defer>
</script> --}}
@endsection
{{-- <!DOCTYPE html>
<html>
  <head>
    <title>UDRU Weather Station - Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 100%;
        width: 100%;
      }
    </style>
        
  </head>
  <body>
    <div id="map"></div>
    
    <script>
      function initMap() {
    var mapOptions = {
      center: {lat: 17.4517878, lng: 102.9339000},
      zoom: 15,
      mapTypeId:google.maps.MapTypeId.HYBRID
    }
      
    var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
    
    var marker = new google.maps.Marker({
       position: new google.maps.LatLng(17.4517878, 102.9339000),
       map: maps,
       title: 'CCE Weather Station UDRU'
    });
    var info = new google.maps.InfoWindow({  
      content : '<i class="fa fa-circle w3-text-green w3-small" id="circle_PM10">&nbsp;<span p class="w3-text-green w3-large" id="msg1">--</p></span><br>'+
      '<i class="fa fa-circle w3-text-green w3-small" id="circle_Tem">&nbsp;<span p class="w3-text-green w3-large" id="msg3">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-green w3-small" id="circle_Humidity">&nbsp;<span p class="w3-text-green w3-large" id="msg4">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-green w3-small" id="circle_Wind">&nbsp;<span p class="w3-text-green w3-large" id="msg5">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-dark-gray  w3-small" id="circle_WindDi">&nbsp;<span p class="w3-text-dark-gray w3-large " id="msg6">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-green w3-small" id="circle_Rain">&nbsp;<span p class="w3-text-green w3-large" id="msg7">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-indigo w3-small" id="circle_Pressure">&nbsp;<span p class="w3-text-indigo w3-large" id="msg8">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-green w3-small" id="circle_Solar">&nbsp;<span p class="w3-text-green w3-large" id="msg9">--</p></span><br>'+
       '<i class="fa fa-circle w3-text-green w3-small" id="circle_UV">&nbsp;<span p class="w3-text-green w3-large" id="msg10">--</p></span>'
    });
    
    google.maps.event.addListener(marker, 'click', function() {
      info.open(maps, marker);
      //getDataFromDb();
    });
  }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlFtmZCzKWIYGevwk4VQbwP9Z45-e3qGo&callback=initMap"
    async defer></script>
  
  </body>
  
  <script>
      function getDataFromDb() {
            $.ajax({
                    url: 'datadustdtec',
                    type: "GET",
                    data: '',
                    success:function(result) {
                    var obj = jQuery.parseJSON(JSON.stringify(result));
                    //console.log(obj);
                    if (obj != '') {
                        $.each(obj, function(key, val) {
                             document.getElementById("msg1").innerHTML ="PM10 : " + val["PM10"] + " μg/m<sup>3</sup>"; 
                             if((val["PM10"] >= 0 )&&(val["PM10"] <= 25.99 )){
                                document.getElementById('msg1').className = "w3-text-blue w3-large";
                                document.getElementById('circle_PM10').className = "fa fa-circle w3-text-blue w3-small";
                             }else if((val["PM10"] >= 26 )&&(val["PM10"] <= 50.99 )){
                                document.getElementById('msg1').className = "w3-text-green w3-large";
                                document.getElementById('circle_PM10').className = "fa fa-circle w3-text-green w3-small";
                             }else if((val["PM10"] >= 51 )&&(val["PM10"] <= 100.99 )){
                                document.getElementById('msg1').className = "w3-text-amber w3-large";
                                document.getElementById('circle_PM10').className = "fa fa-circle w3-text-amber w3-small";
                             }else if((val["PM10"] >= 101 )&&(val["PM10"] <= 199.99 )){
                                document.getElementById('msg1').className = "w3-text-orange w3-large";
                                document.getElementById('circle_PM10').className = "fa fa-circle w3-text-orange  w3-small";
                             }else if(val["PM10"] >= 200){
                                document.getElementById('msg1').className = "w3-text-red w3-large";
                                document.getElementById('circle_PM10').className = "fa fa-circle w3-text-red w3-small";
                             }
                        });  
                    }
                }
                });     
        }
        setInterval(getDataFromDb, 1000);
  </script>
  <script>
      function getDataFromAm() {
  $.ajax({
          url: 'dataambient',
          type: 'GET',
          data: '',
          success:function(result) {
          var obj1 = jQuery.parseJSON(JSON.stringify(result));
          if (obj1 != '') {
              $("#myBody").empty();
              $.each(obj1, function(key, val) {
                  document.getElementById("msg3").innerHTML = "Temperature : "+val["Tempurature"] + " °C";
                  document.getElementById("msg4").innerHTML = "Humidity : "+val["Humidity"] + " %";
                  document.getElementById("msg5").innerHTML = "Wind : "+val["Wind"] + " Km/h";
                  document.getElementById("msg6").innerHTML = "Wind Direction : " +val["Wind_Direction"];
                  document.getElementById("msg7").innerHTML = "Rain : "+val["Rain"] + " mm";
                  document.getElementById("msg8").innerHTML = "Pressure : "+val["Pressure"] + " hPa";
                  document.getElementById("msg9").innerHTML = "Solar Radiation : "+val["Solar"] + " W/m<sup>2</sup>";
                  document.getElementById("msg10").innerHTML = "UV Index : "+val["UV"];

                  if (val["Tempurature"] <= 7.99) {
                        document.getElementById('msg3').className = "w3-text-pale-blue w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-pale-blue w3-small";
                    } else if ((val["Tempurature"] >= 8 && val["Tempurature"] <= 15.9)) {
                        document.getElementById('msg3').className = "w3-text-aqua w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-aqua w3-small";
                    } else if ((val["Tempurature"] >= 16 && val["Tempurature"] <= 17.9)) {
                        document.getElementById('msg3').className = "w3-text-cyan w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-cyan w3-small";
                    } else if ((val["Tempurature"] >= 18 && val["Tempurature"] <= 22.9)) {
                        document.getElementById('msg3').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-blue w3-small";
                    } else if ((val["Tempurature"] >= 23 && val["Tempurature"] <= 34.9)) {
                        document.getElementById('msg3').className = "w3-text-green w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-green w3-small";
                    } else if ((val["Tempurature"] >= 35 && val["Tempurature"] <= 39.9)) {
                        document.getElementById('msg3').className = "w3-text-deep-orange w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-deep-orange w3-small";
                    } else if (val["Tempurature"] >= 40) {
                        document.getElementById('msg3').className = "w3-text-red w3-large";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-red  w3-small";
                    }
                    //ความชื้น
                    if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 28.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 27.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 26.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 25.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 25.9)) {
                      document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 24.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 24.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 23.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 23.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 22.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 22.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 21 && val["Tempurature"] <= 21.9)) {
                        document.getElementById('msg4').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-blue  w3-small";
                    }
                    //เขียว
                    else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 35.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 34.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 33.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 32.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 32.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 31.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 30.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 25 && val["Tempurature"] <= 30.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 25 && val["Tempurature"] <= 29.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 28.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 24 && val["Tempurature"] <= 28.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 23 && val["Tempurature"] <= 27.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 26.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 26.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 22 && val["Tempurature"] <= 25.9)) {
                        document.getElementById('msg4').className = "w3-text-green w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-green  w3-small";
                    }
                    //เหลือง
                    else if ((val["Humidity"] >= 20 && val["Humidity"] <= 24.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 42.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 40.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 39.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 38.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 37.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 36.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 34.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 33.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 33.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 32.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 29 && val["Tempurature"] <= 31.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 31.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 28 && val["Tempurature"] <= 30.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 30.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 27 && val["Tempurature"] <= 29.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 26 && val["Tempurature"] <= 29.9)) {
                        document.getElementById('msg4').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-amber  w3-small";
                    }
                    //ส้ม
                    else if ((val["Humidity"] >= 20 && val["Humidity"] <= 24.9) && (val["Tempurature"] >= 43 && val["Tempurature"] <= 43.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 25 && val["Humidity"] <= 29.9) && (val["Tempurature"] >= 41 && val["Tempurature"] <= 43.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 30 && val["Humidity"] <= 34.9) && (val["Tempurature"] >= 40 && val["Tempurature"] <= 43.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 35 && val["Humidity"] <= 39.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 43.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 42.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 37 && val["Tempurature"] <= 40.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 39.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 38.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 38.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 37.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 36.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 32 && val["Tempurature"] <= 35.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 34.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 31 && val["Tempurature"] <= 33.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 33.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 30 && val["Tempurature"] <= 32.9)) {
                        document.getElementById('msg4').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-orange  w3-small";
                    }
                    //แดง
                    else if ((val["Humidity"] >= 40 && val["Humidity"] <= 44.9) && (val["Tempurature"] >= 43 && val["Tempurature"] <= 43.9)) {
                        document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 45 && val["Humidity"] <= 49.9) && (val["Tempurature"] >= 41 && val["Tempurature"] <= 42.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 50 && val["Humidity"] <= 54.9) && (val["Tempurature"] >= 40 && val["Tempurature"] <= 41.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 55 && val["Humidity"] <= 59.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 40.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 60 && val["Humidity"] <= 64.9) && (val["Tempurature"] >= 39 && val["Tempurature"] <= 39.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 65 && val["Humidity"] <= 69.9) && (val["Tempurature"] >= 38 && val["Tempurature"] <= 38.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 70 && val["Humidity"] <= 74.9) && (val["Tempurature"] >= 37 && val["Tempurature"] <= 38.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 75 && val["Humidity"] <= 79.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 37.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 80 && val["Humidity"] <= 84.9) && (val["Tempurature"] >= 36 && val["Tempurature"] <= 37.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 85 && val["Humidity"] <= 89.9) && (val["Tempurature"] >= 35 && val["Tempurature"] <= 36.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 90 && val["Humidity"] <= 94.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 36.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] >= 95 && val["Humidity"] <= 99.9) && (val["Tempurature"] >= 34 && val["Tempurature"] <= 35.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    } else if ((val["Humidity"] = 100) && (val["Tempurature"] >= 33 && val["Tempurature"] <= 34.9)) {
                         document.getElementById('msg4').className = "w3-text-red w3-large";
                        document.getElementById('circle_Humidity').className = "fa fa-circle w3-text-red  w3-small";
                    }
                    
                    //Rain
                    if (val["Rain"] >= 0.1 && val["Rain"] <= 10.0) {
                        document.getElementById('msg7').className = " w3-text-light-green w3-large";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-light-green w3-small";
                    } else if (val["Rain"] >= 10.1 && val["Rain"] <= 35.0) {
                        document.getElementById('msg7').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-amber w3-small";
                    } else if (val["Rain"] >= 35.1 && val["Rain"] <= 90.0) {
                        document.getElementById('msg7').className = "w3-text-deep-orange w3-large";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-deep-orange  w3-small";
                    } else if (val["Rain"] > 90.1) {
                        document.getElementById('msg7').className = "w3-text-red w3-large";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-red  w3-small";
                    } else if (val["Rain"] < 0.1) {
                        document.getElementById('msg7').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-blue  w3-small";
                    }
                    
                    //Wind
                    if (val["Wind"] < 1) {
                        document.getElementById('msg5').className = "w3-text-light-blue w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-small";
                    } else if (val["Wind"] >= 1 && val["Wind"] <= 5.9) {
                        document.getElementById('msg5').className = "w3-text-light-blue w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-small";
                    } else if (val["Wind"] >= 6 && val["Wind"] <= 11.9) {
                        document.getElementById('msg5').className = "w3-text-aqua w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-aqua  w3-small";
                    } else if (val["Wind"] >= 12 && val["Wind"] <= 19.9) {
                        document.getElementById('msg5').className = "w3-text-blue w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-blue  w3-small";
                    } else if (val["Wind"] >= 20 && val["Wind"] <= 28.9) {
                        document.getElementById('msg5').className = "w3-text-cyan w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-cyan  w3-small";
                    } else if (val["Wind"] >= 29 && val["Wind"] <= 38.9) {
                        document.getElementById('msg5').className = "w3-text-green w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-green w3-small";
                    } else if (val["Wind"] >= 39 && val["Wind"] <= 49.9) {
                        document.getElementById('msg5').className = "w3-text-amber w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-amber  w3-small";
                    } else if (val["Wind"] >= 50 && val["Wind"] <= 61.9) {
                        document.getElementById('msg5').className = "w3-text-deep-orange w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-deep-orange  w3-small";
                    } else if (val["Wind"] >= 62 && val["Wind"] <= 74.9) {
                        document.getElementById('msg5').className = " w3-text-red w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-small";
                    } else if (val["Wind"] >= 75 && val["Wind"] <= 88.9) {
                        document.getElementById('msg5').className = "w3-text-red w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                    } else if (val["Wind"] >= 89 && val["Wind"] <= 102.9) {
                        document.getElementById('msg5').className = "w3-text-red w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-small";
                    } else if (val["Wind"] >= 103 && val["Wind"] <= 117) {
                        document.getElementById('msg5').className = "w3-text-red w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                    } else if (val["Wind"] > 117) {
                        document.getElementById('msg5').className = "w3-text-red w3-large";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-small";
                    }
                    
                    //uv_index
                    if(val["UV"]=="Low"){
                        document.getElementById('msg10').className = "w3-text-green w3-large";  
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-green  w3-small";
                    }else if(val["UV"]=="Moderate"){
                        document.getElementById('msg10').className = "w3-text-yellow w3-large";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-yellow  w3-small";
                    }else if(val["UV"]=="High"){
                        document.getElementById('msg10').className = "w3-text-deep-orange w3-large";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-deep-orange  w3-small";  
                    }else if(val["UV"]=="Very High"){
                        document.getElementById('msg10').className = "w3-text-red w3-large";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-red  w3-small";  
                    }else if(val["UV"]=="Extreme"){
                        document.getElementById('msg10').className = "w3-text-purple w3-large";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-purple  w3-small";  
                    }

                    //solar
                    if(val["Solar"]==0){
                        document.getElementById('msg9').className = "w3-text-gray w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-gray  w3-small";
                    }else if(val["Solar"]>=0 && val["Solar"]<=299.99 ){
                        document.getElementById('msg9').className = "w3-text-khaki w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-khaki  w3-small";
                    }else if(val["Solar"]>=300 && val["Solar"]<=599.99 ){
                        document.getElementById('msg9').className = "w3-text-yellow w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-yellow w3-small";
                    }else if(val["Solar"]>=600 && val["Solar"]<=799.99 ){
                        document.getElementById('msg9').className = "w3-text-orange w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-orange  w3-small";
                    }else if(val["Solar"]>=800 && val["Solar"]<=1099.99 ){
                        document.getElementById('msg9').className = "w3-text-deep-orange w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-deep-orange  w3-small";
                    }else if(val["Solar"]>=1100){
                        document.getElementById('msg9').className = "w3-text-red w3-large";
                        document.getElementById('circle_Solar').className = "fa fa-circle w3-text-red  w3-small";
                    }

              });
          }
      }
      });
     
}
setInterval(getDataFromAm, 1000);
  </script>

</html> --}}