<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .container {
                position: relative;
                text-align: center;
                color: white;
            }
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .kategoria {
                height:100px;
                border-radius: 2px;
            }
        </style>
    </head>
    <body >
        <div style=""> </div>
        <div 
            class="bg-image"
            style="color:black; background-color:black;
                background-image: url('https://ilgusto-ristorante.com/wp-content/uploads/2020/08/Screenshot_13.jpg') ;
                height: 100vh;
                height: 100%; 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.8;
            "
        >

            <div class="row" style="padding-top:300px;">
                @foreach($kategoria->produktet as $produkti)
                <div class=" col-md-8 offset-md-2">
                    <h3 class=" bg-light ">{{$produkti->emri}}</h3>
                </div>
                @endforeach

            </div>

        </div>

    </body>
</html>