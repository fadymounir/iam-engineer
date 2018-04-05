<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  @yield('title')</title>
  
    <link rel="stylesheet" href="{{Request::root()}}/website/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="{{Request::root()}}/website/css/hover.css">
    <link rel="stylesheet" href="{{Request::root()}}/website/css/animate.css">
    <link rel="stylesheet" href="{{Request::root()}}/website/css/bootstrap.css">
    <link rel="stylesheet" href="{{Request::root()}}/website/css/style.css">
    <script src="{{Request::root()}}/website/js/html5shiv.min.js"></script>
    <script src="{{Request::root()}}/website/js/respond.min.js"></script>
        @yield('links')
</head>

<body>



    <div class="Frist-Nav">
        <div class="container-fluid">
            <ul>
                <li><a href="/terms">terms of use</a></li>

            </ul>

            <div class="get">
                <p><a href="#" data-toggle="modal" data-target="#myModal">get our newsletter</a> </p>
            </div>
        </div>
    </div>
    <!--End Frist Nav  -->

    <!-- Start head -->
    <div class="head">
        <div class="container">
            <h2>{{$info->title}}</h2>
            <p>{{$info->subtitle}}</p>
        </div>
    </div>

    <!-- End head -->

    <!--Strat Nav  -->
    <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="a"><a href="/">Home</a></li>
                        <li><a href="/news">news</a></li>
                        <li><a href="/case_studeis">Case Studies</a></li>
                        <li><a href="/aboutUs">About Us</a></li>
                        <li><a href="/contactUs">Contact us</a></li>

                        
                        


                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--End Nav  -->

    <!--Start Content  -->
    







            @yield('content')













    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Benfits</h3>
                    <p style="text-b: ">{{$appsetting->Benfits}}</p>
                </div>
                <div class="col-md-4">
                    <h3>What Our Customer Say</h3>
                    <p>{{$appsetting->CustomerSay}}</p>
                </div>
                <div class="col-md-4">
                    <h3>stay connected on</h3>
                    <ul>
                        <li><a href="{{$appsetting->facebook_Url}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$appsetting->twitter_Url}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$appsetting->linkedin_Url}}"><i class="fa fa-linkedin"></i></a></li>

                    </ul>

                </div>
            </div>
        </div>
    </footer>

    


    <script src="{{Request::root()}}/website/js/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.rawgit.com/tinywall/numscroller/gh-pages/numscroller-1.0.js"></script>
  


    <script src="{{Request::root()}}/website/js/jquery-3.1.1.min.js"></script>
    <script src="{{Request::root()}}/website/js/style.js"></script>
    <script src="{{Request::root()}}/website/js/wow.min.js"></script>
    <script src="{{Request::root()}}/website/js/jquery.nicescroll.min.js"></script>



    <script>
        new WOW().init();
    </script>
 

     @yield('footer')

</body>

</html>