@extends('dashboard.layout.app')
@section('content')

<div class="main_content">
    <div class="container p-0">

        <div class="lg:flex lg:space-x-4 lg:-mx-4">

            <div class="lg:w-9/12 lg:space-y-6">

                <div class="tube-card">

                    <div class="h-44 mb-4 md:h-72 overflow-hidden relative rounded-t-lg w-full">
                        <img src="{{ asset('cryptodoor/'.$post->image) }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                    </div>

                    <div class="md:p-6 p-4">

                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> {{ $post->title }}</h1>

                        <div class="flex items-center space-x-3 my-3 pb-4 border-b">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="w-10 rounded-full">
                            <div>
                                <div class="text-base font-semibold"> Cryptodoor</div>
                                <div class="text-xs"> Published on {{ date('M d, Y', strtotime($post->created_at)) }} </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <p>
                                {!! $post->description !!}
                            </p>


                        </div>


                    </div>

                </div>

                <!-- related articles -->
                <div class="tube-card md:p-6 p-3 relative">

                    <h1 class="block text-xl font-semibold"> Related Articales </h1>

                    <div class="relative uk-slider" uk-slider="finite: true">

                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(-196.031px, 0px, 0px);">
                              @foreach($news as $item)
                                <li tabindex="-1" class="uk-active">
                                    <div>
                                        <a href="{{ route('user.news.show', $item->id) }}" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                            <img src="{{ asset('cryptodoor/'.$item->image) }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        </a>
                                        <div class="pt-3">
                                            <a href="{{ route('user.news.show', $item->id) }}" class="font-semibold line-clamp-2"> Awesome Web Dev Tools and Resources For 2021 in 30 Minutes </a>
                                            <div class="pt-2">
{{--                                                <p class="text-sm"> Anoundi hellows</p>--}}

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon> </a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline" role="img" class="md hydrated" aria-label="chevron forward outline"></ion-icon></a>

                        </div>

                    </div>

                </div>



            </div>


            <!--  Sidebar  -->
            <div class="lg:w-80 w-full mt-4 lg:mt-0">

                <div class="space-y-5 uk-sticky" uk-sticky="offset:22; bottom:true ; top:30 ; animation: uk-animation-slide-top-small" style="">

                    <div class="tube-card p-6">
                        <div class="flex items-start justify-between">
                            <div>
                                <h4 class="text-lg -mb-0.5 font-semibold"> Featured  </h4>
                            </div>
                        </div>
                        <ul>
                            @foreach($featured as $item)
                                <li>
                                    <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                        <h3 class="font-medium line-clamp-2"> {{ $item->title }} </h3>
                                        <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                            <div>{{ date('M d, Y', strtotime($item->created_at)) }}</div> <div class="pb-1"> . </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                </div><div class="uk-sticky-placeholder" style="height: 626px; margin: 0px;" hidden=""></div>

            </div>

        </div>

    </div>

    <!-- footer -->
    <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <p class="capitalize font-medium"> ?? copyright 2021  Courseplus</p>
            <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                <a href="#"> About</a>
                <a href="#"> Help</a>
                <a href="#"> Terms</a>
                <a href="#"> Privacy</a>
            </div>
        </div>
    </div>

</div>

@endsection
