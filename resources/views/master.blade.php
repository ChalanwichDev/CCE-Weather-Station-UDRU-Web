<!DOCTYPE html>
<html>

<head>
    <title>UDRU Weather Station @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    <meta charset=utf-8 />
    @yield('head')
    @yield('ajax')
</head>

<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-style: normal, sans-serif
    }
</style>


<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-left">{{ trans('message.Weather Station - UDRU') }}</span>
        <a class="w3-bar-item w3-right" href="{{ URL::to('locale/en') }}"><img src="{{url('images/flag-en.jpg')}}" class="w3-circle" alt="flag-en" style="width: 30px"></a>
        <a class="w3-bar-item w3-right" href="{{ URL::to('locale/th') }}"><img src="{{url('images/flag-th.png')}}" class="w3-circle" alt="flag-th" style="width: 30px"></a>

    </div>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:220px;" id="mySidebar"><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img src="{{url('images/CCE.jpg')}}" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar">
                <span>{{trans('message.Computer And Communications Engineering') }}</span><br>
                <a href="http://udru.ac.th/cce/#" class="w3-bar-item w3-button"><i class="fa fa-tv"></i></a>
                <a href="https://www.facebook.com/UDRU.CCE/" class="w3-bar-item w3-button"><i class="fab fa-facebook-square"></i></a>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>{{trans('message.Dashboard')}}</h5>
        </div>
        <div class="w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>{{trans('message.Close Menu')}}</a>
            <a href="/" class="w3-bar-item w3-button w3-padding @yield('sidebar-index')"><i class="fa fa-leaf"></i>&nbsp;{{trans('message.Weather')}}</a>
            <a href="map" class="w3-bar-item w3-button w3-padding @yield('sidebar-Map')"><i class="fas fa-map-marked-alt"></i>&nbsp;{{trans('message.Map')}}</a>
            <a href="AirQuality" class="w3-bar-item w3-button w3-padding @yield('sidebar-AirQuality')"><i class="fas fa-smog"></i>&nbsp;{{trans('message.Air Quality')}}</a>
            <a href="Monitoring" class="w3-bar-item w3-button w3-padding @yield('sidebar-Monitoring')"><i class="fas fa-tachometer-alt"></i>&nbsp;{{trans('message.Monitoring')}}</a>
            <a href="Forecast" class="w3-bar-item w3-button w3-padding @yield('sidebar-Forecast')"><i class="far fa-calendar-alt"></i>&nbsp;{{trans('message.Forecast')}}</a>
            <a href="Report" class="w3-bar-item w3-button w3-padding @yield('sidebar-Report')"><i class="fas fa-database"></i>&nbsp;{{trans('message.Report')}}</a>
            <a href="Instruments" class="w3-bar-item w3-button w3-padding @yield('sidebar-Instruments')"><i class="fas fa-tools"></i>&nbsp;{{trans('message.Instruments')}}</a>
            <a href="Deverloper" class="w3-bar-item w3-button w3-padding @yield('sidebar-Deverloper')"><i class="fas fa-award"></i>&nbsp;{{trans('message.Deverloper')}}</a>
            <a href="administrator" class="w3-bar-item w3-button w3-padding @yield('sidebar-administrator')"><i class="fas fa-address-card"></i>&nbsp;{{trans('message.Administrator')}}</a><br><br>
        </div>
        
        <a href="https://info.flagcounter.com/FIBe"><img src="https://s05.flagcounter.com/count2/FIBe/bg_FFFFFF/txt_000000/border_FFFFFF/columns_2/maxflags_20/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a><br>
        <!--<script src="//t1.extreme-dm.com/f.js" id="eXF-cceudru-0" async defer></script><br>-->
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:220px;margin-top:30px;">
        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
           @yield('header')
        </header>
        
        @yield('content')
    
        <!-- Footer -->
        <footer class="w3-container w3-padding-1 w3-black " align="CENTER" style="width = 10px">
            <p>{{trans('message.Copyright')}} &copy; {{trans('message.by Computer And Communication Engineering')}}</p>
        @yield('footer')
        </footer>

        <!-- End page content -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>


</body>
</html>
