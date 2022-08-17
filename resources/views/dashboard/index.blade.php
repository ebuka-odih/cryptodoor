@extends('dashboard.layout.app')
@section('content')

  <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>


    <div class="main_content">

        <!-- Slideshow -->
        <div class="uk-position-relative uk-visible-toggle overflow-hidden lg:-mt-20 uk-slideshow" tabindex="-1" uk-slideshow="animation: scale ;min-height: 200; max-height: 450 ;autoplay: t rue">

            <ul class="uk-slideshow-items rounded" style="min-height: 450px;">
                <li tabindex="-1" class="uk-active uk-transition-active uk-transition" style="opacity: 0; transform: scale3d(1.5, 1.5, 1); z-index: 0; transition-property: opacity, transform, z-index; transition-duration: 870ms; transition-timing-function: ease;">
                    <div class="uk-position-cover uk-transition" uk-slideshow-parallax="scale: 1.2,1.2,1" style="transform: scale(1); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;">
                        <img src="{{ asset('assets/images/hero-1.jpg') }}" class="object-cover uk-cover" alt="" uk-cover="" style="height: 450px; width: 1509px;">
                    </div>
                    <div class="container relative md:p-20 md:mt-7 p-5 h-full">
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3 uk-transition" style="transform: scale(0.8); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold uk-transition" style="transform: translateY(0px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2 uk-transition" style="transform: translateY(0px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,50" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32 uk-transition" style="transform: translateY(50px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Get Started </a>
                        </div>
                    </div>
                </li>
                <li tabindex="-1" class="uk-active uk-transition" style="z-index: -1; transition-property: z-index; transition-duration: 870ms; transition-timing-function: ease;">
                    <div class="uk-position-cover uk-transition" uk-slideshow-parallax="scale: 1.2,1.2,1" style="transform: scale(1.2); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;">
                        <img src="{{ asset('assets/images/hero-2.jpg') }}" class="object-cover uk-cover" alt="" uk-cover="" style="height: 450px; width: 1727px;">
                    </div>
                    <div class="container relative md:p-20 md:mt-7 p-5 h-full">
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3 uk-transition" style="transform: scale(1); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold uk-transition" style="transform: translateY(0px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2 uk-transition" style="transform: translateY(0px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,0" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32 uk-transition" style="transform: translateY(0px); transition-property: transform, filter; transition-duration: 870ms; transition-timing-function: ease;"> Get Started </a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="uk-slideshow-nav uk-dotnav absolute bottom-0 left-0 m-7 lg:flex hidden"><li uk-slideshow-item="0" class=""><a href=""></a></li><li uk-slideshow-item="1" class="uk-active"><a href=""></a></li></ul>
        </div>

        <div class="container">

            <!--  course feature -->
            <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                <h2 class="text-2xl font-semibold"> Featured Crypto News   </h2>
            </div>

            <div class="relative -mt-3 uk-slider" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-1@m uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                        @foreach($featured as $item)

                         <li tabindex="-1" class="">

                                    <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                                        <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                                            <img src="{{ asset('cryptodoor/'.$item->image) }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        </div>
                                        <div class="flex-1 md:p-6 p-4">
                                            <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed"> {{ $item->title }} </div>
                                            <div class="mt-2 md:block hidden">
                                                <p class="line-clamp-2">{!!  Str::of($item->description)->words(20, '...') !!}</p>
                                            </div>
                                            <div style="margin-top: 15px" class="flex space-x-2 items-center text-sm pt-3">
                                                <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs ">
                                                    Crypto News
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                        @endforeach

                    </ul>
                </div>

                <a class="absolute bg-white uk-position-center-left -ml-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i  class="fa fa-arrow-circle-left"></i></a>
                <a class="absolute bg-white uk-position-center-right -mr-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>

            <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4">Latest Coin Picked </h4>

                <div class="relative -mx-1 uk-slider" uk-slider="finite: true">

                    <div class="uk-slider-container md:px-1 px-2 py-3">

                        <table>
                            <tr>
                                <th>SYM</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>24 Changes</th>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('cryptodoor/') }}" alt=""></td>
                                <td>Bitcoin</td>
                                <td>4000</td>
                                <td>40</td>
                            </tr>
                        </table>

                    </div>

                </div>

            </div>


            <!--  slider courses -->
            <div class="sm:my-4 my-3 flex items-end justify-between pt-3">
                <h2 class="text-2xl font-semibold">Featured News Update </h2>
                <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
            </div>


            <div class="mt-3">

                <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden=""> <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon> Featured today </h4>

                <!--  slider -->
                <div class="mt-3">

                    <h4 class="py-3 border-b font-semibold text-grey-700  mx-1 mb-4" hidden=""> <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon> Featured today </h4>

                    <div class="relative uk-slider" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">

                            <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                                @foreach($featured_news as $item)
                                <li tabindex="-1" class="uk-active">

                                    <a href="course-intro.html" class="uk-link-reset">
                                        <div class="card uk-transition-toggle">
                                            <div class="card-media h-40">
                                                <div class="card-media-overly"></div>
                                                <img src="{{ asset('cryptodoor/'.$item->image) }}" alt="" class="">
                                            </div>

                                            <div  class="card-body p-4">
                                                <div class="font-semibold line-clamp-2"> {{ $item->title }} </div>
                                                <div style="margin: 5px" class="flex space-x-2 items-center text-sm pt-3">
                                                    <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs ">
                                                        News Update
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </li>
                                @endforeach



                            </ul>

                            <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                            <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                        </div>
                    </div>

                </div>

            </div>



            <!--  episcodes  -->
            <!-- this is user toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
            <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4"> Latest Crypto Events </h4>

                <div class="relative -mx-1 uk-slider" uk-slider="finite: true">

                    <div class="uk-slider-container md:px-1 px-2 py-3">
                        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                           @foreach($learn_crypto as $item)
                            <li tabindex="-1" class="uk-active">
                                <a href="episodes-watch.html">
                                    <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                        <img src="{{ asset('cryptodoor/'.$item->image) }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    </div>
                                </a>
                                <div class="pt-3">
                                    <a href="episodes-watch.html" class="font-semibold line-clamp-2">  {{ $item->title }}  </a>
                                    <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                        Crypto Event
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>

                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon> </a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline" role="img" class="md hydrated" aria-label="chevron forward outline"></ion-icon></a>

                    </div>

                </div>

            </div>


        </div>

     @include('dashboard.layout.footer')

    </div>


@endsection
