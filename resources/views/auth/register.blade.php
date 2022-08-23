
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title> Cryptodoor | Your only door to Crypto</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
</head>

<body>

<div class="d-flex align-items-center justify-content-center ht-100v">
    <img src="{{ asset('img/bg.jpg') }}" class="wd-100p ht-100p object-fit-cover" alt="">
    <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
            <div class="signin-logo tx-center tx-28 tx-bold tx-white">
                <span class="tx-normal"></span> Crypto<span class="tx-info">Door</span> <span class="tx-normal"></span></div>
{{--            <div class="tx-white-5 tx-center mg-b-60">Join </div>--}}

            <form class="mt-4" action="{{ route('register') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <input type="text" name="name" class="form-control fc-outline-dark" placeholder="Enter your Full-Name">
                </div>
                <div class="form-group">
                    <input type="email" autocomplete="off" name="email" class="form-control fc-outline-dark" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control fc-outline-dark" placeholder="Enter your Username">
                </div>
                <!-- form-group -->
                <div class="form-group">
                    <input type="password" name="password" class="form-control fc-outline-dark" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control fc-outline-dark" placeholder="Confirm password">
                </div>
                <!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>

            <div class="mg-t-60 tx-center">Have an account? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
        </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
</div><!-- d-flex -->

<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



</body></html>
