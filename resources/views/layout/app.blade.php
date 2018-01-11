<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Sta Maria. Paluwagan 2018</title>

        <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!--<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />-->
        <style>
        input.no-block{
          width: 135px;
        }

        .profile-pic
        {
          width: 250px;
          height: 250px;
          margin: 0 auto;
        }

        .caption div {
            box-shadow: 0 0 5px #C8C8C8;
            transition: all 0.3s ease 0s;
        }
        .img-circle {
            border-radius: 50%;
        }
        .img-circle {
            border-radius: 0;
        }

        .ratio {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;

            height: 0;
            padding-bottom: 100%;
            position: relative;
            width: 100%;
        }
        .img-circle {
            border-radius: 50%;
        }
        .img-responsive {
            display: block;
            height: auto;
            max-width: 100%;
        }

        </style>
    </head>
    <body>

      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sta Maria. Paluwagan 2018</a>
          </div>


          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>
              -->
            <ul class="nav navbar-nav navbar-right">
              @if(Auth::guest())
                <li><a href="{{ route('auth.login') }}"><i class="fa fa-user fa-fw"></i> Login</a></li>
              @else
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                <li><a href="{{ route('shares.manage') }}"><i class="fa fa-money fa-fw"></i> Shares</a></li>
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"><i class="fa fa-user-circle fa-fw"></i> Profile</a></li>
                <li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
              @endif
            </ul>

          </div>
        </div>
        </nav>

        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    </body>
</html>
