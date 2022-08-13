
<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>Admin Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Crypto<i>Door</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('admin.dashboard') }}" class="br-menu-link active">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fa fa-newspaper tx-20"></i>
                <span class="menu-item-label"> Crypto News</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.crypto-news.create') }}" class="sub-link">Add Crypto News</a></li>
                <li class="sub-item"><a href="{{ route('admin.crypto-news.index') }}" class="sub-link">All Crypto News</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fas fa-coins tx-20"></i>
                <span class="menu-item-label"> Coin Picker</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.coin-picker.create') }}" class="sub-link">Add Coin</a></li>
                <li class="sub-item"><a href="{{ route('admin.coin-picker.index') }}" class="sub-link">All Coins</a></li>
            </ul>
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fas fa-paperclip tx-20"></i>
                <span class="menu-item-label"> News Update</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.news-update.create') }}" class="sub-link">Add News</a></li>
                <li class="sub-item"><a href="{{ route('admin.news-update.index') }}" class="sub-link">All News</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fas fa-book-open tx-20"></i>
                <span class="menu-item-label"> Learn Crypto</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.learn-crypto.create') }}" class="sub-link">Add </a></li>
                <li class="sub-item"><a href="{{ route('admin.learn-crypto.index') }}" class="sub-link">All </a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('admin.community.create') }}" class="br-menu-link">
                <i class="menu-item-icon fa fa-users tx-20 mr-1"></i>
                <span class="menu-item-label"> The Community</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fa fa-calendar tx-20"></i>
                <span class="menu-item-label"> Crypto Events</span>
            </a>
            <!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.crypto-event.create') }}" class="sub-link">Add Event</a></li>
                <li class="sub-item"><a href="{{ route('admin.crypto-event.index') }}" class="sub-link">All Events</a></li>
            </ul>
        </li>
        <!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon fa fa-running tx-20"></i>
                <span class="menu-item-label"> Coming Soon</span>
            </a>
            <!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.coming-soon.create') }}" class="sub-link">Add </a></li>
                <li class="sub-item"><a href="{{ route('admin.coming-soon.index') }}" class="sub-link">All </a></li>
            </ul>
        </li>


    </ul><!-- br-sideleft-menu -->


</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-email-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>

            </div><!-- dropdown -->

            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ auth()->user()->name }}</span>
                    <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">{{ auth()->user()->name }}</h6>
                        <p>{{ auth()->user()->email }}</p>
                    </div>

                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-shield"></i> Security</a></li>
                        <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul><!-- sidebar-tabs -->


</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">

   @yield('content')
    <!-- br-pagebody -->

    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
            <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
    </footer>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('lib/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('lib/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('lib/rickshaw/vendor/d3.min.js') }}"></script>
<script src="{{ asset('lib/rickshaw/vendor/d3.layout.min.js') }}"></script>
<script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('lib/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('lib/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('lib/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('lib/select2/js/select2.full.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
<script src="{{ asset('lib/gmaps/gmaps.min.js') }}"></script>

<script src="{{ asset('js/bracket.js') }}"></script>
<script src="{{ asset('js/map.shiftworker.js') }}"></script>
<script src="{{ asset('js/ResizeSensor.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });

    {{--CKEDITOR.replace('wysiwyg-editor', {--}}
    {{--    filebrowserUploadUrl: "{{route('admin.article.store', ['_token' => csrf_token() ])}}",--}}
    {{--    filebrowserUploadMethod: 'form'--}}
    {{--});--}}
</script>
</body>
</html>
