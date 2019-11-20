<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" media="screen" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/style-portfolio.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/picto-foundry-food.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"//>
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ URL::asset('favicon-1.ico') }}" type="image/x-icon"/>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Wonderfood</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#about">ABOUT</a></li>
                            <li><a class="color_animation" href="/login">SIGNIN</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
              </div><!-- /.container-fluid -->
        </nav>

        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/jquery-1.10.2.min.js') }}"> </script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.mixitup.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}" ></script>

    </body>
</html>
