@extends('admin.layout.app')
@section('content')

    <div style="visibility: hidden" class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
        </div>
    </div>

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label mb-3">All Coins</h6>
        <a href="{{ route('admin.coin-picker.create') }}" class="mt-3 mb-3 btn btn-primary">Add Coin</a>

        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Percent</th>
                    <th>Movement</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($coins as $item)
                <tr>
                    <th scope="row">{{ date('d M, Y', strtotime( $item->created_at)) }}</th>
                    <td><img height="50" width="50" src="{{ asset('cryptodoor/'.$item->image ) }}" alt=""></td>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->percent }}%</td>
                    <td>{!! $item->status() !!} {{ $item->percent }}%</td>
                    <td>
                       <div class="row">
                            <div class="mr-3">
                                <a href="{{ route('admin.coin-picker.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </div>
                           <div class="">
                               <form method="POST" action="{!! route('admin.coin-picker.destroy', $item->id) !!}" accept-charset="UTF-8">
                                   <input name="_method" value="DELETE" type="hidden">
                                   {{ csrf_field() }}

                                   <div class="btn-group btn-group-xs pull-right" role="group">
                                       <button type="submit" class="btn btn-sm  btn-danger"  onclick="return confirm(&quot;Delete Coin Picker?&quot;)">
                                           Delete
                                       </button>

                                   </div>

                               </form>

                           </div>
                       </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- bd -->


    </div><!-- br-section-wrapper -->
</div>

@endsection
