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

    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
        </div>
    </div>
    <div class="main_content">


        <div class="container">

            <!--  course feature -->

            <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4">Latest Coin Picked </h4>

                <div class="relative -mx-1 uk-slider" uk-slider="finite: true">

                    <div class="uk-slider-container md:px-1 px-2 py-3">

                        <table>
                            <tr>
                                <th>SYM</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>24h Change</th>
                            </tr>
                            @foreach($coins as $item)
                            <tr>
                                <td><img style="border-radius: 50%" height="80" width="50" src="{{ asset('cryptodoor/'.$item->image) }}" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{!! $item->user_status() !!} {{ $item->percent }}%</td>
                            </tr>
                            @endforeach
                        </table>

                    </div>

                </div>

            </div>


        </div>

        @include('dashboard.layout.footer')

    </div>


@endsection
