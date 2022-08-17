@extends('dashboard.layout.app')
@section('content')

<div class="main_content">

    <div class="lg:pt-16" style="background: #f8f9fa;">

        <div class="container m-auto px-4">

            <div class="md:flex justify-between items-center">
                <div class="md:w-5/12 md:order-1 md:block hidden">
                    <img src="{{ asset('assets/images/help.png') }}" alt="" class="lg:w-auto w-44 mx-auto">
                </div>
                <div class="md:w-6/12 md:text-left text-center">

                    <div class="md:text-3xl text-xl font-semibold mb-7"> Join Our Community </div>






                </div>
            </div>

        </div>

        <div class="-mt-2 lg:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 220" class="text-white fill-current">
                <path d="M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z">
                </path>
            </svg>
        </div>


    </div>
    <div class="bg-white lg:py-10 py-8">
        <div class="container m-auto px-6 lg:-mt-44">

            <div class="grid lg:grid-cols-2 gap-6">

                <!--  card 1 -->
                <a href="{{ setting('discord') }}" target="_blank">
                    <div class="p-8 lg:flex items-start rounded-lg bg-white shadow-sm border hover:shadow-lg">
                        <img src="{{ asset('assets/images/discord.png') }}" alt="" class="lg:w-24 lg:h-14 w-10 h-10 mb-2 object-cover">
                        <div class="space-y-3 lg:ml-4">
                            <h1 class="text-xl font-semibold  text-blue-600"> Our Discord </h1>
                            <p class="text-gray-600">Join Our Discord channel for exclusive updates </p>
                        </div>

                    </div>
                </a>

                <!--  card 2 -->
                <a href="{{ setting('telegram') }}" target="_blank">
                    <div class="p-8 lg:flex items-start rounded-lg bg-white shadow-sm border hover:shadow-lg">
                        <img src="{{ asset('assets/images/telegram.png') }}" alt="" class="lg:w-24 lg:h-14 w-10 h-10 mb-2 object-cover">
                        <div class="space-y-3 lg:ml-4">
                            <h1 class="text-xl font-semibold  text-blue-600"> Our Telegram </h1>
                            <p class="text-gray-500">Join Our Telegram Community to meet and discourse with members worldwide </p>

                        </div>

                    </div>
                </a>


            </div>

        </div>
    </div>


    <!-- footer -->
    <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
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
