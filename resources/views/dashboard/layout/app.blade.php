
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Cryptodoor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/uikit.css">
    <link rel="stylesheet" href="http://demo.foxthemes.net/courseplus-v4.3.1/assets/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

<div id="wrapper" class="is-verticle">

    <!--  Header  -->
    <header uk-sticky>
        <div class="header_inner">
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('index') }}">
                        <h3 style="font-weight: bolder;" class="text-primary">Cryptodoor</h3>
                    </a>
                </div>
                <!-- icon menu for mobile -->
                <div class="triger" uk-toggle="target: #wrapper ; cls: is-active">
                    <i class="fa fa-toggle-up"></i>
                </div>

            </div>
            <div class="right-side">

                <!-- Header search box  -->
                <div class="header_search"><i class="uil-search-alt"></i>
                    <div uk-drop="mode: click;offset:10" class="header_search_dropdown">


                    </div>
                </div>

                <div>

                    <!-- search icon for mobile -->
                    <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>







                    <!-- profile -->
                    <a href="#">
                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/avatars/placeholder.png" class="header_widgets_avatar" alt="">
                    </a>
                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                        <ul>
                            <li>
                                <a href="#" class="user">
                                    <div class="user_avatar">
                                        <img src="http://demo.foxthemes.net/courseplus-v4.3.1/assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user_name">
                                        <div> {{ auth()->user()->username }} </div>
                                        <span>  {{ auth()->user()->email }} </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>

                            <li>
                                <hr>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                    My Account
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                                    Account Settings
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>

                            <li>
                                <a href="#">
                                    <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </header>

    <!-- Main Contents -->

   @yield('content')

    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar_inner" data-simplebar>

            <ul class="side-colored">
                <li><a href="{{ route('user.dashboard') }}">
                        <ion-icon name="home" class="side-icon"> </ion-icon>
                        <span> Dashboard</span>
                    </a>
                </li>
                <li class=""><a href="{{ route('user.news') }}">
                        <ion-icon name="newspaper" class="side-icon">  </ion-icon>
                        <span> Crypto News</span>
                    </a>
                </li>
                <li><a href="{{ route('user.coins') }}">
                        <ion-icon name="compass" class="side-icon"> </ion-icon>
                        <span> Coin Picker</span>
                    </a>
                </li>
                <li><a href="{{ route('user.news.update') }}">
                        <ion-icon name="play-circle" class="side-icon"> </ion-icon>
                        <span> News Update</span>
                    </a>
                </li>
                <li><a href="books.html">
                        <ion-icon name="book" class="side-icon"> </ion-icon>
                        <span> Learn Crypto </span>
                    </a>
                </li>
                <li><a href="categories.html">
                        <ion-icon name="albums" class="side-icon"> </ion-icon>
                        <span> Community </span>
                    </a>
                </li>
                <li><a href="episodes.html">
                        <ion-icon name="film" class="side-icon">  </ion-icon>
                        <span> Crypto Events </span>
                    </a>
                </li>
                <li><a href="{{ route('user.coins') }}">
                        <ion-icon name="compass" class="side-icon"> </ion-icon>
                        <span> Coming Soon</span>
                    </a>
                </li>


            </ul>

            <ul class="side_links" data-sub-title="Pages">
                <li><a href="page-setting.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon> Setting </a></li>

            </ul>


        </div>

        <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
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

<script>
    let browser_active = ((typeof document.hasFocus != 'undefined' ? document.hasFocus() : 1) ? 1 : 0);
    if (!browser_active) {
        // active
    }
</script>
</body>


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/blogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 12:04:01 GMT -->
</html>
