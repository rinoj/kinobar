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
        .img-container{
  position:relative;
  display:inline-block;
}
.img-container .overlay{
  position:absolute;
  height:250px;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(0,170,170);
  opacity:0;
  transition:opacity 500ms ease-in-out;
}
.img-container:hover .overlay{
  opacity:1;
}
.overlay span{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  color:#fff;
}
    </style>
     
     
    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
    <![endif]-->
</head>
<body>
		
	<div id="mask">
            <div class="loader">
              <img src="svg-loaders/tail-spin.svg" alt='loading'>
            </div>
        </div>
    	
        
        <!-- BEGIN HEADER -->
        <header id="header" role="banner " style="margin-bottom: 250px;">
            <div class="jt_row container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand normal logo" href="#home"><div class="logo_elixir" style="width:150px !important"></div></a>
                    <a class="navbar-brand mini" href="#home"><div class="logo_elixir dark" style="width:150px !important"></div></a>
                    <a class="navbar-brand mini darker" href="#home"><div class="logo_elixir dark" style="width:150px !important"></div></a>
                </div>

                <!-- BEGIN NAVIGATION MENU-->
                <nav class="collapse navbar-collapse navbar-right navbar-main-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav navigation">
                        <li class="page-scroll menu-item"><a href="#home-slider">Ballina</a></li>
                        <li class="page-scroll menu-item"><a href="#">Lokacioni</a></li>
                    </ul>
                </nav>
                <!-- EN NAVIGATION MENU -->
            </div>
        </header>
        <!-- END HEADER -->



       
        <!-- BEGIN GALLERY SECTION -->
        <section id="gallery" class="section gallery dark">
                <div class="jt_row jt_row-fluid row">
                    <div class="col-md-12 jt_col column_container">
                    <div class="voffset100"></div>
                            <h2 class="section-title">KINOBAR</h2>
                            <div class="col-md-6 col-md-offset-3 jt_col column_container">    
                                <div class="section-subtitle">
                                    
                                </div>
                    </div>
                            
                    </div> 

                    <div class="col-md-12 jt_col column_container">

                        <nav class="primary">
                            
                        </nav>

                        <div class="portfolio">
                            @foreach($kategorit as $kategoria)
                            <div class="col-md-5 {{$kategoria->id % 2 == 1 ? 'offset-md-1' : ''}}" style="margin-top:15px;height:220px; !important">
                            <a href="{{route('kategoria', $kategoria->slug)}}">
                                <div class="card bg-dark text-white" >
                                    <img class="card-img" src="https://ilgusto-ristorante.com/wp-content/uploads/2020/08/soup1.jpg" style="height: 220px; opacity:.5 ;" alt="Card image">
                                    <div class="card-img-overlay card-block justify-content-center align-self-center " style="margin-top:55px;">
                                        <h1 class="card-title text-center card-block ">{{$kategoria->emri}}</h1>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                     
                        </div>
                    </div> <!-- End .jt_col -->
                </div> <!-- End .jt_row -->
                <div class="voffset200"></div>
        </section>
        <!-- END GALLERY SECTION -->




        



        



        <!-- BEGIN MAP SECTION -->
        <section id="maps">
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div class="map-content">
                <div class="wpgmappity_container inner-map" id="wpgmappitymap"></div>
            </div>
        </section>
        <!-- END MAP SECTION -->


    

        <!-- BEGIN FOOTER -->
        <footer id="footer" class="section" role="contentinfo">
            <div class="container">
                <ul class="social">
                    <li><a href="https://www.facebook.com/kinobarlounge" class="icon fb"><i class="fa fa-facebook"></i></a></li>
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

    <script type="text/javascript">
    ;( function( $ ) {

        $( '.swipebox' ).swipebox();

    } )( jQuery );
    </script>


    
    <!-- END Scripts -->

    
</body>
</html>


