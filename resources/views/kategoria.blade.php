<!DOCTYPE html>
<html lang="en">
<head>

     <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />

    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS STYLESHEETS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
 	<link rel="stylesheet" href="{{asset('css/elixir.css')}}" />
    <link href="{{asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/YTPlayer.css')}}" rel="stylesheet">
 	<link rel="stylesheet" href="{{asset('css/swipebox.css')}}">


    <style>
        section.menu {
            background: none;
        }

        #header {
            position: fixed;
            top:0px;
            left: 0px;
            z-index:1001;
            width: 100%;
            height: 90px;
            font-family: 'Open Sans', sans-serif;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            padding-top: 20px;
        }

        #header .menu-item a {
            color: #818181;
        }
        #header.overflow {
            top:-100px;
            left: 0px;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -webkit-font-smoothing: antialiased;
        }
    </style>

     
    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
    <![endif]-->
</head>
<body>
		
        
        <!-- BEGIN HEADER -->
        <header id="header" role="banner" class="">
            <div class="jt_row container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle menu" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand normal logo" href="#home"><div class="logo_elixir" style="width:150px !important"></div></a>
                    <a class="navbar-brand mini" href="#home"><div class="logo_elixir dark" style="width:150px !important"></div></a>
                    <a class="navbar-brand mini darker" href="#home"><div class="logo_elixir dark" style="width:150px !important"></div></a>
                </div>

                <!-- BEGIN NAVIGATION MENU-->
                <nav class="collapse navbar-collapse navbar-right navbar-main-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav navigation">
                        <li class="page-scroll menu-item"><a href="{{route('index')}}}}">Ballina</a></li>
                        <li class="page-scroll menu-item"><a href="#">Lokacioni</a></li>
                    </ul>
                </nav>
                <!-- EN NAVIGATION MENU -->
            </div>
        </header>
        <!-- END HEADER -->




      



        <!-- BEGIN MENU SECTION -->
        <section id="menu" class="section menu">

            <div class="container">
                    <div class="jt_row jt_row-fluid row">

                        <div class="col-md-12 jt_col column_container">
                         <div class="voffset100"></div>
                            <div class="title first">Kinobar</div>
                            <div class="voffset10"></div>
                            <div class="subtitle" style="font-size: 40px;">{{$kategoria->emri}}</div>
                            <img class="center" src="images/steaks.png" alt="Menu Logo">
                            
                        </div>
                        
                                @foreach($kategoria->produktet as $produkti)
                        <div class="col-md-4 jt_col column_container">    
                        <div class="voffset10"></div>
                            <ul class="menu">
                                <li>
                                    {{$produkti->emri}}
                                    <div class="detail">{{$produkti->pershkrimi}}<span class="price">€ {{number_format($produkti->qmimi,2)}}</span></div>
                                </li>
                                
                            </ul>
                        </div>
                                @endforeach
                      
                        

            </div>
            <div class="voffset60"></div>
        </section>
        <!-- END MENU SECTION -->


        <!-- BEGIN MAP SECTION -->
        <section id="maps">
               
                <div id="mapdiv"></div>
        </section>
        <!-- END MAP SECTION -->


    

        <!-- BEGIN FOOTER -->
        <footer id="footer" class="section" role="contentinfo">
            <div class="container">
                <ul class="social">
                    <li><a href="#" class="icon tw"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon fb"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icon in"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="icon go"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </footer>
        <!-- END FOOTER -->
    <a href="#0" class="cd-top">Top</a>
    <!-- BEGIN Scripts-->

    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/pathLoader.js')}}"></script>
    <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.js')}}"></script>
    <script src="{{asset('js/jquery.nav.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/default.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.swipebox.js')}}"></script>
    <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
    <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());
    map.zoomToMaxExtent();
  </script>

    <script type="text/javascript">
    ;( function( $ ) {

        $( '.swipebox' ).swipebox();

    } )( jQuery );
    </script>



    
    <!-- END Scripts -->

    
</body>
</html>
