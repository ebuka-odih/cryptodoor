@extends('dashboard.layout.app')
@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4> News Update</h4>
        </div>
    </div>
    <div class="main_content">
        <div class="container">

            <div class="text-2xl font-semibold"> News Update</div>

            <div class="lg:flex lg:space-x-4 lg:-mx-4 mt-6">

                <div class="lg:w-10/12">
                    <div class="divide-y tube-card px-6 md:m-0 -mx-5 py-2">
                        @foreach($news as $item)
                            <div class="md:flex md:space-x-6 py-5">
                                <a href="{{ route('user.news.show', $item->id) }}">
                                    <div class="md:w-56 w-full h-36 overflow-hidden rounded-lg relative shadow-sm">
                                        <img src="{{ asset('cryptodoor/'.$item->image) }}" alt="" class="w-full h-full absolute inset-0 object-cover">
                                        <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                           News Update
                                        </div>
                                    </div>
                                </a>
                                <div class="flex-1 md:pt-0 pt-4">

                                    <a href="{{ route('user.newsupdate.show', $item->id) }}" class="text-lg font-semibold line-clamp-2 leading-8"> {{ $item->title }}</a>
                                    <p style="margin-top: 3px" class="line-clamp-2"> {{ $item->description }} </p>


                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!--  Sidebar  -->
                <div class="lg:w-80 w-full">

                    <div class="space-y-5" uk-sticky="offset:22; bottom:true ; top:30 ; animation: uk-animation-slide-top-small">

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


                    </div>

                </div>

            </div>


        </div>

        <!-- footer -->
        @include('dashboard.layout.footer')

    </div>


@endsection
