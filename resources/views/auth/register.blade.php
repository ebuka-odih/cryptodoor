
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 12:04:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
          ================================================== -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
      ================================================== -->
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/icons.css">

    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/uikit.css">
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important;
        }
    </style>

</head>

<body>


<div id="wrapper" class="flex flex-col justify-between h-screen">

    <!-- header-->
    <div class="bg-white py-4 shadow dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">


            <div class="flex items-center lg:justify-between justify-around">

                <a href="{{ route('index') }}">
                    <h2 style="font-weight: bolder; color: #620F5FFF; font-size: 24px">Cryptodoor</h2>
{{--                    <img src="{{ asset('img/logo2.png') }}" alt="" class="w-32">--}}
                </a>

                <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                    <a href="login" class="py-3 px-4">Login</a>
                    <a href="register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Content-->
    <div>
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            <form action="{{ route('register') }}" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method="POST">
                @csrf
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label class="mb-0" for="first-name"> Full Name </label>
                    <input type="text" name="name" placeholder="Your Name"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="username"> Username </label>
                    <input type="text" name="username" autocomplete="off" placeholder="Username" id="username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="email"> Email Address </label>
                    <input type="email" name="email" placeholder="Info@example.com" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="password"> Password </label>
                    <input type="password" name="password" placeholder="******" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0" for="password">Confirm Password </label>
                    <input type="password" name="password_confirmation" placeholder="******" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked="">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                    </label>
                </div>

                <div>
                    <button type="button" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started</button>
                </div>
            </form>


        </div>
    </div>

    <!-- Footer -->

    <div class="lg:mb-5 py-3 uk-link-reset">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <div class="flex space-x-2 text-gray-700 uppercase">
                <a href="#"> About</a>
                <a href="#"> Help</a>
                <a href="#"> Terms</a>
                <a href="#"> Privacy</a>
            </div>
            <p class="capitalize"> © copyright 2021 by Courseplus</p>
        </div>
    </div>

</div>

<!-- Javascript
================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
<script src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/js/uikit.js"></script>
<script src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/js/tippy.all.min.js"></script>
<script src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/js/simplebar.js"></script>
<script src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/js/custom.js"></script>
<script src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 12:04:12 GMT -->
</html>
