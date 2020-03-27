<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather Station - Administrator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{trans('message.Home')}}</a>
                    @else
                        <a href="{{ route('login') }}">{{trans('message.Login')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{trans('message.Register')}}</a>
                        @endif
                    @endauth
                    <a class="w3-bar-item w3-right" href="{{ URL::to('locale/en') }}"><img src="{{url('images/flag-en.jpg')}}" class="w3-circle" alt="flag-en" style="width: 30px"></a>
                    <a class="w3-bar-item w3-right" href="{{ URL::to('locale/th') }}"><img src="{{url('images/flag-th.png')}}" class="w3-circle" alt="flag-th" style="width: 30px"></a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   {{trans('message.CCE Weather Station')}} <br>{{trans('message.For Administrator')}}
                </div>

                <div class="links">
                    <a href="{{url('/')}}">{{trans('message.Index')}}</a>
                    <a href="{{url('AirQuality')}}">{{trans('message.Graph')}}</a>
                    <a href="{{url('Monitoring')}}">{{trans('message.Mornitoring')}}</a>
                    <a href="{{url('Forecast')}}">{{trans('message.Forcast')}}</a>
                    <a href="{{url('Report')}}">{{trans('message.Report')}}</a>
                    <a href="{{url('insertdata')}}">{{trans('message.InsertData')}}</a>
                </div>
            </div>
        </div>
    </body>
</html>
