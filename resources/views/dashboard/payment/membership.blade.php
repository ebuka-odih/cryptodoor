@extends('dashboard.layout.app')
@section('content')
    <style>
        button {
            border: 1px solid;
            width: 220px;
        }
    </style>

    <div class="main_content">
        <div class="container">
            <div class="flex flex-col items-center lg:py-6 text-center">
                <h3 class="mt-2 mb-2.5 font-semibold text-2xl lg:text-3xl">Membership Pricing Plans </h3>
                <p>
                    The Plans are set to be very simple , to enable individuals and companies worldwide to feel Real Crypto and Experience professional Strategies with the best Community.
                </p>
                <ul class="bg-gray-100 font-medium inline-flex my-4 px-1.5 py-2.5 pricing-swicher rounded-md space-x-1 mt-6" uk-switcher="connect: .change-plan ;animation: uk-animation-slide-top-medium, uk-animation-scale-up">
                    <li class="uk-active"><a class="py-2 px-8 rounded-md whitespace-nowrap" href="#">Yearly billing</a></li>
                </ul>
            </div>

            <div class="grid lg:grid-cols-3 lg:mt-20 mt-4 lg:gap-y-0 gap-y-5">

                <!-- card-1 -->

                <div class="bg-white p-8 rounded-l-lg shadow space-y-2">

                    <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Basic Plan</h4>
                    <p> To start your learning to day you will get free 10 Course .</p>

                    <div class="bg-gray-100 p-3 rounded space-x-1.5">
                        <ul class="uk-switcher change-plan" style="touch-action: pan-y pinch-zoom;">
                            <li class="flex items-end justify-center uk-active">
                                <div class="font-semibold text-3xl"> $35 </div>
                            </li>
                        </ul>
                    </div>


                    <ul class="py-3 space-y-1 text-gray-500">
                        <li>-Get Full Access ( Become a Member).</li>
                        <li>-Get Access to All Resources and also Professional Coaching</li>
                        <li>- Access to All Crypto Event Worldwide</li>
                        <li>- Hotel Reservation and Assistance</li>
                        <li>- Support and Assistance with all Crypto/Tech Needs</li>
                    </ul>


                    <form action="{{ route('user.payment') }}" method="POST" target="_blank">
                        @csrf
                        <input type="hidden" name="plan" value="Basic Plan">
                        <input type="hidden" name="price" value="35" >
                        <button class="block border p-3 rounded-md  text-center text-purple-900 text-sm">
                            Get Started
                        </button>
                    </form>

{{--                        <a href="" class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>--}}
                </div>

                <!-- card-2 -->
                <div class="bg-white pt-16 lg:pt-8 p-8 shadow-xl space-y-2 relative -my-3 rounded-b-md">

                    <div class="lg:-top-10 top-0 absolute bg-blue-600 left-0 p-3 rounded-t-md text-center text-white w-full font-semibold"> Recommended </div>

                    <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> Pro Plan</h4>
                    <p> To start your learning to day you will get free 10 Course .</p>

                    <div class="bg-gray-100 p-3 rounded space-x-1.5">
                        <ul class="uk-switcher change-plan" style="touch-action: pan-y pinch-zoom;">
                            <li class="flex items-end justify-center uk-active">
                                <div class="font-semibold text-3xl"> $145 </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="py-3 space-y-1 text-gray-500">
                        <li>-Get Full Access ( Become a Member).</li>
                        <li>-Get Access to All Resources and also Professional</li>
                        <li>-Get Crypto Jobs , Work with the Team.</li>
                        <li>-Easy Flight Reservations for Crypto Events Worldwide</li>
                        <li>-Exclusive Hotels Options and Support.</li>
                    </ul>
                    <br>
                    <form action="{{ route('user.payment') }}" method="POST" target="_blank">
                        @csrf
                        <input type="hidden" name="plan" value="Pro Plan">
                        <input type="hidden" name="price" value="145" >
                        <button style="background-color: #2463eb; color: white" class="block border p-3 rounded-md  text-center text-purple-900 text-sm">
                            Get Started
                        </button>
                    </form>


{{--                    <a href="#" class="bg-blue-600 block p-3 rounded-md space-x-1.5 text-center text-sm text-white">Get Started </a>--}}

                </div>

                <!-- card-3 -->
                <div class="bg-white p-8 rounded-r-lg shadow space-y-2">


                    <h4 class="font-semibold text-lg sm:text-2xl text-purple-900"> For Teams</h4>
                    <p> To start your learning to day you will get free 10 Course .</p>

                    <div class="bg-gray-100 p-3 rounded space-x-1.5">
                        <ul class="uk-switcher change-plan" style="touch-action: pan-y pinch-zoom;">
                            <li class="flex items-end justify-center uk-active">
                                <div class="font-semibold text-3xl"> $590 </div>
                            </li>
                        </ul>
                    </div>


                    <ul class="py-3 space-y-1 text-gray-500">
                        <li>-Get Full Access ( Become a Member).</li>
                        <li>-Get Access to All Resources and also Professional Coaching</li>
                        <li>-Access To Exclusive Crypto Jobs</li>
                        <li>-Access to VIPs Zooms and Meetings</li>
                        <li>-VIP Hotel and Flights Reservation Options for all Crypto Events.</li>
                        <li>-Top Priority Trading.</li>
                    </ul>

                    <form action="{{ route('user.payment') }}" method="POST" target="_blank">
                        @csrf
                        <input type="hidden" name="plan" value="Teams Plan">
                        <input type="hidden" name="price" value="590" >
                        <button  class="block border p-3 rounded-md  text-center text-purple-900 text-sm">
                            Get Started
                        </button>
                    </form>
{{--                    <a href="#" class="block border p-3 rounded-md space-x-1.5 text-center text-purple-900 text-sm">Get Started </a>--}}
                </div>


            </div>


            <div class="my-20">

                <div class="lg:text-center my-2">
                    <div> Faq </div>
                    <div class="mb-6 font-semibold lg:text-2xl text-lg"> Frequently Asked Question :</div>
                </div>

                <div class="grid lg:grid-cols-2 gap-5">

                    <div>
                        <div class="text-lg font-medium mb-2"> What is The Main Goal Of Crypto Door ?</div>
                        <div> The aim of The Crypto Door Organisation is to unite all individuals of the crypto ecosystem to create and support a friendly environment to develop and Promote an Effective Mechanism of streamlined Growth for each member , And increase in Net-worth and Experience per Person.
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-medium mb-2"> Is Crypto Hard To Understand and Follow Up in ?</div>
                        <div>Understanding Crypto is quite the easiest Part of Crypto, We as a Team are focused on Creating easier methods to Learn and Earn with Crypto, For freshly new comers , we have a Beginner friendly approach to Ensure maximum efficacy and enable Growth in the Long Run.
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-medium mb-2"> How do I get Exclusive Tickets to Crypto Event all Around the world? </div>
                        <div> You have To be a Member Firstly , So After Registration and Completing your status you have everything you need inside.
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-medium mb-2"> How do I master Productivity in Crypto and NFTs? </div>
                        <div> Productivity is mastered , and here you have true coaches to ensure you have the Same Virtue , it’s easy when you have a guide to follow.
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-medium mb-2"> What if I have no Money to Fully Start in Crypto? </div>
                        <div> Starting with no money in crypto can be Tricky especially when you don’t do it right, You can get The best Jobs and Tricks you can learn to Scale up Quickly.
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-medium mb-2"> What Ways do Members interact , what is the medium used to Learn and Talk to others? </div>
                        <div> Everything is Done Exclusively, The way to find out is to get Registered.
                        </div>
                    </div>
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
