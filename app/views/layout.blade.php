<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GvCake</title>
        <meta name="keywords" content="Ragmo, Ragnarok, RO, GvG, Video" />
        <meta name="author" content="Ragmo." />
        <meta name="description" content="Ragnarok Online Video Sharing Fan Site." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <style>
            @section('styles')
            body {
                padding: 30px;
            }

            .navbar {
                margin-bottom: 30px;
            }
            @show
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Container -->
        <div class="container">
            <!-- Navbar -->
            <div class="navbar">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Gvけーひ帳</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Notifications -->
            @include('notifications')

            <!-- Content -->
            @yield('content')

            <hr />

            <!-- Footer -->
            <footer>
                <p>&copy; Cranberry C.C. {{ date('Y') }}</p>
            </footer>
        </div>

    </body>
</html>
