<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> سامانه تیکت</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<body>
    <nav class="navbar justify-content-end d-xl-none navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link text-right " href="#">پروفایل کاربری</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-right " href="#"> خروج</a>
            </li>
          </ul>

        </div>
      </nav>
    <div class="hero-header">
        <div>
            <div class="img-path">
            </div>
        </div>
        <div class="container-fluid d-flex flex-column landing pt-2 pb-3 py-md-5">
            <p >به سامانه مردم ما خوش آمدید</p>
            <div class="mt-4">
                <div class="row justify-content-center justify-content-xl-start align-items-center">
                    <a href="{{url('ertebat/gworks')}}" class="col-md-3 mb-4">
                        <div class="landing-sections">
                            <img class="img-fluid mx-auto mx-md-0 ml-md-auto" src="{{url('img/landing/1.jpg')}}" alt="">

                        </div>
                    </a>
                    <a href="{{url('ertebat/request')}}" class="col-md-3 mb-4">
                        <div class="landing-sections">
                            <img class="img-fluid mx-auto" src="{{url('img/landing/2.jpg')}}" alt="">

                        </div>
                    </a>
                </div>
                <div class="row justify-content-center justify-content-xl-start align-items-center">
                    <a href="{{url('ertebat/survey')}}" class="col-md-3">
                        <div class="landing-sections">

                            <img class="img-fluid mx-auto mx-md-0 ml-md-auto" src="{{url('img/landing/4.jpg')}}" alt="">

                        </div>
                    </a>
                    <a href="{{url('ertebat/forums')}}" class="col-md-3">
                        <div class="landing-sections mt-4 mt-md-0">
                            <img class="img-fluid mx-auto" src="{{url('img/landing/3.jpg')}}" alt="">

                        </div>
                    </a>
                </div>
            </div>

                <div class="position-fixed  button-group d-none d-xl-block">
                    <a class="btn btn-danger" href="{{ route('logout') }}">خروج</a>
                    <a class="btn btn-dark" href="{{ route('profile.index') }}">پروفایل کاربری</a>
                </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</body>
</html>
